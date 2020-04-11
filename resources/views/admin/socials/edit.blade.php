@extends('admin.index')
@section('content')

<form action="{{URL::to('/admin/social/edit/'.$social->id) }}" method="post" >

{{ csrf_field() }}
{{-- <div class="card-body" id="english-form">
  

    <div class="form-group">
        
    <label class="required" for="ar_name">{{ trans('message.icon') }}</label>
    <input  type="text" class="form-control" readonly value="{{ $social->icon }}"   name="icon"  >
    </div> --}}
    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.link') }} </label>
    <input  type="text" class="form-control {{ $errors->has('link') ? 'is-invalid' : '' }}" value="{{ $social->link }}"  name="link" required>
    @if($errors->has('link'))
    <div class="invalid-feedback">
        {{ $errors->first('link') }}
    </div>
@endif
    </div>
    

<button type="submit" class="btn btn-primary">submit</button> 

</form>
@endsection