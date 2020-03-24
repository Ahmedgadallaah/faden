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
                  <th>{{ trans('message.name') }} (en)</th>
                  <th>{{ trans('message.name') }}(ar)</th>
                  <th>{{ trans('message.logo') }}</th>
                  <th>{{ trans('message.link') }}</th>
                  <th>{{ trans('message.online') }}</th>
                  <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                <tr>
                  <td>{{ $client->id }}</td>
                  <td>{{ $client->translate('en')->name }}</td>
                  <td>{{ $client->translate('ar')->name }}</td>
                  <td><img src="{{asset('./../storage/app/client/'.$client->logo)}}" style="width:80px;height:80px;"></td>
                  <td>{{ $client->link  }}</td>
                  <td>
                  
							   @if($client->online==1)
							      <span class="label label-success">{{ trans('message.active') }}</span>
						    	@else
						    	  <span class="label label-danger">{{ trans('message.inactive') }}</span>
						    	@endif
						      
                  </td>
                  
                  <td>
                  @if($client->online==1)
							<a class="btn btn-danger" href="{{URL::to('/admin/client/InActive_client/'.$client->id)}}">
								InActivate<i class="halflings-icon white thumbs-down"></i>
							</a>
							@else
							<a class="btn btn-success" href="{{URL::to('/admin/client/Active_client/'.$client->id)}}">
							 Activate	<i class="halflings-icon white thumbs-up"></i>
							</a>
							@endif
							

                    <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/client/edit/'.$client->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                            <a id="delete" class="btn btn-danger" href="{{URL::to('admin/client/delete/'.$client->id)}} ">
								<i class="halflings-icon white trash"></i>
							x</a></td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
              <span>{{ $clients->links() }}</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection