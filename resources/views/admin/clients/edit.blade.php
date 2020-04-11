@extends('admin.index')
@section('content')

<form action="{{URL::to('/admin/client/edit/'.$client->id) }}" method="post" enctype="multipart/form-data">

{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_name">{{ trans('message.name') }} (EN)</label>
        <input class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" type="text" name="en_name" id="en_name" value="{{ $client->translate('en')->name  }}" required>
        @if($errors->has('en_name'))
            <div class="invalid-feedback">
                {{ $errors->first('en_name') }}
            </div>
        @endif
        
    </div>
</div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.name') }} (Ar)</label>
        <input class="form-control {{ $errors->has('ar_name') ? 'is-invalid' : '' }}" type="text" name="ar_name" id="ar_name" value="{{$client->translate('ar')->name }}" required>
        @if($errors->has('ar_name'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_name') }}
            </div>
        @endif
        
    </div>
    </div>
    <div class="card-body" id="arabic-form">
        <img src="{{asset('./../storage/app/client/'.$client->logo)}}" style="width:80px;height:80px;">
    </div>
<div class="card-body" id="arabic-form">    
<div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.logo') }}</label>
    <input  type="file" class="form-control {{ $errors->has('logo') ? 'is-invalid' : '' }}"   name="logo" accept="image/*" >
    @if($errors->has('logo'))
    <div class="invalid-feedback">
        {{ $errors->first('logo') }}
    </div>
@endif
    </div>
</div>
<div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.link') }} </label>
    <input  type="text" class="form-control {{ $errors->has('link') ? 'is-invalid' : '' }}" value="{{ $client->link }}"  name="link" required>
    @if($errors->has('link'))
    <div class="invalid-feedback">
        {{ $errors->first('link') }}
    </div>
@endif
    </div>
</div>

<button type="submit" class="btn btn-primary">submit</button> 
</div>
</form>
@endsection