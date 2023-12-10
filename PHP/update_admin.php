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
    $admin_number_update = trim($_POST["update_admin_number_admin"]);
    $last_name = trim($_POST["update_last_name_admin"]);
    $first_name = trim($_POST["update_first_name_admin"]);
    $middle_name = trim($_POST["update_middle_name_admin"]);
    $date_of_birth = trim($_POST["update_date_of_birth_admin"]);
    $sex = trim($_POST["update_sex_admin"]);
    $contact_number= trim($_POST["update_contact_number_admin"]);
    $email_address = trim($_POST["update_email_address_admin"]);
    $password = trim($_POST["update_password_admin"]);
    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

    if ($password != NULL && $password != NULL) {
        $sql_password = "UPDATE admin_account_data SET password = '$encrypted_password' WHERE admin_number = $admin_number_update";
        $query_run_password = mysqli_query($mysqli, $sql_password);
    }

    $sql = "UPDATE admin_account_data SET last_name = '$last_name', first_name = '$first_name', middle_name = '$middle_name', date_of_birth = '$date_of_birth', sex = '$sex', contact_number = '$contact_number', email_address = '$email_address' WHERE admin_number = $admin_number_update";
    $query_run = mysqli_query($mysqli, $sql);

    if($query_run){
        $mysqli->query("SET @num := 0;");
        $mysqli->query("UPDATE admin_account_data SET id = @num := (@num + 1);");
        $mysqli->query("ALTER TABLE admin_account_data AUTO_INCREMENT = 1;");

        header(
            "location: http://127.0.0.1:1912/Event_Attendance_System/admin_dashboard.php"
        );
    } else {
        echo "Something went wrong. Please try again later.";

        die(mysqli_error($mysqli));
    }

}

?>