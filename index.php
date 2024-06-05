<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Wizardry</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- STYLE CSS -->
    <link href="./style/global.css" rel="stylesheet">
    <link href="./style/style.css" rel="stylesheet">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>

    <!--TOPBAR-->
    <section id="topbar">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <div class="contact-info d-flex flex-column flex-md-row">
                <i class="bi bi-envelope d-flex">
                    <span>contact@WWizardry.com</span>
                </i>
                <i class="bi bi-telephone d-flex align-items-center mt-2 mt-md-0 ms-md-4">
                    <span>+1 5589 55488 55</span>
                </i>
            </div>
            <div class="social-links d-flex mt-2 mt-md-0">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </section>

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg sticky-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex" href="index.php">
                <img src="./images/ww.png" alt="logo" width="20%">
                <h3>Word Wizardry</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link fw-bold me-3 active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="about.php">About us</a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="materials.php">Learning materials</a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item"><a class="btn btn-pertama me-3 mb-md-0" href="login.php" type="button">Sign in</a></li>
                    <li class="nav-item"><a class="btn btn-pertama me-3 mb-md-0" href="register.php" type="button">Sign up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--BANNER-->
    <div class="card bg-dark">
        <img src="./images/banner.png" class="card-img" alt="banner">
        <div class="card-img-overlay">
            <h4 class="card-title">Learn with Word Wizardry!</h4><br>
            <h2 class="card-text">Elevate Your English Skills</h2>
            <h2 class="card-text">Empower Your Future.</h2>
        </div>
    </div>

    <!-- CONTENT 1 -->
    <div class="container listMateri py-5">
        <div class="row align-items-start">
            <div class="col-8">
                <h3>Discover the variety of materials we provide to enrich your English learning</h3>
                <div class="row mt-5">
                    <div class="col-sm-6">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="card-title">Grammar Guide</h5>
                                <p class="card-text">Master the intricacies of English grammar with our comprehensive Grammar Guide.</p>
                                <a href="materials.php" class="btn btn-kedua">Start learning</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="card-title">Vocabulary Builder</h5>
                                <p class="card-text">Expand your word arsenal and enhance your expressiveness with our Vocabulary Builder.</p>
                                <a href="materials.php" class="btn btn-kedua">Start learning</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-sm-6">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="card-title">Writing Corner</h5>
                                <p class="card-text">Unleash your creativity and refine your writing skills in our dedicated Writing Corner.</p>
                                <a href="materials.php" class="btn btn-kedua">Start learning</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="card-title">Speaking Practice</h5>
                                <p class="card-text">Cultivate confident communication by practicing speaking in a supportive environment with our Speaking Practice section.</p>
                                <a href="materials.php" class="btn btn-kedua">Start learning</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <img src="./images/content1.png" alt="content 1 picture" width="100%">
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