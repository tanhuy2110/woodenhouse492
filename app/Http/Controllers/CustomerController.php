<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home()
    {
        return view('custommer.layout.home');
    }
    public function about()
    {
        return view('custommer.layout.about');
    }
    public function review()
    {
        return view('custommer.layout.review');
    }
}
