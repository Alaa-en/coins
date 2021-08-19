
@extends('front.layouts.app')
            @section('content')
            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">coins</h3>
                    </div>

                </div>

                    <div class="card">
                        <div class="card-body">
                    <div class="table-responsive">

                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">logo</th>
                                <th scope="col">name</th>
                                <th scope="col">price</th>
                                <th scope="col">Time since launch</th>
                                <th scope="col">Details</th>
                                <th scope="col">Delete</th>
                                <th scope="col">promotion</th>
                                <th scope="col">status</th>
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
                                  <img src="{{ asset ('images/coins/'. $coin->logo) }}" alt="iamge" width="70px" height="70px" style="border-radius: 50%">
                                </td>
                                <td>{{$coin->name}}</td>
                                <td>{{$coin->price}}</td>
                                <td>{{$coin->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="{{route('coins.details', $coin->id)}}" class="btn btn-outline-primary">details</a>
                                </td>
                                <td>
                                    <a href="{{route('coins.delete', $coin->id)}}" class="btn btn-outline-danger">delete</a>
                                </td>

                                <td>
                                    @if ($coin->promoted)
                                    <a class="btn waves-effect waves-light btn-outline-success"href="{{route('coins.promoted',['id'=>$coin->id,'type'=> 0])}}">promoted</a>
                                    @else
                                    <a class="btn waves-effect waves-light btn-outline-danger"href="{{route('coins.promoted',['id'=>$coin->id,'type'=> 1])}}">not promoted</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($coin->deleted_at == null)
                                    @else
                                        <p style="color: red"> deleted</p>
                                    @endif
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







