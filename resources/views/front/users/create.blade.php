@extends('front.layouts.app')
            @section('content')
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Create new user</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Apps</li>
                            <li class="breadcrumb-item active">Dashboard 1</li>
                        </ol>
                    </div>
                </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Table Hover</h4>
                            <h6 class="card-subtitle">Add class <code>.table-hover</code></h6>
                    <div class="table-responsive">
                        <form action="{{route('user.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Name</label>
                              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Email</label>
                              <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                            </div>
                            {{-- <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> --}}
                            <button type="submit" class="btn btn-primary">Save</button>
                          </form>
                                </div>
                            </div>
                        </div>




                </div>
            </div>


                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->

            </div>
            @endsection
