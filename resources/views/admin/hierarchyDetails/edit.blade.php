@extends('admin.index')
@section('content')

<form action="{{URL::to('/admin/hierarchyDetail/edit/'.$hierarchyDetail->id) }}" method="post"  >

{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_title">{{ trans('message.name') }} (EN)</label>
        <input class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" type="text" name="en_title" value="{{$hierarchyDetail->translate('en')->title }}"  id="en_title"  required>
        @if($errors->has('en_name'))
            <div class="invalid-feedback">
                {{ $errors->first('en_title') }}
            </div>
        @endif
        
    </div>
</div>

    <div class="card-body" id="arabic-form">
        <div class="form-group">
          <label class="required" for="ar_title">{{ trans('message.name') }} (Ar)</label>
          <input class="form-control {{ $errors->has('ar_title') ? 'is-invalid' : '' }}" type="text" value="{{$hierarchyDetail->translate('ar')->title}}"  name="ar_title" id="ar_title"  required>
          @if($errors->has('ar_title'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_title') }}
            </div>
          @endif
        </div>
    </div>
    

    <div class="card-body" id="arabic-form">
    <div class="form-group" >
      <label class="required" for="location">{{ trans('message.department') }} </label>  
      <select name="department_id"  style="width:100%">
        @foreach ($departments as $department)
      <option value="{{ $department->id}}">{{$department->title}}</option>
       @endforeach
     </select> 
    </div>  
    </div>


    
    
<button type="submit" class="btn btn-primary">submit</button> 


</form>
@endsection