<?php

include "database.php";

session_start();

session_destroy();

header("location: http://127.0.0.1:1912/Event_Attendance_System/admin_log_in.php");
