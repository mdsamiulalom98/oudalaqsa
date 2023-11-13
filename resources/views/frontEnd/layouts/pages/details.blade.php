@extends('frontEnd.layouts.master')
@section('title',$details->name)
@push('seo')
<meta name="app-url" content="{{route('product',$details->slug)}}" />
<meta name="robots" content="index, follow" />
<meta name="description" content="{{ $details->meta_description}}" />
<meta name="keywords" content="{{ $details->slug }}" />

<!-- Twitter Card data -->
<meta name="twitter:card" content="product" />
<meta name="twitter:site" content="{{$details->name}}" />
<meta name="twitter:title" content="{{$details->name}}" />
<meta name="twitter:description" content="{{ $details->meta_description}}" />
<meta name="twitter:creator" content="Rizik.com.bd" />
<meta property="og:url" content="{{route('product',$details->slug)}}" />
<meta name="twitter:image" content="{{asset($details->image->image)}}" />

<!-- Open Graph data -->
<meta property="og:title" content="{{$details->name}}" />
<meta property="og:type" content="product" />
<meta property="og:url" content="{{route('product',$details->slug)}}" />
<meta property="og:image" content="{{asset($details->image->image)}}" />
<meta property="og:description" content="{{ $details->meta_description}}" />
<meta property="og:site_name" content="{{$details->name}}" />
@endpush @section('content')
<div class="homeproduct main-details-page">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <section class="product-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 position-relative">
                <div class="details_slider owl-carousel">
                  @foreach($details->images as $value)
                  <div class="dimage_item">
                    <img src="{{asset($value->image)}}" />
                  </div>
                  @endforeach
                </div>
                <div class="indicator_thumb @if($details->images->count() > 4) thumb_slider owl-carousel @endif">
                  @foreach($details->images as $key=>$image)
                  <div class="indicator-item" data-id="{{$key}}">
                    <img src="{{asset($image->image)}}" />
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col-sm-6">
                <div class="breadcrumb">
                  <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ url('/category/' . $details->category->slug) }}">{{ $details->category->name }}</a></li>
                    @if ($details->subcategory)
                    <li><span>/</span></li>
                    <li><a href="#">{{ $details->subcategory ? $details->subcategory->subcategoryName : '' }}</a></li>
                    @endif @if ($details->childcategory)
                    <li><span>/</span></li>
                    <li><a href="#">{{ $details->childcategory->childcategoryName }}</a></li>
                    @endif
                  </ul>
                </div>

                <div class="product">
                  <div class="product-cart">
                    <p class="name">{{$details->name}}</p>
                    <p class="details-price">
                      @if($details->old_price)
                      <del>৳{{$details->old_price}}</del>
                      @endif ৳{{$details->new_price}}
                    </p>
                    <div class="product-code">
                      <p><span>প্রোডাক্ট কোড : </span>{{$details->product_code}}</p>
                    </div>
                    <form action="{{route('cart.store')}}" method="POST" name="formName">
                      @csrf
                      <input type="hidden" name="id" value="{{$details->id}}" />
                      @if($productcolors->count() > 0)
                      <div class="pro-color" style="width: 100%;">
                        <div class="color_inner">
                          <p>রং - </p>
                          <div class="size-container">
                            <div class="selector">
                              @foreach($productcolors as $procolor)
                              <div class="selector-item">
                                <input type="radio" id="fc-option{{$procolor->id}}" value="{{ $procolor->color ? $procolor->color->color : '' }}" name="product_color" class="selector-item_radio emptyalert" required />
                                <label for="fc-option{{$procolor->id}}" style="background-color: {{ $procolor->color ? $procolor->color->color : '' }}" class="selector-item_label">
                                  <span>
                                    <img src="{{ asset('public/frontEnd/images') }}/check-icon.svg" alt="Checked Icon" />
                                  </span>
                                </label>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                      @endif @if($productsizes->count() > 0)
                      <div class="pro-size" style="width: 100%;">
                        <div class="size_inner">
                          <p>সাইজ  - <span class="attibute-name"></span></p>
                          <div class="size-container">
                            <div class="selector">
                              @foreach($productsizes as $prosize)
                              <div class="selector-item">
                                <input type="radio" id="f-option{{$prosize->id}}" value="{{ $prosize->size ? $prosize->size->sizeName : '' }}" name="product_size" class="selector-item_radio emptyalert" required />
                                <label for="f-option{{$prosize->id}}" class="selector-item_label">{{ $prosize->size ? $prosize->size->sizeName : '' }}</label>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                      @endif
                      
                       @if($details->pro_unit)
                      <div class="pro_unig">
                          <label>ইউনিট: {{ $details->pro_unit }}</label>
                          <input type="hidden" name="pro_unit" value="{{$details->pro_unit}}">
                      </div>
                      @endif
                      <div class="pro_brand">
                         <p>ব্র্যান্ড : {{ $details->brand ? $details->brand->name : 'N/A' }}</p>
                      </div>
                      
                      <div class="row">
                        <div class="qty-cart col-sm-5">
                          <div class="quantity">
                            <span class="minus">-</span>
                            <input type="text" name="qty" value="1" />
                            <span class="plus">+</span>
                          </div>
                        </div>
                        <div class="d-flex single_product col-sm-6">
                          <input type="submit" class="btn px-4 add_cart_btn" onclick="return sendSuccess();" name="add_cart" value="কার্ট " />

                          <input type="submit" class="btn px-4 order_now_btn order_now_btn_m" onclick="return sendSuccess();" name="order_now" value="অর্ডার" />
                        </div>
                      </div>
                    </form>

                    
                    
                  </div>
                  <div class="description">
                    <h2>বিস্তারিত</h2>
                    <p>{!! $details->description !!}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="related-product-section">
          <div class="container">
            <div class="row">
              <div class="related-title">
                <h5>একই ধরণের প্রোডাক্ট</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="product-inner owl-carousel related_slider">
                  @foreach($products as $key=>$value)
                  <div class="product_item wist_item wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.{{$key}}s">
                    <div class="product_item_inner">
                      <div class="sale-badge">
                        <div class="sale-badge-inner">
                          <div class="sale-badge-box">
                            <span class="sale-badge-text">
                              <p>@php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) @endphp {{number_format($discount,0)}}%</p>
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
        </section>
      </div>
    </div>
  </div>
