<?php
require "../connect/koneksi.php";
require "../connect/session.php";

if (isset($_GET['q'])) {
    $userId = $_GET['q'];

    // Perform delete operation
    $queryDelete = mysqli_query($conn, "DELETE FROM users WHERE id = '$userId'");

    if ($queryDelete) {
        header("Location: dashboard.php"); // Redirect back to dashboard after successful delete
        exit();
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request. Please provide a user ID.";
}
?>
