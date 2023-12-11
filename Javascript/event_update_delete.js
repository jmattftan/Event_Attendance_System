$(document).ready(function () {
  $(".event_table").on("click", "tr", function () {
    const tr = $(this);
    const tds = tr.children("td");

    const data = {
      event_id: tds.eq(0).text(),
      event_name: tds.eq(1).text(),
      event_type: tds.eq(2).text(),
      event_date: tds.eq(3).text(),
      event_start_time: tds.eq(4).text(),
      event_end_time: tds.eq(5).text(),
      event_location: tds.eq(6).text(),
      event_speaker: tds.eq(7).text(),
      event_handler: tds.eq(8).text(),
      event_cost: tds.eq(9).text(),
      event_description: tds.eq(12).text(),
    };

    $("#update_event_id_event").val(data.event_id);
    $("#update_event_name_event").val(data.event_name);
    $("#update_event_type").val(data.event_type);
    $("#update_event_date").val(data.event_date);
    $("#update_event_start_time").val(data.event_start_time);
    $("#update_event_end_time").val(data.event_end_time);
    $("#update_event_location").val(data.event_location);
    $("#update_event_speaker").val(data.event_speaker);
    $("#update_event_handler").val(data.event_handler);
    $("#update_event_cost").val(data.event_cost);
    $("#update_event_description").val(data.event_description);

    let event_name = `${data.event_name}`;
    document.getElementById("delete_event").innerHTML =
      "Delete Event: " + event_name + "?";

    $("#delete_event_id").val(data.event_id);
  });
});
