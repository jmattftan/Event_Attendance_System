<?php
declare(strict_types=1);

error_reporting(-1);
ini_set('display_errors', 'true');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $last_name = trim($_POST["last_name_admin"]);
    $first_name= trim($_POST["first_name_admin"]);
    $middle_name = trim($_POST["middle_name_admin"]);
    $date_of_birth= trim($_POST["date_of_birth_admin"]);
    $sex = trim($_POST["sex_admin"]);
    $contact_number = trim($_POST["contact_number_admin"]);
    $email_address = trim($_POST["email_address_admin"]);
    $password = trim($_POST["password_admin"]);
    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

    date_default_timezone_set("Asia/Manila");
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("h");
    $minute = date("i");
    $seconds =  date("s");

    $admin_number = $seconds.$minute.$hour.$day.$month.$year;

    $sql = "INSERT INTO admin_account_data (admin_number, last_name, first_name, middle_name, date_of_birth, sex, contact_number, email_address, password) VALUES ('$admin_number', '$last_name', '$first_name', '$middle_name', '$date_of_birth', '$sex', '$contact_number', '$email_address', '$encrypted_password')";
    $query_run = mysqli_query($mysqli, $sql);

    if ($query_run) {
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
