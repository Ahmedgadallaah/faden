@extends('admin.index')
@section('content')

<form action="{{url ('/admin/job/store') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_title">{{ trans('message.name') }} (EN)</label>
        <input class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" type="text" name="en_title" id="en_title" value="{{ old('en_title', '') }}" required>
        @if($errors->has('en_name'))
            <div class="invalid-feedback">
                {{ $errors->first('en_title') }}
            </div>
        @endif
        
    </div>

    <div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="ar_title">{{ trans('message.title') }} (Ar)</label>
        <input class="form-control {{ $errors->has('ar_title') ? 'is-invalid' : '' }}" type="text" name="ar_title" id="ar_title" value="{{ old('ar_title', '') }}" required>
        @if($errors->has('ar_title'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_title') }}
            </div>
        @endif
        
    </div>



    <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">{{ trans('message.description') }} (En)</h3>
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
              
                    <textarea   class="form-control {{ $errors->has('en_description') ? 'is-invalid' : '' }}" id="en_description"
                         name="en_description" rows="6" cols="80" value="{{ old('en_description', '') }}" required> </textarea>
              
            </div>
        
    </div>

    <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">{{ trans('message.description') }} (Ar)</h3>
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
              
                    <textarea   class="form-control {{ $errors->has('ar_description') ? 'is-invalid' : '' }}" id="ar_description"
                         name="ar_description" rows="6" cols="80" value="{{ old('ar_description', '') }}" required></textarea>
              
            </div>
        
    </div>

    <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">{{ trans('message.requirment') }}</h3>
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
              
                    <textarea   class="form-control {{ $errors->has('en_requirment') ? 'is-invalid' : '' }}" id="en_requirment"
                         name="en_requirment" rows="6" cols="80" value="{{ old('en_requirment', '') }}" required></textarea>
              
            </div>
        
    </div>

    <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">{{ trans('message.requirment') }} (En)</h3>
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
              
                    <textarea   class="form-control {{ $errors->has('ar_requirment') ? 'is-invalid' : '' }}" id="ar_requirment"
                         name="ar_requirment" rows="6" cols="80" value="{{ old('ar_requirment', '') }}" required></textarea>
              
            </div>
        
    </div>


    <div class="form-group">
        <label class="required" for="author">{{ trans('message.author') }} </label>
    <input  type="text" class="form-control"  name="author" required>
    </div>

    
<button type="submit" class="btn btn-primary">submit</button> 
</div>
</div>
</form>
@endsection