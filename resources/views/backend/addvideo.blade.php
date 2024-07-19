@extends('backend.layouts.app')

@section('title', 'Addvideo')

@section('section')
<div class="layout-px-spacing">
  <div class="middle-content container-xxl p-0">
    <div class="seperator-header layout-top-spacing d-flex justify-content-between align-items-center">
      <h4 class="">Add Video</h4>
      <a href="{{url('pages')}}">
        <button type="button" class="btn btn-primary">Posts</button>
      </a>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ">
          <div class="container bg-containter">
            <h2>Post Details</h2>
            <form>
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter post title">
              </div>
              <div class="form-group">
                <label for="slug">Slug (If you leave it blank, it will be generated automatically.)</label>
                <input type="text" class="form-control" id="slug" placeholder="Enter post slug">
              </div>
              <div class="form-group">
                <label for="description">Summary & Description (Meta Tag)</label>
                <input type="text" class="form-control" id="description" placeholder="Enter meta description">
              </div>
              <div class="form-group">
                <label for="keywords">Keywords (Meta Tag)</label>
                <input type="text" class="form-control" id="keywords" placeholder="Enter meta keywords">
              </div>
              <div class="form-group">
                <label>Add to Slider</label>
                <br>
                <input type="checkbox" id="addToSlider">
              </div>
              <div class="form-group">
                <label>Add to Our Picks</label>
                <br>
                <input type="checkbox" id="addToOurPicks">
              </div>
              <div class="form-group">
                <label>Show Only to Registered Users</label>
                <br>
                <input type="checkbox" id="showOnlyToRegisteredUsers">
              </div>
              <div class="form-group">
                <label for="tags">Tags (Type tag and hit enter)</label>
                <input type="text" class="form-control" id="tags" placeholder="Enter tags">
              </div>
              <div class="form-group">
                <label for="optionalUrl">Optional Url</label>
                <input type="text" class="form-control" id="optionalUrl" placeholder="Enter optional URL">
              </div>
              <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="5" placeholder="Enter post content"></textarea>
              </div>
            </form>
            <a href="{{url('pages')}}" class="btn btn-secondary mt-3">Back to Posts</a>
          </div>
        </div>
        <div class="col-lg-4  ">
          <div class="bg-containter">
            <div class="form-group ">
              <label for="mainvideo">Video</label>
              <input type="file" class="form-control-file" id="mainvideo">
              <label for="code"> Video embeded code</label>
              <textarea name="code" rows="4" cols="35"></textarea>
            </div>
            <div class="form-group">
              <label for="addImageUrl"> or Add Video Url</label>
            </div>
            <div class="form-group">
              <small>(Youtube, Vimeo, Dailymotion, Facebook)</small>
              <input type="text" class="form-control" id="addImageUrl" placeholder="Enter image URL">
            </div>
          </div>
          <div class="form-group bg-containter">
            <label for="additionalImages">Additional Video</label>
            <input type="file" class="form-control-file" id="additionalImages" multiple>
          </div>
          <div class="form-group bg-containter">
            <label for="files"> files (.pdf, .docx, .zip etc..)</label>
            <input type="file" class="form-control-file" id="files" multiple>
          </div>
          <div class="form-group bg-containter">
            <label for="category">Category</label>
            <select class="form-control" id="category">
              <option>Select</option>
              <!-- Add category options as needed -->
            </select>
            <div class="form-group ">
              <label for="subcategory">Subcategory</label>
              <select class="form-control" id="subcategory">
                <option>Select</option>
                <!-- Add subcategory options as needed -->
              </select>
            </div>
          </div>
          <div class="form-group bg-containter">
            <button type="submit" class="btn btn-primary">Publish</button>
            <button type="submit" class="btn btn-warning">Save as Draft</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
       @endsection