@extends('layouts.front')

@section('title')
{{$category->name}}
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
          <div class="container">
                    <div class="mb-0">
                              Collections/{{$category->name}}
                    </div>
          </div>
</div>
<div class="py-5">
          <div class="container">
                    <div class="row">
                              <h2>{{$category->name}}</h2>
                              @foreach($products as $prod)
                              <div class="col-md-3">
                                        <a href="{{url('category/'.$category->slug.'/'.$prod->slug)}}">
                                                  <div class="card">
                                                            <img src="{{asset('asset/uploads/products/'.$prod->image)}}" height="250px;" alt="">
                                                            <div class="card-body">
                                                                      <h5 style="font-size:medium; text-align:center;">{{$prod->name}}</h5>
                                                                      <span class="float-start">{{$prod->selling_price}} VNĐ</span>
                                                                      <span class="float-end"><s>{{$prod->original_price}} VNĐ</s></span>
                                                            </div>
                                                  </div>
                                        </a>
                              </div>
                              @endforeach
                    </div>
          </div>
</div>
@endsection