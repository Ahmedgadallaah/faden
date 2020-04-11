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
                        <h2>{{trans('message.hierarchy')}}</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="index.html">{{trans('message.home')}}</a> <i class="fa fa-angle-right"></i></li>
                                
                                <li>{{trans('message.hierarchy')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--*************************************************************-->
<div class="hierarchy-part">
<div class="container">
<div class="row">
    @foreach($hierarchy as $h)
    <div class="col-md-3 col-6">
        <div class="square">
           <span></span>
           <span></span>
           <span></span>
            <h5>{{$h->name}}</h5>
            <a href="#">{{trans('message.Download image')}}</a>
        </div>
    </div>
    @endforeach
    {{-- <div class="col-md-3 col-6">
        <div class="square">
           <span></span>
           <span></span>
           <span></span>
            <h5>Companies</h5>
            <a href="#">Download image</a>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="square">
           <span></span>
           <span></span>
           <span></span>
            <h5>Hospitals</h5>
            <a href="#">Download image</a>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="square">
           <span></span>
           <span></span>
           <span></span>
            <h5>Technology companies</h5>
            <a href="#">Download image</a>
        </div>
    </div> --}}
</div>
</div>
</div>    

<div class="hierarchyphases">
<div class="container">
    <div class="row">
        @foreach( $department as $dep )
        <div class="col-md-4 col-6">
            <div class="jp_contact_form_heading_wrapper">
            <h2>{{ $dep->title }}</h2>
             </div>
                <ul>
                    @foreach($dep->hierarchyDetail as $h)
                    <li>
                   
                        {{$h->title}}
                    
                    </li>
                    @endforeach
                    
                </ul>
        </div>
        @endforeach
        {{-- <div class="col-md-4 col-6">
            <div class="jp_contact_form_heading_wrapper">
                <h2>Finance:</h2>
             </div>
                <ul>
                    <li>Chief Finance officer</li>
                    <li>Finance director</li>
                    <li>Finance manager</li>
                    <li>Finance super visor</li>
                    <li>Finance coordinator</li>
                    <li>Section head</li>
                </ul>
        </div>
        <div class="col-md-4">
             <div class="jp_contact_form_heading_wrapper">
                <h2> Human resources:</h2>
             </div>
                <ul>
                    <li>Chief Human resources officer</li>
                    <li>Human resources director</li>
                    <li>Human resources manager</li>
                    <li>Human resources super visor</li>
                    <li>Human resources coordinator</li>
                    <li>Section head</li>
                </ul>
        </div>
        <div class="col-md-4">
             <div class="jp_contact_form_heading_wrapper">
                <h2> Marketing:</h2>
             </div>
                <ul>
                    <li>Chief Marketing officer</li>
                    <li>Marketing director</li>
                    <li>Marketing manager</li>
                    <li>Marketing super visor</li>
                    <li>Marketing coordinator</li>
                    <li>Section head</li>
                </ul>
        </div>
        <div class="col-md-4">
            <div class="jp_contact_form_heading_wrapper">
                <h2>  Maintenance:</h2>
             </div>
                <ul>
                    <li>Chief Maintenance officer</li>
                    <li>Maintenance director</li>
                    <li>Maintenance manager</li>
                    <li>Maintenance super visor</li>
                    <li>Maintenance coordinator</li>
                    <li>Section head</li>
                </ul>
        </div>
        <div class="col-md-4">
            <div class="jp_contact_form_heading_wrapper">
                <h2> Produce:</h2>
             </div>
                <ul>
                    <li>Chief Produce officer</li>
                    <li>Produce director</li>
                    <li>Produce manager</li>
                    <li>Produce super visor</li>
                    <li>Produce coordinator</li>
                    <li>Section head</li>
                </ul>
        </div>
        <div class="col-md-4">
            <div class="jp_contact_form_heading_wrapper">
                <h2>Research and development:</h2>
             </div>
                <ul>
                    <li> Chief Research and development officer</li>
                    <li>Research and development  director</li>
                    <li>Research and development  manager</li>
                    <li>Research and development  super visor</li>
                    <li>Research and development  coordinator</li>
                    <li>Section head</li>
                </ul>
        </div>
        <div class="col-md-4">
            <div class="jp_contact_form_heading_wrapper">
                <h2> Operation</h2>
             </div>
                <ul>
                    <li>Chief Operation officer</li>
                    <li>Operation director</li>
                    <li>Operation manager</li>
                    <li>Operation super visor</li>
                    <li>Operation coordinator</li>
                    <li>Section head</li>
                </ul>
        </div>
        <div class="col-md-4">
            <div class="jp_contact_form_heading_wrapper">
                <h2>Supply chain:</h2>
             </div>
                <ul>
                    <li>Chief Supply chain officer</li>
                    <li>Supply chain director</li>
                    <li>Supply chain manager</li>
                    <li>Supply chain super visor</li>
                    <li>Supply chain coordinator</li>
                    <li>Section head</li>
                </ul>
        </div> --}}
    </div>
</div>
</div>  
@endsection