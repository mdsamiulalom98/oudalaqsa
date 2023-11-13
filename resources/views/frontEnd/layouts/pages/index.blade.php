@extends('frontEnd.layouts.master') 
@section('title','Online Shopping in Dinajpur | Order now! From') 
@push('seo')
<meta name="app-url" content="" />
<meta name="robots" content="index, follow" />
<meta name="description" content="oudalaqasa.com is an e-commerce website for online shopping and cash on delivery of quality products. Online Shop now! At Dinajpur District in Bangladesh." />
<meta name="keywords" content="oudalaqasa.com, oudalaqasa, Dinajpur, দিনাজপুর, দিনাজপুর বিডি, e-commerce, online shopping, quality products, cash on delivery, products, Women’s Fashion, Men’s Fashion, Baby Fashion& Care, Beauty and Personal care, Home and Life style, Medicine, Natural Medicine and Product, Groceries, Electronics & Gadgets, Books"  />

<!-- Open Graph data -->
<meta property="og:title" content="Online Shopping in oudalaqasa.com: Order Now & Save Time!" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://oudalaqasa.com/" />
<meta property="og:image" content="{{asset($generalsetting->white_logo)}}" />
<meta property="og:description" content="oudalaqasa.com is an e-commerce website for online shopping and cash on delivery of quality products. Online Shop now! At Dinajpur District in Bangladesh." />


@endpush
@push('css')

