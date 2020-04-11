@extends('admin.index')
@section('content')

<form action="{{URL::to('/admin/title/edit/'.$title->id) }}" method="post" enctype="multipart/form-data" >

{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_title">{{ trans('message.name') }} (EN)</label>
        <input class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" type="text" name="en_title" id="en_title" value="{{ $title->translate('en')->title  }}" required>
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
        <input class="form-control {{ $errors->has('ar_title') ? 'is-invalid' : '' }}" type="text" name="ar_title" id="ar_title" value="{{$title->translate('ar')->title }}" required>
        @if($errors->has('ar_title'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_title') }}
            </div>
        @endif
        
    </div>
    </div>
    <div class="card-body" id="arabic-form">
<img src="{{asset('./../storage/app/title/'.$title->image)}}" style="height:80px;width:80px;">
    
    </div>
    <div class="card-body" id="arabic-form">
<div class="form-group">
    <label class="required" for="image">{{ trans('message.image') }}</label>
    <input  type="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"   name="image" accept="image/*"  >
    @if($errors->has('image'))
    <div class="invalid-feedback">
        {{ $errors->first('image') }}
    </div>
@endif
    </div>
    </div>
    

<button type="submit" class="btn btn-primary">submit</button> 
</form>
@endsection