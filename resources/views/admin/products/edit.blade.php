@extends('layouts.admin')

@section('content')
<div class="card" style="padding-left: 290px;">
          <div class="card-header">
                    <h4>Update products</h4>
          </div>
          <div class="card-body">
                    <form action="{{url('update-product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <div class="row">
                                        <div class="col-md-12 mb-3">
                                                  <select class="form-select">
                                                            <option selected>{{$products->category->name}}</option>

                                                  </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                  <label for="" class="form-label">Name</label>
                                                  <input type="text" class="form-control" value="{{$products->name}}" name="name" style="border: 1px solid black;">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                  <label for="">Slug</label>
                                                  <input type="text" class="form-control" value="{{$products->slug}}" style="border: 1px solid black;" name="slug">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                  <label for="">Original Price</label>
                                                  <input type="number" class="form-control" style="border: 1px solid black;" value="{{$products->original_price}}" name="original_price">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                  <label for="">Selling Price</label>
                                                  <input type="number" class="form-control" style="border: 1px solid black;" value="{{$products->selling_price}}" name="selling_price">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                  <label for="">Tax</label>
                                                  <input type="number" class="form-control" style="border: 1px solid black;" value="{{$products->tax}}" name="tax">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                  <label for="">Quantity</label>
                                                  <input type="number" class="form-control" style="border: 1px solid black;" value="{{$products->qty}}" name="qty">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                                  <label for="" class="form-label">Small Description</label>
                                                  <textarea name="small_description" class="form-control" style="border: 1px solid black;" id="" cols="30" rows="3">$products->small_description</textarea>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                                  <label for="" class="form-label">Description</label>
                                                  <textarea name="description" class="form-control" style="border: 1px solid black;" id="" cols="30" rows="3">$products->description</textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                  <label for="">Status</label>
                                                  <input class="form-check-input mt-0" type="checkbox" name="status" {{$products->status == 1 ? 'checked' : ''}}>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                  <label for="">Popular</label>
                                                  <input class="form-check-input mt-0" type="checkbox" name="trending" {{$products->trending == 1 ? 'checked' : ''}}>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                  <label for="">Meta Title</label>
                                                  <input type="text" class="form-control" value="{{$products->meta_title}}" style="border: 1px solid black;" name="meta_title">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                  <label for="">Meta keyword</label>
                                                  <textarea name="meta_keywords" class="form-control" style="border: 1px solid black;" rows="3">{{$products->meta_keywords}}</textarea>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                  <label for="">Meta Description</label>
                                                  <textarea class="form-control" name="meta_description" style="border: 1px solid black;" rows="3">{{$products->meta_description}}</textarea>

                                        </div>
                                        @if($products->image)
                                        <img src="{{asset('asset/uploads/products/'.$products->image)}}" width="100px" alt="">
                                        @endif
                                        <div class="input-group mb-3">

                                                  <input type="file" class="form-control" name="image" style="border: 1px solid black;">

                                        </div>
                                        <br> <br>

                                        <div class="col-md-12 ">
                                                  <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                              </div>
                    </form>
          </div>
</div>

@endsection