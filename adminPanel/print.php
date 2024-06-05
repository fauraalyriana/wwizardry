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

    <div class="container users my-5">
        <h3>List All users</h3>
        <button class="btn btn-kedua" onclick="printUsers()">Print</button>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
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
                    </tr>
                <?php
                    $number++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- JAVA SCRIPT -->
    <script>
        function printUsers() {
            var printButton = document.querySelector('.btn-kedua');
            printButton.style.display = 'none';

            window.print();

            printButton.style.display = 'block';
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoN0f5Ve4l5SNl2+0XwWq1F8DorxFclgjz5kq" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>

</html>