<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    

    public function index(Request $request, $view)
    {
        $usersName = User::all();
        $orders = Order::with('user')->paginate(5);
        $form = $view; 

        if($form == 'orders') {
            return view('orders', [
                'orders' => $orders,
                'form' => $form,
                'usersName' => $usersName
            ]);
        } else {
            return view('orders', [
                'form' => $form,
            ]);
        }
      
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ;
        $order = new Order();
        $order -> user_id = Auth::user()->id;
        $order -> room_id =  rand(1,10);
        $order -> type = request('type'); 
        $order -> description = request('description'); 

        $order -> save();

        return redirect('/orders/makeOrder')->with('message', true);
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
