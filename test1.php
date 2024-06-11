<html>
    <body>
        <form action="test2.php" method="post">
            <input type="text" name="name">
            <input type="submit" value="submit">
        </form>
    </body>
</html>

<?php
if(isset($_POST['name'])){
    header("Location: test2.php");
    die();
}else{
    echo "welcome";
};

echo "welcome to test 1";
?>
