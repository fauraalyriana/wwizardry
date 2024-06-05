<?php
require "../connect/session.php";
require "../connect/koneksi.php";

$id = $_GET['q'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
$data = mysqli_fetch_array($query);
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

    <div class="container add-category my-5">
        <div class="card border">
            <div class="card-body">

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['editPengguna'])) {
                        $name = htmlspecialchars($_POST['name']);
                        $email = htmlspecialchars($_POST['email']);
                        $username = htmlspecialchars($_POST['username']);

                        // Validate and sanitize input to prevent SQL injection
                        $name = mysqli_real_escape_string($conn, $name);
                        $email = mysqli_real_escape_string($conn, $email);
                        $username = mysqli_real_escape_string($conn, $username);

                        $queryExistEmail = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email' AND id != '$id'");
                        $jumlahPenggunaEmail = mysqli_num_rows($queryExistEmail);

                        $queryExistUsername = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' AND id != '$id'");
                        $jumlahPenggunaUsername = mysqli_num_rows($queryExistUsername);

                        if ($jumlahPenggunaEmail > 0 || $jumlahPenggunaUsername > 0) {
                ?>
                            <div class="alert alert-warning" role="alert">
                                Email atau username sudah terdaftar, silakan gunakan email atau username yang lain!
                            </div>
                        <?php
                        } else {
                            $queryUpdate = mysqli_query($conn, "UPDATE users SET name='$name', email='$email', username='$username' WHERE id=$id");

                            if ($queryUpdate) {
                        ?>
                                <div class="alert alert-primary" role="alert">
                                    Berhasil edit data pengguna!
                                </div>

                                <meta http-equiv="refresh" content="2; url=dashboard.php" />
                        <?php
                            } else {
                                echo mysqli_error($conn);
                            }
                        }
                    }

                    if (isset($_POST['deletePengguna'])) {
                        $queryDeletePengguna = mysqli_query($conn, "DELETE FROM users WHERE id='$id'");

                        if ($queryDeletePengguna) {
                        ?>
                            <div class="alert alert-primary" role="alert">
                                Berhasil menghapus data pengguna!
                            </div>

                            <meta http-equiv="refresh" content="2; url=dashboard.php">
                <?php
                        }
                    }
                }
                ?>

                <form action="" method="post" class="was-validated">
                    <div class="form-title-section">
                        <h3 class="fw-semibold text-center">Edit Pengguna</h3>
                        <hr>
                    </div>

                    <div class="col-md-12 mb-3">
                            <label for="name" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="name" value="<?php echo $data['name'] ?>" name="name" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Silakan isi kolom ini.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="username" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="username"value="<?php echo $data['email'] ?>" name="email" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Silakan isi kolom ini.</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" value="<?php echo $data['username'] ?>" name="username" path="username" required="true" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Silakan isi kolom ini.</div>
                        </div>

                    <div class="pt-1 mb-2">
                        <button class="btn btn-pertama" type="submit" name="editPengguna">Edit Pengguna</button>
                        <button class="btn btn-ketiga" type="submit" name="deletePengguna">Hapus</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <body>

    </body>

    </html>