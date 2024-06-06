<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capstone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="/css/vid.css" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#"><span class="fw-semibold"
                    style="color: rgba(84, 91, 232, 1)">Pand</span>usaha</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <i class="icon-button bi bi-house"></i>
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Beranda</a>
                        </li>
                        <i class="icon-button bi bi-journals"></i>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/materi">Materi</a>
                        </li>
                        <i class="icon-button bi bi-people"></i>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mentoring</a>
                        </li>
                        <i class="icon-button bi bi bi-chat-left"></i>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hubungi kami</a>
                        </li>
                        <i class="icon-button bi bi bi-question-square"></i>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-display="static" aria-expanded="false">
                    <i class="bi bi-person-circle"></i> &nbsp;User
                </button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> &nbsp;Pengguna</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                    <li><a class="dropdown-item-keluar" href="#">Keluar</a></li>
                </ul>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
    <!--End Navbar-->

    <!-- Materi -->
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card" style="width: 800px;height: 530px;">
                    <div class="card-body">
                        <video controls class="w-100" style="width: 450px; height: 450px;">
                            <source src="/img/tutorial.mp4" type="video/mp4">
                        </video>
                        <h5 class="card-title">Perancangan Strategis</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Materi-->

    <!-- Button Group -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <a href="#" class="btn btn-secondary btn-block">
                    <i class="bi bi-arrow-left"></i>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="/materi/quiz" class="btn btn-primary btn-block">Mulai</a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="#" class="btn btn-secondary btn-block">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- End Button Group -->



    <!-- ======= Footer ======= -->
    <div class="container-fluid d-flex justify-content-between align-items-center px-5"
        style="background-color: rgba(232, 226, 242, 1); height: 250px; margin-top: 100px">
        <a class="navbar-brand fs-3" href="#"><span class="fw-semibold"
                style="color: rgba(84, 91, 232, 1)">Pand</span>usaha</a>
        <div class="d-flex justify-content-between align-items-start">
            <div class="d-row justify-content-center text-start mx-5">
                <div class="fs-5 fw-semibold py-2">Support</div>
                <div class="fs-6 py-1">
                    123 Happy street <br />
                    anywhere
                </div>
                <div class="fs-6 py-1">pandusaha@gmail.com</div>
                <div class="fs-6 py-1">+62812345698</div>
            </div>
            <div class="d-row justify-content-center text-start mx-5">
                <div class="fs-5 fw-semibold py-2">Account</div>
                <div class="fs-6 py-1">Login/Register</div>
                <div class="fs-6 py-1">My Account</div>
                <div class="fs-6 py-1">Forgot Passwoed</div>
            </div>
            <div class="d-row justify-content-center text-start mx-5">
                <div class="fs-5 fw-semibold py-2">Quick link</div>
                <div class="fs-6 py-1">Privacy Policy</div>
                <div class="fs-6 py-1">Terms Of Use</div>
                <div class="fs-6 py-1">FAQ</div>
            </div>
        </div>
        <div class="d-row justify-content-center text-start mx-5">
            <div class="fs-5 fw-semibold py-2">Stay Up To Date</div>
            <input class="form-control me-2 mt-2 mb-3" type="search" placeholder="Your email address"
                aria-label="Search" />
            <div class="social d-flex justify-content-between align-items-start my-2">
                <i class="fs-3 bi bi-instagram"></i>
                <i class="fs-3 bi bi-linkedin"></i>
                <i class="fs-3 bi bi-youtube"></i>
                <i class="fs-3 bi bi-discord"></i>
            </div>
        </div>
    </div>
    <!-- End  Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
