@extends('layout')
@section('title')
  <h4 class=" text-center bg-success bg-gradient text-white p-2 pb-3 ">Update User</h4>
@endsection
@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="{{route('user.update',$user->id)}}" method="POST">
        @csrf
        @method('PUT')
          <div class="mb-3">
            <label  class="form-label">Name :</label>
            <input type="name" value="{{$user->name}}" class="form-control" name="name">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror             
        </div>
        <div class="mb-3">
          <label class="form-label">Email :</label>
          <input type="email" value="{{$user->email}}" class="form-control" name="email">
          @error('email')
            <div class="error">{{ $message }}</div>
            @enderror 
        </div>
        <div class="mb-3">
          <label  class="form-label">Age :</label>
          <input class="form-control" value="{{$user->age}}" name="age">
          @error('age')
            <div class="error">{{ $message }}</div>
            @enderror 
        </div>
        <div class="mb-3">
          <label  class="form-label">City :</label>
          <input class="form-control" value="{{$user->city}}" name="city">
          @error('city')
            <div class="error">{{ $message }}</div>
            @enderror 
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection