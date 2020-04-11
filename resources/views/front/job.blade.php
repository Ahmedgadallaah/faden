@include('layouts.head')
@extends('index')
@section('content')
<div class="jp_top_header_img_wrapper">    
    <div class="jp_slide_img_overlay"></div>
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
                            
                       <button type="submit" class="btn btn-success">   {{trans('message.Search')}}</button>
                            
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



@endsection