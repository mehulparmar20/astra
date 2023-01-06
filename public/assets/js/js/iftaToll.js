var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
    $('.iftaTollClose').click(function(){
        $('#iftaTollModal').modal('hide');
    });


// <!-- -------------------------------------------------------------------------Get fuelReceipt  ------------------------------------------------------------------------- -->  
   
    $('#iftaToll_navbar').click(function(){
        //alert();
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getIftaToll",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                console.log(text);
                createIftaTollRows(text);
                IftaTollResult = text;
             }
        });
        $('#iftaTollModal').modal('show');
    });


// <!-- -------------------------------------------------------------------------over Get fuelReceipt  ------------------------------------------------------------------------- --> 
// <!-- -------------------------------------------------------------------------function  ------------------------------------------------------------------------- --> 
    
// get truck
    function createIftaTollRows(IftaTollResult) {
        var fuelReceiptlen = 0;
        //alert(FuelVendorResult);
            if (IftaTollResult != null) {
                
                IftaTolllen = IftaTollResult.tolls.length;

                $("#iftaTollTable").html('');

                if (IftaTolllen > 0) {
                   
                    var no=1;
                    for (var i = IftaTolllen-1; i >= 0; i--) {  
                  
                        var IftaTollId =IftaTollResult.tolls[i]._id;
                        var transectionDate =IftaTollResult.tolls[i].tollDate;
                        var transType =IftaTollResult.tolls[i].transType;
                        var location =IftaTollResult.tolls[i].location;
                        var transponder =IftaTollResult.tolls[i].transponder;
                        var licensePlate =IftaTollResult.tolls[i].licensePlate;
                        var amount =IftaTollResult.tolls[i].amount;
                        var truckNo =IftaTollResult.tolls[i].truckNo;
                        var invoiceNo =IftaTollResult.tolls[i].invoiceNumber;
                       
                        var deleteStatus =IftaTollResult.tolls[i].deleteStatus;
              //alert(fuelCardId);
             

                        if(deleteStatus == "NO"){
                            //alert("ff");
                            var IftaTollStr = "<tr class='tr' data-id=" + (i + 1) + ">" +
                            "<td data-field=''><input type='checkbox' id='check_sigle_toll' class='check'></td>" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td data-field='transectionDate' >" + transectionDate + "</td>" +
                            "<td data-field='transType' >" + transType + "</td>" +
                            "<td data-field='location' >" + location + "</td>" +
                            "<td data-field='transponder' >" + transponder + "</td>" +
                            "<td data-field='licensePlate' >" + licensePlate + "</td>" +
                            "<td data-field='amount' ><i class='fa fa-usd'> " + amount + "</i></td>" +
                            "<td data-field='truckNo' >" + truckNo + "</td>" +
                            "<td data-field='invoiceNo' >" + invoiceNo + "</td>" +
                       
                            "<td style='text-align:center'>"+
                                "<td style='width: 100px'>"+
                                " <a class='button-23  "+editPrivilege+"' id='editmodel' title='Edit' ><i class='fe fe-edit'></i>"+
                                "</a> <a class='delete1 button-23 "+delPrivilege+"'  title='Delete'><i class='fe fe-delete'></i></a>"+
                        "</td></tr>";                            

                        $("#iftaTollTable").append(IftaTollStr);
                        no++;
                        }
                    }
                } else {
                    var IftaTollStr = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#iftaTollTable").append(IftaTollStr);
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