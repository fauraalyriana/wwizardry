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
    <link href="../../style//global.css" rel="stylesheet">
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
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="../vocabulary/vocabulary.php">Vocabulary</a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3 active" href="../writing/writing.php">Writing</a>
                    </li>
                    <li class="nav-item"><a class="btn btn-ketiga me-3 mb-md-0" href="../../logout.php" type="button">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--CONTENT 1-->
    <div class="container-fluid py-5 materials2">
        <div class="title-section">
            <h3>Introduction to Writing Skills</h3>
            <p>Welcome to the Writing Corner, where we will delve into the intricacies of English writing skills together. This first part aims to help you grasp the fundamentals of writing, from word choice to effective sentence structure. Let's get started!</p>
        </div>

        <div class="section-one mb-3 mt-5">
            <h5>The Importance of Writing Skills</h5>
            <p>Writing is a crucial skill in everyday communication, both in academic and professional contexts. The ability to convey ideas clearly and effectively can open doors to success in various fields.</p>
        </div>
        <div class="section-two mb-3">
            <h5>Choosing the Right Words</h5>
            <p>As a writer, selecting the right words is key to conveying your message effectively. Learn how to choose words that fit the context and purpose of your communication. Example: </p>
            <ul>
                <li>Incorrect: The cat is big.</li>
                <li>Correct: The feline exhibits substantial size.</li>
            </ul>
        </div>
        <div class="section-tri mb-3">
            <h5>Effective Sentence Structur</h5>
            <p>A well-structured sentence provides a smooth flow in your writing. Learn how to construct sentences that are concise, clear, and easily understood by readers. Example:</p>
            <ul>
                <li>Incorrect: She went to the store and bought some fruits. After that, she went home.</li>
                <li>Correct: After purchasing fruits at the store, she headed home.</li>
            </ul>
        </div>
        <div class="section-four mb-3">
            <h5>Tips for Engaging Writing</h5>
            <p>Engaging writing captivates the reader's attention. Gain insights into creating writing that is not only informative but also entertaining. Example:</p>
            <ul>
                <li>Unengaging: The weather was bad, and I stayed inside all day.</li>
                <li>Engaging: The relentless rain drummed against the window, urging me to cocoon myself in the warmth of my cozy blanket.</li>
            </ul>
        </div>
        <div class="section-five mb-3">
            <h5>Writing Practice</h5>
            <p>Practice is the key to improving your writing skills. We will provide simple and beneficial exercises to help you hone your writing abilities consistently. Exercies:</p>
            <ul>
                <li>Write a short paragraph describing your favorite place using vivid language and sensory details.</li>
            </ul>
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