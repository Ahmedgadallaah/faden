@extends('admin.index')
@section('content')

<form action="{{url ('/admin/skill/store') }}" method="post" >
{{ csrf_field() }}


<div class="card-body" id="arabic-form">
    <div class="form-group">
        <label class="required" for="skill">{{ trans('message.skill') }}</label>
        <input class="form-control {{ $errors->has('skill') ? 'is-invalid' : '' }}" type="text" name="skill" id="skill" value="{{ old('skill', '') }}" required>
        @if($errors->has('skill'))
            <div class="invalid-feedback">
                {{ $errors->first('skill') }}
            </div>
        @endif
        
    </div>
</div>

<button type="submit" class="btn btn-primary">submit</button> 

</form>
@endsection