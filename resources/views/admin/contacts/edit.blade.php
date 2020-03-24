@extends('admin.index')
@section('content')

<form action="{{URL::to('/admin/contact/edit/'.$contact->id) }}" method="post" enctype="multipart/form-data" >

{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="fax">{{ trans('message.fax') }} (EN)</label>
        <input class="form-control {{ $errors->has('fax') ? 'is-invalid' : '' }}" type="text" name="fax" id="fax" value="{{ $contact->fax  }}" required>
        @if($errors->has('fax'))
            <div class="invalid-feedback">
                {{ $errors->first('fax') }}
            </div>
        @endif
        
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="mobile">{{ trans('message.mobile') }} (Ar)</label>
        <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{$contact->mobile }}" required>
        @if($errors->has('mobile'))
            <div class="invalid-feedback">
                {{ $errors->first('mobile') }}
            </div>
        @endif
        
    </div>

    <div class="form-group">
    
        <label class="required" for="email">{{ trans('message.email') }}</label>
   
    <input  type="email" class="form-control" value="{{ $contact->email }}"   name="email"  required>
    </div>
    <div class="form-group">
        <label class="required" for="map">{{ trans('message.map') }} </label>
    <input  type="text" class="form-control" value="{{ $contact->map }}"  name="map" required>
    </div>

<button type="submit" class="btn btn-primary">submit</button> 
</div>
</form>
@endsection