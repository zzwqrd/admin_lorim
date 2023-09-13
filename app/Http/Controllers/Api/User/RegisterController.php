<?php

namespace App\Http\Controllers\Api\User;


use Illuminate\Validation\Rule;
use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // return 'test';


        // input validation
        $this->validate(request(), [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'phone' => 'required|regex:/[0-9]{9}/|unique:users,phone|size:11|starts_with:01',
            'password' => 'required|alphaNum|confirmed|min:8|max:36',
        ]);

        $rand = User::randToken();
        // prepare inputs
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'is_verified' => '0',
            'password' => Hash::make($request->get('password')),
        ]);
        //        if (!$data) {
//            return $this->json(['message' => trans('response.failed')],444);
//        }
        if (!$data->save()) {
            return response()->json(['message' => trans('response.failed')], 444);

        }
        $user = User::where('id', $data->id)->first();
        $token = auth('api')->login($user, true);
        $id = auth('api')->id();
        $response['id'] = $id;
        //        $response['is_verified'] = '0';
//        $response['is_verified'] = $rand;
//        $response['token'] = 'Bearer '.$token;

        //        $response['message'] = trans('user.register.success');
//        $response['status'] = trans('user.register.success');
        $response['phone'] = $request->phone;

        $response['code'] = $rand;
        $user = User::where('phone', request()->phone)->first();
        $user->is_verified = $rand;
        $user->save();
        return response()->json(['data' => $response, 'message' => trans('user.verification.success')], 200);
        //        return response()->json(['data' => $response, 'message' => trans('user.register.success'), 'status' => trans('1')],200);

        //       return response()->json(['message' => trans('user.register.success')], 200);

        //        return response()->json(['message' => trans('user.register.success') ,'code'=> $rand],200);
//        return response()->json(['message' => trans('user.register.success')],200);
//        return response()->json(['status' => trans('user.register.success')],200);
    }

}