@extends('admin.index')
@section('content')

<form action="{{url ('/admin/job/store') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="card-body" id="english-form">



    <div class="form-group" >
      <label class="required" for="job title">{{ trans('message.job-tile') }} </label>

      <select name="title_id" style="width:100%">
        @foreach($titles as $title)
        <option value="{{$title->id}}">{{$title->title}}</option>
      @endforeach        
      </select>
    </div>
</div>
<div class="card-body" id="arabic-form">
    <div class="form-group" >
      <label class="required" for="client-name">{{ trans('message.client-name') }} </label>

      <select name="client_id" style="width:100%">
        @foreach($clients as $client)
        <option value="{{$client->id}}">{{$client->name}}</option>
      @endforeach        
      </select>
    </div>
</div>
<div class="card-body" id="arabic-form">
      <div class="form-group" >
        <label class="required" for="location">{{ trans('message.location') }} </label>  
        <select name="location_id" style="width:100%">
          @foreach ($locations as $location)
        <option value="{{ $location->id}}">{{$location->location}}</option>
         @endforeach
       </select> 
      </div>  
</div>
<div class="card-body" id="arabic-form">
      <div class="form-group" >
        <label class="required" for="experiences-years">{{ trans('message.experiences-years') }} </label>  
        <select name="experience_id" style="width:100%">
        @foreach ($experiences as $experience)
          <option value="{{ $experience->id}}">{{$experience->experience}}</option>
        @endforeach
        </select> 
      </div>
</div>
<div class="card-body" id="arabic-form">
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
                         @if($errors->has('en_description'))
                         <div class="invalid-feedback">
                             {{ $errors->first('en_description') }}
                         </div>
                     @endif
            </div>
        
    </div>
</div>
<div class="card-body" id="arabic-form">
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
                         @if($errors->has('ar_description'))
                         <div class="invalid-feedback">
                             {{ $errors->first('ar_description') }}
                         </div>
                     @endif
            </div>
        
    </div>
</div>
<div class="card-body" id="arabic-form">
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
                         @if($errors->has('en_requirment'))
                         <div class="invalid-feedback">
                             {{ $errors->first('en_requirment') }}
                         </div>
                     @endif
            </div>
        
    </div>

</div>
<div class="card-body" id="arabic-form">
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
                         @if($errors->has('ar_requirment'))
                         <div class="invalid-feedback">
                             {{ $errors->first('ar_requirment') }}
                         </div>
                     @endif
            </div>        
    </div>
</div>



<div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="author">{{ trans('message.author') }} </label>
    <input  type="text" class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}" value="faden" hidden  name="author" required>
    @if($errors->has('author'))
    <div class="invalid-feedback">
        {{ $errors->first('author') }}
    </div>
@endif
    </div>

</div>
    
<button type="submit" class="btn btn-primary">submit</button> 
</div>
</div>
</form>
@endsection