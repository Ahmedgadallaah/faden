@extends('admin.index')
@section('content')

<form action="{{url ('/admin/contact/store') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_name">{{ trans('message.fax') }}  </label>
        <input class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" type="text" name="fax" id="fax" value="{{ old('fax', '') }}" required>
        @if($errors->has('en_name'))
            <div class="invalid-feedback">
                {{ $errors->first('en_name') }}
            </div>
        @endif
        
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.mobile') }} </label>
        <input class="form-control {{ $errors->has('ar_name') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{ old('mobile', '') }}" required>
        @if($errors->has('mobile'))
            <div class="invalid-feedback">
                {{ $errors->first('mobile') }}
            </div>
        @endif
        
    </div>

    <div class="form-group">
        <label class="required" for="email">{{ trans('message.email') }}  </label>
    <input  type="email" class="form-control"  name="email"  required>
    </div>
    <div class="form-group">
        <label class="required" for="map">{{ trans('message.map') }} </label>
    <input  type="text" class="form-control"  name="map" required>
    </div>
    
<button type="submit" class="btn btn-primary">submit</button> 
</div>
</form>
@endsection