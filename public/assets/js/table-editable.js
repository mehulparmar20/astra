
"use strict";

$(function (e) {

	var data = {};
	// $(".table-edit tr").editable({
	// 	keyboard: true,
	// 	button: true,
	// 	buttonSelector: ".edit-icn",
	// 	dropdowns: {
	// 		gender: ["Male", "Female"]
	// 	},
	// 	maintainWidth: true,
	// 	edit: function (values) {
	// 		$(".edit-icn i", this).removeClass("fe-pen").addClass("fe-save").attr("title", "Save");
	// 	},
	// 	save: function (values) {
	// 		$(".edit-icn i", this).removeClass("fe-save").addClass("fe-pen").attr("title", "Edit"), this in data && (data[this].destroy(), delete data[this])
	// 	},
	// 	cancel: function (values) {
	// 		$(".edit-icn i", this).removeClass("fe-save").addClass("fe-pen").attr("title", "Edit"), this in data && (data[this].destroy(), delete data[this])
	// 	}
	// })
	
	$(".delete").on("click", function(){
		var email = $(this).attr("data-id");
		// console.log(email);
		$.ajax({ 
		  url: base_path+"/admin/delete-user",
		  data: {userEmail: email},
		  type: 'post',
		  success: function(result){
			console.log('success');
			// $('#userModal').hide().show();
			location.reload();
		  }
		});
	});

	$(document).ready(function(){
		$('.edit1').click(function(){
				$('#userEditModal').modal('show'); 
			var tr = (this).closest('tr');
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
		$('#useredit').on('click', function() {
			      var firstname = $('#editFirstName4').val();
			      var lastname = $('#editLastName4').val();
			      var username = $('#editUsername4').val();
			      var email = $('#editEmail4').val();
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
			    //   console.log(fax);
			    //   if(name!="" && email!="" && phone!="" && city!=""){
			    //   $("#butsave").attr("disabled", "disabled"); 
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
							//   console.log(responsenew.statusCode);
							if(responsenew.statusCode===200){
								$("#userEditModal").hide();				
							}
							else if(responsenew.statusCode==201){
								alert("Error occured !");
							} 
			              }
			          });
			    //   }
			    //   else{
			    //       alert("All fields are required");
			    //   }
			  });
	});

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