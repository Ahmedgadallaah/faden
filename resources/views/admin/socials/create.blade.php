@extends('admin.index')
@section('content')

<form action="{{url ('/admin/social/store') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}


    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.icon') }}</label>
    <input  type="file" class="form-control"  name="icon"  required>
    </div>
    <div class="form-group">
        <label class="required" for="ar_name">{{ trans('message.link') }} </label>
    <input  type="text" class="form-control"  name="link" required>
    </div>

<button type="submit" class="btn btn-primary">submit</button> 
</div>
</form>
@endsection