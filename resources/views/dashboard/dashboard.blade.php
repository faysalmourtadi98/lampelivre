@extends('layouts.dashboard.layout')
@section('titre')
    <title>Dashboard</title>
@endsection
@section('content')
<div class="titre">
    <h1>Welcome to Dashboard</h1>
    <hr>
</div>
<div class="row">
    <!--Catategory-->
    <div class="col-md-3">
        <div class="card bg-red text-white ">
            <div class="card-body">
                <h4 class="font-weight-light"><i class="fa fa-dolly" ></i>&nbsp;All Category</h4>
                <hr>
                <h5>
                    <b>{{$categories->count()}}</b>
                </h5>
            </div>
        </div>
    </div>
    <!--Products-->
    <div class="col-md-3">
        <div class="card bg-green text-white ">
            <div class="card-body">
                <h4 class="font-weight-light"><i class="fas fa-dolly-flatbed" ></i>&nbspAll Products</h4>
                <hr>
                <h5>
                    <b>{{$products->count()}}</b>
                    
                </h5>
            </div>
        </div>
    </div>
    <!---Users-->
    <div class="col-md-3">
        <div class="card bg-blue text-white ">
            <div class="card-body">
                <h4 class="font-weight-light"><i class="fas fa-users"></i>&nbsp All Users</h4>
                <hr>
                <h5>
                    <b>{{$users->count()}}</b>
                </h5>
            </div>
        </div>
    </div>
    <!---Orders-->
    <div class="col-md-3">
        <div class="card bg-blue-marin text-white ">
            <div class="card-body">
                <h4 class="font-weight-light"><i class="fa fa-truck" ></i>&nbsp;Orders</h4>
                <hr>
                <h5>
                    <b>5</b>
                </h5>
            </div>
        </div>
    </div>
</div>
<div class="all-orders mt-2">
    <h2>Users</h2><hr>
    <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col" class="bg-primary text-white">#</th>
            <th scope="col" class="bg-primary text-white">Nom</th>
            <th scope="col" class="bg-primary text-white">Prenom</th>
            <th scope="col" class="bg-primary text-white">Email</th>
            <th scope="col" class="bg-primary text-white">Date Naissance</th>

          </tr>
        </thead>
        <tbody>
          <tr>
              @foreach ($users as $key)
              <th scope="row">{{$key->id}}</th>
              <td>{{$key->first_name}}</td> 
              <td>{{$key->last_name}}</td>
              <td>{{$key->email}}</td>
              <td>{{$key->date_naissance}}</td>  
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
</div>
</section>    
@endsection