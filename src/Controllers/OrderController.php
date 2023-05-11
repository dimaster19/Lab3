<?php

namespace Lab3\Controllers;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return $orders;
    }

    public function create(Request $request)
    {
        $request->validate([
            'count' => 'required',
            'price' => 'required',
            'product_id' => 'required',

        ]);

        Order::create($request->all());

        return true;
    }

    public function update(Request $request)
    {
        $request->validate([
            'count' => 'required',
            'price' => 'required',
            'product_id' => 'required',

        ]);
        $order =  Order::find($request->id);

        $order->update($request->all());
        return true;

    }


    public function destroy(Request $request)
    {
       $order =  Order::find($request->id);
       $order->delete();
       return true;

    }
}
