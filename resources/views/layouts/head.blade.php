<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="human resource" />
    <meta name="keywords" content="human resource" />
    <meta name="author" content="faden" />
    <meta name="MobileOptimized" content="320" />
    <title>Faden-Human-Resources</title>
    <link rel="stylesheet" href="{{url('website-design/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('website-design/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('website-design/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('website-design/css/owl.theme.default.min.css')}}">
    
    <link rel="stylesheet" href="{{url('website-design/css/lightbox.min.css')}}">
    
    <link rel="stylesheet" href="{{url('website-design/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{url('website-design/css/style.css')}}"> 
@if ( Config::get('app.locale') == 'ar' )

<link rel="stylesheet" href="{{url('website-design/css/ar.css')}}">

@endif
   
    
    
    
    
    
    
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
   <!-- Top Header Wrapper Start -->
<div class="jp_top_header_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <?php 
                            $contacts=\App\Contact::all();
                            ?>
@foreach($contacts as $contact)
                            <p><i class="fa fa-phone"></i> &nbsp;{{ trans('message.mobile')}} &nbsp;{{ $contact->mobile }}</p>
                            <p class=""><i class="fa fa-envelope"></i> &nbsp;{{ trans('message.Email')}} :&nbsp;<a href="">{{ $contact->email }}</a></p>
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_right_wrapper">
                        <div class="jp_top_header_right_cont">
<!--
                            <ul>
                                <li><a href="register.html"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li>
                            </ul>
-->
                        </div>
                        <div class="jp_top_header_right__social_cont">
                            <ul>
                                <?php 
                                $socials=\App\Social::all();
                                ?>
                                @foreach($socials as $social)
                                <li><a href="{{$social->link}}"><i class="fab fa-{{$social->icon}}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>