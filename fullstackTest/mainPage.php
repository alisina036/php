<?php
require('connection.php');
$conn->select_db("fullstackDatabase");

// Query to fetch events and associated bands
$query = "SELECT * FROM events INNER JOIN bands ON events.idevents = bands.idbands";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

$events = "";
while ($row = $result->fetch_assoc()) {
    $events .= "<option>{$row['eventNaam']} </option>";
}

// Handle form submission
$bandList = "";
if (isset($_POST['submit'])) {
    $selectedEvent = $_POST['events'];

    // Query to fetch bands for the selected event
    $bandQuery = "SELECT bands.bandNaam FROM events 
                  INNER JOIN bands ON events.idevents = bands.idbands 
                  WHERE events.eventNaam = ?";
    $bandStmt = $conn->prepare($bandQuery);
    $bandStmt->bind_param("s", $selectedEvent);
    $bandStmt->execute();
    $bandResult = $bandStmt->get_result();

    $bandList = "<h3>Bands playing at the selected event:</h3><ul>";
    while ($bandRow = $bandResult->fetch_assoc()) {
        $bandList .= "<li>{$bandRow['bandNaam']}</li>";
    }
    $bandList .= "</ul>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
</head>
<header>
            <h1>CAFE</h1>
            <a href="loginPage.php"><button>login</button></a>
        <header>
<body class="gridLayout">
    <div class="container">
        <h3>Our events</h3>
        <form method="post">
            <div>
                <label for="menu">Events</label>
                <select name="events" id="menu">
                    <?php echo $events; ?>
                </select>
            </div>
            <input type="submit" name="submit" value="Show Bands">
        </form>
        <?php echo "<ul class='band-list'>$bandList</ul>"; ?> 

        <a class="login-btn" href="http://127.0.0.1/php/fullstack project/loginPage.php">
            <i class="fas fa-lock"></i> Login
        </a>
    </div>
 
</body>
</html>