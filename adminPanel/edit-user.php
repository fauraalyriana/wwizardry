<?php
require "../connect/koneksi.php";
require "../connect/session.php";

if (isset($_GET['q'])) {
    $userId = $_GET['q'];

    // Fetch user data for pre-filling the form
    $queryUser = mysqli_query($conn, "SELECT * FROM users WHERE id = '$userId'");
    $userData = mysqli_fetch_assoc($queryUser);

    if (!$userData) {
        echo "User not found.";
        exit();
    }
} else {
    echo "Invalid request. Please provide a user ID.";
    exit();
}

if (isset($_POST['update'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Perform update operation
    $queryUpdate = mysqli_query($conn, "UPDATE users SET name = '$name', email = '$email', username = '$username', password = '$password' WHERE id = '$userId'");

    if ($queryUpdate) {
        header("Location: dashboard.php"); // Redirect back to dashboard after successful update
        exit();
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}
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
                    <li class="nav-item"><a class="btn btn-ketiga me-3 mb-md-0" href="logout.php" type="button">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container form-login">
        <div class="row d-flex">
            <div class="card border py-4">
                <div class="card-body">
                    <form action="" method="post" class="was-validated">
                        <div class="form-title-section">
                            <h3 class="fw-semibold text-center">Edit User</h3>
                            <hr>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="name" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="name" value="<?php echo $userData['name'] ?>" name="name" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill in these fields.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" value="<?php echo $userData['email'] ?>" name="email" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill in these fields.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" value="<?php echo $userData['username'] ?>" name="username" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill in these fields.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" value="<?php echo $userData['password'] ?>" name="password" path="password" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill in these fields.</div>
                        </div>

                        <div class="pt-1 mb-2">
                            <button class="btn-pertama" type="submit" name="update">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
