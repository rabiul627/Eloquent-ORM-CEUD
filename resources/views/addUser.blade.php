
@extends('layout')
  @section('title')
    <h4 class=" text-center bg-success bg-gradient text-white p-2 pb-3 ">Add New User</h4>
  @endsection
  @section('content')
  <div class="form-container">
    <form action="{{route('user.store')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label  class="form-label">Name :</label>
        <input type="name" placeholder="Enter Your Name" class="form-control" name="name" value="{{ old('name') }}">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror 
      </div>
      <div class="mb-3">
        <label class="form-label">Email :</label>
        <input type="email" placeholder="Enter Your Email" class="form-control" name="email" value="{{ old('email') }}">
           @error('email')
            <div class="error">{{ $message }}</div>
            @enderror 
      </div>
      <div class="mb-3">
        <label  class="form-label">Age :</label>
        <input class="form-control" placeholder="Enter Your Age" name="age" value="{{ old('age') }}">
           @error('age')
            <div class="error">{{ $message }}</div>
            @enderror 
      </div>
      <div class="mb-3">
        <label  class="form-label">City :</label>
        <input class="form-control" placeholder="Enter Your City" name="city" value="{{ old('city') }}">
            @error('city')
            <div class="error">{{ $message }}</div>
            @enderror 
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  @endsection

