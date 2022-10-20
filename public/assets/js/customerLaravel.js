var base_path = $("#url").val();
// <!-- -------------------------------------------------------------------------Get customer ajax ------------------------------------------------------------------------- -->  
$(document).ready(function() {
    // alert('customer');
    var customerResponse = '';
    $.ajax({
        type: "GET",
        url: base_path+"/admin/customer",
        async: false,
        //dataType:JSON,
        success: function(customerResult) {
            //console.log(customerResult);
            createcustomerRows(customerResult);
            customerResponse = customerResult;
        }
    });

    function createcustomerRows(customerResponse) {

        console.log(customerResponse);
        var custlen1 = 0;
        
        $('#customerTable').empty(); // Empty <tbody>
        if (customerResponse != null) {
            custlen1 = customerResponse.length;
            //len1 = sizeof($driverResponse);
        }

        if (custlen1 > 0) {
           var no=1;
                for (var i = 0; i < custlen1; i++) {  
                var custlen2=customerResponse[i].customer.length; 
                    if(custlen2 > 0){
                        for (var j = 0; j < custlen2; j++) {
                        // var counter = driverResponse[i].counter;
                        // var no = driverResponse[i]._id;
                        var custComid =customerResponse[i].companyID;
                        //var driverId=customerResponse[i].customer[j]._id;
                        var custName = customerResponse[i].customer[j].custName;
                        var custLocation = customerResponse[i].customer[j].custLocation;
                        var custZip = customerResponse[i].customer[j].custZip;
                        var custPrimaryContact = customerResponse[i].customer[j].primaryContact;
                        var custTelephone = customerResponse[i].customer[j].custTelephone;
                        var custEmail = customerResponse[i].customer[j].custEmail;

                        var customerStr = "<tr data-id=" + (i + 1) + ">" +
                        //  "<td id='id1'>" + id+ "&"+driverId + "</td>" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td data-field='customerName' >" + custName + "</td>" +
                            "<td data-field='customerLocation'>" + custLocation + "</td>" +
                            "<td data-field='customerZip'>" + custZip + "</td>" +
                            "<td data-field='customerPrimaryContacte'>" + custPrimaryContact + "</td>" +
                            "<td data-field='customerTelephone'>" + custTelephone + "</td>" +
                            "<td data-field='customerEmail'>" + custEmail + "</td>" +

                            // "<td style='width: 100px'><a class='btn btn-primary fs-14 text-white edit-icn' title='Edit' id='edit'><i class='fe fe-edit' ></i></a></td></tr>"
                            "<td style='width: 100px'><i class='btn btn-primary fe fe-edit customerEdit' data-id=" + custComid+ "&"+custEmail + "></i><a class='deleteDriver mt-2 btn btn-danger fs-14 text-white customerDelete-icn' data-id=" + custComid+ "&"+custEmail + " title='Delete'><i class='fe fe-delete'></i></a></td></tr>";

                        $("#customerTable").append(customerStr);
                        no++;
                    } 
                }
            }
        } else {
            var customerStr = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#customerTable").append(customerStr);
        }

    }
});