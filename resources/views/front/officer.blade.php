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
                                      <h2>search for officier</h2>
                                  </div>
                                  <div class="jp_tittle_breadcrumb_main_wrapper">
                                      <div class="jp_tittle_breadcrumb_wrapper">
                                          <ul>
                                              <li><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
                                              
                                              <li>search for officier</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          <!--*************************************************************-->
          
          {{-- <form action="{{url ('/officer') }}" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }} --}}
            




            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div >
                    <h3 class="alert-success" style="height:20px;">
                                        <?php
                                        $message=Session::get('message');
                                        if ($message)
                                        { 
                                            echo $message;
                                            Session::put('message',NULL);
                                        }
                                        ?>
                                    </h3>
                </div>
<form action="{{url ('/admin/officer/store') }}" method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label class="required" for="address">{{ trans('message.address') }} (EN)</label>
        <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', '') }}" required>
        @if($errors->has('en_name'))
            <div class="invalid-feedback">
                {{ $errors->first('address') }}
            </div>
        @endif
        
    </div>

    
    <div class="form-group">
        <label class="required" for="phone">{{ trans('message.phone') }} </label>
        <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
        @if($errors->has('phone'))
            <div class="invalid-feedback">
                {{ $errors->first('phone') }}
            </div>
        @endif
        
    </div> 

    <div class="form-group">
      <label class="required" for="email">{{ trans('message.name') }} (EN)</label>
      <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
      @if($errors->has('email'))
          <div class="invalid-feedback">
              {{ $errors->first('email') }}
          </div>
      @endif
      
    </div>

  
  <div class="form-group">
      <label class="required" for="objective">{{ trans('message.title') }} (Ar)</label>
      <input class="form-control {{ $errors->has('objective') ? 'is-invalid' : '' }}" type="text" name="objective" id="objective" value="{{ old('objective', '') }}" required>
      @if($errors->has('objective'))
          <div class="invalid-feedback">
              {{ $errors->first('objective') }}
          </div>
      @endif
      
  </div> 

  <div class="form-group">
    <label class="required" for="university">{{ trans('message.name') }} (EN)</label>
    <input class="form-control {{ $errors->has('university') ? 'is-invalid' : '' }}" type="text" name="university" id="university" value="{{ old('university', '') }}" required>
    @if($errors->has('university'))
        <div class="invalid-feedback">
            {{ $errors->first('university') }}
        </div>
    @endif
    
    </div>


    <div class="form-group">
    <label class="required" for="city">{{ trans('message.title') }} (Ar)</label>
    <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}" required>
    @if($errors->has('city'))
        <div class="invalid-feedback">
            {{ $errors->first('city') }}
        </div>
    @endif
    
    </div> 

    <div class="form-group">
  <label class="required" for="Gpa">{{ trans('message.title') }} (Ar)</label>
  <input class="form-control {{ $errors->has('Gpa') ? 'is-invalid' : '' }}" type="text" name="Gpa" id="Gpa" value="{{ old('Gpa', '') }}" required>
  @if($errors->has('Gpa'))
      <div class="invalid-feedback">
          {{ $errors->first('Gpa') }}
      </div>
  @endif
  
    </div> 


    <div class="form-group">
  <label class="required" for="communication">{{ trans('message.title') }} (Ar)</label>
  <input class="form-control {{ $errors->has('communication') ? 'is-invalid' : '' }}" type="text" name="communication" id="communication" value="{{ old('communication', '') }}" required>
  @if($errors->has('communication'))
      <div class="invalid-feedback">
          {{ $errors->first('communication') }}
      </div>
  @endif
  
    </div> 


    <div class="form-group">
    <label class="required" for="leader">{{ trans('message.leader') }} (Ar)</label>
    <input class="form-control {{ $errors->has('leader') ? 'is-invalid' : '' }}" type="text" name="leader" id="leader" value="{{ old('leader', '') }}" required>
    @if($errors->has('leader'))
      <div class="invalid-feedback">
          {{ $errors->first('leader') }}
      </div>
  @endif
  
    </div> 

    <div class="form-group">
  <label class="required" for="cv">{{ trans('message.cv') }} (Ar)</label>
  <input class="form-control {{ $errors->has('cv') ? 'is-invalid' : '' }}" type="file" name="cv" id="cv" value="{{ old('cv', '') }}" required>
  @if($errors->has('cv'))
      <div class="invalid-feedback">
          {{ $errors->first('cv') }}
      </div>
      @endif
  
    </div> 






    <div class="form-group">
    <label class="required" for="communication">{{ trans('message.job title') }} (Ar)</label>
    <input class="form-control {{ $errors->has('communication') ? 'is-invalid' : '' }}" type="text" name="job_title" id="communication" value="{{ old('communication', '') }}" required>
    @if($errors->has('communication'))
        <div class="invalid-feedback">
            {{ $errors->first('communication') }}
        </div>
    @endif
    
  </div> 
  
  
  <div class="form-group">
    <label class="required" for="leader">{{ trans('message.position') }} (Ar)</label>
    <input class="form-control {{ $errors->has('leader') ? 'is-invalid' : '' }}" type="text" name="position" id="position" value="{{ old('position', '') }}" required>
    @if($errors->has('leader'))
        <div class="invalid-feedback">
            {{ $errors->first('leader') }}
        </div>
    @endif
    
     </div> 
  
    <div class="form-group">
    <label class="required" for="cv">{{ trans('message.company') }} (Ar)</label>
    <input class="form-control {{ $errors->has('cv') ? 'is-invalid' : '' }}" type="text" name="company_name" id="cv" value="{{ old('cv', '') }}" required>
    @if($errors->has('cv'))
        <div class="invalid-feedback">
            {{ $errors->first('cv') }}
        </div>
    @endif
    
  </div> 

     <div class="form-group" >
      <label class="required" for="job title">{{ trans('message.skills') }} </label>

      <div class="col-md-6">
        <h5>Key Skills</h5>
        <div class="row">
            <div class="col-md-4 col-4">
                <div>
                   @foreach($skills as $skill)
                    <input name="skill[]" multiple type="checkbox" value="{{$skill->id}}"> <span>{{$skill->skill}}</span>
                    @endforeach   
                </div>
            </div>     
        </div>
    </div>
    </div> 



    
    <button type="submit" class="btn btn-primary">submit</button> 
    </div>
    </div>
</form>
</div>
@endsection