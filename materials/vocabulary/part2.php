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
            <h3>Thematic Word Lists: Daily Life</h3>
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
                    <td>Routine</td>
                    <td>A sequence of actions regularly followed; a fixed program.</td>
                    <td>Establishing a morning routine can enhance productivity.</td>
                    <td>Schedule, Habit, Regimen</td>
                    <td>Irregularity, Sporadic</td>
                </tr>
                <tr>
                    <td>Convenience</td>
                    <td>The state of being able to proceed with something without difficulty.</td>
                    <td>The convenience of online shopping has transformed retail.</td>
                    <td>Ease, Comfort, Accessibility</td>
                    <td>Inconvenience, Discomfort</td>
                </tr>
                <tr>
                    <td>Commute</td>
                    <td>The regular journey between one's home and place of work or school.</td>
                    <td>Many people prefer jobs with a shorter commute.</td>
                    <td>Travel, Journey, Trip</td>
                    <td>Stay, Remain</td>
                </tr>
                <tr>
                    <td>Grocery Shopping</td>
                    <td>The act of purchasing food and other household items from a grocery store.</td>
                    <td>I need to make a grocery shopping list for the week.</td>
                    <td>Supermarket shopping, Food shopping</td>
                    <td>Abstention, Fasting</td>
                </tr>
                <tr>
                    <td>Socialize</td>
                    <td>To participate in social activities and interact with others.</td>
                    <td>It's essential to socialize for a healthy social life.</td>
                    <td>Mix, Mingle, Interact</td>
                    <td>Isolate, Withdraw, Seclude</td>
                </tr>
                <tr>
                    <td>Budget</td>
                    <td>A plan for managing income and expenses within a specific period.</td>
                    <td>Creating a budget helps control financial spending.</td>
                    <td>Financial plan, Spending plan</td>
                    <td>Overspend, Exceed budget</td>
                </tr>
                <tr>
                    <td>Relaxation</td>
                    <td>The state of being free from tension and anxiety.</td>
                    <td>Finding moments of relaxation is crucial for mental well-being.</td>
                    <td>Unwinding, Recreation, Leisure</td>
                    <td>Stress, Tension, Anxiety</td>
                </tr>
                <tr>
                    <td>Traffic</td>
                    <td>The movement of vehicles on the road, especially in a congested area.</td>
                    <td>I got stuck in traffic and arrived late to the meeting.</td>
                    <td>Congestion, Jam, Gridlock</td>
                    <td>Clear roads, Smooth flow</td>
                </tr>
                <tr>
                    <td>Dining Out</td>
                    <td>The practice of eating meals at restaurants or other food establishments.</td>
                    <td>Dining out is a popular way to experience different cuisines.</td>
                    <td>Eating out, Restaurant dining</td>
                    <td>Cooking at home, Eating in</td>
                </tr>
                <tr>
                    <td>Exercise</td>
                    <td>Physical activity done to maintain or improve health and fitness.</td>
                    <td>Regular exercise is essential for a healthy lifestyle.</td>
                    <td>Workout, Physical activity, Fitness</td>
                    <td>Inactivity, Sedentary lifestyle</td>
                </tr>
                <tr>
                    <td>Hygiene</td>
                    <td>Conditions or practices conducive to maintaining health and preventing diseases.</td>
                    <td>Personal hygiene, such as washing hands, is crucial for preventing illness.</td>
                    <td>Cleanliness, Sanitation, Health practices</td>
                    <td>Neglect, Uncleanliness</td>
                </tr>
                <tr>
                    <td>Leisure</td>
                    <td>Free time, not occupied with work or essential tasks.</td>
                    <td>People engage in leisure activities to relax and enjoy their time off.</td>
                    <td>Recreation, Relaxation, Free time</td>
                    <td>Work, Occupation, Responsibilities</td>
                </tr>
                <tr>
                    <td>Technology</td>
                    <td>The application of scientific knowledge for practical purposes, especially in industry.</td>
                    <td>Advancements in technology have transformed the way we live and work.</td>
                    <td>Innovation, Technical advancements, Tools</td>
                    <td>Traditional methods, Low-tech</td>
                </tr>
                <tr>
                    <td>Relationship</td>
                    <td>The way in which two or more people or things are connected or the state of being connected.</td>
                    <td>Building strong relationships is essential for personal and professional success.</td>
                    <td>Connection, Bond, Association</td>
                    <td>Estrangement, Disconnection</td>
                </tr>
                <tr>
                    <td>Weather</td>
                    <td>The state of the atmosphere at a particular place and time, including temperature, precipitation, and wind.</td>
                    <td>Checking the weather forecast helps plan outdoor activities.</td>
                    <td>Climate, Meteorological conditions, Atmospheric state</td>
                    <td>Stable weather, Calm conditions</td>
                </tr>
                <tr>
                    <td>Entertainment</td>
                    <td>Activities or performances designed to provide amusement or enjoyment.</td>
                    <td>Movies, music, and games are popular forms of entertainment.</td>
                    <td>Amusement, Recreation, Leisure activities</td>
                    <td>Boredom, Monotony</td>
                </tr>
                <tr>
                    <td>Health</td>
                    <td>The overall well-being of the body and mind, free from illness or injury.</td>
                    <td>Maintaining a balanced diet and exercising regularly contribute to good health.</td>
                    <td>Wellness, Fitness, Well-being</td>
                    <td>Illness, Sickness</td>
                </tr>
                <tr>
                    <td>Education</td>
                    <td>The process of receiving or giving systematic instruction, typically at a school or university.</td>
                    <td>Education is the key to personal and societal development.</td>
                    <td>Learning, Knowledge, Instruction</td>
                    <td>Ignorance, Uninformed</td>
                </tr>
                <tr>
                    <td>Celebration</td>
                    <td>The action of marking an important event, occasion, or holiday with festivities.</td>
                    <td>A graduation is a time for celebration and reflection on achievements.</td>
                    <td>Festivity, Party, Commemoration</td>
                    <td>Mourning, Remembrance</td>
                </tr>
                <tr>
                    <td>Time Management</td>
                    <td>The ability to use time effectively and productively, especially in work or personal tasks.</td>
                    <td>Effective time management is crucial for achieving goals and reducing stress.</td>
                    <td>Time planning, Efficient use of time</td>
                    <td>Procrastination, Time-wasting</td>
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