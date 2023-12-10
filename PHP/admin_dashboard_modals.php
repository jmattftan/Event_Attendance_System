<!--Start Modal Event-->
<div
  class="modal fade"
  id="Update_Event_ModalToggle"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel"
  tabindex="-1"
>
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body bg-dark">
          <div class="row">
            <h2 class="mt-3 mb-3 ms-2 ">Update Event</h2>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Name</label>
              <input
                id="update_event_name_event"
                name="update_event_name_event"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter Event Name"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Description</label>
              <textarea
                id="update_event_description"
                name="update_event_description"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter Event Description"
                required
              ></textarea>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Type</label>
              <select
                id="update_event_type"
                name="update_event_type"
                class="form-select"
                required
              >
                <option selected hidden>Choose Event Type</option>
                <option value="Curricular">Curricular</option>
                <option value="Extracurricular">Extracurricular</option>
                <option value="Outreach">Outreach</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Date</label>
              <input
                id="update_event_date"
                name="update_event_date"
                class="form-control form-control-md"
                type="date"
                placeholder="Enter Date of Event"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Start Time</label>
              <input
                id="update_event_start_time"
                name="update_event_start_time"
                class="form-control form-control-md"
                type="time"
                placeholder="Enter Event Start Time"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event End Time</label>
              <input
                id="update_event_end_time"
                name="update_event_end_time"
                class="form-control form-control-md"
                type="time"
                placeholder="Enter End Time"
                required
              />
            </div>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Location</label>
              <input
                id="update_event_location"
                name="update_event_location"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter Event Location"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Speaker</label>
              <input
                id="update_event_speaker"
                name="update_event_speaker"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter Event Speaker"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Handler</label>
              <select
                id="update_event_handler"
                name="update_event_handler"
                class="form-select"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              >
               <option selected hidden>Choose Event Handler</option>              
               <?php
               $sql = "SELECT * FROM admin_account_data";
               $result = $mysqli->query($sql);

               if ($result->num_rows > 0) {
                   // output data of each row
                   while ($row = $result->fetch_assoc()) {

                       $first_name = $row["first_name"];
                       $last_name = $row["last_name"];
                       ?>
                <option value="<?php echo $first_name .
                    " " .
                    $last_name; ?>"><?php echo $first_name .
    " " .
    $last_name; ?></option>
               <?php
                   }
               }
               ?>                  
              </select>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Cost</label>
              <input
                id="update_event_cost"
                name="update_event_cost"
                class="form-control form-control-md"
                type="number"
                placeholder="Enter Event Cost"
                required
              />
            </div>
          </div>
        </div>
      <div class="modal-footer">
        <button
          class="btn btn-dark delete_event_button_action d-flex justify-content-between align-items-center"
          data-bs-target="#Delete_Event_ModalToggle2"
          data-bs-toggle="modal"
        >
          <span>Delete Event</span>
          <span class="ms-1 bi bi-arrow-right-circle"></span>
        </button>
        <button type="button" class="btn btn-dark">Save Changes</button>
      </div>
    </div>
  </div>
</div>
<div
  class="modal fade"
  id="Delete_Event_ModalToggle2"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel2"
  tabindex="-1"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body bg-dark">
        <div class="row">
          <h2 class="mt-3 mb-3 ms-2 ">Delete Event</h2>
        </div>        
        <p name="delete_event" id="delete_event" class="mt-3 mb-3 ms-2" style="font-weight: bold;"></p>
        <input name="delete_event_id" id="delete_event_id" class="mt-3 mb-3" style="display: none;"/>
      </div>
      <div class="modal-footer">
        <button
          class="btn btn-dark bi bi-arrow-left-circle"
          data-bs-target="#Update_Event_ModalToggle"
          data-bs-toggle="modal"
        >
          Update Event
        </button>
        <button type="button" class="btn btn-danger">Delete Event</button>
      </div>
    </div>
  </div>
</div>
<!--End Modal Events-->

<!--Start Modal User Account-->
<div
  class="modal fade text-dark"
  id="User_Account_ModalToggle"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel"
  tabindex="-1"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalToggleLabel">
          Update User Account
        </h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">Update User Account</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark">Save Changes</button>
        <button
          class="btn btn-dark d-flex justify-content-between align-items-center"
          data-bs-target="#User_Account_ModalToggle2"
          data-bs-toggle="modal"
        >
          <span>Delete User Account</span>
          <span class="ms-1 bi bi-arrow-right-circle"></span>
        </button>
      </div>
    </div>
  </div>
