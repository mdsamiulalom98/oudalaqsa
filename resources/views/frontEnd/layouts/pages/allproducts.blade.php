@extends('frontEnd.layouts.master') 
@section('title', 'All Products') 
@push('css')
<link rel="stylesheet" href="{{asset('public/frontEnd/css/jquery-ui.css')}}" />
@endpush 
@push('seo')
<meta name="app-url" content="{{route('home')}}" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<!-- Twitter Card data -->
<meta name="twitter:card" content="product" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="" />
<meta name="twitter:description" content="" />
<meta name="twitter:creator" content="Kenakatar" />
<meta property="og:url" content="{{route('home')}}" />
<meta name="twitter:image" content="" />

<!-- Open Graph data -->
<meta property="og:title" content="" />
<meta property="og:type" content="product" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:description" content="" />
<meta property="og:site_name" content="" />
@endpush 
@section('content')
<section class="clearfix page-header-title">
    <div class="overlay">
       <h1 class="page-title">Product</h1>
    </div>
 </section>


 <section class="product-page py-55 pt-0 overflow-hidden">
    <div class="container">

       <div class="row">
          <div class="col-12">
             <form action="product.html" class="product-search-form d-flex align-items-center">
                <select name="" id="">
                   <option value="">---Select Category---</option>
                   <option value="sports">sports</option>
                   <option value="tshirt">tshirt</option>
                   <option value="shirt">shirt</option>
                   <option value="pant">pant</option>
                   <option value="electronic">electronic</option>
                   <option value="phone">phone</option>
                </select>
                <input type="text" placeholder="search keyword">
                <input type="submit" value="Search">
             </form>
          </div>
       </div>

       <div class="row" style="transform: translate3d(0px, 0px, 0px);">
          
             @foreach($products as $key=>$value)

                      <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                         <div class="productCard">
                            <div class="productCard_sliderSpace">
                               <div class="radius-lg" style="background: rgb(253, 241, 206);">
                                  <div class="productCard_top d-flex align-item-start justify-content-center">
                                     <div class="centerImg">
                                        <a href="{{ route('product',$value->slug) }}">
                                           <img
                                              src="{{ asset($value->image ? $value->image->image : '') }}"
                                              class="img-fluid" alt="{{$value->name}}" >
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
                                     <span class="price"> {{ $value->new_price}} AED </span>
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
                                           <li><a data="6293708018000" class="btn btn-theme-outline mr-2">Buy
                                                 Now</a></li>
                                           <li><a data="6293708018000" class="btn btn-theme">Add to Cart</a>
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
       <div class="row my-4">
          <div class="col-12">
             <nav class="d-flex justify-content-center align-items center">
                <ul class="pagination">
                    {{$products->links('pagination::bootstrap-4')}}
                   {{-- <li class="page-item">
                      <a class="page-link" href="#">
                         <i class="fa-solid fa-chevron-left"></i>
                      </a>
                   </li>
                   <li class="page-item">
                      <a class="page-link" href="#">1</a>
                   </li>
                   <li class="page-item">
                      <a class="page-link" href="#">2</a>
                   </li>
                   <li class="page-item">
                      <a class="page-link" href="#">3</a>
                   </li>
                   <li class="page-item">
                      <a class="page-link" href="#">
                         <i class="fa-solid fa-chevron-right"></i>
                      </a>
                   </li> --}}
                </ul>
             </nav>
          </div>
       </div>


    </div>
 </section>

@endsection
@push('script')
<script>
    $(".sort").change(function(){
       $('#loading').show();
       $(".sort-form").submit();
    })
</script>
@endpush