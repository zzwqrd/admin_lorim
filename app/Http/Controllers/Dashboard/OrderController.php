<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Validator;

class OrderController extends Controller
{
    public function index($type)
    {
        Validator::make(['type' => $type],['type' => 'required|string|in:new,confirmed,underway,delivered']);

        switch ($type) {
            case 'new':
                $data = Order::where('status','0')->get();
                $title = 'الطلبات الجديدة';
                break;

            case 'confirmed':
                $data = Order::where('status','1')->get();;
                $title = 'طلبات تم تأكيدها';
                break;

            case 'underway':
                $data = Order::where('status','3')->get();;
                $title = 'طلبات  قيد التنفيذ';
                break;

            case 'delivered':
                $data = Order::where('status','4')->get();;
                $title = 'طلبات تم الانتهاء منها';
                break;
            case 'canceled':
                $data = Order::where('status','2')->get();;
                $title = 'طلبات تم الغاء';
                break;

            default:
                return back();
        }
        return view('dashboard.order.index',compact('data','title'));

    }

    public function show ($id) {
        Validator::make(['id' => $id],['id' => 'required|integer|exists:orders,id']);
        $data = Order::find($id);
        $title = 'تفاصيل الطلب';
        return view('dashboard.order.show',compact('data','title'));
    }

    public function status ($id,$status) {

        Validator::make(['id' => $id],
            [
                'id' => 'required|integer|exists:orders,id',
                'status' => 'required|integer|in:1,2,3',
            ]);
        $data = Order::findOrFail($id);
        $data->status = $status;
        $save = $data->save();
        if (!$save) {
            return back()->with('error','حدث شئ ما خطأ يرجى المحاولة مرة أخرى');
        }
        if ($status == '1') {
            foreach ($data->orderItems as $orderItem) {
                // $orderItem->itemDetails->orderCost = $orderItem->itemDetails->orderCost - $orderItem->count;
                $orderItem->itemDetails->save();
            }
        }
        return back()->with('success','تم تغيير حالة الطلب');
    }
}
