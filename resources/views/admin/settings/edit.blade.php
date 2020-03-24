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


    <div class="box box-info">
        <div class="box-header">
              <h3 class="box-title">{{ trans('message.vision') }} (Ar)</h3>
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
            </div>
          </div>
    

    <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">{{ trans('message.vision') }} (AR) </h3>
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
              
            </div>
    </div>



    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.logo') }}</label>
    <img src="{{asset('./../storage/app/setting/'.$setting->logo)}}">
    <input  type="file" class="form-control"  value="{{ $setting->logo }}"  name="logo"  required>
    </div>

    <div class="form-group">

        <label class="required" for="logo">{{ trans('message.logo') }} 2030</label>
        <img src="{{asset('./../storage/app/setting/'.$setting->logo_2030)}}">
        <input  type="file" class="form-control" value="{{ $setting->logo_2030 }}"  name="logo_2030"  required>
    </div>
    
    <div class="form-group">
        <label class="required" for="logo">{{ trans('message.arflag') }}</label>
        <img src="{{asset('./../storage/app/setting/'.$setting->Ar_flag)}}">
    <input  type="file" class="form-control" value="{{ $setting->Ar_flag }}"  name="Ar_flag"  required>
    </div>

    <div class="form-group">

        <label class="required" for="logo">{{ trans('message.enflag') }}</label>
        <img src="{{asset('./../storage/app/setting/'.$setting->En_flag)}}">
        <input  type="file" class="form-control"  value="{{ $setting->En_flag }}" name="En_flag"  required>
    </div>

    <div class="form-group">
        <label class="required" for="logo">{{ trans('message.backImage') }}</label>
        <img src="{{asset('./../storage/app/setting/'.$setting->back_img)}}">
        <input  type="file" class="form-control" value="{{ $setting->back_img }}"  name="back_img"  required>
    </div>



<button type="submit" class="btn btn-primary">submit</button> 
</div>
</form>
@endsection