<?php
declare(strict_types=1);

error_reporting(-1);
ini_set('display_errors', 'true');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = trim($_POST["event_name"]);
    $event_description = trim($_POST["event_description"]);
    $event_type = trim($_POST["event_type"]);
    $event_date= trim($_POST["event_date"]);
    $event_start_time = trim($_POST["event_start_time"]);
    $event_end_time = trim($_POST["event_end_time"]);
    $event_location = trim($_POST["event_location"]);
    $event_speaker = trim($_POST["event_speaker"]);
    $event_handler = trim($_POST["event_handler"]);
    $event_cost = trim($_POST["event_cost"]);

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");

    $event_id = $year.$month.$day.$hour.$minute.$seconds;

    $sql = "INSERT INTO event_data (event_id, event_name, event_description, event_type, event_date, event_start_time, event_end_time, event_location, event_speaker, event_handler, event_cost) VALUES ('$event_id', '$event_name', '$event_description', '$event_type', '$event_date', '$event_start_time', '$event_end_time', '$event_location', '$event_speaker', '$event_handler', '$event_cost')";
    $query_run = mysqli_query($mysqli, $sql);

    if ($query_run) {
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
