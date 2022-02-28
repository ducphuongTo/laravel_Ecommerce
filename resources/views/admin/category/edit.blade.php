@extends('layouts.admin')

@section('content')
<div class="card" style="padding-left: 290px;">
          <div class="card-header">
                    <h4>Edit/Update category</h4>
          </div>
          <div class="card-body">
                    <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <div class="row">
                                        <div class="col-md-6 mb-3">
                                                  <label for="" class="form-label">Name</label>
                                                  <input type="text" value="{{$category->name}}" class="form-control" name="name" style="border: 1px solid black;">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                  <label for="">Slug</label>
                                                  <input type="text" value="{{$category->slug}}" class="form-control" style="border: 1px solid black;" name="slug">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                  <label for="" class="form-label">Description</label>
                                                  <textarea name="description" class="form-control" style="border: 1px solid black;" id="" cols="30" rows="3">$category->description</textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                  <label for="">Status</label>
                                                  <input class="form-check-input mt-0" type="checkbox" name="status" {{$category->status == 1 ? 'checked' : ''}}>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                  <label for="">Popular</label>
                                                  <input class="form-check-input mt-0" type="checkbox" name="popular" {{$category->popular == 1 ? 'checked' : ''}}>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                  <label for="">Meta Title</label>
                                                  <input type="text" class="form-control" style="border: 1px solid black;" value="{{$category->meta_title}}" name="meta_title">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                  <label for="">Meta keyword</label>
                                                  <textarea name="meta_keywords" value="{{$category->meta_keywords}}" class="form-control" style="border: 1px solid black;" rows="3"></textarea>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                  <label for="">Meta Description</label>
                                                  <textarea class="form-control" name="meta_description" value="{{$category->meta_description}}" style="border: 1px solid black;" rows="3"></textarea>

                                        </div>

                                        @if($category->image)
                                        <img src="{{asset('asset/uploads/category'. $category->image)}}" alt="">
                                        @endif
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