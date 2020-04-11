@include('layouts.head')
@extends('index')
@section('content')


<div class="jp_top_header_img_wrapper search-job">    
    <div class="jp_slide_img_overlay"></div>
    <div class="jp_banner_heading_cont_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_job_heading_wrapper">
                            <div class="jp_job_heading">
                                <p>Find Jobs, Employment & Career Opportunities</p>
                            </div>
                        </div>
                    </div>
                    @if(!empty($results))
                    <p>No Results found.</p>
                    @endif
                    @foreach ($results as $result)
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      
                        <div class="jp_header_form_wrapper">

                            
                           <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                  <!-- <input type="text" placeholder="Keyword e.g. (Job Title, Description, Tags)">-->
                                <div class="jp_form_location_wrapper">
                                    <input type="text" class="form-control" value="{{$result->title->title}}">
                                </div>
                            </div>
                              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="jp_form_location_wrapper">
                                    <input type="text" class="form-control" value="{{$result->location->location}}">
                                </div>
                            </div>
                              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="jp_form_exper_wrapper">
                                    <input type="text" class="form-control" value="{{$result->experience->experience}} {{trans('message.years')}}">
                                </div>
                            </div>
                              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="jp_form_btn_wrapper">
                                    <ul>
                                        <li><a href="{{url('/officer')}}"><i class="fa fa-search"></i> Apply</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                               
                    </div>
                    @endforeach 
                    {{-- <span>{{ $results->links() }}</span> --}}
                </div>
            
            </div>
        </div>
</div> 


@endsection