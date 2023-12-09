<?php

session_start();

// Check if the user is already logged in, if yes then redirect him to main page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: http://127.0.0.1:1912/Event_Attendance_System/admin_dashboard.php");
  exit;
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
    <link rel="stylesheet" href="CSS/log_in.css" />
    <link href="Photos/logo.png" rel="icon" />
    <title>Welcome</title>
  </head>
  <body id="vanta_background">
    <div class="container">
      <div class="row d-flex justify-content-center mt-3">
        <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
          <div class="glassmorphism">
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="mt-5">
                  <div class="d-flex justify-content-center">
                    <lottie-player
                      src="Lottie/animation.json"
                      background="transparent"
                      speed="1"
                      style="width: 200px; height: 200px;"
                      autoplay
                      loop
                    ></lottie-player>
                  </div>
                  <h2 class="text-center mb-5">EVENTWING</h2>
                </div>
              </div>

              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <form
                  action="http://127.0.0.1:1912/Event_Attendance_System/PHP/admin_log_in.php"
                  id="log_in_account_form"
                  method="POST"
                >
                  <h2 class="mt-3 mb-3 ms-2 title-left">Log In</h2>
                  <label class="mt-3 ms-2">Email Address</label>
                  <div class="form-floating mt-1 mb-2">
                    <input
                      id="email_address"
                      name="email_address"
                      type="email"
                      class="form-control"
                      placeholder=""
                      required
                    />
                    <label>Enter Email address</label>
                  </div>
                  <label class="mt-3 ms-2">Password</label>
                  <div class="form-floating mt-1 mb-2">
                    <input
                      id="password"
                      name="password"
                      type="password"
                      class="form-control"
                      placeholder=""
                      required
                    />
                    <label>Enter Password</label>
                  </div>
                  <div class="text-end">
                    <button
                      type="submit"
                      class="btn btn-outline-light mt-3 mb-2 w-50"
                    >
                      Log In
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="text-center mt-3 mb-2">
            <a class="text-white" href="forgot_password.php"
              >Forgot Password?</a
            >
          </div>
        </div>
      </div>
    </div>
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
