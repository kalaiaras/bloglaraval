@extends('backend.layouts.app')

@section('title', 'Adduser')

@section('section')

<div class="layout-px-spacing">
  <div class="middle-content container-xxl p-0">
    <div class="seperator-header layout-top-spacing d-flex justify-content-between align-items-center">
      <h4 class=""> Add User</h4>
      <a href="{{url('users')}}">
        <button type="button" class="btn btn-primary">Users</button>
      </a>
    </div>
    <div class="container mt-5">
      <h2>Add New User</h2>

      @if (\Session::has('success'))
                            <div class="alert alert-success">
                                {!! \Session::get('success') !!}
                            </div>
                        @endif
      <form action="{{url('api/add_user')}}" method="POST">
            @csrf
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="role">Role</label>
          <select class="form-control" name="userrole">
            <option>Select</option>
            <!-- Add more role options as needed -->
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter password">
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
      </form>
      <a href="{{url('adduser')}}" class="btn btn-secondary mt-3">Clear</a>
    </div>
  </div>
</div>

@endsection