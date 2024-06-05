<?php
require "../connect/koneksi.php";
require "../connect/session.php";

$queryUsers = mysqli_query($conn, "SELECT * FROM users");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Wizardry</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- STYLE CSS -->
    <link href="../style/global.css" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg sticky-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex" href="index.php">
                <img src="../images/ww.png" alt="logo" width="20%">
                <h3>Word Wizardry</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link fw-bold me-3 active" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold me-3" href="print.php">Print Data</a></li>
                    <li class="nav-item"><a class="btn btn-ketiga me-3 mb-md-0" href="logout.php" type="button">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container dashboard my-5">
        <div class="dashboard-title-section d-flex">
            <h3>Welcome back <?php echo $_SESSION['username']; ?> !</h3>
        </div>
    </div>

    <div class="container users my-5">
        <h3>List All users</h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                while ($data = mysqli_fetch_array($queryUsers)) {
                ?>
                    <tr>
                        <td><?php echo $number; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td>
                            <a href="delete-user.php?q=<?php echo $data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')"><i class="bi bi-trash"></i></a>
                            <a href="edit-user.php?q=<?php echo $data['id']; ?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        </td>
                    </tr>
                <?php
                    $number++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container form-login">
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
                                Successfully added user!
                            </div>

                            <meta http-equiv="refresh" content="2; url=dashboard.php" />
                <?php
                        } else {
                            echo mysqli_error($conn);
                        }
                    }
                }
                ?>
            </div>

            <div class="card border py-4">
                <div class="card-body">

                    <form action="" method="post" class="was-validated">
                        <div class="form-title-section">
                            <h3 class="fw-semibold text-center">Add a new user!</h3>
                            <hr>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama anda" name="name" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill in these fields.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="username" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="username" placeholder="Masukkan email anda" name="email" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill in these fields.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Masukkan username anda" name="username" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill in these fields.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password anda" name="password" path="password" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill in these fields.</div>
                        </div>

                        <div class="pt-1 mb-2">
                            <button class="btn-pertama" type="submit" name="register">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVA SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoN0f5Ve4l5SNl2+0XwWq1F8DorxFclgjz5kq" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>

</html>