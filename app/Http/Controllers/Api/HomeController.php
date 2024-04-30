<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Sections;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ads = Ad::orderBy('id', 'desc')->get();
        $section = Sections::orderBy('id', 'desc')->with([ 'subsection'])->get();

        return response()->json(['data' => ['ads' => $ads,'section'=> $section  ], 'message' => trans('success'),
        'status' => 200,]);
    }
}
