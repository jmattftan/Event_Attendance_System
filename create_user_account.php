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
    <link rel="stylesheet" href="CSS/create_account.css" />
    <link href="Photos/logo.png" rel="icon" />
    <title>Join Us</title>
  </head>
  <body id="vanta_background">
    <div class="container">
      <div class="row d-flex justify-content-center mt-3">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="glassmorphism">
            <form
              action="http://127.0.0.1:1912/Event_Attendance_System/PHP/create_user_account.php"
              id="create_user_account_form"
              method="POST"
            >
              <div class="row">
                <h2 class="mt-3 mb-3 ms-2 title-left">Create Account</h2>
              </div>
              <div class="row mt-3 mb-2">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">Student Number</label>
                  <input
                    id="student_number"
                    name="student_number"
                    class="form-control form-control-md"
                    type="text"
                    placeholder="Enter Student Number"
                    minlength="11"
                    maxlength="11"
                    onkeypress="return /[0-9]/i.test(event.key)"
                    required
                  />
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">Last Name</label>
                  <input
                    id="last_name"
                    name="last_name"
                    class="form-control form-control-md"
                    type="text"
                    placeholder="Enter Last Name"
                    onkeypress="return /[a-z ]/i.test(event.key)"
                    required
                  />
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">First Name</label>
                  <input
                    id="first_name"
                    name="first_name"
                    class="form-control form-control-md"
                    type="text"
                    placeholder="Enter First Name"
                    onkeypress="return /[a-z ]/i.test(event.key)"
                    required
                  />
                </div>
              </div>
              <div class="row mt-3 mb-2">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">Middle Name</label>
                  <input
                    id="middle_name"
                    name="middle_name"
                    class="form-control form-control-md"
                    type="text"
                    placeholder="Enter Middle Name"
                    onkeypress="return /[a-z ]/i.test(event.key)"
                    required
                  />
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">Date of Birth</label>
                  <input
                    id="date_of_birth"
                    name="date_of_birth"
                    class="form-control form-control-md"
                    type="date"
                    placeholder="Enter Date of Birth"
                    required
                  />
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">Sex</label>
                  <select id="sex" name="sex" class="form-select" required>
                    <option selected hidden>Choose Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
              <div class="row mt-3 mb-2">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">Year Level</label>
                  <select
                    id="year_level"
                    name="year_level"
                    class="form-select"
                    required
                  >
                    <option selected hidden>Choose Year Level</option>
                    <option value="1st Year College Student">
                      1st Year College Student
                    </option>
                    <option value="2nd Year College Student">
                      2nd Year College Student
                    </option>
                    <option value="3rd Year College Student">
                      3rd Year College Student
                    </option>
                    <option value="4th Year College Student">
                      4th Year College Student
                    </option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">Program</label>
                  <select
                    id="program"
                    name="program"
                    class="form-select"
                    required
                  >
                    <option selected hidden>Choose Program</option>
                    <option value="Bachelor of Science in Chemical Engineering">
                      Bachelor of Science in Chemical Engineering
                    </option>
                    <option value="Bachelor of Science in Civil Engineering">
                      Bachelor of Science in Civil Engineering
                    </option>
                    <option value="Bachelor of Science in Computer Engineering">
                      Bachelor of Science in Computer Engineering
                    </option>
                    <option
                      value="Bachelor of Science in Electrical Engineering"
                    >
                      Bachelor of Science in Electrical Engineering
                    </option>
                    <option
                      value="Bachelor of Science in Electrical Engineering"
                    >
                      Bachelor of Science in Electronics Engineering
                    </option>
                    <option
                      value="Bachelor of Science in Mechanical Engineering"
                    >
                      Bachelor of Science in Mechanical Engineering
                    </option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">Contact Number</label>
                  <input
                    id="contact_number"
                    name="contact_number"
                    class="form-control form-control-md"
                    type="text"
                    placeholder="Enter Contact Number"
                    minlength="11"
                    maxlength="11"
                    onkeypress="return /[0-9]/i.test(event.key)"
                    required
                  />
                </div>
              </div>
              <div class="row mt-3 mb-2">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">Email Address</label>
                  <input
                    id="email_address"
                    name="email_address"
                    class="form-control form-control-md"
                    type="email"
                    placeholder="Enter Email Address"
                    required
                  />
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">Password</label>
                  <input
                    id="password"
                    name="password"
                    class="form-control form-control-md"
                    type="password"
                    placeholder="Enter Password"
                    onchange="if(this.checkValidity()) form.confirm_password.pattern = this.value;"
                    required
                  />
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
                  <label class="mb-1 ms-2">Confirm Password</label>
                  <input
                    id="confirm_password"
                    name="confirm_password"
                    class="form-control form-control-md"
                    type="password"
                    placeholder="Enter Confirm Password"
                    onchange="if(this.checkValidity()) form.confirm_password.pattern = this.value;"
                    required
                  />
                </div>
                <div class="text-end">
                  <button
                    type="submit"
                    class="btn btn-outline-light mt-3 mb-2 w-25"
                  >
                    Confirm
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="text-center mt-3 mb-2">
            <a class="text-white" href="log_in.php">Already have an Account?</a>
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
