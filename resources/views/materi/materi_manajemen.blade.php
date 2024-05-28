<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Capstone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link href="/css/materi.css" rel="stylesheet">
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#"><span class="fw-semibold" style="color: rgba(84, 91, 232, 1)">Pand</span>usaha</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="/"><i class="bi bi-house"></i> Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/materi"><i class="bi bi-journals"></i> Materi</a>
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
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
          <i class="bi bi-person-circle"></i> &nbsp; User
        </button>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
          <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> &nbsp; Pengguna</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Pengaturan</a></li>
          <li><a class="dropdown-item" href="#">Keluar</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--End Navbar-->

  <!-- Materi -->
  <div class="container mt-5 pt-5">
    <div class="card mb-3" style="height: 239.5px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/img/Manajemen.png" class="img-fluid rounded-start" alt="Manajemen Usaha">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Manajemen Usaha</h5>
            <p class="card-text">Pelajari prinsip dan praktik terbaik dalam manajemen usaha untuk memastikan operasional bisnis Anda berjalan lancar. Dari perencanaan strategis hingga pengelolaan sumber daya, materi ini akan membekali Anda dengan keterampilan yang dibutuhkan untuk meningkatkan efisiensi, produktivitas, dan keberhasilan bisnis Anda.</p>
            <a href="/video_manajemen" class="btn btn-primary">Mulai</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="btn-group1" style="width: 85%; margin: 0 auto;">
    <button type="button" class="btn1 btn-secondary dropdown-toggle btn-block" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align: left;font-size: x-large;color: #000000;">
        Perancangan Strategis
    </button>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" style="width: 85%; font-size: large;">
        <li><a class="dropdown-item1" href="#"><i class="bi bi-play-circle"> &nbsp; </i>Visi dan Misi</a></li>
        <li><a class="dropdown-item1" href="#"><i class="bi bi-play-circle"> &nbsp; </i>Analisis Swot</a></li>
        <li><a class="dropdown-item1" href="#"><i class="bi bi-play-circle"> &nbsp; </i>Penetapan dan Jangka Panjang</a></li>
        <li><a class="dropdown-item1" href="#"><i class="bi bi-play-circle"> &nbsp; </i>Penyusunan Rencana</a></li>
    </ul>
  </div>
  <div class="btn-group2" style="width: 85%; margin: 0 auto; margin-top: 150px;">
    <button type="button" class="btn1 btn-secondary dropdown-toggle btn-block" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align: left;font-size: x-large ;color: #000000;">
        Pengelolaan Sumber Daya
    </button>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" style="width: 85%; font-size: large;">
        <li><a class="dropdown-item1" href="#"><i class="bi bi-play-circle"> &nbsp; </i>Manajemen Sumber Daya Manusia</a></li>
        <li><a class="dropdown-item1" href="#"><i class="bi bi-play-circle"> &nbsp; </i>Optimalisasi Teknologi</a></li>
        <li><a class="dropdown-item1" href="#"><i class="bi bi-play-circle"> &nbsp; </i>Pengelolaan Invetaris</a></li>
    </ul>
  </div>
  <!-- End Materi-->

  <!-- ======= Footer ======= -->
  <div class="container-fluid d-flex justify-content-between align-items-center px-5" style="background-color: rgba(232, 226, 242, 1); height: 250px; margin-top: 100px">
    <a class="navbar-brand fs-3" href="#"><span class="fw-semibold" style="color: rgba(84, 91, 232, 1)">Pand</span>usaha</a>
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
      <input class="form-control me-2 mt-2 mb-3" type="search" placeholder="Your email address" aria-label="Search" />
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
