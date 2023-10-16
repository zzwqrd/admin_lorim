<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Providers;
use App\Models\SubSections;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController;
use Illuminate\Validation\Rule;
use Validator;

class OrderController extends ResponseController
{
    public function store () {

        $this->validate(
            request(),
            [
                'address_description' => 'required|string',
                'coupon' => 'nullable|exists:coupons,code',
                'provider' => 'required|integer|exists:providers,id',
                'items' => 'required|array',

            ]
        );


        // get coupon details
        if (request()->coupon != null) {
            $coupon = $this->couponDetails(request()->coupon);
            if(!empty($coupon))
            {
            //  $couponDetails['id'] = $coupon->id;
              $couponDetails['code'] = $coupon->code;
              $couponDetails['discount'] = $coupon->discount;
            }else{
              $couponDetails['code'] = null;
              $couponDetails['discount'] = null;
            }
        }
        else {
            $couponDetails['code'] = null;
            $couponDetails['discount'] = null;
        }
        $orderCost = 0;
        $discount = 0;



        // prepare inputs to be stored
        $order_inputs['user_id'] = auth('api')->id();
        $order_inputs['providers_id'] = request()->provider;
        $order_inputs['code'] = $this->randToken();
        // 1
        $order_inputs['coupon'] = $couponDetails['code'];
        $order_inputs['coupon_discount'] = $couponDetails['discount'];
        // $inputs['shipping_cost'] = $sippingCost;

        $order_inputs['address_description'] = request()->address_description;

        $create = Order::create($order_inputs);
        if (!$create) {
            return response()->json(['message' => trans('response.failed')],444);
        }

     if(!empty($coupon)){
          $state = Coupon::where('code',$couponDetails['code'])->first();
          $state->status = '0';
          $state->save();
        }

        // add order items
        foreach (request()->items as $item) {
            // var_dump($item); exit();
            $itemPrice = $this->itemPrice($item['id']);
            $inputs['order_id'] = $create->id;
            $inputs['sub_sections_id'] = $item['sub_sections_id'];
            $inputs['providers_id'] = $item['providers_id'];
            $inputs['count'] = $item['count'];
            $inputs['price'] = $itemPrice;



            $createItems = OrderItems::create($inputs);
            if (!$createItems) {
                Order::find($inputs['order_id'])->delete();
                return response()->json(['message' => trans('response.failed')],444);
            }

            // update order cost
            $orderCost = $orderCost + ($createItems->price * $createItems->count);
        }

        if ($create->coupon != null){
            $discount = ($orderCost * $couponDetails['discount']) / 100;
        }
        // update order to set order cost, total order cost.
        $totalCost = $orderCost +  $discount;
        $create->update([
            'order_cost' => $orderCost,
            'total_cost' => $totalCost,
        ]);

        // update user points
        return response()->json(['message' => trans('collection.order.success')],200);
      }
    protected function itemPrice($id)
    {
        $item = SubSections::findOrFail($id);
        return $item->price;
    }

    protected function randToken () {
        $token = rand(1000000,9999999);
        return (Order::where('code',$token)->first())?$this->randToken():$token;

    }
}
