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
                    <li class="nav-item"><a class="nav-link fw-bold me-3  active" href="../vocabulary/vocabulary.php">Vocabulary</a>
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
            <h3>Thematic Word Lists: Jobs and Professions</h3>
        </div>

        <table class="table table-striped my-5">
            <thead>
                <tr>
                    <th scope="col">Vocabulary</th>
                    <th scope="col">Meaning</th>
                    <th scope="col">Example</th>
                    <th scope="col">Synonyms</th>
                    <th scope="col">Antonym</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Visionary</td>
                    <td>Someone who has ideas and plans far into the future, often associated with strategic planning</td>
                    <td>Elon Musk is considered a visionary in the field of space exploration</td>
                    <td>Futurist, Forward-thinker, Trailblazer</td>
                    <td>Traditionalist, Conservative</td>
                </tr>
                <tr>
                    <td>Artisan</td>
                    <td>A skilled worker who makes or produces goods with manual expertise</td>
                    <td>The artisan crafted a beautiful piece of furniture with intricate details</td>
                    <td>Craftsman, Craftswoman, Skilled worker</td>
                    <td>Novice, Unskilled worker</td>
                </tr>
                <tr>
                    <td>Advocate</td>
                    <td>Someone who fights for or supports an idea, principle, or group</td>
                    <td>She is an advocate for equal rights and social justice</td>
                    <td>Champion, Supporter, Defender</td>
                    <td>Opponent, Critic</td>
                </tr>
                <tr>
                    <td>Mentor</td>
                    <td>Someone who provides guidance, advice, and support to someone younger or less experienced</td>
                    <td>As a mentor, he guided many aspiring entrepreneurs to success</td>
                    <td>Guide, Advisor, Teacher</td>
                    <td>Novice, Learner</td>
                </tr>
                <tr>
                    <td>Technician</td>
                    <td>Someone with technical expertise in a particular field, especially related to technology</td>
                    <td>The IT technician quickly resolved the computer issue</td>
                    <td>Specialist, Expert, Professional</td>
                    <td>Amateur, Novice</td>
                </tr>
                <tr>
                    <td>Entrepreneur</td>
                    <td>Someone who establishes and manages a business, usually taking financial risks</td>
                    <td>Successful entrepreneurs often possess a combination of innovation and determination</td>
                    <td>Businessperson, Innovator, Founder</td>
                    <td>Employee, Worker</td>
                </tr>
                <tr>
                    <td>Sculptor</td>
                    <td>An artist who specializes in sculpting, shaping materials into three-dimensional artworks.</td>
                    <td>The sculptor created a masterpiece from a block of marble.</td>
                    <td>Carver, Artisan, Modeler</td>
                    <td>Destructive, Demolisher</td>
                </tr>
                <tr>
                    <td>Consultant</td>
                    <td>A professional who provides expert advice or services in a specific field.</td>
                    <td>The business consultant helped improve the company's efficiency.</td>
                    <td>Advisor, Specialist, Counselor</td>
                    <td>Novice, Inexperienced</td>
                </tr>
                <tr>
                    <td>Biologist</td>
                    <td>A scientist who studies living organisms and their interactions with the environment.</td>
                    <td>The biologist conducted research on marine life in the deep ocean.</td>
                    <td>Life Scientist, Ecologist, Geneticist</td>
                    <td>Non-scientist, Layman</td>
                </tr>
                <tr>
                    <td>Composer</td>
                    <td>A person who creates music, typically by writing scores and arranging musical pieces.</td>
                    <td>The composer composed a symphony that captivated audiences.</td>
                    <td>Songwriter, Musician, Maestro</td>
                    <td>Listener, Audience</td>
                </tr>
                <tr>
                    <td>Detective</td>
                    <td>A law enforcement officer who investigates and solves crimes.</td>
                    <td>The detective solved the mystery with brilliant deductive reasoning.</td>
                    <td>Investigator, Sleuth, Inspector</td>
                    <td>Criminal, Suspect</td>
                </tr>
                <tr>
                    <td>Historian</td>
                    <td>A scholar who studies and writes about historical events and periods.</td>
                    <td>The historian published a book detailing the Renaissance era.</td>
                    <td>Chronicler, Scholar, Archivist</td>
                    <td>Futurist, Futurologist</td>
                </tr>
                <tr>
                    <td>Geologist</td>
                    <td>A scientist who studies the Earth's structure, composition, and processes.</td>
                    <td>The geologist examined rock formations to understand geological history.</td>
                    <td>Earth Scientist, Mineralogist, Petrologist</td>
                    <td>Non-scientist, Layman</td>
                </tr>
            </tbody>
        </table>

        <h5 class="mt-5">Practice</h5>
        <ul>
            <li>Find other vocabulary in this field</li>
            <li>Make example sentences from the vocabulary you get</li>
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