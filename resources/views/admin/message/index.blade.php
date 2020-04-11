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
                  <th>{{ trans('message.name') }}</th>
                  <th>{{ trans('message.subject') }}</th>
                  <th>{{ trans('message.email') }}</th>
                  <th>{{ trans('message.message') }}</th>
                  
                  <th colspan="1"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                <tr>
                  <td>{{ $message->id }}</td>
                  <td>{{ $message->name }}</td>
                  <td>{{ $message->subject }}</td>
                  <td>{{ $message->email  }}</td>
                  <td>{{ $message->message }}</td>
                  
                  <td>
                  
                <a id="delete" class="btn btn-danger" href="{{URL::to('admin/message/delete/'.$message->id)}} ">
								<i class="halflings-icon white trash"></i>
	  						x</a></td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
              <span>{{ $messages->links() }}</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection