<html>
    
  <head>
    <title>Tools For Ever</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="grid-layout">
    <script>
        function ajax() {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("text").innerHTML = "";
                }
                };
                xmlhttp.open("POST", "ajax.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("r=test");}
            
                </script>

            <form action="test2.php" method="post">
                <input type="text" name="name">
                <input type="submit" value="submit">
                <input type="button" value="clear" onclick="ajax();">
            </form>
            <!-- <table>
                <tr>
                    <th>test</th>
                    <th>test</th>
                    <th>test</th>
                </tr>
                <tr>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
            </table> -->
    <!-- <table>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </table> -->
</html>

<?php
require ("index.php");

$conn->select_db("DB");

// $sql = "select * from student;";
// $result = mysqli_query($conn, $sql);
// $resultcheck = mysqli_num_rows($result);

// if($resultcheck > 0) {
//   while($row = mysqli_fetch_assoc($result)) {
//     // echo "<tr><td>" . $row["naamProduct"] . "<td><td>" . $row["type"] . "<td><td>" . ["fabriek"] . "<td><tr>";
//     echo $row['naamProduct'] . "<br>";
//     echo $row['type'] . "<br>";
//     echo $row['fabriek'] . "<br>";
//     echo $row['aantal'] . "<br>";
//   }
// //   echo "</table>";
// }

// $sql = "CREATE TABLE student (
//     id INT(6) unsinged auto_increment primary key,
//     studentname VARCHAR(30) NOT NULL,
//     )";

//     if ($conn->query($sql) === TRUE){
//         echo "Table created succesfully";
//     } else {
//         echo "error";
//     }

// $sql = "CREATE TABLE student (
//     id INT(6) unsigned auto_increment primary key,
//     studentname VARCHAR(30) NOT NULL
//     )";

//     if ($conn->query($sql) === TRUE){
//         echo "Table created succesfully";
//     } else {
//         echo "error creating table: " . $conn->error;
//     }
// $statement1 = "insert into student(studentName) values ('";
// $statement2 = "')";
// $name = $_POST['name'];

// echo $statement1 . $name . $statement2 . "<br>";

// $fullStatement = $statement1 . $name . $statement2;

// echo $fullStatement;

// echo $_POST["name"] . "<br>";

// $mysql = $_POST;

// $statement = "insert into student(studentName) values ('name')";
// $conn->query($fullStatement);

// $result = $conn->query($fullStatement);

// if($conn->query($fullStatement) === true){
//     echo "gelukt" . "<br>";
// }else{
//     echo "error" . "<br>";
// }

// $show = "select * from student;";
// $conn->query($show);

// $result = $conn->query($show);

// if($conn->query($show) === true){
//     echo "gelukt" . "<br>";
// }else{
//     echo "error" . "<br>";
// }
//$inputName = $_POST['name'];


// if($inputName === ''){
//     $conn->query($sql) === false;
// }

// if($inputName === ''){
//     echo "vul iets in";
// }else{
// $statement = "insert into student(studentname) values ('$inputName')";
// $conn->query($statement);


$sql = "select * from student;";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

echo '<div id="text">';
if($resultcheck > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    

        echo $row['id'];
        echo $row['studentname' ] . "<br>";
        
    }
 }
// };
echo '</div>';

    $clear1 = "delete from student where id > 0;"; 
    $clear2 = "alter table student auto_increment = 0;";

    // if(isset($_POST['name'])){
    //     //header("location: test2.php?=siuu");
    // }else{
    //     echo "welcome";
    // };
?>

        



