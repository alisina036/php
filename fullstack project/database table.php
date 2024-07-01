<html>
    <head>
        <link rel="stylesheet" href="fullstack.css">
    </head>
    <body class="gridLayout">
        <table>
            <tr>
                <th id="ID">Bands</th>
                <th>Genre</th>
            </tr>
            <?php
                require ("database.php");

                $sql = "select * from bands";
                $result = $conn-> query($sql);

                if($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<tr><td>" . $row["band"] . "</td><td>" . $row["genre"] . "</td></tr>";
                    }
                    echo "</table>";
                }else{
                    echo "0 result";
                }
                $conn-> close();
            ?>
    </body>
</html>
<?php 
?>