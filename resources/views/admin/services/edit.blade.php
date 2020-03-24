@extends('admin.index')
@section('content')

<form action="{{URL::to('/admin/service/edit/'.$service->id) }}" method="post" enctype="multipart/form-data" >

{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_name">{{ trans('message.name') }} (EN)</label>
        <input class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" type="text" name="en_name" id="en_name" value="{{ $service->translate('en')->name  }}" required>
        @if($errors->has('en_name'))
            <div class="invalid-feedback">
                {{ $errors->first('en_name') }}
            </div>
        @endif
        
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.name') }} (Ar)</label>
        <input class="form-control {{ $errors->has('ar_name') ? 'is-invalid' : '' }}" type="text" name="ar_name" id="ar_name" value="{{$service->translate('ar')->name }}" required>
        @if($errors->has('ar_name'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_name') }}
            </div>
        @endif
        
    </div>

    <div class="box box-info">
        <div class="box-header">
              <h3 class="box-title">{{ trans('message.name') }} En </h3>
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
              
                    <textarea   class="form-control {{ $errors->has('en_description') ? 'is-invalid' : '' }}" id="editor1" name="en_description" rows="6" cols="80" value="{{ old('en_description', '') }}" required>{{ $service->translate('en')->description  }}</textarea>
              
            </div>
        </div>
    </div>
    

    <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">{{ trans('message.description') }} Ar </h3>
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
              
                    <textarea   class="form-control {{ $errors->has('ar_description') ? 'is-invalid' : '' }}" id="editor1" name="ar_description" rows="6" cols="80" value="{{ old('ar_description', '') }}" required>{{$service->translate('ar')->description }}</textarea>
              
            </div>
    </div>

    <div class="form-group">
    
        <label class="required" for="ar_name">{{ trans('message.image') }}</label>
   <img src="{{asset('./../storage/app/service/'.$service->image)}}">
    <input  type="file" class="form-control"   name="image"  required>
    </div>
    <div class="form-group">
        <label class="required" for="logo">{{ trans('message.images') }}</label>
    <input  type="file" class="form-control"  name="images[]" multiple  required>
    </div>
    

<button type="submit" class="btn btn-primary">submit</button> 
</div>
</form>
@endsection