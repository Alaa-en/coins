

@extends('front.layouts.app')
            @section('content')
            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">coin detaisl</h3>
                    </div>

                </div>

                    <div class="card">
                        <div class="card-body">
                    <div class="table-responsive">

                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">logo</th>
                                <th scope="col">name</th>
                                <th scope="col">price</th>
                                <th scope="col">created_at</th>
                                <th scope="col">symbol</th>
                                <th scope="col">ethereum</th>
                                <th scope="col">solana</th>
                                <th scope="col">description</th>
                                <th scope="col">polygon</th>
                                <th scope="col">website</th>
                                <th scope="col">market_cap</th>

                              </tr>
                            </thead>
                            <tbody>

                              <tr>
                                <td>
                                  <img src="{{asset($coins->logo)}}" alt="iamge" width="80px" height="70px">
                                </td>
                                <td>{{$coins->name}}</td>
                                <td>{{$coins->price}}</td>
                                <td>{{$coins->created_at->diffForHumans()}}</td>
                                <td>{{$coins->symbol}}</td>
                                <td>{{$coins->ethereum}}</td>
                                <td>{{$coins->solana}}</td>
                                <td>{{$coins->description}}</td>
                                <td>{{$coins->polygon}}</td>
                                <td>{{$coins->website}}</td>
                                <td>{{$coins->market_cap}}</td>

                              </tr>

                            </tbody>
                          </table>

                                </div>
                            </div>
                        </div>




                </div>
            </div>



            </div>
            @endsection








