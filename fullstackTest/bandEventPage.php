<?php
require("connection.php");

// Fetch events
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

// Fetch bands
$query = "SELECT * FROM bands";
$result2 = $conn->query($query);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Band Event</title>
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
    <form action="bandEventPageQuery.php" method="POST">
        <label for="events">Select Event:</label>
        <select name="event" id="events">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['idevents']}'>{$row['eventNaam']}</option>";
                }
            } else {
                echo "<option>No events found</option>";
            }
            ?>
        </select>
        
        <div id="bands">
            <?php
            if ($result2->num_rows > 0) {
                echo "<h3>Select Bands:</h3>";
                while ($bandRow = $result2->fetch_assoc()) {
                    echo "<input type='checkbox' name='bands[]' value='{$bandRow['idbands']}'> {$bandRow['bandNaam']}<br>";
                }
            } else {
                echo "No bands found";
            }
            ?>
        </div>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

header h1 {
  margin: 0;
}

.login,.mainPage,.paring,.band,.event {
  display: inline-block;
  margin: 0 10px;
}

.login button,.mainPage button,.paring button,.band button,.event button {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.login button:hover,.mainPage button:hover,.paring button:hover,.band button:hover,.event button:hover {
  background-color: #444;
}

form {
  max-width: 500px;
  margin: 40px auto;
  padding: 20px;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 10px;
}

select {
  width: 100%;
  height: 40px;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
}

#bands {
  margin-top: 20px;
}

#bands input[type="checkbox"] {
  margin-right: 10px;
}

input[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #444;
}
</style>