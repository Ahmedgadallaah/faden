    <!-- jp Newsletter Wrapper Start -->

    
    <?php 
    $setting=\App\Setting::first();
    ?>
    
   
    



    <div class="jp_main_footer_img_wrapper">
        
        <div class="jp_newsletter_img_overlay_wrapper"></div>
        <div class="jp_newsletter_wrapper">
            <div class="container">
                <div>@if (\Session::has('success'))
                    <div class="alert alert-success">
                      <p>{{ \Session::get('success') }}</p>
                    </div><br />
                   @endif
                   @if (\Session::has('failure'))
                    <div class="alert alert-danger">
                      <p>{{ \Session::get('failure') }}</p>
                    </div><br />
                   @endif</div>
                <div class="row">
                    
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="jp_newsletter_text">
                            <img src="{{url('website-design/imgs/news_logo.png')}}" class="img-responsive" alt="news_logo" />
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="jp_newsletter_field">
                            <form method="post" action="{{url('newsletter')}}">
                                {{ csrf_field() }}
                                <i class="fa fa-envelope-o"></i><input type="text" name="email" placeholder="{{trans('message.Email')}}"><button type="submit">{{trans('message.send')}}</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
                      
        <!-- jp Newsletter Wrapper End -->
        <!-- jp footer Wrapper Start -->
        <div class="jp_footer_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    
                            <div class="jp_footer_first_cont_wrapper">
                                <div class="jp_footer_first_cont">
                                    <h2>{{trans('message.Who We Are')}}</h2>
                                    <br>
                                    <a href="#"><img src="{{asset('./../storage/app/setting/'.$setting->logo)}}" width="100" alt="footer_logo"/></a>
                                    <p>{{$setting->vision}}</p>
                                    <ul>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">{{trans('message.more')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                    
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-6">
                    
                           <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper3">
                                <div class="jp_footer_candidate">
                                    <h2>{{trans('message.Our Pages')}}</h2>
                                    <ul>
                                        <ul class="navbar-nav m-auto">
                                            <li >
                                            <a  href="{{url('index')}}">{{trans('message.Home')}}</a>
                                            </li>
                                            <li >
                                              <a  href="{{url('services')}}">{{trans('message.services')}}</a>
                                            </li>
                                            <li >
                                              <a  href="{{url('clients')}}">{{trans('message.clients')}}</a>
                                            </li>
                                            <li >
                                              <a  href="{{url('partners')}}">{{trans('message.Partners')}}</a>
                                            </li>
                                            <li >
                                              <a  href="{{url('job')}}">{{trans('message.Search For Job')}}</a>
                                            </li>
                                           
                                          </ul>
                                    </ul>
                                </div>
                            </div>
                    
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-6 last">
                    
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper4">
                                <div class="jp_footer_candidate">
                                    <h2>{{trans('message.Other Pages')}}</h2>
                                    <ul>
                                        <ul class="navbar-nav m-auto">
                                            <li >
                                              <a  href="{{url('officer')}}">{{trans('message.Search For Officer')}}</a>
                                            </li>
                                            <li >
                                            <a cl href="{{url('hierarchy')}}">{{trans('message.Hierarchy')}}</a>
                                            </li>
                                            <li >
                                            <a  href="{{url('works')}}">{{trans('message.Our Works')}}</a>
                                            </li>
                                            <li >
                                            <a  href="{{url('thanks')}}">{{trans('message.Thanks')}}</a>
                                            </li>
                                            <li >
                                            <a  href="{{url('events')}}">{{trans('message.Events')}}</a>
                                            </li>
                                            <li >
                                            <a  href="{{url('contact')}}">{{trans('message.Contact')}}</a>
                                            </li>
                                        </ul>
                                    </ul>
                               </div>
                            </div>
                    
                    </div>
                    
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_bottom_footer_Wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="jp_bottom_footer_left_cont">
                                        <p>© Faden for Human Resources and management solutions . All Rights Reserved.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="jp_bottom_footer_right_cont">
                                        <ul>
                                            <ul>

                                                <?php 
                                                $socials=\App\Social::all();
                                                ?>
                                                @foreach($socials as $social)
                                                <li><a href="http://<?php echo $social->link; ?>" target="_blank"><i class="fab fa-{{$social->icon}}"></i></a></li>
                                                @endforeach
                                            </ul>
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
    </div>
    <!-- jp footer Wrapper End -->   
    <script src="{{url('website-design/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('website-design/js/popper.min.js')}}"></script>
    <script src="{{url('website-design/js/bootstrap.min.js')}}"></script>
    <script src="{{url('website-design/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('website-design/js/lightbox-plus-jquery.min.js')}}"></script>
    <script src="js/swiper.js"></script>
    <script src="{{url('website-design/js/main.js')}}"></script>

    
    
</body>
</html>
