@extends('layouts.admin')

@section('content')
<div class="card" style="padding-left: 290px;">
          <div class="card-header">
                    <h4>Category Page</h4>
          </div>
          <hr>
          <div class="card-body">
                    <table class="table table-bordered table-striped">
                              <th>
                                        <tr>
                                                  <td>Id</td>
                                                  <td>Name</td>
                                                  <td>Description</td>
                                                  <td>Image</td>
                                                  <td>Action</td>
                                        </tr>
                              </th>
                              <tbody>
                                        @foreach($category as $item)
                                        <tr>
                                                  <td>{{$item->id}}</td>
                                                  <td>{{$item->name}}</td>
                                                  <td>{{$item->description}}</td>
                                                  <td>
                                                            <img src="{{asset('asset/uploads/category/'.$item->image)}}" class="cate-image" alt="">
                                                  </td>
                                                  <td>
                                                            <a href="{{url('edit-category/'.$item->id)}}" class="btn btn-primary">
                                                                      Edit
                                                            </a>
                                                  </td>
                                                  <td> <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger">
                                                                      Delete
                                                            </a></td>
                                        </tr>
                                        @endforeach
                              </tbody>
                    </table>
          </div>
</div>

@endsection