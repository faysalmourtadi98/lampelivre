@extends('layouts.site.layout')
@section('titre')
<title>Cart</title>
@endsection
@section('content')
</div>  
<!------------carte items details------------->
<div class="smallcontainer cart-page">
   <table>
       <tr>
           <th class="prod">Produit</th>
           <th class="quan">Quantité</th>
           <th class="prixT">Prix Total</th>
       </tr>
        @foreach ($panier as $item)
        <tr>
            <td>
                <div class="cart-info">
                   <img src="{{asset('/assets/img/'.$item->product->product_image)}}">
                   <div>
                        <p>{{$item->product->product_name}}</p>
                        <small>Price : {{$item->product->product_prix}}$</small><br>                     
                        <form action="{{Route('site.paniers.delete',[$item->id,$item->user_id,$item->product_id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE">
                        </form>
                   </div>
                </div>
            </td>
            <td><input type="number" value="{{$item->nb_products}}"></td>
            <td>Price Total : {{$item->product_prix_total}} $</td>
        </tr>
        @endforeach
   </table>
   <div class="total-price">
       <table>
           <tr>
              <td class="cl1">SubTotal</td>
              <td>${{$panier_prix_total}}.00</td>
           </tr>
           <tr>
              <td class="cl1">Tax</td>
              <td>5%</td>
           </tr>
           <tr>
              <td class="cl1">Total</td>
              <td>${{$panier_prix_total*1.05}}.00</td>
           </tr>
           <tr>
            <td colspan="2">
              <div class="divBtn">
                @foreach ($panier_id as $item)
                  <a href="{{Route('site.checkout.index',$item->id)}}" class="btn btncheck">proceed to checkout</a>
              </div>
              @endforeach
            </td>  
           </tr>
       </table>
   </div>
</div>
@endsection