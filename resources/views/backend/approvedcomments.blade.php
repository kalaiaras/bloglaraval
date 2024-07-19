@extends('backend.layouts.app')

@section('title', 'Comments')

@section('section')

<div class="container">
  <div class="row layout-top-spacing">
    <div class="col-lg-12 layout-spacing">
      <div class="statbox widget box box-shadow">
        <div class="widget-header">
          <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
              <h4>Pending Comments</h4>
            </div>
          </div>
        </div>
        <div class="widget-content widget-content-area table-container p-3">
        <table class="table table-bordered">
            <thead>
              <tr>                
                <th>User Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Comment</th>
                <th>Post</th>
                <th>Date</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
              @foreach($comments as $comment)
              <tr>
                <td>{{$comment->user_id}}</td>
                <td>{{$comment->name}}</td>
                <td>{{$comment->email}}</td>
                <td>{{$comment->comment}}</td>
                <td>{{$comment->post}}</td>
                <td>{{$comment->created_at}}</td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"> Options </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <!-- <li>
                        <a class="dropdown-item" href="#">Approve</a>
                      </li> -->
                      <li>
                        <a class="dropdown-item" href="#">Edit</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Delete</a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              @endforeach
              <!-- Repeat <tr> for more pending comments -->
            </tbody>
          </table>
          <p>Showing 1 to 15 of 24 entries</p>
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#">
                  << </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">>></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
        /* Custom styles for the table */
        .table-container {
            max-width: 100%;
            overflow-x: auto;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #333;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            background-color: #f8f9fa;
            color: #495057;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .table .dropdown-toggle::after {
            display: none; /* Remove caret icon from dropdown toggle */
        }

        .pagination {
            margin-top: 1rem;
            justify-content: center;
        }
        ul.dropdown-menu.show{
            position: relative !important;
        }
    </style>
@endsection