<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title') - {{$generalsetting->name}}</title>
        <!-- App favicon -->

        <link rel="shortcut icon" href="{{asset($generalsetting->favicon)}}" alt="DinajpurBD Favicon"/>
        <meta name="author" content="DinajpurBD"> 
        <!-- <link rel="canonical" href="https://dinajpurbd.com" /> -->
        @stack('seo')
        
        
        
        <!-- <link rel="stylesheet" href="{{asset('public/frontEnd/css/bootstrap.min.css')}}" /> -->
        <!-- <link rel="stylesheet" href="{{asset('public/frontEnd/css/animate.css')}}" /> -->
        <!-- <link rel="stylesheet" href="{{asset('public/frontEnd/css/all.min.css')}}" /> -->
        <!-- <link rel="stylesheet" href="{{asset('public/frontEnd/css/owl.carousel.min.css')}}" /> -->
        <!-- <link rel="stylesheet" href="{{asset('public/frontEnd/css/owl.theme.default.min.css')}}" /> -->
        <!-- <link rel="stylesheet" href="{{asset('public/frontEnd/css/mobile-menu.css')}}" /> -->
        <!-- <link rel="stylesheet" href="{{asset('public/frontEnd/css/select2.min.css')}}"> -->
        <!-- toastr css -->
        
        <!-- <link rel="stylesheet" href="{{asset('public/frontEnd/css/wsit-menu.css')}}" /> -->
        <!-- <link rel="stylesheet" href="{{asset('public/frontEnd/css/style.css')}}" /> -->
        <!-- <link rel="stylesheet" href="{{asset('public/frontEnd/css/responsive.css')}}" /> -->

        <!-- include font awesome -->
        <link rel="stylesheet" href="{{asset('public/backEnd/')}}/assets/css/toastr.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <link rel="stylesheet" href="{{asset('public/frontEnd/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css" />
        <link rel="stylesheet" href="{{asset('public/frontEnd/css/theme.css') }}">
        <link rel="stylesheet" href="{{asset('public/frontEnd/css/main.css') }}">
        
        <meta name="facebook-domain-verification" content="38f1w8335btoklo88dyfl63ba3st2e" />
        
        @foreach($pixels as $pixel)
        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '{{{$pixel->code}}}');
          fbq('track', 'PageView');
        </script>
        <noscript>
          <img height="1" width="1" style="display:none" 
               src="https://www.facebook.com/tr?id={{{$pixel->code}}}&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
        @endforeach
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-24SEB5ZKYP"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-24SEB5ZKYP');
        </script>
        
        
        
    </head>
    <body>
        @php $subtotal = Cart::instance('shopping')->subtotal(); @endphp
        <!-- start header section -->
   <header class="clearfix header1">
      <!-- start header top bar -->
      <div class="header-top py-1">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-4">
                  <div class="text-center text-md-left p-0">
                     <i class="fa-regular fa-envelope"></i>
                     <span class="ml-2">example@domain.com</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="text-center p-0">
                     <i class="fa-solid fa-phone"></i>
                     <span class="ml-2">+123 987654321</span>
                     <!-- <div class="d-inline-block">
                        <i class="fa-solid fa-phone"></i>
                        <span class="ml-2">+123 987654321</span>
                     </div>
                     <div class="d-inline-block ml-2">
                        <a href="./login.html" class="text-light">Login</a>
                        <span>/</span>
                        <a href="./registration.html" class="text-light">Register</a>
                     </div> -->
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="p-0 d-flex align-items-center justify-content-md-end justify-content-center">
                     <div class="d-inline-flex align-items-center px-2 mr-3 radius-sm">
                        <div class="set-language d-inline-flex align-items-center">
                           <img src="./assets/img/united_arab_emirates.png" alt="image" width="20" height="20">
                        </div>
                        <select class="textable mx-2">
                           <option value="bangla">Bangla</option>
                           <option value="english" selected="">English</option>
                        </select>
                     </div>

                     <div class="d-inline-flex social-share">
                        <a class="facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a class="instagram" href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a class="linkedin" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a class="youtube" href="#"><i class="fa-brands fa-youtube"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header top bar -->


      <!-- search bar start -->
      <div class="header-search-parent show">

         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-9 col-lg-6 offset-lg-3">
                  <form action="index.html" class="form radius-lg overflow-hidden mt-2 mt-md-0">
                     <input type="search" placeholder="Enter Keyword" class="border-0 shadow-none pl-3">
                     <button type="submit" class="border-0 shadow-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                     </button>
                  </form>
               </div>
               <div class="col-md-3">
                  <div class="text-center text-md-right">
                    @if(Auth::guard('customer')->user())
                    <div class="d-inline-block">
                        <a href="{{ route('customer.account') }}" class="text-dark">{{ Auth::guard('customer')->user()->name }}</a>
                     </div>
                    @else
                     <div class="d-inline-block">
                        <a href="{{ route('customer.login') }}" class="text-dark">Login</a>
                        <span>/</span>
                        <a href="{{ route('customer.register') }}" class="text-dark">Register</a>
                     </div>
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- search bar end -->
      <div class="header-navbar position-relative">
         <!-- navbar start -->
         <div class="container">
            <div class="d-flex align-items-center justify-content-between">
               <div class="logo">
                  <a href="{{ route('home') }}">
                     <img src="{{asset($generalsetting->white_logo)}}" alt="logo image">
                  </a>
               </div>
               <div class="d-none d-lg-flex align-items-center justify-content-center w-100">
                  <ul class="menu px-lg-4">
                     <li><a href="{{ route('home') }}">Home</a></li>
                     <li><a href="{{ route('allproducts') }}">Product</a></li>
                     <li><a href="{{ route('cart.show') }}">cart</a></li>
                     <li><a href="{{ route('customer.checkout') }}">Checkout</a></li>
                     <li class="has-submenu">
                        <a href="#">Pages</a>
                        <ul class="sub-menu border shadow">
                           <li><a href="./account.html">Account</a></li>
                           <li><a href="{{ route('allproducts') }}">Products</a></li>
                           <li><a href="./product-single.html">Product Single</a></li>
                           <li><a href="{{ route('cart.show') }}">Cart</a></li>
                           <li><a href="{{ route('customer.checkout') }}">Checkout</a></li>
                           <li><a href="./login.html">Login</a></li>
                           <li><a href="./registration.html">Registretion</a></li>
                           <li><a href="./reset-password.html">Reset Password</a></li>
                           <li><a href="./confirm-password.html">Confirm Password</a></li>
                           <li><a href="./email-template.html" target="_blank">Invoice Template</a></li>
                        </ul>
                     </li>
                     <li class="has-megamenu">
                        <a href="#">megamenu</a>
                        <div class="mega-menu-parent">
                           <div class="container">
                              <ul class="mega-menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="{{ route('allproducts') }}">Product</a></li>
                                 <li><a href="{{ route('cart.show') }}">cart</a></li>
                                 <li><a href="{{ route('customer.checkout') }}">Checkout</a></li>
                              </ul>
                              <ul class="mega-menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="{{ route('allproducts') }}">Product</a></li>
                                 <li><a href="{{ route('cart.show') }}">cart</a></li>
                                 <li><a href="{{ route('customer.checkout') }}">Checkout</a></li>
                              </ul>
                              <ul class="mega-menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="{{ route('allproducts') }}">Product</a></li>
                                 <li><a href="{{ route('cart.show') }}">cart</a></li>
                                 <li><a href="{{ route('customer.checkout') }}">Checkout</a></li>
                              </ul>
                              <ul class="mega-menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="{{ route('allproducts') }}">Product</a></li>
                                 <li><a href="{{ route('cart.show') }}">cart</a></li>
                                 <li><a href="{{ route('customer.checkout') }}">Checkout</a></li>
                              </ul>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>

               <!-- menu last items -->
               <ul class="menu-last-items d-flex align-items-center justify-content-end">
                  <li>
                     <a href="#" data-toggle="modal" data-target=".login-popup">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                     </a>
                  </li>
                  <li class="position-relative">
                     <a href="#" data-toggle="modal" data-target="#cartModalOpen">
                        <i class="fa-solid fa-cart-shopping"></i>
                     </a>
                     <label class="shopping-cart-count">{{Cart::instance('shopping')->count()}}</label>
                  </li>
                  <li>
                     <a href="#" data-toggle="modal" data-target="#package">
                        <i class="fa-solid fa-truck"></i>
                     </a>
                  </li>
                  <li class="d-lg-none">
                     <button type="button" class="menu-toggle">
                        <i class="fa-solid fa-bars-staggered"></i>
                     </button>
                  </li>
               </ul>

            </div>
         </div>
         <!-- navbar end -->

         <!-- mobile menu -->
         <div class="d-lg-none py-2" id="mobile-menu1">
            <div class="container">
               <div class="mobile-menu-parent"></div>
            </div>
         </div>
         <!-- end mobile menu -->
      </div>
      <!-- modal section -->

      <!-- login modal section -->
      <div class="modal fade login-popup" tabindex="-1" role="dialog" aria-labelledby="loginLearginPopup"
         aria-hidden="true">
         <div class="modal-dialog modal-xl">
            <div class="modal-content login-popup-content">
               <button type="button" class="close dismisable-popup" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
               <div class="popup-content">
                  <div class="row">
                     <div class="col-6 col-md-7">
                        <div class="loginDiv">
                           <h3 class="text-center">Log in</h3>
                           <ul class="list-unstyled loginBtns mb-0">
                              <li>
                                 <a class="btn btn-login radius-lg">
                                    <i class="fa-brands fa-google"></i>
                                    <span>Log in with Google</span>
                                 </a>
                              </li>
                              <li>
                                 <a class="btn btn-login radius-lg">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <span>Log in with Facebook</span>
                                 </a>
                              </li>
                              <li>
                                 <a class="btn btn-login radius-lg">
                                    <i class="fa-brands fa-apple"></i>
                                    <span>Log in with Apple</span>
                                 </a>
                              </li>


                           </ul>
                           <p class="divider position-relative text-center fz-12">OR USE YOUR EMAIL OR NUMBER
                           </p>
                           <form action="javascript:void(0)" class="flex-space-evenly">
                              <input type="email" placeholder="Email Address"
                                 class="form-control mb-4 popup-email py-3">
                              <button type="button" class="btn btn-theme w-100 py-2 radius-lg">Log in</button>
                           </form>
                        </div>

                     </div>
                     <div class="col-6 col-md-5">
                        <div class="registerDiv h-100">
                           <div class="d-flex flex-column h-100 justify-content-center align-items-center">
                              <h3 class="mb-2">Welcome</h3>
                              <p class="text-center">Enter your personal details and start<br>journey with us
                              </p>
                              <button class="btn btn-theme radius-lg w-100 createAccountActionBtn">Create
                                 Account</button>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- cart modal section -->
      <div class="modal fade" id="cartModalOpen" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog cart-modal" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Your shopping bag ({{ Cart::instance('shopping')->count() }})</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">

                @if (Cart::instance('shopping')->count() > 0)
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
                @else                 
                <p class="text-center" class="mb-5">Your shopping bag is empty</p>
                <p class="text-center">
                    <a class="btn btn-theme radius-lg px-3 py-1">Continue Shopping</a>
                </p>
                @endif
               </div>
            </div>
         </div>
      </div>
      <!-- package modal section -->
      <div class="modal fade" id="package" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog cart-modal" role="document">
            <div class="modal-content">
               <div class="modal-header">

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body px-5">
                  <h2 class="fz-25 text-center">Keep an eye on the package</h2>
                  <p class="fz-12 text-center">Enter The Parcel Number To Know The Location</p>
                  <div class="d-flex align-items-center order-number">
                     <input type="text" class="form-control" placeholder="Order Number">
                     <button class="btn" type="button">
                        <i class="fa-solid fa-arrow-right-long"></i>
                     </button>
                  </div>

               </div>
            </div>
         </div>
      </div>
      <!-- modal section end -->

   </header>
        <!-- <header>
            <div class="mobile-header sticky">
                <div class="mobile-logo">
                    <div class="menu-bar">
                        <a class="toggle">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </div>
                    <div class="menu-logo">
                        <a href="{{route('home')}}"><img src="{{asset($generalsetting->white_logo)}}" alt="" /></a>
                    </div>
                    <div class="menu-bag">
                        <p class="margin-shopping">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span>{{Cart::instance('shopping')->count()}}</span></p>
                    </div>
                </div>
            </div>
            
            <div class="mobile-search">
                <form action="{{route('search')}}">
                    <input type="text" placeholder=" আপনার পছন্দের প্রোডাক্টটি খুঁজুন ... " value="" class="search_keyword search_click" name="keyword" />
                    <button><i data-feather="search"></i></button>
                </form>
                <div class="search_result"></div>
            </div>
                
            <div class="mobile-menu">
                <div class="mobile-menu-logo">
                    <div class="logo-image">
                        <img src="{{asset($generalsetting->white_logo)}}" alt="" />
                    </div>
                    <div class="mobile-menu-close">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <ul class="first-nav">
                   
                    @foreach($menucategories as $scategory)
                    <li class="parent-category">
                        <a href="{{url('category/'.$scategory->slug)}}" class="menu-category-name">
                              <img src="{{asset($scategory->image)}}" alt="" class="side_cat_img">
                            {{$scategory->name}}
                        </a>
                         <span class="menu-category-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="second-nav" style="display: none;">
                        @foreach($scategory->subcategories as $subcategory)
                            <li class="parent-subcategory"><a href="{{url('subcategory/'.$subcategory->slug)}}" class="menu-subcategory-name">{{$subcategory->subcategoryName}}</a>
                                <span class="menu-subcategory-toggle"><i class="fa fa-chevron-down"></i></span>
                                <ul class="third-nav" style="display: none;">
                                    @foreach($subcategory->childcategories as $childcat)
                                    <li class="childcategory"><a href="{{url('products/'.$childcat->slug)}}" class="menu-childcategory-name">{{$childcat->childcategoryName}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                        </ul>
                    </li>
                    @endforeach
                    
                </ul>
               
            </div>
            
            <div class="main-header"> -->
                
                <!-- header to end -->
                <!-- <div class="logo-area sticky">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="logo-header">
                                    <div class="main-logo">
                                        <a href="{{route('home')}}"><img src="{{asset($generalsetting->white_logo)}}" alt="" /></a>
                                    </div>
                                    <div class="main-search">
                                        <form action="{{route('search')}}">
                                            <input type="text" placeholder=" আপনার পছন্দের প্রোডাক্টটি খুঁজুন ...  " value="" class="search_keyword search_click" name="keyword" />
                                            <button><i data-feather="search"></i></button>
                                        </form>
                                        <div class="search_result"></div>
                                    </div>
                                    <div class="header-list-items">
                                        <ul>
                                            <li class="cart-dialog" id="cart-qty">
                                                <a href="{{route('customer.checkout')}}">
                                                    <p class="margin-shopping">

                                                        <i class="fa-solid fa-cart-shopping"></i>
                                                        <span>{{Cart::instance('shopping')->count()}}</span>
                                                        <br>
                                                        কার্ট
                                                        
                                                    </p>
                                                    
                                                </a>
                                                <div class="cshort-summary">
                                                    <ul>
                                                        @foreach(Cart::instance('shopping')->content() as $key=>$value)
                                                        <li>
                                                            <a href=""><img src="{{asset($value->options->image)}}" alt="" /></a>
                                                        </li>
                                                        <li><a href="">{{$value->name}}</a></li>
                                                        <li>Qty: {{$value->qty}}</li>
                                                        <li>
                                                            <p>৳{{$value->price}}</p>
                                                            <button class="remove-cart cart_remove" data-id="{{$value->rowId}}"><i data-feather="x"></i></button>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    <p><strong>সর্বমোট : ৳{{$subtotal}}</strong></p>
                                                    <a href="{{route('customer.checkout')}}" class="go_cart">  অর্ডার করুন </a>
                                                </div>
                                            </li>

                                            <li class="for_order">
                                                <p>
                                                <a href="{{route('customer.login')}}">
                                                    <i class="fa-solid fa-user"></i>
                                                    <br>
                                                    লগিন
                                                </a>
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- main-header end -->
             <!-- </div>
        </header> -->
        <div id="content">
             @yield('content')
        <!-- content end -->
    </div>
          <footer class="footer-area clearfix pt-5">

      <div class="footer-widget1">

         <a class="whats-app" href="https://api.whatsapp.com/send?phone=8801625601619&text=Hi, Rubel!" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
         </a>

         <a class="live-chat" href="#">
            <i class="fa-regular fa-comment"></i>
            <div class="chat-box shadow">
               <button class="close-chatbox text-dark">
                  <i class="fa-solid fa-minus"></i>
               </button>

               <div class="body pt-3">
                  <div class="message">
                     <span>Lorem ipsum dolor sit amet.</span>
                     <span>Doloremque quos unde praesentium accusamus.</span>
                     <span>Officia sit veniam saepe labore.</span>
                     <span>Officiis tempora consequatur ad ut.</span>
                     <span>Nemo quidem reiciendis corrupti architecto.</span>
                  </div>
                  <div class="sent d-flex p-3 radius-lg">
                     <input type="text" class="form-control border-none">
                     <button type="submit" class="btn">
                        <i class="fa-solid fa-angle-right"></i>
                     </button>
                  </div>
               </div>
            </div>
         </a>

         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-lg-3 order-sm-3 order-lg-0">
                  <div class="widget-items mb-5">
                     <div class="text-center text-md-left info-address">
                        <a href="#">
                           <img src="https://en-ae.ajmal.com/media/wysiwyg/logo.png" alt="logo">
                        </a>
                        <p class="info">
                           Nothing unlocks an old memory better than smell, be it the memory of
                           lost
                           love or of a
                           fond friend.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 col-lg-2 order-2">
                  <div class="widget-items mb-5">
                     <div class="text-center text-sm-left">
                        <h2 class="footer-widget-title text-capitalize">quick links</h2>
                     </div>
                     <ul class="p-0 m-0">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="{{ route('allproducts') }}">Products</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-sm-4 col-lg-2 order-2">
                  <div class="widget-items mb-5">
                     <div class="text-center text-sm-left">
                        <h2 class="footer-widget-title text-capitalize">Our Services</h2>
                     </div>
                     <ul class="p-0 m-0">
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Web Development</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-sm-4 col-lg-2 order-2">
                  <div class="widget-items mb-5">
                     <div class="text-center text-sm-left">
                        <h2 class="footer-widget-title text-capitalize">Company Policy</h2>
                     </div>
                     <ul class="p-0 m-0">
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="cookies-policy.html">Cookies Policy</a></li>
                        <li><a href="return-policy.html">Return Policy</a></li>
                        <li><a href="refund-policy.html">Refund Policy</a></li>
                        <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3 order-sm-3">
                  <div class="widget-items mb-5">
                     <div class="text-center">
                        <h2 class="footer-widget-title text-capitalize">newsletter</h2>
                        <p class="fz-12">Subscribe our Newsletter to get our latest update and news</p>
                     </div>

                     <form action="#" class="d-flex align-items-center subscribe-form1 justify-content-center my-4">
                        <input type="email" placeholder="Email Address" class="border shadow-none">
                        <button type="submit" class="btn border-0 shadow-none">
                           <i class="fa-solid fa-paper-plane"></i>
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="bottom">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12">
                  <hr>
               </div>
               <div class="col-sm-6 col-md-4">
                  <div class="text-center text-md-left py-3">
                     <img src="./assets/img/card-list.svg" alt="cart image" class="img-fluid">
                  </div>
               </div>
               <div class="col-sm-6 col-md-4">
                  <div class="text-center text-sm-right text-md-center py-3">
                     <ul
                        class="footerEnd_Social d-flex align-items-center justify-content-center justify-content-sm-end justify-content-md-center m-0 p-0">
                        <li class="list-inline-item">
                           <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="text-center text-md-right py-3">
                     <div class="d-inline-flex align-items-center img-aspect-ratio">
                        <a href="#" class="mr-2">
                           <img src="./assets/img/app-store.svg" alt="app-store" class="img-fluid">
                        </a>
                        <a href="#" class="mr-2">
                           <img src="./assets/img/google-play.svg" alt="google-play" class="img-fluid">
                        </a>
                        <a href="#">
                           <img src="./assets/img/qr-code.svg" alt="qr-code" class="img-fluid footerEnd_appBtn_qr">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="copyright-text">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <p class="m-0 py-3 text-center">
                     2023 OUD Al Aqsa Perfume. All Rights Reserved. | Design & Development By:-
                     <a href="https://www.digitalmarketingbd.com/">Digital Marketing
                        Solution (Pvt.) Ltd.</a>
                  </p>
               </div>
            </div>
         </div>
      </div>

   </footer>
        <!-- <footer >
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div class="footer-about">
                                <a href="{{route('home')}}">
                                    <img src="{{asset($generalsetting->white_logo)}}" alt="" />
                                </a>
                                <p>{{$contact->address}}</p>
                                <a href="tel:{{$contact->hotline}}" class="footer-hotlint">{{$contact->hotline}}</a>
                            </div>
                        </div> -->
                        <!-- col end -->
                        <!-- <div class="col-sm-3 mb-3 mb-sm-0 col-6">
                            <div class="footer-menu">
                                <ul>
                                    <li class="title"><a>Dinajpur BD</a></li>
                                    <li><a href="{{route('contact')}}"> <a href="{{route('contact')}}">যোগাযোগ করুন</a></a></li>
                                    @foreach($pages as $page)
                                    <li><a href="{{route('page',['slug'=>$page->slug])}}">{{$page->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> -->
                        <!-- col end -->
                        <!-- <div class="col-sm-2 mb-3 mb-sm-0 col-6">
                            <div class="footer-menu">
                                <ul>
                                    <li class="title"><a>Link</a></li>
                                    @foreach($pagesright as $key=>$value)
                                    <li>
                                        <a href="{{route('page',['slug'=>$value->slug])}}">{{$value->name}}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div> -->

                        <!-- col end -->
                        <!-- <div class="col-sm-3 mb-3 mb-sm-0">
                            <div class="footer-menu">
                                <ul>
                                    <li class="title stay_conn"><a>Stay Connected</a></li>
                                    
                                </ul>
                                 <ul class="social_link">
                                    @foreach($socialicons as $value)
                                    <li class="social_list">
                                        <a class="mobile-social-link" href="{{$value->link}}"><i class="{{$value->icon}}"></i></a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="d_app">
                                    <h2>Download App</h2>
                                    <a href="">
                                        <img src="{{asset('public/frontEnd/images/app-download.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <!-- col end -->
                    <!-- </div>
                </div>
            </div> -->
            <!-- <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="copyright">
                                <p>Copyright © {{ date('Y') }} {{$generalsetting->name}}. All rights reserved. Design & Developed By <a href="https://websolutionit.com/" target="_blank">Websolution IT</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </footer> -->

        <!-- <div class="footer_nav">
            <ul>
                <li>
                    <a class="toggle">
                        <span>
                            <i class="fa-solid fa-bars"></i>
                        </span> 
                        <span>Category</span>
                    </a>
                </li>

                <li>
                    <a href="https://m.me/dinajpurbd.com.bd">
                        <span>
                            <i class="fa-solid fa-message"></i>
                        </span>
                        <span>Message</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('home')}}">
                        <span><i class="fa-solid fa-home"></i></span> <span>Home</span>
                    </a>
                </li>

                

                <li>
                    <a href="{{route('customer.checkout')}}">
                        <span>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <span id="mobilecart-qty">Cart ({{Cart::instance('shopping')->count()}})</span>
                    </a>
                </li>
                @if(Auth::guard('customer')->user())
                <li>
                    <a href="{{route('customer.account')}}">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span> 
                        <span>Account</span>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{route('customer.login')}}">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span> <span>Login</span>
                    </a>
                </li>
                @endif
            </ul>
        </div> -->

        <!--  <div class="mobile_menu">
            <a href="#menu"><span></span></a>
            <!-- Demo -->
            <!-- <nav id="menu">
                <ul>
                @foreach($menucategories as $key=>$category)
                <li>
                    <a href="{{route('category',$category->slug)}}">
                    <img src="{{asset($category->image)}}" alt="" class="side_cat_img"> 
                            {{$category->name}}
                    </a>
                    <ul>
                      @foreach($category->subcategories as $key=>$subcategory)
                      <li>
                        <a href="{{route('subcategory',$subcategory->slug)}}">{{$subcategory->subcategoryName}}</a>
                            <ul>
                                @foreach($subcategory->childcategories as $key=>$childcat)
                                <li>
                                    <a href="{{route('products',$childcat->slug)}}">{{$childcat->childcategoryName}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach                            
                     </ul>
                    </li>
                    @endforeach

                </ul>
            </nav> 
        </div> -->
        <!-- /. fixed sidebar -->
        
       

        <div id="custom-modal"></div>
        <div id="page-overlay"></div>
        <div id="loading"><div class="custom-loader"></div></div>

        <!-- <script src="{{asset('public/frontEnd/js/jquery-3.6.3.min.js')}}"></script>
        <script src="{{asset('public/frontEnd/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/frontEnd/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/frontEnd/js/mobile-menu.js')}}"></script>
        <script src="{{asset('public/frontEnd/js/wsit-menu.js')}}"></script>
        <script src="{{asset('public/frontEnd/js/mobile-menu-init.js')}}"></script>
        <script src="{{asset('public/frontEnd/js/wow.min.js')}}"></script> -->

        <script src="{{ asset('public/frontEnd/js/jquery.js') }}"></script>
        <script src="{{ asset('public/frontEnd/js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
        <script src="{{ asset('public/frontEnd/js/custom.js') }}"></script>
        <script src="{{ asset('public/frontEnd/js/custom-slider.js') }}"></script>


        <script>
            new WOW().init();
        </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <!-- feather icon -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
        <script>
            feather.replace();
        </script>
        <script src="{{asset('public/backEnd/')}}/assets/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
        @stack('script')
        <script>
            $('.quick_view').on('click',function(){
            var id = $(this).data('id');  
            $("#loading").show(); 
            if(id){
                $.ajax({
                   type:"GET",
                   data:{'id':id},
                   url:"{{route('quickview')}}",
                   success:function(data){               
                    if(data){
                           $("#custom-modal").html(data);
                           $("#custom-modal").show();
                           $("#loading").hide();
                           $("#page-overlay").show(); 
                    }
                   }
                });
            }  
           });
        </script>
        <!-- quick view end -->
        <!-- cart js start -->
        <script>
            $(".cart_store").on("click", function () {
                var id = $(this).data("id");
                var qty = $(this).parent().find("input").val();
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id, qty: qty ? qty : 1 },
                        url: "{{route('cart.store')}}",
                        success: function (data) {
                            if (data) {
                                console.log("success");
                                $("#custom-modal").html(data);
                                $("#custom-modal").show();
                                $("#page-overlay").show();
                                $("#loading").hide();
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_remove").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "{{route('cart.remove')}}",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                $("#loading").hide();
                                return cart_count() + mobile_cart() + cart_summary();
                            }
                        },
                    });
                }
            });

            $(".cart_increment").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "{{route('cart.increment')}}",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                $("#loading").hide();
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_decrement").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "{{route('cart.decrement')}}",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                $("#loading").hide();
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            function cart_count() {
                $.ajax({
                    type: "GET",
                    url: "{{route('cart.count')}}",
                    success: function (data) {
                        if (data) {
                            $("#cart-qty").html(data);
                        } else {
                            $("#cart-qty").empty();
                        }
                    },
                });
            }
            function mobile_cart() {
                $.ajax({
                    type: "GET",
                    url: "{{route('mobile.cart.count')}}",
                    success: function (data) {
                        if (data) {
                            $("#mobilecart-qty").html(data);
                        } else {
                            $("#mobilecart-qty").empty();
                        }
                    },
                });
            }
            function cart_summary() {
                $.ajax({
                    type: "GET",
                    url: "{{route('shipping.charge')}}",
                    dataType: "html",
                    success: function (response) {
                        $(".cart-summary").html(response);
                    },
                });
            }
        </script>
        <!-- cart js end -->
        <script>
            $(".search_click").on("keyup change", function () {
                var keyword = $(".search_keyword").val();
                $.ajax({
                    type: "GET",
                    data: {keyword: keyword },
                    url: "{{route('livesearch')}}",
                    success: function (products) {
                        if (products) {
                            $("#loading").hide();
                            $(".search_result").html(products);
                        } else {
                            $(".search_result").empty();
                        }
                    },
                });
            });
            $(".msearch_click").on("keyup change", function () {
                var keyword = $(".msearch_keyword").val();
                $.ajax({
                    type: "GET",
                    data: {keyword: keyword },
                    url: "{{route('livesearch')}}",
                    success: function (products) {
                        if (products) {
                            $("#loading").hide();
                            $(".search_result").html(products);
                        } else {
                            $(".search_result").empty();
                        }
                    },
                });
            });
        </script>
        <!-- search js start -->
        <script>
            
        </script>
        <script>
            
        </script>
        <script>
                $('.district').on('change',function(){
                var id = $(this).val();
                    $.ajax({
                       type:"GET",
                       data:{'id':id},
                       url:"{{route('districts')}}",
                       success:function(res){               
                        if(res){
                            $(".area").empty();
                            $(".area").append('<option value="">Select..</option>');
                            $.each(res,function(key,value){
                                $(".area").append('<option value="'+key+'" >'+value+'</option>');
                            });
                       
                        }else{
                           $(".area").empty();
                        }
                       }
                    });  
               });
        </script>
        <script>
            $(".toggle").on("click", function () {
                $("#page-overlay").show();
                $(".mobile-menu").addClass("active");
            });
            
            $("#page-overlay").on("click", function () {
                $("#page-overlay").hide();
                $(".mobile-menu").removeClass("active");
                $(".feature-products").removeClass("active");
            });
            
            $(".mobile-menu-close").on("click", function () {
                $("#page-overlay").hide();
                $(".mobile-menu").removeClass("active");
            });
            
            $(".mobile-filter-toggle").on("click", function () {
                $("#page-overlay").show();
                $(".feature-products").addClass("active");
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".parent-category").each(function() {
                    const menuCatToggle = $(this).find(".menu-category-toggle");
                    const secondNav = $(this).find(".second-nav");
    
                    menuCatToggle.on("click", function() {
                        menuCatToggle.toggleClass("active");
                        secondNav.slideToggle("slow");
                        $(this).closest(".parent-category").toggleClass("active");
                    });
                });
                $(".parent-subcategory").each(function() {
                    const menuSubcatToggle = $(this).find(".menu-subcategory-toggle");
                    const thirdNav = $(this).find(".third-nav");
    
                    menuSubcatToggle.on("click", function() {
                        menuSubcatToggle.toggleClass("active");
                        thirdNav.slideToggle("slow");
                        $(this).closest(".parent-subcategory").toggleClass("active");
                    });
                });
            });
        </script>

        <script>
            var menu = new MmenuLight(
                document.querySelector( '#menu' ),
                'all'
            );

            var navigator = menu.navigation({
                selectedClass: 'Selected',
                slidingSubmenus: true,
                // theme: 'dark',
                title: 'ক্যাটাগরি'
            });

            var drawer = menu.offcanvas({
                // position: 'left'
            });

            //  Open the menu.
            document.querySelector( 'a[href="#menu"]' )
                .addEventListener( 'click', evnt => {
                    evnt.preventDefault();
                    drawer.open();
                });

        </script>

        <script>
            $('.addcartbutton').on('click',function(){
            var id = $(this).data('id');
            var qty = 1;
            if(id){
                $.ajax({
                   cache: 'false',
                   type:"GET",
                   url:"{{url('add-to-cart')}}/"+id+'/'+qty,
                   dataType: "json",
                   success: function (data) {
                        if (data) {
                            console.log("success");
                            $("#loading").hide();
                            return cart_count() + mobile_cart();
                        }
                    },

                    });
                }
           });


        </script>

    </body>
</html>
