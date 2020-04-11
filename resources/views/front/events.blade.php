@include('layouts.head')
@extends('index')
@section('content')

    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>{{trans('message.events')}}</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="index.html">{{trans('message.home')}}</a> <i class="fa fa-angle-right"></i></li>
                                    
                                    <li>{{trans('message.events')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End --> 
<div class="service-banner">
    <div class="container">
       <div class="jp_contact_form_heading_wrapper">
        <h2> {{trans('message.events')}} </h2><br>
        <p>{{trans('message.Our Awareness and Our Commitment to your business is our every day’s Focus to prove it.')}}</p>
        </div>
    </div>
</div> 


          <!-- start gallery-->
{{-- <section class="clients-portfolio">
                
    <div class="container">
        <div class="row">
            @foreach($partners as $partner)
            <div class="col-md-2">
            <a href="{{$partner->logo}}" data-lightbox="mygallery">
               <img src="{{$partner->logo}}">
            </a>
            </div>
            @endforeach --}}


            <div class="all-event">
                <div class="container">
                    <div class="row">

                        @foreach($events as $event)
                        <div class="col-md-4">
                            <div class="img"><a href="{{ URL::to('event_gallery/'.$event->id) }}"><img src="{{asset('./../storage/app/event/'.$event->image)}}" width="100%"></a></div>
                            <div class="txt">
                                <h6>{{$event->name}}</h6>
                                <small>{{$event->created_at}}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
                
@endsection