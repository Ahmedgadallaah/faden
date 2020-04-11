@include('layouts.header')
@extends('indexx')

@section('content')

<div class="jp_top_header_img_wrapper">    
    <div class="jp_slide_img_overlay"></div>
<!--
    <div class="on-all">
        <h2><span>3,000+</span> Browse Jobs Around You</h2>
        <p>Find Jobs, Employment & Career Opportunities</p>
    </div>
-->
    <div class="jp_banner_heading_cont_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_job_heading_wrapper">
                            <div class="jp_job_heading">
                                <h1><span>3,000+</span> {{ trans('message.Browse Jobs Around You') }}</h1>
                                <p>{{ trans('message.Find Jobs, Employment & Career Opportunities') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_header_form_wrapper">
                        <form action="{{url ('/jobs') }}" method="post">
                            {{ csrf_field() }}
                                 <div class="row">
                              {{-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <input type="text" name="title" placeholder="Keyword e.g. (Job Title, Description, Tags)">
                            </div> --}}

                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="jp_form_location_wrapper">
                                    <i class="fa fa-dot-circle-o first_icon"></i>
                                    <select  name="title">
                                        @foreach ($titles as $title)
                                        <option value="{{ $title->id}}">{{$title->title}}</option>
                                         @endforeach
                                         
                                        
                                   </select>
                                <i class="fa fa-angle-down second_icon"></i>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="jp_form_location_wrapper">
                                    <i class="fa fa-dot-circle-o first_icon"></i>
                                    <select  name="location">
                                        @foreach ($locations as $location)
                                        <option value="{{ $location->id}}">{{$location->location}}</option>
                                         @endforeach
                                         
                                        
                                   </select>
                                <i class="fa fa-angle-down second_icon"></i>
                                </div>
                            </div>
                              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="jp_form_exper_wrapper">
                                    <i class="fa fa-dot-circle-o first_icon"></i>
                                    <select name="experience">
                                        @foreach ($experiences as $experience)
								            <option value="{{ $experience->id}}">{{ $experience->experience}} {{trans('message.years')}}</option>
                                        @endforeach
                                    </select><i class="fa fa-angle-down second_icon"></i>
                                </div> 
                            </div>
                              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                
                                <div class="jp_form_btn_wrapper">
                                    
                               <button type="submit">{{trans('message.Search')}}</button>
                                    
                                </div>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>




<!--*************************************************************-->
<div class="jp_tittle_slider_main_wrapper" style="float:left; width:100%;">
    <div class="container">
        <div class="jp_tittle_name_wrapper">
            <div class="jp_tittle_name">
                <h3>{{trans('message.Tranding')}}</h3>
                <h4></h4>
            </div>
        </div>
        <div class="jp_tittle_slider_wrapper">
            <div class="jp_tittle_slider_content_wrapper">
                <div class="owl-carousel owl-theme">
                    @foreach($titles as $title)  
                    <div class="item">
                        <div class="jp_tittle_slides_one">
                            <div class="jp_tittle_side_img_wrapper">
                                <img src="{{asset('./../storage/app/title/'.$title->image)}}" alt="tittle_img" />
                            </div>
                            <div class="jp_tittle_side_cont_wrapper">
                                <h3>{{$title->title}}</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    @endforeach

       
                </div>
            </div>
        </div>
    </div>
</div>



<!-- jp tittle slider Wrapper Start -->


   
    <!-- jp tittle slider Wrapper End --> 
<!-- jp first sidebar Wrapper Start -->
    <div class="jp_first_sidebar_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_hiring_slider_main_wrapper">
                                <div class="jp_hiring_heading_wrapper">
                                    <h2>{{trans('message.Top Hiring Companies')}}</h2>
                                </div>
                                <div class="jp_hiring_slider_wrapper">
                                    <div class="owl-carousel owl-theme">
                                        @foreach($clients as $client)
                                        <div class="item">
                                            <div class="jp_hiring_content_main_wrapper">
                                                <div class="jp_hiring_content_wrapper">
                                                     <img src="{{asset('./../storage/app/client/'.$client->logo)}}" alt="hiring_img" /> 
                                                    <h4  >{{ $client->name }}...</h4>
                                                    
                                                    <ul>
                                                        <li><a href="#">{{ $client->jobs->count() }} {{trans('message.Opening')}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        {{-- <div class="item">
                                            <div class="jp_hiring_content_main_wrapper">
                                                <div class="jp_hiring_content_wrapper">
                                                    <img src="imgs/hiring_img2.png" alt="hiring_img" />
                                                    <h4>Akshay INC.</h4>
                                                    <p>(NewYork)</p>
                                                    <ul>
                                                        <li><a href="#">4 Opening</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="jp_hiring_content_main_wrapper">
                                                <div class="jp_hiring_content_wrapper">
                                                    <img src="imgs/hiring_img3.png" alt="hiring_img" />
                                                    <h4>Akshay INC.</h4>
                                                    <p>(NewYork)</p>
                                                    <ul>
                                                        <li><a href="#">4 Opening</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="jp_hiring_content_main_wrapper">
                                                <div class="jp_hiring_content_wrapper">
                                                    <img src="imgs/hiring_img4.png" alt="hiring_img" />
                                                    <h4>Akshay INC.</h4>
                                                    <p>(NewYork)</p>
                                                    <ul>
                                                        <li><a href="#">4 Opening</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="jp_first_right_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_add_resume_wrapper">
                                    <div class="jp_add_resume_img_overlay"></div>
                                    <div class="jp_add_resume_cont">
                                        <img src="{{url('website-design/imgs/logo.png')}}" width="100" alt="logo" />
                                        <h4>{{trans('message.Get Best Matched Jobs On your Email. Add Resume NOW!')}}</h4>
                                        <ul>
                                            <li><a href="{{ url('officer') }}"><i class="fa fa-plus-circle"></i> &nbsp;{{ trans('ADD RESUME')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <!-- jp first sidebar Wrapper End -->  
<!-- *********************** TOp recruiters ************************* -->
<section id="recruiters">
    
    <div class="container text-center">
        <h3>{{trans('message.TOP RECRUITERS')}} </h3>
        <div class="row">
            @foreach($partners as $partner)
            <div class="col-md-2">
                <a href="{{$partner->logo}}" data-lightbox="mygallery">
                    <img src="{{$partner->logo}}">
                </a>
            </div>
            @endforeach

       
        {{-- <div>
            <img src="{{url('website-design/imgs/amazon.png')}}" alt="">
        </div> --}}
    </div>
    </section>     
    <!-- *********************** Site Stats ************************* -->
    


<section id="site-stats">
<div class="container text-center">
    <h3>{{trans('message.JOBCLUS SITE STATS')}}</h3>
  <div class="row">
      <div class="col-md-6">
          <div class="row">
              <div class="col-6">
                  <div class="stats-box">
                     <i class="far fa-user"></i><span><small>{{ $officers->count()}} +</small>
                      </span>
                      <p>{{trans('message.Job Seekers')}}</p>
                  </div>
              </div>
              <div class="col-6">
                  <div class="stats-box">
                     <i class="fab fa-slideshare"></i><span><small>{{ $officers->count()}} +</small>
                      </span>
                      <p>{{trans('message.Employers')}}</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="row">
              <div class="col-6">
                  <div class="stats-box">
                     <i class="far fa-hand-peace"></i><span><small>{{ $jobs->count() }} +</small>
                      </span>
                      <p>{{trans('message.Active Jobs')}}</p>
                  </div>
              </div>
              <div class="col-6">
                  <div class="stats-box">
                     <i class="far fa-building"></i><span><small>{{ $client->count() }} +</small>
                      </span>
                      <p>{{trans('message.Companies')}}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</section> 
@endsection

