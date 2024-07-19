@extends('backend.layouts.app')

@section('title', 'Users')

@section('section')

<div class="layout-px-spacing">
  <div class="middle-content container-xxl p-0">
    <div class="seperator-header layout-top-spacing d-flex justify-content-between align-items-center">
      <h4 class="">User List</h4>
      <a href="{{url('adduser')}}">
        <button type="button" class="btn btn-primary">Add User</button>
      </a>
    </div>
    <div class="container mt-5">
      <div class="table-responsive">
        <table id="userTable" class="table table-hover" style="width:100%">
          <thead>
            <tr>
              <th>Username</th>
              <th>Email</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- User data will be populated here from the server -->
            <!-- Example row -->
             
            @foreach($users as $user)            
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->userrole}}</td>
              <td>
                <a href="{{url('edit_user/$user->id')}}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{url('delete_user/$user->id')}}" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection