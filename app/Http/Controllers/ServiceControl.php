<?php

namespace App\Http\Controllers;

use App\Plan;
use App\Service;
use Illuminate\Http\Request;
use Mail;
use Requests;
use Illuminate\Support\Facades\Input;
use Session;

class ServiceControl extends Controller
{
    //Service Controller Functions
    public function StartPay($name)
    {
        if (!Input::get('service_type')) {
            return redirect("/Pannel");
        }
        // here must be a Case for the Cost
        $cost = 0;
        // Merchant Code has to change
        $MerchantID = '260906cc-2ed3-11e6-93b9-005056a205be';  //Required
        $Amount = $cost; //Amount will be based on Toman  - Required
        $Description = 'خرید سرویس کامنت ماینر';  // Required
        $Email = Input::get('email'); // Optional
        $Mobile = Input::get('mobile'); // Optional
        // give the call back URL
        $CallbackURL = 'http://commentminer.ir/verify';  // Required

        // URL also Can be https://ir.zarinpal.com/pg/services/WebGate/wsdl
        $client = new \SoapClient('https://de.zarinpal.com/pg/services/WebGate/wsdl', array('encoding' => 'UTF-8'));

        $result = $client->PaymentRequest(
            array(
                'MerchantID' => $MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'Mobile' => $Mobile,
                'CallbackURL' => $CallbackURL
            )
        );

        //Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {
            // Here Comes the Codes of before redirection and info
            Session::put('Amount', $cost);
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

                // Emailing the content should be here
                // $this->sendmail(Session::get('payname'),$courseinfo->name,"$courseinfo->date"." $courseinfo->time",Session::get('payemail'));

                // Earsaing Data saved should be here

                //return redirect("/buytrue/$ref");
                return redirect("/buytrue/123");
            } else {
                ;
                $ref = $result->Status;
                // return redirect("/buyfalse/$ref");
            }

        } else {

            $ref = 'شما انتقال را لغو کرده اید.';
            // return redirect("/buyfalse/$ref");
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
    }

    public function RetrieveOptions(){
        // getting info
        $plans=Plan::all();
        // redirecting info to View
        return view('Pannel/calendar')->with('Plans',$plans);

    }

    public function RetrieveMine(){
        // getting info
        $Services=Service::all();
       //Redirecting to Main Page
        return view('Pannel/property')->with('Services',$Services);
    }

    public function ReNew(){
        
    }

}