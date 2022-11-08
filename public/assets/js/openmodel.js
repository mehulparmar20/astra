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
                        //   type: 1,
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
                            // $("#table1").append(tr_str3);
                            // $('#userEditModal').modal('toggle');			
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

function modelopenfun()
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
