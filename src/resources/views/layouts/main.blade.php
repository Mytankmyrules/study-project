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
    <div class="container mt-3 " id="main-container">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav me-auto mb-4 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/login">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/users/logout">Log Out</a>
                </li>
            </ul>
        <form class="d-flex p-2">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="3000">
            <div class="carousel-inner shadow-sm">
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
    
        <footer class="d-flex flex-wrap justify-content-between align-items-end py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">© 2021 </p>
                <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="/FAQs" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="/about" class="nav-link px-2 text-muted">About</a></li>
                </ul>
        </footer>
    </div>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>
</html>