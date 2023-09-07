<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Sections;
use App\Models\SubSections;
use Illuminate\Http\Request;

use Validator;

class SubSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SubSections::orderBy('id', 'desc')->get();

        return view('dashboard.sub_sections.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = Sections::orderBy('id', 'desc')->get();
        return view('dashboard.sub_sections.create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make(
            request()->all(),
            [
                'title' => 'required|string|min:3',
                'section' => 'required|integer|exists:sections,id',

            ]
        )->validate();

        $data = SubSections::create([

            'title' => request()->title,

            'section_id' => request()->section,

        ]);
        if (!$data) {
            return back()->with('error', trans('response.failed'));
        }
        return back()->with('success', trans('response.added'));
    }

    /**
     * Display the specified resource.
     */
    public function show(SubSections $subSections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubSections $subSections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubSections $subSections)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubSections $subSections)
    {
        //
    }
}
