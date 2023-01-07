var base_path = $("#url").val();
$(document).ready(function() {
    $("#trailer_nav").on('click',function(){
        // alert("success");
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getTrailer",
            // async: false,
            //dataType:JSON,
            success: function(response) {
                // alert(response);
                // console.log(response);
                creategetTrailerRows(response);
                TrailerResult = response;
             }
        });
        $('#TrailerModal').modal('show');
    });
    // getTrailer
    function creategetTrailerRows(TrailerResult) {
        // console.log(TrailerResult);
        var Trailer1 = 0;
            if (TrailerResult != null) {
                // alert( TrailerResult.trailer_type.length);
                for(var h=0; TrailerResult.trailer_type.length>h; h++)
                {                    
                    Trailer1 = TrailerResult.trailer_type[h].trailer.length;
                   
                 
                    $("#trailer_tbl").html('');
                    // console.log(TrailerResult);
                    if (Trailer1 > 0) {
                        var no=1;
                        for (var i = Trailer1-1; i > 0; i--) {  
                            var  trailerId =TrailerResult.trailer_type[h].trailer[i]._id;
                            var trailerNumber =TrailerResult.trailer_type[h].trailer[i].trailerNumber;
                            // alert(trailerNumber);
                            var trailerTypeid =TrailerResult.trailer_type[h].trailer[i].trailerType;
                                // console.log(trailerTypeid);
                            var trailerTypeLen = TrailerResult.trailer_type[h].trailer.length;
                            //  alert(trailerTypeLen);
                            for (var j = 0; j < trailerTypeLen; j++) { 
                                var trailer_Type_id = TrailerResult.trailer_type.trailer[j]._id;
                                // console.log(trailer_Type_id);
                                if(trailerTypeid == trailer_Type_id){
                                    
                                    // trailerType=TrailerResult.trailer.trailer[j].trailerType;
                                    trailerType="sfsdfds";
                                    break;
                                }
                            }
        
                            var licensePlate =TrailerResult.trailer_type[h].trailer[i].licenseType;
                            var plateExpiry =TrailerResult.trailer_type[h].trailer[i].plateExpiry;
                            var inspectionExpiry =TrailerResult.trailer_type[h].trailer[i].inspectionExpiration;
                            var registeredState=TrailerResult.trailer_type[h].trailer[i].registeredState;
                            var status =TrailerResult.trailer_type[h].trailer[i].status;
                            var model =TrailerResult.trailer_type[h].trailer[i].model;
                            var activationDate =TrailerResult.trailer_type[h].trailer[i].activationDate;
                            var axies =TrailerResult.trailer_type[h].trailer[i].axies;
                            var vin =TrailerResult.trailer_type[h].trailer[i].vin;
                            var dot =TrailerResult.trailer_type[h].trailer[i].dot;
                            var year =TrailerResult.trailer_type[h].trailer[i].year;
                            var internalNotes =TrailerResult.trailer_type[h].trailer[i].internalNotes;
                            var startDate =TrailerResult.trailer_type[h].trailer[i].startDate;
                            if(startDate== false){
                                startDate='';
                            }
                            var deactivationDate =TrailerResult.trailer_type[h].trailer[i].deactivationDate;
                            if(deactivationDate== false){
                                deactivationDate='';
                            }
                            var dotexpiryDate =TrailerResult.trailer_type[h].trailer[i].dotexpiryDate;
                            if(dotexpiryDate== false){
                                dotexpiryDate='';
                            }
                            
                            var trailerStr = "<tr data-id=" + (i + 1) + ">" +
                            //  "<td id='id1'>" + id+ "&"+driverId + "</td>" +
                                "<td data-field='no'>" + no + "</td>" +
                                "<td data-field='trailerNumber' >" + trailerNumber + "</td>" +
                                "<td data-field='trailerType' >" + trailerType + "</td>" +
                                "<td data-field='licensePlate' >" + licensePlate + "</td>" +
                                "<td data-field='plateExpiry' >" + plateExpiry + "</td>" +
                                "<td data-field='inspectionExpiry' >" + inspectionExpiry + "</td>" +
                                "<td data-field='status' >" + status + "</td>" +
                                "<td data-field='model' >" + model + "</td>" +
                                "<td data-field='mileage' >" + year + "</td>" +
                                "<td data-field='axies' >" + axies + "</td>" +
                                "<td data-field='registeredState' >" + registeredState + "</td>" +
                                "<td data-field='vin' >" + vin + "</td>" +
                                "<td data-field='dot' >" + dot + "</td>" +
                                "<td data-field='activationDate' >" + activationDate + "</td>" +
                                "<td data-field='internalNotes' >" +internalNotes  + "</td>" +
                                "<td style='text-align:center'>"+
                                    "<a class='mt-2 btn btn-primary fs-14 text-white editCurrency'  title='Edit1' data-trailerId='"+trailerId+"' data-trailerType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                                "</td></tr>";
        
                            $("#trailer_tbl").append(trailerStr);
                            no++;
                            
                        }
                    } else {
                        var trailerStr = "<tr data-id=" + i + ">" +
                            "<td align='center' colspan='4'>No record found.</td>" +
                            "</tr>";
            
                        $("#trailer_tbl").append(trailerStr);
                    }
                }
            }else {
            var tr_str1 = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";
    
            // $("#currencyTable").append(currencyStr);
        }
        // $("#CurrencyModal").modal("show");
    }
    
    $('.coseTrilershow').click(function(){
        $('#TrailerModal').modal('hide');
    });
    
    $('.closeAddTrailerModal').click(function(){
       $('#addTrailerModal').modal('hide');
    });
    
    $('.addTrailerModal').click(function(){
       $('#addTrailerModal').modal('show');
    });
    $('.addTrailerType').click(function(){
       $('#addTrailerTypeModal').modal('show');
    });
    $('.closeTrailerType').click(function(){
       $('#addTrailerTypeModal').modal('hide');
    });
    $('.saveTrailerType').click(function(){
        var trailer_type_name = $('#trailer_type_name').val();
        // alert(trailer_type);
        if(trailer_type_name==''){
            swal.fire( "'Enter trailer type name");
            $('#trailer_type_name').focus();
            return false;            
        }
        var formData = new FormData();
        formData.append('_token',$("#_tokenTrailerType").val());        
        formData.append('trailer_type_name',trailer_type_name);
        $.ajax({
            type: "POST",
            url: base_path+"/admin/trailer_addTrailertype",
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            data:formData,
            success:function(response){
                swal.fire("Done!", "Trailer Type added successfully", "success");
                $('#addTrailerTypeModal').modal('hide');
                $.ajax({
                    type: "GET",
                    url: base_path+"/admin/trailer_getTrailertype",
                    async: false,
                    success: function(data) {                 
                        createTrailerTypeList(data);
                        trailerTypeResponse = data;
                    }
                });
            }
        })
     });
    // insert data trailer
    
    $('#TrailerSavebutton').click(function(){
        // alert("success");
            var trailertype='';
            var trailer_number = $('#trailer_number').val();
            var trailertype = $('#trailerType').val().split('-');
            var trailertypeId=trailertype[0];
            var license_plate =$('#trailerlicense_plate').val();
            var plate_expiry =$('#trailerplate_expiry').val();
            var inspection =$('#trailerinspection').val();
            var status =$('#trailer_status').val();
            var model =$('#model').val();
            var year =$('#traileryear').val();
            var axies =$('#traileraxies').val();
            var RegisteredState =$('#trailerRegisteredState').val();
            var vin =$('#trailervin').val();
            var activation =$('#activation').val();
            var dot =$('#trailer_dot').val();
            var internal_note =$('#trailerinternal_note').val(); 
            if(trailer_number==''){
                swal.fire( "'Enter trailer number");
                $('#trailer_number').focus();
                return false;
                
            } 
            if(trailertype==''){
                swal.fire( "'Select trailer number from dropdown menu");
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
            if(vin==''){
                swal.fire( "'Enter VIN");
                return false;
            }
            $.each($("#trailerfiles")[0].trailerfiles, function(i, file) { 
                // alert(file);           
                formData.append('trailerfiles[]', file);
            });
            var formData = new FormData();
            formData.append('_token',$("#_tokenTrailer").val());
            formData.append('trailer_number',trailer_number.trim());
            formData.append('trailertypeId',trailertypeId);
            formData.append('license_plate',license_plate);        
            formData.append('plate_expiry',plate_expiry);
            formData.append('inspection',inspection);
            formData.append('status',status);
            formData.append('model',model);
            formData.append('year',year);
            formData.append('axies',axies);  
            formData.append('RegisteredState',RegisteredState);                                  
            formData.append('vin',vin);  
            formData.append('activation',activation); 
            formData.append('dot',dot);                  
            formData.append('internal_note',internal_note);              
    
            $.ajax({
                type: "POST",
                url: base_path+"/admin/addTrailer",
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                data:formData,
                success: function(data) {
                    // alert(data);
                    console.log(data)                    
                    swal.fire("Done!", "Trailer added successfully", "success");
                    $('#addTrailerModal').modal('hide');
                    $.ajax({
                        type: "GET",
                        url: base_path+"/admin/getTrailer",
                        // async: false,
                        //dataType:JSON,
                        success: function(response) {
                            // alert(response);
                            // console.log(response);
                            creategetTrailerRows(response);
                            TrailerResult = response;
                         }
                    });
                }
            });
        });
});
$('.trailerTypeSet').focus(function(){
    $('.trailerTypeSet').val('');
        //alert(); 
        $.ajax({
            type: "GET",
            url: base_path+"/admin/trailer_getTrailertype",
            async: false,
            //dataType:JSON,
            success: function(data) {
                //console.log(data)                    
                createTrailerTypeList(data);
                trailerTypeResponse = data;
            }
        });
    });
function createTrailerTypeList(trailerTypeResponse) {           
    var trailerTypelength = 0;    
    
    if (trailerTypeResponse != null) {
        trailerTypelength = trailerTypeResponse.trailer.length;
    }

    if (trailerTypelength > 0) {
       // var no=1;
        //$(".customerCurrencySet").html('');
        $(".trailerTypeSet").html('');
        for (var i = 0; i < trailerTypelength; i++) {  
            var trailerType =trailerTypeResponse.trailer[i].trailerType;
            var trailerTypeId =trailerTypeResponse.trailer[i]._id;
           var TrailerTypeList = "<option class='trailerType' value='"+ trailerType +"'>"                
           $(".trailerTypeSet").append(TrailerTypeList);
           //<option value="Edge">
            //no++;

        }
        
    }
    
    
}