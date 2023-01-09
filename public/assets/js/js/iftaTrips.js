var base_path = $("#url").val();
$(document).ready(function() {
    $('.closeIftaTrip').click(function(){
        $('#IftaTripModalList').modal('hide');
        $("#NotVerifyIftaTripModalList").modal("hide");
    });
   
    $('#iftaTrip_navbar').click(function(){
        // alert();
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getIftaTrip",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                // console.log(text);
                createIftaTripRows(text);
                notVerifyTrip(text);
                IftaTripResult = text;
             }
        });
        $('#IftaTripModalList').modal('show');
    });
    function createIftaTripRows(IftaTripResult)
    {
        if (IftaTripResult != null) 
        {                
            IftaTriplen = IftaTripResult.load.length;
            // alert( IftaTriplen );
            $("#iftaTripTable").html('');
            if (IftaTriplen > 0) 
            {                   
                var no=1;
                for (var i = IftaTriplen-1; i >= 0; i--) 
                {  
                    // var leng=IftaTriplen[i].length;
                    // alert(leng);
                    var comId =IftaTripResult.companyID;
                    var IftaTripId =IftaTripResult.load[i]._id;  
                    var varifyCondi=IftaTripResult.load[i].isIftaVerified;
                    var truck=IftaTripResult.load[i].loaddata['loadertruck'];
                    var shipDate=IftaTripResult.load[i].receivedate;
                    var startLocation=IftaTripResult.load[i].start_location;
                    var end_location=IftaTripResult.load[i].end_location;
                    var consignee_location=IftaTripResult.load[i].consignee;
                    var empty_miles=IftaTripResult.load[i].empty_miles_value;
                    var total_miles=IftaTripResult.load[i].loaded_miles_value;
                    var shipper_location=IftaTripResult.load[i].shipper;
                    var consigLeng=IftaTripResult.load[i].consignee.length;
                    for(var j=0; j<consigLeng;j++)
                    {
                       var consigneeLocation=consignee_location[j].consignee_location;
                    }   
                    varshippingLeng=IftaTripResult.load[i].shipper.length;
                    for(var j=0; j<varshippingLeng;j++)
                    {
                       var shipperLocation=shipper_location[j].shipper_location;
                    }          
                    var deleteStatus =IftaTripResult.load[i].deleteStatus;
                    if(varifyCondi == "yes")
                    {
                            var Iftaloadtr = "<tr data-id=" + (i + 1) + ">" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td>"+IftaTripId+" </td>"+
                            "<td>"+truck+"</td>"+
                            "<td>"+startLocation+" </td>"+
                            "<td>"+shipperLocation+" </td>"+
                            "<td>"+consigneeLocation+" </td>"+
                            "<td>"+end_location+" </td>"+
                            "<td>"+shipDate+" </td>"+
                            "<td>"+empty_miles+" </td>"+
                            "<td >" + total_miles + "</td>" +
                       
                            "<td style='text-align:center'>"+
                                

                                "<a class='mt-2 button-29 fs-14 text-white edit_modal_iftaTrip'  title='Edit1' data-tripId='"+IftaTripId+"' data-compID='"+comId+"' ><i class='fe fe-edit'></i></a>&nbsp"+
                             

                            "</td></tr>";

                        $("#iftaTripTable").append(Iftaloadtr);
                        no++;
                    }
                }
            } 
            else 
            {
                    var Iftaloadtr = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#iftaTripTable").append(Iftaloadtr);
            }
            }
            else 
            {
                var Iftaloadtr = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";
                $("#iftaTripTable").append(Iftaloadtr);
            }
        }
        //============================ end list verify trip ====================
        //========================== start verify trip ===============================
        $("#NotVerifyIftaTripModalList").modal("hide");
        $(".VerifyTrip").click(function(){
            $("#NotVerifyIftaTripModalList").modal("hide");
            $('#IftaTripModalList').modal('show');
        });
        $(".notVerifyTrip").click(function(){
            $("#NotVerifyIftaTripModalList").modal("show");
            $('#IftaTripModalList').modal('hide');           
        });
        function notVerifyTrip(IftaTripResult)
        {
            if (IftaTripResult != null) 
            {                
                IftaTriplen = IftaTripResult.load.length;
                // alert( IftaTriplen );
                $("#notVerifyIftaTripTable").html('');
                if (IftaTriplen > 0) 
                {                   
                    var no=1;
                    for (var i = IftaTriplen-1; i >= 0; i--) 
                    {  
                        // var leng=IftaTriplen[i].length;
                        // alert(leng);
                        var comId =IftaTripResult.companyID;
                        var IftaTripId =IftaTripResult.load[i]._id;  
                        var varifyCondi=IftaTripResult.load[i].isIftaVerified;
                        var truck=IftaTripResult.load[i].loaddata['loadertruck'];
                        var shipDate=IftaTripResult.load[i].receivedate;
                        var startLocation=IftaTripResult.load[i].start_location;
                        var end_location=IftaTripResult.load[i].end_location;
                        var consignee_location=IftaTripResult.load[i].consignee;
                        var empty_miles=IftaTripResult.load[i].empty_miles_value;
                        var total_miles=IftaTripResult.load[i].loaded_miles_value;
                        var shipper_location=IftaTripResult.load[i].shipper;
                        var consigLeng=IftaTripResult.load[i].consignee.length;
                        for(var j=0; j<consigLeng;j++)
                        {
                           var consigneeLocation=consignee_location[j].consignee_location;
                        }   
                        varshippingLeng=IftaTripResult.load[i].shipper.length;
                        for(var j=0; j<varshippingLeng;j++)
                        {
                           var shipperLocation=shipper_location[j].shipper_location;
                        }          
                        var deleteStatus =IftaTripResult.load[i].deleteStatus;
                        if(varifyCondi == "no")
                        {
                                var Iftaloadtr = "<tr data-id=" + (i + 1) + ">" +
                                "<td data-field='no'>" + no + "</td>" +
                                "<td>"+IftaTripId+" </td>"+
                                "<td>"+truck+"</td>"+
                                "<td>"+startLocation+" </td>"+
                                "<td>"+shipperLocation+" </td>"+
                                "<td>"+consigneeLocation+" </td>"+
                                "<td>"+end_location+" </td>"+
                                "<td>"+shipDate+" </td>"+
                                "<td>"+empty_miles+" </td>"+
                                "<td >" + total_miles + "</td>" +
                           
                                "<td style='text-align:center'>"+
                                    
    
                                    "<a class='mt-2 button-29 fs-14 text-white edit_modal_iftaTrip'  title='Edit1' data-tripId='"+IftaTripId+"' data-compID='"+comId+"' ><i class='fe fe-edit'></i></a>&nbsp"+
                                 
    
                                "</td></tr>";
    
                            $("#notVerifyIftaTripTable").append(Iftaloadtr);
                            no++;
                        }
                    }
                } 
                else 
                {
                        var Iftaloadtr = "<tr data-id=" + i + ">" +
                            "<td align='center' colspan='4'>No record found.</td>" +
                            "</tr>";
            
                        $("#notVerifyIftaTripTable").append(Iftaloadtr);
                }
                }
                else 
                {
                    var Iftaloadtr = "<tr data-id=" + i + ">" +
                    "<td align='center' colspan='4'>No record found.</td>" +
                    "</tr>";
                    $("#notVerifyIftaTripTable").append(Iftaloadtr);
                }
            }
            // ====================== end not notVerifyTrip ===================================
            $('body').on('click','.edit_modal_iftaTrip',function(){
                var iftaTripId=$(this).attr("data-tripId");
                var comId=$(this).attr('data-compID');
                $.ajax({
                    type:"get",
                    data:{iftaTripId:iftaTripId,comId:comId},
                    url:base_path+"/admin/editIftaTrip",
                    success:function(response)
                    {
                        alert(response);
                    }
                })

                $("#update_iftaVerifyedTripModal").modal("show");
            });
            $(".close_iftaVerifyedTripModal").click(function(){
                $("#update_iftaVerifyedTripModal").modal("hide");
            });
            $(".update_ifta_trip").click(function(){
                alert("dfdfdfd");
            });
});




