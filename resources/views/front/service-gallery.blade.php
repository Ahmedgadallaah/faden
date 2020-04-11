@include('layouts.head')
@extends('index')
@section('content')


<div class="show-booking-info">
       <div class="jp_contact_form_heading_wrapper">
        <h2>{{trans('message.gallery')}} </h2><br>
        <p>{{trans('message.Our Awareness and Our Commitment to your business is our every day’s Focus to prove it.')}}</p>
        </div>
<div class="container">
            
  <div class="swiper-container">
    <div class="swiper-wrapper">
      
          <div class="swiper-slide">
            
            <div class="imgbx">
              @foreach($service->serviceDetails as $image)
              <img src="{{URL::to('./../storage/app/service/'.$image->images)}}">
                @endforeach
              </div>
              
            </div>
      
      <!-- Add Pagination -->
            <br><br>
            <div class="swiper-pagination"></div>
           </div> 
    </div>
  </div>
