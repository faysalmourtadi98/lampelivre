@extends('layouts.site.layout')
@section('titre')
<title>Products</title>
@endsection
@section('content')
</div>  
  <div class="smallcontainer">  
     <div class="row row-2">
       <h2>Tous les produits</h2>
       <select>
         <option>Tri par défaut</option>
         <option>Trier par prix</option>
         <option>Trier par popularité</option>
         <option>Trier par notation</option>
         <option>Trier par vente</option>
       </select>
     </div>
     
     <div class="row">
       <!--------Products ligne 1---------->
       @foreach ($products as $product)
       <div class="col-4">
         <a href="{{Route('site.products.show',$product->id)}}"><img src="{{ asset('img/'.$product->product_image)}}" height="360"></a>
         <a href="{{Route('site.products.show',$product->id)}}">
          <div class="product_name">
            <h4>{{$product->product_name}}</h4></a>
          </div>
         <div class="rating">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-half"></i>
         </div>
         <p>{{"$product->product_prix $product->product_devise"}}</p> 
        </div> 
        @endforeach
    </div>
    <div class="page-btn">
      <span>1</span>
      <span>2</span>
      <span>3</span>
      <span>4</span>
      <span>&#8594</span>
    </div>
   </div>
@endsection