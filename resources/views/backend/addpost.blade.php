@extends('backend.layouts.app')

@section('title', 'Addpost')

@section('section')
<div class="layout-px-spacing">
  <div class="middle-content container-xxl p-0">
    <div class="seperator-header layout-top-spacing d-flex justify-content-between align-items-center">
      <h4 class="">Add Post</h4>
      <a href="{{url('allposts')}}">
        <button type="button" class="btn btn-primary">Posts</button>
      </a>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
        <form action="{{url('api/add_post')}}" method="POST" enctype="multipart/form-data"> 
          <div class="container bg-containter">
            <h2>Post Details</h2>            
            @csrf
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter post title">
              </div>
              <div class="form-group">
                <label for="slug">Slug (If you leave it blank, it will be generated automatically.)</label>
                <input type="text" class="form-control" name="slug" placeholder="Enter post slug">
              </div>
              <div class="form-group">
                <label for="description">Summary & Description (Meta Tag)</label>
                <input type="text" class="form-control" name="description" placeholder="Enter meta description">
              </div>
              <div class="form-group">
                <label for="keywords">Keywords (Meta Tag)</label>
                <input type="text" class="form-control" name="keywords" placeholder="Enter meta keywords">
              </div>
              <div class="form-group">
                <label>Add to Slider</label>
                <br>
                <input type="checkbox" id="addToSlider" name="add_slider">
              </div>
              <div class="form-group">
                <label>Add to Our Picks</label>
                <br>
                <input type="checkbox" id="addToOurPicks" name="add_ourpics">
              </div>
              <div class="form-group">
                <label>Show Only to Registered Users</label>
                <br>
                <input type="checkbox" id="showOnlyToRegisteredUsers"  name="showusers">
              </div>
              <div class="form-group">
                <label for="tags">Tags (Type tag and hit enter)</label>
                <input type="text" class="form-control" id="tags" placeholder="Enter tags" name="tags">
              </div>
              <div class="form-group">
                <label for="optionalUrl">Optional Url</label>
                <input type="text" class="form-control" id="optionalUrl" placeholder="Enter optional URL" name="url">
              </div>
              <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="mytextarea" rows="5" name="content" placeholder="Enter post content"></textarea>
              </div>
            
            <a href="{{url('pages')}}" class="btn btn-secondary mt-3">Back to Posts</a>
          </div>
        </div>
        <div class="col-lg-4  ">
          <div class="form-group bg-containter">
            <label for="mainImage">Main post image</label>
            <input type="file" class="form-control-file" id="mainImage" name="image">
            <label for="addImageUrl"> or Add Image Url</label>
            <input type="text" class="form-control" id="addImageUrl" name="image_url" placeholder="Enter image URL">
          </div>
          <div class="form-group bg-containter">
            <label for="additionalImages">Additional Images</label>
            <input type="file" class="form-control-file" id="additionalImages" name="additional_image" multiple>
          </div>
          <div class="form-group bg-containter">
            <label for="files"> files (.pdf, .docx, .zip etc..)</label>
            <input type="file" class="form-control-file" id="files" name="files" multiple>
          </div>
          <div class="form-group bg-containter">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category">
              <option>Select</option>
              @foreach($category as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach              
            </select>
          </div>
          <div class="form-group bg-containter">
            <label for="subcategory">Subcategory</label>
            <select class="form-control" id="subcategory" name="subcategory">
              <option>Select</option>  @php print_r($subcategory); @endphp
              @foreach($subcategory as $subcategory)
                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
              @endforeach            
            </select>
          </div>
          <div class="form-group bg-containter">
            <button type="submit" class="btn btn-primary" name="submit">Publish</button>
            <button type="submit" class="btn btn-warning">Save as Draft</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.tiny.cloud/1/6g9cer6j8wutmskq3ne19futm13rpyms52fthhsgc0g9gsfd/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>

@endsection