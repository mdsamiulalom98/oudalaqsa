@extends('frontEnd.layouts.master') 
@section('title','Where Shopping is just a Click') 
@push('seo')
<meta name="app-url" content="" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<!-- Twitter Card data -->
<meta name="twitter:card" content="product" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="" />
<meta name="twitter:description" content="" />
<meta name="twitter:creator" content="" />
<meta name="twitter:image" content="" />

<!-- Open Graph data -->
<meta property="og:title" content="" />
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:description" content="" />
<meta property="og:site_name" content="" />
<meta property="fb:app_id" content="" />

@endpush
@push('css')
<link rel="stylesheet" href="{{asset('public/frontEnd/css/owl.carousel.min.css')}}" />
<link rel="stylesheet" href="{{asset('public/frontEnd/css/owl.theme.default.min.css')}}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet" />
@endpush 
@section('content')
<section class="slider-section">
    <div class="container">
        <div class="row">
            <div class="home-slider-container">
                <div class="main-slider owl-carousel">
                    @foreach($sliders as $key=>$value)
                    <div class="slider-item">
                        <img src="{{asset($value->image)}}" alt="" />
                    </div>
                    <!-- slider item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider end -->

@foreach ($homeproducts as $homecat)
<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <span class="section-title-name">{{ $homecat->name }}</span>
                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="main_product_inner">
                    @foreach($homecat->products as $key=>$value)
                    <div class="product_item wist_item wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.{{$key}}s">
                        <div class="product_item_inner">
                            <div class="sale-badge">
                                <div class="sale-badge-inner">
                                    <div class="sale-badge-box">
                                        <span class="sale-badge-text">Sale!</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pro_img">
                                <a href="{{ route('product',$value->slug) }}">
                                    <img src="{{ asset($value->image ? $value->image->image : '') }}" alt="{{$value->name}}" />
                                </a>
                                <div class="quick_view_btn">
                                    <button data-id="{{$value->id}}" class="hover-zoom quick_view" title="quick view">Quick View</button>
                                </div>
                                
                            </div>
                            <div class="pro_des">
                                <div class="pro_name">
                                    <a href="{{ route('product',$value->slug) }}">{{Str::limit($value->name,80)}}</a>
                                </div>
                                <div class="pro_price">
                                    <p>
                                        <del>৳ {{ $value->old_price}}</del>
                                        ৳ {{ $value->new_price}} @if($value->old_price) @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="pro_btn">
                            <form action="{{route('cart.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$value->id}}" />
                                <input type="hidden" name="qty" value="1" />
                                <button type="submit">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach 
@endsection 
@push('script')
<script src="{{asset('public/frontEnd/js/owl.carousel.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".main-slider").owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            nav: true,
            autoplayHoverPause: false,
            margin: 0,
            mouseDrag: true,
            smartSpeed: 5000,
            autoplayTimeout: 8000,
            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
            animateOut: "fadeOut",
            animateIn: "fadeInRight",
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(".hotdeals-slider").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: false,
                },
            },
        });

        $(".owl-nav").remove();
    });
</script>
<script>
    $(document).ready(function () {
        $(".category-slider").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 5,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 8,
                    nav: true,
                    loop: false,
                },
            },
        });

        $(".owl-nav").remove();
    });
</script>
@endpush
