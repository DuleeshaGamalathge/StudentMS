@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h3>Teacher Application</h3>
    </div>
    <div class="card-body">
        <a href="{{url('/teachers/create')}}" class="btn btn-success btn-sm" title="Add New Teacher">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New
        </a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->mobile}}</td>

                            <td>
                                <a href="{{url('/teachers/'.$item->id)}}" title="View Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                <a href="{{url('/teachers/'.$item->id. '/edit')}}" title="Edit Teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-0" aria-hidden="true"></i>Edit</button></a>

                                <form method="POST" action="{{url('/teachers'.'/'.$item->id)}}" accept-charset="UTF-8" style="display:inline">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot; Confirm delete?&quot;)"><i class="fa fa-trash-0" aria-hidden="true"></i>Delete</button>
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
