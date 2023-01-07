var base_path = $("#url").val();
$(document).ready(function() {
    
// -------------------------------------------------------------------------  start ------------------------------------------------------------------------- --  
    $('#TermsConditionsModal').modal({
        backdrop: 'static',
        keyboard: false
    })

    $('.TermsConditionsCloseModal').click(function(){
        $('#TermsConditionsModal').modal('hide');
    });

   // -------------------------------------------------------------------------    Get   ------------------------------------------------------------------------- --  
    $('#TermsConditions_navbar').click(function(){
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getTermsConditions",
            async: false,
            success: function(text) {
                console.log(text);
                createTermsConditionsRows(text);
              }
        });
        $('#TermsConditionsModal').modal('show');
    });
// - -------------------------------------------------------------------------   over Get   ------------------------------------------------------------------------- --
// -- -------------------------------------------------------------------------  function get  -------------------------------------------------------------------------- 
    function createTermsConditionsRows(Result) {
        var len1 = 0;
        var no=1;
            if (Result != null) {
                $("#TextBoxContainer1").html('');
                len1 = Result.TermsConditions.length;
                if (len1 > 0) {
                   for (var i = len1-1; i >= 0; i--) { 
                    //for (var i = 0; i < len1; i++) {    
                        len2 = Result.TermsConditions[i].specialInstruction.length;
                        var main_Id =Result.TermsConditions[i]._id;
                        var com_Id =Result.TermsConditions[i].companyID;
                        var invoiceInstruction = Result.TermsConditions[i].invoiceInstruction;
                        var invoiceAdvance = Result.TermsConditions[i].invoiceAdvance;

                        $('#invoiceInstruction').val(invoiceInstruction);
                        $('#invoiceAdvance').val(invoiceAdvance);
                        if (len2 > 0) {
                            // for (var j = len2-1; j >= 0; j--) {
                            for (var j = 0; j < len2; j++) {
                                var instruction=Result.TermsConditions[i].specialInstruction[j].instruction;

                                var Str ='<tr><td width="800">' + '<input name="specialInstruction[]" type="text" value = "' + instruction + '" class="form-control" /></td>' +
                                '<td><button type="button" class="btn btn-danger removeInstruction"><span aria-hidden="true">&times;</span></button></td></tr>'
            
                                    $("#TextBoxContainer1").append(Str);
                                    no++;
                            }
                        }
                    }
                    
                }else {
                    var Str = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#TextBoxContainer1").append(Str);
                }
            
            }else {
            var Str = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#TextBoxContainer1").append(Str);
        }
    }
 // -- -------------------------------------------------------------------------   over Get   ------------------------------------------------------------------------- --

 // -- -------------------------------------------------------------------------    add    ------------------------------------------------------------------------- -- 
   
 $('#submitTermsConditions').click(function(){
    var invoiceInstruction=$('#invoiceInstruction').val();
    var invoiceAdvance=$('#invoiceAdvance').val();

    if(invoiceInstruction == ''){
         swal.fire("Error!", "Enter invoice Instruction", "error");
        $("#invoiceInstruction").focus();
        return false;
    }
    if(invoiceAdvance == ''){
        swal.fire("Error!", "Enter invoice Advance", "error");
       $("#invoiceAdvance").focus();
       return false;
   }

    $.ajax({
        type: "POST",
        url: base_path+"/admin/addTermsConditions",
        dataType: 'json',
        data: {
                'invoiceInstruction':invoiceInstruction,
                'invoiceAdvance':invoiceAdvance,
                'data':$('#TermConditionsForm').serialize(),
                '_token': $(".laravel_csrf_tokn").val(),
                
            },  
        success: function(text) {
            swal.fire("Done!", 'Add Term Conditions', "success");
            $.ajax({
                type: "GET",
                url: base_path+"/admin/getTermsConditions",
                async: false,
                success: function(text) {
                    console.log(text);
                    createTermsConditionsRows(text);
                  }
            });
            $('#TermsConditionsModal').modal('show');
            
        }
    });
    
});
// - -------------------------------------------------------------------------over add    ------------------------------------------------------------------------- -- 


// -- -------------------------------------------------------------------------End------------------------------------------------------------------------- -- 
});

{/* <script> */}
$(function() {
    $("#btnAddadv32").bind("click", function() {
        var div = $("<tr />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer1").append(div);
    });
    $("body").on("click", ".removeInstruction", function() {
        if (document.getElementsByClassName('removeInstruction').length > 1) {
            $(this).closest("tr").remove();
        } else {
            swal.fire("Warning", "All Instructions cannot be removed.", "warning");
        }
    });
});

function GetDynamicTextBox(value) {
    return '<td width="600">' + '<input name="specialInstruction[]" type="text" value = "' + value + '" class="form-control" /></td>' +
        '<td><button type="button" class="btn btn-danger removeInstruction"><span aria-hidden="true">&times;</span></button></td>'
}
// </script>