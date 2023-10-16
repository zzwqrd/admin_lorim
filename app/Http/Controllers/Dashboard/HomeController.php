<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Providers;
use App\Models\User;
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

        $data['users'] = User::get()->count();
        $data['providers'] = Providers::get()->count();
        $data['orders'] = Order::get()->count();

        return view('dashboard.home', compact('data'));
    }
}
