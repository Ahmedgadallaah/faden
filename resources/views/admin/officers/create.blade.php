@extends('admin.index')
@section('content')

<form action="{{url ('/admin/officer/store') }}" method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="address">{{ trans('message.address') }} (EN)</label>
        <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', '') }}" required>
        @if($errors->has('en_name'))
            <div class="invalid-feedback">
                {{ $errors->first('address') }}
            </div>
        @endif
        
    </div>
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="phone">{{ trans('message.phone') }} </label>
        <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
        @if($errors->has('phone'))
            <div class="invalid-feedback">
                {{ $errors->first('phone') }}
            </div>
        @endif
        
    </div> 
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
      <label class="required" for="email">{{ trans('message.name') }} (EN)</label>
      <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
      @if($errors->has('email'))
          <div class="invalid-feedback">
              {{ $errors->first('email') }}
          </div>
      @endif
      
  </div>
    </div>

    <div class="card-body" id="arabic-form">
  <div class="form-group">
      <label class="required" for="objective">{{ trans('message.title') }} (Ar)</label>
      <input class="form-control {{ $errors->has('objective') ? 'is-invalid' : '' }}" type="text" name="objective" id="objective" value="{{ old('objective', '') }}" required>
      @if($errors->has('objective'))
          <div class="invalid-feedback">
              {{ $errors->first('objective') }}
          </div>
      @endif
      
  </div> 
    </div>
    <div class="card-body" id="arabic-form">
  <div class="form-group">
    <label class="required" for="university">{{ trans('message.name') }} (EN)</label>
    <input class="form-control {{ $errors->has('university') ? 'is-invalid' : '' }}" type="text" name="university" id="university" value="{{ old('university', '') }}" required>
    @if($errors->has('university'))
        <div class="invalid-feedback">
            {{ $errors->first('university') }}
        </div>
    @endif
    
    </div>
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
    <label class="required" for="city">{{ trans('message.title') }} (Ar)</label>
    <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}" required>
    @if($errors->has('city'))
        <div class="invalid-feedback">
            {{ $errors->first('city') }}
        </div>
    @endif
    
    </div> 
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
  <label class="required" for="Gpa">{{ trans('message.title') }} (Ar)</label>
  <input class="form-control {{ $errors->has('Gpa') ? 'is-invalid' : '' }}" type="text" name="Gpa" id="Gpa" value="{{ old('Gpa', '') }}" required>
  @if($errors->has('Gpa'))
      <div class="invalid-feedback">
          {{ $errors->first('Gpa') }}
      </div>
  @endif
  
    </div> 
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
  <label class="required" for="communication">{{ trans('message.title') }} (Ar)</label>
  <input class="form-control {{ $errors->has('communication') ? 'is-invalid' : '' }}" type="text" name="communication" id="communication" value="{{ old('communication', '') }}" required>
  @if($errors->has('communication'))
      <div class="invalid-feedback">
          {{ $errors->first('communication') }}
      </div>
  @endif
  
    </div> 

    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
    <label class="required" for="leader">{{ trans('message.leader') }} (Ar)</label>
    <input class="form-control {{ $errors->has('leader') ? 'is-invalid' : '' }}" type="text" name="leader" id="leader" value="{{ old('leader', '') }}" required>
    @if($errors->has('leader'))
      <div class="invalid-feedback">
          {{ $errors->first('leader') }}
      </div>
  @endif
  
    </div> 
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
  <label class="required" for="cv">{{ trans('message.cv') }} (Ar)</label>
  <input class="form-control {{ $errors->has('cv') ? 'is-invalid' : '' }}" type="file" name="cv" id="cv" value="{{ old('cv', '') }}" required>
  @if($errors->has('cv'))
      <div class="invalid-feedback">
          {{ $errors->first('cv') }}
      </div>
      @endif
  
    </div> 
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
    <label class="required" for="communication">{{ trans('message.job title') }} (Ar)</label>
    <input class="form-control {{ $errors->has('communication') ? 'is-invalid' : '' }}" type="text" name="job_title" id="communication" value="{{ old('communication', '') }}" required>
    @if($errors->has('communication'))
        <div class="invalid-feedback">
            {{ $errors->first('communication') }}
        </div>
    @endif
    
  </div> 
    </div>
  
    <div class="card-body" id="arabic-form">
  <div class="form-group">
    <label class="required" for="leader">{{ trans('message.position') }} (Ar)</label>
    <input class="form-control {{ $errors->has('leader') ? 'is-invalid' : '' }}" type="text" name="position" id="position" value="{{ old('position', '') }}" required>
    @if($errors->has('leader'))
        <div class="invalid-feedback">
            {{ $errors->first('leader') }}
        </div>
    @endif
    
     </div> 
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
    <label class="required" for="cv">{{ trans('message.company') }} (Ar)</label>
    <input class="form-control {{ $errors->has('cv') ? 'is-invalid' : '' }}" type="text" name="company_name" id="cv" value="{{ old('cv', '') }}" required>
    @if($errors->has('cv'))
        <div class="invalid-feedback">
            {{ $errors->first('cv') }}
        </div>
    @endif
    
  </div> 
    </div>

    <div class="card-body" id="arabic-form">
     <div class="form-group" >
      <label class="required" for="job title">{{ trans('message.skills') }} </label>

      <select name="skill[]" multiple style="width:100%">
        @foreach($skills as $skill)
        <option value="{{$skill->id}}">{{$skill->skill}}</option>
      @endforeach        
      </select>
    </div> 
    </div>


    
    <button type="submit" class="btn btn-primary">submit</button> 
    
</form>
@endsection