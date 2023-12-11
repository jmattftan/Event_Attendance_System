<?php
// PHP7 specific, fails fast, this file only 
declare(strict_types=1);
// this file and all included/required files
error_reporting(-1);
ini_set('display_errors', 'true');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

session_start();

include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_id = trim($_POST["update_event_id_event"]);
    $event_name = trim($_POST["update_event_name_event"]);
    $event_description = trim($_POST["update_event_description"]);
    $event_type = trim($_POST["update_event_type"]);
    $event_date= trim($_POST["update_event_date"]);
    $event_start_time = trim($_POST["update_event_start_time"]);
    $event_end_time = trim($_POST["update_event_end_time"]);
    $event_location = trim($_POST["update_event_location"]);
    $event_speaker = trim($_POST["update_event_speaker"]);
    $event_handler = trim($_POST["update_event_handler"]);
    $event_cost = trim($_POST["update_event_cost"]);

    $sql = "UPDATE event_data SET event_name = '$event_name', event_description = '$event_description', event_type = '$event_type', event_date = '$event_date', event_start_time = '$event_start_time', event_end_time = '$event_end_time', event_location = '$event_location',  event_speaker = '$event_speaker', event_handler = '$event_handler', event_cost = '$event_cost' WHERE event_id = $event_id";
    $query_run = mysqli_query($mysqli, $sql);

    if($query_run){
        $mysqli->query("SET @num := 0;");
        $mysqli->query("UPDATE event_data SET id = @num := (@num + 1);");
        $mysqli->query("ALTER TABLE event_data AUTO_INCREMENT = 1;");

        header(
            "location: http://127.0.0.1:1912/Event_Attendance_System/admin_dashboard.php"
        );
    } else {
        echo "Something went wrong. Please try again later.";

        die(mysqli_error($mysqli));
    }

}
?>