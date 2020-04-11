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
                  <th>{{ trans('message.title') }} (en)</th>
                  <th>{{ trans('message.title') }} (ar)</th>
                   <th>{{ trans('message.department') }}(en)</th>
                  <th>{{ trans('message.department') }}(ar)</th>
                  <th>{{ trans('message.online') }}</th>
                  <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($hierarchyDetails as $hierarchyDetail)
                <tr>
                  <td>{{ $hierarchyDetail->id }}</td>
  
                  <td>{{ $hierarchyDetail->translate('en')->title}}</td>
                  <td>{{ $hierarchyDetail->translate('ar')->title}}</td>
                  
                  <td>{{ $hierarchyDetail->department->translate('en')->title}}</td>
                  <td>{{ $hierarchyDetail->department->translate('ar')->title}}</td>
                  <td>    
                  @if($hierarchyDetail->online==1)
                     <span class="label label-success">{{ trans('message.active') }} </span>
                   @else
                     <span class="label label-danger">{{ trans('message.inactive') }}</span>
                   @endif
                   
                   </td>
                   
                   <td>
                   @if($hierarchyDetail->online==1)
               <a class="btn btn-danger" href="{{URL::to('/admin/hierarchyDetail/InActive_hierarchyDetail/'.$hierarchyDetail->id)}}">
                 InActivate<i class="halflings-icon white thumbs-down"></i>
               </a>
               @else
               <a class="btn btn-success" href="{{URL::to('/admin/hierarchyDetail/Active_hierarchyDetail/'.$hierarchyDetail->id)}}">
                Activate	<i class="halflings-icon white thumbs-up"></i>
               </a>
               @endif  
                  <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/hierarchyDetail/edit/'.$hierarchyDetail->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                            <a id="delete" class="btn btn-danger" href="{{URL::to('admin/hierarchyDetail/delete/'.$hierarchyDetail->id)}} ">
								<i class="halflings-icon white trash"></i>
							x</a></td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
              <span>{{ $hierarchyDetails->links() }}</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection