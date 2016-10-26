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
Route::get('/UserArea', 'UserControl@getLogin')->middleware('LoginProof');
Route::post('/Login','UserControl@Login');
Route::post('/SignUp','UserControl@SignUp');
Route::get('/Tickets','TicketControl@Retrieve');
Route::get('/TicketView','TicketControl@GetOne');
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
Route::get('/Services','ServiceControl@RetrieveMine');
Route::get('/Activate/{string}','UserControl@Validatation');
Route::get('/test', 'UserControl@test');