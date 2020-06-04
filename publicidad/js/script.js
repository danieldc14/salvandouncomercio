// Add Record
function addRecord() {
    // get values
    var nombres_neg = $("#nombres_neg").val();
    var direccion_neg = $("#direccion_neg").val();
    var tel_neg = $("#tel_neg").val();
    var resena_neg = $("#resena_neg").val();

    // Add record
    $.post("ajax/addRecord.php", {
        nombres_neg: nombres_neg,
        direccion_neg: direccion_neg,
        tel_neg: tel_neg,
		resena_neg: resena_neg
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#nombres_neg").val("");
        $("#direccion_neg").val("");
        $("#tel_neg").val("");
        $("#resena_neg").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}


function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_nombres_neg").val(user.nombres_neg);
            $("#update_direccion_neg").val(user.direccion_neg);
            $("#update_tel_neg").val(user.tel_neg);
            $("#update_resena_neg").val(user.resena_neg);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}



$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});