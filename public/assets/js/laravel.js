var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

var base_path = $("#url").val();

$(document).ready(function() {
    var response = '';
    $.ajax({
        type: "GET",
        url: base_path+"/admin/user",
        async: false,
        success: function(text) {
            createRows(text);
            response = text;
        }
    });

});

function createRows(response) {
    var len = 0;
    $('#table1').empty(); 
    if (response != null) {
        len = response.length;
    }

    if (len > 0) {
        for (var i = 0; i < len; i++) {
            var id = response[i].id;
            var email = response[i].userEmail;
            var username = response[i].userName;
            var firstname = response[i].userFirstName;
            var lastname = response[i].userLastName;
            var address = response[i].userAddress;
            var location = response[i].userLocation;
            var zip = response[i].userZip;
            var telephone = response[i].userTelephone;
            var ext = response[i].userExt;
            var tollfree = response[i].TollFree;
            var fax = response[i].userFax;
            var tr_str = "<tr data-id=" + (i + 1) + ">" +
                "<td data-field='id'>" + (i + 1) + "</td>" +
                "<td data-field='email' id="+email+">" + email + "</td>" +
                "<td data-field='username'>" + username + "</td>" +
                "<td data-field='fistname'>" + firstname + "</td>" +
                "<td data-field='lastname'>" + lastname + "</td>" +
                "<td data-field='address'>" + address + "</td>" +
                "<td data-field='location'>" + location + "</td>" +
                "<td data-field='zip'>" + zip + "</td>" +
                "<td data-field='telephone'>" + telephone + "</td>" +
                "<td data-field='ext'>" + ext + "</td>" +
                "<td data-field='tollfree'>" + tollfree + "</td>" +
                "<td data-field='fax'>" + fax + "</td>" +
                "<td style='width: 100px'><a class='btn btn-primary fs-14 text-white edit-icn edit1' id='editmodel' title='Edit'><i class='fe fe-edit'></i></a><a class='delete1 mt-2 btn btn-danger fs-14 text-white delete-icn' data-id="+ email +" title='Delete'><i class='fe fe-delete'></i></a></td></tr>";
            $("#table1").append(tr_str);
        }
    } else {
        var tr_str = "<tr data-id=" + i + ">" +
            "<td align='center' colspan='14'>No record found.</td>" +
            "</tr>";

        $("#table1").append(tr_str);
    }
    modelopenfun();
}

(function() {
    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    };
})();

$('#select-all').click(function(event) {
    if (this.checked) {
        $(':checkbox').each(function() {
            this.checked = true;
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;
        });
    }
});

// if(document.getElementsByClassName('checkbox1').checked) {
//     document.getElementsByClassName("checkbox1").value = 1;
// }else{
//     document.getElementsByClassName("checkbox1").value = 0;
// }

