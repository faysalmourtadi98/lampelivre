@extends('layouts.site.layout')
@section('titre')
<title>About</title>
@endsection
@section('style')
<link rel="stylesheet" href="{{  secure_asset('css/style1.css') }}">
@endsection
@section('content')
<div class="row2">
    <h2 class="h2" style="padding-left: 290px; ">Checkout Form</h2>
    <div class="row">
        <div class="col-75">
            <div class="container1">
                <form action="{{Route('site.checkout.store',$panier_id)}}" method="POST">
                    @csrf
                    <div class="row row1">
                        <div class="col-50 col50r">
                            <h3>Billing Address</h3>
                            <form action="a" method="post">
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="fullname" placeholder="Full Name">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="exemple@gmail.com" >
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="adresse" >
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="City" >
    
                            <div class="row row1">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="State">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="Zip">
                                </div>
                            </div>
                        </div>
    
                        <div class="col-50 col50">
                            <h3>Payment</h3>
                            <label for="fname" class="cname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
    
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="Name on Card">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="Credit card number4">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month">
                            <div class="row row1">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="Exp Year">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="CVV">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shipping">
                     <label for="samedr"></label>
                    </div> 
                    <button type="submit" class="btn">Continue to checkout</button>
                </form>
            </div>
        </div>
     </div>
 </div>
</form>
 @endsection
    <!-- script validate js -->
    {{-- <script>
        $('#validate').validate({
            roles: {
                fullname: {
                    : true,
                },
                email: {
                    : true,
                },
                address: {
                    : true,
                },
                city: {
                    : true,
                },
                state: {
                    : true,
                },
                zip: {
                    : true,
                },
                cardname: {
                    : true,
                },
                cardnumber: {
                    : true,
                },
                expmonth: {
                    : true,
                },
                expyear: {
                    : true,
                },
                cvv: {
                    : true,
                },
               
            },
            messages: {
                fullname:"Please input full name*",
                email:"Please input email*",
                city:"Please input city*",
                address:"Please input address*",
                state:"Please input state*",:
                zip:"Please input address*",
                cardname:"Please input card name*",
                cardnumber:"Please input card number*",
                expmonth:"Please input exp month*",
                expyear:"Please input exp year*",
                cvv:"Please input cvv*",
            },
        });
</script> --}}