@extends('admin.index')
@section('content')

<form action="{{url ('/admin/setting/store') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_name">{{ trans('message.name') }} (EN)</label>
        <input class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" type="text" name="en_name" id="en_name" value="{{ old('en_name', '') }}" required>
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
        <input class="form-control {{ $errors->has('ar_name') ? 'is-invalid' : '' }}" type="text" name="ar_name" id="ar_name" value="{{ old('ar_name', '') }}" required>
        @if($errors->has('ar_name'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_name') }}
            </div>
        @endif
        
    </div>
 </div>



    <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">{{ trans('message.vision') }} (EN)</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                    <textarea   class="form-control {{ $errors->has('en_vision') ? 'is-invalid' : '' }}" id="editor" name="en_vision" rows="6" cols="80" value="{{ old('en_vision', '') }}" required></textarea>
              
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
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                    <textarea   class="form-control {{ $errors->has('ar_vision') ? 'is-invalid' : '' }}" id="editor1" name="ar_vision" rows="6" cols="80" value="{{ old('ar_name', '') }}" required>
                              
                    </textarea>
                    @if($errors->has('ar_vision'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ar_vision') }}
                    </div>
                @endif
            </div>
    </div>

          






    <div class="form-group">
        <label class="required" for="logo">{{ trans('message.logo') }}</label>
    <input  type="file" class="form-control {{ $errors->has('logo') ? 'is-invalid' : '' }}"  name="logo" accept="image/*" required>
    @if($errors->has('logo'))
    <div class="invalid-feedback">
        {{ $errors->first('logo') }}
    </div>
@endif
    </div>
    
    <div class="form-group">
        <label class="required" for="logo">{{ trans('message.logo') }} 2030</label>
    <input  type="file" class="form-control {{ $errors->has('logo_2030') ? 'is-invalid' : '' }}"  name="logo_2030" accept="image/*"  required>
    </div>
    
    <div class="form-group">
        <label class="required" for="logo">{{ trans('message.arflag') }}</label>
    <input  type="file" class="form-control{{ $errors->has('Ar_flag') ? 'is-invalid' : '' }}"  name="Ar_flag" accept="image/*"  required>
    </div>

    <div class="form-group">
        <label class="required" for="logo">{{ trans('message.enflag') }}</label>
    <input  type="file" class="form-control{{ $errors->has('En_flag') ? 'is-invalid' : '' }}"  name="En_flag" accept="image/*" required>
    </div>

    <div class="form-group">
        <label class="required" for="logo">{{ trans('message.backImage') }}</label>
    <input  type="file" class="form-control {{ $errors->has('back_img') ? 'is-invalid' : '' }}"  name="back_img" accept="image/*"  required>
    @if($errors->has('back_img'))
    <div class="invalid-feedback">
        {{ $errors->first('back_img') }}
    </div>
@endif
    </div>

<button type="submit" class="btn btn-primary">submit</button> 

</form>
@endsection