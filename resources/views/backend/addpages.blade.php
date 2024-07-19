@extends('backend.layouts.app')

@section('title', 'Addpage')

@section('section')

<div class="layout-px-spacing">
  <div class="middle-content container-xxl p-0">
    <div class="seperator-header layout-top-spacing d-flex justify-content-between align-items-center">
      <h4 class=""> Add Pages</h4>
      <a href="{{url('pages')}}">
        <button type="button" class="btn btn-primary">Pages</button>
      </a>
    </div>
    <div class="container mt-5">
      <h2>Add New Page</h2>
      <form action="{{url('api/add_page')}}" method="POST" enctype="multipart/form-data"> 
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" placeholder="Enter page title">
        </div>
        <div class="form-group">
          <label for="slug">Slug (If you leave it blank, it will be generated automatically.)</label>
          <input type="text" class="form-control" name="slug" placeholder="Enter page slug">
        </div>
        <div class="form-group">
          <label for="description">Description (Meta Tag)</label>
          <input type="text" class="form-control" name="description" placeholder="Enter meta description">
        </div>
        <div class="form-group">
          <label for="keywords">Keywords (Meta Tag)</label>
          <input type="text" class="form-control" name="keywords" placeholder="Enter meta keywords">
        </div>
        <div class="form-group">
          <label for="language">Language</label>
          <select class="form-control" name="language">
            <option>English</option>
            <!-- Add more language options as needed -->
          </select>
        </div>
        <div class="form-group">
          <label for="parentLink">Parent Link</label>
          <select class="form-control" name="parent_link">
            <option>None</option>
            <!-- Add more parent link options as needed -->
          </select>
        </div>
        <div class="form-group">
          <label for="order">Order</label>
          <input type="number" class="form-control" name="order" value="1">
        </div>
        <div class="form-group">
          <label>Location</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="topMenu" name="menu_location" value="topmenu">
            <label class="form-check-label" for="topMenu">Top Menu</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="mainMenu" name="menu_location" value="mainmenu">
            <label class="form-check-label" for="mainMenu">Main Menu</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="footer" name="menu_location" value="footer">
            <label class="form-check-label" for="footer">Footer</label>
          </div>
        </div>
        <div class="form-group">
          <label>Visibility</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="visibility" id="show" value="show" checked>
            <label class="form-check-label" for="show">Show</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="visibility" id="hide" value="hide">
            <label class="form-check-label" for="hide">Hide</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="visibility" id="showOnlyToRegistered" value="show_registered">
            <label class="form-check-label" for="showOnlyToRegistered">Show Only to Registered Users</label>
          </div>
        </div>
        <div class="form-group">
          <label>Show Title</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="showtitle" id="showTitleYes" value="yes" checked>
            <label class="form-check-label" for="showTitleYes">Yes</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="showtitle" id="showTitleNo" value="no">
            <label class="form-check-label" for="showTitleNo">No</label>
          </div>
        </div>
        <div class="form-group">
          <label>Show Breadcrumb</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="showbreadcrumb" id="showBreadcrumbYes" value="yes" checked>
            <label class="form-check-label" for="showBreadcrumbYes">Yes</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="showbreadcrumb" id="showBreadcrumbNo" value="no">
            <label class="form-check-label" for="showBreadcrumbNo">No</label>
          </div>
        </div>
        <div class="form-group">
          <label>Show Right Column</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="showrightcolumn" id="showRightColumnYes" value="yes" checked>
            <label class="form-check-label" for="showRightColumnYes">Yes</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="showrightcolumn" id="showRightColumnNo" value="no">
            <label class="form-check-label" for="showRightColumnNo">No</label>
          </div>
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <!-- <div class="mb-3">
            <input type="file" class="form-control-file" id="uploadPhoto">
          </div> -->
          <textarea class="form-control" id="mytextarea" name="content" rows="5" placeholder="Enter page content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Page</button>
      </form>
      <a href="{{url('pages')}}" class="btn btn-secondary mt-3">Back to Pages</a>
    </div>
  </div>

  <script src="https://cdn.tiny.cloud/1/6g9cer6j8wutmskq3ne19futm13rpyms52fthhsgc0g9gsfd/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
@endsection