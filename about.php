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
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3  active" href="about.php">About us</a>
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

    <!--CONTENT 1-->
    <div class="container-fluid py-5">
        <div class="row about">
            <div class="col-6">
                <img src="./images/about.png" class="img-fluid rounded-image" alt="Rounded Image">
            </div>
            <div class="col-6 about-content">
                <h5>About Word Wizardry</h5>
                <h2>Where Learning English Becomes an Adventure.</h2>
                <p>At Word Wizardry, we believe that the power of words can open doors to an infinite world of knowledge, creativity, and communication. As a community of language learners, we are committed to providing an enjoyable learning experience and empowering individuals to hone their English skills.</p>

                <h4 class="mt-5">Our Mission</h4>
                <p>
                    Our mission at Word Wizardry is to provide innovative, inspirational, and accessible learning resources to advance English language skills. We believe that every word has its own magic, and we want to help you master the art of communication through words.
                </p>

                <p>
                    Join the Word Wizardry community and discover the magic of words with us. Let's explore the world of English together and hone your communication skills. Happy learning! </p>
            </div>
        </div>
    </div>

    <!-- CONTENT 2 -->
    <div class="container my-5">
        <div class="title-section mb-5 text-center">
            <h3>Let's meet our team & teacher!</h3>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card border">
                    <img src="./images/people/person1.png" class="card-img-top" alt="Teacher">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8671e1;">Maria Rodriguez</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ea deleniti assumenda, non itaque tempora.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border">
                    <img src="./images/people/person2.png" class="card-img-top" alt="Teacher">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8671e1;">Natasha Patel</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ea deleniti assumenda, non itaque tempora.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border">
                    <img src="./images/people/person3.png" class="card-img-top" alt="Teacher">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8671e1;">Daniel Martinez</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ea deleniti assumenda, non itaque tempora.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border">
                    <img src="./images/people/person4.png" class="card-img-top" alt="Teacher">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8671e1;">Emily Johnson</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ea deleniti assumenda, non itaque tempora.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border">
                    <img src="./images/people/person5.png" class="card-img-top" alt="Teacher">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8671e1;">Kevin Nguyen</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ea deleniti assumenda, non itaque tempora.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border">
                    <img src="./images/people/person6.png" class="card-img-top" alt="Teacher">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8671e1;">Sofia Gonzalez</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ea deleniti assumenda, non itaque tempora.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border">
                    <img src="./images/people/person7.png" class="card-img-top" alt="Teacher">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8671e1;">Isabella Kim</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ea deleniti assumenda, non itaque tempora.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border">
                    <img src="./images/people/person8.png" class="card-img-top" alt="Teacher">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8671e1;">Gabriela Santos</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ea deleniti assumenda, non itaque tempora.</p>
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