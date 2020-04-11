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
                  <th>{{ trans('message.name') }} </th>
                 
                  <th>{{ trans('message.vision') }} </th>
                 
                  <th>{{ trans('message.logo') }}</th>
                  
                  <th>{{ trans('message.backImage') }}</th>
                  <th>{{ trans('message.arflag') }}</th>
                  <th>{{ trans('message.enflag') }}</th>
                  <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($settings as $setting)
                <tr>
                  <td>{{ $setting->id }}</td>
                  <td>{{ $setting->name }}</td>

                  <td>{{ $setting->vision }}</td>
                  <td><img src="{{asset('./../storage/app/setting/'.$setting->logo)}}" style="width:60px;height:60px;"></td>
                  
                  <td><img src="{{asset('./../storage/app/setting/'.$setting->back_img)}}" style="width:60px;height:60px;"></td>
                  <td><img src="{{asset('./../storage/app/setting/'.$setting->Ar_flag)}}" style="width:60px;height:60px;"></td>
                  <td><img src="{{asset('./../storage/app/setting/'.$setting->En_flag)}}" style="width:60px;height:60px;"></td>
                  
                   
                   <td>
                 
                  <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/setting/edit/'.$setting->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                </tr>
                @endforeach
                </tbody>
                <span>{{ $settings->links() }}</span>
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