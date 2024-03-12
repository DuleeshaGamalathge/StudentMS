@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h3>Batch Application</h3>
    </div>
    <div class="card-body">
        <a href="{{url('/batch/create')}}" class="btn btn-success btn-sm" title="Add New Batch">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New
        </a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($batch as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->course_id}}</td>
                            <td>{{$item->start_date}}</td>

                            <td>
                                <a href="{{url('/batch/'.$item->id)}}" title="View Batch"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                <a href="{{url('/batch/'.$item->id. '/edit')}}" title="Edit Batch"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-0" aria-hidden="true"></i>Edit</button></a>

                                <form method="POST" action="{{url('/batch'.'/'.$item->id)}}" accept-charset="UTF-8" style="display:inline">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Batch" onclick="return confirm(&quot; Confirm delete?&quot;)"><i class="fa fa-trash-0" aria-hidden="true"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
