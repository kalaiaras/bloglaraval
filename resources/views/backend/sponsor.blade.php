@extends('backend.layouts.app')

@section('title', 'sponsor')

@section('section')

<div class="layout-px-spacing">
  <div class="middle-content container-xxl p-0">
    <a href="{{url('addsponsor')}}">
      <button class="add-sponsor-btn text-right">Add Sponsor</button>
    </a>
    <div class="row layout-top-spacing">
      <!-- Row 1 -->
      @foreach($sponsors as $sponsor)
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 layout-spacing">
        <div class="widget widget-t-sales-widget widget-m-sales">
          <div class="media">
            <div class="icon ml-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart">
                <line x1="12" y1="20" x2="12" y2="10"></line>
                <line x1="18" y1="20" x2="18" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="16"></line>
              </svg>
            </div>
            <div class="media-body">
              <p class="widget-text">{{$sponsor->name}}</p>
              <p class="widget-numeric-value">{{$sponsor->description}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach      
    </div>
  </div>
</div>

<style>
  .widget {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    position: relative;
  }

  .widget:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .widget .icon img {
    transition: transform 0.3s ease;
    width: 50px;
    height: 50px;
  }

  .widget:hover .icon img {
    transform: scale(1.1);
  }

  .widget .widget-text {
    font-size: 16px;
    font-weight: bold;
  }

  .widget .widget-numeric-value {
    font-size: 14px;
    color: #555;
  }
      
  .add-sponsor-btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
    
  .add-sponsor-btn:hover {
    background-color: #0056b3;
  }

  .widget .media-body {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
  }
</style>
@endsection