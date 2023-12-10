$(document).ready(function () {
  $(".admin_table").on("click", "tr", function () {
    const tr = $(this);
    const tds = tr.children("td");

    const data = {
      admin_number: tds.eq(0).text(),
      last_name: tds.eq(1).text(),
      first_name: tds.eq(2).text(),
      middle_name: tds.eq(3).text(),
      date_of_birth: tds.eq(4).text(),
      sex: tds.eq(5).text(),
      contact_number: tds.eq(6).text(),
      email_address: tds.eq(7).text(),
    };

    $("#update_last_name_admin").val(data.last_name);
    $("#update_first_name_admin").val(data.first_name);
    $("#update_middle_name_admin").val(data.middle_name);
    $("#update_date_of_birth_admin").val(data.date_of_birth);
    $("#update_sex_admin").val(data.sex);
    $("#update_contact_number_admin").val(data.contact_number);
    $("#update_email_address_admin").val(data.email_address);

    let admin_name = `${data.first_name} ${data.last_name}`;
    document.getElementById("delete_admin").innerHTML =
      "Delete Admin: " + admin_name + "?";

    $("#delete_admin_number").val(data.admin_number);
  });
});
