@extends('backend.layouts.app')

@section('title', 'Allposts')

@section('section')


<div class="layout-px-spacing">
  <div class="middle-content container-xxl p-0">
    <div class="seperator-header layout-top-spacing d-flex justify-content-between align-items-center">
      <h4 class="">Posts</h4>
      <a href="{{url('addpost')}}">
        <button type="button" class="btn btn-primary">+ Add Post</button>
      </a>
    </div>
    <div class="row layout-spacing">
      <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
          <div class="widget-content widget-content-area">
            <table id="style-3" class="table style-3 dt-table-hover">
              <thead>
                <tr>
                  <th class="checkbox-column text-center"> Image </th>
                  <th class="text-center">Post </th>
                  <th>Slug</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th class="text-center">Status</th>
                  <th class="text-center dt-no-sorting">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                  <!-- <td class="checkbox-column text-center"> 1 </td> -->
                  <td class="text-center">
                    <span>
                      <img src="posts/{{$post->image}}" class="profile-img" alt="avatar">
                    </span>
                  </td>
                  <td><span style="word-break:break-all;">{{$post->title}}</span></td>
                  <td>{{$post->slug}}</td>
                  <td>{{$post->category}}</td>
                  <td>{{$post->description}}</td>                  
                  <td>{{$post->created_at}}</td>
                  <td class="text-center">
                    <span class="shadow-none badge badge-success">Published</span>
                  </td>
                  <td class="text-center">
                    <ul class="table-controls">
                      <li>
                        <a href="{{url('edit_post/'.$post->id)}}" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="{{url('delete_post/'.$post->id)}}" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </td>
                </tr>
                <!-- <tr>
                  <td class="checkbox-column text-center"> 2 </td>
                  <td class="text-center">
                    <span>
                      <img src="./src/assets/img/profile-19.jpeg" class="profile-img" alt="avatar">
                    </span> Page with Image
                  </td>
                  <td>Post</td>
                  <td>Sports</td>
                  <td>author</td>
                  <td>11/07/2024 12.35</td>
                  <td class="text-center">
                    <span class="shadow-none badge badge-warning">Draft</span>
                  </td>
                  <td class="text-center">
                    <ul class="table-controls">
                      <li>
                        <a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="checkbox-column text-center"> 3 </td>
                  <td class="text-center">
                    <span>
                      <img src="./src/assets/img/profile-20.jpeg" class="profile-img" alt="avatar">
                    </span> Page with Image
                  </td>
                  <td>Video</td>
                  <td>Travel</td>
                  <td>admin</td>
                  <td>11/07/2024 12.35</td>
                  <td class="text-center">
                    <span class="shadow-none badge badge-info">Pending</span>
                  </td>
                  <td class="text-center">
                    <ul class="table-controls">
                      <li>
                        <a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </td>
                </tr> -->
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>  
  table {border-collapse:collapse; }
  table td {border:solid 1px #fab; width:100px; word-wrap:break-word;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>        
    $(document).ready(function() {
        $('#style-3').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("api/getallposts") }}',
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
                          return row.slug;
                        }
                    },
                    {
                        "targets": 4,
                        className: "text-center",
                        "render": function ( data, type, row, meta ) {
                          return row.slug;
                        }
                    },
                    {
                        "targets": 5,
                        className: "text-center",
                        "render": function ( data, type, row, meta ) {
                          return row.slug;
                        }
                    },
                    {
                        "targets": 6,
                        className: "text-center",
                        "render": function ( data, type, row, meta ) {
                          return row.slug;
                        }
                    },
                    {
                        "targets": 7,
                        className: "text-center",
                        "render": function ( data, type, row, meta ) {
                          return row.slug;
                        }
                    },
                   
                    {
                        "targets": ,
                        className: "text-center",
                        "render": function ( data, type, row, meta ) {
                          var content='<div class="dropdown">';                          
                            content +='<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"> Option </button>';
                            content +='<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                            content +='<li><a class="dropdown-item" href="{{url("edit_category/'+row.id+'")}}">Edit</a></li>';
                            content +='<li><a class="dropdown-item" href="{{url("delete_category/")}}">Delete</a></li>';
                            content +='</ul></div>';
                            return content;
                        }
                    }
                ]
            });
        });
        </script>
@endsection