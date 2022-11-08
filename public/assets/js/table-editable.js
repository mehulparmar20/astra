
"use strict";

$(function (e) {

	var data = {};

	
	
	function recp() {
		$('#table1').load(base_path+'/admin/user');
	}

	// $(document).ready(function(){
	// 	$('.edit1').click(function(){
	// 		console.log('Hello');
	// 			$('#userEditModal').modal('show'); 
	// 		var tr = (this).closest('tr');
	// 		$('#id').val(tr.cells[0].innerText);
	// 		$('#editFirstName4').val(tr.cells[3].innerText);
	// 		$('#editLastName4').val(tr.cells[4].innerText);
	// 		$('#editUsername4').val(tr.cells[2].innerText);
	// 		$('#editEmail4').val(tr.cells[1].innerText);
	// 		$('#email4').val(tr.cells[1].innerText);
	// 		$('#editAddress').val(tr.cells[5].innerText);
	// 		$('#editLocation').val(tr.cells[6].innerText);
	// 		$('#editZip').val(tr.cells[7].innerText);
	// 		$('#editTelephone').val(tr.cells[8].innerText);
	// 		$('#editExt').val(tr.cells[9].innerText);
	// 		$('#editTollFree').val(tr.cells[10].innerText);
	// 		$('#editFax').val(tr.cells[11].innerText);
	// 	});
	// 	$('#useredit').on('click', function() {
	// 		      var id = $('#id').val();
	// 		      var firstname = $('#editFirstName4').val();
	// 		      var lastname = $('#editLastName4').val();
	// 		      var username = $('#editUsername4').val();
	// 		      var email = $('#editEmail4').val();
	// 		      var userEmail = $('#email4').val();
	// 		      var address = $('#editAddress').val();
	// 		      var location = $('#editLocation').val();
	// 		      var zip = $('#editZip').val();
	// 		      var companyname = 1;
	// 		      var office = 1;
	// 		      var telephone = $('#editTelephone').val();
	// 		      var ext = $('#editExt').val();
	// 		      var tollfree = $('#editTollFree').val();
	// 		      var fax = $('#editFax').val();
	// 			  var tr_str3 = "<tr data-id=" + id + ">" +
	// 							"<td data-field='id'>" + id + "</td>" +
	// 							"<td data-field='email' id="+email+">" + email + "</td>" +
	// 							"<td data-field='username'>" + username + "</td>" +
	// 							"<td data-field='fistname'>" + firstname + "</td>" +
	// 							"<td data-field='lastname'>" + lastname + "</td>" +
	// 							"<td data-field='address'>" + address + "</td>" +
	// 							"<td data-field='location'>" + location + "</td>" +
	// 							"<td data-field='zip'>" + zip + "</td>" +
	// 							"<td data-field='telephone'>" + telephone + "</td>" +
	// 							"<td data-field='ext'>" + ext + "</td>" +
	// 							"<td data-field='tollfree'>" + tollfree + "</td>" +
	// 							"<td data-field='fax'>" + fax + "</td>" +
	// 							"<td style='width: 100px'><a class='btn btn-primary fs-14 text-white edit-icn edit1' title='Edit'><i class='fe fe-edit'></i></a><a class='delete1 mt-2 btn btn-danger fs-14 text-white delete-icn' data-id="+ email +" title='Delete'><i class='fe fe-delete'></i></a></td></tr>";
	// 		          $.ajax({
	// 		              url: base_path+"/admin/edit-user",
	// 		              type: "POST",
	// 		              data: {
	// 		                  _token: $("#newcsrf").val(),
	// 		                //   type: 1,
	// 						email: userEmail,
	// 		                userName: username,
	// 		                userFirstName: firstname,
	// 		                userLastName: lastname,
	// 		                userEmail: email,
	// 		                userAddress: address,
	// 		                userLocation: location,
	// 		                userZip: zip,
	// 		                userTelephone: telephone,
	// 		                companyName: companyname,
	// 		                office: office,
	// 		                userExt: ext,
	// 		                TollFree: tollfree,
	// 		                userFax: fax,
	// 		              },
	// 		              cache: false,
	// 		              success: function(response){
	// 						  var responsenew = JSON.parse(response);
	// 						if(responsenew.statusCode===200){
	// 							swal.fire("Done!", responsenew.message, "success");
	// 							$.ajax({
	// 								type: "GET",
	// 								url: base_path+"/admin/user",
	// 								success: function(text) {
	// 									createRows(text);
	// 									response = text;
	// 								}
	// 							});
	// 							// $("#table1").append(tr_str3);
	// 							// $('#userEditModal').modal('toggle');			
	// 						}
	// 		              },
	// 					  error: function(data){
	// 						$.each( data.responseJSON.errors, function( key, value ) {
	// 							swal.fire("Error!", value[0], "error"); 
	// 						});
	// 						},
	// 		          });
	// 		  });
	// });

	// Editable Responsive Table
	$('#editable-responsive-table').DataTable({
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
		}
	});

	// Editable File-Export Data Table
	var table = $('#editable-file-datatable').DataTable({
		buttons: ['copy', 'excel', 'pdf', 'colvis'],
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
		}
	});
	table.buttons().container()
		.appendTo('#editable-file-datatable_wrapper .col-md-6:eq(0)');

	// Delete Data Table
	var table = $('#delete-datatable').DataTable({
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
		}
	});
	$('#delete-datatable tbody').on('click', 'tr', function () {
		if ($(this).hasClass('selected')) {
			$(this).removeClass('selected');
		}
		else {
			table.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	});
	$('#button').on("click", function () {
		table.row('.selected').remove().draw(false);
	});

	// Select2 
	$('.select2').select2({
		minimumResultsForSearch: Infinity
	});

});