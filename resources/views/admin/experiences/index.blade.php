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
                  <th>{{ trans('message.experience') }}</th>                  
                  <th>{{ trans('message.online') }}</th>
                  <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($experiences as $experience)
                <tr>
                  <td>{{ $experience->id }}</td>
                  
                  <td>{{ $experience->experience }}</td>
                  <td>
							   @if($experience->online==1)
							      <span class="label label-success">{{ trans('message.active') }}</span>
						    	@else
						    	  <span class="label label-danger">{{ trans('message.inactive') }}</span>
						    	@endif
                  </td>
                  
                  <td>
                  @if($experience->online==1)
							<a class="btn btn-danger" href="{{URL::to('/admin/experience/InActive_experience/'.$experience->id)}}">
								InActivate<i class="halflings-icon white thumbs-down"></i>
							</a>
							@else
							<a class="btn btn-success" href="{{URL::to('/admin/experience/Active_experience/'.$experience->id)}}">
							 Activate	<i class="halflings-icon white thumbs-up"></i>
							</a>
							@endif
							

                    <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/experience/edit/'.$experience->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                            <a id="delete" class="btn btn-danger" href="{{URL::to('admin/experience/delete/'.$experience->id)}} ">
								<i class="halflings-icon white trash"></i>
							x</a></td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
              <span>{{ $experiences->links() }}</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection