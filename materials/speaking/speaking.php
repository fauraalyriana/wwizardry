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
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="../grammar/grammar.php">Grammar</a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3 active" href="../speaking/speaking.php">Speaking</a>
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
    <div class="container-fluid py-5 materials2">
        <div class="title-section">
            <h3>Speaking Practice</h3>
            <p>Effective speaking skills in English encompass not only grammatical correctness but also the ability to articulate thoughts clearly and confidently. Building a strong vocabulary is essential for varied and precise expression during conversations. Engaging in regular conversations with native speakers or language partners helps enhance pronunciation, fluency, and overall spoken language proficiency.
                Additionally, active listening is a crucial aspect of proficient speaking. Paying attention to intonation, rhythm, and common expressions used by native speakers aids in understanding and emulating natural conversational patterns. Regular practice, whether through discussions, debates, or presentations, contributes significantly to honing one's speaking abilities. Embracing mistakes as part of the learning process and seeking feedback from language mentors or peers can further accelerate improvement. Ultimately, effective speaking involves not only mastering grammar rules but also developing the confidence and skill to express oneself fluently in diverse real-life situations.</p>
        </div>

        <div class="row mt-5">
            <div class="col-6">
                <div class="card mb-3" style="max-width: 600px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../../images/english.jpg" class="img-fluid rounded-start" alt="English lesson">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-center" style="color: #8671e1;">Speaking Practice Part One</h5>
                                <p class="card-text">In the first part we will learn about Introduction and Personal Information</p>
                                <a class="btn btn-keempat me-3 mb-md-0" href="part1.php" type="button">View material</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-3" style="max-width: 600px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../../images/english.jpg" class="img-fluid rounded-start" alt="English lesson">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-center" style="color: #8671e1;">Speaking Practice Part Two</h5>
                                <p class="card-text">In this part we will learn about Subject-Verb Agreement</p>
                                <a class="btn btn-keempat me-3 mb-md-0" href="part2.php" type="button">View material</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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