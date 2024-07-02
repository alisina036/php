<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <header>
        <h1>CAFE</h1>
        <div class="header-buttons">
            <a href="loginPage.php"><button><img src="images/account.jpg" alt="Account"></button></a>
            <a href="mainPage.php"><button><img src="images/home.jpg" alt="Home"></button></a>
        </div>
    </header>
        <form action="loginPageQuery.php" method="POST">
            <p>E-Mail:</p>
            <input type="email" placeholder="alisina@gmail.com" name="mail" required>
            <p>Password:</p>
            <input type="password" placeholder="Alisina1980" name="password" required>
            <br><br>
            <input type="submit" value="submit">
        </form>
        <br><br><br>
        <form action="registrationPageQuery.php" method="POST">
            <input type="email" placeholder="email" name="email" required>
            <input type="password" placeholder="password" name="password" required>
            <input type="date" name="date" required>
            <input type="text" placeholder="check" name="check" required>
            <input type="submit" value="submit">
        </form>
    </body>
</html>