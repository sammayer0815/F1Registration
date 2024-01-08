<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/main.min.css') }}" rel="stylesheet">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--  -->
    <link href="{{ URL::asset('css/app.css'); }} " rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- navbar -->
    <nav class="navbar navbar-expand-md bg-f1red">
        <div class="container-xxl">
            <!-- Home logo/anchor -->
            <a href="/" class="navbar-brand">
                <span class="fw-bold text-white">
                    <i class="bi bi-stopwatch"></i>
                    F1 Application
                </span>
            </a>

            <!-- toggle btn for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
            aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navbar links -->
            <div id="main-nav" class="collapse navbar-collapse justify-content-end align-center">
                <ul class="navbar-nav column-gap-3">
                    <li class="nav-item">
                        <a href="/all-races" class="nav-link text-white">All Races</a>
                    </li>
                    <li class="nav-item">
                        <a href="/upcoming-race" class="nav-link text-white">Upcoming Race</a>      
                    </li>
                    <li class="nav-item">
                        <a href="/profile" class="nav-link text-white">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link text-white">Contact</a>
                    </li>

                    <!-- Backend: sessions -->
                    <!-- Big screen nav login btn -->
                    <li class="nav-item ms-5 d-none d-md-inline">
                        <a href="/login" class="btn btn-dark">Login</a>
                    </li>
                    <!-- Dropmenu login -->
                    <li class="nav-item d-md-none">
                        <a href="/login" class="nav-link text-white">Login</a>
                    </li>

                    <!-- Big screen nav logout btn -->
                    <!-- <li class="nav-item ms-5 d-none d-md-inline">
                        <a href="" class="btn btn-dark">Logout</a>
                    </li> -->
                    <!-- Dropmenu logout -->
                    <!-- <li class="nav-item d-md-none">
                        <a href="" class="nav-link text-white">Logout</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>