var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
    $('.closeTruckModal').click(function(){
         $('#truckModal').modal('hide');
    //     $('#addTruckModal').modal('hide');
     });
     $('#truckModal').modal({
        backdrop: 'static',
        keyboard: false
    })

    $('.closeAddTruckModal').click(function(){
        $('#addTruckModal').modal('hide');
        //$('#truckModal').modal('show');
    });

    $('.addtruckModal').click(function(){
        //$('#truckModal').modal('hide');
        $('#addTruckModal').modal('show');
    });

    $('#addTruckModal').modal({
        backdrop: 'static',
        keyboard: false
    })


//driver as owner operator modal
    $('#driverAddTruck').click(function(){
        $('#addTruckModal').modal('show');
    });
    $('#up_driverAddTruck').click(function(){
        $('#addTruckModal').modal('show');
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
// <!-- -------------------------------------------------------------------------get truck type ------------------------------------------------------------------------- -->  
   // $('.list select').selectpicker();   
   $('.truckTypeSet').focus(function(){
    $('.truckTypeSet').val('');
        //alert(); 
        $.ajax({
            type: "GET",
            url: base_path+"/admin/truck_getTrucktype",
            async: false,
            //dataType:JSON,
            success: function(data) {
                //console.log(data)                    
                createTruckTypeList(data);
                truckTypeResponse = data;
            }
        });
    });


 
// <!-- -------------------------------------------------------------------------over get truck type ------------------------------------------------------------------------- -->
// <!-- -------------------------------------------------------------------------Add truck  ------------------------------------------------------------------------- --> 
    $('#truckSavebutton').click(function(){
    //asign veriable
        var trucktype='';
        var truck_number = $('#truck_number').val();
        var trucktype = $('#truckType').val().split('-');
        var trucktypeId=trucktype[0];
        var license_plate =$('#license_plate').val();
        var plate_expiry =$('#plate_expiry').val();
        var inspection =$('#inspection').val();
        var status =$('#status').val();
        if ($("#ownership").is(":checked")) {
            var ownership = 'CompanyTruck';
        } else if ($("#Own").is(":checked")) {
            var ownership = 'OwnerOperator';
        }else{
            var ownership ='';
        }
        var mileage =$('#mileage').val();
        var axies =$('#axies').val();
        var year =$('#year').val();
        var fuel_type =$('#fuel_type').val();
        var start_date =$('#start_date').val();
        var deactivation =$('#deactivation').val();
        var RegisteredState =$('#RegisteredState').val();
        var Insurance_Policy =$('#Insurance_Policy').val();
        var gross =$('#gross').val();
        var vin =$('#vin').val();
        var dot =$('#dot').val();
        var transponder =$('#transponder').val();
        if( $('#ifta').is(':checked') ){
            var ifta = " IFTA Truck";
        } else {
            var ifta = "NOT IFTA Truck";
        }
        var internal_note =$('#internal_note').val();
    //validation  
        if(truck_number==''){
            swal.fire( "'Enter truck number");
            $('#truck_number').focus();
            return false;
            
        } 
        if(trucktype==''){
            swal.fire( "'Select truck number from dropdown menu");
            return false;
        }
        if(license_plate==''){
            swal.fire( "'Enter license plate");
            return false;
        }
        if(plate_expiry==''){
            swal.fire( "'Enter plate expiry");
            return false;
        }  
        if(ownership==''){
            swal.fire( "'Select ownership");
            return false;
        }
        if(vin==''){
            swal.fire( "'Enter VIN");
            return false;
        }

    //upload files
        var formData = new FormData();

        $.each($("#files")[0].files, function(i, file) {            
            formData.append('file[]', file);
        });

        formData.append('_token',$("#_tokenTruck").val());
        formData.append('truck_number',truck_number.trim());
        formData.append('trucktypeId',trucktypeId);
        formData.append('license_plate',license_plate);        
        formData.append('plate_expiry',plate_expiry);
        formData.append('inspection',inspection);
        formData.append('status',status);
        formData.append('ownership',ownership);
        formData.append('mileage',mileage);
        formData.append('axies',axies); 
        formData.append('year',year);      
        formData.append('fuel_type',fuel_type);      
        formData.append('start_date',start_date); 
        formData.append('deactivation',deactivation); 
        formData.append('start_date',start_date); 
        formData.append('RegisteredState',RegisteredState); 
        formData.append('Insurance_Policy',Insurance_Policy); 
        formData.append('gross',gross);                               
        formData.append('vin',vin);
        formData.append('dot',dot);                       
        formData.append('transponder',transponder);                       
        formData.append('ifta',ifta);                       
        formData.append('internal_note',internal_note);        

        $.ajax({
            type: "POST",
            url: base_path+"/admin/addTruck",
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function(data) {
                //console.log(data)                    
                swal.fire("Done!", "Truck added successfully", "success");
                $('#addTruckModal').modal('hide');
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
            }
        });



    });
// <!-- -------------------------------------------------------------------------over add truck  ------------------------------------------------------------------------- --> 
// <!-- -------------------------------------------------------------------------function  ------------------------------------------------------------------------- --> 
    
// get truck
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
                        

                        var truckStr = "<tr class='tr' data-id=" + (i + 1) + ">" +
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
                                "<a class='button-23 editCurrency'  title='Edit1' data-truckId='"+truckId+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
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

//get truck type
    function createTruckTypeList(truckTypeResponse) {           
        var TruckTypeLength = 0;    
        
        if (truckTypeResponse != null) {
           TruckTypeLength = truckTypeResponse.truck.length;
        }
   
        if (TruckTypeLength > 0) {
           // var no=1;
            //$(".customerCurrencySet").html('');
            $(".truckTypeSet").html('');
            for (var i = 0; i < TruckTypeLength; i++) {  
                var truckType =truckTypeResponse.truck[i].truckType;
                var truckTypeId =truckTypeResponse.truck[i]._id;
                //var customerCurrency = "<option id='customerCurrency' value='"+ currency +"'>"+ currency +"</option>"
                //"<a class='dropdown-item custCurrency' value='"+ currency +"'>"+ no +" )"+ currency +"</a>";                  
   
              // var TruckTypeList = "<option class='truckType' t_type_id="+truckTypeId +" data-value='"+ truckTypeId +"'>"+ truckType +"<option "
               var TruckTypeList = "<option class='truckType' value='"+ truckTypeId+"-"+ truckType +"'>"                
               $(".truckTypeSet").append(TruckTypeList);
               //<option value="Edge">
                //no++;
   
            }
            
        }
        
    }

// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  
});