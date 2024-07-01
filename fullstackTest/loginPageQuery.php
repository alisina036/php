<?php
require("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputMail = mysqli_real_escape_string($conn, $_POST['mail']);
    $inputPassword = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE `E-Mail` = '$inputMail' AND `password` = '$inputPassword'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // User credentials are correct
        $row = mysqli_fetch_assoc($result);
        $userData = implode(', ', $row);

        // echo "You are logged in! Your user data is: $userData";
        // echo "You are logged in!";
        header("Location: eventPage.php?back");
        exit();
    } else {
        // User credentials are incorrect
        header("location: loginPage.php");
    }
}
?>