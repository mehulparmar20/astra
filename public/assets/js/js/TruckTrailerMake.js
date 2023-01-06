var base_path = $("#url").val();
$(document).ready(function() {

// -------------------------------------------------------------------------  start ------------------------------------------------------------------------- --  
    $('#TruckTrailerMakeModal, #addTruckTrailerMakeModal').modal({
        backdrop: 'static',
        keyboard: false
    })

    $('.TruckTrailerMakeClose').click(function(){
        $('#TruckTrailerMakeModal').modal('hide');
    });

    $('#addTruckTrailerMake').click(function(){
        $('#addTruckTrailerMakeModal').modal('show');
    });

    $('.addTruckTrailerMakeClose').click(function(){
        $('#addTruckTrailerMakeModal').modal('hide');
    });
// -------------------------------------------------------------------------    Get   ------------------------------------------------------------------------- --  
    $('#TruckTrailerMake_navbar').click(function(){
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getTruckTrailerMake",
            async: false,
            success: function(text) {
                console.log(text);
                createTruckTrailerMakeRows(text);
              }
        });
        $('#TruckTrailerMakeModal').modal('show');
    });
// - -------------------------------------------------------------------------   over Get   ------------------------------------------------------------------------- --
// -- -------------------------------------------------------------------------  function get  -------------------------------------------------------------------------- 
    function createTruckTrailerMakeRows(Result) {
        var len1 = 0;
        var no=1;
            if (Result != null) {
                $("#TruckTrailerMakeTable").html('');
                len1 = Result.Truck_type.length;
                len2 = Result.trailer_type.length;
////truck                
                if (len1 > 0) {
                    for (var i = len1-1; i >= 0; i--) { 
                        
                        len3 = Result.Truck_type[i].truck.length;
                        len4 = Result.trailer_type[i].trailer.length;
                        // var main_Id =Result.RecurrenceCategory[i].fixPay._id;
                        // var com_Id =Result.RecurrenceCategory[i].fixPay.companyID;

                        if (len3 > 0) {
                            for (var j = len3-1; j >= 0; j--) {

                                var  id=Result.Truck_type[i].truck[j]._id;
                                var  truckType=Result.Truck_type[i].truck[j].truckType;
                               
                                var deleteStatus =Result.Truck_type[i].truck[j].deleteStatus;

                                if(deleteStatus == "NO" || deleteStatus == "No"){
                                        var Str = "<tr class='tr' data-id=" + (i + 1) + ">" +
                                        "<td data-field='no'>" + no + "</td>" +
                                        "<td data-field='fixPayType'>" + truckType + "</td>" +
                                        "<td data-field='Truck'>Truck</td>" +
                                        "<td style='text-align:center'>"+
                                            "<a class='button-23  "+editPrivilege+"'  title='Edit1' data-Id='"+id+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                                            "</a> <a class='delete1 button-23 "+delPrivilege+"' data-id="+ email +" title='Delete'><i class='fe fe-delete'></i></a>"+
                                        "</td></tr>";
            
                                    $("#TruckTrailerMakeTable").append(Str);
                                    no++;
                                }
                            }
                        }
                    }
                    
                }else {
                    var Str = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#TruckTrailerMakeTable").append(Str);
                }
////trailer
                if (len2 > 0) {
                    for (var i = len2-1; i >= 0; i--) { 
                        len4 = Result.trailer_type[i].trailer.length;
                        // var main_Id =Result.RecurrenceCategory[i].fixPay._id;
                        // var com_Id =Result.RecurrenceCategory[i].fixPay.companyID;

                        if (len3 > 0) {
                            for (var j = len4-1; j >= 0; j--) {

                                var  id=Result.trailer_type[i].trailer[j]._id;
                                var  trailerType=Result.trailer_type[i].trailer[j].trailerType;
                               
                                var deleteStatus =Result.trailer_type[i].trailer[j].deleteStatus;

                                if(deleteStatus == "NO" || deleteStatus == "No"){
                                        var Str = "<tr class='tr' data-id=" + (i + 1) + ">" +
                                        "<td data-field='no'>" + no + "</td>" +
                                        "<td data-field='trailerType'>" + trailerType + "</td>" +
                                        "<td data-field='trailer'>Trailer</td>" +
                                        "<td style='text-align:center'>"+
                                            "<a class='mt-2 btn btn-primary fs-14 text-white editCurrency'  title='Edit1' data-Id='"+id+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                                        "</td></tr>";
            
                                    $("#TruckTrailerMakeTable").append(Str);
                                    no++;
                                }
                            }
                        }
                    }
                    
                }else {
                    var Str = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#TruckTrailerMakeTable").append(Str);
                }
            
            }else {
            var Str = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

                $("#TruckTrailerMakeTable").append(Str);
            }

    }
 // -- -------------------------------------------------------------------------   over Get   ------------------------------------------------------------------------- --

 // -- -------------------------------------------------------------------------    add    ------------------------------------------------------------------------- -- 
   
    $("#saveTruckTrailerMake").click(function(){
        var tt_name=$('#tt_name').val();
        var type=$('#type').val();

        alert(tt_name);
        alert(type);
        // if(fixPayType_name=='')
        // {
        //     swal.fire( "Enter Name");
        //     $('#fixPayType_name').focus();
        //     return false;
        // } 

        $.ajax({
            url: base_path+"/admin/addTruckTrailer",
            type: "POST",
            datatype:"JSON",
            data: {
                _token: $("#_tokenTruckTrailerMake").val(),
                tt_name: tt_name,
                type: type,
            },
            cache: false,
            success: function(Result){
                console.log(Result);
                if(Result){
                    swal.fire( "Added successfully.");
                    // alert("Equipment Type added successfully.");
                    $("#addTruckTrailerMakeModal").modal("hide");
                    $.ajax({
                        type: "GET",
                        url: base_path+"/admin/getTruckTrailerMake",
                        async: false,
                        success: function(text) {
                            console.log(text);
                            createTruckTrailerMakeRows(text);
                          }
                    });
                    $('#TruckTrailerMakeModal').modal('show');
                }else{
                    swal.fire(" Not Added successfully.");
                }
            }
        });
    });


// - -------------------------------------------------------------------------over add    ------------------------------------------------------------------------- -- 


// -- -------------------------------------------------------------------------End------------------------------------------------------------------------- -- 
});