<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capstone</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
    <!-- Navbar -->
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
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/"><i
                                    class="icon-button bi bi-house"></i> Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/materi"><i class="icon-button bi bi-journals"></i> Materi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-button bi bi-people"></i> Mentoring</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-button bi bi-chat-left"></i> Hubungi
                                kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-button bi bi-question-square"></i> FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="/login" class="login-button">Masuk</a>
            <a href="/register" class="register-button">Daftar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Hero Section -->
    <div class="container-fluid py-2 d-flex justify-content-center align-items-center" style="padding: 80px;">
        <div>
            <div class="fs-2 fw-semibold" style="color: rgba(84, 91, 232, 1);">Selamat datang di Pandusaha!</div>
            <div class="body-text mt-3" style="width: 80%;">
                Platform edukasi terbaik bagi kamu yang ingin mengembangkan bisnis! Dilengkapi video pembelajaran, kuis
                interaktif, serta sesi mentoring dengan para profesional. Ayo, kembangkan bisnismu bersama kami!
            </div>
            <div class="d-flex mt-3">
                <a href="/register" class="register-button">Daftar</a>
                <a href="/login" class="login-button">Masuk</a>
            </div>
        </div>
        <img src="img/Hero.png" alt="Hero Image" style="width: 700px;">
    </div>
    <!-- End Hero Section -->

    <!-- Materi Section -->
    <div class="header-section">
        <div class="fs-2 fw-semibold text-center" style="color: rgba(84, 91, 232, 1);">Jelajahi materi terbaik kami!
        </div>
        <div class="body-text my-3 m-auto text-center" style="width: 60%;">Dengan Pandusaha, akses konten pembelajaran
            interaktif yang akan membantu kamu untuk mengembangkan usaha.</div>
    </div>
    <div class="d-flex justify-content-center m-auto p-2">
        <div class="card mx-4 mb-4" style="width: 22rem;">
            <img src="img/Manajemen.png" class="card-img-top" alt="Manajemen Usaha">
            <div class="card-body">
                <h5 class="card-title">Manajemen Usaha</h5>
                <p class="card-text">Tingkatkan keterampilan manajemen usaha Anda dengan panduan praktis dan strategi
                    efektif.</p>
            </div>
        </div>
        <div class="card mx-4 mb-4" style="width: 22rem;">
            <img src="img/Pemasaran.png" class="card-img-top" alt="Pemasaran dan Penjualan">
            <div class="card-body">
                <h5 class="card-title">Pemasaran dan Penjualan</h5>
                <p class="card-text">Pelajari strategi pemasaran dan penjualan yang efektif untuk meningkatkan
                    visibilitas dan penjualan produk.</p>
            </div>
        </div>
        <div class="card mx-4 mb-4" style="width: 22rem;">
            <img src="img/Inovasi.png" class="card-img-top" alt="Inovasi Teknologi Bisnis">
            <div class="card-body">
                <h5 class="card-title">Inovasi Teknologi Bisnis</h5>
                <p class="card-text">Jelajahi teknologi terbaru yang dapat mengoptimalkan operasional dan mendorong
                    inovasi dalam bisnis Anda.</p>
            </div>
        </div>
    </div>
    <!-- End Materi Section -->

    <!-- Mentoring Section -->
    <div class="header-section d-flex justify-content-end mx-auto align-items-center">
        <img class="mx-5" src="img/Mentor.png" alt="Mentoring Image" style="width: 528px;">
        <div style="width: 50%;">
            <div class="fs-2 fw-semibold" style="color: rgba(84, 91, 232, 1);">Bimbingan Mentor Profesional</div>
            <div class="body-text mt-3" style="width: 75%;">Temukan arah yang tepat untuk bisnis Anda dengan sesi
                mentoring pribadi dari para ahli terbaik di industri. Dapatkan panduan khusus, saran praktis, dan
                wawasan berharga yang akan membantu Anda mengatasi tantangan dan mencapai tujuan bisnis Anda dengan
                lebih cepat. Segera bergabung dengan Pandusaha dan nikmati manfaat dari mentorship yang menginspirasi!
            </div>
        </div>
    </div>
    <!-- End Mentoring Section -->

    <!-- Testimoni -->
    <div class="header-section">
        <div class="fs-2 fw-semibold text-center" style="color: rgba(84, 91, 232, 1)">Apa kata mereka tentang
            Pandusaha!</div>
        <div class="body-text my-3 m-auto text-center" style="width: 60%">
            Temukan bagaimana Pandusaha telah mengubah perjalanan bisnis para pelaku UMKM melalui ulasan dan testimoni
            inspiratif. Dengarkan langsung dari mereka yang telah merasakan manfaat dan kemajuan berkat platform edukasi
            kami.
        </div>
    </div>
    <!-- Card Testi -->
    <div class="d-flex justify-content-center m-auto">
        <div class="card mx-4 mb-4" style="width: 22rem; margin-top: 20px">
            <div class="card-img-top d-flex justify-content-start align-items-center px-3"
                style="height: 4rem; background-color: rgba(84, 91, 232, 1)">
                <i class="fs-2 bi bi-person-circle" style="color: rgba(232, 226, 242, 1)"></i>
                <div class="user-name fs-6 px-2" style="color: rgba(232, 226, 242, 1)">Siti Aisyah</div>
            </div>
            <div class="card-body">
                <p class="card-text">"Platform ini benar-benar membantu saya memahami strategi pemasaran yang efektif.
                    Penjualan produk saya meningkat pesat setelah mengikuti panduan dari Pandusaha!"</p>
            </div>
        </div>
        <div class="card mx-4 mb-4" style="width: 22rem; margin-top: 20px">
            <div class="card-img-top d-flex justify-content-start align-items-center px-3"
                style="height: 4rem; background-color: rgba(84, 91, 232, 1)">
                <i class="fs-2 bi bi-person-circle" style="color: rgba(232, 226, 242, 1)"></i>
                <div class="user-name fs-6 px-2" style="color: rgba(232, 226, 242, 1)">Siti Aisyah</div>
            </div>
            <div class="card-body">
                <p class="card-text">"Platform ini benar-benar membantu saya memahami strategi pemasaran yang efektif.
                    Penjualan produk saya meningkat pesat setelah mengikuti panduan dari Pandusaha!"</p>
            </div>
        </div>
        <div class="card mx-4 mb-4" style="width: 22rem; margin-top: 20px">
            <div class="card-img-top d-flex justify-content-start align-items-center px-3"
                style="height: 4rem; background-color: rgb(83, 91, 238)">
                <i class="fs-2 bi bi-person-circle" style="color: rgba(232, 226, 242, 1)"></i>
                <div class="user-name fs-6 px-2" style="color: rgba(232, 226, 242, 1)">Siti Aisyah</div>
            </div>
            <div class="card-body">
                <p class="card-text">"Platform ini benar-benar membantu saya memahami strategi pemasaran yang efektif.
                    Penjualan produk saya meningkat pesat setelah mengikuti panduan dari Pandusaha!"</p>
            </div>
        </div>
    </div>
    <!--End Hero Section-->
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
                <!-- End  Footer -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>
</body>

</html>
