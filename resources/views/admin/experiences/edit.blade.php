@extends('admin.index')
@section('content')

<form action="{{URL::to('/admin/experience/edit/'.$experience->id) }}" method="post" >

{{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="experience">{{ trans('message.experience') }} (EN)</label>
        <input class="form-control {{ $errors->has('experience') ? 'is-invalid' : '' }}" type="text" name="experience" id="experience" value="{{ $experience->experience  }}" required>
        @if($errors->has('experience'))
            <div class="invalid-feedback">
                {{ $errors->first('experience') }}
            </div>
        @endif
        
    </div>

    
</div>

<button type="submit" class="btn btn-primary">submit</button> 

</form>
@endsection