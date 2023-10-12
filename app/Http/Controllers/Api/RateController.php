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
}
