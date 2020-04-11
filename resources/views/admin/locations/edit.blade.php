@extends('admin.index')
@section('content')

<form action="{{URL::to('/admin/location/edit/'.$location->id) }}" method="post" >

{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_location">{{ trans('message.location') }} (EN)</label>
        <input class="form-control {{ $errors->has('en_location') ? 'is-invalid' : '' }}" type="text" name="en_location" id="en_location" value="{{ $location->translate('en')->location  }}" required>
        @if($errors->has('en_location'))
            <div class="invalid-feedback">
                {{ $errors->first('en_location') }}
            </div>
        @endif
        
    </div>
</div>

<div class="card-body" id="arabic-form">
    <div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="ar_location">{{ trans('message.location') }} (Ar)</label>
        <input class="form-control {{ $errors->has('ar_location') ? 'is-invalid' : '' }}" type="text" name="ar_location" id="ar_location" value="{{$location->translate('ar')->location }}" required>
        @if($errors->has('ar_location'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_location') }}
            </div>
        @endif
        
    </div>
    </div>

<button type="submit" class="btn btn-primary">submit</button> 

</form>
@endsection