</div>
<div
  class="modal fade text-dark"
  id="User_Account_ModalToggle2"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel2"
  tabindex="-1"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalToggleLabel2">
          Delete User Account
        </h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">Delete Account</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark">Save Changes</button>
        <button
          class="btn btn-dark bi bi-arrow-left-circle"
          data-bs-target="#User_Account_ModalToggle"
          data-bs-toggle="modal"
        >
          Update User Account
        </button>
      </div>
    </div>
  </div>
</div>
<!--End Modal User Account-->

<!--Start Modal User Payment-->
<div
  class="modal fade"
  id="Update_User_Payment_ModalToggle"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel"
  tabindex="-1"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body bg-dark">
          <div class="row">
            <h2 class="mt-3 mb-3 ms-2 ">
              Update User Payment
            </h2>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Purchaser</label>
              <select
                id="update_event_purchaser"
                name="update_event_purchaser"
                class="form-select"
                required
              >
               <option selected hidden>Choose Event Purchaser</option>
               <?php
               $sql = "SELECT * FROM user_account_data";
               $result = $mysqli->query($sql);

               if ($result->num_rows > 0) {
                   // output data of each row
                   while ($row = $result->fetch_assoc()) {

                       $first_name = $row["first_name"];
                       $last_name = $row["last_name"];
                       ?>
               <option value="<?php echo $first_name .
                   " " .
                   $last_name; ?>"><?php echo $first_name .
    " " .
    $last_name; ?></option>
               <?php
                   }
               }
               ?>
              </select>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2 mb-2">
              <label class="mb-1 ms-2">Choose Event Name</label>
              <select
                id="update_event_name_user_payment"
                name="update_event_name_user_payment"
                class="form-select"
                required
              >
                <option selected hidden>Choose Event Name</option>
                <?php
                $sql = "SELECT * FROM event_data";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $event_name = $row["event_name"]; ?>
                <option value="<?php echo $event_name; ?>"><?php echo $event_name; ?></option>
                <?php
                    }
                }
                ?>
              </select>
            </div>
          </div>
        </div>
      <div class="modal-footer">
        <button
          class="btn btn-dark d-flex justify-content-between align-items-center"
          data-bs-target="#Delete_User_Payment_ModalToggle2"
          data-bs-toggle="modal"
        >
          <span>Delete User Payment</span>
          <span class="ms-1 bi bi-arrow-right-circle"></span>
        </button>
        <button type="button" class="btn btn-dark">Save Changes</button>
      </div>
    </div>
  </div>
</div>
<div
  class="modal fade"
  id="Delete_User_Payment_ModalToggle2"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel2"
  tabindex="-1"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body bg-dark">
        <div class="row">
          <h2 class="mt-3 mb-3 ms-2 ">Delete User Payment</h2>
        </div>           
        <p name="delete_user_payment" id="delete_user_payment" class="mt-3 mb-3 ms-2" style="font-weight: bold;"></p>
        <input name="delete_user_payment_id" id="delete_user_payment_id" class="mt-3 mb-3" style="display: none;"/>
      </div>
      <div class="modal-footer">
        <button
          class="btn btn-dark bi bi-arrow-left-circle"
          data-bs-target="#Update_User_Payment_ModalToggle"
          data-bs-toggle="modal"
        >
          Update User Payment
        </button>
        <button type="button" class="btn btn-danger">Delete Payment</button>
      </div>
    </div>
  </div>
</div>
<!--End Modal User Payment-->

<!--Start Modal Admin Account-->
<div
  class="modal fade"
  id="Admin_Account_ModalToggle"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel"
  tabindex="-1"
