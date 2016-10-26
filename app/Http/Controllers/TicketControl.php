<?php

namespace App\Http\Controllers;

use App\Tickets;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class TicketControl extends Controller
{
    //Ticket and answering operations here

    public function MakeNew(){
        if(\Session::get('Login')!="True")
        {
            return redirect('/UserArea');
        }
        // here we Make a new ticket
        // adding to database
        //redirecting to the tickets page and reload
        return view('Pannel/new-ticket')->with(['UserName'=>\Session::get('UserName')]);
    }
    public function MakeTicket(){
        $code=$this->randString(30);
        $ticket=new Tickets();
        $ticket->Ticket_Id=$code;
        $ticket->Sender_Type=false;
        $ticket->Text=Input::get('Text');
        $ticket->Subject=Input::get('Subject');
        $user=User::where('UserName',\Session::get('UserName'))->first();
        $id=$user->UserId;
        $ticket->UserId=$id;
        $ldate = date('Y-m-d H:i:s');
        $ticket->Date=$ldate;
        $ticket->Seen=true;
        $ticket->SeenBack=false;
        $ticket->Start=true;
        $ticket->Closed=false;
        $ticket->save();
//        echo $ldate;
//        echo $id;
//        echo $code;
        return redirect('/Tickets');
    }
    public function randString($length, $charset='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789')
    {
        $str = '';
        $count = strlen($charset);
        while ($length--) {
            $str .= $charset[mt_rand(0, $count-1)];
        }
        return $str;
    }
    public function MakeAnswer(){
        //retriving the original question
        $code=$_GET['ticket'];
        $oticket=Tickets::where('Ticket_Id',$code)->first();
        $ticket=new Tickets();
        $ticket->Date=date('Y-m-d H:i:s');
        $ticket->Text=Input::get('Text');
        $ticket->Start=false;
        $ticket->SeenBack=false;
        $ticket->Subject=$oticket->Subject;
        $ticket->Seen=$oticket->Seen;
        $ticket->Closed=false;
        $ticket->Ticket_Id=$oticket->Ticket_Id;
        $ticket->Sender_Type=$oticket->Sender_Type;
        $ticket->UserId=$oticket->UserId;
        $ticket->save();
        return redirect('/TicketView?ticket='.$code);
        // add the answer and owner of answer
        // add a badge on the original question
        // redirect to admin or user profile
    }
    public function Retrieve(){
        // get the info of current open negotiations and closed ones
        if(\Session::get('Login')!='True'){
            return redirect('/UserArea');
        }
        $user=User::where('UserName',\Session::get('UserName'))->first();
        $id=$user->UserId;
        $tickets=Tickets::where('UserId',$id)->get();
        $ticketvec=[];
        $i=0;
        foreach($tickets as $ticket)
        {
            if($ticket['Start']==1 && $ticket['Closed']==0)
            {
                $ticketvec[$i]=$ticket;
                $check=1;
                foreach($tickets as $thistic){
                    if($ticket['Ticket_Id']==$thistic['Ticket_Id'] && $thistic['Seen'==0]){
                        $check=0;
                        break;
                    }
                }
                if($check==0)
                {
                    $ticketvec[$i]['Seen']=="False";
                }
                else{
                    $ticketvec[$i]['Seen']=='True';
                }
                $i++;
            }
        }
        //print_r($ticketvec);
        // send the view with info
        return view('Pannel/tickets')->with('Tickets',$ticketvec);
    }
    public function GetOne(){
        if(\Session::get('Login')!="True")
        {
            return redirect('/UserArea');
        }
        $code=$_GET['ticket'];
        $tickets=Tickets::where('Ticket_Id',$code)->get();
        $this->Readed($code);
        return view('Pannel/view-ticket')->with(['Tickets'=>$tickets,'UserName'=>\Session::get('UserName'),'Code'=>$code]);
    }
    public function Readed($code)
    {
        // get the question original info
        // mark it read
        // return the correct value to ajax system 
    }

}
