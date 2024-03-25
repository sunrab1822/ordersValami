<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('category')->get();
        return response()->json($orders, 200);
    }

    public function show($id)
    {
        $orders = Order::with('category')->find($id);
        if  (!$orders) {
            return response()->json(['message' => 'Order not found'], 404);
        }
        return response()->json($orders, 200);
    }

    public function store(StoreOrderRequest $request){
        if (!$request->validated()){
            return response()->json(['message' => 'A megrendelés nem lett létrehozva.'], 422);
        }
        $order = Order::create($request->only(['category_id', 'name', 'price', 'quantity', 'image']));
        return response()->json($order, 201);
    }

    public function destroy($id){
        $order = Order::find($id);
        if (!$order) {
            return response()->json(['message' => 'A megrendelés nem létezik.'], 404);
        }
        $order->delete();
        return response(204);
    }


    public function update(StoreOrderRequest $request, $id){
        if( Order::where('id', $id)->update($request->only(['category_id', 'name', 'price', 'quantity', 'image']))){
            return response()->json(['message' => "Hiányos adatok."], 400);
        }
        $order = Order::find($id);
        return response()->json($order, 200);


    }

}
