@extends('backend.layouts.app')

@section('title', 'Categories')

@section('section')

<div class="container">
  <div class="row layout-top-spacing">
    <div class="col-lg-5 col-6 layout-spacing">
      <div class="statbox widget box box-shadow">
        <div class="widget-header">
          <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
              <h4>Add Categories</h4>
            </div>
          </div>
        </div>
        <div class="widget-content widget-content-area p-3">
          <form action="{{url('api/add_category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
              <label for="categoryName">Category Name</label>
              <input type="text" class="form-control" id="categoryName" name="name" placeholder="Category Name">
            </div>
            <div class="form-group mb-4">
              <label for="slug">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
            </div>
            <div class="form-group mb-4">
              <label for="description">Description (Meta Tag)</label>
              <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <div class="form-group mb-4">
              <label for="keywords">Keywords (Meta Tag)</label>
              <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Keywords">
            </div>
            <div class="form-group mb-4">
              <label for="order">Order</label>
              <input type="number" class="form-control" id="order" name="order" placeholder="Order" min="0">
            </div>
            <div class="form-group mb-4">
              <label>Show on Menu</label>
              <br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="showmenu" id="showOnMenuYes" value="yes">
                <label class="form-check-label" for="showOnMenuYes">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="showmenu" id="showOnMenuNo" value="no">
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
    <div class="col-lg-7 col-6 layout-spacing">
      <div class="statbox widget box box-shadow">
        <div class="widget-header">
          <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
              <h4>Category List</h4>
            </div>
          </div>
        </div>
        <div class="widget-content widget-content-area">
          <table class="table table-bordered p-3" id="datatable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Slug</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              <!-- Repeat <tr> for more categories -->
            </tbody>
          </table>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>        
    $(document).ready(function() {
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("api/getcategories") }}',
                type: "GET",
                data: function(data) {
                    data.cSearch = $("#search").val();
                }
            },
            order: ['1', 'DESC'],
            pageLength: 10,
            searching: true,
            aoColumns: [
                {
                    "targets": 0,
                    className: "text-center",
                    "render": function ( data, type, row, meta ) {
                      return row.id;
                      }
                    },
                    {
                        "targets": 1,
                        className: "text-center",
                        "render": function ( data, type, row, meta ) {
                          return row.name;
                        }
                    },
                    {
                        "targets": 2,
                        className: "text-center",
                        "render": function ( data, type, row, meta ) {
                          return row.slug;
                        }
                    },
                    {
                        "targets": 3,
                        className: "text-center",
                        "render": function ( data, type, row, meta ) {
                          var content='<div class="dropdown">';                          
                            content +='<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"> Option </button>';
                            content +='<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">';                            
                            content += '<li><a class="dropdown-item" href="' + "{{ url('edit_category') }}" + '/' + row.id + '">Edit</a></li>';
                            content += '<li><a class="dropdown-item" href="' + "{{ url('delete_category') }}" + '/' + row.id + '">Delete</a></li>';
                            // content +='<li><a class="dropdown-item" href="{{url("delete_category/")}}">Delete</a></li>';
                            content +='</ul></div>';
                            return content;
                        }
                    }
                ]
            });
        });
 
    </script>
@endsection