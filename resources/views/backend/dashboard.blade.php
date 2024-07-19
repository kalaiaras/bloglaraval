@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('section')

@php
use \App\Http\Controllers\PostsController;
use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\UserController;
@endphp
<!--  BEGIN CONTENT AREA  -->
        
<div class="layout-px-spacing">
  <div class="middle-content container-xxl p-0">
    <div class="row layout-top-spacing">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
        <div class="widget widget-t-sales-widget widget-m-sales">
          <div class="media">
            <div class="icon ml-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart">
                <path d="M17 21V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14h14z" />
                <line x1="12" y1="3" x2="12" y2="7" />
                <line x1="9" y1="3" x2="9" y2="7" />
                <line x1="15" y1="3" x2="15" y2="7" />
                <line x1="6" y1="11" x2="18" y2="11" />
                <line x1="6" y1="15" x2="18" y2="15" />
              </svg>
            </div>
            @php
              $blog_count = PostsController::blogposts_count();
            @endphp
            <div class="media-body">
              <p class="widget-text">Blog Post</p>
              <p class="widget-numeric-value">{{$blog_count}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
        <div class="widget widget-t-sales-widget widget-m-orders">
          <div class="media">
            <div class="icon ml-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                <!-- Body of the pending post -->
                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                <!-- Top line of the document -->
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <!-- "Pending" indicator -->
                <circle cx="12" cy="15" r="3" stroke="currentColor" fill="none"></circle>
                <line x1="12" y1="12" x2="12" y2="13"></line>
                <line x1="12" y1="17" x2="12" y2="18"></line>
              </svg>
            </div>
            @php
              $pending = PostsController::pending_posts_count();
            @endphp
            <div class="media-body">
              <p class="widget-text">Pending Post</p>
              <p class="widget-numeric-value">{{$pending}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
        <div class="widget widget-t-sales-widget widget-m-customers">
          <div class="media">
            <div class="icon ml-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                <!-- Main shape representing multi-pages -->
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <!-- Additional pages -->
                <rect x="5" y="7" width="4" height="10"></rect>
                <rect x="11" y="7" width="4" height="10"></rect>
                <rect x="17" y="7" width="4" height="10"></rect>
              </svg>
            </div>
            @php
              $pages_count = PagesController::pages_count();
            @endphp
            <div class="media-body">
              <p class="widget-text">Pages</p>
              <p class="widget-numeric-value">{{$pages_count}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
        <div class="widget widget-t-sales-widget widget-m-income">
          <div class="media">
            <div class="icon ml-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            @php
              $users_count = UserController::users_count();
            @endphp
            <div class="media-body">
              <p class="widget-text">Users</p>
              <p class="widget-numeric-value">{{$users_count}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-four p-3">
          <div class="widget-heading">
            <h5 class="">Recent Posts</h5>
          </div>
          <div class="widget-content">
            <div class="mt-container-ra mx-auto">
              <div class="timeline-line">
              @php
                $posts = PostsController::getposts();
              @endphp
              @foreach($posts as $post)
                <div class="item-timeline timeline-success">
                  <div class="t-dot" data-original-title="" title=""></div>
                  <div class="t-text">
                    <p>
                      <span>{{$post->title}}</span>
                    </p>
                    <span class="badge">{{$post->status}}</span>
                    <p class="t-time">{{$post->created_at}}</p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="tm-action-btn">
              <a href="{{url('allposts')}}">
              <button class="btn">
                <span>View All</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-table-two p-3">
          <div class="widget-heading">
            <h5 class="">Recent Comments</h5>
          </div>
          <div class="widget-content">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>
                      <div class="th-content">Customer</div>
                    </th>
                    <th>
                      <div class="th-content">Product</div>
                    </th>
                    <th>
                      <div class="th-content">Invoice</div>
                    </th>
                    <th>
                      <div class="th-content th-heading">Price</div>
                    </th>
                    <th>
                      <div class="th-content">Status</div>
                    </th>
                  </tr>
                </thead>
                <tbody>               
                @foreach($comments as $comment)
                  <tr>
                    <td>
                      <div class="td-content customer-name">
                        <img src="{{asset('assets/assets/img/profile-13.jpeg')}}" alt="avatar">
                        <span>Luke Ivory</span>
                      </div>
                    </td>
                    <td>
                      <div class="td-content product-brand text-primary">{{$comment->name}}</div>
                    </td>
                    <td>
                      <div class="td-content product-invoice">{{$comment->comment}}</div>
                    </td>
                    <td>
                      <div class="td-content pricing">
                        <span class="">{{$comment->post}}</span>
                      </div>
                    </td>
                    <td>
                      <div class="td-content">
                        <span class="badge badge-primary">{{$comment->status}}</span>
                      </div>
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
</div>
<!--  END CONTENT AREA  -->
@endsection