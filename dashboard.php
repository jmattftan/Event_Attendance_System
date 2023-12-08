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
                <?php echo $_SESSION["first_name"] . ' ' . $_SESSION["last_name"] ?>
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
            <label class="mt-1 mb-1">NO. OF USERS</label>
            <div class="number mt-1 mb-1"><h1>50</h1></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 mb-2">
          <div class="glassmorphism p-2">
            <label class="mt-1 mb-1">NO. OF EVENTS</label>
            <div class="number mt-1 mb-1"><h1>40</h1></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 mb-2">
          <div class="glassmorphism p-2">
            <label class="mt-1 mb-1">NO. OF UPCOMING EVENTS</label>
            <div class="number mt-1 mb-1"><h1>30</h1></div>
          </div>
        </div>
      </div>
      <div class="row text-start mt-3 mb-2">
        <div
          class="col-sm-12 col-md-12 col-lg-3 col-xl-3 mt-3 mb-2 d-flex justify-content-center"
        >
          <div class="card" style="width: 18rem">
            <img
              src="Photos/arduino_workshop.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Arduino Workshop</h5>
              <p class="card-text">
                In the Arduino Workshop, the speaker will be discussing all the
                basic knowledge that will help you create your first Ardiuno
                Project specifically I2C connections.
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="card-list-1 list-group-item">Speaker: James Tan</li>
              <li class="card-list-2 list-group-item">
                When: December 11, 2023, 12:00 PM
              </li>
              <li class="card-list-3 list-group-item">
                Where: University of the East Manila
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
        <div
          class="col-sm-12 col-md-12 col-lg-3 col-xl-3 mt-3 mb-2 d-flex justify-content-center"
        >
          <div class="card" style="width: 18rem">
            <img
              src="Photos/arduino_workshop.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Arduino Workshop</h5>
              <p class="card-text">
                In the Arduino Workshop, the speaker will be discussing all the
                basic knowledge that will help you create your first Ardiuno
                Project specifically I2C connections.
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="card-list-1 list-group-item">Speaker: James Tan</li>
              <li class="card-list-2 list-group-item">
                When: December 11, 2023, 12:00 PM
              </li>
              <li class="card-list-3 list-group-item">
                Where: University of the East Manila
              </li>
            </ul>
            <div class="card-body text-center">
              <a href="#" class="card-link text-dark">More Details</a>
              <a href="#" class="card-link text-dark">Join Event</a>
            </div>
          </div>
        </div>
        <div
          class="col-sm-12 col-md-12 col-lg-3 col-xl-3 mt-3 mb-2 d-flex justify-content-center"
        >
          <div class="card" style="width: 18rem">
            <img
              src="Photos/arduino_workshop.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Arduino Workshop</h5>
              <p class="card-text">
                In the Arduino Workshop, the speaker will be discussing all the
                basic knowledge that will help you create your first Ardiuno
                Project specifically I2C connections.
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="card-list-1 list-group-item">Speaker: James Tan</li>
              <li class="card-list-2 list-group-item">
                When: December 11, 2023, 12:00 PM
              </li>
              <li class="card-list-3 list-group-item">
                Where: University of the East Manila
              </li>
            </ul>
            <div class="card-body text-center">
              <a href="#" class="card-link text-dark">More Details</a>
              <a href="#" class="card-link text-dark">Join Event</a>
            </div>
          </div>
        </div>
        <div
          class="col-sm-12 col-md-12 col-lg-3 col-xl-3 mt-3 mb-2 d-flex justify-content-center"
        >
          <div class="card" style="width: 18rem">
            <img
              src="Photos/arduino_workshop.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Arduino Workshop</h5>
              <p class="card-text">
                In the Arduino Workshop, the speaker will be discussing all the
                basic knowledge that will help you create your first Ardiuno
                Project specifically I2C connections.
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="card-list-1 list-group-item">Speaker: James Tan</li>
              <li class="card-list-2 list-group-item">
                When: December 11, 2023, 12:00 PM
              </li>
              <li class="card-list-3 list-group-item">
                Where: University of the East Manila
              </li>
            </ul>
            <div class="card-body text-center">
              <a href="#" class="card-link text-dark">More Details</a>
              <a href="#" class="card-link text-dark">Join Event</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Start Modal My Events-->
    <div
      class="modal fade text-dark"
      id="My_Events_ModalToggle"
      aria-hidden="true"
      aria-labelledby="ModalToggleLabel"
      tabindex="-1"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="ModalToggleLabel">My Events</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">My Events</div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-dark"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--End Modal Events to Handle-->

    <!--Start Modal Profile Settings-->
    <div
      class="modal fade text-dark"
      id="Profile_Settings_ModalToggle"
      aria-hidden="true"
      aria-labelledby="ModalToggleLabel"
      tabindex="-1"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="ModalToggleLabel">
              Profile Settings
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">Profile Settings</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark">Save Changes</button>
            <a href="PHP/log_out.php"  type="button" class="btn btn-danger">Log Out</a>
          </div>
        </div>
      </div>
    </div>
    <!--End Modal Profile Settings-->

    <!--Start Modal More Details-->
    <div
      class="modal fade text-dark"
      id="More_Details_ModalToggle"
      aria-hidden="true"
      aria-labelledby="ModalToggleLabel"
      tabindex="-1"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="ModalToggleLabel">Event Name</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">Event Details</div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-dark"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--End Modal More Details-->

    <!--Start Modal Joint Event-->
    <div
      class="modal fade text-dark"
      id="Join_Event_ModalToggle"
      aria-hidden="true"
      aria-labelledby="ModalToggleLabel"
      tabindex="-1"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="ModalToggleLabel">Payment</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">Payment Details</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark">
              Pay to Join Event
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--End Modal Join Event-->
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
