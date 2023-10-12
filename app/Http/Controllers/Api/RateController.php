<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ResponseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Reates\RatesRequest;
use App\Models\Providers;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Validator;

use Exception;

use Illuminate\Support\Facades\DB;

class RateController extends Controller
{
    public function store(RatesRequest $request)
    {

        try {

            $validated = $request->validated();

            $check = Rate::where('user_id', auth('api')->id())->where('provider_id', request()->id)->first();

            if ($check) {
                return response()->json(['message' => trans('collection.rate.exist')], 444);
            }

            $item = Providers::find(request()->id);

            $validated['user_id'] = auth('api')->id();
            $validated['provider_id'] = $request->id;
            // $validated['rate'] = request()->rate;
            // $validated['review'] = request()->review;
            // $validated['cons_review'] = request()->cons_review;

            Rate::create($validated);

            $item->rate = ($item->rate == 0) ? request()->rate : ($item->rate + request()->rate) / 2;
            $item->save();

            return response()->json(['message' => trans('collection.rate.success')], 200);

        } catch (Exception $e) {

            log_error($e);

            DB::rollBack();

            return response()->json(['message' => trans('response.failed')], 444);
        }


    }

    // public function destroy($id)
    // {
    //     Validator::make(['id' => $id],['id'      => ['required', 'integer', Rule::exists('providers')],])->validate();

    //     $item = Providers::find(request()->id);

    //     $data = Rate::find($id);

    //      $item->rate = ($item->rate == 0) ? request()->rate : ($item->rate - request()->rate) == 0;
    //     $item->save();


    //     $delete = $data->delete();
    //     if (!$delete) {
    //         return response()->json(['message' => trans('response.failed')],444);
    //     }
    //     return response()->json(['message' => trans('collection.favorite.removed')],200);
    // }


    public function destroy ($id) {
        // validate check exists vendor_id in users table
        $this->validate(request(),['id' => $id],['id'=>['required','integer',Rule::exists('providers')

            ],]);

        // validate check exists vendor_id in favorites table
//        $val =$this->validate(request(),[request()->id,'vendor_id'],['vendor_id' => 'exists:favorites,vendor_id'
//        ]);

        $item = Providers::find(request()->id);

        $data = Rate::find($id)->where('user_id',auth('api')->id())->where('provider_id',request()->id)->first();

        if (!$data){
            return response()->json(['message' => trans('collection.favorite.not_exist')],444);
        }
        $item->rate = ($item->rate == 0) ? request()->rate : ($item->rate + request()->rate) - request()->rate;
        $item->save();

        $delete = $data->delete();
        if (!$delete) {
            return response()->json(['message' => trans('response.failed')],444);
        }
        return response()->json(['message' => trans('collection.favorite.removed')],200);
    }
}
