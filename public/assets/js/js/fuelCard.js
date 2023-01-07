var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
    $('.fuelCardClose').click(function(){
        $('#FuelCardModal').modal('hide');
    });


// <!-- -------------------------------------------------------------------------Get truck  ------------------------------------------------------------------------- -->  
   
    $('#fuelCard_navbar').click(function(){
        //alert();
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getFuelCard",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                console.log(text);
                createFuelCardRows(text);
                FuelCardResult = text;
             }
        });
        $('#FuelCardModal').modal('show');
    });


// <!-- -------------------------------------------------------------------------over Get truck  ------------------------------------------------------------------------- --> 
// <!-- -------------------------------------------------------------------------function  ------------------------------------------------------------------------- --> 
    
// get truck
    function createFuelCardRows(FuelCardResult) {
        var fuelCardlen = 0;
        //alert(FuelVendorResult);
            if (FuelCardResult != null) {
                
                fuelCardlen = FuelCardResult.FuelCard.ifta_card.length;

                $("#FuelCardTable").html('');

                if (fuelCardlen > 0) {
                   
                    var no=1;
                    for (var i = fuelCardlen-1; i >= 0; i--) {  
                  
                        var fuelCardId =FuelCardResult.FuelCard.ifta_card[i]._id;
                        var cardHolderNameID =FuelCardResult.FuelCard.ifta_card[i].cardHolderName;

                        var driverLen = FuelCardResult.driver.driver.length;
                        for (var k = 0; k < driverLen; k++) { 
                            var driver_id = FuelCardResult.driver.driver[k]._id;
                            if(cardHolderNameID == driver_id){
                                cardHolderName=FuelCardResult.driver.driver[k].driverName;
                                break;
                            }else{
                                cardHolderName=''; 
                            }
                        }



                        var iftaCardNo =FuelCardResult.FuelCard.ifta_card[i].iftaCardNo;
                        var cardTypeId =FuelCardResult.FuelCard.ifta_card[i].cardType;

                        var iftaCardLen = FuelCardResult.FuelVendor.fuelCard.length;
                        for (var j = 0; j < iftaCardLen; j++) { 
                            var iftaCard_id = FuelCardResult.FuelVendor.fuelCard[j]._id;
                            if(cardTypeId == iftaCard_id){
                                cardType=FuelCardResult.FuelVendor.fuelCard[j].fuelCardType;
                                break;
                            }
                        }
                        
                        
                        
                        var deleteStatus =FuelCardResult.FuelCard.ifta_card[i].deleteStatus;
              //alert(fuelCardId);
                        if(deleteStatus == "NO"){
                            //alert("ff");
                            var fuelCardStr = "<tr class='tr' data-id=" + (i + 1) + ">" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td data-field='cardHolderName' >" + cardHolderName + "</td>" +
                            "<td data-field='iftaCardNo' >" +iftaCardNo  + "</td>" +
                            "<td data-field='cardType' >" + cardType + "</td>" +
                            "<td style='text-align:center'>"+
                                "<a class='"+editPrivilege+" button-23 editCurrency'  title='Edit1' data-Id='"+fuelCardId+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                                "</a> <a class=' button-23 "+delPrivilege+"' data-id="+ email +" title='Delete'><i class='fe fe-delete'></i></a>"+
                            "</td></tr>";

                        $("#FuelCardTable").append(fuelCardStr);
                        no++;
                        }
                    }
                } else {
                    var fuelVendorStr = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#FuelCardTable").append(fuelCardStr);
                }
            }else {
            var fuelVendorStr = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#FuelCardTable").append(fuelCardStr);
        }
    }

   

// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  
});