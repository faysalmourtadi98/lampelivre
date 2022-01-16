<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('dashboard.orders.index',['orders'=>Checkout::where('checkout_valide','NON')->get()]);
    }
    public function index_valid()
    {   
        return view('dashboard.orders_valide.index',['orders'=>Checkout::where('checkout_valide','OUI')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function valide(Request $request,$id)
    {
        $order=Checkout::findOrFail($id);
        $order->checkout_valide="OUI";
        $order->save();
        return redirect(Route('dashboard.orders.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.orders.show',['order'=>Checkout::findOrFail($id)]);
    }
    public function delete($id)
    {
        $panier=Checkout::findOrFail($id);
        $panier->delete();
        return redirect(Route('dashboard.orders.index'));
    }
}