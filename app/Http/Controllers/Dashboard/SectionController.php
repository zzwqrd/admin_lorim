<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Sections;
use Illuminate\Http\Request;

use Validator;

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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120',
        ]);

        $imageName = md5(time()) . '.' . request()->file('image')->getClientOriginalExtension();

        $imageMove = request()->file('image')->move(public_path('uploads/sections'), $imageName);

        $photoUrl = url('/uploads/sections' . $imageName);
        if (!$photoUrl) {
            return back()->with('error', trans('response.failed'));
        }

        $inputs['image'] = $imageName;
        $inputs['title'] = $request->title;

        $create = Sections::create($inputs);
        if (!$create) {
            return back()->with('error', trans('response.failed'));
        }
        return back()->with('success', trans('response.added'));
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
    public function edit(Sections $sections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sections $sections)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sections $sections)
    {
        //
    }
}