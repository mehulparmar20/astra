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
    $('#table1').empty(); // Empty <tbody>
    if (response != null) {
        // console.log(response.length);
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
                "<td style='width: 100px'><a class='btn btn-primary fs-14 text-white edit-icn edit1' title='Edit'><i class='fe fe-edit'></i></a><a class='delete mt-2 btn btn-danger fs-14 text-white delete-icn' data-id="+ email +" title='Delete'><i class='fe fe-delete'></i></a></td></tr>";
            $("#table1").append(tr_str);
        }
    } else {
        var tr_str = "<tr data-id=" + i + ">" +
            "<td align='center' colspan='14'>No record found.</td>" +
            "</tr>";

        $("#table1").append(tr_str);
    }
}



// function editUser(){
//     console.log('Hello')
// $(document).ready(function(){
//     $('.editbtn').on('click',function(){
//         $('#userEditModal').modal('show');
//         $tr = ($this).closest('tr');
//         var data = $tr.children('td').map(function(){
//             return $this.text();
//         }).get();

//         console.log(data);
//     })
// })
// }

(function() {
    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    };
})();

$('#select-all').click(function(event) {
    if (this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;
        });
    }
});

$(document).ready(function() {
   
    $('#usersave').on('click', function() {
      var firstname = $('#inputFirstName4').val();
      var lastname = $('#inputLastName4').val();
      var username = $('#inputUsername4').val();
      var email = $('#inputEmail4').val();
      var password = $('#inputPassword4').val();
      var address = $('#inputAddress').val();
      var location = $('#inputLocation').val();
      var city = $('#inputCity').val();
      var zip = $('#inputZip').val();
      var companyname = $('#inputCompanyName').val();
      var office = $('#inputOffice').val();
      var telephone = $('#inputTelephone').val();
      var ext = $('#inputExt').val();
      var tollfree = $('#inputTollFree').val();
      var fax = $('#inputFax').val();
    //   console.log(fax);
    //   if(name!="" && email!="" && phone!="" && city!=""){
    //   $("#butsave").attr("disabled", "disabled"); 
          $.ajax({
              url: base_path+"/admin/add-user",
              type: "POST",
              data: {
                  _token: $("#csrf").val(),
                //   type: 1,
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
              },
              cache: false,
              success: function(resp){
                  console.log(resp.statusCode);
                //   var responsenew = JSON.parse(response);
                  if (resp.success === true) {
                    swal.fire("Done!", resp.message, "success");
                    // rowToDelete.remove();
                    $('#editable-file-datatable1').DataTable().ajax.reload();
                } else {
                    console.log(resp.errors[0].message);
                    swal.fire("Error!", resp.error, "error");
                }
                //   if(responsenew.statusCode==200){
                //     $("#addUserModal").hide();				
                //   }
                //   else if(responsenew.statusCode==201){
                //     alert("Error occured !");
                //   } 
              },
              error: function(data){
                // var err = JSON.parse(data.responseJSON);
                // var responsenew = JSON.parse(data);
                $.each( data.responseJSON.errors, function( key, value ) {
                    swal.fire("Error!", value[0], "error"); //showing only the first error.
                });
                // swal.fire("Error!", "All fields are required. The email ", "error");
                },
          });
    //   }
    //   else{
    //       alert("All fields are required");
    //   }
  });
});

// $(document).ready(function() {
   
