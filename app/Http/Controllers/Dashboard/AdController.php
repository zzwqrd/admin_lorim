<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Ads\AdsRequest;
use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

use Validator;



class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Ad::orderBy('id', 'desc')->get();
        return view('dashboard.ad.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.ad.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdsRequest $request)
    {

        try {
            $validated = $request->validated();
            Ad::create($validated);

            return back()->with('success', trans('response.added'));
        } catch (Exception $e) {
            log_error($e);

            DB::rollBack();

            return back()->with('error', trans('response.failed'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ad $ad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ad $ad)
    {
        //
    }
}
