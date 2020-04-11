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
                  <th>{{ trans('message.address') }} </th>
                  <th>{{ trans('message.phone') }} </th>
                  <th>{{ trans('message.email') }} </th>
                  <th>{{ trans('message.university') }} </th>
                  
                   <th>{{ trans('message.city') }}</th>
                  <th>{{ trans('message.gpa') }}</th>
                  
                  
                  <th>{{ trans('message.cv') }}</th>
                  
                  <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($officers as $officer)
                <tr>
                  <td>{{ $officer->id }}</td>
           
                  <td>{{ $officer->address}}</td>
                  <td>{{ $officer->phone}}</td>
                  <td>{{ $officer->email }}</td>
                  
                  <td>{{ $officer->university}}</td>
                  <td>{{ $officer->city}}</td>
                  <td>{{ $officer->Gpa}}</td>
                  
                  
                
                    <td>
                        <a href="{{asset('./../storage/app/officer/'.$officer->cv)}}" download="{{$officer->email}}">
                          {{ $officer->cv}}
                        </a>
                    </td>
                  
                  
                   
                   <td>
              
               <a id="delete" class="btn btn-danger" href="{{URL::to('admin/officer/delete/'.$officer->id)}} ">
								<i class="halflings-icon white trash"></i>
							Delete</a></td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
              <span>{{ $officers->links() }}</span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection