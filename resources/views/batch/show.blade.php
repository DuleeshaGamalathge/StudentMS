@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Batch Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $batch->name }}</h5>
        <p class="card-text">Batch Code : {{ $batch->code }}</p>
        <p class="card-text">Start Date : {{ $batch->start_date }}</p>
  </div>

    </hr>

  </div>
</div>

@endsection