//     $('#useredit').on('click', function() {
//       var firstname = $('#inputFirstName4').val();
//       var lastname = $('#inputLastName4').val();
//       var username = $('#inputUsername4').val();
//       var email = $('#inputEmail4').val();
//       var password = $('#inputPassword4').val();
//       var address = $('#inputAddress').val();
//       var location = $('#inputLocation').val();
//       var city = $('#inputCity').val();
//       var zip = $('#inputZip').val();
//       var companyname = $('#inputCompanyName').val();
//       var office = $('#inputOffice').val();
//       var telephone = $('#inputTelephone').val();
//       var ext = $('#inputExt').val();
//       var tollfree = $('#inputTollFree').val();
//       var fax = $('#inputFax').val();
//     //   console.log(fax);
//     //   if(name!="" && email!="" && phone!="" && city!=""){
//     //   $("#butsave").attr("disabled", "disabled"); 
//           $.ajax({
//               url: base_path+"/admin/add-user",
//               type: "POST",
//               data: {
//                   _token: $("#csrf").val(),
//                 //   type: 1,
//                   userName: username,
//                   userPass: password,
//                   userFirstName: firstname,
//                   userLastName: lastname,
//                   userEmail: email,
//                   userAddress: address,
//                   userLocation: location,
//                   userZip: zip,
//                   userTelephone: telephone,
//                   companyName: companyname,
//                   office: office,
//                 userExt: ext,
//                 TollFree: tollfree,
//                 userFax: fax,
//               },
//               cache: false,
//               success: function(dataResult){
//                   console.log(dataResult.statusCode);
//                   var dataResult = JSON.parse(dataResult);
//                   if(dataResult.statusCode==200){
//                     window.location = base_path+"/admin/user";				
//                   }
//                   else if(dataResult.statusCode==201){
//                     alert("Error occured !");
//                   } 
//               }
//           });
//     //   }
//     //   else{
//     //       alert("All fields are required");
//     //   }
//   });
// });

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
                
            }
    
            if (len1 > 0) {
               var no=1;
            
                // for (var i = 0; i < len1; i++) { 
                    for (var i = 0; i < 2; i++) {                                  
                    if(driverResponse[i].counter > 0){
                        counterLen=driverResponse[i].counter;
                        // alert(counterLen);  
                         
                        // for (var j = 0; j < counterLen; j++) {
                            for (var j = 0; j < 5; j++) {
                            // var counter = driverResponse[i].counter;
                            // var no = driverResponse[i]._id;
                            var id =driverResponse[i]._id;
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
    
                            var tr_str1 = "<tr data-id=" + (i + 1) + ">" +
                            //  "<td id='id1'>" + id+ "&"+driverId + "</td>" +
                                "<td data-field='no'>" + no + "</td>" +
                                "<td data-field='name' id='up_name'>" + name + "</td>" +
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
                                "<td style='width: 100px'><i class='btn btn-primary fe fe-edit edit'><a>edit</a></i><a class='delete mt-2 btn btn-danger fs-14 text-white delete-icn' data-id="+ email +" title='Delete'><i class='fe fe-delete'></i></a></td></tr>";
    
                            $("#driverTable").append(tr_str1);
                            no++;
                        } 
                    }
                   
                    
                }
            } else {
                var tr_str1 = "<tr data-id=" + i + ">" +
                    "<td align='center' colspan='4'>No record found.</td>" +
                    "</tr>";
    
                $("#driverTable").append(tr_str1);
            }
        }
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
                var companyID = 25;
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
            
            if(name == ''){
                alert("Please Enter Name");
                $('#name').focus();
                return false;
            }
            if(address == ''){
                alert("Please Enter Address");
                $('#address').focus();
                return false;
            }
            if(telephone == ''){
                alert("Please Enter Telephone No");
                $('#telephone').focus();
                return false;
            }
           
            if(location == ''){
                alert("Please Enter Location");
                $('#location').focus();
                return false;
            }
            if(zip == ''){
                alert("Please Enter zip");
                $('#zip').focus();
                return false;
            }
            if(licenseNo == ''){
                alert("Please Enter License No");
                $('#licenseNo').focus();
                return false;
            }
            if(licenseIssueState == ''){
                alert("Please Enter License Issue State");
                $('#licenseIssueState').focus();
                return false;
            }
            if(licenseExpDate == ''){
                alert("Please Enter License Exp Date");
                $('#licenseExpDate').focus();
                return false;
            }
            if(rate == ''){
                alert("Please Enter Rate");
                $('#rate').focus();
                return false;
            }
            if(currency  == ''){
                alert("Please Enter Currency");
                $('#currency').focus();
                return false;
            }
           
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
                success: function(dataResult){
                    console.log(dataResult);
                    if(dataResult){
                        alert("Driver added successfully.");
                        // $('#driverModal').modal('show');
                    }else{
                        alert("Driver not added successfully.");
                    }
                    // var dataResult = JSON.parse(dataResult);
                    // if(dataResult.statusCode==200){
                    //     alert("done");
                    //   window.location = "/admin/driver";				
                    // }
                    // else if(dataResult.statusCode==201){
                    //    alert("Error occured !");
                    // }
                    
                }
            });
            
        });
    // <!-- ------------------------------------------------------------------------- end of add driver  ------------------------------------------------------------------------- -->
    
    // <!-- -------------------------------------------------------------------------  edit driver  ------------------------------------------------------------------------- -->
    $('.edit').click(function(){
        //     // var id1 = $('#id1').text();
        //     alert();
        //     // console.log(id1)
            var id = 30;
            var driverId=2
            //alert(companyID);
            $.ajax({
                url: base_path+"/admin/editDriver",
                type: "POST",
                datatype:"JSON",
                data: {
                    _token: $("#csrf").val(),
                    id: id,
                    driverId: driverId,
                },
                cache: false,
                success: function(dataResult){
                    console.log(dataResult);
                    
                }
            });

        //     //$('#editDriverModal').modal('show'); 
        });
    
    // <!-- ------------------------------------------------------------------------- end of edit driver  ------------------------------------------------------------------------- -->



});


  

// <!-- ------------------------------------------------------------------------- end of driver ------------------------------------------------------------------------- -->