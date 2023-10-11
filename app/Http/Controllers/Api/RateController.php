<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\Providers;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
class RateController extends Controller
{
    public function store () {
        Validator::make(request()->all(),
            [
                'id'      => ['required','integer',Rule::exists('providers')],
                'rate'    => 'required|numeric',
                'review'    => 'required|string',
                'cons_review'    => 'required|string',

            ])->validate();
        $check = Rate::where('user_id',auth('api')->id())->where('provider_id',request()->id)->first();
        if ($check) {
            return response()->json(['message' => trans('collection.rate.exist')],444);
        }
        $item = Providers::find(request()->id);

        $create = Rate::create([
            'user_id'   => auth('api')->id(),
            'provider_id'   => request()->id,
            'rate'      => request()->rate,
            'review'      => request()->review,
            'cons_review'      => request()->cons_review,
        ]);
        if (!$create) {
            return response()->json(['message' => trans('response.failed')],444);
        }
        $item->rate = ($item->rate == 0)? request()->rate : ($item->rate + request()->rate) / 2 ;
        $item->save();
        return response()->json(['message' => trans('collection.rate.success')],200);
    }
}
