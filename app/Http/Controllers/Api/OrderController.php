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
                'items' => 'required|array',
                'vendor' => 'required|integer|exists:providers,id',
            ]
        );
        $orderCost = 0;

        // get delivery price value from database
        $vendor = Providers::findOrFail(request()->vendor);
        $deliveryCost = $vendor->delivery_cost;

        // prepare inputs to be stored
        $inputs['user_id'] = auth('api')->id();
        $inputs['vendor_id'] = request()->vendor;
        $inputs['code'] = $this->randToken();
        $inputs['delivery_cost'] = $deliveryCost;


        $create = Order::create($inputs);
        if (!$create) {
            return response()->json(['message' => trans('response.failed')], 444);
        }
        // add order items
        foreach (request()->items as $item) {
            $itemPrice = $this->itemPrice($item['id']);

            $inputs['order_id'] = $create->id;
            $inputs['item_id'] = $item['id'];
            $inputs['count'] = $item['count'];
            $inputs['price'] = $itemPrice;
            $createItems = OrderItems::create($inputs);
            if (!$createItems) {
                Order::find($inputs['order_id'])->delete();
                return response()->json(['message' => trans('response.failed')], 444);
            }

            // update order cost
            $orderCost = $orderCost + ($createItems->price * $createItems->count);
        }

        // update order to set order cost, total order cost.
        $totalCost = $orderCost + $deliveryCost;
        $create->update([
            'order_cost' => $orderCost,
            'total_cost' => $totalCost,
        ]);

        return response()->json(['message' => trans('collection.order.store')], 200);
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
