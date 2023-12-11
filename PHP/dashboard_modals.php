<!--Start Modal My Events
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
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th>Event</th>
              <th>Date</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $full_name = $_SESSION["first_name"] . " " . $_SESSION["last_name"];
          $sql = "SELECT * FROM user_payment_data WHERE event_purchaser = '$full_name'";
          $result = $mysqli->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {

                  $event_purchaser = $row["event_purchaser"];
                  $event_id = $row["event_id"];
                  $event_name = $row["event_name"];
                  $amount = $row["amount"];
                  $payment_method = $row["payment_method"];
                  $date_of_purchase = $row["date_of_purchase"];
                  $user_payment_updated = $row["user_payment_updated"];
                  ?>            
              <tr>
              <td><?php echo $event_name; ?></td>
              <td><?php echo $event_date; ?></td>
              <td><?php echo $event_date_time; ?></td>
              <td><?php echo $event_date_time; ?></td>
              </tr>
          <?php
              }
          }
          ?>
          </tbody>
        </table>
      </div>
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

<!--Start Modal Profile Settings-->
<div
  class="modal fade"
  id="Profile_Settings_ModalToggle"
  aria-hidden="true"
  aria-labelledby="ModalToggleLabel"
  tabindex="-1"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form
        action="http://127.0.0.1:1912/Event_Attendance_System/PHP/update_user_account.php"
        id="update_user_payment_form"
        method="POST"
      > 
      <div class="modal-body bg-dark" style="border-radius: 10px !important; border: 1px solid white;">
      <div class="row">
      <h2 class="mt-3 mb-3 ms-2">
      Update User Payment
      </h2>
      </div>
      <div class="row">
      <?php
      $studentNumber = $_SESSION["student_number"];
      $sql = "SELECT * FROM user_account_data WHERE $studentNumber";
      $result = $mysqli->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {

              $contact_number = $row["contact_number"];
              $email_address = $row["email_address"];

      }}

      ?>    
      <input type="text" name="student_number" value="<?php echo $_SESSION["student_number"]?>" style="display: none;">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2 mb-2">
      <label class="mb-1 ms-2">Contact Number</label>
      <input
      id="contact_number"
      name="contact_number"
      class="form-control form-control-md"
      type="text"
      value="<?php echo $contact_number?>"
      placeholder="Enter Contact Number"
      minlength="11"
      maxlength="11"
      onkeypress="return /[0-9]/i.test(event.key)"
      required
      />
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2 mb-2">
      <label class="mb-1 ms-2">Email Address</label>
      <input
      id="email_address"
      name="email_address"
      class="form-control form-control-md"
      value="<?php echo $email_address?>"
      type="email"
      placeholder="Enter Email Address"
      required
      />
      </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark">Save Changes</button>
        <a href="PHP/log_out.php" type="button" class="btn btn-danger"
          >Log Out</a
        >
      </div>
      </form>
    </div>
  </div>
</div>
  
<!--End Modal Profile Settings-->

<!--
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
-->

<!--
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
      <div class="modal-body">





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark">
          Pay to Join Event
        </button>
      </div>
    </div>
  </div>
</div>
-->
