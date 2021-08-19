@extends('front.layouts.app')
            @section('content')
            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">request delete coins</h3>
                    </div>

                </div>

                    <div class="card">
                        <div class="card-body">
                    <div class="table-responsive">

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">logo</th>
                                                <th scope="col">name</th>
                                                <th scope="col">price</th>
                                                <th scope="col">created_at</th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Delete</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">accept</th>
                                                <th scope="col">reject</th>
                                              </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp


                                          @foreach ($coins as  $coin)
                                          <tr>
                                            <th scope="row">{{$i++}}</th>
                                            <td>
                                              <img src="{{ asset ('images/coins/'. $coin->logo) }}" alt="iamge"  width="70px" height="70px" style="border-radius: 50%">
                                            </td>
                                            <td>{{$coin->name}}</td>
                                            <td>{{$coin->price}}</td>
                                            <td>{{$coin->created_at->diffForHumans()}}</td>

                                            <td>
                                                <a href="{{route('coins.details', $coin->id)}}"  class="btn btn-primary btn-circle"> <i class="fa fa-eye"></i></a>
                                            </td>

                                            <td>
                                                <a href="{{route('coins.delete', $coin->id)}}"  class="btn btn-danger btn-circle"> <i class="fa fa-trash"></i> </a>
                                            </td>

                                            <td>
                                                <a href="{{route('coins.edit', $coin->id)}}" class="btn btn-success btn-circle"> <i class="fa fa-pencil-alt"></i> </a>
                                            </td>

                                            <td>

                                            <a href="{{route('new.request.accept', $coin->id)}}" class="btn btn-outline-primary mb-2">accept</a>

                                            </td>
                                            <td>

                                                <a href="{{route('new.request.reject', $coin->id)}}" class="btn btn-outline-danger"> reject </a>

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



            </div>
            @endsection

