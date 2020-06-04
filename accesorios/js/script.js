// Add Record
function addRecord() {
    // get values
    var nombres_neg = $("#nombres_neg").val();
    var direccion_neg = $("#direccion_neg").val();
    var tel_neg = $("#tel_neg").val();
    var resena_neg = $("#resena_neg").val();


    // Add record //crud agregar datos
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
            var telefonosincero=user.tel_neg.substring(1,10);

            htmlurl='<a class="btn btn-success" href="https://wa.me/593'+telefonosincero+'?text=me+gustaria+saber+el+precio+de" role="button">Whatsapp</a>'
        $("#btnws").html(htmlurl);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}



$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});


function datos(){
    $("#hidden_user_id").val(id);

            

                $.ajax( {
                    url: 'ajax/readUserDetails.php',
                    type: 'POST',
                    cache: false,
                    data: 'btn=info_cli' 
                } ).done( function ( respuesta ) {
                    
                    var obj = JSON.parse(respuesta)
                                
                    
                    $( "#nombre_cli" ).val( obj.nombre_razonsocial );
                    $( "#codigo" ).val( obj.codigo );
                    $( "#cedula_cli" ).val( obj.id );
                    $( "#deuda_total" ).val( obj.deuda_total );
                    $( "#deuda_cte" ).val( obj.deuda_cte );
                    $( "#ciudad" ).val( obj.ubicacion );
                    $( "#domicilio" ).val( obj.direccion_titular );
                    $( "#telf1" ).val( obj.telefono_t1 );
                    $( "#telf2" ).val( obj.telefono_t2 );
                    $( "#telf3" ).val( obj.telefono_t3 );
                    $( "#telf4" ).val( obj.telefono_t4 );
                    
                 htmlurl='<a class="h5" target="_blank" href="http://172.18.55.28/mineriaDatos/vista/agregar.php?cedula='+cedula+'&agente=admin">DataMining</a>'
        
            $("#url").html(htmlurl);
                
                
                } );

            
}