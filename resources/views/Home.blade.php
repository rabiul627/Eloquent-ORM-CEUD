
@extends('layout')
        @section('title')
         <h4 class=" text-center bg-success bg-gradient text-white p-2 pb-3 ">Update User <a href="{{route ('user.create')}}" class="btn btn-info">Add User</a></h4>
        @endsection
        @section('content')
        <table class="table table-bordered table-striped table-striped-columns table-hover">
            <thead class="text-center">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </thead>
            <tbody>
              @foreach ($users as $key => $user)
              <tr>
                <td> {{$user->id}} </td>
                <td> {{$user->name}} </td>
                <td> {{$user->email}} </td>
                <td> {{$user->age}} </td>
                <td> {{$user->city}} </td>
                <td><a href="{{route('user.show',$user->id)}}" class="btn btn-sm btn-success">View</a></td>
                <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-warning">Update</a></td>
                <td>
                    <form action="{{route('user.destroy',$user->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        @endsection
    </div>
       
