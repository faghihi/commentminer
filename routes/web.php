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
Route::get('/Pannel','UserControl@GetDashboard');
Route::post('/ContactSend','UserControl@ContactSave');
Route::post('/Subscribe','UserControl@Subscribe');
Route::get('/UserArea', 'UserControl@getLogin')->middleware('LoginProof');
Route::get('/ForgotPass', 'UserControl@ForgotPass')->middleware('LoginProof');
Route::post('/PassRenew', 'UserControl@PassRenew');
Route::post('/ChangeFinalForgot', 'UserControl@FinalForgot');
Route::get('/PassPage', 'UserControl@PassForgotRenew');
Route::post('/Login','UserControl@Login');
Route::post('/SignUp','UserControl@SignUp');
Route::get('/Tickets','TicketControl@Retrieve');
Route::get('/TicketView','TicketControl@GetOne');
Route::get('/CloseItem','TicketControl@Close');
Route::get('/abc',function (){
   return view('Pannel/view-ticket');
});
Route::get('/NewTicket','TicketControl@MakeNew');
Route::post('/MakeTicket','TicketControl@MakeTicket');
Route::post('/AnswerTicket','TicketControl@MakeAnswer');
Route::post('/ChangePass','UserControl@ChangePass');
Route::get('/SignUp/Check','UserControl@CheckUser');
Route::get('/Profile/CheckPass','UserControl@CheckPass');
Route::get('/Profile','UserControl@GetEdit');
Route::get('/SignOut','UserControl@SignOut');
Route::get('/Plans','ServiceControl@RetrieveOptions');
Route::get('/BuyService','ServiceControl@StartPay');
Route::get('/ChangeInfo','ServiceControl@ChangeInfo');
Route::get('/Verify','ServiceControl@Verify');
Route::get('/VerifyRenew','ServiceControl@VerifyRenew');
Route::get('/Renew','ServiceControl@Renew');
Route::get('/Services','ServiceControl@RetrieveMine');
Route::get('/Activate/{string}','UserControl@Validatation');
Route::get('/test', 'UserControl@test');
Route::get('/bankerror',function (){
    $content="اتصال با بانک میسر نیست لطفا بعدا مجددا اقدام فرمایید";
    return view('message')->with(['Content'=>$content,'Type'=>'bankerror']);
});
Route::get('/buyfalse',function (){
    $content="خرید شما انجام نشد اگر پولی از حسابتان کسر شده است تا ۴۸ ساعت آینده بازگشت داده خواهد شد .";
    return view('message')->with(['Content'=>$content,'Type'=>'payfalse']);
});