<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Tickets;
use App\User;
use Illuminate\Support\Facades\Input;
use Request;
use Session;
use DB;
use Mail;
use Morilog\Jalali\Facades\jDateTime;
class AdminControl extends Controller
{
    //
    public function GetLogin(){
        if(Session::get('Login')=='Admin'){
            return redirect('/AdminPannel');
        }
        if(isset($_GET['error']))
            $Error=$_GET['error'];
        else
            $Error="nothing";

        //Returning the page View with the Save Error Option
        return view('Admin/login')->with('error',$Error);
    }
    public function AdminLogin(){
        $input=Input::all();
        $conditions=['UserName'=>$input['UserName'],'Password'=>$input['Password']];
        $userinfo=Admin::where($conditions)->first();
        if(!is_null($userinfo))
        {
            //echo $userinfo;
            Session::put('Login','Admin');
            Session::put('UserName',$input['UserName']);
            return redirect('/AdminPannel');
        }
        else{
            return redirect('/Admin?error=login');
        }
    }
    public function GetPannel(){
        if(Session::get('Login')!="Admin")
        {
            return redirect('/Admin');
        }
        // get the info of current open negotiations and closed ones
        $tickets=Tickets::all();
        $ticketvec=[];
        $i=0;
        $tickcheck=$tickets;
        foreach($tickets as $ticket)
        {
            if($ticket['Start']==1 && $ticket['closed']==0)
            {
                $ticketvec[$i]=$ticket;
                $ticketvec[$i]['Date']=jDateTime::strftime('Y-m-d H:i:s', strtotime($ticket->Date)); // 1395-02-15
                $userinfo=User::find($ticket->UserId);
                $ticketvec[$i]['UserInfo']=$userinfo;
                $ticketvec[$i]['Check']="True";
                $check=1;
                foreach($tickcheck as $thistic){
                    if( $ticketvec[$i]['Ticket_Id']==$thistic['Ticket_Id'] && $thistic['SeenBack']==0){
                        $check=0;
                        break;
                    }
                }
                if($check==0)
                {
                    $ticketvec[$i]['Check']="False";
                }
                else{
                    $ticketvec[$i]['Check']="True";
                }
                $i++;
            }
        }
        // send the view with info
        $tickets=Tickets::all();
        $check=1;
        foreach($tickets as $ticket){
            if($ticket['SeenBack']=="0")
                $check=0;
        }
        usort($ticketvec,function($a, $b)
        {
            if ($a["check"] == $b["check"]) {
                return 0;
            }
            return ($a["check"] < $b["check"]) ? -1 : 1;
        });
        return view('Admin/tickets')->with(['Tickets'=>$ticketvec,'New'=>$check]);
    }
    public function Ticket(){
        if(\Session::get('Login')!="Admin")
        {
            return redirect('/Admin');
        }
        $tickets=Tickets::all();
        $check=1;
        foreach($tickets as $ticket){
            if($ticket['SeenBack']=="0")
                $check=0;
        }
        $code=$_GET['ticket'];
        $tickets=Tickets::where('Ticket_Id',$code)->get();
        foreach ($tickets as $thisone){
            $username=User::find($thisone->UserId)->UserName;
            $ticketss['Date']=jDateTime::strftime('Y-m-d H:i:s', strtotime($thisone['Date']));

        }
        $this->Readed($code);

        //echo $code;
        return view('Admin/view-ticket')->with(['Tickets'=>$tickets,'UserName'=>$username,'Code'=>$code,'New'=>$check]);
    }
    public function Readed($code)
    {
        // get the question original info
        DB::table('Tickets')
            ->where('Ticket_Id', $code)
            ->update(['SeenBack' => true]);
        // mark it read
        // return the correct value to ajax system
    }

    public function AnswerTicket(){
        $code=$_GET['ticket'];
        $oticket=Tickets::where('Ticket_Id',$code)->first();
        $ticket=new Tickets();
        $ticket->Date=date('Y-m-d H:i:s');
        $ticket->Text=Input::get('Text');
        $ticket->Start=false;
        $ticket->SeenBack=true;
        $ticket->Subject=$oticket->Subject;
        $ticket->Seen=false;
        $ticket->Closed=false;
        $ticket->Ticket_Id=$oticket->Ticket_Id;
        $ticket->Sender_Type=true;
        $ticket->UserId=$oticket->UserId;
        $username=User::find($oticket->UserId)->UserName;
//        echo $oticket->UserId;
        $ticket->save();
        $data=array('Content'=>'شما برای تیکت با شماره ی  ' .$code.' یک حواب دریافت کرده اید .');
        $this->user_email($data,$username,'mail_theme',"تیکت شما پاسخ داده شد ");

        return redirect('/AdminTicketView?ticket='.$code);
    }
    public function Close(){
        $code=$_GET['ticket'];
        DB::table('Tickets')
            ->where('Ticket_Id', $code)
            ->update(['Closed' => true]);
        $oticket=Tickets::where('Ticket_Id',$code)->first();
        $username=User::find($oticket->UserId)->UserName;
        $data=array('Content'=>'همه ی تیکت های با شماره شناسایی ' .$code.' بسته  شد');
        $this->user_email($data,$username,'mail_theme',"بسته شدن تیکت");
        return redirect('/AdminPannel');
    }
    public function user_email($data,$Email,$page,$subject){
        Mail::send($page, $data, function($message) use ($Email,$subject) {
            $message->to($Email, 'کامنت ماینر')->subject
            ($subject);
            $message->from('h.faghihi15@gmail.com','کامنت ماینر');
        });
    }
}
