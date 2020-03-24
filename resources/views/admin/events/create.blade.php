@extends('admin.index')
@section('content')

 <form action="{{url ('/admin/event/store') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
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

    <div class="form-group">
        <label class="required" for="logo">{{ trans('message.image') }}</label>
        <input  type="file" class="form-control"  name="image"  required>
        
    </div>
   
    <div class="form-group">
    <label class="required" for="logo">{{ trans('message.images') }}</label>
        <input type="file" class="form-control"  name="images[]" id="file" accept="image/*" multiple />
    </div>

        
<button type="submit" class="btn btn-primary">submit</button> 
</div>
</form>



@endsection


