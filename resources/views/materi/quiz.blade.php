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
                            <a class="nav-link active" aria-current="page" href="/materi"><i class="bi bi-journals"></i>
                                Materi</a>
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

    <!-- Materi -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="question-card p-4">
                    <div id="question1" class="question active">
                        <h5>Pertanyaan 1</h5>
                        <p>Apa yang dimaksud dengan Visi dalam perencanaan Strategis</p>
                        <div class="answer-option" tabindex="0">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="answer1" value="A"
                                    onchange="markAnswered(1)">
                                <span class="form-check-label">Pernyataan Tentang Tujuan Jangka Pendek Perusahaan</span>
                            </label>
                        </div>
                        <div class="answer-option" tabindex="0">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="answer1" value="B"
                                    onchange="markAnswered(1)">
                                <span class="form-check-label">Deskripsi tentang apa yang ingin dicapai perusahaan di
                                    masa depan</span>
                            </label>
                        </div>
                        <div class="answer-option" tabindex="0">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="answer1" value="C"
                                    onchange="markAnswered(1)">
                                <span class="form-check-label">Analisis kelemahan internal perusahaan</span>
                            </label>
                        </div>
                        <div class="answer-option" tabindex="0">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="answer1" value="D"
                                    onchange="markAnswered(1)">
                                <span class="form-check-label">Rencana taktis untuk satu tahun ke depan</span>
                            </label>
                        </div>
                    </div>

                    <div id="question2" class="question d-none">
                        <h5>Pertanyaan 2</h5>
                        <p>Apa yang dimaksud dengan Misi dalam perencanaan Strategis</p>
                        <div class="answer-option" tabindex="0">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="answer2" value="A"
                                    onchange="markAnswered(2)">
                                <span class="form-check-label">Pernyataan tentang apa yang akan dilakukan
                                    perusahaan</span>
                            </label>
                        </div>
                        <div class="answer-option" tabindex="0">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="answer2" value="B"
                                    onchange="markAnswered(2)">
                                <span class="form-check-label">Tujuan jangka panjang perusahaan</span>
                            </label>
                        </div>
                        <div class="answer-option" tabindex="0">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="answer2" value="C"
                                    onchange="markAnswered(2)">
                                <span class="form-check-label">Analisis kekuatan internal perusahaan</span>
                            </label>
                        </div>
                        <div class="answer-option" tabindex="0">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="answer2" value="D"
                                    onchange="markAnswered(2)">
                                <span class="form-check-label">Rencana strategis untuk lima tahun ke depan</span>
                            </label>
                        </div>
                    </div>
                </div>
                <button id="submitQuiz" class="btn btn-primary mt-3 d-none">Submit Quiz</button>
                <div id="result" class="d-none mt-3"></div>
            </div>
            <div class="col-md-4">
                <div class="pagination-card p-4 bg-primary">
                    <div class="pagination-buttons">
                        <div class="number-buttons">
                            <button id="btn-1" class="btn btn-light" onclick="showQuestion(1)">1</button>
                            <button id="btn-2" class="btn btn-light" onclick="showQuestion(2)">2</button>
                            <button id="btn-3" class="btn btn-light">3</button>
                            <button id="btn-4" class="btn btn-light">4</button>
                            <button id="btn-5" class="btn btn-light">5</button>
                            <button id="btn-6" class="btn btn-light">6</button>
                            <button id="btn-7" class="btn btn-light">7</button>
                            <button id="btn-8" class="btn btn-light">8</button>
                            <button id="btn-9" class="btn btn-light">9</button>
                            <button id="btn-10" class="btn btn-light">10</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Materi -->



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
    <script>
        const totalQuestions = 2; // Update this number based on the total number of questions

        function markAnswered(questionNumber) {
            const btn = document.getElementById(`btn-${questionNumber}`);
            btn.classList.remove('btn-light');
            btn.classList.add('btn-answered');
        }

        function showQuestion(questionNumber) {
            const questions = document.querySelectorAll('.question');
            questions.forEach((question) => {
                question.classList.add('d-none');
            });

            const selectedQuestion = document.getElementById(`question${questionNumber}`);
            selectedQuestion.classList.remove('d-none');

            const submitButton = document.getElementById('submitQuiz');
            if (questionNumber == totalQuestions) {
                submitButton.classList.remove('d-none');
            } else {
                submitButton.classList.add('d-none');
            }
        }

        document.querySelectorAll('.form-check-input').forEach((input) => {
            input.addEventListener('change', (event) => {
                const questionNumber = event.target.name.replace('answer', '');
                markAnswered(questionNumber);
            });
        });

        document.querySelectorAll('.number-buttons button').forEach((button) => {
            button.addEventListener('click', (event) => {
                const questionNumber = event.target.innerText;
                showQuestion(questionNumber);
            });
        });

        document.getElementById('submitQuiz').addEventListener('click', function() {
            const answers = {
                'answer1': 'B', // Correct answer for question 1
                'answer2': 'D' // Correct answer for question 2
            };
            let score = 0;
            for (const [question, correctAnswer] of Object.entries(answers)) {
                const userAnswer = document.querySelector(`input[name="${question}"]:checked`);
                if (userAnswer && userAnswer.value === correctAnswer) {
                    score += 1;
                }
            }
            localStorage.setItem('quizScore', score);
            localStorage.setItem('totalQuestions', Object.keys(answers).length);
            window.location.href = '{{ route('materi.score') }}'; // Redirect to result page
        });
    </script>
</body>

</html>
