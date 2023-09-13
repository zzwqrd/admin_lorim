<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\ResponseController;
use App\Models\User;

class VerifyController extends ResponseController
{
    public function verify()
    {
        $this->validate(request(), [
            'code' => 'required|numeric',
            $this->validate(request(), ['phone' => 'required|exists:users,phone|max:191',]),
        ]);
        $user = User::where('is_verified', request()->code)->first();
        if (!$user) {
            return response()->json(['message' => trans('user.verification.not_valid')], 444);
        }
        $rand = User::randToken();
        $user->is_verified = '1';
        $user->save();
        $token = auth('api')->login($user, true);
        $id = auth('api')->id();
        $response['id'] = $id;
        $response['is_verified'] = '1';
        $response['phone'] = request()->phone;
        $response['id'] = $id;
        $response['image'] = request()->image;
        $response['username'] = request()->username;
        $response['name'] = request()->name;
        $response['email'] = request()->email;
        $response['phone'] = request()->phone;
        $response['remember_token'] = $token;
        $response = User::where('phone', request()->phone)->first();
        $response['token'] = $token;
        return $this->apiResponse(['data' => $response, 'message' => trans('user.register.success'), 'status' => trans('1')], 200);
    }

    public function resend()
    {
        $this->validate(request(), ['phone' => 'required|exists:users,phone|max:191',]);
        $user = User::where('phone', request()->phone)->first();
        $rand = User::randToken();

        $user->is_verified = $rand;
        $user->save();
        return response()->json(['message' => trans('user.verification.success'), 'code' => $rand], 200);
        //        return response()->json(['message' => trans('user.verification.success')]);
    }

}