<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Order;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Orders_Product;


class OrderController extends Controller
{

    public function place_order(Request $r)
    {
        $order = new Order;
        $order->user_id = Session::get('user_id');
        $order->save();

        $product = Products::query()
            ->select('*')
            ->where('stock', '>', '0')
            ->get();

        $order_products = [];
        for ($i = 0; $i < count($product); $i++) {
            $num_ordered = $r->input('order_' . $product[$i]->product_id);
            if ($num_ordered > 0) {
                $op = new Orders_Product;
                $op->order_id = $order->order_id;
                $op->product_id = $product[$i]->product_id;
                $op->quantity = $num_ordered;
                $op->save();
                array_push($order_products, $op);
            }
        }
        return view('merch_success', compact('order'));
    }

    public function index_product()
    {

        $product = Products::query()
            ->select('*')
            ->get();

        return view('user_merch', compact('product'));
    }
}
