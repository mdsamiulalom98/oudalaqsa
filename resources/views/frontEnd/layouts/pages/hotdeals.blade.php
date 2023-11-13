@extends('frontEnd.layouts.master')
@section('title','Hot Deals')
@push('css')
<link rel="stylesheet" href="{{asset('public/frontEnd/css/jquery-ui.css')}}">
@endpush
@section('content')
<section class="product-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page_title">
                    <p>Hot Deals</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="category-product main_product_inner">
                    @foreach($products as $key=>$value)
                    <div class="product_item wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.{{$key}}s">
                        <div class="product_item_inner">
                        <div class="pro_img">
                            <a href="{{ route('product',$value->slug) }}">
                                <img src="{{ asset($value->image ? $value->image->image : '') }}" alt="{{$value->name}}">
                            </a>
                            @if($value->old_price)
                            <div class="discount">
                                <p>Discount @php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) @endphp -{{number_format($discount,0)}}%</p>
                            </div>
                            @endif
                        </div>
                        <div class="pro_des">
                            <div class="pro_price">
                                <p>৳ {{ $value->new_price}} 
                                    @if($value->old_price)
                                    <del>৳ {{ $value->old_price}}</del>
                                    @endif
                                </p>
                            </div>
                            <div class="pro_name">
                                <a href="{{ route('product',$value->slug) }}">{{$value->name}}</a>
                            </div>
                        </div>
                        </div>
                        <div class="pro_btn">
                            <form action="{{route('cart.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$value->id}}" />
                                <input type="hidden" name="qty" value="1" />
                                <button type="submit">অর্ডার করুন</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"> 
                <div class="custom_paginate">   
                    {{$products->links('pagination::bootstrap-4')}}
                </div>  
            </div>  
        </div>  
    </div>
</section>
@endsection