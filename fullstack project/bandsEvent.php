<?php
require("database.php");

session_start();

$_SESSION['query'] = "alisina";
?>

<html>
    <body>
        <form action="bandsEventphp.php" method="post">
            <input type="checkbox" value="query">
            <p><?php echo $_SESSION['query'] ?></p>
        </form>
    </body>
</html>

<?php
// $_SESSION['query'] = ;
?>