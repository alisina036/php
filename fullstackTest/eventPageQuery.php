<?php
require("connection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $inputEvent = mysqli_real_escape_string($conn, $_POST['event']);
    $inputDate = mysqli_real_escape_string($conn, $_POST['date']);
    $inputPrice = mysqli_real_escape_string($conn, $_POST['price']);

    $sql = "INSERT INTO events (`eventNaam`, `datum`, `prijs`) VALUES ('$inputEvent', '$inputDate', '$inputPrice')";

    if(mysqli_query($conn,$sql)){
        header("Location: bandPage.php?back");
        exit();
    }
}
?>