var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
    $('.fuelReceiptClose').click(function(){
        $('#fuelReceiptModal').modal('hide');
    });


// <!-- -------------------------------------------------------------------------Get fuelReceipt  ------------------------------------------------------------------------- -->  
   
    $('#fuelReceipt_navbar').click(function(){
        //alert();
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getFuelReceipt",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                console.log(text);
                createFuelReceiptRows(text);
                FuelReceiptResult = text;
             }
        });
        $('#fuelReceiptModal').modal('show');
    });


// <!-- -------------------------------------------------------------------------over Get fuelReceipt  ------------------------------------------------------------------------- --> 
// <!-- -------------------------------------------------------------------------function  ------------------------------------------------------------------------- --> 
    
// get truck
    function createFuelReceiptRows(FuelReceiptResult) {
        var fuelReceiptlen = 0;
        //alert(FuelVendorResult);
            if (FuelReceiptResult != null) {
                
                fuelReceiptlen = FuelReceiptResult.fuel_receipt.length;

                $("#FuelReceTable").html('');

                if (fuelReceiptlen > 0) {
                   
                    var no=1;
                    for (var i = fuelReceiptlen-1; i >= 0; i--) {  
                  
                        var fuelReceiptId =FuelReceiptResult.fuel_receipt[i]._id;
                        var driverName =FuelReceiptResult.fuel_receipt[i].driverName;
                        var transactionDate =FuelReceiptResult.fuel_receipt[i].transactionDate;
                        var cardNo =FuelReceiptResult.fuel_receipt[i].cardNo;
                        var truckNumber =FuelReceiptResult.fuel_receipt[i].truckNumber;
                        var driverNumber =FuelReceiptResult.fuel_receipt[i].driverNumber;
                        var transactionTime =FuelReceiptResult.fuel_receipt[i].transactionTime;
                        var locationName =FuelReceiptResult.fuel_receipt[i].locationName;
                        var locationCity =FuelReceiptResult.fuel_receipt[i].locationCity;
                        var locationState =FuelReceiptResult.fuel_receipt[i].locationState;
                        var fuelVendor =FuelReceiptResult.fuel_receipt[i].category;
                        var  fuelType=FuelReceiptResult.fuel_receipt[i].fuelType;
                        var amount =FuelReceiptResult.fuel_receipt[i].amount;
                        var quantity =FuelReceiptResult.fuel_receipt[i].quantity;
                        var totalAmount =FuelReceiptResult.fuel_receipt[i].totalAmount;
                        var transactionDiscount =FuelReceiptResult.fuel_receipt[i].transactionDiscount;
                        var transactionFee =FuelReceiptResult.fuel_receipt[i].transactionFee;
                        var transactionGross =FuelReceiptResult.fuel_receipt[i].transactionGross;
                        var invoiceNo =FuelReceiptResult.fuel_receipt[i].invoiceNo;
                        var deleteStatus =FuelReceiptResult.fuel_receipt[i].deleteStatus;
              //alert(fuelCardId);
             

                        if(deleteStatus == "NO"){
                            //alert("ff");
                            var fuelReceStr = "<tr data-id=" + (i + 1) + ">" +
                            "<td data-field=''><input type='checkbox' id='checkall' class='checkall'></td>" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td data-field='driverName' >" + driverName + "</td>" +
                            "<td data-field='transactionDate' >" + transactionDate + "</td>" +
                            "<td data-field='cardNo' >" + cardNo + "</td>" +
                            "<td data-field='truckNumber' >" + truckNumber + "</td>" +
                            "<td data-field='driverNumber' >" + driverNumber + "</td>" +
                            "<td data-field='transactionTime' >" + transactionTime + "</td>" +
                            "<td data-field='locationName' >" + locationName + "</td>" +
                            "<td data-field='locationCity' >" + locationCity + "</td>" +
                            "<td data-field='locationState' >" + locationState + "</td>" +
                            "<td data-field='fuelVendor' >" + fuelVendor + "</td>" +
                            "<td data-field='fuelType' >" + fuelType + "</td>" +
                            "<td data-field='amount' >" + amount + "</td>" +
                            "<td data-field='quantity' >" + quantity + "</td>" +
                            "<td data-field='totalAmount' >" + totalAmount + "</td>" +
                            "<td data-field='transactionDiscount' >" + transactionDiscount + "</td>" +
                            "<td data-field='transactionFee' >" + transactionFee + "</td>" +
                            "<td data-field='transactionGross' >" + transactionGross + "</td>" +
                            "<td data-field='invoiceNo' >" + invoiceNo + "</td>" +
                       
                            "<td style='text-align:center'>"+
                                "<a class='mt-2 btn btn-primary fs-14 text-white editCurrency'  title='Edit1' data-Id='"+fuelReceiptId+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                            "</td></tr>";

                        $("#FuelReceTable").append(fuelReceStr);
                        no++;
                        }
                    }
                } else {
                    var fuelReceStr = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#FuelReceTable").append(fuelReceStr);
                }
            }else {
            var fuelReceStr = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#FuelReceTable").append(fuelReceStr);
        }
    }

   

// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  
});