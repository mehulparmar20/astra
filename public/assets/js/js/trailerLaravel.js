var base_path = $("#url").val();
$(document).ready(function() {
    // ============== strart list data trailer =================
    $("#trailer_nav").on('click',function(){
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getTrailer",
            // async: false,
            //dataType:JSON,
            success: function(response) {
                creategetTrailerRows(response);
                TrailerResult = response;
             }
        });
        $('#TrailerModal').modal('show');
    });
    function creategetTrailerRows(TrailerResult) 
    {
        var Trailer1 = 0;
        if (TrailerResult != null) 
        {
            Trailer1 = TrailerResult.trailer_type.trailer.length;
            

            $("#trailer_tbl").html('');
            // console.log(Trailer1);
            if (Trailer1 > 0) 
            {
                var no=1;
                for (var i = Trailer1-1; i > 0; i--) {  
                    var  trailerId =TrailerResult.trailer_type.trailer[i]._id;
                    var trailerNumber =TrailerResult.trailer_type.trailer[i].trailerNumber;
                    var trailerTypeid =TrailerResult.trailer_type.trailer[i].trailerType;
                        // console.log(trailerTypeid);
                    var trailerTypeLen = TrailerResult.trailer_type.trailer.length;
                    // console.log(trailerTypeLen);
                    for (var j = 0; j < trailerTypeLen; j++) { 
                        var trailer_Type_id = TrailerResult.trailer_type.trailer[j]._id;
                        // console.log(trailerTypeid);
                        if(trailerTypeid == trailer_Type_id)
                        {
                            trailerType=TrailerResult.trailer.trailer[j].trailerType;
                            break;
                        }
                        else
                        {
                            trailerType="----";
                        }
                    }

                    var licensePlate =TrailerResult.trailer_type.trailer[i].licenseType;
                    var plateExpiry =TrailerResult.trailer_type.trailer[i].plateExpiry;
                    var inspectionExpiry =TrailerResult.trailer_type.trailer[i].inspectionExpiration;
                    var registeredState=TrailerResult.trailer_type.trailer[i].registeredState;
                    var status =TrailerResult.trailer_type.trailer[i].status;
                    var model =TrailerResult.trailer_type.trailer[i].model;
                    var activationDate =TrailerResult.trailer_type.trailer[i].activationDate;
                    var axies =TrailerResult.trailer_type.trailer[i].axies;
                    var vin =TrailerResult.trailer_type.trailer[i].vin;
                    var dot =TrailerResult.trailer_type.trailer[i].dot;
                    var year =TrailerResult.trailer_type.trailer[i].year;
                    var internalNotes =TrailerResult.trailer_type.trailer[i].internalNotes;
                    var startDate =TrailerResult.trailer_type.trailer[i].startDate;
                    if(model !="" && model != null)
                    {
                        model=model;
                    }
                    else
                    {
                        model="----";
                    }
                    if(status != "" && status != null)
                    {
                        status=status;
                    }
                    else
                    {
                        status="----";
                    }                       
                    if(year !="" && year != null)
                    {
                        year=year;
                    }
                    else
                    {
                        year="----";
                    }
                    if(axies !="" && axies != null)
                    {
                        axies=axies;
                    }
                    else
                    {
                        axies="----";
                    }
                    if(registeredState !="" && registeredState != null)
                    {
                        registeredState=registeredState;
                    }
                    else
                    {
                        registeredState="----";
                    }
                    if(dot !="" && dot != null)
                    {
                        dot=dot;
                    }
                    else
                    {
                        dot="----";
                    }
                    if(internalNotes !="" && internalNotes != null)
                    {
                        internalNotes=internalNotes;
                    }
                    else
                    {
                        internalNotes="----";
                    }
                    if(activationDate !="" && activationDate != null)
                    {
                        activationDate=activationDate;
                    }
                    else
                    {
                        activationDate="----";
                    }
                    var deactivationDate =TrailerResult.trailer_type.trailer[i].deactivationDate;
                    if(deactivationDate== false){
                        deactivationDate='';
                    }
                    var dotexpiryDate =TrailerResult.trailer_type.trailer[i].dotexpiryDate;
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
                            "<a class='mt-2 button-29 fs-14 text-white edit_trailerModel'  title='edit' data-trailerId='"+trailerId+"' data-trailerType='' ><i class='fe fe-edit'></i></a>&nbsp <input type='hidden' value="+trailerId+" class='trailer_id_edit'>"+
                            "<a class='mt-2 button-29 fs-14 text-white delete_trailerModel'  title='edit' data-trailerId='"+trailerId+"' data-trailerType='' ><i class='fe fe-trash'></i></a>&nbsp <input type='hidden' value="+trailerId+" class='trailer_id_delete'>"
                        "</td></tr>";

                    $("#trailer_tbl").append(trailerStr);
                    no++;
                    
                }
            } 
            else 
            {
                var trailerStr = "<tr data-id=" + i + ">" +
                    "<td align='center' colspan='4'>No record found.</td>" +
                    "</tr>";
    
                $("#trailer_tbl").append(trailerStr);
            }
        }
        else 
        {
            var tr_str1 = "<tr data-id=" + i + ">" +
            "<td align='center' colspan='4'>No record found.</td>" +
            "</tr>";
            // $("#currencyTable").append(currencyStr);
        }
        // $("#CurrencyModal").modal("show");
    }
    // ==================== end list trailer model ===============


    
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
   
    


    // ======================= start save trailer model ======================
    $('.saveTrailerType').click(function(){
        var trailer_type_name = $('#trailer_type_name').val();
        if(trailer_type_name=='')
        {
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
    
    $('#TrailerSavebutton').click(function(){
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
        if(trailer_number=='')
        {
            swal.fire( "'Enter trailer number");
            $('#trailer_number').focus();
            return false;
            
        } 
        if(trailertype=='')
        {
            swal.fire( "'Select trailer number from dropdown menu");
            return false;
        }
        if(license_plate=='')
        {
            swal.fire( "'Enter license plate");
            return false;
        }
        if(plate_expiry=='')
        {
            swal.fire( "'Enter plate expiry");
            return false;
        }
        if(vin=='')
        {
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
                console.log(data)                    
                swal.fire("Done!", "Trailer added successfully", "success");
                $('#addTrailerModal').modal('hide');
                $.ajax({
                    type: "GET",
                    url: base_path+"/admin/getTrailer",
                    // async: false,
                    //dataType:JSON,
                    success: function(response) {
                        creategetTrailerRows(response);
                        TrailerResult = response;
                        }
                });
            }
        });
    });

    //======================= end save trailer model ======================



    //===================== start save trailer type model ====================
    $('.trailerTypeSet').focus(function(){
        $('.trailerTypeSet').val('');
        $.ajax({
            type: "GET",
            url: base_path+"/admin/trailer_getTrailertype",
            async: false,
            //dataType:JSON,
            success: function(data) {                   
                createTrailerTypeList(data);
                trailerTypeResponse = data;
            }
        });
    });
    function createTrailerTypeList(trailerTypeResponse) 
    {           
        var trailerTypelength = 0; 
        if (trailerTypeResponse != null) 
        {
            trailerTypelength = trailerTypeResponse.trailer.length;
        }
        if (trailerTypelength > 0) 
        {
            // var no=1;
            //$(".customerCurrencySet").html('');
            $(".trailerTypeSet").html('');
            for (var i = 0; i < trailerTypelength; i++) 
            {  
                var trailerType =trailerTypeResponse.trailer[i].trailerType;
                var trailerTypeId =trailerTypeResponse.trailer[i]._id;
                var TrailerTypeList = "<option class='trailerType' value='"+ trailerType +"'>"                
                $(".trailerTypeSet").append(TrailerTypeList);
                //<option value="Edge">
                    //no++;
            }            
        }     
    }
    // =================end save trailer type =========================

    //============== start edit trailer model ==================
    $('body').on('click','.edit_trailerModel',function(){
       var id=$(this).attr("data-trailerId");
        $.ajax({
            type:'get',
            url:base_path+"/admin/edit_trailer",
            data:{'id':id},
            async: false,
            success:function(response)
            {
                $("#edittrailer_id").val(response._id);
               $("#editetrailer_number").val(response.trailerNumber); 
               $("#editTrailerType").val(response.trailerType); 
               $("#editTrailerlicense_plate").val(response.licenseType); 
               $("#editTrailerplate_expiry").val(response.plateExpiry); 
               $("#editTrailerinspection").val(response.inspectionExpiration); 
               $("#editTrailer_status").val(response.status); 
               $("#editTrailerModel").val(response.model); 
               $("#editTraileryear").val(response.year); 
               $("#traileraxies").val(response.axies); 
               $("#editTrailerRegisteredState").val(response.registeredState); 
               $("#editTrailervin").val(response.vin); 
               $("#edit_trailerActivation").val(response.activationDate); 
               $("#edit_trailer_dot").val(response.dot); 
               $("#edit_trailerinternal_note").val(response.internalNotes); 
            //    $("#edit_trailerfiles").val(response.trailerNumber); 
            }
        });
        $("#editTrailerModal").modal('show');
     });
     $(".closeEditTrailerModal").click(function(){
        $("#editTrailerModal").modal('hide');
     });

     $("#TrailerEditbutton").click(function(){
        var trailertype='';
        var trailer_number = $('#editetrailer_number').val();
        var id = $('#edittrailer_id').val();
        var trailertype = $('#editTrailerType').val().split('-');
        var trailertypeId=trailertype[0];
        var license_plate =$('#editTrailerlicense_plate').val();
        var plate_expiry =$('#editTrailerplate_expiry').val();
        var inspection =$('#editTrailerinspection').val();
        var status =$('#editTrailer_status').val();
        var model =$('#editTrailerModel').val();
        var year =$('#editTraileryear').val();
        var axies =$('#traileraxies').val();
        var RegisteredState =$('#editTrailerRegisteredState').val();
        var vin =$('#editTrailervin').val();
        var activation =$('#edit_trailerActivation').val();
        var dot =$('#edit_trailer_dot').val();
        var internal_note =$('#edit_trailerinternal_note').val(); 
        if(trailer_number=='')
        {
            swal.fire( "'Enter trailer number");
            $('#editetrailer_number').focus();
            return false;
            
        } 
        if(trailertype=='')
        {
            swal.fire( "'Select trailer number from dropdown menu");
            return false;
        }
        if(license_plate=='')
        {
            swal.fire( "'Enter license plate");
            return false;
        }
        if(plate_expiry=='')
        {
            swal.fire( "'Enter plate expiry");
            return false;
        }
        if(vin=='')
        {
            swal.fire( "'Enter VIN");
            return false;
        }
        $.each($("#edit_trailerfiles")[0].trailerfiles, function(i, file) { 
            // alert(file);           
            formData.append('trailerfiles[]', file);
        });
        var formData = new FormData();
        formData.append('_token',$("#_tokenEditTrailer").val());
        formData.append('id',id);
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
            url: base_path+"/admin/updateTrailer",
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            data:formData,
            success: function(data) {
                // alert("success !");
                console.log(data)                    
                swal.fire("Done!", "Trailer updated successfully", "success");
                $('#editTrailerModal').modal('hide');
                $.ajax({
                    type: "GET",
                    url: base_path+"/admin/getTrailer",
                    success: function(response) {
                        creategetTrailerRows(response);
                        TrailerResult = response;
                        }
                });
            }
        });
     });
    //=============== end edit trailer model ================  

});

   