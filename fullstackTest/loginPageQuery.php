<?php
require("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputMail = mysqli_real_escape_string($conn, $_POST['mail']);
    $inputPassword = mysqli_real_escape_string($conn, $_POST['password']);

    // Fetch the hashed password from the database
    $sql = "SELECT `password` FROM users WHERE `E-Mail` = '$inputMail'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password']; // This is the hashed password from the database

        // Verify the password entered by the user against the hashed password
        if (password_verify($inputPassword, $hashedPassword)) {
            header("Location: bandEventPage.php");
            exit();
        } else {
            echo "Error: Incorrect password.";
        }
    } else {
        echo "Error: User not found.";
    }
}
?>
