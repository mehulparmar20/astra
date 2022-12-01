var base_path = $("#url").val();
$(document).ready(function() {
// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
    $('.closeTruckModal').click(function(){
        $('#truckModal').modal('hide');
    });
    // <!-- -------------------------------------------------------------------------Get truck  ------------------------------------------------------------------------- -->  
   
    $('#truck_navbar').click(function(){
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getTruck",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                console.log(text);
                createGetTruckRows(text);
                truckResult = text;
             }
        });
        $('#truckModal').modal('show');
    });


    // <!-- -------------------------------------------------------------------------over Get truck  ------------------------------------------------------------------------- --> 
    // <!-- -------------------------------------------------------------------------function  ------------------------------------------------------------------------- --> 
    
    function createGetTruckRows(truckResult) {
        var trucklen1 = 0;
            if (truckResult != null) {
                trucklen1 = truckResult.truck.truck.length;

                $("#truckTable").html('');

                if (trucklen1 > 0) {
                    var no=1;
                    for (var i = trucklen1-1; i > 0; i--) {  
                        var truckId =truckResult.truck.truck[i]._id;
                        var truckNumber =truckResult.truck.truck[i].truckNumber;
                        var truckTypeid =truckResult.truck.truck[i].truckType;

                        var truckTypeLen = truckResult.truck_type.truck.length;
                        for (var j = 0; j < truckTypeLen; j++) { 
                            var truck_Type_id = truckResult.truck_type.truck[j]._id;
                            if(truckTypeid == truck_Type_id){
                                truckType=truckResult.truck_type.truck[j].truckType;
                                break;
                            }
                        }

                        var licensePlate =truckResult.truck.truck[i].licensePlate;
                        var plateExpiry =truckResult.truck.truck[i].plateExpiry;
                        var inspectionExpiry =truckResult.truck.truck[i].inspectionExpiry;
                        var status =truckResult.truck.truck[i].status;
                        var ownership =truckResult.truck.truck[i].ownership;
                        var mileage =truckResult.truck.truck[i].mileage;
                        var axies =truckResult.truck.truck[i].axies;
                        var year =truckResult.truck.truck[i].year;
                        var fuelType =truckResult.truck.truck[i].fuelType;
                        var startDate =truckResult.truck.truck[i].startDate;
                        if(startDate== false){
                            startDate='';
                        }
                        var deactivationDate =truckResult.truck.truck[i].deactivationDate;
                        if(deactivationDate== false){
                            deactivationDate='';
                        }
                        var ifta =truckResult.truck.truck[i].ifta;
                        var registeredState =truckResult.truck.truck[i].registeredState;
                        var insurancePolicy =truckResult.truck.truck[i].insurancePolicy;
                        var grossWeight =truckResult.truck.truck[i].grossWeight;
                        var vin =truckResult.truck.truck[i].vin;
                        var dotexpiryDate =truckResult.truck.truck[i].dotexpiryDate;
                        if(dotexpiryDate== false){
                            dotexpiryDate='';
                        }
                        var transponder =truckResult.truck.truck[i].transponder;
                        var internalNotes =truckResult.truck.truck[i].internalNotes;
                        

                        var truckStr = "<tr data-id=" + (i + 1) + ">" +
                        //  "<td id='id1'>" + id+ "&"+driverId + "</td>" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td data-field='truckNumber' >" + truckNumber + "</td>" +
                            "<td data-field='truckType' >" + truckType + "</td>" +
                            "<td data-field='licensePlate' >" + licensePlate + "</td>" +
                            "<td data-field='plateExpiry' >" + plateExpiry + "</td>" +
                            "<td data-field='inspectionExpiry' >" + inspectionExpiry + "</td>" +
                            "<td data-field='status' >" + status + "</td>" +
                            "<td data-field='ownership' >" + ownership + "</td>" +
                            "<td data-field='mileage' >" + mileage + "</td>" +
                            "<td data-field='axies' >" + axies + "</td>" +
                            "<td data-field='year' >" + year + "</td>" +
                            "<td data-field='fuelType' >" + fuelType + "</td>" +
                            "<td data-field='startDate' >" + startDate + "</td>" +
                            "<td data-field='deactivationDate' >" + deactivationDate + "</td>" +
                            "<td data-field='ifta' >" +ifta  + "</td>" +
                            "<td data-field='registeredState' >" + registeredState + "</td>" +
                            "<td data-field='insurancePolicy' >" + insurancePolicy + "</td>" +
                            "<td data-field='grossWeight' >" + grossWeight + "</td>" +
                            "<td data-field='vin' >" + vin + "</td>" +
                            "<td data-field='dotexpiryDate' >" +dotexpiryDate  + "</td>" +
                            "<td data-field='transponder' >" + transponder + "</td>" +
                            "<td data-field='internalNotes' >" + internalNotes + "</td>" +
                            "<td style='text-align:center'>"+
                                "<a class='mt-2 btn btn-primary fs-14 text-white editCurrency'  title='Edit1' data-truckId='"+truckId+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                            "</td></tr>";

                        $("#truckTable").append(truckStr);
                        no++;
                        
                    }
                } else {
                    var truckStr = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#truckTable").append(truckStr);
                }
            }else {
            var tr_str1 = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#currencyTable").append(currencyStr);
        }
        // $("#CurrencyModal").modal("show");
    }

// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  
});