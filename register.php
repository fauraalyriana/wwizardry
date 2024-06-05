<?php
require "./connect/koneksi.php";
?>

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

    <!--CONTENT 1-->
    <div class="container form-login py-5">
        <div class="row d-flex">

        <div>
                <?php
                if (isset($_POST['register'])) {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $queryExistEmail = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
                    $jumlahPenggunaEmail = mysqli_num_rows($queryExistEmail);

                    $queryExistUsername = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
                    $jumlahPenggunaUsername = mysqli_num_rows($queryExistUsername);

                    if ($jumlahPenggunaEmail > 0) {
                ?>
                        <div class="alert alert-warning" role="alert">
                        Email is already registered, please use another email!
                        </div>
                    <?php
                    } elseif ($jumlahPenggunaUsername > 0) {
                    ?>
                        <div class="alert alert-warning" role="alert">
                        Username is already registered, please use another username!
                        </div>
                        <?php
                    } else {
                        $queryRegister = mysqli_query($conn, "INSERT INTO users (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')");

                        if ($queryRegister) {
                        ?>
                            <div class="alert alert-primary" role="alert">
                            Successful registration!
                            </div>

                            <meta http-equiv="refresh" content="2; url=login.php" />
                <?php
                        } else {
                            echo mysqli_error($conn);
                        }
                    }
                }
                ?>
            </div>

            <div class="card border">
                <div class="card-body">

                    <form action="" method="post" class="was-validated">
                        <div class="form-title-section">
                            <h3 class="fw-semibold text-center py-5">Create your account now!</h3>
                            <hr>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please filled this form.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="username" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="username" placeholder="Enter your email" name="email" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please filled this form.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please filled this form.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" path="password" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please filled this form.</div>
                        </div>

                        <div class="pt-1 mb-2">
                            <button class="btn btn-pertama" type="submit" name="register">Register</button>
                        </div>

                        <p class="mb-3 pb-lg-2 text-center">Already have an account? <a href="/register">Login here</a></p>

                    </form>
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