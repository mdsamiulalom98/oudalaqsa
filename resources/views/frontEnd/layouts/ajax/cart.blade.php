<style> 
.cartlist img {
    width: 50px;
    height:50px;
}
.cart_name {
    max-width: 185px;
}
</style>
@php
    $subtotal = Cart::instance('shopping')->subtotal();
    $subtotal=str_replace(',','',$subtotal);
    $subtotal=str_replace('.00', '',$subtotal);
    $shipping = Session::get('shipping')?Session::get('shipping'):0;
    $discount = Session::get('discount')?Session::get('discount'):0;
@endphp
<table class="cart_table table table-bordered table-striped text-center mb-0">
    <thead>
       <tr>
            <th style="width: 10%;"> ডিলিট </th>
            <th style="width: 20%;"> প্রোডাক্ট </th>
            <th style="width: 10%;"> রং </th>
            <th style="width: 10%;"> সাইজ </th>
            <th style="width: 10%;"> ইউনিট </th>
            <th style="width: 20%;">পরিমাণ </th>
            <th style="width: 20%;"> মূল্য </th>
        </tr>
    </thead>

    <tbody>
        @foreach(Cart::instance('shopping')->content() as $value)
        <tr>
                                        <td>
                                            <a class="cart_remove" data-id="{{$value->rowId}}" style="curosor:pointer;"><i class="fas fa-trash text-danger"></i></a>
                                        </td>
                                        <td class="text-left">
                                            <a style="font-size: 14px;" href="{{route('product',$value->options->slug)}}">
                                                <img src="{{asset($value->options->image)}}" height="30" width="30"> {{Str::limit($value->name,20)}}</a>

                                        </td>
                                        <td>
                                            <span style="background-color: {{ $value->options->product_color }}; width: 25px; height: 25px; display: block"></span>
                                            <span>
                                        </td>
                                        <td>
                                            <span>
                                                {{ $value->options->product_size }}
                                            </span>
                                        </td>
                                        
                                        <td>
                                            <span>
                                                {{ $value->options->pro_unit }}
                                            </span>
                                        </td>
                                        
                                        <td class="cart_qty">
                                            <div class="qty-cart vcart-qty">
                                                <div class="quantity">
                                                    <button class="minus cart_decrement"  data-id="{{$value->rowId}}">-</button>
                                                    <input type="text" value="{{$value->qty}}" readonly />
                                                    <button class="plus  cart_increment" data-id="{{$value->rowId}}">+</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="alinur">৳ </span>{{$value->price}}</td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="6" class="text-end px-4">  মোট </th>
                                            <td><span id="net_total">৳ {{$subtotal}}</span></td>
                                        </tr>
                                        <tr>
                                            <th colspan="6" class="text-end px-4">ডেলিভারি চার্জ	</th>
                                            <td>
                                                <span id="cart_shipping_cost">৳ {{$shipping}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="6" class="text-end px-4">সর্বমোট</th>
                                            <td>
                                                <span id="grand_total">৳ {{$subtotal+$shipping}}</span>
                                            </td>
                                        </tr>
                                    </tfoot>
</table>

<script src="{{asset('public/frontEnd/js/jquery-3.6.3.min.js')}}"></script>
<!-- cart js start -->
<script>
    $('.cart_store').on('click',function(){
    var id = $(this).data('id'); 
    var qty = $(this).parent().find('input').val();
    $("#loading").show();
    if(id){
        $.ajax({
           type:"GET",
           data:{'id':id,'qty':qty?qty:1},
           url:"{{route('cart.store')}}",
           success:function(data){               
            if(data){
                console.log('success');
                $("#custom-modal").html(data);
                $("#custom-modal").show();
                $("#page-overlay").show();
                $("#loading").hide();
                return cart_count();
            }
           }
        });
     }  
   });

    $('.cart_remove').on('click',function(){
    var id = $(this).data('id');   
    $("#loading").show();
    if(id){
        $.ajax({
           type:"GET",
           data:{'id':id},
           url:"{{route('cart.remove')}}",
           success:function(data){               
            if(data){
                $(".cartlist").html(data);
                $("#loading").hide();
                return cart_count();
            }
           }
        });
     }  
   });

    $('.cart_increment').on('click',function(){
    var id = $(this).data('id');  
    $("#loading").show();
    if(id){
        $.ajax({
           type:"GET",
           data:{'id':id},
           url:"{{route('cart.increment')}}",
           success:function(data){               
            if(data){
                $(".cartlist").html(data);
                $("#loading").hide();
                return cart_count();
            }
           }
        });
     }  
   });

    $('.cart_decrement').on('click',function(){
    var id = $(this).data('id');  
    $("#loading").show();
    if(id){
        $.ajax({
           type:"GET",
           data:{'id':id},
           url:"{{route('cart.decrement')}}",
           success:function(data){               
            if(data){
                $(".cartlist").html(data);
                $("#loading").hide();
                return cart_count();
            }
           }
        });
     }  
   });

    function cart_count(){
        $.ajax({
           type:"GET",
           url:"{{route('cart.count')}}",
           success:function(data){               
            if(data){
                $("#cart-qty").html(data);
            }else{
               $("#cart-qty").empty();
            }
           }
        }); 
   };
</script>
<!-- cart js end -->