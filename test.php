<html>
    <head>
        <link rel="stylesheet" href="styletest.css">
    </head>
    <body class="grid-layout">
        <table>
            <tr>
                <th id="ID">ID</th>
                <th>Student Name</th>
                <th>Password</th>
            </tr>
            <?php
                require ("index.php");

                $sql = "select * from student";
                $result = $conn-> query($sql);

                if($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["studentname"] . "</td><td>" . $row["password"] . "</td></tr>";
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