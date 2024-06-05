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
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="../speaking/speaking.php">Speaking</a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3 active" href="../vocabulary/vocabulary.php">Vocabulary</a>
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
            <h3>Vocabulary</h3>
            <p>
                Vocabulary development is a crucial aspect of English language proficiency, contributing to effective communication. It involves strategies such as extensive reading across diverse genres to encounter words in various contexts and maintaining a vocabulary journal to record, review, and reinforce new terms. Thematic learning, focusing on specific areas of interest, and interactive methods like flashcards further enhance vocabulary, providing individuals with a nuanced and versatile linguistic toolkit for accurate expression and comprehension.</p>
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
                                <h5 class="card-title text-center" style="color: #8671e1;">Vocabulary Part One</h5>
                                <p class="card-text">In this section contains vocabulary Thematic Word Lists: Jobs and Professions</p>
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
                                <h5 class="card-title text-center" style="color: #8671e1;">Vocabulary Part Two</h5>
                                <p class="card-text">In this section contains vocabulary Thematic Word Lists: Daily Life</p>
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