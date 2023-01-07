var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
    $('.bankClose').click(function(){
        $('#bankModal').modal('hide');
    });


// <!-- -------------------------------------------------------------------------Get   ------------------------------------------------------------------------- -->  
   
    $('#bank_navbar').click(function(){
        //alert();
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getBankData",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                console.log(text);
                createBankRows(text);
                bankResult = text;
             }
        });
        $('#bankModal').modal('show');
    });


// <!-- -------------------------------------------------------------------------over Get   ------------------------------------------------------------------------- --> 
// <!-- -------------------------------------------------------------------------function  ------------------------------------------------------------------------- --> 
    
// get truck
    function createBankRows(bankResult) {
        var banklen = 0;
        var no=1;
        //alert(FuelVendorResult);
            if (bankResult != null) {
                $("#bankTable").html('');
                banklen = bankResult.length;
// alert(banklen);
                if (banklen > 0) {
                    for (var i = banklen-1; i >= 0; i--) { 
                        
                        bankAdminlen = bankResult[i].admin_bank.length;
                        var Id =bankResult[i]._id;
                        var com_Id =bankResult[i].companyID;
                        //alert(bankAdminlen);
                        if (bankAdminlen > 0) {
                            for (var j = bankAdminlen-1; j >= 0; j--) {
                                var admin_bank_Id =bankResult[i].admin_bank[j]._id;
                                var bankName =bankResult[i].admin_bank[j].bankName;
                                var bankAddresss =bankResult[i].admin_bank[j].bankAddresss;
                                var accountHolder =bankResult[i].admin_bank[j].accountHolder;
                                var accountNo =bankResult[i].admin_bank[j].accountNo;
                                var routingNo =bankResult[i].admin_bank[j].routingNo;
                                var openingBalDate =bankResult[i].admin_bank[j].openingBalDate;
                                var openingBalance =bankResult[i].admin_bank[j].openingBalance;
                                var openingBalance=parseFloat(openingBalance).toFixed(2);
                                var currentBalance =bankResult[i].admin_bank[j].currentBalance;
                                var currentBalance=parseFloat(currentBalance).toFixed(2);
                                var deleteStatus =bankResult[i].admin_bank[j].deleteStatus;

                                if(deleteStatus == "NO"){
                                        //alert("ff");
                                        var bankStr = "<tr class='tr' data-id=" + (i + 1) + ">" +
                                        "<td data-field='no'>" + no + "</td>" +
                                        "<td data-field='bankName' >" + bankName + "</td>" +
                                        "<td data-field='bankAddresss' >" + bankAddresss + "</td>" +
                                        "<td data-field='accountHolder' >" + accountHolder + "</td>" +
                                        "<td data-field='accountNo' >" + accountNo + "</td>" +
                                        "<td data-field='routingNo' >" + routingNo + "</td>" +
                                        "<td data-field='openingBalDate' >" + openingBalDate + "</td>" +
                                        "<td data-field='openingBalance' >$ " + openingBalance + "</td>" +
                                        
                                        "<td data-field='currentBalance' >$ " + currentBalance + "</td>" +
                                       
                                        "<td style='width: 100px'>"+
                                            " <a class='button-23  "+editPrivilege+"' data-id="+ admin_bank_Id +" title='Edit' ><i class='fe fe-edit'></i>"+
                                            "</a> <a class='delete1 button-23 "+delPrivilege+"' data-id="+ admin_bank_Id +" title='Delete'><i class='fe fe-delete'></i></a>"+
                                        "</td></tr>";
            
                                    $("#bankTable").append(bankStr);
                                    no++;
                                }
                            }
                        }
                    }
                }
            
            }else {
            var IftaTollStr = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#iftaTollTable").append(IftaTollStr);
        }
    }

   

// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  
});