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
            <h3>Exploring Writing Genres</h3>
            <p>Welcome back to Writing Corner! In Part 2, we will embark on an in-depth exploration of various writing genres to expand and refine your writing skills. Understanding different genres is not just about creativity but also about the adaptability of your writing style to diverse contexts. Let's delve into each aspect comprehensively:</p>

            <p>Writing genres refer to distinct categories or types of writing, each serving a specific purpose and audience. Let's break down the key genres we'll explore:</p>
            <ul>
                <li>Narrative Writing</li>
                <li>Descriptive Writing</li>
                <li>Expository Writing</li>
                <li>Persuasive Writing</li>
            </ul>
        </div>

        <div class="section-one mb-5 mt-5">
            <h5>Narrative Writing</h5>
            <p>Definition: Narrative writing is a form of writing that tells a story. It aims to engage readers by creating a sequence of events, characters, and settings.</p>
            <h6>Key Components:</h6>
            <ul>
                <li>Character Development: Craft characters with depth and relatability.</li>
                <li>Plot Structure: Organize events coherently with a beginning, middle, and end.</li>
                <li>Vivid Settings: Create detailed environments to immerse readers.</li>
            </ul>
            <h6>Example:</h6>
            <ul>
                <li>Imagine you're narrating a personal experience, and explore how to weave it into a compelling narrative.</li>
            </ul>
        </div>
        <div class="section-two mb-5">
            <h5>Descriptive Writing</h5>
            <p>Definition: Descriptive writing is about painting a detailed picture using words. It appeals to the senses and evokes emotions through rich and vivid descriptions.</p>
            <h6>Key Techniques:</h6>
            <ul>
                <li>Imagery: Use vivid and descriptive language to create mental images.</li>
                <li>Sensory Appeal: Appeal to the five senses to engage readers deeply.</li>
                <li>Detail Crafting: Provide specific details for a more immersive experience.</li>
            </ul>
            <h6>Example:</h6>
            <ul>
                <li>Practice crafting a descriptive paragraph about a place or moment, utilizing imagery and sensory appeal.</li>
            </ul>
        </div>
        <div class="section-tri mb-5">
            <h5>Expository Writing</h5>
            <p>Definition: Expository writing is informative and aims to explain a topic or convey information. It focuses on presenting facts, organizing ideas logically, and engaging readers.</p>
            <h6>Key Strategies:</h6>
            <ul>
                <li>Clarity: Communicate ideas clearly and concisely.</li>
                <li>Logical Organization: Arrange information in a structured manner.</li>
                <li>Engagement: Use examples and anecdotes to connect with readers.</li>
            </ul>
            <h6>Example:</h6>
            <ul>
                <li>Choose a topic and create an expository piece, ensuring clarity and logical organization of information.</li>
            </ul>
        </div>
        <div class="section-four mb-5">
            <h5>Persuasive Writing</h5>
            <p>Definition: Persuasive writing seeks to convince or persuade the reader to adopt a particular point of view or take a specific action.</p>
            <h6>Key Elements:</h6>
            <ul>
                <li>Argument Crafting: Develop a compelling and well-supported argument.</li>
                <li>Use of Evidence: Support claims with relevant facts and examples.</li>
                <li>Emotional Appeal: Appeal to readers' emotions to strengthen your persuasion.</li>
            </ul>
            <h6>Example:</h6>
            <ul>
                <li>Write a persuasive piece on a current issue, incorporating strong arguments and persuasive techniques.</li>
            </ul>
        </div>
        <div class="section-five mb-5">
            <h5>Genre Adaptation</h5>
            <p>Definition: Genre adaptation is the ability to adjust your writing style to fit different genres. It involves understanding tone, style, and language choices specific to each genre.</p>
            <h6>Key Considerations:</h6>
            <ul>
                <li>Tone and Style: Adapt the tone and style to match the genre's requirements.</li>
                <li>Language Choices: Use appropriate language based on the genre's characteristics.</li>
            </ul>
            <h6>Example:</h6>
            <ul>
                <li>Take a piece of your writing and adapt it to a different genre, observing the changes in tone and style.</li>
            </ul>
        </div>
        <div class="section-five mb-5">
            <h5>Exploring Creative Writing</h5>
            <p>Definition: Creative writing is a form of expression that allows for imaginative storytelling and self-expression. It includes poetry, short stories, and other creative forms.</p>
            <h6>Creative Forms:</h6>
            <ul>
                <li>Poetry: Express emotions and experiences through poetic language.</li>
                <li>Short Stories: Craft concise narratives with a strong plot.</li>
                <li>Creative Exploration: Experiment with different forms and styles.</li>
            </ul>
            <h6>Example:</h6>
            <ul>
                <li>Create a short poem or story that explores a personal emotion or unique experience.</li>
            </ul>
        </div>
        <div class="section-five mb-5">
            <h5>Writing Across Disciplines</h5>
            <p>Definition: Writing across disciplines involves understanding how writing is applied in various fields such as academia, business, and technical professions.</p>
            <h6>Application Areas:</h6>
            <ul>
                <li>Academic Writing: Research papers, essays, and scholarly articles.</li>
                <li>Business Writing: Proposals, reports, and professional communication.</li>
                <li>Technical Writing: Manuals, instructions, and documentation.</li>
            </ul>
            <h6>Example:</h6>
            <ul>
                <li>Analyze a piece of writing from each discipline to understand specific conventions and expectations.</li>
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