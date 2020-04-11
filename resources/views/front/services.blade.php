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
                        <h2>{{trans('message.services')}}</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="index.html">{{trans('message.home')}}</a> <i class="fa fa-angle-right"></i></li>
                                    
                                    <li>{{trans('message.services')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End --> 
    
 <!--******************* service Section *********************-->    
<div class="service" id="services">
<div class="container">
        <div class="jp_contact_form_heading_wrapper">
            <h2> {{trans('message.services')}}</h2>
        </div>
   <div class="row">
       @foreach($services as $service)
       <div class="col-md-4">
           <div class="box one-box">
                <div class="icon"><img src="{{asset('./../storage/app/service/'. $service->image )}}" style="height:40px;" /></div>
                <div class="content">
                    <h3>{{ $service->name }}</h3>
                    <p>{{$service->description}}</p>
                    <a href="{{url('service_gallery/'.$service->id)}}">{{trans('message.more')}}</a>
                </div>
            </div>
       </div>
     
       @endforeach
     
     
       {{-- <div class="col-md-4">
            <div class="box two-box">
                <div class="icon">02</div>
                <div class="content">
                    <h3>Jobs</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo aperiam velit blanditiis, soluta porro magnam amet quia illum consequuntur possimus.</p>
                    <a href="#">More</a>
                </div>
            </div>
       </div>
       <div class="col-md-4">
            <div class="box three-box">
                <div class="icon">03</div>
                <div class="content">
                    <h3>Hierarchy</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel sit ad, voluptatem cumque molestias laboriosam ullam expedita molestiae iusto alias.</p>
                    <a href="#">More</a>
                </div>
            </div>
       </div> --}}
   </div>
    
   
</div>
</div>    
 
 <!-- jp Contact form Wrapper End -->

@endsection