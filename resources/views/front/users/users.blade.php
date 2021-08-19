@extends('front.layouts.app')
@section('styless')
<link href="{{('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{('assets/plugins/select2/dist/css/select2.min.css')}} rel="stylesheet" type="text/css" />
    <link href="{{('assets/plugins/switchery/dist/switchery.min.css')}} rel="stylesheet" />
    <link href="{{('assets/plugins/bootstrap-select/bootstrap-select.min.css')}} rel="stylesheet" />
    <link href="{{('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}} rel="stylesheet" />
    <link href="{{('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}} rel="stylesheet" />
    <link href="{{('assets/plugins/multiselect/css/multi-select.css')}} rel="stylesheet" type="text/css" />
@endsection
            @section('content')
            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Users</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">

                            <li> <a class="btn btn-outline-primary" href="{{route('user.create')}}" aria-expanded="false"><span class="hide-menu">create user</span></a>

                        </ol>
                    </div>
                </div>

                    <div class="card">
                        <div class="card-body">
                    <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>created at</th>
                                                <th>coins</th>
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
                                            @if ($user->type == 'user')

                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <a href="{{route('user.coins', $user->id)}}"  class="btn btn-primary btn-circle"> <i class="fa fa-coins"></i> </a>
                                                </td>

                                                <td>
                                                    <a href="{{route('user.delete', $user->id)}}"  class="btn btn-danger btn-circle"> <i class="fa fa-trash"></i> </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('user.edit')}}" class="btn btn-success btn-circle"> <i class="fa fa-pencil-alt"></i> </a>
                                                </td>
                                                <td>
                                                    {{-- @if ($user->active)
                                                    <a class="btn waves-effect waves-light btn-outline-success"href="{{route('user.change_active',['id'=>$user->id,'type'=> 0])}}">active</a>
                                                    @else
                                                    <a class="btn waves-effect waves-light btn-outline-danger"href="{{route('user.change_active',['id'=>$user->id,'type'=> 1])}}">not active</a>
                                                    @endif --}}
                                                    <div class="switchery-demo m-b-30">
                                                    <input type="checkbox" checked class="js-switch" data-color="#f62d51" />
                                                    </div>
                                                </td>

                                         </td>
                                            </tr>
                                            @endif

                                            @endforeach




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>




                </div>
            </div>



            </div>
            @endsection
