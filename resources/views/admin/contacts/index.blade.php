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
                  <th>{{ trans('message.fax') }}</th>
                  <th>{{ trans('message.mobile') }}</th>
                  <th>{{ trans('message.email') }}</th>
                  <th>{{ trans('message.map') }}</th>
                  <th>{{ trans('message.map') }}</th>
                  
                  <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                <tr>
                  <td>{{ $contact->id }}</td>
                  <td>{{ $contact->fax }}</td>
                  <td>{{ $contact->mobile }}</td>
                  <td>{{ $contact->email  }}</td>
                  <td>{{ $contact->map_KSA }}</td>
                  <td>{{ $contact->map_EG }}</td>
                
                  
                  <td>
                
             
              <a id="delete" class="btn btn-primary" href="{{URL::to('/admin/contact/edit/'.$contact->id)}} ">
								<i class="halflings-icon white trash"></i>
                            Edit</a>
                   </td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
              <span>{{ $contacts->links() }}</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection