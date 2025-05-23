<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>

    <link href="https://bootswatch.com/5/sketchy/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
        data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1"> </span>JomarThecool</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home">About US</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/skills">Skills</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/motto">Motto</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          COR
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/corJun">Jomar Jacob</a></li>
                          <li><a class="dropdown-item" href="/corMarc">Myrick Noel B. Clemente</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Grade
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/gradeJun">Jomar Jacob</a></li>
                            <li><a class="dropdown-item" href="/gradeMarc">Myrick Noel B. Clemente</a></li>
                        </ul>
                    </li>

                    @guest()


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @endguest
                    @auth()
                        <li class="nav-item">
                            <a class="btn btn-success btn-sm" href=" {{route('profile')}} " >{{Auth::user()->name}}</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">Logout</button>
                            </form>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>

    {{--  --}}
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
