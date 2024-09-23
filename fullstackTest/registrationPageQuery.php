<?php
require("connection.php");

$inputEmail = mysqli_real_escape_string($conn, $_POST['email']);
$inputPassword = mysqli_real_escape_string($conn, $_POST['password']);
$inputDate = mysqli_real_escape_string($conn, $_POST['date']);
$inputCheck = mysqli_real_escape_string($conn, $_POST['check']);

// Remove echo statements here
$hashedPassword = password_hash($inputPassword, PASSWORD_DEFAULT);

if ($inputCheck === "password") {
    $sql = "INSERT INTO users(`E-Mail`, `password`, `age`) VALUES ('$inputEmail', '$hashedPassword', FLOOR(DATEDIFF(CURDATE(), '$inputDate')/365.25))";

    if (mysqli_query($conn, $sql)) {
        // Ensure no output before this header call
        header("Location: eventPage.php?back");
        exit(); // Always exit after header redirection
    } else {
        // For debugging purposes, you can display this error if needed
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Debugging output can still be used when no headers are involved
    echo "Error: Incorrect check value.";
}
?>
