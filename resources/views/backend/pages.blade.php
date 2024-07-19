@extends('backend.layouts.app')

@section('title', 'pages')

@section('section')

<div class="layout-px-spacing">
  <div class="middle-content container-xxl p-0">
    <div class="seperator-header layout-top-spacing d-flex justify-content-between align-items-center">
      <h4 class="">Pages</h4>
      <a href="{{url('addpages')}}">
        <button type="button" class="btn btn-primary">+ Add Pages</button>
      </a>
    </div>
    <div class="row layout-spacing">
      <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
          <div class="widget-content widget-content-area">
            <table id="style-3" class="table style-3 dt-table-hover">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Slug</th>
                  <th>Description</th>
                  <!-- <th>Page Type</th> -->
                  <th>Language</th>
                  <th class="text-center">Date</th>
                  <th class="text-center dt-no-sorting">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pages as $page)
                <tr>
                  <td class="checkbox-column text-center"> {{$page->title}} </td>                  
                  <td>{{$page->slug}}</td>
                  <td>{{$page->description}}</td>
                  <!-- <td>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                      <path d="M12 4.5C7.05 4.5 2.73 7.61 1 12c1.73 4.39 6.05 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6.05-7.5-11-7.5zm0 13c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6zm0-10c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                    </svg>
                  </td> -->
                  <td>{{$page->language}}</td>
                  <td class="text-center">{{$page->created_at}}</td>
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
                @endforeach                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection