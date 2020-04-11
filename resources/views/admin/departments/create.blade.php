@extends('admin.index')
@section('content')

<form action="{{url ('/admin/department/store') }}" method="post">
{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_title">{{ trans('message.name') }} (EN)</label>
        <input class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" type="text" name="en_title" id="en_title" value="{{ old('en_title', '') }}" required>
        @if($errors->has('en_title'))
            <div class="invalid-feedback">
                {{ $errors->first('en_title') }}
            </div>
        @endif
    </div>
</div>
<div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="ar_title">{{ trans('message.name') }} (Ar)</label>
        <input class="form-control {{ $errors->has('ar_title') ? 'is-invalid' : '' }}" type="text" name="ar_title" id="ar_title" value="{{ old('ar_title', '') }}" required>
        @if($errors->has('ar_title'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_title') }}
            </div>
        @endif        
    </div>
</div>
<button type="submit" class="btn btn-primary">submit</button> 
</div>
</form>
@endsection