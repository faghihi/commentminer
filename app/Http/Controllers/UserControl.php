<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Requests;
use DB;
use Session;
use Illuminate\Support\Facades\Input;

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
        $newuser->Email=$input['Email'];
        $newuser->PhoneNo=$input['PhoneNo'];
        if($newuser->save()){
            Session::put('Login','True');
            Session::put('UserName',$input['UserName']);
            return redirect('/Pannel');
        }
        else{
            return redirect('/UserArea?error=save');
        }
        
    }
    public function CheckUser(){
        $input=Input::get('UserName');
        $input1=Input::get('Email');
        $userinfo=User::where('UserName',$input)->get();
        if(! $userinfo->isEmpty() ){
            echo 0;
        }
        else {
            $userinfo1=User::where('Email',$input1)->get();
            if(! $userinfo1->isEmpty() ){
                echo 0;
            }
            else {
                echo 1;
            }
        }

    }

    public function Login(){
        $input=Input::all();
        $userinfo=User::where(['UserName'=>$input['UserName'],'Password'=>$input['Password']])->get();
        if($userinfo)
        {
            Session::put('Login','True');
            Session::put('UserName',$input['UserName']);
            return redirect()->back();
        }
        else{
            return redirect('/UserArea?error=login');
        }
    }

    public function ChangePass($UserName){
        $UserName=Session::get('UserName');
        $thisusers=User::where('UserName',$UserName);
        foreach ($thisusers as $thisuser){
            $userid=$thisuser['UserId'];
        }
        $user=User::find($userid);
        $user->Password=Input::get('NewPassword');
        $user->save();
    }

    public function CheckPass(){
        $count=0;
        $username=Session::get('UserName');
        $input1=Input::get('OldPassword');
        $info=User::where(['UserName'=>$username,'Password'=>$input1]);
        foreach($info as $i){
            $count++;
        }
        if($count) {echo 1;}
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
}
