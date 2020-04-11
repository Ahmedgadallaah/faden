@extends('admin.index')
@section('content')

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>{{ trans('message.skill') }} </th>
                  <th>{{ trans('message.online') }}</th>
                  <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($skills as $skill)
                <tr>
                  <td>{{ $skill->id }}</td>
                  <td>{{ $skill->skill }}</td>
                  <td>
							   @if($skill->online==1)
							      <span class="label label-success">{{ trans('message.active') }}</span>
						    	@else
						    	  <span class="label label-danger">{{ trans('message.inactive') }}</span>
						    	@endif
                  </td>
                  
                  <td>
                  @if($skill->online==1)
							<a class="btn btn-danger" href="{{URL::to('/admin/skill/InActive_skill/'.$skill->id)}}">
								InActivate<i class="halflings-icon white thumbs-down"></i>
							</a>
							@else
							<a class="btn btn-success" href="{{URL::to('/admin/skill/Active_skill/'.$skill->id)}}">
							 Activate	<i class="halflings-icon white thumbs-up"></i>
							</a>
							@endif
							

                    <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/skill/edit/'.$skill->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                            <a id="delete" class="btn btn-danger" href="{{URL::to('admin/skill/delete/'.$skill->id)}} ">
								<i class="halflings-icon white trash"></i>
							x</a></td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
              <span>{{ $skills->links() }}</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection