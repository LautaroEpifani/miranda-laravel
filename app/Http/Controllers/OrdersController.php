<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{


    public function index()
    {
        $orders = Order::with('user')->paginate(5);


        return view('orders', [
            'orders' => $orders,
        ]);

    }

    public function create()
    {
        return view('createOrder');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ;
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->room_id = request('room_number');
        $order->type = request('type');
        $order->description = request('description');

        $order->save();

        return redirect('/createOrder')->with('message', true);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::find($id);

        return view('/editOrder', [
            'order' => $order,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->type = $request->type;
        $order->description = $request->description;

        $order->save();

        return redirect('/orders');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect('/orders');
    }
}