$(document).ready(function() {
   
    $('#usersave').on('click', function() {
      var firstname = $('#inputFirstName4').val();
      var lastname = $('#inputLastName4').val();
      var username = $('#inputUsername4').val();
      var email = $('#inputEmail4').val();
      var password = $('#inputPassword4').val();
      var address = $('#inputAddress').val();
      var location = $('#inputLocation').val();
    //   var city = $('#inputCity').val();
      var zip = $('#inputZip').val();
      var companyname = $('#inputCompanyName').val();
      var office = $('#inputOffice').val();
      var telephone = $('#inputTelephone').val();
      var ext = $('#inputExt').val();
      var tollfree = $('#inputTollFree').val();
      var fax = $('#inputFax').val();
      var checkbox1 = $('#checkbox-1').is(":checked");
      var value1 = checkbox1 ? 1 : 0;
      var checkbox2 = $('#checkbox-2').is(":checked");
      var value2 = checkbox2 ? 1 : 0;
      var checkbox3 = $('#checkbox-3').is(":checked");
      var value3 = checkbox3 ? 1 : 0;
      var checkbox4 = $('#checkbox-4').is(":checked");
      var value4 = checkbox4 ? 1 : 0;
      var checkbox5 = $('#checkbox-5').is(":checked");
      var value5 = checkbox5 ? 1 : 0;
      var checkbox6 = $('#checkbox-6').is(":checked");
      var value6 = checkbox6 ? 1 : 0;
      var checkbox7 = $('#checkbox-7').is(":checked");
      var value7 = checkbox7 ? 1 : 0;
      var checkbox8 = $('#checkbox-8').is(":checked");
      var value8 = checkbox8 ? 1 : 0;
      var checkbox9 = $('#checkbox-9').is(":checked");
      var value9 = checkbox9 ? 1 : 0;
      var checkbox2_1 = $('#checkboxl2_1').is(":checked");
      var value10 = checkbox2_1 ? 1 : 0;
      var checkbox2_2 = $('#checkboxl2_2').is(":checked");
      var value11 = checkbox2_2 ? 1 : 0;
      var checkbox2_3 = $('#checkboxl2_3').is(":checked");
      var value12 = checkbox2_3 ? 1 : 0;
      var checkbox2_4 = $('#checkboxl2_4').is(":checked");
      var value13 = checkbox2_4 ? 1 : 0;
      var checkbox2_5 = $('#checkboxl2_5').is(":checked");
      var value14 = checkbox2_5 ? 1 : 0;
      var checkbox2_6 = $('#checkboxl2_6').is(":checked");
      var value15 = checkbox2_6 ? 1 : 0;
      var checkbox2_7 = $('#checkboxl2_7').is(":checked");
      var value16 = checkbox2_7 ? 1 : 0;
      var checkbox2_8 = $('#checkboxl2_8').is(":checked");
      var value17 = checkbox2_8 ? 1 : 0;
      var checkbox2_9 = $('#checkboxl2_9').is(":checked");
      var value18 = checkbox2_9 ? 1 : 0;
      var checkbox2_10 = $('#checkboxl2_10').is(":checked");
      var value19 = checkbox2_10 ? 1 : 0;
      var checkbox2_11 = $('#checkboxl2_11').is(":checked");
      var value20 = checkbox2_11 ? 1 : 0;
      var checkbox2_12 = $('#checkboxl2_12').is(":checked");
      var value21 = checkbox2_12 ? 1 : 0;
      var checkbox2_13 = $('#checkboxl2_13').is(":checked");
      var value22 = checkbox2_13 ? 1 : 0;
      var checkbox2_14 = $('#checkboxl2_14').is(":checked");
      var value23 = checkbox2_14 ? 1 : 0;
      var checkbox2_15 = $('#checkboxl2_15').is(":checked");
      var value24 = checkbox2_15 ? 1 : 0;
      var checkbox3_1 = $('#checkboxl3_1').is(":checked");
      var value25 = checkbox3_1 ? 1 : 0;
      var checkbox3_2 = $('#checkboxl3_2').is(":checked");
      var value26 = checkbox3_2 ? 1 : 0;
      var checkbox3_3 = $('#checkboxl3_3').is(":checked");
      var value27 = checkbox3_3 ? 1 : 0;
      var checkbox3_4 = $('#checkboxl3_4').is(":checked");
      var value28 = checkbox3_4 ? 1 : 0;
      var checkbox3_5 = $('#checkboxl3_5').is(":checked");
      var value29 = checkbox3_5 ? 1 : 0;
      var checkbox3_6 = $('#checkboxl3_6').is(":checked");
      var value30 = checkbox3_6 ? 1 : 0;
      var checkbox3_7 = $('#checkboxl3_7').is(":checked");
      var value31 = checkbox3_7 ? 1 : 0;
      var checkbox3_8 = $('#checkboxl3_8').is(":checked");
      var value32 = checkbox3_8 ? 1 : 0;
      var checkbox3_9 = $('#checkboxl3_9').is(":checked");
      var value33 = checkbox3_9 ? 1 : 0;
      var checkbox3_10 = $('#checkboxl3_10').is(":checked");
      var value34 = checkbox3_10 ? 1 : 0;
      var checkbox3_11 = $('#checkboxl3_11').is(":checked");
      var value35 = checkbox3_11 ? 1 : 0;
      var checkbox3_12 = $('#checkboxl3_12').is(":checked");
      var value36 = checkbox3_12 ? 1 : 0;
      var checkbox3_13 = $('#checkboxl3_13').is(":checked");
      var value37 = checkbox3_13 ? 1 : 0;
      var checkbox4_1 = $('#checkboxl4_1').is(":checked");
      var value38 = checkbox4_1 ? 1 : 0;
      var checkbox4_2 = $('#checkboxl4_2').is(":checked");
      var value39 = checkbox4_2 ? 1 : 0;
      var checkbox4_3 = $('#checkboxl4_3').is(":checked");
      var value40 = checkbox4_3 ? 1 : 0;
      var checkbox5_1 = $('#checkboxl5_1').is(":checked");
      var value41 = checkbox5_1 ? 1 : 0;
      var checkbox5_2 = $('#checkboxl5_2').is(":checked");
      var value42 = checkbox5_2 ? 1 : 0;
      var checkbox5_3 = $('#checkboxl5_3').is(":checked");
      var value43 = checkbox5_3 ? 1 : 0;
      var checkbox5_4 = $('#checkboxl5_4').is(":checked");
      var value44 = checkbox5_4 ? 1 : 0;
      var checkbox6_1 = $('#checkboxl6_1').is(":checked");
      var value45 = checkbox6_1 ? 1 : 0;
      var checkbox6_2 = $('#checkboxl6_2').is(":checked");
      var value46 = checkbox6_2 ? 1 : 0;
      var checkbox6_3 = $('#checkboxl6_3').is(":checked");
      var value47 = checkbox6_3 ? 1 : 0;
      var checkbox6_4 = $('#checkboxl6_4').is(":checked");
      var value48 = checkbox6_4 ? 1 : 0;
      var checkbox6_5 = $('#checkboxl6_5').is(":checked");
      var value49 = checkbox6_5 ? 1 : 0;
      var checkbox6_6 = $('#checkboxl6_6').is(":checked");
      var value50 = checkbox6_6 ? 1 : 0;
      var checkbox6_7 = $('#checkboxl6_7').is(":checked");
      var value51 = checkbox6_7 ? 1 : 0;
      var checkbox6_8 = $('#checkboxl6_8').is(":checked");
      var value52 = checkbox6_8 ? 1 : 0;
      var checkbox6_9 = $('#checkboxl6_9').is(":checked");
      var value53 = checkbox6_9 ? 1 : 0;
      var checkbox6_10 = $('#checkboxl6_10').is(":checked");
      var value54 = checkbox6_10 ? 1 : 0;
      var checkbox6_11 = $('#checkboxl6_11').is(":checked");
      var value55 = checkbox6_11 ? 1 : 0;
      var checkbox6_12 = $('#checkboxl6_12').is(":checked");
      var value56 = checkbox6_12 ? 1 : 0;
    //   console.log(value56);
      var tr_length = $("#userModal").find("tr").length;
      var tr_str2 = "<tr data-id=" + tr_length + ">" +
      "<td data-field='id'>" + tr_length + "</td>" +
      "<td data-field='email' id="+email+">" + email + "</td>" +
      "<td data-field='username'>" + username + "</td>" +
      "<td data-field='fistname'>" + firstname + "</td>" +
      "<td data-field='lastname'>" + lastname + "</td>" +
      "<td data-field='address'>" + address + "</td>" +
      "<td data-field='location'>" + location + "</td>" +
      "<td data-field='zip'>" + zip + "</td>" +
      "<td data-field='telephone'>" + telephone + "</td>" +
      "<td data-field='ext'>" + ext + "</td>" +
      "<td data-field='tollfree'>" + tollfree + "</td>" +
      "<td data-field='fax'>" + fax + "</td>" +
      "<td style='width: 100px'><a class='btn btn-primary fs-14 text-white edit-icn edit1' id='editmodel' title='Edit'><i class='fe fe-edit'></i></a><a class='delete1 mt-2 btn btn-danger fs-14 text-white delete-icn' data-id="+ email +" title='Delete'><i class='fe fe-delete'></i></a></td></tr>";
          $.ajax({
              url: base_path+"/admin/add-user",
              type: "POST",
              data: {
                _token: $("#csrf").val(),
                userName: username,
                userPass: password,
                userFirstName: firstname,
                userLastName: lastname,
                userEmail: email,
                userAddress: address,
                userLocation: location,
                userZip: zip,
                userTelephone: telephone,
                companyName: companyname,
                office: office,
                userExt: ext,
                TollFree: tollfree,
                userFax: fax,
                new_active_load: value1,
                profit_loss: value2,
                dispatcher: value3,
                driver: value4,
                company: value5,
                truck: value6,
                carrier: value7,
                equipment: value8,
                sales_representative: value9,
                addCompany: value10,
                office: value11,
                truckType: value12,
                trailerType: value13,
                equipmentType: value14,
                statusType: value15,
                loadType: value16,
                fuelCardType: value17,
                fixPayCategory: value18,
                currencySetting: value19,
                addNote: value20,
                paymentTerms: value21,
                dispactherIncentive: value22,
                salesIncentive: value23,
                documentType: value24,
                addCustomer: value25,
                addShipper: value26,
                addConsignee: value27,
                addDriver: value28,
                users: value29,
                addTruck: value30,
                addTrailer: value31,
                customsBroker: value32,
                factoringCompany: value33,
                addBank: value34,
                creditCard: value35,
                subCreditCard: value36,
                iftaCard: value37,
                fuelReceipt: value38,
                addToll: value39,
                verifyTrip: value40,
                accountManager: value41,
                paymentRegistration: value42,
                advancePayment: value43,
                manageReceipt: value44,
                driverReport: value45,
                bankStateReport: value46,
                creditStateReport: value47,
                fuelcardReport: value48,
                fuelReport: value49,
                tollReport: value50,
                aggingReport: value51,
                payableReport: value52,
                receivableReport: value53,
                Report1099: value54,
                emailTrack: value55,
                laneAnalysis: value56,
              },
              cache: false,
              success: function(resp){
                if(resp.success === true){
                    swal.fire("Done!", resp.message, "success");
                    $("#table1").append(tr_str2);
                    // $('#addUserModal').hide();
                    $("#addUserModal form").trigger("reset");
                    // $('#addUserModal').modal('toggle');
                    // $('#addUserModal').dialog('close');
                } else {
                    console.log(resp.errors[0].message);
                    swal.fire("Error!", resp.error, "error");
                }
              },
              error: function(data){
                $.each( data.responseJSON.errors, function( key, value ) {
                    swal.fire("Error!", value[0], "error");
                });
                },
          });
  });
});

