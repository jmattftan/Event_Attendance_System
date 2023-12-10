<?php
declare(strict_types=1);

error_reporting(-1);
ini_set('display_errors', 'true');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_purchaser = trim($_POST["event_purchaser"]);
    $event_name = trim($_POST["event_name_user_payment"]);

    $sql = "SELECT * FROM event_data WHERE event_name = '$event_name'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $event_id = $row["event_id"];
        $amount = $row["event_cost"];
    }
    } else {
    echo "0 results";
    }

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");
    $user_payment_id = $seconds.$year.$month.$day.$hour.$minute;

    $payment_method = "Cash";
    $attendance = 0;

    $sql = "INSERT INTO user_payment_data (user_payment_id, event_purchaser, event_id, event_name, amount, payment_method, attendance) VALUES ('$user_payment_id', '$event_purchaser', '$event_id', '$event_name', '$amount', '$payment_method', '$attendance')";
    $query_run = mysqli_query($mysqli, $sql);

    if ($query_run) {
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
