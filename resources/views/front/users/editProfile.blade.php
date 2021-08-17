@extends('front.layouts.app')
            @section('content')
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Edit profile {{$user->name}}</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Apps</li>
                            <li class="breadcrumb-item active">Dashboard 1</li> --}}
                        </ol>
                    </div>
                </div>

                    <div class="card">
                        <div class="card-body">

                    <div class="table-responsive">
                        <form action="{{route('profile.update', $user->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Name</label>
                              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Email</label>
                              <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                          </form>
                                </div>
                            </div>
                        </div>

                </div>
            </div>



            </div>
            @endsection
