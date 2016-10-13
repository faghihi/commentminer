<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TicketControl extends Controller
{
    //Ticket and answering operations here

    public function MakeNew(){
        // here we Make a new ticket
        // adding to database
        //redirecting to the tickets page and reload
    }
    public function MakeAnswer(){
        //retriving the original question
        // add the answer and owner of answer
        // add a badge on the original question
        // redirect to admin or user profile
    }
    public function Retrieve(){
        // get the info of current open negotiations and closed ones
        // send the view with info
    }

    public function Readed()
    {
        // get the question original info
        // mark it read
        // return the correct value to ajax system 
    }

}
