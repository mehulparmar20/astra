var base_path = $("#url").val();
$(document).ready(function() {
    // <!-- -----------------------start ---------------------------------- -->  
    $('.iftaTollClose').click(function(){
        $('#iftaTollModal').modal('hide');
    });


    // <!-- -------------------------------------Get fuelReceipt  ------------------------- -->  
   
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
                        // var comId=1;
                        var comId =IftaTollResult.companyID;
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
                            var IftaTollStr = "<tr data-id=" + (i + 1) + ">" +
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
                                

                                "<a class='mt-2 button-29 fs-14 text-white edit_modal_iftaToll'  title='Edit1' data-tollId='"+IftaTollId+"' data-compID='"+comId+"' ><i class='fe fe-edit'></i></a>&nbsp"+
                                "<a class='mt-2 button-29 fs-14 text-white delete_modal_iftaToll'  title='delete' data-tollId='"+IftaTollId+"' data-compID='"+comId+"' ><i class='fe fe-trash'></i></a>&nbsp"+

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

    //================================= start ifta toll create =============================
    $(".createIftaTollModalBtn").click(function(){
        $("#createIftaTollFormModal").modal("show");
    });
    $(".closeIftaToll").click(function(){
        $("#createIftaTollFormModal").modal("hide");
    });
    $(".saveIftaToll").click(function(){
        var invoiceNo =$('.createIftaTollNo').val();
        var tollDate =$('.createIftaTollDate').val();
        var transactionTime =$('.createIftaTollTime').val();
        var transType=$(".createIftaTollTransactionType").val();
        var location=$(".createIftaTollLocationName").val();
        var truckno=$(".createIftaTollTruckNumber").val();
        var transponder=$(".createIftaTollTransponder").val();
        var licensePlate=$(".createIftaTollLicensePlate").val();
        var amount=$(".createIftaTollAmount").val();
        if(tollDate=='')
        {
            swal.fire( "'Enter Toll Date");
            $('.createIftaTollDate').focus();
            return false;
            
        } 
        if(transType=='')
        {
            swal.fire( "'Enter Transaction Type");
            $('.createIftaTollTransactionType').focus();
            return false;
        }
        if(location=='')
        {
            swal.fire( "'EnterLocation");
            $('.createIftaTollLocationName').focus();
            return false;
        }
        if(licensePlate=="")
        {
            swal.fire(" Enter license Plate");
            $(".createIftaTollLicensePlate").focus();
            return false;
        }
        if(amount=="")
        {
            swal.fire(" Enter Amount");
            $(".createIftaTollAmount").focus();
            return false;
        }
      
        var formData = new FormData();
        formData.append('_token',$("#_token_createIftaToll").val());
        formData.append('invoiceNo',invoiceNo);
        formData.append('tollDate',tollDate);
        formData.append('transactionTime',transactionTime);
        formData.append('transType',transType); 
        formData.append('location',location); 
        formData.append('truckno',truckno); 
        formData.append('transponder',transponder); 
        formData.append('licensePlate',licensePlate); 
        formData.append('amount',amount);  
        $.ajax({
            type: "POST",
            url: base_path+"/admin/createIftaToll",
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            data:formData,
            success: function(data) {
                console.log(data)                    
                swal.fire("Done!", "Ifta Toll added successfully", "success");
                $('#createIftaTollFormModal').modal('hide');
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
            }
        });
    });
    //========================================= end ifta toll create ====================


    //========================= start ifta toll edit & update =======================
    $('body').on('click',".edit_modal_iftaToll",function(){
        var id = $(this).attr("data-tollId");
        var comId = $(this).attr("data-compID");
        $.ajax({
            type: "GET",
            url: base_path + "/admin/editIftaToll",
            data: { id: id, comId: comId },
            async: false,
            success: function (res) {
                $(".updateIftaComId").val(res.companyID);
                $(".updateiftaTollId").val(res.tolls._id);
                $('.updateIftaTollNo').val(res.tolls.invoiceNumber);
                $('.updateIftaTollDate').val(res.tolls.tollDate);
                // if(isSet(res.tolls.transactionTime))
                // {
                //     $('.updateIftaTollTime').val(res.tolls.transactionTime);
                // }                
                $(".updateIftaTollTransactionType").val(res.tolls.transType);
                $(".updateIftaTollLocationName").val(res.tolls.location);
                $(".updateIftaTollTruckNumber").val(res.tolls.truckNo);
                $(".updateIftaTollTransponder").val(res.tolls.transponder);
                $(".updateIftaTollLicensePlate").val(res.tolls.licensePlate);
                $(".updateIftaTollAmount").val(res.tolls.amount);
            }
        });
        $("#updateIftaTollFormModal").modal("show");
    });
    $(".closeUpdateIftaToll").click(function(){
        $("#updateIftaTollFormModal").modal("hide");
    });
    $(".updateIftaToll").click(function(){
        var id =$('.updateiftaTollId').val();
        var comId =$('.updateIftaComId').val();
        var invoiceNo =$('.updateIftaTollNo').val();
        var tollDate =$('.updateIftaTollDate').val();
        var transactionTime =$('.updateIftaTollTime').val();
        var transType=$(".updateIftaTollTransactionType").val();
        var location=$(".updateIftaTollLocationName").val();
        var truckno=$(".updateIftaTollTruckNumber").val();
        var transponder=$(".updateIftaTollTransponder").val();
        var licensePlate=$(".updateIftaTollLicensePlate").val();
        var amount=$(".updateIftaTollAmount").val();
        if(tollDate=='')
        {
            swal.fire( "'Enter Toll Date");
            $('.updateIftaTollDate').focus();
            return false;
            
        } 
        if(transType=='')
        {
            swal.fire( "'Enter Transaction Type");
            $('.updateIftaTollTransactionType').focus();
            return false;
        }
        if(location=='')
        {
            swal.fire( "'EnterLocation");
            $('.updateIftaTollLocationName').focus();
            return false;
        }
        if(licensePlate=="")
        {
            swal.fire(" Enter license Plate");
            $(".updateIftaTollLicensePlate").focus();
            return false;
        }
        if(amount=="")
        {
            swal.fire(" Enter Amount");
            $(".updateIftaTollAmount").focus();
            return false;
        }
      
        var formData = new FormData();
        formData.append('_token',$("#_token_updateIftaToll").val());
        formData.append('id',id);
        formData.append('comId',comId);
        formData.append('invoiceNo',invoiceNo);
        formData.append('tollDate',tollDate);
        formData.append('transactionTime',transactionTime);
        formData.append('transType',transType); 
        formData.append('location',location); 
        formData.append('truckno',truckno); 
        formData.append('transponder',transponder); 
        formData.append('licensePlate',licensePlate); 
        formData.append('amount',amount);  
        $.ajax({
            type: "POST",
            url: base_path+"/admin/updateIftaToll",
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            data:formData,
            success: function(data) {
                console.log(data)                    
                swal.fire("Done!", "Ifta Toll Updated successfully", "success");
                $('#updateIftaTollFormModal').modal('hide');
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
            }
        });
    });
    //========================== end ifta toll edit & update ========================

    //================================ start ifta toll delete =======================
    $('body').on('click',".delete_modal_iftaToll",function(){
        var id = $(this).attr("data-tollId");
        var comId = $(this).attr("data-compID");
        swal.fire({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                $.ajax({
                    type: 'post',
                    url: base_path + "/admin/deleteIftaToll",
                    data: { _token: $("#_token_updateIftaToll").val(), id: id, comId: comId },
                    success: function (resp) {
                        swal.fire("Done!", " Ifta Tolls deleted successfully", "success");
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

                    },
                    error: function (resp) {
                        swal.fire("Error!", 'Something went wrong.', "error");
                    }
                });
            }
        });
    });
    //=============================== end ifta toll delete ==============================

    //============================ start ifta toll restore ============================
    $(".restoreIftaTollData").click(function(){
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getIftaToll",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                console.log(text);
               restoreIftaTollRows(text);
                restoreIftaTollResult = text;
             }
        });
        $("#restoreiftaTollModal").modal("show");
    });
    $(".closeIftaTollRestore").click(function(){
        $("#restoreiftaTollModal").modal("hide");
    });
    function restoreIftaTollRows(restoreIftaTollResult)
    {
        var fuelReceiptlen = 0;
            if (restoreIftaTollResult != null) {                
                IftaTolllen = restoreIftaTollResult.tolls.length;
                $("#restoreIftaTollTable").html('');
                if (IftaTolllen > 0) {                   
                    var no=1;
                    for (var i = IftaTolllen-1; i >= 0; i--) {  
                        var comId =restoreIftaTollResult.companyID;
                        var IftaTollId =restoreIftaTollResult.tolls[i]._id;
                        var transectionDate =restoreIftaTollResult.tolls[i].tollDate;
                        var transType =restoreIftaTollResult.tolls[i].transType;
                        var location =restoreIftaTollResult.tolls[i].location;
                        var transponder =restoreIftaTollResult.tolls[i].transponder;
                        var licensePlate =restoreIftaTollResult.tolls[i].licensePlate;
                        var amount =restoreIftaTollResult.tolls[i].amount;
                        var truckNo =restoreIftaTollResult.tolls[i].truckNo;
                        var invoiceNo =restoreIftaTollResult.tolls[i].invoiceNumber;
                        var deleteStatus =restoreIftaTollResult.tolls[i].deleteStatus;
                        if(deleteStatus == "YES"){
                            var IftaTollStr = "<tr data-id=" + (i + 1) + ">" +
                           
                            "<td data-field='no'><input type='checkbox' class='check_iftaToll_one' name='checkediftaToll_ids[]' data-id=" + IftaTollId + " date-cusId=" + comId + "  value=" + IftaTollId + "></td>" +
                            "<td data-field='transectionDate' >" + transectionDate + "</td>" +
                            "<td data-field='transType' >" + transType + "</td>" +
                            "<td data-field='location' >" + location + "</td>" +
                            "<td data-field='transponder' >" + transponder + "</td>" +
                            "<td data-field='licensePlate' >" + licensePlate + "</td>" +
                            "<td data-field='amount' ><i class='fa fa-usd'> " + amount + "</i></td>" +
                            "<td data-field='truckNo' >" + truckNo + "</td>" +
                            "<td data-field='invoiceNo' >" + invoiceNo + "</td></tr>";

                        $("#restoreIftaTollTable").append(IftaTollStr);
                        }
                    }
                } else {
                    var IftaTollStr = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#restoreIftaTollTable").append(IftaTollStr);
                }
            }else {
            var IftaTollStr = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#restoreIftaTollTable").append(IftaTollStr);
        }
    }

    $(document).on("change", ".all_checked_ids", function () {
        if (this.checked) {
            $('.check_iftaToll_one:checkbox').each(function () {
                this.checked = true;
                IftaTollCheckboxRestore();
            });
        }
        else {
            $('.check_iftaToll_one:checkbox').each(function () {
                this.checked = false;
            });
        }
    });
    $('body').on('click', '.check_iftaToll_one', function () {
        IftaTollCheckboxRestore();
    });
    function IftaTollCheckboxRestore() {
        var IftaTollsdIds = [];
        var companyIds = []
        $.each($("input[name='checkediftaToll_ids[]']:checked"), function () {
            IftaTollsdIds.push($(this).val());
            companyIds.push($(this).attr("date-cusId"));
        });
        console.log(IftaTollsdIds);
        var IftaTollsCheckedIds = JSON.stringify(IftaTollsdIds);
        $('#checked_ifta_toll_ids').val(IftaTollsCheckedIds);

        var companyCheckedIds = JSON.stringify(companyIds);
        $('#checked_iftaToll_company_ids').val(companyCheckedIds);


        if (IftaTollsdIds.length > 0) {
            $('#restoreIftaTollData_btn').removeAttr('disabled');
        }
        else {
            $('#restoreIftaTollData_btn').attr('disabled', true);
        }
    }
    $('body').on('click', '.restoreIftaTollData_btn', function () {
        var all_ids = $('#checked_ifta_toll_ids').val();
        var custID = $("#checked_iftaToll_company_ids").val();
        $.ajax({
            type: "post",
            data: { _token: $("#_token_updateIftaToll").val(), all_ids: all_ids, custID: custID },
            url: base_path + "/admin/restoreIftaToll",
            success: function (response) {
                swal.fire("Done!", "Ifta Tolls Restored successfully", "success");
                $("#restoreiftaTollModal").modal("hide");
                $.ajax({
                    type: "GET",
                    url: base_path+"/admin/getIftaToll",
                    async: false,
                    success: function(text) {
                        console.log(text);
                        createIftaTollRows(text);
                        IftaTollResult = text;
                     }
                });
            }
        });
    });
    //============================ end ifta toll restore ============================
});