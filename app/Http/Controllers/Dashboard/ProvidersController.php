<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Providers;
use App\Models\Sections;
use App\Models\SubSections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Providers::orderBy('id', 'desc')->get();

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $sub_section = DB::table("sub_sections")->where("section_id", $id)->pluck("title", "id");
        // return json_encode($sub_section);

        Validator::make(
            [
                'id' => $id,
            ],
            [
                'id' => 'required|integer|exists:sub_sections,id',
            ]
        )->validate();
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
