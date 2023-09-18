<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProvidersResource;
use App\Models\Providers;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index()
    {

        $data = Providers::orderBy('id', 'desc')->get();

        return response()->json(['data' => ['provider' => new ProvidersResource($data)], 200,]);

    }
}
