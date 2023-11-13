@extends('frontEnd.layouts.master')
@section('title','Customer Checkout')
@push('css')
<link rel="stylesheet" href="{{asset('public/frontEnd/css/select2.min.css')}}">
@endpush
@section('content')
<div class="clearfix cart-page py-5">
    @php
        $subtotal = Cart::instance('shopping')->subtotal();
        $subtotal=str_replace(',','',$subtotal);
        $subtotal=str_replace('.00', '',$subtotal);
        $shipping = Session::get('shipping')?Session::get('shipping'):0;
    @endphp
   

    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <h2>login or Sign Up</h2>
             <form class="border px-5 py-4 checkout-login mb-3" method="post">
                <label for="username">Username/Email</label>
                <input type="text" class="form-control mb-3 radius-xl py-4" id="username" required>
                <label for="password">Password</label>
                <input type="text" id="password" class="form-control mb-3 radius-xl py-4" required>
                <button type="button" class="btn btn-theme"> Login </button>
                <p class="py-2">
                   <a href="./registration.html" class="text-dark">Register Now</a>
                </p>
             </form>
             <p class="text-center">OR</p>
             <div class="text-center mb-5">
                <div class="d-inline-flex justify-content-center align-items-center social-login">
                   <a href="#"><i class="fa-brands fa-google"></i></a>
                   <a href="#" class="mx-3"><i class="fa-brands fa-facebook-f"></i></a>
                   <a href="#"><i class="fa-brands fa-apple"></i></a>
                </div>
             </div>

             <div class="checkout-accordion accordion accordion-flush" id="accordion-checkout-details">
                <div class="card">
                   <div class="card-header" id="heading-1">
                      <h2 class="mb-0">
                         <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-1"
                            aria-expanded="true" aria-controls="collapse-1">
                            Delevary Details
                         </button>
                      </h2>
                   </div>

                   <div id="collapse-1" class="collapse show" aria-labelledby="heading-1"
                      data-parent="#accordion-checkout-details">
                      <div class="card-body">
                         <p class="m-0">
                            <strong>Name: </strong> <span>Rubel Mahmud</span>
                         </p>
                         <p class="m-0">
                            <strong>Address: </strong> <span>Gulshan-2, Dhaka-1212</span>
                         </p>
                         <p class="m-0">
                            <strong>Email: </strong> <span>vxlrubel@gmail.com</span>
                         </p>
                      </div>
                   </div>
                </div>
                <div class="card">
                   <div class="card-header" id="heading-2">
                      <h2 class="mb-0">
                         <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            Delivary Method
                         </button>
                      </h2>
                   </div>
                   <div id="collapse-2" class="collapse" aria-labelledby="heading-2"
                      data-parent="#accordion-checkout-details">
                      <div class="card-body">
                         Here will delivary methods ...
                      </div>
                   </div>
                </div>
                <div class="card">
                   <div class="card-header" id="heading-3">
                      <h2 class="mb-0">
                         <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            Payment Method
                         </button>
                      </h2>
                   </div>
                   <div id="collapse-3" class="collapse" aria-labelledby="heading-3"
                      data-parent="#accordion-checkout-details">
                      <div class="card-body">
                         <p class="m-0 p-0">
                            <input type="radio" id="paypal" name="payment-method"> <label for="paypal">Paypal</label>
                         </p>
                         <p class="m-0 p-0">
                            <input type="radio" id="stripe" name="payment-method"> <label for="stripe">Stripe</label>
                         </p>
                         <p class="m-0 p-0">
                            <input type="radio" id="credit-cart" name="payment-method"> <label
                               for="credit-cart">Credit
                               Cart</label>
                         </p>

                      </div>
                   </div>
                </div>
             </div>





          </div>
          <div class="col-md-6 ">
             <h2>Your Selection</h2>
             <ul class="cart-items p-0 mb-5">
                @foreach(Cart::instance('shopping')->content() as $value)
                <li class="position-relative">
                   <div class="thumb">
                      <img
                         src="{{asset($value->options->image)}}"
                         alt="product image" class="img-fluid">
                   </div>
                   <div class="desc">
                      <h4 class="text-capitalize">{{Str::limit($value->name,20)}}</h4>
                      <p class="m-0">EAU DE PARFUME / 50 ML / Female</p>
                      <div class="d-flex justify-content-between align-items-center mt-2">
                         <div class="price">
                            <span>{{$value->price}}</span> <span> ৳</span>
                         </div>
                         <div class="increse_decrese">
                            <button href="#" class="minus cart_decrement" data-id="{{$value->rowId}}">
                               <i class="fa-solid fa-minus"></i>
                            </button>
                            <input type="number" value="{{$value->qty}}" min="1" max="999" step="1" value="1">
                            <button href="#" class="plus cart_increment" data-id="{{$value->rowId}}">
                               <i class="fa-solid fa-plus"></i>
                            </button>
                         </div>
                      </div>
                   </div>
                   <a href="#" data-id="{{$value->rowId}}" class="cart_remove items-remove">
                      <i class="fa-solid fa-trash"></i>
                   </a>
                </li>
                @endforeach
                
             </ul>
             <h2>Order summary</h2>
             <ul class="m-0 p-0 order-summery">
                <li class="d-flex justify-content-between align-items-center">
                   <span>Subtotal</span>
                   <span>{{$subtotal}} BDT</span>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                   <span>Shipping Charge</span>
                   <span>{{$shipping}} BDT</span>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                   <span>Vat</span>
                   <span>25 AED</span>
                </li>
                <li class="d-flex justify-content-between align-items-center mt-4">
                   <div class="coupon">
                      <input type="text" placeholder="Apply Coupon" class="border-0 shadow-none form-control">
                      <input type="submit" value="apply" class="border-0 shadow-none btn btn-theme">
                   </div>
                </li>
                <li class="d-flex justify-content-between align-items-center mt-4">
                   <h3 class="text-capitalize">Total including taxes</h3>
                   <h3>{{$subtotal+$shipping}} BDT</h3>
                </li>
                <li class="d-flex justify-content-between align-items-center mt-4">
                   <button type="button" class="btn btn-theme w-100 radius-lg p-2"> Processed</button>
                </li>
                <li class="d-flex justify-content-between align-items-center mt-4">
                   <p>
                      By placing the order, you agree to accept our terms and conditions.Our checkout is safe and
                      secure. Your personal and payment information is securely transmitted via 128-bit encryption.
                      We do not store any payment card information on our systems
                   </p>
                </li>
             </ul>
          </div>
       </div>
    </div>
 </div>
@endsection
@push('script')
<script src="{{asset('public/frontEnd/')}}/js/parsley.min.js"></script>
<script src="{{asset('public/frontEnd/')}}/js/form-validation.init.js"></script>
<script src="{{asset('public/frontEnd/')}}/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
<script>
     $("#area").on("change", function () {
        var id = $(this).val();
        $.ajax({
            type: "GET",
            data: { id: id },
            url: "{{route('shipping.charge')}}",
            dataType: "html",
            success: function(response){
                $('.cartlist').html(response);
            }
        });
    });
</script>
@endpush