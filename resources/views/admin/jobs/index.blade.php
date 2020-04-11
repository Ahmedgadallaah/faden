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
                  <th>{{ trans('message.description') }} (en)</th>
                  <th>{{ trans('message.description') }} (ar)</th>
                  
                   <th>{{ trans('message.client') }}(en)</th>
                  <th>{{ trans('message.client') }}(ar)</th>
                  <th>{{ trans('message.location') }}(en)</th>
                  <th>{{ trans('message.location') }}(ar)</th>
                  <th>{{ trans('message.experience') }}</th>
                  <th>{{ trans('message.online') }}</th>
                  <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($jobs as $job)
                <tr>
                  <td>{{ $job->id }}</td>
                 
                  <td>{{ $job->title->translate('en')->title}}</td>
                  <td>{{ $job->title->translate('ar')->title}}</td>
                  <td>{{ $job->translate('en')->description }}</td>
                  <td>{{ $job->translate('ar')->description }}</td>
                  <td>{{ $job->client->translate('en')->name}}</td>
                  <td>{{ $job->client->translate('ar')->name}}</td>
                  <td>{{ $job->location->translate('en')->location}}</td> 
                  <td>{{ $job->location->translate('ar')->location}}</td>
                  <td>{{ $job->experience->experience}}</td>
                  
                  <td>
                  
                  
                  @if($job->online==1)
                     <span class="label label-success">{{ trans('message.active') }} </span>
                   @else
                     <span class="label label-danger">{{ trans('message.inactive') }}</span>
                   @endif
                   
                   </td>
                   
                   <td>
                   @if($job->online==1)
               <a class="btn btn-danger" href="{{URL::to('/admin/job/InActive_job/'.$job->id)}}">
                 InActivate<i class="halflings-icon white thumbs-down"></i>
               </a>
               @else
               <a class="btn btn-success" href="{{URL::to('/admin/job/Active_job/'.$job->id)}}">
                Activate	<i class="halflings-icon white thumbs-up"></i>
               </a>
               @endif  
                  <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/job/edit/'.$job->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                            <a id="delete" class="btn btn-danger" href="{{URL::to('admin/job/delete/'.$job->id)}} ">
								<i class="halflings-icon white trash"></i>
							x</a></td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
              <span>{{ $jobs->links() }}</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection