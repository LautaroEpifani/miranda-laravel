<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($view)
    {
        
        $form = $view;   
        if($form == 'orders') {
            $orders = Order::paginate(5);
            return view('orders', [
                'orders' => $orders,
                'form' => $form,
            ]);
        } else {
            return view('orders', [
                'form' => $form
            ]);
        }
      
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order -> user_id = request('user_id');
        $order -> room_id = request('room_id');
        $order -> type = request('type'); 
        $order -> description = request('description'); 

        $order -> save();

        return redirect('/makeOrder')->with('message', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
