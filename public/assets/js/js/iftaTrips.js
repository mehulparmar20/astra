var base_path = $("#url").val();
$(document).ready(function() {
    $('.closeIftaTrip').click(function(){
        $('#IftaTripModalList').modal('hide');
    });
   
    $('#iftaTrip_navbar').click(function(){
        // alert();
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getIftaTrip",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                // console.log(text);
                // createIftaTollRows(text);
                // IftaTollResult = text;
             }
        });
        $('#IftaTripModalList').modal('show');
    });
});


