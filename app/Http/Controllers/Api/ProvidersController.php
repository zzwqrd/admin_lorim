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


        return response()->json(['data' => (new ProvidersResource($data)), 200,]);
    }


    public function show($id)
    {
        try {

            Validator::make(
                ['id' => $id],
                [
                    'id' => 'required|integer|exists:providers,id',

                ]
            )->validate();

            // $subSection = SubSections::find($id);
            // $providers = Providers::find($id);


            $subSection = SubSections::with('Providers')->findOrFail($id);

            if (!$subSection) {

                return response()->json(['message' => 'Providers not found'], 404);

            }
            // $providers = $subSection->providers;

            return response()->json([
                'data' => [
                    'subSection' => $subSection,
                    // 'Providers' => new ProvidersResource($providers),
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([], 200);
        }





    }
}