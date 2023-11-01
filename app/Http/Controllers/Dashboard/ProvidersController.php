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
    public function store(CreateRequest $request)
    {

        // DB::beginTransaction();
        try {

            $validated = $request->validated();

            // $validated['section_id'] = $request->section;

            // dd($validated);


            $provider = Providers::create($validated);

            $provider->section()->sync((array) $request->input('section'));

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
        $data = SubSections::where('section_id', $id)->get();

        return response()->json(['status' => 1, 'data' => $data]);
    }

    public function showsub($id)
    {


        $data = SubSections::where('section_id', $id)->get();

        return response()->json(['status' => 1, 'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {



     $this->validate(request(), ['id' => $id], [
            'id' => 'required|integer|exists:providers,id',
        ]);


        $data = Providers::findOrFail($id);

        $sections = Sections::orderBy('id', 'desc')->get();

        $subSections = SubSections::orderBy('id', 'desc')->get();

    //     $test = DB::table('providers')
        // ->join('provider_section', 'providers.id', '=', 'provider_section.providers_id')
        // ->join('provider_sub_section', 'provider_sub_section.sections_id', '=', 'provider_section.id')
        // ->join('sections', 'sections.id', '=', 'provider_section.sections_id')
        // ->join('sub_sections', 'sub_sections.id', '=', 'provider_sub_section.sub_sections_id')
        // ->select('providers.*','provider_section.id as provider_section_id', 'sections.id as section_id', 'sub_sections.id as sub_sections_id')
        // ->where('providers.id', '=', $id)
        // ->get();

    //    $tt = $test->groupBy('id');
    //    $tt = $test->groupBy('section_id');




    $comments = Providers::with('section', 'providsub')
    ->where('providers.id', '=', $id)
    ->get()
    ->toArray();

    $grouped = collect($comments);

    $test =  $grouped->groupBy('provider_section_id');

    // dd($test);

        return view('dashboard.providers.edit', compact('data','comments', 'sections', 'subSections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateRequest $request)
    {

        try {
            $validated = $request->validated(['id' => 'required|integer|exists:providers,id',]);


           $data = Providers::findOrFail($request->id);

        //    dd($request->all());
           $validated['title_ar'] = $request->title_ar;
           $validated['title_en'] = $request->title_en;
           $validated['description_ar'] = $request->description_ar;
           $validated['description_en'] = $request->description_en;
           $validated['image'] = $request->image;
        //    $validated['section_id'] = $request->section;
           $validated['section'] = $data->section()->sync((array) $request->input('section'));
           $validated['providsub'] = $data->providsub()->sync((array) $request->input('providsub'));

        //    $data->section()->sync((array) $request->input('section'));

        //    $data->providsub()->sync((array) $request->input('providsub'));


          $data->update($validated);




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

    // public function destroyItem ($id) {
    //     Validator::make(['id' => $id],['id' => 'required|integer|exists:provider_section,id'])->validate();
    //     $data = Providers::findOrFail($id);
    //     $data->section()->sync((array) request()->input('section'));
    //     $delete = $data->delete();
    //     if (!$delete) {
    //         return back()->with('error','حدث شئ ما خطأ يرجى المحاولة مرة أخرى');
    //     }

    //     return back()->with('success','تم حذف العنصر بنجاح');

    // }
}
