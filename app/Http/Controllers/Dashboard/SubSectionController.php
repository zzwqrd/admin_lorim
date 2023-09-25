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
    public function update()
    {
        Validator::make(
            request()->all(),
            [
                'id' => 'required|integer|exists:sub_sections,id',
                'title' => 'required|string|min:3',
                'section' => 'required|integer|exists:sections,id',
            ],

        )->validate();

        $data = SubSections::findOrFail(request()->id);


        $data->title = (request()->title == null) ? $data->title : request()->title;
        $data->section_id = (request()->section == null) ? $data->section_id : request()->section;
        $update = $data->save();
        if (!$update) {
            return back()->with('error', trans('response.failed'));
        }
        return back()->with('success', trans('response.updated'));

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
