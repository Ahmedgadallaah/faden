@extends('admin.index')
@section('content')

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <p style="color:red"> {{ trans('message.show Album') }} </p>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>{{ trans('message.name') }} (en)</th>
                  <th>{{ trans('message.name') }}(ar)</th>
                  <th>{{ trans('message.featurimage') }}</th>
                  
                  <th>{{ trans('message.online') }}</th>
                  <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                <tr>
                  <td>{{ $service->id }}</td>
                  <td>{{ $service->translate('en')->name }}</td>
                  <td>{{ $service->translate('ar')->name }}</td>
                  <td><a href="{{ URL::to('admin/service/image/'.$service->id) }}"><img src="{{asset('./../storage/app/service/'.$service->image)}}" style="width:80px;height:80px;"></a></td>
                  <td>
                  
                  @if($service->online==1)
                     <span class="label label-success">{{ trans('message.active') }}</span>
                   @else
                     <span class="label label-danger">{{ trans('message.inactive') }}</span>
                   @endif
                   
                   </td>
                   
                   <td>
                   @if($service->online==1)
               <a class="btn btn-danger" href="{{URL::to('/admin/service/InActive_service/'.$service->id)}}">
                 InActivate<i class="halflings-icon white thumbs-down"></i>
               </a>
               @else
               <a class="btn btn-success" href="{{URL::to('/admin/service/Active_service/'.$service->id)}}">
                Activate	<i class="halflings-icon white thumbs-up"></i>
               </a>
               @endif
                  
                  
                  <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/service/edit/'.$service->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                            <a id="delete" class="btn btn-danger" href="{{URL::to('admin/service/delete/'.$service->id)}} ">
								<i class="halflings-icon white trash"></i>
							x</a></td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
              <span>{{ $services->links() }}</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection