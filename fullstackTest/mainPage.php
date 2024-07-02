<?php
session_start();
require('connection.php');
$conn->select_db("fullstackDatabase");

// Query to fetch events
$query = "SELECT * FROM events";
$result = $conn->query($query);

$events = "";
while ($row = $result->fetch_assoc()) {
    $events .= "<option value='{$row['idevents']}'>{$row['eventNaam']}</option>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="grid-layout">
<header>
        <h1>CAFE</h1>
        <div class="header-buttons">
            <a href="loginPage.php"><button><img src="images/account.jpg" alt="Account"></button></a>
            <a href="mainPage.php"><button><img src="images/home.jpg" alt="Home"></button></a>
        </div>
    </header>
    <div class="container">
        <h3>Our events</h3>
        <form id="eventForm">
            <div>
                <label for="menu">Events</label>
                <select name="events" id="menu">
                    <?php echo $events; ?>
                </select>
            </div>
            <div id="showBandsBtn"><button type="button">Show Bands</button></div>
        </form>
        <div id="bandList"></div>
    </div>

    <script>
        $(document).ready(function() {
            $('#showBandsBtn').click(function() {
                var selectedEventId = $('#menu').val();
                $.ajax({
                    url: 'getBands.php',
                    type: 'POST',
                    data: { eventId: selectedEventId },
                    success: function(response) {
                        $('#bandList').html(response);
                    },
                    error: function() {
                        alert('Error retrieving bands.');
                    }
                });
            });
        });
    </script>
</body>
</html>