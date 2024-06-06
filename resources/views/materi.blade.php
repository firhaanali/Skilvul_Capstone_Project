<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capstone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#"><span class="fw-semibold" style="color: rgba(84, 91, 232, 1)">Pand</span>usaha</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
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
                        <i class="icon-button bi bi-chat-left"></i>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hubungi kami</a>
                        </li>
                        <i class="icon-button bi bi-question-square"></i>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>

            @if(Auth::check())
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> &nbsp;{{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> &nbsp;Pengguna</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Keluar
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div class="btn-group">
                    <a class="btn btn-primary" href="{{ route('login') }}">
                        <i class="bi bi-person-circle"></i> &nbsp;Login
                    </a>
                </div>
            @endif

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!--End Navbar-->

    <!--Hero Section-->
    <div class="container-fluid py-2 d-flex justify-content-center align-items-center" style="padding: 80px">
        <img src="img/Hero.png" alt="" style="width: 700px" />
        <div>
            <div class="fs-2 fw-semibold" style="color: rgba(84, 91, 232, 1)">Jelajahi materi terbaik kami!</div>
            <div class="body-text mt-3" style="width: 80%">
                Temukan berbagai materi edukatif yang telah kami siapkan khusus untuk membantu Anda mengembangkan
                bisnis. Dari manajemen usaha hingga strategi pemasaran, semua ada di sini untuk mendukung perjalanan
                sukses Anda. Mari mulai belajar dan tingkatkan keterampilan Anda bersama Pandusaha!
            </div>
        </div>
    </div>

    <!-- Materi Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <a href="/materi/manajemen" style="text-decoration: none; color: inherit;">
                    <div class="card mb-10">
                        <img src="/img/Manajemen.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Manajemen Usaha</h5>
                            <p class="card-text">Tingkatkan keterampilan manajemen usaha Anda dengan panduan praktis dan
                                strategi efektif.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <a href="/materi/video" style="text-decoration: none; color: inherit;">
                    <div class="card">
                        <img src="img/Pemasaran.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Pemasaran dan Penjualan</h5>
                            <p class="card-text">Pelajari strategi pemasaran dan penjualan yang efektif untuk
                                meningkatkan visibilitas dan penjualan produk.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <a href="index.html" style="text-decoration: none; color: inherit;">
                    <div class="card">
                        <img src="img/Inovasi.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Teknologi dan Inovasi Bisnis</h5>
                            <p class="card-text">Jelajahi teknologi terbaru yang dapat mengoptimalkan operasional dan
                                mendorong inovasi dalam bisnis Anda.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card 4 -->
            <div class="col-md-4">
                <a href="index.html" style="text-decoration: none; color: inherit;">
                    <div class="card">
                        <img src="img/Branding.jpg" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Branding Produk</h5>
                            <p class="card-text">Pelajari cara membangun identitas merek yang kuat dan unik untuk
                                produk Anda.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4">
                <a href="index.html" style="text-decoration: none; color: inherit;">
                    <div class="card">
                        <img src="img/Kolab.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Kolaborasi Tim</h5>
                            <p class="card-text">Tingkatkan produktivitas bisnis dengan membangun tim yang solid dan
                                berkolaborasi secara efektif.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4">
                <a href="index.html" style="text-decoration: none; color: inherit;">
                    <div class="card">
                        <img src="img/Keuangan.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Keuangan dan Akuntansi</h5>
                            <p class="card-text">Kuasai dasar-dasar pengelolaan keuangan untuk bisnis Anda. Dari
                                pembukuan hingga analisis keuangan.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--End Materi Section-->

    <!-- ======= Footer ======= -->
    <div class="container-fluid d-flex justify-content-between align-items-center px-5"
        style="background-color: rgba(232, 226, 242, 1); height: 250px; margin-top: 60px">
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
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
