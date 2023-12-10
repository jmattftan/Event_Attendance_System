$(document).ready(function () {
  $(".user_payment_table").on("click", "tr", function () {
    const tr = $(this);
    const tds = tr.children("td");

    const data = {
      user_payment_id: tds.eq(0).text(),
      event_purchaser: tds.eq(1).text(),
      event_name: tds.eq(3).text(),
    };

    $("#update_user_payment_id").val(data.user_payment_id);
    $("#update_event_purchaser").val(data.event_purchaser);
    $("#update_event_name_user_payment").val(data.event_name);

    let user_payment_id = `${data.user_payment_id}`;
    document.getElementById("delete_user_payment").innerHTML =
      "Delete User Payment: " + user_payment_id + "?";

    $("#delete_user_payment_id").val(data.user_payment_id);
  });
});
