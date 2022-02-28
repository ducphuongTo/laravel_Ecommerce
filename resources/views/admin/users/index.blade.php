@extends('layouts.admin')

@section('content')
<div class="card" style="padding-left: 290px;">
          <div class="card-header">
                    <h4>Register Users</h4>
          </div>
          <hr>
          <div class="card-body">
                    <table class="table table-bordered table-striped">
                              <th>
                                        <tr>
                                                  <td>Id</td>

                                                  <td>Name</td>


                                                  <td>Email</td>

                                                  <td>Phone</td>

                                                  <td>Action</td>
                                        </tr>
                              </th>
                              <tbody>
                                        @foreach($users as $item)
                                        <tr>
                                                  <td>{{$item->id}}</td>
                                                  <td>{{$item->name .' ' .$item->lname}}</td>

                                                  <td>{{$item->email}}</td>
                                                  <td>{{$item->phone}}</td>


                                                  <td>
                                                            <a href="{{url('view-users/'.$item->id)}}" class="btn btn-primary">
                                                                      View
                                                            </a>
                                                  </td>

                                        </tr>
                                        @endforeach
                              </tbody>
                    </table>
          </div>
</div>

@endsection