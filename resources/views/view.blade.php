@extends('layout')
@section('title')
  <h4 class=" text-center bg-success bg-gradient text-white p-2 pb-3 ">User detail</h4>

@endsection
@section('content')
<table class="table table-striped table-bordered">
  <tr>
    <th scope="col">Id :</th>
    <td>{{$user->id}}</td>
  </tr>
  <tr>
    <th scope="col">Name :</th>
    <td> {{$user->name}} </td>
  </tr>
  <tr>
    <th scope="col">Email :</th>
    <td>{{$user->email}}</td>
  </tr>
  <tr>
    <th scope="col">Age :</th>
    <td>{{$user->age}}</td>
  </tr>
  <tr>
    <th scope="col">City :</th>
    <td>{{$user->city}}</td>
  </tr>
</table>
<a href="{{route('user.index')}}" class="btn btn-sm btn-success">Back</a>
@endsection