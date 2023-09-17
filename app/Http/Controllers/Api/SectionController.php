<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SectionResource;
use App\Models\Sections;
use Illuminate\Http\Request;
use Validator;

class SectionController extends Controller
{
    public function index()
    {
        $data = Sections::orderBy('id', 'desc')->get();

        return response()->json(['data' => new SectionResource($data), 200,]);
    }
    public function show($id)
    {
        Validator::make(
            ['id' => $id],
            [
                'id' => ['required', 'integer', 'exists:sections,id'],
            ]
        )->validate();

        $data = Sections::where('id', $id)->get();

        if (!$data) {
            return $this->apiResponse(['message' => trans('response.failed')], 444);
        }

        return response()->json(['data' => new SectionResource($data), 'message' => trans('success'), 'state' => 200,], 200);
    }
}
