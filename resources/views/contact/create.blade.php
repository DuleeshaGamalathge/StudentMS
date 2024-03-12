@extends('landing')
@section('form')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center px-5 mx-5 border-info">
                    <div class="card-header"><h3>Register Page</h3></div>
                    <div class="card-body px-5 mx-5">

                        <form action="{{ route('register') }}" method="post">
                          {!! csrf_field() !!}
                          <label>Name</label></br>
                          <input type="text" name="name" id="name" class="form-control"></br>
                          <label>Email</label></br>
                          <input type="email" name="email" id="email" class="form-control"></br>
                          <label>Password</label></br>
                          <input type="password" name="password" id="password" class="form-control"></br>
                          <input type="submit" value="Register" class="btn btn-success"></br>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


