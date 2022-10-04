<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactControler extends Controller
{
    public function contact(){
        return view('contacts.create');
    }
}
