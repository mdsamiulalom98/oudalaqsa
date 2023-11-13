@extends('frontEnd.layouts.master')
@section('title','Customer Register')
@section('content')


<div class="clearfix login-page py-5">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="d-flex justify-content-center align-items-center">
                <form action="{{route('customer.store')}}"
                   class="register-form login-form d-inline-block shadow-lg p-3 p-md-5 radius-lg" method="post">
                   @csrf

                   <h3 class="text-center mb-4">Register</h3>
                   <p>
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" required class="form-control radius-lg">
                   </p>
                   <p>
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" name="phone" required class="form-control radius-lg">
                   </p>
                   <p>
                      <label for="password">Password</label>
                      <input type="password" id="password" name="password" required class="form-control radius-lg">
                   </p>
                   {{-- <p>
                      <label for="cmp">Confirm Password</label>
                      <input type="cmp" id="password" required class="form-control radius-lg">
                   </p> --}}
                   <input type="submit" value="Register Now" class="btn btn-theme radius-lg w-100">
                   <div class="mt-2 d-flex align-items-center justify-content-between">
                      <p class="m-0">
                         <a href="./login.html" class="text-theme"> Login here</a>
                      </p>
                      <p class="m-0">
                         <a href="#" class="text-theme text-decoration-none text-capitalize">forgotten password</a>
                      </p>
                   </div>

                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
@push('script')
<script src="{{asset('public/frontEnd/')}}/js/parsley.min.js"></script>
<script src="{{asset('public/frontEnd/')}}/js/form-validation.init.js"></script>
@endpush