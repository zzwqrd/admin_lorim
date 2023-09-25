<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Providers\CreateRequest;
use App\Models\Providers;
use App\Models\Sections;
use App\Models\SubSections;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Exception;
use Validator;
use Session;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Providers::orderBy('id', 'desc')->latest()->get();
        // $data = Providers::where('sub_section_id', 1)->latest()->get();


        return view('dashboard.providers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = Sections::orderBy('id', 'desc')->get();

        return view('dashboard.providers.create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request, Sections $sections, )
    {


        // DB::beginTransaction();
        try {


            $validated = $request->validated();

            $validated['section_id'] = $request->section;

            $validated['sub_section_id'] = $request->subsection;


            Providers::create($validated);


            return back()->with('success', trans('response.added'));

        } catch (Exception $e) {

            log_error();

            DB::rollBack();

            return back()->with('error', trans('response.failed'));
        }





    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $sub_section = SubSections::where('section_id', $id)->get();

        return response()->json(['status' => 1, 'data' => $sub_section]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Providers $providers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Providers $providers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Providers $providers)
    {
        //
    }
}
