<?php
require("connection.php");

$inputEmail = mysqli_real_escape_string($conn, $_POST['email']);
$inputPassword = mysqli_real_escape_string($conn, $_POST['password']);
$inputDate = mysqli_real_escape_string($conn, $_POST['date']);
$inputCheck = mysqli_real_escape_string($conn, $_POST['check']);

// Correctly concatenate the SQL string
$sql = "INSERT INTO users(`E-Mail`, `password`, `age`) VALUES ('$inputEmail', '$inputPassword', FLOOR(DATEDIFF(CURDATE(), '$inputDate')/365.25));";

if (mysqli_query($conn, $sql)) {
    header("location: registrationPage.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
