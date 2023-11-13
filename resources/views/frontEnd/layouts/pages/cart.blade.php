@extends('frontEnd.layouts.master')
@section('title','Shopping Cart')
@section('content')
<div class="clearfix cart-page py-5">
    @php
        $subtotal = Cart::instance('shopping')->subtotal();
        $subtotal=str_replace(',','',$subtotal);
        $subtotal=str_replace('.00', '',$subtotal);
        view()->share('subtotal',$subtotal);
        $shipping = Session::get('shipping')?Session::get('shipping'):0;
        $discount = Session::get('discount')?Session::get('discount'):0;
    @endphp

    <div class="container">
       <form action="#">
          <div class="row">
             <div class="col-md-7 col-lg-8">
                <h2>Your shopping bag <span>({{ Cart::instance('shopping')->count() }})</span></h2>
                <ul class="cart-items p-0 m-0">
                    @foreach(Cart::instance('shopping')->content() as $value)
                   <li class="position-relative">
                      <div class="thumb">
                         <img
                            src="{{asset($value->options->image)}}"
                            alt="product image" class="img-fluid">
                      </div>
                      <div class="desc">
                         <h4 class="text-capitalize">{{$value->name}}</h4>
                         <p class="m-0">EAU DE PARFUME / 50 ML / Female</p>
                         <div class="d-flex justify-content-between align-items-center mt-2">
                            <div class="price">
                               <span>{{$value->price}}</span> <span> BDT</span>
                            </div>
                            <div class="increse_decrese">
                                <button  class="minus cart_decrement" data-id="{{$value->rowId}}">
                                    <i class="fa-solid fa-minus"></i>
                                 </button>
                                 <input type="number" value="{{$value->qty}}" min="1" max="999" step="1" value="1">
                                 <button  class="plus cart_increment" data-id="{{$value->rowId}}">
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
             </div>
             <div class="col-md-5 col-lg-4 col-xl-3 offset-xl-1">
                <h2>Order summary</h2>
                <ul class="m-0 p-0 order-summery">
                   <li class="d-flex justify-content-between align-items-center">
                      <span>Subtotal</span>
                      <span>150 AED</span>
                   </li>
                   <li class="d-flex justify-content-between align-items-center">
                      <span>Shipping Charge</span>
                      <span>50 AED</span>
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
                      <h3>225 AED</h3>
                   </li>
                   <li class="d-flex justify-content-between align-items-center mt-4">
                      <button type="button" class="btn btn-theme w-100 radius-lg p-2"> Checkout</button>
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
       </form>
    </div>
 </div>
@endsection