>
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body bg-dark">
          <div class="row">
            <h2 class="mt-3 mb-3 ms-2 -three">
              Update Admin Account
            </h2>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Last Name</label>
              <input
                id="update_last_name_admin"
                name="update_last_name_admin"
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
                id="update_first_name_admin"
                name="update_first_name_admin"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter First Name"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Middle Name</label>
              <input
                id="update_middle_name_admin"
                name="update_middle_name_admin"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter Middle Name"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              />
            </div>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Date of Birth</label>
              <input
                id="update_date_of_birth_admin"
                name="update_date_of_birth_admin"
                class="form-control form-control-md"
                type="date"
                placeholder="Enter Date of Birth"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Sex</label>
              <select id="update_sex_admin" name="update_sex_admin" class="form-select" required>
                <option selected hidden>Choose Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Contact Number</label>
              <input
                id="update_contact_number_admin"
                name="update_contact_number_admin"
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
                id="update_email_address_admin"
                name="update_email_address_admin"
                class="form-control form-control-md"
                type="email"
                placeholder="Enter Email Address"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Change Password</label>
              <input
                id="update_password_admin"
                name="update_password_admin"
                class="form-control form-control-md"
                type="password"
                placeholder="Enter Password"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Confirm Password</label>
              <input
                id="update_confirm_password_admin"
                name="update_confirm_password_admin"
                class="form-control form-control-md"
                type="password"
                placeholder="Enter Confirm Password"
                required
              />
            </div>
          </div>
        </div>
      <div class="modal-footer">
        <button
          class="btn btn-dark d-flex justify-content-between align-items-center"
          data-bs-target="#Admin_Account_ModalToggle2"
          data-bs-toggle="modal"
        >
          <span>Delete Admin Account</span>
          <span class="ms-1 bi bi-arrow-right-circle"></span>
        </button>
        <button type="button" class="btn btn-dark">Save Changes</button>
      </div>
    </div>
  </div>
</div>
<div
  class="modal fade"
  id="Admin_Account_ModalToggle2"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel2"
  tabindex="-1"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body bg-dark">
        <p name="delete_admin" id="delete_admin" class="mt-3 mb-3 ms-2" style="font-weight: bold;"></p>
        <input name="delete_admin_number" id="delete_admin_number" class="mt-3 mb-3" style="display: none;"/>
      </div>
      <div class="modal-footer">
        <button
          class="btn btn-dark bi bi-arrow-left-circle"
          data-bs-target="#Admin_Account_ModalToggle"
          data-bs-toggle="modal"
        >
          Update Admin Account
        </button>
        <button type="button" class="btn btn-danger">Delete Account</button>
      </div>
    </div>
  </div>
</div>
<!--End Modal Admin Account-->

<!--Start Modal Event Attendace-->
<div
  class="modal fade text-dark"
  id="Event_Attendance_ModalToggle"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel"
  tabindex="-1"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalToggleLabel">
          Event Attendance
        </h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">Event Attendance</div>
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
<!--End Modal Event Attendance-->

<!--Start Modal Events to Handle
<div
  class="modal fade text-dark"
  id="Events_to_Handle_ModalToggle"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel"
  tabindex="-1"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalToggleLabel">
          Events to Handle
        </h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">Events to Handle</div>
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
-->

<!--Start Modal Profile Settings
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
        <a href="PHP/admin_log_out.php" type="button" class="btn btn-danger"
          >Log Out</a
        >
      </div>
    </div>
  </div>
</div>
-->

<!--Start Modal Create Event-->
<div
  class="modal fade"
  id="Add_Event_ModalToggle"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel"
  tabindex="-1"
>
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <form
        action="http://127.0.0.1:1912/Event_Attendance_System/PHP/create_event.php"
        id="create_event_form"
        method="POST"
      >
        <div class="modal-body bg-dark">
          <div class="row">
            <h2 class="mt-3 mb-3 ms-2 ">Create Event</h2>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Name</label>
              <input
                id="event_name_event"
                name="event_name_event"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter Event Name"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Description</label>
              <textarea
                id="event_description"
                name="event_description"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter Event Description"
                required
              ></textarea>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Type</label>
              <select
                id="event_type"
                name="event_type"
                class="form-select"
                required
              >
                <option selected hidden>Choose Event Type</option>
                <option value="Curricular">Curricular</option>
                <option value="Extracurricular">Extracurricular</option>
                <option value="Outreach">Outreach</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Date</label>
              <input
                id="event_date"
                name="event_date"
                class="form-control form-control-md"
                type="date"
                placeholder="Enter Date of Event"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Start Time</label>
              <input
                id="event_start_time"
                name="event_start_time"
                class="form-control form-control-md"
                type="time"
                placeholder="Enter Event Start Time"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event End Time</label>
              <input
                id="event_end_time"
                name="event_end_time"
                class="form-control form-control-md"
                type="time"
                placeholder="Enter End Time"
                required
              />
            </div>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Location</label>
              <input
                id="event_location"
                name="event_location"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter Event Location"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Speaker</label>
              <input
                id="event_speaker"
                name="event_speaker"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter Event Speaker"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Handler</label>
              <select
                id="event_handler"
                name="event_handler"
                class="form-select"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              >
               <option selected hidden>Choose Event Handler</option>              
               <?php
               $sql = "SELECT * FROM admin_account_data";
               $result = $mysqli->query($sql);

               if ($result->num_rows > 0) {
                   // output data of each row
                   while ($row = $result->fetch_assoc()) {

                       $first_name = $row["first_name"];
                       $last_name = $row["last_name"];
                       ?>
                <option value="<?php echo $first_name .
                    " " .
                    $last_name; ?>"><?php echo $first_name .
    " " .
    $last_name; ?></option>
               <?php
                   }
               }
               ?>                  
              </select>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Cost</label>
              <input
                id="event_cost"
                name="event_cost"
                class="form-control form-control-md"
                type="number"
                placeholder="Enter Event Cost"
                required
              />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark w-25">
            Create Event
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--End Modal Create Event-->

