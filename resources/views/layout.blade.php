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
                <div class="text-center py-3">
                    <h1>STUDENT MANAGEMENT SYSTEM</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="d-flex sidebar flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
                    <div class="text-center">
                        <h3>Dasboard</h3>
                        {{-- <a href="{{url('/register')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                            <span class="fs-4">Register</span>
                          </a>
                          <a href="{{url('/login')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                              <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                              <span class="fs-4">Login</span>
                          </a> --}}
                    </div>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                      <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link active" aria-current="page">
                          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                          Home
                        </a>
                      </li>
                      <li>
                        <a href="{{url('/students')}}" class="nav-link text-white">
                          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                          Student
                        </a>
                      </li>
                      <li>
                        <a href="{{url('/teachers')}}" class="nav-link text-white">
                          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                          Teacher
                        </a>
                      </li>
                      <li>
                        <a href="{{url('/courses')}}" class="nav-link text-white">
                          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                          Courses
                        </a>
                      </li>
                      <li>
                        <a href="{{url('/batch')}}" class="nav-link text-white">
                          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                          Batch
                        </a>
                      </li>
                      <li>
                        <a href="#" class="nav-link text-white">
                          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                          Enrollment
                        </a>
                      </li>
                      <li>
                        <a href="#" class="nav-link text-white">
                          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                          Payment
                        </a>
                      </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>Admin</strong>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="{{url('/register')}}">Register</a></li>
                        <li><a class="dropdown-item" href="{{url('/login')}}">Login</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{url('/landing')}}">Sign out</a></li>
                      </ul>
                    </div>
                  </div>
            </div>
            <div class="col-md-9 ps-5">
                    @yield('content')
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
