<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Sections\SectionsRequest;
use App\Models\Sections;
use Illuminate\Http\Request;
use Session;
use Illuminate\Http\UploadedFile;
use Validator;
use Illuminate\Support\Facades\DB;
use Exception;
class SectionController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sections::get();

        return view('dashboard.sections.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sections/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionsRequest $request)
    {


        try {

            $validated = $request->validated();

            Sections::create($validated);

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
    public function show(Sections $sections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->validate(request(), ['id' => $id], [
            'id' => 'required|integer|exists:sections,id',
        ]);
        $data = Sections::findOrFail($id);
        return view('dashboard.sections.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sections $sections)
    {
        $request->validate([
            'id' => 'required|integer|exists:sections,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'title' => 'nullable|string',
        ]);
        $sections = Sections::findOrFail($request->id);

        $inputs['title_ar'] = $request->title_ar;
        $inputs['title_en'] = $request->title_en;
        $inputs['image'] = $request->image;

        $update = $sections->update($inputs);
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
            [
                'id' => $id,
            ],
            [
                'id' => 'required|integer|exists:sections,id'
            ],
        )->validate();
        $section = Sections::findOrFail(request()->id);

        $delete = $section->delete();

        if (!$delete) {
            return back()->with('error', trans('خطأ'));

        }
        if ($section->image != null && file_exists(public_path('uploads/sections/' . $section->image))) {
            unlink(public_path('uploads/sections/' . $section->image));
        }
        return back()->with('success', trans('response.deleted'));

    }
}