<!--Start Modal Create User Payment-->
<div
  class="modal fade"
  id="Add_User_Payment_ModalToggle"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel"
  tabindex="-1"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form
        action="http://127.0.0.1:1912/Event_Attendance_System/PHP/create_user_payment.php"
        id="create_user_payment_form"
        method="POST"
      >
        <div class="modal-body bg-dark">
          <div class="row">
            <h2 class="mt-3 mb-3 ms-2">
              Create User Payment
            </h2>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2 mb-2">
              <label class="mb-1 ms-2">Event Purchaser</label>
              <select
                id="event_purchaser"
                name="event_purchaser"
                class="form-select"
                required
              >
               <option selected hidden>Choose Event Purchaser</option>
               <?php
               $sql = "SELECT * FROM user_account_data";
               $result = $mysqli->query($sql);

               if ($result->num_rows > 0) {
                   // output data of each row
                   while ($row = $result->fetch_assoc()) {

                       $first_name = $row["first_name"];
                       $last_name = $row["last_name"];
                       ?>
               <option value="<?php echo $first_name .
                   " " .
                   $last_name; ?>"><?php echo $first_name .
    " " .
    $last_name; ?></option>
               <?php
                   }
               }
               ?>
              </select>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2 mb-2">
              <label class="mb-1 ms-2">Choose Event Name</label>
              <select
                id="event_name_user_payment"
                name="event_name_user_payment"
                class="form-select"
                required
              >
                <option selected hidden>Choose Event Name</option>
                <?php
                $sql = "SELECT * FROM event_data";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $event_name = $row["event_name"]; ?>
                <option value="<?php echo $event_name; ?>"><?php echo $event_name; ?></option>
                <?php
                    }
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark w-50">
            Create User Payment
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--End Modal Create User Payment-->

<!--Start Modal Create Admin Account-->
<div
  class="modal fade"
  id="Add_Admin_Account_ModalToggle"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel"
  tabindex="-1"
>
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <form
        action="http://127.0.0.1:1912/Event_Attendance_System/PHP/create_admin_account.php"
        id="create_admin_account_form"
        method="POST"
      >
        <div class="modal-body bg-dark">
          <div class="row">
            <h2 class="mt-3 mb-3 ms-2 ">
              Create Admin Account
            </h2>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Last Name</label>
              <input
                id="last_name_admin"
                name="last_name_admin"
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
                id="first_name_admin"
                name="first_name_admin"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter First Name"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Middle Name</label>
              <input
                id="middle_name_admin"
                name="middle_name_admin"
                class="form-control form-control-md"
                type="text"
                placeholder="Enter Middle Name"
                onkeypress="return /[a-z ]/i.test(event.key)"
                required
              />
            </div>
          </div>
          <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Date of Birth</label>
              <input
                id="date_of_birth_admin"
                name="date_of_birth_admin"
                class="form-control form-control-md"
                type="date"
                placeholder="Enter Date of Birth"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Sex</label>
              <select id="sex_admin" name="sex_admin" class="form-select" required>
                <option selected hidden>Choose Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Contact Number</label>
              <input
                id="contact_number_admin"
                name="contact_number_admin"
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
                id="email_address_admin"
                name="email_address_admin"
                class="form-control form-control-md"
                type="email"
                placeholder="Enter Email Address"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Password</label>
              <input
                id="password_admin"
                name="password_admin"
                class="form-control form-control-md"
                type="password"
                placeholder="Enter Password"
                required
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2 mb-2">
              <label class="mb-1 ms-2">Confirm Password</label>
              <input
                id="confirm_password_admin"
                name="confirm_password_admin"
                class="form-control form-control-md"
                type="password"
                placeholder="Enter Confirm Password"
                required
              />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark w-25">
            Create Admin Account
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--End Modal Create Admin Account-->