@endpush 
@section('content')
   <!-- start home slider -->

   <div class="multi-px-slider loading">
      <div class="swiper-container lg-slider">
         <div class="swiper-wrapper">
            @foreach($sliders as $key=>$value)
            <div class="swiper-slide">
               <div class="mps-slide">
                  <div class="mps-img img-lg">
                     <img data-src="{{ asset($value->image) }}" alt=""
                        class="swiper-lazy object-fit">
                  </div>
                  <div class="swiper-lazy-preloader"></div>
               </div>
            </div>
            @endforeach
            <!-- <div class="swiper-slide">
               <div class="mps-slide">
                  <div class="mps-img img-lg">
                     <img data-src="https://source.unsplash.com/yHaburAEFo4/1280x960" alt=""
                        class="swiper-lazy object-fit">
                  </div>
                  <div class="swiper-lazy-preloader"></div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="mps-slide">
                  <div class="mps-img img-lg">
                     <img data-src="https://source.unsplash.com/ihzhMA2-l4Q/1280x960" alt=""
                        class="swiper-lazy object-fit">
                  </div>
                  <div class="swiper-lazy-preloader"></div>
               </div>
            </div> -->
         </div>
         <div class="pattern-2" data-swiper-parallax="-50%"></div>
      </div>
      <div class="swiper-container sm-slider">
         <div class="swiper-wrapper">
            @foreach($sliders as $key=>$value)
            <div class="swiper-slide">
               <div class="mps-slide">
                  <div class="mps-img img-sm">
                     <img data-src="{{ asset($value->image)}}" alt=""
                        class="swiper-lazy object-fit">
                  </div>
                  <div class="swiper-lazy-preloader"></div>
               </div>
            </div>
            @endforeach
            
         </div>
      </div>
      <button type="button" class="slider-trigger-button mps-arrow mps-prev" aria-label="Previous"><i
            class="fa-solid fa-chevron-left"></i></button>
      <button type="button" class="slider-trigger-button mps-arrow mps-next" aria-label="Next"><i
            class="fa-solid fa-chevron-right"></i></button>
      <div class="curtain"></div>
   </div>

   <section class="fragrancesSection py-5">
      <div class="container ">
         <div class="bg-theme-alpha radius-xxl p-5 position-relative">
            <div class="fragrancesSection_inner  text-center">
               <h3 class="mb-5 mx-lg-auto fz-36 mx-960">It's an art. Craft. And science.
                  At Ajmal Perfumes, we're in the business of creating memories that are everlasting through our
                  fragrances.
               </h3>
               <a href="https://en-ae.ajmal.com/Crafting-memories" class="discoverAllBtn">Discover all</a>
            </div>
         </div>
      </div>
   </section>



   <!-- new arrivale start -->
   <section class="arrivalsSection py-55 pt-0 overflow-hidden">
      <div class="container">
         <div class="py-5 d-flex align-items-center justify-content-between">
            <h3 class="text-capitalize mb-0">new arrivals</h3>
            <a href="perfumes" class="discover-link">
               <span class="mr-2">Discover all</span>
               <i class="fa-solid fa-arrow-right-long"></i>
            </a>
         </div>

         <div class="arrivalsSection_bottom position-relative product swiperSliderIcon overflow-hidden">
            <div
               class="arrival-swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden"
               id="arrival-swiper">
               <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                @foreach($hotdeal_top as $key=>$value)
                        <div class="swiper-slide">
                           <div class="productCard">
                              <div class="productCard_sliderSpace">
                                 <div class="radius-lg" style="background: rgb(253, 241, 206);">
                                    <div class="productCard_top d-flex align-item-start justify-content-center">
                                       <div class="centerImg">
                                          <a href="{{ route('product',$value->slug) }}">
                                             <img
                                                src="{{ asset($value->image ? $value->image->image : '') }}" alt="{{$value->name}}"
                                                class="img-fluid" >
                                          </a>
                                       </div>
                                       <img src="/IconLike-9bG.svg" class="WishlistButton-productActionIcon-d5T" alt="">
                                    </div>
                                    <div class="productCard_center text-center">
                                       <div class="productCard-productReviewSpace-iHv">
                                          <div class="review-star">
                                             <i class="fa-solid fa-star"></i>
                                             <i class="fa-solid fa-star"></i>
                                             <i class="fa-solid fa-star"></i>
                                             <i class="fa-solid fa-star"></i>
                                             <i class="fa-solid fa-star"></i>
                                          </div>
                                       </div>
                                       <div class="DscountOfr"></div>
                                       <ul class="d-flex list-unstyled justify-content-center mb-0 category">
                                          <li>EAU DE PARFUME</li>
                                          <li>75 ML</li>
                                          <li>Unisex</li>
                                       </ul>
                                       
                                       <h3 class="product-title">{{Str::limit($value->name,80)}}</h3>
                                       <span class="price">৳ {{ $value->new_price}}</span>
                                    </div>
                                    <div class="productCard_bottom">
                                       <div class="viewProduct">
                                          <ul class="list-unstyled d-flex justify-content-between mb-0 px-3 pb-3">
                                             <li class="text-center">
                                                <img
                                                   src="https://en-ae.ajmal.com/media/attribute/swatch/swatch_thumb/110x90/s/p/spicy-8_3.jpg"
                                                   class="img-fluid" alt="rose-img">
                                                <span class="fz-12">Spicy</span>
                                             </li>
                                             <li class="text-center">
                                                <img
                                                   src="https://en-ae.ajmal.com/media/attribute/swatch/swatch_thumb/110x90/w/o/woody-8_1.jpg"
                                                   class="img-fluid" alt="vanilla-img">
                                                <span class="fz-12">Woody</span>
                                             </li>
                                             <li class="text-center">
                                                <img
                                                   src="https://en-ae.ajmal.com/media/attribute/swatch/swatch_thumb/110x90/l/e/leathery-8_1.jpg"
                                                   class="img-fluid" alt="oud-img">
                                                <span class="fz-12">Leathery</span>
                                             </li>
                                          </ul>
                                       </div>
                                       
                                       <div class="addProduct" style="background: rgb(253, 241, 206);">
                                          <ul class="d-flex list-unstyled">
                                              <li>
                                                  <form action="{{route('cart.store')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$value->id}}" />
                                                    <input type="hidden" name="qty" value="1" />
                                                    <button type="submit" class="btn btn-theme-outline mr-2">Buy
                                                        Now</button>
                                                    </form>
                                                </li>
                                             <li>
                                                <a data-id="{{$value->id}}" class="addcartbutton btn btn-theme">Add to Cart</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                    @endforeach

                    

               </div>
            </div>
            <div class="review-prev">
               <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="review-next">
               <i class="fa-solid fa-chevron-right"></i>
            </div>
         </div>
         <div class="text-center d-sm-none"><a href="perfumes" class="discoverAllBtn my-3">Discover all</a></div>
      </div>
   </section>

   <!-- new arrivale end -->



