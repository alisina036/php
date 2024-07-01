<?php
require("connection.php");
?>

<html>
    <body>
        <header>
            <h1>CAFE</h1>
            <a href="loginPage.php"><button>login</button></a>
        <header>
        <form action="bandEventPageQuery.php" method="POST">
            <select name="siuu" id="siuu">
                <?php

                $sql = "select * from bands";
                $result = $conn-> query($sql);

                if($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<option>" . $row["bandNaam"] . "</option>";
                    }
                    echo "</select>";
                }else{
                    echo "0 result";
                }
                $conn-> close();
                
                ?>
                </select>
        </form>
    </body>
</html>