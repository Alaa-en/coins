@extends('front.layouts.app')
            @section('content')
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard 1</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Apps</li>
                            <li class="breadcrumb-item active">Dashboard 1</li> --}}
                            <li> <a class="btn btn-outline-primary" href="{{route('user.create')}}" aria-expanded="false"><span class="hide-menu">create user</span></a>

                        </ol>
                    </div>
                </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Table Hover</h4>
                            <h6 class="card-subtitle">Add class <code>.table-hover</code></h6>
                    <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>created at</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                                <th>Active</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($users as $user )
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <a href="{{route('user.delete', $user->id)}}"  class="btn btn-danger btn-circle"> <i class="fa fa-trash"></i> </a>
                                                    {{-- <a href="{{route('user.delete', $user->id)}}"><i class="fa fa-trash-alt "></i></a> --}}
                                                </td>
                                                <td>
                                                    <a href="{{route('user.edit', $user->id)}}" class="btn btn-success btn-circle"> <i class="fa fa-pencil-alt"></i> </a>
                                                    {{-- <a href="{{route('user.edit', $user->id)}}"><i class="far fa-edit "></i></a> --}}
                                                </td>
                                                <td>
                                                    @if ($user->active)
                                                    <a class="btn waves-effect waves-light btn-outline-success"href="{{route('user.change_active',['id'=>$user->id,'type'=> 0])}}">active</a>
                                                    @else
                                                    <a class="btn waves-effect waves-light btn-outline-danger"href="{{route('user.change_active',['id'=>$user->id,'type'=> 1])}}">not active</a>
                                                    @endif
                                                </td>

                                         </td>
                                            </tr>
                                            @endforeach




                                        </tbody>
                                    </table>
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
