@extends('admin.index')
@section('content')

<form action="{{url ('/admin/client/store') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_name">{{ trans('message.name') }} (EN)</label>
        <input class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" type="text" name="en_name" id="en_name" value="{{ old('en_name', '') }}" required>
        @if($errors->has('en_name'))
            <div class="invalid-feedback">
                {{ $errors->first('en_name') }}
            </div>
        @endif
        
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.name') }} (Ar)</label>
        <input class="form-control {{ $errors->has('ar_name') ? 'is-invalid' : '' }}" type="text" name="ar_name" id="ar_name" value="{{ old('ar_name', '') }}" required>
        @if($errors->has('ar_name'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_name') }}
            </div>
        @endif
        
    </div>

    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.logo') }}</label>
    <input  type="file" class="form-control"  name="logo"  required>
    </div>
    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.link') }} </label>
    <input  type="text" class="form-control"  name="link" required>
    </div>
   

<button type="submit" class="btn btn-primary">submit</button> 
</div>
</form>
@endsection