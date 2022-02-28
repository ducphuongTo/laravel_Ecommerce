@extends('layouts.front')

@section('title')
Checkout
@endsection

@section('content')
<div class="content mt-5">
          <form action="{{url('place-order')}}" method="POST">
                    {{csrf_field()}}
                    <div class="row">
                              <div class="col-md-7">
                                        <div class="card">
                                                  <div class="card-body">
                                                            <h6>Basic detail</h6>

                                                            <hr>
                                                            <div class="row checkout-form">
                                                                      <div class="col-md-6">
                                                                                <label for="firstName">First Name</label>
                                                                                <input type="text" value="{{ Auth::user()->name }}" name="fname" class="form-control" placeholder="Enter first name">
                                                                      </div>

                                                                      <div class="col-md-6">
                                                                                <label for="lastName">Last Name</label>
                                                                                <input type="text" class="form-control" value="{{ Auth::user()->lname }}" name="lname" placeholder="Enter last name">
                                                                      </div>

                                                                      <div class="col-md-6 mt-3">
                                                                                <label for="email">Email</label>
                                                                                <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email" placeholder="Enter email">
                                                                      </div>

                                                                      <div class="col-md-6 mt-3">
                                                                                <label for="">Phone number</label>
                                                                                <input type="text" class="form-control" value="{{ Auth::user()->phone }}" name="phone" placeholder="Enter phone number">
                                                                      </div>

                                                                      <div class="col-md-6 mt-3">
                                                                                <label for="address">Address</label>
                                                                                <input type="text" class="form-control" value="{{ Auth::user()->address }}" name="address" placeholder="Enter address">
                                                                      </div>

                                                                      <div class="col-md-6 mt-3">
                                                                                <label for="">City</label>
                                                                                <input type="text" class="form-control" value="{{ Auth::user()->city }}" name="city" placeholder="Enter city">
                                                                      </div>

                                                                      <div class="col-md-6 mt-3">
                                                                                <label for="">State</label>
                                                                                <input type="text" class="form-control" value="{{ Auth::user()->state }}" name="state" placeholder="Enter state">
                                                                      </div>

                                                                      <div class="col-md-6 mt-3">
                                                                                <label for="">Country</label>
                                                                                <input type="text" class="form-control" value="{{ Auth::user()->country }}" name="country" placeholder="Enter country">
                                                                      </div>

                                                                      <div class="col-md-6 mt-3">
                                                                                <label for="">Pin Code</label>
                                                                                <input type="text" class="form-control" value="{{ Auth::user()->pincode }}" name="pincode" placeholder="Enter Pin Code">
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>
                              </div>

                              <div class="col-md-5">

                                        <div class="card">
                                                  <div class="card-body">
                                                            <h6>Order details</h6>
                                                            <hr>
                                                            <table class="table table-striped table-bordered">
                                                                      <thead>
                                                                                <tr>
                                                                                          <th>Name</th>
                                                                                          <th>Quantity</th>
                                                                                          <th>Price</th>
                                                                                </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                                @foreach($cartItems as $item)
                                                                                <tr>
                                                                                          <td>{{$item->products->name}}</td>
                                                                                          <td>{{$item->prod_qty}}</td>
                                                                                          <td>{{$item->products->selling_price}}</td>

                                                                                </tr>
                                                                                @endforeach
                                                                      </tbody>
                                                            </table>
                                                            <hr>

                                                            <button class="btn btn-primary float-end" type="submit">Place Order</button>
                                                  </div>
                                        </div>

                              </div>
                    </div>
          </form>
</div>

@endsection