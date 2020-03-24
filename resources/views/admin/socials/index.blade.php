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
                  <th>{{ trans('message.icon') }}</th>
                  <th>{{ trans('message.link') }}</th>
                  <th>{{ trans('message.online') }}</th>
                  <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($socials as $social)
                <tr>
                  <td>{{ $social->id }}</td>
                  <td>  <img src="{{asset('./../storage/app/social/'.$social->icon)}}" style="width:80px;height:80px;"></td>
                  <td>{{ $social->link  }}</td>
                  <td>{{ $social->online }}</td>
                  
                  <td>
                  
                  @if($social->online==1)
                     <span class="label label-success">{{ trans('message.active') }}</span>
                   @else
                     <span class="label label-danger">{{ trans('message.inactive') }}</span>
                   @endif
                   
                   </td>
                   
                   <td>
                   @if($social->online==1)
               <a class="btn btn-danger" href="{{URL::to('/admin/social/InActive_social/'.$social->id)}}">
                 InActivate<i class="halflings-icon white thumbs-down"></i>
               </a>
               @else
               <a class="btn btn-success" href="{{URL::to('/admin/social/Active_social/'.$social->id)}}">
                Activate	<i class="halflings-icon white thumbs-up"></i>
               </a>
               @endif

                  <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/social/edit/'.$social->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                            <a id="delete" class="btn btn-danger" href="{{URL::to('admin/social/delete/'.$social->id)}} ">
								<i class="halflings-icon white trash"></i>
							x</a></td>
                </tr>
                @endforeach
                </tbody>
                <span>{{ $socials->links() }}</span>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection