@extends('admin.index')
@section('content')

<form action="{{URL::to('/admin/setting/edit/'.$setting->id) }}" method="post" enctype="multipart/form-data" >

{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_name">{{ trans('message.name') }} (EN)</label>
        <input class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" type="text" name="en_name" id="en_name" value="{{ $setting->translate('en')->name  }}" required>
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
        <input class="form-control {{ $errors->has('ar_name') ? 'is-invalid' : '' }}" type="text" name="ar_name" id="ar_name" value="{{$setting->translate('en')->name }}" required>
        @if($errors->has('ar_name'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_name') }}
            </div>
        @endif
        
        </div>
    </div>

    <div class="card-body" id="arabic-form">
    <div class="box box-info">
        <div class="box-header">
              <h3 class="box-title">{{ trans('message.Who We Are') }} (EN)</h3>
              <!-- tools box -->
            <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                    <textarea   class="form-control {{ $errors->has('en_vision') ? 'is-invalid' : '' }}" id="editor1" name="en_vision" rows="6" cols="80" value="{{ old('en_vision', '') }}" required>{{ $setting->translate('ar')->vision  }}</textarea>    
                    @if($errors->has('en_vision'))
                    <div class="invalid-feedback">
                        {{ $errors->first('en_vision') }}
                    </div>
                @endif
                </div>
          </div>
    </div>
    <div class="card-body" id="arabic-form">
    <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">{{ trans('message.Who We Are') }} (AR) </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                    <textarea   class="form-control {{ $errors->has('ar_vision') ? 'is-invalid' : '' }}" id="editor1" name="ar_vision" rows="6" cols="80" value="{{ old('ar_name', '') }}" required>{{$setting->translate('ar')->vision }}</textarea>
                    @if($errors->has('ar_vision'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ar_vision') }}
                    </div>
                @endif
            </div>
    </div>

    </div>
    <div class="card-body" id="arabic-form">
<img src="{{asset('./../storage/app/setting/'.$setting->logo)}}" style="width:80px;height:80px;">
    </div>

    <div class="card-body" id="arabic-form">
<div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.logo') }}</label>
    
    <input  type="file" class="form-control {{ $errors->has('logo') ? 'is-invalid' : '' }}"  value="{{ $setting->logo }}" accept="image/*"  name="logo"  >
    @if($errors->has('logo'))
    <div class="invalid-feedback">
        {{ $errors->first('logo') }}
    </div>
@endif
    </div>
    </div>

    <button type="submit" class="btn btn-primary">submit</button> 

    <input  type="file" hidden class="form-control" value="{{ $setting->logo_2030 }}" accept="image/*"  name="logo_2030" >
    <input  type="file" hidden class="form-control" value="{{ $setting->Ar_flag }}" accept="image/*" name="Ar_flag"  >
    <input hidden type="file" class="form-control"  value="{{ $setting->En_flag }}" accept="image/*" name="En_flag"  >
    <input hidden type="file" class="form-control" value="{{ $setting->back_img }}" accept="image/*"  name="back_img"  >





</div>
</form>
@endsection