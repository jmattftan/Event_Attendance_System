<?php
include "PHP/database.php"; 

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header(
        "location: http://127.0.0.1:1912/Event_Attendance_System/admin_log_in.php"
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
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css"
    />
    <link rel="stylesheet" href="CSS/admin_dashbboard.css" />
    <link href="Photos/logo.png" rel="icon" />
    <title>Admin Dashboard</title>
  </head>
  <body id="vanta_background">
    <div class="container">
      <nav class="navbar navbar-expand-lg glassmorphism mt-2 mb-5">
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
                <?php echo $_SESSION["first_name"] . ' ' . $_SESSION["last_name"] ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li>
                    <a href="PHP/admin_log_out.php" class="dropdown-item bg-danger">Log Out</a>
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
            <label class="mt-1 mb-1">NO. OF USERS</label>
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
            <label class="mt-1 mb-1">NO. OF UPCOMING EVENTS</label>
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
      <div class="row mt-3 mb-2">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 mb-2">
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button bg-dark text-white btn-dark"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseOne"
                  aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne"
                >
                  EVENTS
                </button>
              </h2>
              <div
                id="panelsStayOpen-collapseOne"
                class="accordion-collapse collapse show"
              >
                <div class="accordion-body p-2">
                  <button
                    class="btn btn-dark bi bi-plus-circle user_account_button_action mt-2"
                    data-bs-target="#Add_Event_ModalToggle"
                    data-bs-toggle="modal"
                  >
                    Create Event
                  </button>
                  <table
                    id="event_table"
                    class="event_table display text-center"
                    style="width: 100%;"
                  >
                    <thead>
                      <tr>
                        <th>Event ID</th>
                        <th>Event Name</th>
                        <th>Event Type</th>
                        <th>Event Date</th>
                        <th>Event Start Time</th>
                        <th>Event End Time</th>
                        <th>Event Location</th>
                        <th>Event Speaker</th>
                        <th>Event Handler</th>
                        <th>Event Cost</th>
                        <th>Event Created</th>
                        <th>Event Updated</th>
                        <th style="display: none">Event Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                   <?php
                   $sql = "SELECT * FROM event_data";
                   $result = $mysqli->query($sql);

                   if ($result->num_rows > 0) {
                       // output data of each row
                       while ($row = $result->fetch_assoc()) {

                           $event_id = $row["event_id"];
                           $event_name = $row["event_name"];
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
                           $event_description = $row["event_description"];
                           ?>                        
                      <tr>
                        <td><?php echo $event_id; ?></td>
                        <td><?php echo $event_name; ?></td>
                        <td><?php echo $event_type; ?></td>
                        <td><?php echo $event_date; ?></td>
                        <td><?php echo $event_start_time; ?></td>
                        <td><?php echo $event_end_time; ?></td>
                        <td><?php echo $event_location; ?></td>
                        <td><?php echo $event_speaker; ?></td>
                        <td><?php echo $event_handler; ?></td>
                        <td><?php echo $event_cost; ?></td>
                        <td><?php echo $event_created; ?></td>
                        <td><?php echo $event_updated; ?></td>
                        <td style="display: none"><?php echo $event_description; ?></td>
                        <td class="d-flex justify-content-center">
                          <a
                            class="btn btn-dark bi bi-people-fill event_attendance_button_action ms-1 me-1"
                            href="http://127.0.0.1:1912/Event_Attendance_System/event_attendance.php?event_id=<?php echo $event_id ?>"
                          ></a>
                          <button
                            class="btn btn-dark bi bi-gear-fill update_event_button_action ms-1 me-1"
                            data-bs-target="#Update_Event_ModalToggle"
                            data-bs-toggle="modal"
                          ></button>
                        </td>
                      </tr>
                      <?php
                       }
                   }
                   ?>                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button bg-dark text-white collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseTwo"
                  aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseTwo"
                >
                  USER ACCOUNTS
                </button>
              </h2>
              <div
                id="panelsStayOpen-collapseTwo"
                class="accordion-collapse collapse"
              >
                <div class="accordion-body p-2">
                  <table
                    id="user_account_table"
                    class="user_account_table display text-center"
                    style="width: 100%;"
                  >
                    <thead>
                      <tr>
                        <th>Student Number</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Date of Birth</th>
                        <th>Sex</th>
                        <th>Year Level</th>
                        <th>Program</th>
                        <th>Contact Number</th>
                        <th>Email Address</th>
                        <th>User Account Created</th>
                        <th>User Account Updated</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                   <?php
                   $sql = "SELECT * FROM user_account_data";
                   $result = $mysqli->query($sql);

                   if ($result->num_rows > 0) {
                       // output data of each row
                       while ($row = $result->fetch_assoc()) {

                           $student_number = $row["student_number"];
                           $last_name = $row["last_name"];
                           $first_name = $row["first_name"];
                           $middle_name = $row["middle_name"];
                           $date_of_birth = $row["date_of_birth"];
                           $sex = $row["sex"];
                           $year_level = $row["year_level"];
                           $program = $row["program"];
                           $contact_number = $row["contact_number"];
                           $email_address = $row["email_address"];
                           $user_account_created = $row["user_account_created"];
                           $user_account_updated = $row["user_account_updated"];
                           ?>                      
                      <tr>
                        <td><?php echo $student_number; ?></td>
                        <td><?php echo $last_name; ?></td>
                        <td><?php echo $first_name; ?></td>
                        <td><?php echo $middle_name; ?></td>
                        <td><?php echo $date_of_birth; ?></td>
                        <td><?php echo $sex; ?></td>
                        <td><?php echo $year_level; ?></td>
                        <td><?php echo $program; ?></td>
                        <td><?php echo $contact_number; ?></td>
                        <td><?php echo $email_address; ?></td>
                        <td><?php echo $user_account_created; ?></td>
                        <td><?php echo $user_account_updated; ?></td>
                        <td class="d-flex justify-content-center">
                          <div class="text-center">
                            <button
                              class="btn btn-dark bi bi-gear-fill user_account_button_action"
                              data-bs-target="#User_Account_ModalToggle"
                              data-bs-toggle="modal"
                            ></button>
                          </div>
                        </td>
                      </tr>
                      <?php
                       }
                   }
                   ?>                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button bg-dark text-white collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseThree"
                  aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseThree"
                >
                  USER PAYMENTS
                </button>
              </h2>
              <div
                id="panelsStayOpen-collapseThree"
                class="accordion-collapse collapse"
              >
                <div class="accordion-body p-2">
                  <button
                    class="btn btn-dark bi bi-plus-circle user_account_button_action mt-2"
                    data-bs-target="#Add_User_Payment_ModalToggle"
                    data-bs-toggle="modal"
                  >
                    Create User Payment
                  </button>
                  <table
                    id="user_payment_table"
                    class="user_payment_table display text-center"
                    style="width: 100%;"
                  >
                    <thead>
                      <tr>
                        <th>User Payment ID</th>
                        <th>Event Purchaser</th>
                        <th>Event ID</th>
                        <th>Event Name</th>
                        <th>Amount</th>
                        <th>Payment Method</th>
                        <th>Date of Purchase</th>
                        <th>User Payment Updated</th>
                        <th>Attendance</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                   <?php
                   $sql = "SELECT * FROM user_payment_data";
                   $result = $mysqli->query($sql);

                   if ($result->num_rows > 0) {
                       // output data of each row
                       while ($row = $result->fetch_assoc()) {
                           $user_payment_id = $row["user_payment_id"];
                           $event_purchaser = $row["event_purchaser"];
                           $event_id = $row["event_id"];
                           $event_name = $row["event_name"];
                           $amount = $row["amount"];
                           $payment_method = $row["payment_method"];
                           $date_of_purchase = $row["date_of_purchase"];
                           $user_payment_updated = $row["user_payment_updated"];
                           $attendance = $row["attendance"];
                           ?>
                      <tr>
                        <td><?php echo $user_payment_id; ?></td>
                        <td><?php echo $event_purchaser; ?></td>
                        <td><?php echo $event_id; ?></td>
                        <td><?php echo $event_name; ?></td>
                        <td><?php echo $amount; ?></td>
                        <td><?php echo $payment_method; ?></td>
                        <td><?php echo $date_of_purchase; ?></td>
                        <td><?php echo $user_payment_updated; ?></td>
                        <td><?php echo $attendance; ?></td>
                        <td class="d-flex justify-content-center">
                          <div class="text-center">
                            <button
                              class="btn btn-dark bi bi-gear-fill user_payment_button_action"
                              data-bs-target="#Update_User_Payment_ModalToggle"
                              data-bs-toggle="modal"
                            ></button>
                          </div>
                        </td>
                      </tr>
                      <?php
                       }
                   }
                   ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button bg-dark text-white collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseFour"
                  aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseFour"
                >
                  ADMIN ACCOUNTS
                </button>
              </h2>
              <div
                id="panelsStayOpen-collapseFour"
                class="accordion-collapse collapse"
              >
                <div class="accordion-body p-2">
                  <button
                    class="btn btn-dark bi bi-plus-circle user_account_button_action mt-2"
                    data-bs-target="#Add_Admin_Account_ModalToggle"
                    data-bs-toggle="modal"
                  >
                    Create Admin Account
                  </button>
                  <table
                    id="admin_table"
                    class="admin_table display text-center"
                    style="width: 100%;"
                  >
                    <thead>
                      <tr>
                        <th>Admin Number</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Date of Birth</th>
                        <th>Sex</th>
                        <th>Contact Number</th>
                        <th>Email Address</th>
                        <th>Account Created</th>
                        <th>Account Updated</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php
                  $sql = "SELECT * FROM admin_account_data";
                  $result = $mysqli->query($sql);

                  if ($result->num_rows > 0) {
                      // output data of each row
                      while ($row = $result->fetch_assoc()) {

                          $admin_number = $row["admin_number"];
                          $last_name = $row["last_name"];
                          $first_name = $row["first_name"];
                          $middle_name = $row["middle_name"];
                          $date_of_birth = $row["date_of_birth"];
                          $sex = $row["sex"];
                          $contact_number = $row["contact_number"];
                          $email_address = $row["email_address"];
                          $admin_account_created =
                              $row["admin_account_created"];
                          $admin_account_updated =
                              $row["admin_account_updated"];
                          ?>
                     <tr>
                        <td><?php echo $admin_number; ?></td>
                        <td><?php echo $last_name; ?></td>
                        <td><?php echo $first_name; ?></td>
                        <td><?php echo $middle_name; ?></td>
                        <td><?php echo $date_of_birth; ?></td>
                        <td><?php echo $sex; ?></td>
                        <td><?php echo $contact_number; ?></td>
                        <td><?php echo $email_address; ?></td>
                        <td><?php echo $admin_account_created; ?></td>
                        <td><?php echo $admin_account_updated; ?></td>
                        <td class="d-flex justify-content-center">
                          <div class="text-center">
                            <button
                              class="btn btn-dark bi bi-gear-fill admin_account_button_action"
                              data-bs-target="#Admin_Account_ModalToggle"
                              data-bs-toggle="modal"
                            ></button>
                          </div>
                        </td>
                      </tr>
                      <?php
                      }
                  }
                  ?>
                   </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "PHP/admin_dashboard_modals.php"; ?>
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
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="Javascript/datatables.js"></script>
  <script src="Javascript/event_update_delete.js"></script>
  <script src="Javascript/user_payment_update_delete.js"></script>
  <script src="Javascript/admin_update_delete.js"></script>
</html> 