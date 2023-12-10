<?php

include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $delete_user_payment_id = trim($_POST["delete_user_payment_id"]);

    $sql = "DELETE FROM user_payment_data where user_payment_id = $delete_user_payment_id";
    $query_run = mysqli_query($mysqli, $sql);

    if ($query_run) {
        $mysqli->query("SET @num := 0;");
        $mysqli->query("UPDATE user_payment_data SET id = @num := (@num + 1);");
        $mysqli->query("ALTER TABLE user_payment_data AUTO_INCREMENT = 1;");

        header(
            "location: http://127.0.0.1:1912/Event_Attendance_System/admin_dashboard.php"
        );
    } else {
        echo "Oops! Something went wrong. Please try again later.";

        die(mysqli_error($mysqli));
    }
}

?>