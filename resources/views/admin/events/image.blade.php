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
                  <th>{{ trans('message.image') }}</th>
                  
                
                </tr>
                </thead>
                <tbody>
            
                @foreach($event->eventDetails as $image)
                <tr>
                  <td>{{  $image->detail_Id }}</td>
                  <td><img src="{{URL::to('./../storage/app/event/'.$image->images)}}" style="width:80px;height:80px;"></td>
              
                </tr>
                @endforeach
                </tbody>
                
              </table>
              <span></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection