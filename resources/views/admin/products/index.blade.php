@extends('layouts.admin')

@section('content')
<div class="card" style="padding-left: 290px;">
          <div class="card-header">
                    <h4>Product Page</h4>
          </div>
          <hr>
          <div class="card-body">
                    <table class="table table-bordered table-striped">
                              <th>
                                        <tr>
                                                  <td>Id</td>
                                                  <td>Category</td>
                                                  <td>Name</td>


                                                  <td>Selling Price</td>

                                                  <td>Name</td>
                                                  <td>Image</td>
                                                  <td>Action</td>
                                        </tr>
                              </th>
                              <tbody>
                                        @foreach($products as $item)
                                        <tr>
                                                  <td>{{$item->id}}</td>
                                                  <td>{{$item->category->name}}</td>

                                                  <td>{{$item->name}}</td>
                                                  <td>{{$item->selling_price}}</td>

                                                  <td>
                                                            <img src="{{asset('asset/uploads/products/'.$item->image)}}" class="cate-image" alt="">
                                                  </td>
                                                  <td>
                                                            <a href="{{url('edit-product/'.$item->id)}}" class="btn btn-primary">
                                                                      Edit
                                                            </a>
                                                  </td>
                                                  <td> <a href="{{url('delete-product/'.$item->id)}}" class="btn btn-danger">
                                                                      Delete
                                                            </a></td>
                                        </tr>
                                        @endforeach
                              </tbody>
                    </table>
          </div>
</div>

@endsection