<!-- <section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                         <div class="">
                             <span class="section-title-name"> অফার সীমিত সময়ের জন্য <span>
                         </div>
                        
                        <div class="">
                            <div class="offer_timer" id="simple_timer"></div>
                        </div>
                        </div>

                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="product_slider owl-carousel">
                    @foreach($hotdeal_top as $key=>$value)
                    <div class="product_item wist_item wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.{{$key}}s">
                        <div class="product_item_inner">
                            <div class="sale-badge">
                                <div class="sale-badge-inner">
                                    <div class="sale-badge-box">
                                        <span class="sale-badge-text">
                                           <p> @php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) @endphp {{number_format($discount,0)}}%</p>
                                            ছাড়
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="pro_img">
                                <a href="{{ route('product',$value->slug) }}">
                                    <img src="{{ asset($value->image ? $value->image->image : '') }}" alt="{{$value->name}}" />
                                </a>
                              
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

                        @if(! $value->prosizes->isEmpty() || ! $value->procolors->isEmpty())
                        <div class="pro_btn">
                            <div class="cart_btn">
                                <a href="{{ route('product',$value->slug) }}" class="addcartbutton">কার্ট</a>
                            </div>
                            <div class="cart_btn order_button">
                                <a href="{{ route('product',$value->slug) }}" class="addcartbutton">অর্ডার</a>
                            </div>
                            
                        </div>
                        @else

                        <div class="pro_btn">
                            <div class="cart_btn">
                                <a data-id="{{$value->id}}" class="addcartbutton">কার্ট</a>
                            </div>
                            <form action="{{route('cart.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$value->id}}" />
                                <input type="hidden" name="qty" value="1" />
                                <button type="submit">অর্ডার</button>
                            </form>
                        </div>
                        @endif
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> -->

@foreach ($homeproducts as $homecat)
<!-- <section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <span class="section-title-name">{{ $homecat->name }}</span>
                        <a href="{{route('category',$homecat->slug)}}" class="view_more_btn">View More</a>
                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="product_slider owl-carousel">
                    @foreach($homecat->products as $key=>$value)
                    <div class="product_item wist_item wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.{{$key}}s">
                        <div class="product_item_inner">
                            <div class="sale-badge">
                                <div class="sale-badge-inner">
                                    <div class="sale-badge-box">
                                        <span class="sale-badge-text">
                                           <p> @php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) @endphp {{number_format($discount,0)}}%</p>
                                            ছাড়
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="pro_img">
                                <a href="{{ route('product',$value->slug) }}">
                                    <img src="{{ asset($value->image ? $value->image->image : '') }}" alt="{{$value->name}}" />
                                </a>
                              
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

                         @if(! $value->prosizes->isEmpty() || ! $value->procolors->isEmpty())
                        <div class="pro_btn">
                            <div class="cart_btn">
                                <a href="{{ route('product',$value->slug) }}" class="addcartbutton">কার্ট</a>
                            </div>
                            <div class="cart_btn order_button">
                                <a href="{{ route('product',$value->slug) }}" class="addcartbutton">অর্ডার</a>
                            </div>
                            
                        </div>
                        @else

                        <div class="pro_btn">
                            <div class="cart_btn">
                                <a data-id="{{$value->id}}" class="addcartbutton">কার্ট</a>
                            </div>
                            <form action="{{route('cart.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$value->id}}" />
                                <input type="hidden" name="qty" value="1" />
                                <button type="submit">অর্ডার</button>
                            </form>
                        </div>
                        @endif
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> -->
@endforeach 

<!-- <section class="meta_description homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="h_des">
                    {!!$generalsetting->description!!}
                </div>
            </div>
        </div>
    </div>
</section> -->


@endsection 
@push('script')

<script src="{{asset('public/frontEnd/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/frontEnd/js/jquery.syotimer.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $(".main_slider").owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            nav: true,
            autoplayHoverPause: false,
            margin: 0,
            mouseDrag: true,
            smartSpeed: 8000,
            autoplayTimeout: 3000,
            animateOut: "fadeOut",
            animateIn: "fadeIn",

            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
           
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

        $(".product_slider").owlCarousel({
            margin: 15,
            items:5,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: true,
                },
                600: {
                    items: 5,
                    nav: false,
                },
                1000: {
                    items: 5,
                    nav: true,
                },
            },
        });

    });
</script>

<script>
   $('#simple_timer').syotimer({
  date: new Date(2015, 0, 1),
  layout: "hms",
  doubleNumbers: false,
  effectType: "opacity",

  periodUnit: "d",
  periodic: true,
  periodInterval: 1,
});

</script>
@endpush