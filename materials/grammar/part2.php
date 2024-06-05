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
            <h3>Grammar Guide Part Two (Subject-Verb Agreement)</h3>
            <p> Subject is a part of a sentence that contains
                person/place/thing performing the action in a
                sentence.</p>
            <p> Verb is the action or state of being in a sentence.
                (It can be expressed in different tenses
                depending on wehen the action is being
                performed)</p>
            <p>The situation in which two words(Subject&Verb)
                have the same grammatical form
            </p>
        </div>

        <table class="table table-striped my-5">
            <thead>
                <tr>
                    <th scope="col">Basic Rule</th>
                    <th scope="col">Example</th>
                    <th scope="col">Explain</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>If the subject is singular, the verb must be singular as well. </td>
                    <td>The boy plays basketball.</td>
                    <td>The subject "boy" is singular. The verb "plays" is also in singular form.
                        The subject of the sentence is "boy" and the verb is "plays." Both agree in number.</td>
                </tr>
                <tr>
                    <td>If the subject is plural, the verb must be plural as well.</td>
                    <td>The boys play basketball.</td>
                    <td> The subject "boys" is plural. The verb "play" is also in plural form.
                        The subject of the sentence is "boys" and the verb is "play." Both agree in number</td>
                </tr>

            </tbody>
        </table>

        <h5>Practice</h5>
        <p>Read the sentences on the right and decide which verb matches the number of the subject correctly.</p>
        <ul>
            <li>Mom (cook, cooks) breakfast at 7.</li>
            <li>James (brings, bring) lunch to school.</li>
            <li>Rosa and Matt (clean, cleans) the classroom every Tuesday.</li>
            <li>The parents always (agrees, agree) with the teacher.</li>
            <li>The children (plays, play) in the playground.</li>
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