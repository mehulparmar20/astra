var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
    $('.fuelVendorClose').click(function(){
        $('#FuelVendorModal').modal('hide');
    });


// <!-- -------------------------------------------------------------------------Get truck  ------------------------------------------------------------------------- -->  
   
    $('#fuelVendor_navbar').click(function(){
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getFuelVendor",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                console.log(text);
                createFuelVendorRows(text);
                FuelVendorResult = text;
             }
        });
        $('#FuelVendorModal').modal('show');
    });


// <!-- -------------------------------------------------------------------------over Get truck  ------------------------------------------------------------------------- --> 
// <!-- -------------------------------------------------------------------------function  ------------------------------------------------------------------------- --> 
    
// get truck
    function createFuelVendorRows(FuelVendorResult) {
        var fuelVendorlen = 0;
        //alert(FuelVendorResult);
            if (FuelVendorResult != null) {
                
                fuelVendorlen = FuelVendorResult.fuelCard.length;

                $("#FuelVendorTable").html('');

                if (fuelVendorlen > 0) {
                   
                    var no=1;
                    for (var i = fuelVendorlen-1; i >= 0; i--) {  
                  
                        var fuelVendorId =FuelVendorResult.fuelCard[i]._id;
                        var fuelCardType =FuelVendorResult.fuelCard[i].fuelCardType;
                        var openingDate =FuelVendorResult.fuelCard[i].openingDate;
                        var openingBalance =FuelVendorResult.fuelCard[i].openingBalance;
                        var currentBalance =FuelVendorResult.fuelCard[i].currentBalance;
                        var deleteStatus =FuelVendorResult.fuelCard[i].deleteStatus;
              //alert(fuelVendorId);
                        if(deleteStatus == "NO"){
                            //alert("ff");
                            var fuelVendorStr = "<tr data-id=" + (i + 1) + ">" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td data-field='fuelCardType' >" + fuelCardType + "</td>" +
                            "<td data-field='openingDate' >" +openingDate  + "</td>" +
                            "<td data-field='openingBalance' >" + openingBalance + "</td>" +
                            "<td data-field='currentBalance' >" + currentBalance + "</td>" +
                            "<td style='text-align:center'>"+
                                "<a class='mt-2 btn btn-primary fs-14 text-white editCurrency'  title='Edit1' data-truckId='' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                            "</td></tr>";

                        $("#FuelVendorTable").append(fuelVendorStr);
                        no++;
                        }
                    }
                } else {
                    var fuelVendorStr = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#FuelVendorTable").append(fuelVendorStr);
                }
            }else {
            var fuelVendorStr = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#FuelVendorTable").append(fuelVendorStr);
        }
    }

   

// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  
});