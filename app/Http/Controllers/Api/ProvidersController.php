<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProvidersResource;
use App\Http\Resources\SubSectionsResource;
use App\Models\Providers;
use App\Models\SubSections;
use Illuminate\Http\Request;
use Validator;



class ProvidersController extends Controller
{
    public function index()
    {
        $data = Providers::orderBy('id', 'desc')->get();


        return response()->json(['data' => $data, 200,]);
    }


    public function show($id)
    {


        // Validator::make(
        //     ['id' => $id],
        //     [
        //         'id' => 'required|integer|exists:sub_sections,id',

        //     ]
        // )->validate();


        $subSection = Providers::with([ 'providsub', 'section', 'rates'])->findOrFail($id);

        if (!$subSection) {

            return response()->json(['message' => 'Providers not found'], 404);

        }

        return response()->json([
            'data' => [
                'subSection' => $subSection,
            ]
        ]);

    }

    public function showProvider($id) {

        $provider = SubSections::with('providers')->findOrFail($id);

        if (!$provider) {

            return response()->json(['message' => 'Providers not found'], 404);

        }

        return response()->json([
            'data' => $provider
        ]);
    }
}
