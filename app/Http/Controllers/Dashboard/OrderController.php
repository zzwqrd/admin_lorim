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
}