// <!-- ------------------------------------------------------------------------- driver ------------------------------------------------------------------------- -->

$(document).ready(function() {
    var driverResponse = '';

// <!-- -------------------------------------------------------------------------Get driver ajax ------------------------------------------------------------------------- -->    
    $.ajax({
        type: "GET",
        url: base_path+"/admin/driver",
        async: false,
        success: function(text) {
            createDriverRows(text);
            driverResponse = text;
        }
    });

    function createDriverRows(driverResponse) {

        console.log(driverResponse);
        var len1 = 0;
        
        $('#driverTable').empty(); // Empty <tbody>
        if (driverResponse != null) {
            len1 = driverResponse.length;
            //len1 = sizeof($driverResponse);
        }

        if (len1 > 0) {
           var no=1;
                for (var i = 0; i < len1; i++) {  
                var len2=driverResponse[i].driver.length; 
                    if(len2 > 0){
                        for (var j = 0; j < len2; j++) {
                        // var counter = driverResponse[i].counter;
                        // var no = driverResponse[i]._id;
                        var comid =driverResponse[i].companyID;
                        var driverId=driverResponse[i].driver[j]._id;
                        var name = driverResponse[i].driver[j].driverName;
                        var email = driverResponse[i].driver[j].driverEmail;
                        var location = driverResponse[i].driver[j].driverAddress;
                        var social_security_no = driverResponse[i].driver[j].driverSocial;
                        var date_of_birth = driverResponse[i].driver[j].dateOfbirth;
                        var date_of_hire = driverResponse[i].driver[j].dateOfhire;
                        var license_no = driverResponse[i].driver[j].driverLicenseNo;
                        var lis = driverResponse[i].driver[j].driverLicenseIssue;
                        var license_exp_date = driverResponse[i].driver[j].driverLicenseExp;
                        var driver_balance = driverResponse[i].driver[j].driverBalance;
                        var delete_status = driverResponse[i].driver[j].deleteStatus;

                        if(delete_status=="NO"){
                        var tr_str1 = "<tr data-id=" + (i + 1) + ">" +
                        //  "<td id='id1'>" + id+ "&"+driverId + "</td>" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td data-field='name' >" + name + "</td>" +
                            "<td data-field='email'>" + email + "</td>" +
                            "<td data-field='location'>" + location + "</td>" +
                            "<td data-field='social_security_no'>" + social_security_no + "</td>" +
                            "<td data-field='date_of_birth'>" + date_of_birth + "</td>" +
                            "<td data-field='date_of_hire'>" + date_of_hire + "</td>" +
                            "<td data-field='license_no'>" + license_no + "</td>" +
                            "<td data-field='lis'>" + lis + "</td>" +
                            "<td data-field='license_exp_date'>" + license_exp_date + "</td>" +
                            "<td data-field='driver_balance'>" + driver_balance + "</td>" +

                            // "<td style='width: 100px'><a class='btn btn-primary fs-14 text-white edit-icn' title='Edit' id='edit'><i class='fe fe-edit' ></i></a></td></tr>"
                            "<td style='width: 100px'><i class='btn btn-primary fe fe-edit edit' data-id=" + comid+ "&"+email + "><a>edit</a></i><a class='deleteDriver mt-2 btn btn-danger fs-14 text-white delete-icn' data-id=" + comid+ "&"+email + " title='Delete'><i class='fe fe-delete'></i></a></td></tr>";

                        $("#driverTable").append(tr_str1);
                        no++;
                        }
                    } 
                }
            }
        } else {
            var tr_str1 = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#driverTable").append(tr_str1);
        }
//---------------------------------------------------
// $.each(driverResponse, function (i, drivers) {                

        //     counterLen=currProgram.counter;    
        //     console.Log(drivers);
        //     //return;                 
                    
        //     $.each(drivers.driver, function (i, driverSingal) {
        //         console.log(driverSingal);
        //         //return;
                
                        
        //                 var comid =drivers.companyID;
        //                 var driverId=driverSingal._id;
        //                 var name = driverSingal.driverName;
        //                 var email = driverSingal.driverEmail;
        //                 var location = driverSingal.driverAddress;
        //                 var social_security_no = driverSingal.driverSocial;
        //                 var date_of_birth = driverSingal.dateOfbirth;
        //                 var date_of_hire = driverSingal.dateOfhire;
        //                 var license_no = driverSingal.driverLicenseNo;
        //                 var lis = driverSingal.driverLicenseIssue;
        //                 var license_exp_date = driverSingal.driverLicenseExp;
        //                 var driver_balance = driverSingal.driverBalance;

        //                 var tr_str1 = 
        //                 //"<tr data-id=" + (i + 1) + ">" + 
        //                     "<tr data-id=" + 1 + ">" +                            
        //                     "<td data-field='no'>" + no + "</td>" +
        //                     "<td data-field='name' id='up_name'>" + name + "</td>" +
        //                     "<td data-field='email'>" + email + "</td>" +
        //                     "<td data-field='location'>" + location + "</td>" +
        //                     "<td data-field='social_security_no'>" + social_security_no + "</td>" +
        //                     "<td data-field='date_of_birth'>" + date_of_birth + "</td>" +
        //                     "<td data-field='date_of_hire'>" + date_of_hire + "</td>" +
        //                     "<td data-field='license_no'>" + license_no + "</td>" +
        //                     "<td data-field='lis'>" + lis + "</td>" +
        //                     "<td data-field='license_exp_date'>" + license_exp_date + "</td>" +
        //                     "<td data-field='driver_balance'>" + driver_balance + "</td>" +

        //                     // "<td style='width: 100px'><a class='btn btn-primary fs-14 text-white edit-icn' title='Edit' id='edit'><i class='fe fe-edit' ></i></a></td></tr>"
        //                     "<td style='width: 100px'><i class='btn btn-primary fe fe-edit edit'><a>edit</a></i><a class='deleteDriver mt-2 btn btn-danger fs-14 text-white delete-icn' data-id=" + comid+ "&"+driverId + " title='Delete'><i class='fe fe-delete'></i></a></td></tr>";
        //                     console.log(tr_str1);

        //                 $("#driverTable").append(tr_str1);
        //                 no++;
                    
        //             });

           
        // });
    }

// <!--------------------------------------------------------------------------- end of Get driver ajax ------------------------------------------------------------------------- -->    
// <!---------------------------------------------------------------------------  edit driver  ------------------------------------------------------------------------- -->
$('.edit').click(function(){
        var id = $(this).attr("data-id");
        var result = $(this).attr("data-id").split('&');
        var com_id=result[0];
        var email=result[1];
      
       // console.log(result);
        $.ajax({
            url: base_path+"/admin/editDriver",
            type: "POST",
            datatype:"JSON",
            data: {_token: $("#drivercsrf").val(),com_id: com_id,email: email},
            cache: false,
            success: function(dataResult){
                //console.log(dataResult);
                $('#up_comId').val(com_id);
                $('#emaildriver').val(email);
                $('#up_name').val(dataResult.driverName);
                $('#up_username').val(dataResult.driverUsername);
                $('#up_address').val(dataResult.driverAddress);
                $('#up_telephone').val(dataResult.driverTelephone);
                $('#up_altTelephone').val(dataResult.driverAlt);
                $('#up_email').val(dataResult.driverEmail);
                // $('#up_password').val(dataResult.driverPassword);
                $('#up_location').val(dataResult.driverLocation);
                $('#up_zip').val(dataResult.driverZip);
                $('#up_status').val(dataResult.driverStatus);
                $('#up_socialSecurityNo').val(dataResult.driverSocial);
                $('#up_dateOfBirth').val(dataResult.dateOfbirth);
                $('#up_dateOfHire').val(dataResult.dateOfHire);
                $('#up_licenseNo').val(dataResult.driverLicenseNo);
                $('#up_licenseIssueState').val(dataResult.driverLicenseIssue);
                $('#up_licenseExpDate').val(dataResult.driverLicenseExp);
                $('#up_lastMedical').val(dataResult.driverLastMedical);
                $('#up_nextMedical').val(dataResult.driverNextMedical);
                $('#up_lastDrugTest').val(dataResult.driverLastDrugTest);
                $('#up_nextDrugTest').val(dataResult.driverNextDrugTest);
                $('#up_passportExpiry').val(dataResult.passportExpiry);
                $('#up_fastCardExpiry').val(dataResult.fastCardExpiry);
                $('#up_hazmatExpiry').val(dataResult.hazmatExpiry);
                $('#up_rate').val(dataResult.rate);
                $('#up_currency').val(dataResult.currency);
               // $('#up_recurrencePlus').val(dataResult._id);
               // $('#up_recurrenceMin').val(dataResult._id);
                $('#up_terminationDate').val(dataResult.terminationDate);
                $('#up_driverBalance').val(dataResult.driverBalance);
                $('#up_internalNotes').val(dataResult.internalNotes);
               
                $('#editDriverModal').modal('show'); 
            }
        });
    });

$('.editModalCloseButton').click(function(){
    $('#editDriverModal').modal('hide');
    $('#driverModal').modal('show');  
});

$('.driverDataUpdate').click(function(){
   
    // var result = $(this).attr("data-id").split('&');
    // var com_id=result[0];
    // var email=result[1];

    var updateComId= $('#up_comId').val();
    var updateEmailDriver= $('#emaildriver').val();
    var updateDriverName= $('#up_name').val();
    var updateDriverUsername=$('#up_username').val();
    var updateDriverAddress=$('#up_address').val();
    var updateDriverTelephone=$('#up_telephone').val();
    var updateDriverAlt=$('#up_altTelephone').val();
    var updateDriverEmail=$('#up_email').val();
    var updateDriverPassword=$('#up_password').val();
    var updateDriverLocation=$('#up_location').val();
    var updateDriverZip=$('#up_zip').val();
    var updateDriverStatus=$('#up_status').val();
    var updateDriverSocial=$('#up_socialSecurityNo').val();
    var updateDateOfbirth=$('#up_dateOfBirth').val();
    var updateDateOfHire=$('#up_dateOfHire').val();
    var updateDriverLicenseNo=$('#up_licenseNo').val();
    var updateDriverLicenseIssue=$('#up_licenseIssueState').val();
    var updateDriverLicenseExp=$('#up_licenseExpDate').val();
    var updateDriverLastMedical=$('#up_lastMedical').val();
    var updateDriverNextMedical=$('#up_nextMedical').val();
    var updateDriverLastDrugTest=$('#up_lastDrugTest').val();
    var updateDriverNextDrugTest=$('#up_nextDrugTest').val();
    var updatePassportExpiry=$('#up_passportExpiry').val();
    var updateFastCardExpiry=$('#up_fastCardExpiry').val();
    var updateHazmatExpiry=$('#up_hazmatExpiry').val();
    var updateRate=$('#up_rate').val();
    var updateCurrency=$('#up_currency').val();
    // var updateRecurrencePlus=$('#up_recurrencePlus').val();
    // ver updateRecurrenceMin=$('#up_recurrenceMin').val();
    var updateTerminationDate=$('#up_terminationDate').val();
    var updateDriverBalance=$('#up_driverBalance').val();
    var updateInternalNotes=$('#up_internalNotes').val();

    $.ajax({
        url:base_path+"/admin/updateDriver" ,
        type:'post',
        data:{
            _token:$("#drivercsrf").val(),
            updateComId:updateComId,
            updateEmailDriver:updateEmailDriver,
            updateDriverName: updateDriverName,
            updateDriverUsername: updateDriverUsername,
            updateDriverAddress: updateDriverAddress,
            updateDriverTelephone: updateDriverTelephone,
            updateDriverAlt: updateDriverAlt,
            updateDriverEmail: updateDriverEmail,
            updateDriverPassword: updateDriverPassword,
            updateDriverLocation: updateDriverLocation,
            updateDriverLocation: updateDriverLocation,
            updateDriverZip: updateDriverZip,
            updateDriverStatus: updateDriverStatus,
            updateDriverSocial: updateDriverSocial,
            updateDateOfbirth: updateDateOfbirth,
            updateDateOfHire: updateDateOfHire,
            updateDriverLicenseNo: updateDriverLicenseNo,
            updateDriverLicenseIssue: updateDriverLicenseIssue,
            updateDriverLicenseExp: updateDriverLicenseExp,
            updateDriverLastMedical: updateDriverLastMedical,
            updateDriverNextMedical: updateDriverNextMedical,
            updateDriverLastDrugTest: updateDriverLastDrugTest,
            updateDriverNextDrugTest: updateDriverNextDrugTest,
            updatePassportExpiry: updatePassportExpiry,
            updateFastCardExpiry: updateFastCardExpiry,
            updateHazmatExpiry: updateHazmatExpiry,
            updateRate: updateRate,
            updateCurrency: updateCurrency,
            //updateRecurrencePlus: updateRecurrencePlus,
            //updateRecurrenceMin: updateRecurrenceMin,
            updateTerminationDate: updateTerminationDate,
            updateDriverBalance: updateDriverBalance,
            updateInternalNotes: updateInternalNotes
        } ,
        success: function(response){
            var responsenew = JSON.parse(response);
            if(responsenew.statusCode===200){
                swal.fire("Done!", responsenew.message, "success");
                $.ajax({
                    type: "GET",
                    url: base_path+"/admin/driver",
                    success: function(text) {
                        createDriverRows(text);
                        response = text;
                    }
                });
                // $("#table1").append(tr_str3);
                // $('#userEditModal').modal('toggle');			
            }
          },
          error: function(data){
            $.each( data.responseJSON.errors, function( key, value ) {
                swal.fire("Error!", value[0], "error"); 
            });
        }            
    });
}); 
// <!--------------------------------------------------------------------------- end of edit driver  --------------------------------------------------------------------------->
// <!--------------------------------------------------------------------------- delete driver ajax --------------------------------------------------------------------------->    
$(".deleteDriver").on("click", function(){
   // alert();
        var rowToDelete = $(this).closest('tr');
        var id = $(this).attr("data-id");
        var result = $(this).attr("data-id").split('&');
        var com_id=result[0];
        var email=result[1];
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
          url: base_path+"/admin/deleteDriver",
          data: {com_id: com_id,email: email},
          type: 'post',
          success: function(resp){
            if (resp.success === true) {
				swal.fire("Done!", resp.message, "success");
				rowToDelete.remove();
			} else {
				swal.fire("Error!", resp.message, "error");
			}
		},
		error: function (resp) {
			swal.fire("Error!", 'Something went wrong.', "error");
		}
        });
    } else {
        e.dismiss;
    }

}, function (dismiss) {
    return false;
})
    });

    // $(".deleteDriver").on("click", function(){
	// 	var rowToDelete = $(this).closest('tr');
	// 	var email = $(this).attr("data-id");
	// 	swal.fire({
    //         title: "Delete?",
    //         text: "Please ensure and then confirm!",
    //         type: "warning",
    //         showCancelButton: !0,
    //         confirmButtonText: "Yes, delete it!",
    //         cancelButtonText: "No, cancel!",
    //         reverseButtons: !0
    //     }).then(function (e) {

    //     if (e.value === true) {
	// 	$.ajax({ 
	// 		type: 'POST',
	// 	  url: base_path+"/admin/deleteDriver",
	// 	  data: {com_id: 4,driverEmail: email},
	// 	  success: function (resp) {
	// 		if (resp.success === true) {
	// 			swal.fire("Done!", resp.message, "success");
	// 			rowToDelete.remove();
	// 		} else {
	// 			swal.fire("Error!", resp.message, "error");
	// 		}
	// 	},
	// 	error: function (resp) {
	// 		swal.fire("Error!", 'Something went wrong.', "error");
	// 	}
	// 	});
	// 	} else {
	// 		e.dismiss;
	// 	}

	// }, function (dismiss) {
	// 	return false;
	// })
	// });
