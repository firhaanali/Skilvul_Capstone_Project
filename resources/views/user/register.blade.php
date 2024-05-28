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
                            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/materi">Materi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mentoring</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hubungi kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
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
    <!--End Navbar-->

    <!--Login-->
    <div class="container signup-container">
        <div class="row">
            <div class="col-md-6">
                <img src="/img/Hero.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="signup-form">
                    <h2 class="text-center">Daftar Sekarang</h2>
                    <form id="registerForm" class="space-y-4 md:space-y-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="phone" name="no_telp" placeholder="Nomor Telepon" required>
                            <label for="phone">Nomor Telepon</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pengguna" required>
                            <label for="nama">Nama Pengguna</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <label for="password">Kata Sandi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
                            <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    </form>
                    <large>Sudah memiliki akun? <a href="/login" class="text-dark">masuk!</a></large>
                </div>
            </div>
        </div>
    </div>
    <!--End Daftar-->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#registerForm').on('submit', function(e) {
                e.preventDefault();

                var password = $('#password').val();
                var password_confirmation = $('#password_confirmation').val();

                if (password !== password_confirmation) {
                    alert('Kata sandi dan konfirmasi kata sandi tidak cocok.');
                    return;
                }

                var formData = {
                    email: $('#email').val(),
                    no_telp: $('#phone').val(),
                    nama: $('#nama').val(),
                    password: password,
                    password_confirmation: password_confirmation
                };

                $.ajax({
                    type: 'POST',
                    url: '/api/user/register',
                    data: JSON.stringify(formData),
                    contentType: 'application/json',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response); // Log response to check success
                        alert('User registered successfully');
                        window.location.href = '/'; // Redirect to index page
                    },
                    error: function(response) {
                        console.log(response); // Log response to check error
                        var errors = response.responseJSON.errors || response.responseJSON.message;
                        var errorMessage = 'Error: ';
                        for (var key in errors) {
                            if (errors.hasOwnProperty(key)) {
                                errorMessage += errors[key].join("\n") + "\n";
                            }
                        }
                        alert(errorMessage);
                    }
                });
            });
        });
    </script>
</body>

</html>
