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
                            <h2>{{trans('message.Patrners')}}</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="index.html">{{trans('message.home')}}</a> <i class="fa fa-angle-right"></i></li>
                                    
                                    <li>{{trans('message.partners')}}</li>
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
            <h2> {{trans('message.partners')}} </h2><br>
            <p>{{trans('message.Our Awareness and Our Commitment to your business is our every day’s Focus to prove it.')}}</p>
        </div>
    </div>
</div> 


          <!-- start gallery-->
<section class="clients-portfolio">
                
    <div class="container">
        <div class="row">
            @foreach($partners as $partner)
            <div class="col-md-2">
            <a href="{{asset('./../storage/app/partner/'.$partner->logo)}}" data-lightbox="mygallery">
               <img src="{{asset('./../storage/app/partner/'.$partner->logo)}}">
            </a>
            </div>
            @endforeach
<!-- 
        <div class="col-md-2">
           <div class="overlay"></div>
            <a href="imgs/clients/clients-02-1-540x540.jpg" data-lightbox="mygallery">
               <img src="imgs/clients/clients-02-1-540x540.jpg">
            </a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-03-540x540.jpg" data-lightbox="mygallery">
               <img src="imgs/clients/clients-03-540x540.jpg">
            </a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-04-1-540x540.jpg" data-lightbox="mygallery">
              <img src="imgs/clients/clients-04-1-540x540.jpg">
            </a>
        </div>

        <div class="col-md-2">
            <a href="imgs/clients/clients-05-1-540x540.jpg" data-lightbox="mygallery">
               <img src="imgs/clients/clients-05-1-540x540.jpg">
            </a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-06-1-540x540.jpg" data-lightbox="mygallery">
               <img src="imgs/clients/clients-06-1-540x540.jpg">
            </a>
        </div>

        <div class="col-md-2">
            <a href="imgs/clients/clients-07-1-540x540.jpg" data-lightbox="mygallery">
               <img src="imgs/clients/clients-07-1-540x540.jpg">
            </a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-08-1-540x540.jpg" data-lightbox="mygallery">
               <img src="imgs/clients/clients-08-1-540x540.jpg">
            </a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-09-1-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-09-1-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-10-540x540.jpg" data-lightbox="mygallery">
              <img src="imgs/clients/clients-10-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-11-540x540.jpg" data-lightbox="mygallery">
            <img src="imgs/clients/clients-11-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-12-540x540.jpg" data-lightbox="mygallery">
            <img src="imgs/clients/clients-12-540x540.jpg">
            </a>
        </div>
        
        <div class="col-md-2">
            <a href="imgs/clients/clients-13-540x540.jpg" data-lightbox="mygallery">
            <img src="imgs/clients/clients-13-540x540.jpg">
            </a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-14-540x540.jpg" data-lightbox="mygallery">
            <img src="imgs/clients/clients-14-540x540.jpg">
            </a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-15-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-15-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-16-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-16-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-17-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-17-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-18-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-18-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-19-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-19-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-21-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-21-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-23-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-23-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-25-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-25-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-23-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-23-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-26-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-26-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-27-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-27-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-28-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-28-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-29-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-29-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-30-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-30-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-31-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-31-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-32-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-32-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-33-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-33-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-34-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-34-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-35-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-35-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-36-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-36-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-37-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-37-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-38-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-38-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-39-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-39-540x540.jpg"></a>
        </div>
        <div class="col-md-2">
            <a href="imgs/clients/clients-40-540x540.jpg" data-lightbox="mygallery"><img src="imgs/clients/clients-40-540x540.jpg"></a>
        </div> --> 
    </div>
               
               
  </div>
</section>
          <!-- end Client-->    

 <!-- jp Contact form Wrapper End -->
<!--*************************************************************-->
@endsection