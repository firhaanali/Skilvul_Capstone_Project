<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capstone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="/css/quiz.css" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#"><span class="fw-semibold"
                    style="color: rgba(84, 91, 232, 1)">Pand</span>usaha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/home"><i class="bi bi-house"></i> Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/materi"><i
                                    class="bi bi-journals"></i> Materi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-people"></i> Mentoring</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-chat-left"></i> Hubungi kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-question-square"></i> FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-display="static" aria-expanded="false">
                    <i class="bi bi-person-circle"></i> &nbsp; User
                </button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> &nbsp; Pengguna</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                    <li><a class="dropdown-item" href="#">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar-->



    <!-- materi -->
    <div class="container-fluid py-2 d-flex justify-content-center align-items-center" style="padding: 80px">
        <img src="/img/Hero.png" alt="" style="width: 700px">
        <div>
            <div class="fs-2 fw-semibold" style="color: rgb(0, 0, 0)">Dear,[Nama User]</div>
            <div class="body-text mt-3 " style="width: 80%; margin-bottom: 30px; ">
                Selamat! Anda telah menyelesaikan kuis dengan skor yang luar biasa. Prestasi ini menunjukkan dedikasi
                Anda dalam mempelajari manajemen usaha. Teruslah belajar dan tingkatkan keterampilan Anda bersama
                Pandusaha untuk mencapai kesuksesan bisnis yang lebih besar. Kami bangga dengan pencapaian Anda!
            </div>
            <div id="result" class="text-center fw-bold" style="margin-right: 550px;"></div>
        </div>
    </div>
    </div>

    <!-- end materi -->


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
                <div class="fs-6 py-1">Forgot Password</div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="/js/skor.js"></script>





</body>

</html>
