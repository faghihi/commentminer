<?php

namespace App\Http\Controllers;

use App\Plan;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Mail;
use Requests;
use App\Tickets;
use App\PlanMethod;
use App\Method;
use Illuminate\Support\Facades\Input;
use Session;
use SoapClient;

class ServiceControl extends Controller
{
    //Service Controller Functions
    public function StartPay()
    {
        // here must be a Case for the Cost
        $plancode=$_GET['plan'];
        $plan=Plan::where('PlanId',$plancode)->first();
        $cost = $plan->Price;
        // Merchant Code has to change
        $MerchantID = '260906cc-2ed3-11e6-93b9-005056a205be';  //Required
        $Amount = $cost; //Amount will be based on Toman  - Required
        $Description = 'خرید سرویس کامنت ماینر';  // Required
        $Email = Session::get('UserName'); // Optional
        // give the call back URL
        $CallbackURL = 'http://localhost:8000/Verify';  // Required

        // URL also Can be https://ir.zarinpal.com/pg/services/WebGate/wsdl
        $client = new \SoapClient('https://de.zarinpal.com/pg/services/WebGate/wsdl', array('encoding' => 'UTF-8'));

        $result = $client->PaymentRequest(
            array(
                'MerchantID' => $MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'CallbackURL' => $CallbackURL
            )
        );

        //Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {
            // Here Comes the Codes of before redirection and info
            Session::put('Amount', $cost);
            Session::put('Plan',$plancode);
            // Redirection proccess
            return redirect('https://www.zarinpal.com/pg/StartPay/' . $result->Authority . '/ZarinGate');
        } else {
            return redirect('/bankerror');

        }
    }

    public function Verify()
    {
        $MerchantID = '260906cc-2ed3-11e6-93b9-005056a205be';
        // The Amount should be Updated
        $Amount = Session::get('Amount'); //Amount will be based on Toman
        $Authority = $_GET['Authority'];

        if ($_GET['Status'] == 'OK') {
            // URL also Can be https://ir.zarinpal.com/pg/services/WebGate/wsdl
            $client = new \SoapClient('https://de.zarinpal.com/pg/services/WebGate/wsdl', array('encoding' => 'UTF-8'));

            $result = $client->PaymentVerification(
                array(
                    'MerchantID' => $MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $Amount
                )
            );

            if ($result->Status == 100) {
                $ref = $result->RefID;
                // Saving the Data must be here
                $code=Session::get('Plan');
                Session::forget('Plan');
                $service=new Service();
                $user=User::where('UserName',Session::get('UserName'))->first();
                $service->UserId=$user->UserId;
                $service->PlanId=$code;
                $service->StartDate=date('Y-m-d H:i:s');
                $months=Plan::where('PlanId',$code)->first()->Period/30;
                $final = strtotime(date("Y-m-d H:i:s", strtotime($service->StartDate)) . " +$months month");
                $final = date("Y-m-d H:i:s",$final);
                $service->FinishDate=$final;
                $service->Count=0;
                $service->IsActive=1;
                $service->Token=$this->randString(16);
                $service->save();
                // Emailing the content should be here
                // $this->sendmail(Session::get('payname'),$courseinfo->name,"$courseinfo->date"." $courseinfo->time",Session::get('payemail'));

                // Earsaing Data saved should be here
                Session::forget('Amount');
                return redirect("/Services");
            } else {
                ;
                $ref = $result->Status;
                 return redirect("/buyfalse");
            }

        } else {

            $ref = 'شما انتقال را لغو کرده اید.';
             return redirect("/buyfalse");
        }
    }

    public function SendMail($pname, $cname, $time, $email)
    {
        $info['pname'] = $pname;
        $info['cname'] = $cname;
        $info['time'] = $time;
        $info['email'] = $email;
        mail::send('test', array('login' => '0', 'pathtoimage' => public_path() . "/img/logo.png", 'info' => $info), function ($message) use ($info) {
            $message->from('h.faghihi15@gmail.com', 'وستا کمپ امیرکبیر');
            $message->to($info['email'], $info['pname'])->subject('بلیط خریداری شده از وستا کمپ');
        });
        return 1;
    }

    public function ChangeInfo(){
        // retrevieng ID
        // Updating
        // retunrning to service page
        $code=$_GET['service'];
        $valid=$this->randString(16);
        $item=Service::find($code);
        $item->Token=$valid;
        $item->save();
        return redirect('/Services');
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
    public function RetrieveOptions(){
        if(Session::get('Login')!="True")
        {
            return redirect('/UserArea');
        }
        // getting info
        $PL=Plan::where('Enabled',1)->get();
        $plans=[];
        $i=0;
        foreach($PL as $plan){
            $plans[$i]['Name']=$plan->Name;
            $plans[$i]['Price']=$plan->Price;
            $plans[$i]['Desc']=$plan->Desc;
            $plans[$i]['PlanId']=$plan->PlanId;
            $plans[$i]['Period']=$plan->Period;
            $numbers=PlanMethod::where('PlanId',$plan->PlanId)->get();
            $j=0;
            $max=0;
            foreach($numbers as $number){
                $Name=Method::where('MethodId',$number->MethodId)->first();
                $plans[$i]['Fi'][$j]=$Name->Name;
//                $plans[$i]['F'][$j]='salam';
                $j++;
                $max=max($max,$j);
            }
            $i++;
        }

//        print_r( $plans);
        //Redirecting to Main Page
       // echo $plans;
        // redirecting info to View
        $username=Session::get('UserName');
        $id=User::where('UserName',$username)->first()->UserId;
        $tickets=Tickets::where('UserId',$id)->get();
        $check=1;
        foreach($tickets as $ticket){
            if($ticket['Seen']=="0")
                $check=0;
        }
        return view('Pannel/plans-prices')->with(['Plans'=>$plans,'Max'=>$max-1,'New'=>$check]);

    }

    public function RetrieveMine(){
        // getting info
        if(Session::get('Login')!="True"){
            return redirect('/UserArea');
        }
        $userid=User::where('UserName',Session::get('UserName'))->first()->UserId;
        $Services=Service::where('UserId',$userid)->get();
       //Redirecting to Main Page
//        print_r($Services);
        $username=Session::get('UserName');
        $id=User::where('UserName',$username)->first()->UserId;
        $tickets=Tickets::where('UserId',$id)->get();
        $check=1;
        foreach($tickets as $ticket){
            if($ticket['Seen']=="0")
                $check=0;
        }
        return view('Pannel/invoice')->with(['Services'=>$Services,'New'=>$check]);
    }

    public function Renew()
    {
        if(Session::get('Login')!="True"){
            return redirect('/UserArea');
        }
        $code=$_GET['service'];
        $service=Service::find($code);
        $plan=Plan::find($service->PlanId);
        $cost=$plan->Price;
        $plan=$plan->PlanId;
        $service=$code;
        // here must be a Case for the Cost
        $plancode=$plan;
        Session::put('Service_Code',$service);
        $plan=Plan::where('PlanId',$plancode)->first();
        // Merchant Code has to change
        $MerchantID = '260906cc-2ed3-11e6-93b9-005056a205be';  //Required
        $Amount = $cost; //Amount will be based on Toman  - Required
        $Description = 'تمدید سرویس کامنت ماینر';  // Required
        $Email = Session::get('UserName'); // Optional
        // give the call back URL
        $CallbackURL = 'http://localhost:8000/VerifyRenew';  // Required

        // URL also Can be https://ir.zarinpal.com/pg/services/WebGate/wsdl
        $client = new \SoapClient('https://de.zarinpal.com/pg/services/WebGate/wsdl', array('encoding' => 'UTF-8'));

        $result = $client->PaymentRequest(
            array(
                'MerchantID' => $MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'CallbackURL' => $CallbackURL
            )
        );

        //Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {
            // Here Comes the Codes of before redirection and info
            Session::put('Amount', $cost);
            Session::put('Plan',$plancode);
            // Redirection proccess
            return redirect('https://www.zarinpal.com/pg/StartPay/' . $result->Authority . '/ZarinGate');
        } else {
            return redirect('/bankerror');

        }
    }

    public function VerifyRenew()
    {
        $MerchantID = '260906cc-2ed3-11e6-93b9-005056a205be';
        // The Amount should be Updated
        $Amount = Session::get('Amount'); //Amount will be based on Toman
        $Authority = $_GET['Authority'];
        $service_code=Session::get('Service_Code');
        Session::forget('Service_Code');
        if ($_GET['Status'] == 'OK') {
            // URL also Can be https://ir.zarinpal.com/pg/services/WebGate/wsdl
            $client = new \SoapClient('https://de.zarinpal.com/pg/services/WebGate/wsdl', array('encoding' => 'UTF-8'));

            $result = $client->PaymentVerification(
                array(
                    'MerchantID' => $MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $Amount
                )
            );

            if ($result->Status == 100) {
                $ref = $result->RefID;
                // Saving the Data must be here
                $code=Session::get('Plan');
                Session::forget('Plan');
                $service=Service::find($service_code);
                $months=Plan::where('PlanId',$code)->first()->Period/30;
                $today=date("Y-m-d H:i:s");
                if($today>$service->FinishDate)
                    $selectdate=$today;
                else
                    $selectdate=$service->FinishDate;
                $final = strtotime(date("Y-m-d H:i:s", strtotime($selectdate)) . " +$months month");
                $final = date("Y-m-d H:i:s",$final);
                $service->FinishDate=$final;
                $service->IsActive=1;
                $service->Token=$this->randString(16);
                $service->save();
                // Emailing the content should be here
                // $this->sendmail(Session::get('payname'),$courseinfo->name,"$courseinfo->date"." $courseinfo->time",Session::get('payemail'));

                // Earsaing Data saved should be here
                Session::forget('Amount');
                return redirect("/Services");
            } else {
                ;
                $ref = $result->Status;
                return redirect("/buyfalse/$ref");
            }

        } else {

            $ref = 'شما انتقال را لغو کرده اید.';
            return redirect("/buyfalse/$ref");
        }
    }



}