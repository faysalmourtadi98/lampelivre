@extends('layouts.site.layout')
@section('titre')
<title>{{$product->product_name}}</title>
@endsection
@section('content')
</div>  
<!--------Single product details---------->
  <div class="smallcontainer single-product" >
      <div class="row">
          <div class="col1">
             <img src="{{asset('/assets/img/'.$product->product_image)}}" width="100%" id="ProductImg">
             <div class="small-img-row-">
              <div class="small-img-col-">
                  <img src="{{asset('/assets/img/'.$product->product_image)}}" width="100%" class="small-img">
              </div>
              <div class="small-img-col-">
                <img src="{{asset('/assets/img/'.$product->product_image)}}" width="100%" class="small-img">
            </div>
            <div class="small-img-col-">
              <img src="{{asset('/assets/img/'.$product->product_image)}}" width="100%" class="small-img">
          </div>
          <div class="small-img-col-">
            <img src="{{asset('/assets/img/'.$product->product_image)}}" width="100%" class="small-img">
        </div>
         </div>
          <div class="col--2">
              <h1>{{$product->product_name}}</h1>
              <p>{{$product->product_name}}</p>
              <h4>{{$product->product_prix}}$</h4>
              <form action="{{Route('site.paniers.store',$product->id)}}" method="post">
                @csrf
<!--                <select name="product_format" id="product_format">
                  <option value="">PDF</option>
                  <option value="">PPTX</option>
                  <option value="">DOC</option>
                  <option value="">MP3</option>!-->
              </select>
              <input type="number" value="1" name="product_number" id="product_number" style="width: 70px;">
              <button type="submit" class="btn">Ajouter au panier</button><br><br>
              </form>
              <h3>Détails du produit <i class="bi bi-text-indent-left "></i></h3>
              <br>
              <p class="product-titre">{{$product->product_description}}</p>
              
          </div>
      </div>
  </div>
  </div>
   <!-------------title--------------->
   <div class="smallcontainer other-product" >
   <div class="smallcontainer">
     <div class="row row-2">
       <h2>Related Product</h2>
       
     </div>
   </div>
   <!-------->
   
   <div class="smallcontainer related_products">
    <div class="row">
      @foreach ($random_products as $item)
      <div class="col-4">
        <a href="{{Route('site.products.show',$item)}}"><img src="{{asset('/assets/img/'.$item->product_image)}}" width="250" height="350"></a>
        <a href="{{Route('site.products.show',$item)}}">
          <div class="product_name">
          <h4>{{$item->product_name}}</h4>
          </div>
          </a>
        <div class="rating">
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-half"></i>
         <i class="bi bi-star"></i>
        </div>
        <p>{{$item->product_prix}}$</p>
       </div> 
       @endforeach
   </div>
  </div>
  </div>
   @endsection