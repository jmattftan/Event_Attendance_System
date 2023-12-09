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
              <td><?php echo $event_name ?></td>
              <td><?php echo $event_date ?></td>
              <td><?php echo $event_date_time ?></td>
              <td><?php echo $event_date_time ?></td>
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
<!--End Modal My Events-->

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
        <a href="PHP/log_out.php" type="button" class="btn btn-danger"
          >Log Out</a
        >
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

<!--Start Modal Join Event-->
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
