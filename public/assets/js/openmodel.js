$(document).ready(function(){
   
    $('#useredit').on('click', function() {
              var id = $('#id').val();
              var firstname = $('#editFirstName4').val();
              var lastname = $('#editLastName4').val();
              var username = $('#editUsername4').val();
              var email = $('#editEmail4').val();
              var password = $('#editPassword4').val();
              var userEmail = $('#email4').val();
              var address = $('#editAddress').val();
              var location = $('#editLocation').val();
              var zip = $('#editZip').val();
              var companyname = 1;
              var office = 1;
              var telephone = $('#editTelephone').val();
              var ext = $('#editExt').val();
              var tollfree = $('#editTollFree').val();
              var fax = $('#editFax').val();
              var tr_str3 = "<tr data-id=" + id + ">" +
                            "<td data-field='id'>" + id + "</td>" +
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
                            "<td style='width: 100px'><a class='btn btn-primary fs-14 text-white edit-icn edit1' title='Edit'><i class='fe fe-edit'></i></a><a class='delete1 mt-2 btn btn-danger fs-14 text-white delete-icn' data-id="+ email +" title='Delete'><i class='fe fe-delete'></i></a></td></tr>";
                  $.ajax({
                      url: base_path+"/admin/edit-user",
                      type: "POST",
                      data: {
                          _token: $("#newcsrf").val(),
                        email: userEmail,
                        userName: username,
                        userFirstName: firstname,
                        userLastName: lastname,
                        userEmail: email,
                        userPassword: password,
                        userAddress: address,
                        userLocation: location,
                        userZip: zip,
                        userTelephone: telephone,
                        companyName: companyname,
                        office: office,
                        userExt: ext,
                        TollFree: tollfree,
                        userFax: fax,
                      },
                      cache: false,
                      success: function(response){
                          var responsenew = JSON.parse(response);
                        if(responsenew.statusCode===200){
                            swal.fire("Done!", responsenew.message, "success");
                            $.ajax({
                                type: "GET",
                                url: base_path+"/admin/user",
                                success: function(text) {
                                    createRows(text);
                                    response = text;
                                }
                            });		
                        }
                      },
                      error: function(data){
                        $.each( data.responseJSON.errors, function( key, value ) {
                            swal.fire("Error!", value[0], "error"); 
                        });
                        },
                  });
          });

          $('.driverDataUpdate').click(function(){        
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
            var updateTerminationDate=$('#up_terminationDate').val();
            var updateDriverBalance=$('#up_driverBalance').val();
            var updateInternalNotes=$('#up_internalNotes').val();
            var updateloadedMiles = $('#loadedmilesedit').val();   
            var updateemptyMiles = $('#emptymilesedit').val();   
            var updatepickRate = $('#pickrateedit').val();   
            var updatepickStart = $('#pickstartedit').val();   
            var updatedropRate = $('#droprateedit').val();   
            var updatedropStart = $('#dropstartedit').val();   
            var updatedriverTarp = $('#driverTarpedit').val();   
            var updatepercentage = $('#dPercentageEdit').val();
        
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
                    updateTerminationDate: updateTerminationDate,
                    updateDriverBalance: updateDriverBalance,
                    updateInternalNotes: updateInternalNotes,
                    driverLoadedMile: updateloadedMiles,
                    driverEmptyMile: updateemptyMiles,
                    pickupRate: updatepickRate,
                    pickupAfter: updatepickStart,
                    dropRate: updatedropRate,
                    dropAfter: updatedropStart,
                    tarp: updatedriverTarp,
                    percentage: updatepercentage,
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
                    }
                  },
                  error: function(data){
                    $.each( data.responseJSON.errors, function( key, value ) {
                        swal.fire("Error!", value[0], "error"); 
                    });
                }            
            });
        }); 

});

$(document).ready(function(){
    $("#closemodel").on("click",function(){
        $('#userEditModal').modal("hide");
        console.log("close trigger");
    });
});
$(document).ready(function(){
    $("#closemodelfooter").on("click",function(){
        $('#userEditModal').modal("hide");
        console.log("close trigger");
    });
});

function usermodal()
{
    $(document).ready(function(){
        $('.edit1').click(function(){
            console.log('Hello2');
            $('#userEditModal').modal('show'); 
            var tr = (this).closest('tr');
            $('#id').val(tr.cells[0].innerText);
            $('#editFirstName4').val(tr.cells[3].innerText);
            $('#editLastName4').val(tr.cells[4].innerText);
            $('#editUsername4').val(tr.cells[2].innerText);
            $('#editEmail4').val(tr.cells[1].innerText);
            $('#email4').val(tr.cells[1].innerText);
            $('#editAddress').val(tr.cells[5].innerText);
            $('#editLocation').val(tr.cells[6].innerText);
            $('#editZip').val(tr.cells[7].innerText);
            $('#editTelephone').val(tr.cells[8].innerText);
            $('#editExt').val(tr.cells[9].innerText);
            $('#editTollFree').val(tr.cells[10].innerText);
            $('#editFax').val(tr.cells[11].innerText);
        });
    });
    $(".delete1").on("click", function(){
		var rowToDelete = $(this).closest('tr');
		var email = $(this).attr("data-id");
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
			type: 'POST',
		  url: base_path+"/admin/delete-user",
		  data: {userEmail: email},
		  success: function (resp) {
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
}

function drivermodal()
{
    $(document).ready(function(){
        $('.edit').click(function(){
            var id = $(this).attr("data-id");
            var result = $(this).attr("data-id").split('&');
            var com_id=result[0];
            var email=result[1];
            $.ajax({
                url: base_path+"/admin/editDriver",
                type: "POST",
                datatype:"JSON",
                data: {_token: $("#drivercsrf").val(),com_id: com_id,email: email},
                cache: false,
                success: function(dataResult){
                    $('#up_comId').val(com_id);
                    $('#emaildriver').val(email);
                    $('#up_name').val(dataResult.driverName);
                    $('#up_username').val(dataResult.driverUsername);
                    $('#up_address').val(dataResult.driverAddress);
                    $('#up_telephone').val(dataResult.driverTelephone);
                    $('#up_altTelephone').val(dataResult.driverAlt);
                    $('#up_email').val(dataResult.driverEmail);
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
                    $('#up_terminationDate').val(dataResult.terminationDate);
                    $('#up_driverBalance').val(dataResult.driverBalance);
                    $('#up_internalNotes').val(dataResult.internalNotes);
                    $('#dPercentageEdit').val(dataResult.percentage);
                    $('#loadedmilesedit').val(dataResult.driverLoadedMile);
                    $('#emptymilesedit').val(dataResult.driverEmptyMile);
                    $('#pickrateedit').val(dataResult.pickupRate);
                    $('#pickstartedit').val(dataResult.pickupAfter);
                    $('#droprateedit').val(dataResult.dropRate);
                    $('#dropstartedit').val(dataResult.dropAfter);
                    $('#driverTarpedit').val(dataResult.tarp);
                   
                    $('#editDriverModal').modal('show'); 
                }
            });
        });
    });
    $(".delete1").on("click", function(){
		var rowToDelete = $(this).closest('tr');
		var email = $(this).attr("data-id");
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
			type: 'POST',
		  url: base_path+"/admin/delete-user",
		  data: {userEmail: email},
		  success: function (resp) {
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
}
