<?php
require('connection.php');

if (isset($_POST['eventId'])) {
    $eventId = $_POST['eventId'];

    $sql = "SELECT bands.bandNaam FROM bands 
            INNER JOIN events_has_bands ON bands.idbands = events_has_bands.idbands 
            WHERE events_has_bands.idevents = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eventId);
    $stmt->execute();
    $result = $stmt->get_result();

    $bandList = "<h3>Bands playing at the selected event:</h3><ul>";
    while ($row = $result->fetch_assoc()) {
        $bandList .= "<li>{$row['bandNaam']}</li>";
    }
    $bandList .= "</ul>";

    echo $bandList;
}
?>
