<?php
declare(strict_types=1);

error_reporting(-1);
ini_set('display_errors', 'true');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_address = trim($_POST["email_address"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT student_number, first_name, last_name, email_address, contact_number, password FROM user_account_data WHERE email_address = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $param_email_address);

        $param_email_address = $email_address;

        if ($stmt->execute()) {
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                $stmt->bind_result(
                    $student_number,
                    $first_name,
                    $last_name,
                    $email_address,
                    $contact_number,
                    $hashed_password
                );

                if ($stmt->fetch()) {
                    if (password_verify($password, $hashed_password)) {
                        session_start();

                        $_SESSION["loggedin"] = true;
                        $_SESSION["student_number"] = $student_number;
                        $_SESSION["first_name"] = $first_name;
                        $_SESSION["last_name"] = $last_name;
                        $_SESSION["email_address"] = $email_address;
                        $_SESSION["contact_number"] = $contact_number;
                        $_SESSION["password"] = $hashed_password;

                        header(
                            "location: http://127.0.0.1:1912/Event_Attendance_System/dashboard.php"
                        );
                    } else {
                        header(
                            "location: http://127.0.0.1:1912/Event_Attendance_System/log_in.php"
                        );
                    }
                }
            } else {
                header(
                    "location: http://127.0.0.1:1912/Event_Attendance_System/log_in.php"
                );
            }
        }
    }
}
?>