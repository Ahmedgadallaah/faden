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
                                <h1><span>3,000+</span> Browse Jobs Around You</h1>
                                <p>Find Jobs, Employment & Career Opportunities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_header_form_wrapper">
                        <form action="{{url ('/job') }}" method="post">
                            {{ csrf_field() }}
                                 <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <input type="text" name="title" placeholder="Keyword e.g. (Job Title, Description, Tags)">
                            </div>
                              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="jp_form_location_wrapper">
                                    <i class="fa fa-dot-circle-o first_icon"></i>
                                    <select  name="location">
                                        @foreach ($locations as $location)
                                        <option value="{{ $location->id}}">{{$location->location}}</option>
                                         @endforeach
                                         
                                        <option value="Zimbabwe">Zimbabwe</option>
                                   </select>
                                <i class="fa fa-angle-down second_icon"></i>
                                </div>
                            </div>
                              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="jp_form_exper_wrapper">
                                    <i class="fa fa-dot-circle-o first_icon"></i><select name="experience">
								<option value="1">1 year</option> 
								<option value="2">2 years</option>
								<option value="3">3 years</option>
								<option value="4">4 years</option>
                                <option value="5">5 years</option>
                                <option value="6">6 years</option>
								<option value="7">7 years </option>
								<option value="8">8 years</option>
								<option value="9">9 years</option>
                                <option value="10">10 years</option>
                                <option value="11">11 years</option>
								<option value="12">12 years</option>
								<option value="13">13 years</option>
								<option value="14">14 years</option>
                                <option value="15">15 years</option>
                                <option value="16">16 years</option>
								<option value="17">17 years</option>
								<option value="18">18 years</option>
								<option value="19">19 years</option>
								<option value="20">20 years</option>
							</select><i class="fa fa-angle-down second_icon"></i>
                                </div>
                                
                            </div>
                              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                
                                <div class="jp_form_btn_wrapper">
                                    
                               <button type="submit">Search</button>
                                    
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