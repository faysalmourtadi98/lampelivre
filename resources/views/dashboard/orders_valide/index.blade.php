@extends('layouts.dashboard.layout')
@section('titre')
    <title>Orders Valid</title>
@endsection
@section('content')
<div class="all-orders mt-2">
  <div class="page-titre">    <h2>Orders Valid</h2><hr></div>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col" class="bg-primary text-white">#</th>
        <th scope="col" class="bg-primary text-white">Panier ID</th>
        <th scope="col" class="bg-primary text-white">Full Name</th>
        <th scope="col" class="bg-primary text-white">Email</th>
        <th scope="col" class="bg-primary text-white">Adress</th>
        <th scope="col" class="bg-primary text-white">Card Name</th>
        <th scope="col" class="bg-primary text-white">Credit Card Number</th>
        <th scope="col" class="bg-primary text-white">Exp Month/Year</th>
        <th scope="col" class="bg-primary text-white">CVV</th>
        <th scope="col" class="bg-primary text-white">City</th>
        <th scope="col" class="bg-primary text-white">State</th>
        <th scope="col" class="bg-primary text-white">Zip</th>
        <th scope="col" class="bg-primary text-white">Show</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach ($orders as $key)
          <th scope="row">{{$key->id}}</th>
          <th>{{$key->panier_id}}</th>
          <td>{{$key->checkout_full_name}}</td>
          <td>{{$key->checkout_email}}</td>
          <td>{{$key->checkout_adress}}</td>
          <td>{{$key->checkout_name_on_card}}</td>
          <td>{{$key->checkout_credit_cart_number}}</td>
          <td>{{$key->checkout_exp_month."/".$key->checkout_exp_year}}</td>
          <td>{{$key->checkout_cvv}}</td>
          <td>{{$key->checkout_city}}</td>
          <td>{{$key->checkout_state}}</td>
          <td>{{$key->checkout_zip}}</td>
        <td>
            <a href="{{Route('dashboard.orders.show',$key->id)}}">
                <button type="button" class="btn btn-outline-primary"><i class="far fa-eye"></i></button>
            </a>
        </td>  
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</section>    
@endsection