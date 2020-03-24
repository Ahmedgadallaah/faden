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
                @foreach($partners as $partner)
                <tr>
                  <td>{{ $partner->id }}</td>
                  <td>{{ $partner->translate('en')->name }}</td>
                  <td>{{ $partner->translate('ar')->name }}</td>
                  <td><img src="{{asset('./../storage/app/partner/'.$partner->logo)}}" style="width:80px;height:80px;"></td>
                  <td>{{ $partner->link  }}</td>
                  
                  <td>
                  
                  @if($partner->online==1)
                     <span class="label label-success">{{ trans('message.active') }}</span>
                   @else
                     <span class="label label-danger">{{ trans('message.inactive') }}</span>
                   @endif
                   
                   </td>
                   
                   <td>
                   @if($partner->online==1)
               <a class="btn btn-danger" href="{{URL::to('/admin/partner/InActive_partner/'.$partner->id)}}">
                 InActivate<i class="halflings-icon white thumbs-down"></i>
               </a>
               @else
               <a class="btn btn-success" href="{{URL::to('/admin/partner/Active_partner/'.$partner->id)}}">
                Activate	<i class="halflings-icon white thumbs-up"></i>
               </a>
               @endif
                  <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/partner/edit/'.$partner->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                            <a id="delete" class="btn btn-danger" href="{{URL::to('admin/partner/delete/'.$partner->id)}} ">
								<i class="halflings-icon white trash"></i>
							x</a></td>
                </tr>
                @endforeach
                </tbody>
            
            
              </table>
              <span>{{ $partners->links() }}</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection