var base_path = $("#url").val();
$(document).ready(function(){
    //========================== view payment & receipt Registrion =======================
    $("#paymentReceiptRegistration").click(function(){
        $("#paymentReRegistrionPopModal").modal("show");
    });
    $(".paymentReceiptRegisClose").click(function(){
        $("#paymentReRegistrionPopModal").modal("hide");
    })
    //-======================================== end list view ==========================

});