</div>

<section class="homeproduct">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="meta_des">
          {!!$details->meta_description!!}
        </div>
      </div>
    </div>
  </div>
</section>

@endsection @push('script')
<script src="{{asset('public/frontEnd/js/owl.carousel.min.js')}}"></script>
<script>
  $(document).ready(function () {
    $(".details_slider").owlCarousel({
      margin: 15,
      items: 1,
      loop: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 6000,
      autoplayHoverPause: true,
    });
    $(".indicator-item").on("click", function () {
      var slideIndex = $(this).data("id");
      $(".details_slider").trigger("to.owl.carousel", slideIndex);
    });
  });
</script>
<script>
  $(document).ready(function () {
    $(".related_slider").owlCarousel({
      margin: 10,
      items: 5,
      loop: true,
      dots: true,
      nav: true,
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
          items: 3,
          nav: false,
        },
        1000: {
          items: 5,
          nav: true,
          loop: true,
        },
      },
    });
    // $('.owl-nav').remove();
  });
</script>
<script>
  $(document).ready(function () {
    $(".minus").click(function () {
      var $input = $(this).parent().find("input");
      var count = parseInt($input.val()) - 1;
      count = count < 1 ? 1 : count;
      $input.val(count);
      $input.change();
      return false;
    });
    $(".plus").click(function () {
      var $input = $(this).parent().find("input");
      $input.val(parseInt($input.val()) + 1);
      $input.change();
      return false;
    });
  });
</script>

// <script>
//   function sendSuccess() {
//     // color validation
//     var selectedColor = document.querySelector('input[name="product_color"]:checked');
//     if (selectedColor !='') {
//       // Show toastr error message here
//       toastr.warning("Please select a color.");
//       return false; // Prevent form submission
//     }

//     // size validation
//     var selectedSize = document.querySelector('input[name="product_size"]:checked');
//     if (selectedSize !='') {
//       // Show toastr error message here
//       toastr.error("Please select a size.");
//       return false; // Prevent form submission
//     }
//   }
// </script>

 <script>
    function sendSuccess() {
        // size validation
    size = document.forms["formName"]["product_size"].value;
    if(size !=''){
        // access
     }
     else {
       toastr.warning('পছন্দের সাইজ নির্বাচন করুন');
       return false;
     }
    color = document.forms["formName"]["product_color"].value;
    if(color !=''){
        // access
     }
     else {
       toastr.error('পছন্দের রং নির্বাচন করুন');
       return false;
     }
    }
</script>

<script>
  $(document).ready(function () {
    $(".thumb_slider").owlCarousel({
      margin: 15,
      items: 4,
      loop: true,
      dots: false,
      nav: true,
      autoplayTimeout: 6000,
      autoplayHoverPause: true,
    });
  });
</script>
@endpush
