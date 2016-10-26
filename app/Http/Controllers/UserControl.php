<?php

namespace App\Http\Controllers;

use App\Activate;
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

        $users=User::all();
        foreach ($users as $user){
            echo $user->UserName;
        }
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
            return redirect('/UserArea');
        }
        else{
            return redirect('/UserArea?error=save');
        }
        
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

    public function ForgotPass(){
        
    }

    public function GetDashboard(){
        if(Session::get('Login')=='True')
        {
            return view('Pannel/index');
        }
        else {
            return redirect('/UserArea');
        }
    }
    public function GetEdit(){
        if(Session::get('Login')=='True')
        {
            return view('Pannel/edit');
        }
        else {
            return redirect('/UserArea');
        }
    }
}
