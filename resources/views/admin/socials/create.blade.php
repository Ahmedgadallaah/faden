@extends('admin.index')
@section('content')

<form action="{{url ('/admin/social/store') }}" method="post" >
{{ csrf_field() }}

<div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.icon') }}</label>
    <input  type="text" class="form-control {{ $errors->has('icon') ? 'is-invalid' : '' }}"   name="icon"  required>
    @if($errors->has('icon'))
    <div class="invalid-feedback">
        {{ $errors->first('icon') }}
    </div>
@endif
    </div>
</div>

<div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.link') }} </label>
    <input  type="text" class="form-control {{ $errors->has('link') ? 'is-invalid' : '' }}"  name="link" required>
    @if($errors->has('link'))
    <div class="invalid-feedback">
        {{ $errors->first('link') }}
    </div>
@endif
    </div>
</div>
<button type="submit" class="btn btn-primary">submit</button> 

</form>
@endsection