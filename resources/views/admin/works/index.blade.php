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
                  <th>{{ trans('message.image') }}</th>
                  
                  <th>{{ trans('message.online') }}</th>
                  <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($works as $work)
                <tr>
                  <td>{{ $work->id }}</td>
                  <td>{{ $work->translate('en')->name }}</td>
                  <td>{{ $work->translate('ar')->name }}</td>
                  <td>  <img src="{{asset('./../storage/app/work/'.$work->image)}}" style="width:80px;height:80px;"></td>
                  
                  
                  <td>
                  
                  @if($work->online==1)
                     <span class="label label-success">{{ trans('message.active') }}</span>
                   @else
                     <span class="label label-danger">{{ trans('message.inactive') }}</span>
                   @endif
                   
                   </td>
                   
                   <td>
                   @if($work->online==1)
               <a class="btn btn-danger" href="{{URL::to('/admin/work/InActive_work/'.$work->id)}}">
                 InActivate<i class="halflings-icon white thumbs-down"></i>
               </a>
               @else
               <a class="btn btn-success" href="{{URL::to('/admin/work/Active_work/'.$work->id)}}">
                Activate	<i class="halflings-icon white thumbs-up"></i>
               </a>
               @endif
                  
                  <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/work/edit/'.$work->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                            <a id="delete" class="btn btn-danger" href="{{URL::to('admin/work/delete/'.$work->id)}} ">
								<i class="halflings-icon white trash"></i>
							x</a></td>
                </tr>
                @endforeach
                </tbody>
               
              </table>
              <span>{{ $works->links() }}</span>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection