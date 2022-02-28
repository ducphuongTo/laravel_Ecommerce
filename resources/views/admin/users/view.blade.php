@extends('layouts.admin')

@section('content')
<div class="container">
          <div class="row">
                    <div class="col-md-12">
                              <div class="card" style="padding-left: 290px;">
                                        <div class="card-header">
                                                  <h4>Users Details
                                                            <a href="{{url('users')}}" class="btn btn-primary btn-sm float-end">Back</a>
                                                  </h4>
                                                  <hr>

                                        </div>
                                        <hr>
                                        <div class="card-body">
                                                  <div class="row">
                                                            <div class="col-md-4 mt-3">
                                                                      <label for="">Role</label>
                                                                      <div class="p-2 bordered">
                                                                                {{$users->role_as == '0' ? 'User' : 'Admin'}}
                                                                      </div>
                                                            </div>
                                                            <div class="col-md-4 mt-3">
                                                                      <label for="">First Name</label>
                                                                      <div class="p-2 bordered">
                                                                                {{$users->name}}
                                                                      </div>
                                                            </div>

                                                            <div class="col-md-4 mt-3">
                                                                      <label for="">Last Name</label>
                                                                      <div class="p-2 bordered">
                                                                                {{$users->lname}}
                                                                      </div>
                                                            </div>

                                                            <div class="col-md-4 mt-3">
                                                                      <label for="">Email</label>
                                                                      <div class="p-2 bordered">
                                                                                {{$users->email}}
                                                                      </div>
                                                            </div>

                                                            <div class="col-md-4 mt-3">
                                                                      <label for="">Phone</label>
                                                                      <div class="p-2 bordered">
                                                                                {{$users->phone}}
                                                                      </div>
                                                            </div>

                                                            <div class="col-md-4 mt-3">
                                                                      <label for="">Address</label>
                                                                      <div class="p-2 bordered">
                                                                                {{$users->address}}
                                                                      </div>
                                                            </div>

                                                            <div class="col-md-4 mt-3">
                                                                      <label for="">City</label>
                                                                      <div class="p-2 bordered">
                                                                                {{$users->city}}
                                                                      </div>
                                                            </div>

                                                            <div class="col-md-4 mt-3">
                                                                      <label for="">State</label>
                                                                      <div class="p-2 bordered">
                                                                                {{$users->state}}
                                                                      </div>
                                                            </div>

                                                            <div class="col-md-4 mt-3">
                                                                      <label for="">Country</label>
                                                                      <div class="p-2 bordered">
                                                                                {{$users->country}}
                                                                      </div>
                                                            </div>

                                                            <div class="col-md-4 mt-3">
                                                                      <label for="">Pin Code</label>
                                                                      <div class="p-2 bordered">
                                                                                {{$users->pincode}}
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>
                              </div>
                    </div>
          </div>
</div>


@endsection