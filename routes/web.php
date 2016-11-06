<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/Pannel','UserControl@GetDashboard')->middleware('Loginnotproof');
Route::post('/ContactSend','UserControl@ContactSave');
Route::post('/Subscribe','UserControl@Subscribe');
Route::get('/UserArea', 'UserControl@getLogin')->middleware('LoginProof');
Route::get('/ForgotPass', 'UserControl@ForgotPass')->middleware('LoginProof');
Route::post('/PassRenew', 'UserControl@PassRenew');
Route::post('/ChangeFinalForgot', 'UserControl@FinalForgot');
Route::get('/PassPage', 'UserControl@PassForgotRenew')->middleware('LoginProof');
Route::post('/Login','UserControl@Login');
Route::post('/SignUp','UserControl@SignUp');
Route::get('/Tickets','TicketControl@Retrieve')->middleware('Loginnotproof');
Route::get('/TicketView','TicketControl@GetOne')->middleware('Loginnotproof');
Route::get('/CloseItem','TicketControl@Close')->middleware('Loginnotproof');
Route::get('/NewTicket','TicketControl@MakeNew')->middleware('Loginnotproof');
Route::post('/MakeTicket','TicketControl@MakeTicket');
Route::post('/AnswerTicket','TicketControl@MakeAnswer');
Route::post('/ChangePass','UserControl@ChangePass');
Route::get('/SignUp/Check','UserControl@CheckUser');
Route::get('/Profile/CheckPass','UserControl@CheckPass')->middleware('Loginnotproof');
Route::get('/Profile','UserControl@GetEdit')->middleware('Loginnotproof');
Route::get('/SignOut','UserControl@SignOut')->middleware('Loginnotproof');
Route::get('/Plans','ServiceControl@RetrieveOptions')->middleware('Loginnotproof');
Route::get('/BuyService','ServiceControl@StartPay')->middleware('Loginnotproof');
Route::get('/ChangeInfo','ServiceControl@ChangeInfo')->middleware('Loginnotproof');
Route::get('/Verify','ServiceControl@Verify')->middleware('Loginnotproof');
Route::get('/VerifyRenew','ServiceControl@VerifyRenew')->middleware('Loginnotproof');
Route::get('/Renew','ServiceControl@Renew')->middleware('Loginnotproof');
Route::get('/Services','ServiceControl@RetrieveMine')->middleware('Loginnotproof');
Route::get('/Activate/{string}','UserControl@Validatation')->middleware('LoginProof');
Route::get('/test', 'UserControl@test');
Route::get('/bankerror',function (){
    $content="اتصال با بانک میسر نیست لطفا بعدا مجددا اقدام فرمایید";
    return view('message')->with(['Content'=>$content,'Type'=>'bankerror']);
});
Route::get('/buyfalse',function (){
    $content="خرید شما انجام نشد اگر پولی از حسابتان کسر شده است تا ۴۸ ساعت آینده بازگشت داده خواهد شد .";
    return view('message')->with(['Content'=>$content,'Type'=>'payfalse']);
});
Route::get('/RenewError',function (){
    $content="امکان تمدید سرویس رایگان وجود ندارد .";
    return view('message')->with(['Content'=>$content,'Type'=>'payfalse']);
});
Route::get('/bankmessage',function (){
    $content=$_GET['plan'];
    return view('message')->with(['Content'=>$content,'Type'=>'bank']);
});
Route::get('/bankremessage',function (){
    $content=$_GET['service'];
    return view('message')->with(['Content'=>$content,'Type'=>'bankre']);
});
Route::get('/sample',function (){
   return view('Pannel.tables');
});

#Admin Rules
Route::get('/Admin','AdminControl@GetLogin');
Route::post('/AdminLogin','AdminControl@AdminLogin');
Route::get('/AdminPannel','AdminControl@GetPannel');
Route::get('/AdminTicketView','AdminControl@Ticket');
Route::post('/AdminAnswerTicket','AdminControl@AnswerTicket');
Route::get('/AdminCloseItem','AdminControl@Close');

