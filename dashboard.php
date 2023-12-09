<?php
include "PHP/database.php";

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header(
        "location: http://127.0.0.1:1912/Event_Attendance_System/log_in.php"
    );
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron&family=Roboto:wght@100&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="CSS/dashboard.css" />
    <link href="Photos/logo.png" rel="icon" />
    <title>Dashboard</title>
  </head>
  <body id="vanta_background">
    <div class="container">
      <nav class="navbar navbar-expand-lg glassmorphism mt-3 mb-5">
        <div class="container-fluid">
          <a class="navbar-brand text-white mt-2 mb-2" href="#"
            ><img
              src="Photos/logo.png"
              alt=""
              class="logo ms-2 me-2"
            />EVENTWING</a
          >
          <div class="navbar justify-content-end mt-2 mb-2 ms-2 me-2">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <button
                  class="navbar_btn btn btn-dark dropdown-toggle"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                <?php echo $_SESSION["first_name"] .
                    " " .
                    $_SESSION["last_name"]; ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li>
                    <button
                      class="dropdown-item my_events"
                      data-bs-target="#My_Events_ModalToggle"
                      data-bs-toggle="modal"
                    >
                      My Events
                    </button>
                  </li>
                  <li>
                    <button
                      class="dropdown-item profile_settings"
                      data-bs-target="#Profile_Settings_ModalToggle"
                      data-bs-toggle="modal"
                    >
                      Profile Settings
                    </button>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="row text-center mt-3 mb-2">
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 mb-2">
          <div class="glassmorphism p-2">
            <label class="mt-1 mb-1">TOTAL NO. OF USERS</label>
            <?php
            $sql = "SELECT * FROM user_account_data";
            $result = $mysqli->query($sql);

            $total_user_account = $result->num_rows;
            ?>  
            <div class="number mt-1 mb-1"><h1><?php echo $total_user_account; ?></h1></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 mb-2">
          <div class="glassmorphism p-2">
            <label class="mt-1 mb-1">TOTAL NO. OF EVENTS</label>
            <?php
            $sql = "SELECT * FROM event_data";
            $result = $mysqli->query($sql);

            $total_event = $result->num_rows;
            ?>              
            <div class="number mt-1 mb-1"><h1><?php echo $total_event; ?></h1></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 mb-2">
          <div class="glassmorphism p-2">
            <label class="mt-1 mb-1">TOTAL NO. OF UPCOMING EVENTS</label>
            <?php
            $current_date = date("Y-m-d");

            $sql = "SELECT * FROM  event_data WHERE event_date > '$current_date'";
            $result = $mysqli->query($sql);

            $total_upcoming_event = $result->num_rows;
            ?>  
            <div class="number mt-1 mb-1"><h1><?php echo $total_upcoming_event; ?></h1></div>
          </div>
        </div>
      </div>
      <div class="row text-start mt-3 mb-2">
      <?php
      $sql = "SELECT * FROM event_data";
      $result = $mysqli->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {

              $event_id = $row["event_id"];
              $event_name = $row["event_name"];
              $event_description = $row["event_description"];
              $event_type = $row["event_type"];
              $event_date = $row["event_date"];
              $event_start_time = $row["event_start_time"];
              $event_end_time = $row["event_end_time"];
              $event_location = $row["event_location"];
              $event_speaker = $row["event_speaker"];
              $event_handler = $row["event_handler"];
              $event_cost = $row["event_cost"];
              $event_created = $row["event_created"];
              $event_updated = $row["event_updated"];
              ?>  
        <div
          class="col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-3 mb-2 d-flex justify-content-center"
        >
          <div class="card" style="width: 18rem">
          <!--
            <img
              src="Photos/arduino_workshop.jpg"
              class="card-img-top"
              alt="..."
            />
            -->
            <div class="card-body">
              <h5 class="card-title"><?php echo $event_name; ?></h5>
              <p class="card-text">
              <?php echo $event_description; ?>
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="card-list-1 list-group-item">Event Speaker: <?php echo $event_speaker; ?></li>
              <li class="card-list-2 list-group-item">
                When: <?php echo $event_date . " " . $event_start_time; ?>
              </li>
              <li class="card-list-3 list-group-item">
                Where: <?php echo $event_location; ?>
              </li>
            </ul>
            <div class="card-body text-center">
              <a
                class="card-link text-dark"
                data-bs-target="#More_Details_ModalToggle"
                data-bs-toggle="modal"
              >
                More Details
              </a>
              <a
                class="card-link text-dark"
                data-bs-target="#Join_Event_ModalToggle"
                data-bs-toggle="modal"
              >
                Join Event
              </a>
            </div>
          </div>
        </div>
      <?php
          }
      }
      ?>  
      </div>
    </div>
    <?php include "PHP/dashboard_modals.php" ?>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
  <script src="Javascript/three.min.js"></script>
  <script src="Javascript/vanta.birds.min.js"></script>
  <script src="Javascript/vanta_birds.js"></script>
  <script src="Javascript/lottie_player.js"></script>
</html>
