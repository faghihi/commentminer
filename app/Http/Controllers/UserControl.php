<?php

namespace App\Http\Controllers;

use App\Activate;
use App\Contact;
use App\Subscribe;
use App\Tickets;
use App\User;
use Illuminate\Http\Request;

use Requests;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
use Mail;

class UserControl extends Controller
{
    //
    //select * from commentminer.dbo.userprofile
    public function test(){
//        $users=DB::connection('sqlsrv')->select('select * from commentminer.dbo.userprofile');
//        echo "this";
//        print_r($users);
//        foreach($users as $user)
//        {
//            if($user)
//            echo $user->UserId;
//        }

//        $users=User::all();
//        foreach ($users as $user){
//            echo $user->UserName;
//        }
//        $time =date('Y-m-d H:i:s');
//        $final = strtotime(date("Y-m-d H:i:s", strtotime($time)) . " +1 month");
//        $final = date("Y-m-d H:i:s",$final);
//        echo $final."<BR>";
//        echo $time;
        $username=Session::get('UserName');
        $id=User::where('UserName',$username)->first()->UserId;
        $tickets=Tickets::where('UserId',$id)->get();
        $check=1;
        foreach($tickets as $ticket){
            if($ticket['Seen']=="0")
                $check=0;
        }
        echo $check;
    }
    public function ContactSave(){
        $name=Input::get('name');
        $subject=Input::get('subject');
        $email=Input::get('email');
        $message=Input::get('message');
        $Contacts=['Name'=>$name,'Subject'=>$subject,'Email'=>$email,'Message'=>$message];
        $contact=new Contact();
        $contact->Name=$name;
        $contact->Email=$email;
        $contact->Subject=$subject;
        $contact->message=$message;
        $check=$contact->save();
        $WhereToSend='h.faghihi15@gmail.com';
        $this->html_email_($Contacts,$WhereToSend,'ContactEmail','پیام جدید ارتباط با ما');

    }
    public function Subscribe(){
        $email=Input::get('email');
        $sub=new Subscribe();
        $sub->Email=$email;
        $sub->save();
    }
    public function getLogin(){
        // Check if this is a redirection or not
        if(isset($_GET['error']))
            $Error=$_GET['error'];
        else
            $Error="nothing";

        //Returning the page View with the Save Error Option
        return view('Pannel/login-signup')->with('error',$Error);
    }
    public function ForgotPass(){
        return view('Pannel/forgot-pass');
    }
    public function PassRenew(){
        $Email=Input::get('Email');
        $user=User::where('Email',$Email)->first();
        if(!is_null($user)){
            Session::put('UserName',$Email);
            $this->html_email_Forgot($Email,$Email);
            return redirect('/ForgotPass?OK=True');
        }
        else{
            return redirect('/UserArea');
        }
    }
    public function PassForgotRenew(){
        if(Session::get('Login')=="True"){
            return redirect('/Profile');
        }
        if(Session::get('UserName'))
        {
            return view('Pannel/change-pass');
        }
        return redirect('/UserArea');
    }
    public function FinalForgot(){
        if(Session::get('Login')=="True" || !Session::get('UserName')){
            return redirect('/UserArea');
        }
        $user=User::where('UserName',Session::get('UserName'))->first();
        $user=User::find($user->UserId);
        $user->Password=Input::get('Password');
        $user->save();
        return redirect('/PassPage?OK=True');
    }
    public function Signup(){
        $input=Input::all();
        $newuser=new User();
        $newuser->UserName=$input['UserName'];
        $newuser->Password=$input['Password'];
        $newuser->Email=$input['UserName'];
        $newuser->PhoneNo=$input['PhoneNo'];
        $newuser->valid='0';
        if($newuser->save()){
            $valid=$this->randString(20);
            $sample=new Activate();
            $Id=$newuser->UserId;
            $sample->Code=$valid;
            $sample->UserId=$Id;
            $sample->save();
            $this->html_email($valid,$newuser->Email);
            return redirect('/UserArea?error=SignUp');
        }
        else{
            return redirect('/UserArea?error=save');
        }
        
    }
    public function html_email_($data,$Email,$page,$subject){
        Mail::send($page, $data, function($message) use ($Email,$subject) {
            $message->to($Email, 'کامنت ماینر')->subject
            ($subject);
            $message->from('h.faghihi15@gmail.com','کامنت ماینر');
        });
    }
    public function html_email_Forgot($Code,$Email){
        $data = array('code'=>"localhost:8000/PassPage?code=".$Code);
        Mail::send('mail1', $data, function($message) use ($Email) {
            $message->to($Email, 'کامنت ماینر')->subject
            ('تغییر رمز اکانت کامنت ماینر');
            $message->from('h.faghihi15@gmail.com','کامنت ماینر');
        });
    }
    public function html_email($Code,$Email){
        $data = array('code'=>"localhost:8000/Activate/".$Code);
        Mail::send('mail', $data, function($message) use ($Email) {
            $message->to($Email, 'کامنت ماینر')->subject
            ('فعال سازی اکانت کامنت ماینر');
            $message->from('h.faghihi15@gmail.com','کامنت ماینر');
        });
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

    public function Validatation($string){
        $data=Activate::where('Code',$string)->first();
        $id=$data['UserId'];
        $user=User::find($id);
        $user->valid=1;
        $user->save();
        return redirect('/UserArea?error=Activate');
    }

    public function CheckUser(){
        $input=$_GET['username'];
        $input1=$_GET['username'];
        $userinfo=User::where('UserName',$input)->first();
        if(! is_null($userinfo) ){
            echo 0;
        }
        else {
            $userinfo1=User::where('Email',$input1)->first();
            if(! is_null($userinfo1)  ){
                echo 0;
            }
            else {
                echo 1;
            }
        }

    }

    public function Login(){
        $input=Input::all();
        $conditions=['UserName'=>$input['UserName'],'Password'=>$input['Password'],"valid"=>'1'];
        $userinfo=User::where($conditions)->first();
        if(!is_null($userinfo))
        {
            //echo $userinfo;
            Session::put('Login','True');
            Session::put('UserName',$input['UserName']);
            return redirect('/Pannel');
        }
        else{
            return redirect('/UserArea?error=login');
        }
    }

    public function ChangePass(){
        $UserName=Session::get('UserName');
        $thisusers=User::where(['UserName'=>$UserName])->first();
        if($thisusers){
            $userid=$thisusers->UserId;
        }
        $user=User::find($userid);
        $user->Password=Input::get('Password');
        $check=$user->save();
        if($check){
            return redirect('/Profile?Test=OK');
        }
        else{
            return redirect('/Profile?Test=No');
        }
    }

    public function CheckPass(){
        $username=Session::get('UserName');
        $input1=$_GET['OldPassword'];
        $info=User::where(['UserName'=>$username,'Password'=>$input1])->first();
        if(!is_null($info)){
            echo 1;
        }
        else {
            echo 0;
        }
    }

    public function SignOut(){
        Session::forget('Login');
        Session::forget('USerName');
        Session::flush();
        return redirect('/');
    }


    public function GetDashboard(){
        if(Session::get('Login')=='True')
        {
            $username=Session::get('UserName');
            $id=User::where('UserName',$username)->first()->UserId;
            $tickets=Tickets::where('UserId',$id)->get();
            $check=1;
            foreach($tickets as $ticket){
                if($ticket['Seen']=="0")
                    $check=0;
            }
            return view('Pannel/index')->with('New',$check);
        }
        else {
            return redirect('/UserArea');
        }
    }
    public function GetEdit(){
        $username=Session::get('UserName');
        $id=User::where('UserName',$username)->first()->UserId;
        $tickets=Tickets::where('UserId',$id)->get();
        $check=1;
        foreach($tickets as $ticket){
            if($ticket['Seen']=="0")
                $check=0;
        }
        if(Session::get('Login')=='True')
        {
            return view('Pannel/edit')->with('New',$check);
        }
        else {
            return redirect('/UserArea');
        }
    }
}
