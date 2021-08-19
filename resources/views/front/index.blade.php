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

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body p-b-0">
                                        <h4 class="card-title">Customtab Tab</h4>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs customtab" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">All Time Best</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Today's Best</span></a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home2" role="tabpanel">
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
                                                            <td> <img  src= "{{ asset ('images/coins/'. $coin->logo) }}" alt='image' width="70px" height="70px" style="border-radius: 50%"/> </td>
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
                                        <div class="tab-pane  p-20" id="profile2" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>logo</th>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>Time since launch</th>
                                                            <th>count</th>
                                                            <th>action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                       @foreach ($coins as $coin)

                                                       @if ($coin->promoted == 0 && $coin->status == 'accepted')
                                                        <tr>
                                                            <td> <img  src= "{{ asset ('images/coins/'. $coin->logo) }}" alt='image' width="70px" height="70px" style="border-radius: 50%"/> </td>
                                                            <td>{{ $coin->name }}</td>
                                                            <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40">{{ $coin->price }}</span> </td>
                                                            <td>{{$coin->updated_at->diffForHumans()}}</td>
                                                            <td>{{$coin->coinsVoting->count() + $coin->guestVoting->count() }}</td>
                                                            <td><button    type="button" class="btn waves-effect waves-light btn-outline-success" ><i class="fa fa-level-up" aria-hidden="true"></i>Votes</button> </td>
                                                        </tr>
                                                        @endif

                                                        @endforeach

                                                    </tbody>
                                                </table>

                                            </div>                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>





                </div>
            </div>

            </div>
            @endsection
