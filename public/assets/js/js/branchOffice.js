var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
    $('.branchOfficeClose').click(function(){
        $('#branchOfficeModal').modal('hide');
    });


// <!-- -------------------------------------------------------------------------Get fuelReceipt  ------------------------------------------------------------------------- -->  
   
    $('#branchOffive_navbar').click(function(){
        //alert();
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getBranchOffice",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                console.log(text);
                createBranchOfficeRows(text);
              }
        });
        $('#branchOfficeModal').modal('show');
    });


// <!-- -------------------------------------------------------------------------over Get fuelReceipt  ------------------------------------------------------------------------- --> 
// <!-- -------------------------------------------------------------------------function  ------------------------------------------------------------------------- --> 
    
// get truck
    function createBranchOfficeRows(BranchOfficeResult) {
        var BranchOfficelen = 0;
        var no=1;
        //alert(FuelVendorResult);
            if (BranchOfficeResult != null) {
                $("#officeTable").html('');
                BranchOfficelen = BranchOfficeResult.Office.length;
//alert(CreditCardlen);
                if (BranchOfficelen > 0) {
                    for (var i = BranchOfficelen-1; i >= 0; i--) { 
                        
                        office_len = BranchOfficeResult.Office[i].office.length;
                        //alert(sub_credit_len);
                        var Id =BranchOfficeResult.Office[i]._id;
                        var Office_com_Id =BranchOfficeResult.Office[i].companyID;

                        //alert(bankAdminlen);
                        if (office_len > 0) {
                            for (var j = office_len-1; j >= 0; j--) {

                                var Office_Id =BranchOfficeResult.Office[i].office[j]._id;
                                var officeName =BranchOfficeResult.Office[i].office[j].officeName;
                                var officeLocation =BranchOfficeResult.Office[i].office[j].officeLocation;
                                var deleteStatus =BranchOfficeResult.Office[i].office[j].deleteStatus;

                                if(deleteStatus == "NO"){
                                        //alert("ff");
                                        var branchOfficeStr = "<tr class='tr' data-id=" + (i + 1) + ">" +
                                        "<td data-field='no'>" + no + "</td>" +
                                        "<td data-field='officeName' >" + officeName + "</td>" +
                                        "<td data-field='officeLocation' >" + officeLocation + "</td>" +
                                       
                                        "<td style='text-align:center'>"+
                                            "<a class='mt-2 btn btn-primary fs-14 text-white editCurrency'  title='Edit1' data-Id='"+Office_Id+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                                        "</td></tr>";
            
                                    $("#officeTable").append(branchOfficeStr);
                                    no++;
                                }
                            }
                        }
                    }
                    
                }else {
                            var branchOfficeStr = "<tr data-id=" + i + ">" +
                                "<td align='center' colspan='4'>No record found.</td>" +
                                "</tr>";
                
                            $("#officeTable").append(branchOfficeStr);
                }
            
            }else {
            var branchOfficeStr = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#officeTable").append(branchOfficeStr);
        }
    }

   

// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  
});