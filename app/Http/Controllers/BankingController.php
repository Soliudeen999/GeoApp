<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankingController extends Controller
{
    public function send()
    {
        return view('send');
    }
}
