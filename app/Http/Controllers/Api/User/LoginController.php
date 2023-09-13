<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Models\User;

class LoginController extends ResponseController
{
    public function login()
    {

        $this->validate(request(), [
            'phone' => 'required|regex:/^[0-9\-\(\)\/\+\s]*$/',
            'password' => 'required|string|min:8|max:191',
        ]);

        $user = User::where('phone', request()->phone)->first();
        if (!$user) {
            return $this->apiResponse(['message' => trans('user.login.unauthorized')], 401);
        }
        if ($user->is_verified != '1') {
            $response['message'] = trans('user.login.not_verified');
            $response['is_verified'] = 0;
            return $this->apiResponse(['data' => $response], 200);
        }
        if ($user->status != '1') {
            //            $message['message'] = trans('login.login.suspended');
            return $this->apiResponse(['message' => trans('user.login.suspended')], 444);
        }
        $credentials = request(['phone', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return $this->apiResponse(['message' => trans('user.login.unauthorized')], 401);
        }
        $id = auth('api')->id();


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


        return response()->json(['data' => $response, 'message' => trans('user.login.login_success')]);

    }

    public function logout()
    {
        auth('api')->logout();
        return $this->apiResponse(['message' => trans('user.login.logout')], 200);
    }


}