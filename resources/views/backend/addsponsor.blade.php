@extends('backend.layouts.app')

@section('title', 'AddSponsor')

@section('section')

<div class="layout-px-spacing">
  <div class="middle-content container-xxl p-0">
    <div class="seperator-header layout-top-spacing d-flex justify-content-between align-items-center">
      <h4 class=""> Sponsor</h4>
      <a href="{{url('pages')}}">
        <button type="button" class="btn btn-primary">Pages</button>
      </a>
    </div>
    <div class="container mt-5">
      <h2>Add New Sponsor</h2>
      <form action="{{url('api/add_sponsor')}}" method="POST" enctype="multipart/form-data"> 
        <div class="form-group">
          <label for="title">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="description">Description </label>
          <input type="text" class="form-control" name="description" placeholder="Enter  description">
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" id="category" name="category">
            <option selected>None</option>
            <option>parent1</option>
            <option>parent2</option>
            <!-- Add more language options as needed -->
          </select>
        </div>
        <div class="form-group">
          <label for="subcat">Sub category</label>
          <select class="form-control" id="subcat" name="subcategory">
            <option selected>None</option>
            <option>sub1</option>
            <option>sub2</option>
            <!-- Add more parent link options as needed -->
          </select>
        </div>
        <div class="form-group">
          <label for="logo">Company Logo</label>
          <div class="mb-3">
            <input type="file" class="form-control-file" id="uploadPhoto" name="image">
          </div>
          <textarea class="form-control" id="logo" rows="5" name="content" placeholder="Enter page content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Sponsor</button>
      </form>
      <a href="{{url('addsponsor')}}" class="btn btn-secondary mt-3">Clear</a>
    </div>
  </div>
</div>

@endsection