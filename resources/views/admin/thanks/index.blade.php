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
                  <th>{{ trans('message.name') }}(en)</th>
                  <th>{{ trans('message.name') }}(ar)</th>
                  <th>{{ trans('message.image') }}</th>
                  
                  <th>{{ trans('message.online') }}</th>
                  <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($thanks as $thank)
                <tr>
                  <td>{{ $thank->id }}</td>
                  <td>{{ $thank->translate('en')->name }}</td>
                  <td>{{ $thank->translate('ar')->name }}</td>
                  <td>  <img src="{{asset('./../storage/app/thank/'.$thank->image)}}" style="width:80px;height:80px;"></td>
                  
                  
                  <td>
                  
                  @if($thank->online==1)
                     <span class="label label-success">{{ trans('message.active') }}</span>
                   @else
                     <span class="label label-danger">{{ trans('message.inactive') }}</span>
                   @endif
                   
                   </td>
                   
                   <td>
                   @if($thank->online==1)
               <a class="btn btn-danger" href="{{URL::to('/admin/thank/InActive_thank/'.$thank->id)}}">
                 InActivate<i class="halflings-icon white thumbs-down"></i>
               </a>
               @else
               <a class="btn btn-success" href="{{URL::to('/admin/thank/Active_thank/'.$thank->id)}}">
                Activate	<i class="halflings-icon white thumbs-up"></i>
               </a>
               @endif

                  <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/thank/edit/'.$thank->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                            <a id="delete" class="btn btn-danger" href="{{URL::to('admin/thank/delete/'.$thank->id)}} ">
								<i class="halflings-icon white trash"></i>
							x</a></td>
                </tr>
                @endforeach
                </tbody>
               
              </table>
              <span>{{ $thanks->links() }}</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection