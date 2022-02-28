@extends('layouts.front')

@section('title')
My Orders
@endsection

@section('content')
<div class="container py-5">
          <div class="row">
                    <div class="col-md-12">
                              <div class="card">
                                        <div class="card-header bg-primary">
                                                  <h4 class="text-white">
                                                            Order View
                                                            <a href="{{url('my-orders')}}" class="btn btn-warning text-white float-end">BACK</a>
                                                  </h4>
                                        </div>


                                        <div class="card-body">
                                                  <div class="row">
                                                            <h4>Shipping Details</h4>
                                                            <div class="col-md-6 order-details">

                                                                      <label for="">First Name</label>
                                                                      <div class="border ">{{$orders->fname}}</div>
                                                                      <label for="">Last Name</label>
                                                                      <div class="border ">{{$orders->lname}}</div>
                                                                      <label for="">Email</label>
                                                                      <div class="border ">{{$orders->email}}</div>
                                                                      <label for="">Contact Number</label>
                                                                      <div class="border ">{{$orders->phone}}</div>
                                                                      <label for="">Shipping Address</label>
                                                                      <div class="border p-2 ">
                                                                                {{$orders->address}},
                                                                                {{$orders->city}},
                                                                                {{$orders->state}},
                                                                                {{$orders->country}},


                                                                      </div>
                                                                      <label for="">Zip Code</label>
                                                                      <div class="border p-2">{{$orders->pincode}}</div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                      <h4>Order Details</h4>
                                                                      <table class="table table-bordered">
                                                                                <thead>
                                                                                          <tr>
                                                                                                    <th>Name</th>
                                                                                                    <th>Quantity</th>
                                                                                                    <th>Price</th>
                                                                                                    <th>Image</th>
                                                                                          </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                          @foreach($orders->orderItems as $item)
                                                                                          <tr>
                                                                                                    <td>{{$item->products->name}}</td>
                                                                                                    <td>{{$item->qty}}</td>
                                                                                                    <td>{{$item->price}}</td>
                                                                                                    <td>
                                                                                                              <img src="{{asset('asset/uploads/products/'.$item->products->image)}}" width="50px" alt="">
                                                                                                    </td>
                                                                                          </tr>
                                                                                          @endforeach
                                                                                </tbody>
                                                                      </table>
                                                                      <h4 class="px-2">Grand Total:{{$orders->total_price}}</h4>
                                                                      <div class="mt-5 px-2">
                                                                                <label for="">ORDER STATUS</label>
                                                                                <form action="{{url('update-order/'.$orders->id)}}" method="POST">
                                                                                          @csrf
                                                                                          @method('PUT')

                                                                                          <select class="form-select" name="order_status">
                                                                                                    <option selected>Open this select menu</option>
                                                                                                    <option {{$orders->status == '0' ? 'selected': ''}} value="0">Pending</option>
                                                                                                    <option {{$orders->status == '1' ? 'selected': ''}} value="1">Complted</option>

                                                                                          </select>

                                                                                          <button class="btn btn-primary float-end mt-3" type="submit">Update</button>
                                                                                </form>
                                                                      </div>

                                                            </div>
                                                  </div>

                                        </div>

                              </div>

                    </div>
          </div>
</div>
@endsection