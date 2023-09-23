<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Providers;
use App\Models\Sections;
use App\Models\SubSections;
use Illuminate\Http\Request;

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
        // dd(request()->all());


        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120',
            'description_ar' => 'required|string|max:255',
            'description_en' => 'required|string|max:255',
            // 'rate' => 'required|integer|max:20',
            'section' => 'required|integer|exists:sections,id',
            'subsection' => 'required|integer|exists:sub_sections,id',
        ], [
                'title_ar.required' => 'يجب ادخال الاسم بالغه العربيه',
                'title_en.required' => 'يجب ادخال الاسم بالغه الانجلزيه',
                'description_ar.required' => 'يجب ادخال الاسم بالغه العربيه',
                'description_en.required' => 'يجب ادخال الاسم بالغه الانجلزيه',
                'image.required' => 'يجب ادخال الصوره',
                'section.required' => 'يجب أختيار القسم',
                'subsection.required' => 'يجب أختيار القسم الفرعي',
            ]);







        $inputs['image'] = uploadFile($request->image, 'providers');
        $inputs['title_ar'] = $request->title_ar;
        $inputs['title_en'] = $request->title_en;
        $inputs['section_id'] = $request->section;
        $inputs['sub_section_id'] = $request->subsection;
        $inputs['description_ar'] = $request->description_ar;
        $inputs['description_en'] = $request->description_en;


        $create = Providers::create($inputs);


        if (!$create) {
            return back()->with('error', trans('response.failed'));
        }
        return back()->with('success', trans('response.added'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

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