// <!-- -------------------------------------------------------------------------end of delete driver ajax ------------------------------------------------------------------------- -->    
// <!-- ------------------------------------------------------------------------- add driver  ------------------------------------------------------------------------- -->

// <!-- -------------------------------------------------------------------------end of Get driver ajax ------------------------------------------------------------------------- -->    
// <!-- -------------------------------------------------------------------------delete driver ajax ------------------------------------------------------------------------- -->    
// $(".delete").on("click", function(){
//         var email = $(this).attr("data-id");
//         // console.log(email);
//         $.ajax({ 
//           url: base_path+"/admin/delete-user",
//           data: {userEmail: email},
//           type: 'post',
//           success: function(result){
//             console.log('success');
//             // $('#userModal').hide().show();
//             location.reload();
//           }
//         });
//     });
// <!-- -------------------------------------------------------------------------end of delete driver ajax ------------------------------------------------------------------------- -->    

// <!-- ------------------------------------------------------------------------- add driver  ------------------------------------------------------------------------- -->

      $('.driverDataSubmit').click(function(){            
            var companyID = 4;
            var name = $('#name').val();
            var username = $('#username').val();
            var address = $('#address').val();
            var telephone = $('#telephone').val();
            var altTelephone = $('#altTelephone').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var location = $('#location').val();
            var zip = $('#zip').val();
            var status = $('#status').val();
            var socialSecurityNo = $('#socialSecurityNo').val();
            var dateOfBirth = $('#dateOfBirth').val();
            var dateOfHire = $('#dateOfHire').val();
            var licenseNo = $('#licenseNo').val();
            var licenseIssueState = $('#licenseIssueState').val();
            var licenseExpDate = $('#licenseExpDate').val();
            var lastMedical = $('#lastMedical').val();
            var nextMedical = $('#nextMedical').val();
            var lastDrugTest = $('#lastDrugTest').val();
            var nextDrugTest = $('#nextDrugTest').val();
            var passportExpiry = $('#passportExpiry').val();
            var fastCardExpiry = $('#fastCardExpiry').val();
            var hazmatExpiry = $('#hazmatExpiry').val();
            var rate = $('#rate').val();
            var currency = $('#currency').val();
            var recurrencePlus = $('#recurrencePlus').val();
            var recurrenceMin = $('#recurrenceMin').val();
            var terminationDate = $('#terminationDate').val();
            var driverBalance = $('#driverBalance').val();
            var internalNotes = $('#internalNotes').val();   
            var tr_length1 = $("#driverModal").find("tr").length;
            console.log(tr_length1);
            var tr_str4 = "<tr data-id=" + tr_length1 + ">" +
                        //  "<td id='id1'>" + id+ "&"+driverId + "</td>" +
                            "<td data-field='tr_length1'>" + tr_length1 + "</td>" +
                            "<td data-field='name' >" + name + "</td>" +
                            "<td data-field='email'>" + email + "</td>" +
                            "<td data-field='location'>" + location + "</td>" +
                            "<td data-field='social_security_no'>" + socialSecurityNo + "</td>" +
                            "<td data-field='date_of_birth'>" + dateOfBirth + "</td>" +
                            "<td data-field='date_of_hire'>" + dateOfHire + "</td>" +
                            "<td data-field='license_no'>" + licenseNo + "</td>" +
                            "<td data-field='lis'>" + licenseIssueState + "</td>" +
                            "<td data-field='license_exp_date'>" + licenseExpDate + "</td>" +
                            "<td data-field='driver_balance'>" + driverBalance + "</td>" +

                            // "<td style='width: 100px'><a class='btn btn-primary fs-14 text-white edit-icn' title='Edit' id='edit'><i class='fe fe-edit' ></i></a></td></tr>"
                            "<td style='width: 100px'><i class='btn btn-primary fe fe-edit edit' data-id=" + companyID + "&"+ email + "><a>edit</a></i><a class='deleteDriver mt-2 btn btn-danger fs-14 text-white delete-icn' data-id=" + companyID + "&" + email + " title='Delete'><i class='fe fe-delete'></i></a></td></tr>";    
        $.ajax({
            url: base_path+"/admin/addDriver",
            type: "POST",
            datatype:"JSON",
            data: {
                _token: $("#csrf").val(),
              //   type: 1,
              companyID: companyID,
              name: name,
              username: username,
              address: address,
              telephone: telephone,
              altTelephone: altTelephone,
              email: email,
              password: password,
              location: location,
              zip: zip,
              status: status,
              socialSecurityNo: socialSecurityNo,
              dateOfBirth: dateOfBirth,
              dateOfHire: dateOfHire,
              licenseNo: licenseNo,
              licenseIssueState: licenseIssueState,
              licenseExpDate: licenseExpDate,
              lastMedical: lastMedical,
              nextMedical: nextMedical,
              lastDrugTest: lastDrugTest,
              nextDrugTest: nextDrugTest,
              passportExpiry: passportExpiry,
              fastCardExpiry: fastCardExpiry,
              hazmatExpiry: hazmatExpiry,
              rate: rate,
              currency: currency,
              recurrencePlus: recurrencePlus,
              recurrenceMin: recurrenceMin,
              terminationDate: terminationDate,
              driverBalance: driverBalance,
              internalNotes: internalNotes,
            },
            cache: false,
            success: function(resp){
                if(resp.success == true){
                    swal.fire("Done!", resp.message, "success");
                    $("#driverTable").append(tr_str4);
                    $("#addDriverModal form").trigger("reset");
                } 
              },
              error: function(data){
                $.each( data.responseJSON.errors, function( key, value ) {
                    swal.fire("Error!", value[0], "error");
                });
                },
        });
        
    });
// <!-- ------------------------------------------------------------------------- end of add driver  ------------------------------------------------------------------------- -->





});



// <!-- ------------------------------------------------------------------------- end of driver ------------------------------------------------------------------------- -->