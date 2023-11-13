@extends('frontEnd.layouts.master')
@section('title','Customer Account')
@section('content')
<!-- end header section  -->
<section class="clearfix account-page py-5">
    @php
    $customer = \App\Models\Customer::with('cust_area')->find(Auth::guard('customer')->user()->id);
    @endphp

   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="account-details">
               <ul id="tabsJustified" class="nav nav-tabs">
                  <li>
                     <a href="#" data-target="#dashboard" data-toggle="tab">Dashboard</a>
                  </li>
                  <li>
                     <a href="#" data-target="#orders" data-toggle="tab">orders</a>
                  </li>
                  <li>
                     <a href="#" data-target="#download" data-toggle="tab">download</a>
                  </li>
                  <li>
                     <a href="#" data-target="#address" data-toggle="tab">address</a>
                  </li>
                  <li>
                     <a href="#" data-target="#paymentMethods" data-toggle="tab">payment methods</a>
                  </li>
                  <li>
                     <a href="#" data-target="#accountDetails" data-toggle="tab">account details</a>
                  </li>
                  <li>
                     <a href="{{ route('customer.logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Logout</a>
                  </li>
               </ul>
               <div id="tabsJustifiedContent" class="tab-content pl-sm-4 mt-3 mt-sm-0">
                  <div id="dashboard" class="tab-pane fade active show">
                     <p>Hello {{ $customer->name }} (not {{ $customer->name }}?<a href="{{ route('customer.logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> Logout)</a>
                    <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form></p>
                     <p>From your account dashboard you can view your recent orders, manage your
                        shipping and billing addresses, and edit your password and account details.

                     </p>

                     <div class="row">
                        <div class="col-6 col-lg-4">
                           <div class="text-center border p-3 dashboard-item radius-lg shadow">
                              <div class="dash-thumb">
                                 <i class="fa-brands fa-dropbox"></i>
                              </div>
                              <p><a href="#" class="text-dark">Dashboard</a></p>
                           </div>
                        </div>
                        <div class="col-6 col-lg-4">
                           <div class="text-center border p-3 dashboard-item radius-lg shadow">
                              <div class="dash-thumb">
                                 <i class="fa-solid fa-cloud-arrow-down"></i>
                              </div>
                              <p><a href="#" data-target="#download" data-toggle="tab" class="text-dark">Download</a>
                              </p>
                           </div>
                        </div>
                        <div class="col-6 col-lg-4">
                           <div class="text-center border p-3 dashboard-item radius-lg shadow">
                              <div class="dash-thumb">
                                 <i class="fa-solid fa-location-dot"></i>
                              </div>
                              <p><a href="#" data-target="#address" data-toggle="tab" class="text-dark">Address</a>
                              </p>
                           </div>
                        </div>
                        <div class="col-6 col-lg-4">
                           <div class="text-center border p-3 dashboard-item radius-lg shadow">
                              <div class="dash-thumb">
                                 <i class="fa-regular fa-user"></i>
                              </div>
                              <p><a href="#" data-target="#accountDetails" class="text-dark">Account Details</a>
                              </p>
                           </div>
                        </div>
                        <div class="col-6 col-lg-4">
                           <div class="text-center border p-3 dashboard-item radius-lg shadow">
                              <div class="dash-thumb">
                                 <i class="fa-regular fa-heart"></i>
                              </div>
                              <p><a href="#" class="text-dark">Wishlist</a>
                              </p>
                           </div>
                        </div>
                        <div class="col-6 col-lg-4">
                           <div class="text-center border p-3 dashboard-item radius-lg shadow">
                              <div class="dash-thumb">
                                 <i class="fa-solid fa-arrow-right-from-bracket"></i>
                              </div>
                              <p>
                                <a href="{{ route('customer.logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                              </p>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div id="orders" class="tab-pane fade">
                     <div class="row">
                        <div class="col-12">
                           <h2 class="text-capitalize responsive-title mt-3 mt-sm-0">
                              <i class="fa-brands fa-dropbox"></i>
                              <span class="ml-1">Order</span>
                           </h2>
                        </div>
                        <div class="col-12">
                           <table id="ordered-product" class="table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Items</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>

                                 <script>

                                    for (let i = 0; i < 100; i++) {
                                       document.write(`
                                       
                                       <tr>
                                          <td>#${6281 + (i * 13)}</td>
                                          <td>July 5, 2022</td>
                                          <td>Processing</td>
                                          <td>$${100 + (i * 7)}.00</td>
                                          <td>${Math.floor(Math.random() * (50 - 20)) + 20}</td>
                                          <td><a href="./product-single.html">view</a></td>
                                       </tr>
                                       
                                       `);

                                    }
                                 </script>

                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Items</th>
                                    <th>Actions</th>
                                 </tr>
                              </tfoot>
                           </table>

                        </div>
                     </div>
                  </div>
                  <div id="download" class="tab-pane fade">
                     <div class="row">
                        <div class="col-12">
                           <h2 class="text-capitalize responsive-title mt-3 mt-sm-0">
                              <i class="fa-solid fa-cloud-arrow-down"></i>
                              <span class="ml-1">Download</span>
                           </h2>
                           <p>No downloads available yet.</p>
                           <p>
                              <a href="./product.html" class="btn btn-theme px-4 radius-lg fz-12">Go Shopping</a>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div id="address" class="tab-pane fade">
                     <div class="row">
                        <div class="col-12">
                           <h2 class="text-capitalize responsive-title mt-3 mt-sm-0">
                              <i class="fa-solid fa-location-dot"></i>
                              <span class="ml-1">Address</span>
                           </h2>
                           <p>The following addresses will be used on the checkout page by default.</p>
                        </div>
                        <div class="col-lg-6">
                           <h2 class="responsive-title my-3">Billing Address</h2>
                           <form class="border px-5 px-sm-4 px-lg-5 py-3 shadow radius-lg" action="./account.html"
                              method="post">
                              <p>
                                 <label for="b-email">Email Address</label>
                                 <input type="email" class="form-control radius-lg" id="b-email">
                              </p>
                              <p>
                                 <label for="b-first-name">First Name</label>
                                 <input type="text" class="form-control radius-lg" id="b-first-name">
                              </p>
                              <p>
                                 <label for="b-last-name">Last Name</label>
                                 <input type="text" class="form-control radius-lg" id="b-last-name">
                              </p>
                              <p>
                                 <label for="b-address1">Address 1</label>
                                 <textarea id="b-address1" class="form-control radius-lg"></textarea>
                              </p>
                              <p>
                                 <label for="b-address2">Address 1</label>
                                 <textarea id="b-address2" class="form-control radius-lg"></textarea>
                              </p>
                              <p>
                                 <label for="b-country">Country</label>
                                 <input type="text" id="b-country" class="form-control radius-lg">
                              </p>
                              <p>
                                 <label for="b-zip">Zip Code</label>
                                 <input type="text" id="b-zip" class="form-control radius-lg">
                              </p>
                              <p>
                                 <label for="b-city">City</label>
                                 <input type="text" id="b-city" class="form-control radius-lg">
                              </p>
                              <p>
                                 <label for="b-state">State</label>
                                 <input type="text" id="b-state" class="form-control radius-lg">
                              </p>
                              <p>
                                 <label for="b-phone">Phone Number</label>
                                 <input type="text" class="form-control radius-lg" id="b-phone">
                              </p>
                              <p>
                                 <a href="#" class="btn btn-theme radius-lg fz-12 px-4">Edit Address</a>
                              </p>
                           </form>
                        </div>
                        <div class="col-lg-6">
                           <h2 class="responsive-title my-3">Shipping Address</h2>
                           <form class="border px-5 px-sm-4 px-lg-5 py-3 shadow radius-lg" action="./account.html"
                              method="post">
                              <p>
                                 <label for="s-email">Email Address</label>
                                 <input type="email" class="form-control radius-lg" id="s-email">
                              </p>
                              <p>
                                 <label for="s-first-name">First Name</label>
                                 <input type="text" class="form-control radius-lg" id="s-first-name">
                              </p>
                              <p>
                                 <label for="s-last-name">Last Name</label>
                                 <input type="text" class="form-control radius-lg" id="s-last-name">
                              </p>
                              <p>
                                 <label for="s-address1">Address 1</label>
                                 <textarea id="s-address1" class="form-control radius-lg"></textarea>
                              </p>
                              <p>
                                 <label for="s-address2">Address 1</label>
                                 <textarea id="s-address2" class="form-control radius-lg"></textarea>
                              </p>
                              <p>
                                 <label for="s-country">Country</label>
                                 <input type="text" id="s-country" class="form-control radius-lg">
                              </p>
                              <p>
                                 <label for="s-zip">Zip Code</label>
                                 <input type="text" id="s-zip" class="form-control radius-lg">
                              </p>
                              <p>
                                 <label for="s-city">City</label>
                                 <input type="text" id="s-city" class="form-control radius-lg">
                              </p>
                              <p>
                                 <label for="s-state">State</label>
                                 <input type="text" id="s-state" class="form-control radius-lg">
                              </p>
                              <p>
                                 <label for="s-phone">Phone Number</label>
                                 <input type="text" class="form-control radius-lg" id="s-phone">
                              </p>
                              <p>
                                 <a href="#" class="btn btn-theme radius-lg fz-12 px-4">Edit Address</a>
                              </p>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div id="paymentMethods" class="tab-pane fade">
                     <p>
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>No saved methods found.</span>
                     </p>
                     <p>
                        <a href="#" class="btn btn-theme px-3 fz-12">Add Payment Method</a>
                     </p>
                  </div>
                  <div id="accountDetails" class="tab-pane fade">
                     <div class="row">
                        <div class="col-lg-6 mb-2">
                           <h2 class="responsive-title text-capitalize my-3">
                              <i class="fa-regular fa-user"></i>
                              Account details
                           </h2>
                           <form class="border px-5 px-sm-4 px-lg-5 py-3 shadow radius-lg" action="{{ route('customer.profile_update') }}"
                              method="post">
                              @csrf
                              <label for="name">Full Name</label>
                              <input type="text" name="name" value="{{ $customer->name }}" class="form-control radius-lg mb-3" id="name">
                              <label for="phone">Phone Number</label>
                              <input type="text" name="phone" value="{{ $customer->phone }}" readonly class="form-control radius-lg mb-3" id="phone">                              
                              <label for="email">Email Address</label>
                              <input type="email" name="email" value="{{ $customer->email }}" class="form-control radius-lg mb-3" id="email">
                              <input type="submit" value="Save Changes" class="btn btn-theme px-3 mb-3">
                           </form>
                        </div>
                        <div class="col-lg-6 mb-2">
                           <h2 class="responsive-title text-capitalize my-3">
                              <i class="fa-solid fa-key"></i>
                              change password
                           </h2>
                           <form class="border px-5 px-sm-4 px-lg-5 py-3 shadow radius-lg" action="./account.html"
                              method="post">
                              <label for="old-pwd">Old Password</label>
                              <input type="password" class="form-control radius-lg mb-3" id="old-pwd">
                              <label for="new-pwd">New Password</label>
                              <input type="password" class="form-control radius-lg mb-3" id="new-pwd">
                              <label for="cm-pwd">Confirm Password</label>
                              <input type="password" class="form-control radius-lg mb-3" id="cm-pwd">
                              <input type="submit" value="Save Changes" class="btn btn-theme px-3 mb-3">
                           </form>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
</section>
<!-- start footer section -->


@endsection
@push('script')
<script src="{{asset('public/frontEnd/')}}/js/parsley.min.js"></script>
<script src="{{asset('public/frontEnd/')}}/js/form-validation.init.js"></script>
@endpush