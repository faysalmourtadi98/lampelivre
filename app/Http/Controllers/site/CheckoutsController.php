<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index($panier_id)
    {
        return view('site.checkout.index',['panier_id'=>$panier_id]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$panier_id)
    {
        $checkout=new Checkout();
        $checkout->panier_id=$panier_id;
        $checkout->checkout_full_name=$request->input('fullname');
        $checkout->checkout_email=$request->input('email');
        $checkout->checkout_adress=$request->input('address');
        $checkout->checkout_city=$request->input('city');
        $checkout->checkout_state=$request->input('state');
        $checkout->checkout_zip=$request->input('zip');
        $checkout->checkout_name_on_card=$request->input('cardname');
        $checkout->checkout_credit_cart_number=$request->input('cardnumber');
        $checkout->checkout_exp_month=$request->input('expmonth');
        $checkout->checkout_exp_year=$request->input('expyear');
        $checkout->checkout_cvv=$request->input('cvv');
        $checkout->checkout_valide='NON';
        $checkout->save();
        return redirect(Route('site.home.index'));
    }
}