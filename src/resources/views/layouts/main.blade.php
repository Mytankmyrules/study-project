<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3" id="main-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Rooms</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">BA</a>
                            <a class="dropdown-item" href="#">DEV</a>
                            <a class="dropdown-item" href="#">QA</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Flud</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/users/logout">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/images/ad.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/images/plain.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/images/birds.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
</div>

        @yield('content')
                
    </div>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="piblic/js/bootstrap.bundle.js"></script>
</body>
</html>