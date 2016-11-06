<?php

namespace App\Http\Controllers;

use App\Tickets;
use App\User;
use Illuminate\Http\Request;
use Morilog\Jalali\Facades\jDate;
use Morilog\Jalali\Facades\jDateTime;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Mail;

class TicketControl extends Controller
{
    //Ticket and answering operations here

    public function MakeNew(){
        if(Session::get('Login')!="True")
        {
            return redirect('/UserArea');
        }
        $username=Session::get('UserName');
        $id=User::where('UserName',$username)->first()->UserId;
        $tickets=Tickets::where('UserId',$id)->get();
        $check=1;
        foreach($tickets as $ticket){
            if($ticket['Seen']=="0")
                $check=0;
        }
        if(\Session::get('Login')!="True")
        {
            return redirect('/UserArea');
        }
        // here we Make a new ticket
        // adding to database
        //redirecting to the tickets page and reload
        return view('Pannel/new-ticket')->with(['UserName'=>\Session::get('UserName'),'New'=>$check]);
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
        $data=array('Content'=>'تیکت به شماره ی ' .$ticket->Ticket_Id.' ایجاد شد');
        $this->html_email($data,'mail_theme',"ایجاد تیکت");
        $data=array('Content'=>'شما یک تیکت به شماره ی ' .$ticket->Ticket_Id.' ایجاد کردید');
        $this->user_email($data,'mail_theme',"ایجاد تیکت");
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
//        echo $oticket->UserId;
        $ticket->save();
        $data=array('Content'=>'تیکت به شماره ی ' .$ticket->Ticket_Id.' به روز رسانی شد');
        $this->html_email($data,'mail_theme',"به روز رسانی تیکت");
        $data=array('Content'=>'جواب شما به تیکت به شماره ی ' .$ticket->Ticket_Id.' دریافت  شد و به زودی به آن پاسخ خواخیم داد');
        $this->user_email($data,'mail_theme',"به روز رسانی تیکت");
        return redirect('/TicketView?ticket='.$code);
        // add the answer and owner of answer
        // add a badge on the original question
        // redirect to admin or user profile
    }
    public function gregorian_to_jalali($gy,$gm,$gd,$mod=''){
        $g_d_m=array(0,31,59,90,120,151,181,212,243,273,304,334);
        $jy=($gy<=1600)?0:979;
        $gy-=($gy<=1600)?621:1600;
        $gy2=($gm>2)?($gy+1):$gy;
        $days=(365*$gy) +((int)(($gy2+3)/4)) -((int)(($gy2+99)/100))
            +((int)(($gy2+399)/400)) -80 +$gd +$g_d_m[$gm-1];
        $jy+=33*((int)($days/12053));
        $days%=12053;
        $jy+=4*((int)($days/1461));
        $days%=1461;
        $jy+=(int)(($days-1)/365);
        if($days > 365)$days=($days-1)%365;
        $jm=($days < 186)?1+(int)($days/31):7+(int)(($days-186)/30);
        $jd=1+(($days < 186)?($days%31):(($days-186)%30));
        return($mod=='')?array($jy,$jm,$jd):$jy.$mod.$jm.$mod.$jd;
    }
    public function Retrieve(){
        if(Session::get('Login')!="True")
        {
            return redirect('/UserArea');
        }
        // get the info of current open negotiations and closed ones
        if(\Session::get('Login')!='True'){
            return redirect('/UserArea');
        }
        $user=User::where('UserName',\Session::get('UserName'))->first();
        $id=$user->UserId;
        $tickets=Tickets::where('UserId',$id)->get();
        $ticketvec=[];
        $i=0;
        $tickcheck=$tickets;
        foreach($tickets as $ticket)
        {
//            if($ticket['Start']==1 && $ticket['closed']==0)
            if($ticket['Start']==1)
            {
                $ticketvec[$i]=$ticket;
                $ticketvec[$i]['Check']="True";
                $ticketvec[$i]['Closed']=$ticket['closed'];
                $ticketvec[$i]['Date']=jDateTime::strftime('Y-m-d H:i:s', strtotime($ticket->Date)); // 1395-02-19
                $check=1;
                foreach($tickcheck as $thistic){
//                    print_r($thistic);
//                    echo "<BR>";
//                    echo "<BR>";
//                    print_r($ticketvec[$i]);
//                    echo "<BR>";
//                    echo "<BR>";
//                    echo $thistic['Ticket_Id']."<br>";
                    if( $ticketvec[$i]['Ticket_Id']==$thistic['Ticket_Id'] && $thistic['Seen']==0){
                        $check=0;
//                        echo "salam<br>";
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
//        print_r($ticketvec);
        // send the view with info
        $username=Session::get('UserName');
        $id=User::where('UserName',$username)->first()->UserId;
        $tickets=Tickets::where('UserId',$id)->get();
        $check=1;
        foreach($tickets as $ticket){
            if($ticket['Seen']=="0")
                $check=0;
        }
        usort($ticketvec,function($a, $b)
        {
            if ($a["check"] == $b["check"]) {
                return -1;
            }
            return ($a["check"] < $b["check"]) ? -1 : 1;
        });
        return view('Pannel/tickets')->with(['Tickets'=>$ticketvec,'New'=>$check]);
    }
    public function GetOne(){
        if(\Session::get('Login')!="True")
        {
            return redirect('/UserArea');
        }
        $username=Session::get('UserName');
        $id=User::where('UserName',$username)->first()->UserId;
        $tickets=Tickets::where('UserId',$id)->get();
        $check=1;
        foreach($tickets as $ticket){
            if($ticket['Seen']=="0")
                $check=0;
            if($ticket['Closed']==0)
                $close=1;
            else
                $close=0;
        }
        $code=$_GET['ticket'];
        $tickets=Tickets::where('Ticket_Id',$code)->get();
        foreach($tickets as $ticketss)
        {

            $ticketss['Date']=jDateTime::strftime('Y-m-d H:i:s', strtotime($ticketss['Date']));
        }
        $this->Readed($code);

        //echo $code;
        return view('Pannel/view-ticket')->with(['Tickets'=>$tickets,'UserName'=>\Session::get('UserName'),'Code'=>$code,'New'=>$check,'Close'=>$close]);
    }
    public function Readed($code)
    {
        // get the question original info
        DB::table('Tickets')
            ->where('Ticket_Id', $code)
            ->update(['Seen' => true]);
        // mark it read
        // return the correct value to ajax system 
    }
    public function Close(){
        $code=$_GET['ticket'];
        DB::table('Tickets')
            ->where('Ticket_Id', $code)
            ->update(['Closed' => true]);
        $data=array('Content'=>'همه ی تیکت های با شماره شناسایی ' .$code.' بسته  شد');
        $this->html_email($data,'mail_theme',"بسته شدن تیکت");
        $data=array('Content'=>'همه ی تیکت های با شماره شناسایی ' .$code.' بسته  شد');
        $this->user_email($data,'mail_theme',"بسته شدن تیکت");
        return redirect('/Tickets');
    }
    public function html_email($data,$page,$subject){
        $Email='h.faghihi15@gmail.com';
        Mail::send($page, $data, function($message) use ($Email,$subject) {
            $message->to($Email, 'کامنت ماینر')->subject
            ($subject);
            $message->from('h.faghihi15@gmail.com','کامنت ماینر');
        });
    }
    public function user_email($data,$page,$subject){
        $Email=Session::get('UserName');
        Mail::send($page, $data, function($message) use ($Email,$subject) {
            $message->to($Email, 'کامنت ماینر')->subject
            ($subject);
            $message->from('h.faghihi15@gmail.com','کامنت ماینر');
        });
    }

}
