@extends('front.layouts.app')
            @section('content')
            <div class="container-fluid">
              

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Promoted coins</h3>
                        @if (session()->has('danger'))
                        <div class="alert alert-danger" role="alert">
                            {{session()->get('danger')}}
                          </div>
    
                        @endif
                    </div>
                  

                </div>

                    <div class="card">
                        <div class="card-body">

                    <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>logo</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Time since launch</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($coins as $coin)
                                           @if ($coin->promoted == 1 && $coin->status == 'accepted')


                                            <tr>
                                                <td> <img width="60px" src= "{{ asset ('images/coins/'.$coin->logo) }}" alt='image' /> </td>
                                                <td>{{ $coin->name }}</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40">{{ $coin->price }}</span> </td>
                                                <td>{{$coin->updated_at->diffForhumans()}}</td>
                                                <form method="post" action="{{route('coinsVoting.store',$coin->id)}}" enctype="multipart/form-data">
                                                    @csrf
                                                <td> <button type="submit" class="btn waves-effect waves-light btn-outline-success" ><i class="fa fa-level-up" aria-hidden="true"></i>Votes</button> </td>
                                                </form>
                                                </tr>
                                            @endif

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="row page-titles">
                            <div class="col-md-5 align-self-center">
                                <h3 class="text-themecolor">Not Promoted coins</h3>
                            </div>

                        </div>


                    <div class="card">
                        <div class="card-body">

                    <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>logo</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Time since launch</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($coins as $coin)
                                           @if ($coin->promoted == 0 && $coin->status == 'accepted')


                                            <tr>
<<<<<<< Updated upstream
                                                <td> <img width="60px" src= "{{ asset ('images/coins/'.$coin->logo) }}" alt='image'/> </td>
=======
                                                <td> <img  src= "{{ asset ('images/coins/'. $coin->logo) }}" alt='image' width="70px" height="70px" style="border-radius: 50%"/> </td>
>>>>>>> Stashed changes
                                                <td>{{ $coin->name }}</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40">{{ $coin->price }}</span> </td>
                                                <td>{{$coin->updated_at->diffForHumans()}}</td>
                                                <td><button    type="button" class="btn waves-effect waves-light btn-outline-success" ><i class="fa fa-level-up" aria-hidden="true"></i>Votes</button> </td>
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
