<?php
include "../../connect/koneksi.php";
include "../../connect/session.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Wizardry</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- STYLE CSS -->
    <link href="../../style/global.css" rel="stylesheet">
    <link href="../../style/style.css" rel="stylesheet">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg sticky-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex" href="index.php">
                <img src="../../images/ww.png" alt="logo" width="20%">
                <h3>Word Wizardry</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="../../materials.php">All materials</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3 active" href="../grammar/grammar.php">Grammar</a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="../speaking/speaking.php">Speaking</a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="../vocabulary/vocabulary.php">Vocabulary</a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="../writing/writing.php">Writing</a>
                    </li>
                    <li class="nav-item"><a class="btn btn-ketiga me-3 mb-md-0" href="../../logout.php" type="button">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--CONTENT 1-->
    <div class="container-fluid py-5 materials">
        <div class="title-section">
            <h3>Grammar Guide Part One (Pronouns and To Be)</h3>
            <p>Pronouns are pronouns used to replace names or nouns. To be (am, is, are) is an auxiliary verb often used with pronouns. Understand how to use pronouns (I, you, we, they) and how to combine them with to be in sentences. Pronouns are pronouns used to replace names or nouns. They help avoid word repetition and make sentences more concise.</p>
            <p>Pronouns adalah kata ganti yang digunakan untuk menggantikan nama atau kata benda. To be (am, is, are) adalah kata kerja bantu yang sering digunakan bersama pronouns. Pahami cara menggunakan pronouns (I, you, we, they) dan bagaimana menggabungkannya dengan to be dalam kalimat. Pronouns adalah kata ganti yang digunakan untuk menggantikan nama atau kata benda. Mereka membantu menghindari pengulangan kata dan membuat kalimat lebih ringkas.</p>
        </div>

        <table class="table table-striped my-5">
            <thead>
                <tr>
                    <th scope="col">Subject Pronouns</th>
                    <th scope="col">Object Pronouns</th>
                    <th scope="col">To Be</th>
                    <th scope="col">Do & Does</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>I</td>
                    <td>Me</td>
                    <td>am</td>
                    <td>Do</td>
                </tr>
                <tr>
                    <td>You</td>
                    <td>You</td>
                    <td>are</td>
                    <td>Do</td>
                </tr>
                <tr>
                    <td>She</td>
                    <td>Her</td>
                    <td>She</td>
                    <td>Does</td>
                </tr>
                <tr>
                    <td>He</td>
                    <td>Him</td>
                    <td>He</td>
                    <td>Does</td>
                </tr>
                <tr>
                    <td>We</td>
                    <td>Us</td>
                    <td>Are</td>
                    <td>Do</td>
                </tr>
                <tr>
                    <td>They</td>
                    <td>Them</td>
                    <td>Are</td>
                    <td>Do</td>
                </tr>
                <tr>
                    <td>It</td>
                    <td>It</td>
                    <td>Is</td>
                    <td>Does</td>
                </tr>
            </tbody>
        </table>

        <div class="row mb-5">
            <div class="col-5">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Uses To Be with Pronouns</li>
                    <li class="list-group-item">I am a student (Saya adalah seorang siswa)</li>
                    <li class="list-group-item">You are my best friend (Kamu adalah sahabat terbaikku)</li>
                    <li class="list-group-item">He is a doctor (Dia adalah seorang dokter)</li>
                    <li class="list-group-item">We are from different countries (Kami berasal dari negara yang berbeda)</li>
                    <li class="list-group-item">They are working on a group project (Mereka sedang bekerja pada proyek kelompok)</li>
                </ul>
            </div>
            <div class="col-7">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Use of dos and does in Positive Sentences</li>
                    <li class="list-group-item">I do my homework every day (Saya mengerjakan PR setiap hari)</li>
                    <li class="list-group-item">You do your best in every competition (Kamu memberikan yang terbaik dalam setiap kompetisi)</li>
                    <li class="list-group-item">She does her job with dedication (Dia menjalankan pekerjaannya dengan penuh dedikasi)</li>
                    <li class="list-group-item">We do the house chores together (Kami mengerjakan pekerjaan rumah bersama-sama)</li>
                    <li class="list-group-item">They do a fantastic job in organizing events (Mereka melakukan pekerjaan yang fantastis dalam mengorganisir acara.)</li>
                </ul>
            </div>
        </div>

        <h5>Tips & Note</h5>
        <ul>
            <li>Use do for subject pronouns (I, you, we, they) and does for he, she, it.</li>
            <li> Use of nots after do or does for negative sentences.</li><br>
            <li>Gunakan do untuk subject pronouns (I, you, we, they) dan does untuk he, she, it.</li>
            <li> penggunaan not setelah do atau does untuk kalimat negatif.</li>
        </ul>

        <h5 class="mt-5">Practice</h5>
        <ul>
            <li>Make a sentence each pronouns 1 sentence</li>
            <li>Make each sentence pronouns 1 sentence using to be</li>
            <li>Make a sentence each pronouns 1 do/does</li>

        </ul>
    </div>

    <!--FOOTER-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container-fluid py-3">
                <div class="row">

                    <div class="col-lg-3 col-md-6 px-5">
                        <div class="footer">
                            <h3 style="color: #5d7bd5;">Word Wizardry</h3>
                            <p>Bandung, Jawa Barat, Indonesia
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4 style="color: #71a5de;">Useful Links</h4>
                        <a href="about.php">About us</a><br>
                        <a href="contact.php">Contact us</a><br>
                        <a href="catalog.php">Our Courses</a>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4 style="color: #71a5de;">Useful Links</h4>
                        <a href="register">Sign Up</a><br>
                        <a href="login">Sign In</a><br>
                        <a href="regulations">Terms of service</a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer">
                            <p>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> contact@WWizardry.com
                            </p>
                        </div>
                        <div>
                            <a href="" class="me-4 text-reset"> <i class="bi bi-facebook"></i>
                            </a> <a href="" class="me-4 text-reset"> <i class="bi bi-twitter"></i>
                            </a> <a href="" class="me-4 text-reset"> <i class="bi bi-instagram"></i>
                            </a> <a href="" class="me-4 text-reset"> <i class="bi bi-linkedin"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="container mt-5">
                    <div class="copyright text-center">
                        &copy; Copyright <strong><span>Word Wizardry</span></strong>. All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <!-- JavaScript & Jquery-->
    <script src="./javascript/javascript.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>

</html>