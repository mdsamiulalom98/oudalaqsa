@extends('frontEnd.layouts.master')
@section('title','Customer Login')
@section('content')


<div class="clearfix login-page py-5">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="d-flex justify-content-center align-items-center">
                <form action="{{route('customer.signin')}}" class="login-form d-inline-block shadow-lg p-3 p-md-5 radius-lg"
                   method="post">
                   @csrf
                   <h3 class="text-center mb-4">Login</h3>
                   <p>
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" name="phone" required class="form-control radius-lg">
                   </p>

                   <p>
                      <label for="password">Password</label>
                      <input type="password" id="password" name="password" required class="form-control radius-lg">
                   </p>

                   <p class="mb-1">
                      <input type="checkbox" id="remember"> <label for="remember">Remember</label>
                   </p>


                   <input type="submit" value="Login" class="btn btn-theme radius-lg w-100">

                   <div class="mt-2 d-flex align-items-center justify-content-between">
                      <p class="m-0">
                         <a href="{{route('customer.register')}}" class="text-theme"> Register Now</a>
                      </p>
                      <p class="m-0">
                         <a href="{{route('customer.forgot.password')}}"
                            class="text-theme text-decoration-none text-capitalize">forgotten password</a>
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