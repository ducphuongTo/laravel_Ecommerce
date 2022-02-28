@extends('layouts.front')

@section('title')
My Cart
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
          <div class="container">
                    <div class="mb-0">
                              <a href="{{url('/')}}">
                                        Home /
                              </a>

                              <a href="{{url('/cart')}}">
                                        Cart /
                              </a>
                    </div>
          </div>
</div>

<div class="container my-5">
          <div class="card shadow ">
                    @if($cartitems->count() > 0)
                    <div class="card-body">
                              @php $total = 0; @endphp
                              @foreach($cartitems as $item)
                              <div class="row product_data">
                                        <div class="col-md-2 my-auto">
                                                  <img src="{{asset('asset/uploads/products/'.$item->products->image)}}" height="70px" width="70px" alt="">
                                        </div>
                                        <div class="col-md-3 my-auto">
                                                  <h3>{{$item->products->name}}</h3>
                                        </div>
                                        <div class="col-md-2 my-auto">
                                                  <h3>{{$item->products->selling_price}} VNĐ</h3>
                                        </div>
                                        <div class="col-md-3">
                                                  <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                                                  @if($item->products->qty >= $item->prod_qty)
                                                  <label for="Quantity">Quantity</label>
                                                  <div class="input-group text-center mb-3" style="width: 130px;">
                                                            <button class="input-group changeQuantity decrement-btn">-</button>
                                                            <input type="text" name="quantity" class="form-control qty-input text-center" value="{{$item->prod_qty}}">
                                                            <button class="input-group-text changeQuantity increase-btn">+</button>
                                                  </div>
                                                  @php $total += $item->products->selling_price * $item->prod_qty; @endphp
                                                  @else
                                                  <h6>Out of stock</h6>
                                                  @endif
                                        </div>
                                        <div class="col-md-2">
                                                  <button class=" btn btn-danger delete-cart-item"> <i class="fa fa-trash"></i> Remove</button>
                                        </div>
                              </div>

                              @endforeach

                    </div>
                    <div class="card-footer">
                              <h6>Total price: {{$total}} VNĐ</h6>
                              <a href="{{url('checkout')}}">
                                        <button class="btn btn-outline-success float-end">Proceed to checkout</button>
                              </a>
                    </div>
                    @else
                    <div class="card-body text-center">
                              <h2>Your <i class="fa fa-shopping-cart"></i>Cart is empty</h2>
                              <a href="{{url('category')}}" class="btn btn-outline-primary float-end">Continue Shopping</a>
                    </div>
                    @endif
          </div>
</div>
@endsection

@section('scripts')
<script>
          $(document).ready(function() {


                    $('.addToCartBtn').click(function(e) {
                              e.preventDefault();

                              var product_id = $(this).closest('.product_data').find('.prod_id').val()
                              var product_qty = $(this).closest('.product_data').find('.qty-input').val()
                              $.ajaxSetup({
                                        headers: {
                                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                              });
                              $.ajax({
                                        method: "POST",
                                        url: "/add-to-cart",
                                        data: {
                                                  'product_id': product_id,
                                                  'product_qty': product_qty

                                        },

                                        success: function(response) {
                                                  alert(response.status);
                                        }
                              });
                    });

                    $('.increase-btn').click(function(e) {
                              e.preventDefault();

                              var inc_value = $(this).closest('.product_data').find('.qty-input').val()

                              var value = parseInt(inc_value, 10)
                              value = isNaN(value) ? 0 : value;
                              if (value < 10) {
                                        value++
                                        $(this).closest('.product_data').find('.qty-input').val(value)
                              }
                    })

                    $('.decrement-btn').click(function(e) {
                              e.preventDefault();

                              var dec_value = $(this).closest('.product_data').find('.qty-input').val()
                              var value = parseInt(dec_value, 10)
                              value = isNaN(value) ? 0 : value;
                              if (value > 1) {
                                        value--
                                        $(this).closest('.product_data').find('.qty-input').val(value)
                              }
                    })
                    $.ajaxSetup({
                              headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              }
                    });
                    $('.delete-cart-item').click(function(e) {
                              e.preventDefault()




                              var prod_id = $(this).closest('.product_data').find('.prod_id').val()

                              $.ajax({
                                        method: "POST",
                                        url: "delete-cart-item",
                                        data: {
                                                  'prod_id': prod_id,

                                        },
                                        success: function(response) {
                                                  window.location.reload()
                                                  swal("", response.status, "success");
                                        }
                              });
                    })

                    $('.changeQuantity').click(function(e) {
                              e.preventDefault();

                              var prod_id = $(this).closest('.product_data').find('.prod_id').val()

                              var qty = $(this).closest('.product_data').find('.qty-input').val()

                              data = {
                                        'prod_id': prod_id,
                                        'prod_qty': qty,
                              }

                              $.ajax({
                                        method: "POST",
                                        url: "update-cart",
                                        data: data,
                                        success: function(response) {
                                                  window.location.reload()

                                        }
                              });
                    })
          })
</script>
@endsection