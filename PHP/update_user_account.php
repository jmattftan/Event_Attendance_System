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
    $contact_number = trim($_POST["contact_number"]);
    $email_address = trim($_POST["email_address"]);
    $student_number = trim($_POST["student_number"]);

    $sql = "UPDATE user_account_data SET email_address = '$email_address', contact_number = '$contact_number' WHERE student_number = $student_number";
    $query_run = mysqli_query($mysqli, $sql);

    if($query_run){       

        $mysqli->query("SET @num := 0;");
        $mysqli->query("UPDATE user_account_data SET id = @num := (@num + 1);");
        $mysqli->query("ALTER TABLE user_account_data AUTO_INCREMENT = 1;");

        header(
            "location: http://127.0.0.1:1912/Event_Attendance_System/dashboard.php"
        );
    } else {
        echo "Something went wrong. Please try again later.";

        die(mysqli_error($mysqli));
    }

}

?>