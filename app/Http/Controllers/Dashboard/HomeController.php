<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // change language usinge Sessiona and Middleware

    public function language($lang)
    {
        Session()->has('language') ? Session()->forget('language') : '';

        isset($lang) ? Session()->put('language', $lang) : Session()->put('language', 'en');

        return back();
    }
    public function index()
    {

        return view('dashboard.home');
    }
}