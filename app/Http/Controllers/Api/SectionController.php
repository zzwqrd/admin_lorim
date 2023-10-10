<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SectionResource;
use App\Http\Resources\SubSectionsResource;
use App\Models\Sections;
use App\Models\SubSections;
use Illuminate\Http\Request;
use Validator;

class SectionController extends Controller
{
    public function index()
    {
        // $data = Sections::orderBy('id', 'desc')->get();
        // $data = auth('api')->user()->section;
        $data = Sections::orderBy('id', 'desc')->with([ 'subsection'])->get();

        return response()->json(['data' =>  $data, 'message' => trans('success'),
                'status' => 200, ]);
    }
    public function show_sub($id)
    {

        // Validator::make(
        //     ['id' => $id],
        //     [
        //         'id' => 'required|integer|exists:sections,id',

        //     ]
        // )->validate();


        $sections = Sections::where('id', $id)->get();

        $subSections = SubSections::where('section_id', $id)->get();


        if (!$subSections) {
            return $this->apiResponse(['message' => trans('response.failed')], 444);
        }

        return response()->json(
            [
                'data' => [
                    'sections' => new SectionResource($sections),
                    'subSections' => new SubSectionsResource($subSections)
                ],
                'message' => trans('success'),
                'status' => 200
            ],
            200
        );

    }
}
