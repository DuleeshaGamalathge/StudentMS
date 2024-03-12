@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Batch Page</div>
  <div class="card-body">

      <form action="{{ url('batch/' .$batch->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batch->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$batch->name}}" class="form-control"></br>
        <label>Course ID</label></br>
        <input type="text" name="course_id" id="course_id" value="{{$batch->code}}" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" value="{{$batch->duration}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
