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
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120',
            'description' => 'required|string|max:255',
            // 'rate' => 'required|integer|max:20',
            // 'status' => 'required|integer|max:5',
            'lat' => 'required|integer',
            'lng' => 'required|integer',
            'section' => 'required|integer|exists:sections,id',
            'subsection' => 'required|integer|exists:sub_sections,id',
        ]);



        $imageName = md5(time()) . '.' . request()->file('image')->getClientOriginalExtension();

        $imageMove = request()->file('image')->move(public_path('uploads/providers/'), $imageName);

        $photoUrl = url('uploads/providers/' . $imageName);
        if (!$photoUrl) {
            return response()->json([
                'status' => false,
                'message' => 'حدث شئ ما خطأ لم يتم رفع الصورة',
            ], 200);
        }



        $inputs['image'] = $photoUrl;
        $inputs['title'] = $request->title;
        $inputs['section_id'] = $request->section;
        $inputs['sub_section_id'] = $request->subsection;
        $inputs['lat'] = $request->lat;
        $inputs['lng'] = $request->lng;
        // $inputs['status'] = $request->status;
        // $inputs['rate'] = $request->rate;
        $inputs['description'] = $request->description;


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
