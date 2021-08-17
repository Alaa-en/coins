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

          </tr>
        </thead>
        <tbody>
          <form action="{{route('coins.update', $coin->id)}} " method="POST" enctype="multipart/form-data">
            @csrf
            @php
            $i = 1;
        @endphp


      <tr>
        <th scope="row">{{$i++}}</th>
        <td>
            <input type="file" name="logo" class="form-control" >
        </td>
        <td>
            <input type="text" name="name" class="form-control" value="{{$coin->name}}">
        </td>
        <td>
            <input type="text" name="price" class="form-control" value="{{$coin->price}}">
       </td>

            <td>
                <button type="submit" class="btn btn-success">Update</button>

            </td>


      </tr></form>


        </tbody>
      </table>
</div>
@endsection
