<?php
require("connection.php");
$conn->select_db("fullstackDatabase");
?>

<script>
    function clearbtn() {

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
    document.getElementById("text").innerHTML = "";
}
};
xmlhttp.open("POST", "clearbtn.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("r=test");
}
function submitButton(){
alert("Band added succesfully");
}
// function redirect() {
//     var url = "http://127.0.0.1/php/fullstack%20project/eventPage.php";
//     window.location.href = url;
// }
// function submitbtn() {
    
//     if (true) { 
//         alert("Band added successfully");
//         return true; 
//     } else {
//         alert("Error adding band");
//         return false; 
//     }
// }

</script>

<html>
<head>
    <title>Bands</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body class="gridlayout">
    <header>
        <h1>CAFE</h1>
        <div class="header-buttons">
            <a href="loginPage.php"><button><img src="images/account.jpg" alt="Account"></button></a>
            <a href="mainPage.php"><button><img src="images/home.jpg" alt="Home"></button></a>
            <a href="bandPage.php"><button><img src="images/music.jpg" alt="Bands"></button></a>
            <a href="eventPage.php"><button><img src="images/calender.jpg" alt="Events"></button></a>
            <a href="bandEventPage.php"><button><img src="images/pairing.jpg" alt="Pairing"></button></a>
        </div>
    </header>
        <h1 class="welcomeText"> Add here your band information.</h1>
    <form id="form" action="bandPageQuery.php" method="POST">
                <input id="nameInput" required type="text"  name="name" placeholder="Band Name here">
                  <select id="genreInput" required name="genre">
                   <option value="" disabled selected>Select a genre</option>
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Classical">Classical</option>
                    <option value="Hip-Hop">Hip-Hop</option>
                </select>
               <input class="submitbtn"  type="submit" value="submit" onclick="submitButton();">
                <input class="clearbtn" type="button" value="clear" onclick="clearbtn();">
    </form>
</html>