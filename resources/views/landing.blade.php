<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Active/current link */
        .sidebar a.active {
        background-color: #04AA6D;
        color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center px-5 py-2 m-5 border-info">
                    <div class="card-header text-bg-info">
                      Welcome!
                    </div>
                    <div class="card-body mx-5 px-5">
                      <h5 class="card-title">As a Admin</h5>
                      @yield('message')
                      <p class="card-text"></p>
                      <a href="{{url('/register')}}" class="btn btn-primary text-center px-3 mx-3">
                            <span class="fs-4">Register</span>
                      </a>
                      <a href="{{url('/login')}}" class="btn btn-primary text-center px-3 mx-3">
                        <span class="fs-4">Login</span>
                      </a>
                    </div>
                    <div class="card-footer text-body-secondary">

                    </div>
                  </div>
                  @yield('form')
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
