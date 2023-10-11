<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;


class AdController extends Controller
{
    public function index()
    {
        $data = Ad::orderBy('id', 'desc')->get();

        return response()->json([['data' => $data] , 'message' => trans('success'),
        'status' => 200,]);
    }

}
