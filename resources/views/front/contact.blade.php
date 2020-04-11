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
                        <h2>{{trans('message.contact')}}</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="index.html">{{trans('message.home')}}</a> <i class="fa fa-angle-right"></i></li>
                                
                                <li>{{trans('message.contact')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Tittle Wrapper End --> 
<!-- jp Contact form Wrapper Start -->
<div class="jp_contact_form_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_contact_form_heading_wrapper">
                    <h2>{{trans('message.Leave A Message')}}</h2>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="jp_contact_form_box">
                <form action="{{url ('/storeMessage') }}" method="post" >
                    {{ csrf_field() }}
                    <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper">
                                    <i class="fa fa-user"></i><input type="text" name="name"  required placeholder="{{trans('message.Name')}}*">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">
                                    <i class="fa fa-envelope"></i><input type="text" required name="email" placeholder="{{trans('message.Email')}} *">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="far fa-edit"></i><input type="text"  required name="subject" placeholder="{{trans('message.subject')}}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs4_wrapper">
                                    <i class="fa fa-text-height"></i><textarea rows="6" name="message" required placeholder="{{trans('message.Type Your Message')}} *"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_contact_form_btn_wrapper">
                                
                                    <button type="submit">&nbsp; {{trans('message.send')}}</button>
                                
                            </div>
                        
                    </div>
                    </form> 
                </div>

            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="jp_contact_right_box_wrapper">
                    <div class="jp_contact_form_add_heading_wrapper">
                        <h2>{{trans('message.CONTACT INFO')}}</h2>
                    </div>

                    
                    <div class="jp_form_add_wrapper gc_map_add_wrapper2">
                        <div class="jp_map_location_icon_wrapper">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper2">
                            <h3> {{$contact->fax}}</h3>
                        </div>
                    </div>
                    <div class="jp_form_add_wrapper gc_map_add_wrapper2">
                        <div class="jp_map_location_icon_wrapper">
                            <i class="fa fa-fax"></i>
                        </div>
                        <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper3">
                            <h3> {{$contact->mobile}}</h3>
                        </div>
                    </div>
                    <div class="jp_form_add_wrapper gc_map_add_wrapper3">
                        <div class="jp_map_location_icon_wrapper">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper4">
                            <h3> <a href="#">{{$contact->email}}</a></h3>
                        </div>
                    </div>
                    
                    <div class="jp_contact_form_social_icon">
                       <div class="jp_map_location_icon_wrapper">
                            <i class="fa fa-map-marker"></i>
                        </div>

                         <div class="gc_map_location_icon_cont_wrapper">
                            <h3>{{trans('message.Faden HR Branches')}}</h3>
                        </div>
                        <br><br> 
                        <div class="dir-loc">
                            <h5><a href="#" data-toggle="modal" data-target="#saudiloc">{{trans('message.Saudi Arbia')}}</a></h5>
                            <h5><a href="#" data-toggle="modal" data-target="#egyptloc">{{trans('message.Egypt')}}</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="saudiloc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">

  <div class="modal-body">
     <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14842.218963288464!2d39.14703177207341!3d21.564258927241383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z2KzYr9mHINi02KfYsdi5INin2YTZg9mK2KfZhCDZhdmD2KrYqCDYsdmC2YUgMTMg!5e0!3m2!1sen!2seg!4v1585827588099!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
 
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="egyptloc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">

  <div class="modal-body">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7290572.717029099!2d26.380482994192782!3d26.844724133160526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14368976c35c36e9%3A0x2c45a00925c4c444!2sEgypt!5e0!3m2!1sen!2seg!4v1585827700396!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
 
</div>
</div>
</div>
<!-- jp Contact form Wrapper End -->
@endsection