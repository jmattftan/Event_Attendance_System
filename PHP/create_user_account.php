<?php
declare(strict_types=1);

error_reporting(-1);
ini_set('display_errors', 'true');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_number = trim($_POST["student_number"]);
    $last_name = trim($_POST["last_name"]);
    $first_name = trim($_POST["first_name"]);
    $middle_name = trim($_POST["middle_name"]);
    $date_of_birth = trim($_POST["date_of_birth"]);
    $sex = trim($_POST["sex"]);
    $year_level = trim($_POST["year_level"]);
    $program = trim($_POST["program"]);
    $contact_number = trim($_POST["contact_number"]);
    $email_address = trim($_POST["email_address"]);
    $password = trim($_POST["password"]);
    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user_account_data (student_number, last_name, first_name, middle_name, date_of_birth, sex, year_level, program, contact_number, email_address, password) VALUES ('$student_number', '$last_name', '$first_name', '$middle_name', '$date_of_birth', '$sex', '$year_level', '$program', '$contact_number', '$email_address', '$encrypted_password')";
    $query_run = mysqli_query($mysqli, $sql);

    if ($query_run) {
        $mysqli->query("SET @num := 0;");
        $mysqli->query("UPDATE user_account_data SET id = @num := (@num + 1);");
        $mysqli->query("ALTER TABLE user_account_data AUTO_INCREMENT = 1;");

        header(
            "location: http://127.0.0.1:1912/Event_Attendance_System/log_in.php"
        );
    } else {
        echo "Something went wrong. Please try again later.";

        die(mysqli_error($mysqli));
    }
}
?>
