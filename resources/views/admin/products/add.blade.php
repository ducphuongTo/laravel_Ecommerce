@extends('layouts.admin')

@section('content')
<div class="card" style="padding-left: 290px;">
          <div class="card-header">
                    <h4>Add products</h4>
          </div>
          <div class="card-body">
                    <form action="{{url('insert-product')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="row">
                                        <div class="col-md-12 mb-3">
                                                  <select class="form-select" name="cate_id">
                                                            <option selected>Select category</option>
                                                            @foreach($category as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                  </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                  <label for="" class="form-label">Name</label>
                                                  <input type="text" class="form-control" name="name" style="border: 1px solid black;">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                  <label for="">Slug</label>
                                                  <input type="text" class="form-control" style="border: 1px solid black;" name="slug">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                  <label for="">Original Price</label>
                                                  <input type="number" class="form-control" style="border: 1px solid black;" name="original_price">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                  <label for="">Selling Price</label>
                                                  <input type="number" class="form-control" style="border: 1px solid black;" name="selling_price">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                  <label for="">Tax</label>
                                                  <input type="number" class="form-control" style="border: 1px solid black;" name="tax">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                  <label for="">Quantity</label>
                                                  <input type="number" class="form-control" style="border: 1px solid black;" name="qty">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                                  <label for="" class="form-label">Small Description</label>
                                                  <textarea name="small_description" class="form-control" style="border: 1px solid black;" id="" cols="30" rows="3"></textarea>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                                  <label for="" class="form-label">Description</label>
                                                  <textarea name="description" class="form-control" style="border: 1px solid black;" id="" cols="30" rows="3"></textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                  <label for="">Status</label>
                                                  <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                  <label for="">Trending</label>
                                                  <input class="form-check-input mt-0" type="checkbox" name="trending" value="" aria-label="Checkbox for following text input">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                  <label for="">Meta Title</label>
                                                  <input type="text" class="form-control" style="border: 1px solid black;" name="meta_title">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                  <label for="">Meta keyword</label>
                                                  <textarea name="meta_keywords" class="form-control" style="border: 1px solid black;" rows="3"></textarea>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                  <label for="">Meta Description</label>
                                                  <textarea class="form-control" name="meta_description" style="border: 1px solid black;" rows="3"></textarea>

                                        </div>

                                        <div class="input-group mb-3">
                                                  <input type="file" class="form-control" name="image" style="border: 1px solid black;">

                                        </div>
                                        <br> <br>

                                        <div class="col-md-12 ">
                                                  <button class="btn btn-primary">Submit</button>
                                        </div>
                              </div>
                    </form>
          </div>
</div>

@endsection