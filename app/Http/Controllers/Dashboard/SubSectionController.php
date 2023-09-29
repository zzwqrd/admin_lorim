<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SubSections\SubSectionsRequest;
use App\Models\Sections;
use App\Models\SubSections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
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
    public function store(SubSectionsRequest $request)
    {

        try {

            $validated = $request->validated();

            $validated['section_id'] = $request->section;

            SubSections::create($validated);

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
    public function show(SubSections $subSections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        Validator::make(
            ['id' => $id],
            ['id' => 'required|integer|exists:sub_sections,id']
        )->validate();

        $data = SubSections::findOrFail($id);
        $sections = Sections::orderBy('id', 'desc')->get();

        return view('dashboard.sub_sections.edit', compact('data', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubSectionsRequest $request)
    {

        try {


        $validated = $request->validated(['id' => 'required|integer|exists:sub_sections,id',]);

        $data = SubSections::findOrFail(request()->id);

        $validated['title_ar'] = $request->title_ar;
        $validated['title_en'] = $request->title_en;
        $validated['section_id'] = $request->section;

        $update = $data->update($validated);

        return back()->with('success', trans('response.updated'));

        } catch (Exception $e) {

            log_error();

            DB::rollBack();

            return back()->with('error', trans('response.failed'));
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Validator::make(
            ['id' => $id],
            ['id' => 'required|integer|exists:sub_sections,id']
        )->validate();

        $data = SubSections::find($id);

        if (!$data->delete()) {
            return back()->with('error', trans('response.failed'));
        }
        return back()->with('success', trans('response.deleted'));
    }
}
