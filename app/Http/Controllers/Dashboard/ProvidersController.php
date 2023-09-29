<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Providers\CreateRequest;
use App\Models\Providers;
use App\Models\Sections;
use App\Models\SubSections;
use Exception;
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
    public function store(CreateRequest $request)
    {

        // DB::beginTransaction();
        try {

            $validated = $request->validated();
            // dd($validated);
            $validated['section_id'] = $request->section;

            $provider = Providers::create($validated);

            $provider->providsub()->sync((array) $request->input('providsub'));

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
    public function show($id)
    {

        $providsub = SubSections::where('section_id', $id)->get();

        return response()->json(['status' => 1, 'data' => $providsub]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Providers::findOrFail($id);
        $sections = Sections::orderBy('id', 'desc')->get();

        return view('dashboard.providers.edit', compact('data', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        try {

           $request->validate([
            'id' => 'required|integer|exists:providers,id',
            'title_ar' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:5120',
            'description_ar' => 'nullable|string|max:255',
            'description_en' => 'nullable|string|max:255',
            'section' => 'nullable|integer|exists:sections,id',
            'providsub.*' => 'exists:sub_sections,id',
           ]);

           $data = Providers::findOrFail($request->id);

        //    dd($request->all());
           $inputs['title_ar'] = $request->title_ar;
           $inputs['title_en'] = $request->title_en;
           $inputs['description_ar'] = $request->description_ar;
           $inputs['description_en'] = $request->description_en;
           $inputs['description_en'] = $request->description_en;
           $inputs['image'] = $request->image;
           $inputs['section_id'] = $request->section;
           $inputs['providsub'] = $data->providsub()->sync((array)$request->input('providsub'));


          $data->update($inputs);


           return back()->with('success', trans('response.updated'));

        } catch (Exception $e) {

            log_error($e);

            DB::rollBack();

            return back()->with('error', trans('response.failed'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $data = Providers::find($id);

        if (!$data->delete()) {
            return back()->with('error', trans('response.failed'));
        }
        return back()->with('success', trans('response.deleted'));
    }
}
