<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function get()
    {
        return view('dashboard.admin.login');
    }

    public function post()
    {
        dd(request()->all());
        $this->validate(request(), [
            'email' => 'required|email|max:225',
            'password' => 'required|string|min:6|max:35',
        ]);


        $remember = request()->has('remember') ? true : false;
        $credentials = array('email' => request()->email, 'password' => request()->password);
        $checkLogin = Auth::guard('admin')->attempt($credentials, $remember);

        if (!$checkLogin) {
            session()->flash('message', 'البيانات غير صحيحة');
            return redirect('admin/login');

        }

        return redirect('dashboard');
    }
}