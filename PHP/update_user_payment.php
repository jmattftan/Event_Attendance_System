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
    $user_payment_id = trim($_POST["update_user_payment_id"]);
    $event_purchaser = trim($_POST["update_event_purchaser"]);
    $event_name = trim($_POST["update_event_name_user_payment"]);

    $sql = "UPDATE user_payment_data SET event_purchaser = '$event_purchaser', event_name = '$event_name' WHERE user_payment_id = $user_payment_id";
    $query_run = mysqli_query($mysqli, $sql);

    if($query_run){

        $sql_two = "SELECT * FROM event_data WHERE event_name = '$event_name'";
        $result = $mysqli->query($sql_two);

        if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
        $event_id = $row["event_id"];
        $amount = $row["event_cost"];
        }
        } else {
        echo "0 results";
        }        

        $sql_three = "UPDATE user_payment_data SET event_id = '$event_id', amount = '$amount' WHERE user_payment_id = $user_payment_id";
        $query_run_two = mysqli_query($mysqli, $sql_three);

        $mysqli->query("SET @num := 0;");
        $mysqli->query("UPDATE user_payment_data SET id = @num := (@num + 1);");
        $mysqli->query("ALTER TABLE user_payment_data AUTO_INCREMENT = 1;");

        header(
            "location: http://127.0.0.1:1912/Event_Attendance_System/admin_dashboard.php"
        );
    } else {
        echo "Something went wrong. Please try again later.";

        die(mysqli_error($mysqli));
    }

}

?>