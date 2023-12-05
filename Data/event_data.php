<?php

include "database.php";

$sql = "SELECT * FROM event_data";
$result = $mysqli->query($sql);

$data = [];

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $event_id = $row["event_id"];
        $event_name = $row["event_name"];
        $event_description = $row["event_description"];
        $event_type = $row["event_type"];
        $event_date = $row["event_date"];
        $event_start = $row["event_start"];
        $event_end = $row["event_end"];
        $event_location = $row["event_location"];
        $event_speaker = $row["event_speaker"];
        $event_created = $row["event_created"];

        $event_data[] = [
            'event_id' => $event_id,
            'event_name' => $event_name,
            'event_description' => $event_description,
            'event_type' => $event_type,
            'event_date' => $event_date,
            'event_start' => $event_start,
            'event_end' => $event_end,
            'event_location' => $event_location,
            'event_speaker' => $event_speaker,
            'event_created' => $event_created
        ];
    }
} else {
    echo "0 results";
}

echo json_encode(['data' => $event_data]);
?>
