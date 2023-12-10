<?php

include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $admin_number_delete = trim($_POST["delete_admin_number_admin"]);

    $sql = "DELETE FROM admin_account_data where admin_number = '$admin_number_delete'";
    $query_run = mysqli_query($mysqli, $sql);

    if ($query_run) {
        $mysqli->query("SET @num := 0;");
        $mysqli->query("UPDATE admin_account_data SET id = @num := (@num + 1);");
        $mysqli->query("ALTER TABLE admin_account_data AUTO_INCREMENT = 1;");

        header(
            "location: http://127.0.0.1:1912/Event_Attendance_System/admin_dashboard.php"
        );
    } else {
        echo "Oops! Something went wrong. Please try again later.";

        die(mysqli_error($mysqli));
    }
}

?>