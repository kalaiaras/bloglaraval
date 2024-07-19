@extends('backend.layouts.app')

@section('title', 'subcategories')

@section('section')

<div class="container">
  <div class="row layout-top-spacing">
    <div class="col-lg-12 col-12 layout-spacing">
      <div class="statbox widget box box-shadow ">
        <div class="widget-header">
          <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
              <h4>Add Subcategory</h4>
            </div>
          </div>
        </div>
        <div class="widget-content widget-content-area p-3">
          <form action="{{url('api/update_subcategory')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$subcategory->id}}">
            <div class="form-group mb-4">
              <label for="subcategoryName">Subcategory Name</label>
              <input type="text" class="form-control" id="subcategoryName" name="name" value="{{$subcategory->name}}" placeholder="Subcategory Name">
            </div>
            <div class="form-group mb-4">
              <label for="subcategorySlug">Slug</label>
              <input type="text" class="form-control" name="slug" value="{{$subcategory->slug}}" placeholder="Slug">
            </div>
            <div class="form-group mb-4">
              <label for="subcategoryDescription">Description (Meta Tag)</label>
              <textarea class="form-control" id="subcategoryDescription" rows="3" name="description">{{$subcategory->description}}</textarea>
            </div>
            <div class="form-group mb-4">
              <label for="subcategoryKeywords">Keywords (Meta Tag)</label>
              <input type="text" class="form-control" name="keywords" value="{{$subcategory->keywords}}" placeholder="Keywords">
            </div>
            <div class="form-group mb-4">
              <label for="parentCategory">Parent Category</label>
              <select class="form-control" id="parentCategory" name="category">
                
                <option value="">Select Parent Category</option>
                @foreach($category as $category)               
                <option value="{{$category->id}}">{{$category->name}}</option>                
                @endforeach
                <!-- Add more options dynamically if needed -->
              </select>
            </div>
            <div class="form-group mb-4">
              <label>Show on Menu</label>
              <br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="showonmenu" id="showOnMenuYes" value="yes">
                <label class="form-check-label" for="showOnMenuYes">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="showonmenu" id="showOnMenuNo" value="no">
                <label class="form-check-label" for="showOnMenuNo">No</label>
              </div>
            </div>
            <div class="form-group bg-containter">
              <label for="additionalImages">Images</label>
              <input type="file" class="form-control-file" id="additionalImages" name="image">
            </div>
            <input type="submit" name="submit" class="mt-4 mb-4 btn btn-primary">
          </form>
        </div>
      </div>
    </div>
   
  </div>
</div>

<style>
  .btn-secondary {
    color: #fff !important;
    background-color: #805dca;
    border-color: #805dca;
    box-shadow: 0 10px 20px -10px rgba(92, 26, 195, 0.59);
}
</style>

@endsection