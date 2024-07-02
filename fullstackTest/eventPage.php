<html>
<head>
    <title>Event</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
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
        <form action="eventPageQuery.php" method="POST">
            <input type="text" name="event" placeholder="event name here" required>
            <input type="date" name="date" required>
            <input type="number" name="price" placeholder="€49,99" required>
            <input type="submit" value="submit">
        </form>
    </body>
</html>