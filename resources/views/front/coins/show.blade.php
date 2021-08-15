@extends('front.layouts.app')
@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">logo</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">created_at</th>
            <th scope="col">Details</th>
            <th scope="col">Delete</th>
            <th scope="col">promotion</th>
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
              <img src="{{ asset ('images/coins/'. $coin->logo) }}" alt="iamge" class="img-thumbnail" width="100px" height="100px">
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
          </tr>
          @endforeach

        </tbody>
      </table>
</div>
@endsection
