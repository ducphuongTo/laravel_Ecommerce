@extends('layouts.front')

@section('title')
Welcome to E-shop
@endsection

@section('content')
@include('layouts.inc.slider')

<div class="py-5">
          <div class="container">
                    <div class="row">
                              <h2>Featured Products</h2>
                              @foreach($featured_products as $prod)
                              <div class="col-md-3">
                                        <div class="card">
                                                  <img src="{{asset('asset/uploads/products/'.$prod->image)}}" style="height:300px;" alt="">
                                                  <div class="card-body">
                                                            <h5>{{$prod->name}}</h5>
                                                            <span class="float-start">{{$prod->selling_price}}VNĐ</span>
                                                            <span class="float-end"><s>{{$prod->original_price}}VNĐ</s></span>
                                                  </div>
                                        </div>
                              </div>
                              @endforeach
                    </div>
          </div>
</div>

<div class="py-5">
          <div class="container">
                    <div class="row">
                              <h2>Trending Category</h2>
                              @foreach($trending_category as $tcate)
                              <div class="col-md-3">
                                        <a href="{{url('view-category/'.$tcate->slug)}}">
                                                  <div class="card">
                                                            <img src="{{asset('asset/uploads/category/'.$tcate->image)}}" height="250px;" alt="">
                                                            <div class="card-body">
                                                                      <h5>{{$tcate->name}}</h5>

                                                            </div>
                                                  </div>
                                        </a>
                              </div>
                              @endforeach
                    </div>
          </div>
</div>

@endsection