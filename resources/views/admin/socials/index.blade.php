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
                  
                  
                  <th>{{ trans('message.link') }}</th>
                  
                  <th colspan="1"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($socials as $social)
                <tr>

                  
                  <td>{{ $social->link  }}</td>
                  
                  
               
                   <td>
                   
                  <a id="Edit" class="btn btn-primary " href="{{URL::to('/admin/social/edit/'.$social->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                            </td>
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