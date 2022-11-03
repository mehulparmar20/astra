var base_path = $("#url").val();
// <!-- -------------------------------------------------------------------------Get customer ajax ------------------------------------------------------------------------- -->  
$(document).ready(function() {
    //alert('customer');
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
                            "<td style='width: 100px'><i class='btn btn-primary fe fe-edit customerEdit' data-id=" + custComid+ "&"+custEmail + "> </i><a class=' btn btn-danger fs-14 text-white customerDelete-icn' data-id=" + custComid+ "&"+custEmail + " title='Delete'><i class='fe fe-delete'></i></a></td></tr>";

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
    // <!-- -------------------------------------------------------------------------Get customer over ------------------------------------------------------------------------- -->  
    // function customerValidation(customerResponse) {
    //     var customerName= $('#customerName').val();
    //     var customerAddress= $('#customerAddress').val();
    //     var customerLocation= $('#customerLocation').val();
    //     var customerZip= $('#customerZip').val();

    //     if(customerName == ''){
    //         alert("Please Enter Name");
    //         $('#customerName').focus();
    //         return false;
    //     }
    //     if(customerAddress == ''){
    //         alert("Please Enter Name");
    //         $('#customerAddress').focus();
    //         return false;
    //     }
    //     if(customerLocation == ''){
    //         alert("Please Enter Name");
    //         $('#customerLocation').focus();
    //         return false;
    //     }
    //     if(customerZip == ''){
    //         alert("Please Enter Name");
    //         $('#customerZip').focus();
    //         return false;
    //     }
    // }

    $('.advanceTabCustomer').click(function(){
       
        var customerName= $('#customerName').val();
        var customerAddress= $('#customerAddress').val();
        var customerLocation= $('#customerLocation').val();
        var customerZip= $('#customerZip').val();

        if(customerName == ''){
            alert("Please Enter Name");
            $('#customerName').focus();
            return false;
        }
        if(customerAddress == ''){
            alert("Please Enter Address");
            $('#customerAddress').focus();
            return false;
        }
        if(customerLocation == ''){
            alert("Please Enter Location");
            $('#customerLocation').focus();
            return false;
        }
        if(customerZip == ''){
            alert("Please Enter Zip");
            $('#customerZip').focus();
            return false;
        }
    });

    // <!-- -------------------------------------------------------------------------add customer  ------------------------------------------------------------------------- -->  
   
    // $(".addCustomerButton").click(function(){
    //     $("#addCustomerTab").show();
    // });
       
        // $('#customerDataSubmit').click(customerValidation);
        $(".customerDataSubmit").click(function(){

            // if($("#customerBillingAddressChkbox-1").prop('checked') == true){
            //     alert("checked");
            // }else{
            //     alert("not");
            // }
            var customerName= $('#customerName').val();
            var customerAddress= $('#customerAddress').val();
            var customerLocation= $('#customerLocation').val();
            var customerZip= $('#customerZip').val();

            var customerBillingAddressChkbox= $('#customerBillingAddressChkbox').val();


        //  var customerBillingAddress= $('#customerBillingAddress').val();
            var customerBillingLocation= $('#customerBillingLocation').val();
            var customerBillingZip= $('#customerBillingZip').val();
            var customerPrimaryContact= $('#customerPrimaryContact').val();
            var customerTelephone= $('#customerTelephone').val();
            var customerExt= $('#customerExt').val();
            var customerEmail= $('#customerEmail').val();
            var customerFax= $('#customerFax').val();
            var customerBillingContact= $('#customerBillingContact').val();
            var customerBillingEmail= $('#customerBillingEmail').val();
            var customerBillingTelephone= $('#customerBillingTelephone').val();
            var customerBillingExt= $('#customerBillingExt').val();
            var customerUrs= $('#customerUrs').val();
            var customerMc= $('#customerMc').val();

            var customerBlacklisted= $('#customerBlacklisted').val();
            var customerIsBroker= $('#customerIsBroker').val();
            var customerDuplicateShipper= $('#customerDuplicateShipper').val();
            var customerDuplicateConsignee= $('#customerDuplicateConsignee').val();

            var customerCurrency= $('#customerCurrency').val();
            var customerPaymentTerm= $('#customerPaymentTerm').val();
            var customerCreditLimit= $('#customerCreditLimit').val();
            var customerSalesRepresentative= $('#customerSalesRepresentative').val();
            var customerFactoringCompanyname= $('#customerFactoringCompanyname').val();
            var customerFederalID= $('#customerFederalID').val();
            var customerWorkerComp= $('#customerWorkerComp').val();
            var customerWebsiteURL= $('#customerWebsiteURL').val();
            var customerNumbersonInvoice= $('#customerNumbersonInvoice').val();
            var customerCustomerRate= $('#customerCustomerRate').val();
            var customerInternalNotes= $('#customerInternalNotes').val();
          
            if(customerName == ''){
                alert("Please Enter Name");
                $('#customerName').focus();
                return false;
            }
            if(customerAddress == ''){
                alert("Please Enter Name");
                $('#customerAddress').focus();
                return false;
            }
            if(customerLocation == ''){
                alert("Please Enter Name");
                $('#customerLocation').focus();
                return false;
            }
            if(customerZip == ''){
                alert("Please Enter Name");
                $('#customerZip').focus();
                return false;
            }

            $.ajax({
                url: base_path+"/admin/addCustomer",
                type: "POST",
                datatype:"JSON",
                data: {
                    _token: $("#_tokenCustomer").val(),
                  //   type: 1,
                  customerName: customerName,
                  customerAddress: customerAddress,
                  customerLocation: customerLocation,
                  customerZip: customerZip,
                  customerBillingAddressChkbox: customerBillingAddressChkbox,
                  customerBillingLocation: customerBillingLocation,
                  customerBillingLocation: customerBillingLocation,
                  customerBillingZip: customerBillingZip,
                  customerPrimaryContact: customerPrimaryContact,
                  customerTelephone: customerTelephone,
                  customerExt: customerExt,
                  customerEmail: customerEmail,
                  customerFax: customerFax,
                  customerBillingContact: customerBillingContact,
                  customerBillingEmail: customerBillingEmail,
                  customerBillingTelephone: customerBillingTelephone,
                  customerBillingExt: customerBillingExt,
                  customerUrs: customerUrs,
                  customerMc: customerMc,
                  customerBlacklisted: customerBlacklisted,
                  customerIsBroker: customerIsBroker,
                  customerDuplicateShipper: customerDuplicateShipper,
                  customerDuplicateConsignee: customerDuplicateConsignee,

                  customerCurrency: customerCurrency,
                  customerPaymentTerm: customerPaymentTerm,
                  customerCreditLimit: customerCreditLimit,
                  customerSalesRepresentative: customerSalesRepresentative,
                  customerFactoringCompanyname: customerFactoringCompanyname,
                  customerFederalID: customerFederalID,
                  customerWorkerComp: customerWorkerComp,
                  customerWebsiteURL: customerWebsiteURL,
                  customerNumbersonInvoice: customerNumbersonInvoice, 
                  customerCustomerRate: customerCustomerRate,
                  customerInternalNotes: customerInternalNotes,
                  
                },
                cache: false,
                success: function(dataCustomerResult){
                    console.log(dataCustomerResult);
                    if(dataCustomerResult){
                        alert("Customer added successfully.");
                        // $('#driverModal').modal('show');
                    }else{
                        alert("Customer not added successfully.");
                    }
                }
            });
        });
    // <!-- -------------------------------------------------------------------------get customer currency ------------------------------------------------------------------------- -->  
   // $('.list select').selectpicker();   
    $('.customerCurrencySet').focus(function(){
           //alert(); 
            $.ajax({
                type: "GET",
                url: base_path+"/admin/customerCurrency",
                async: false,
                //dataType:JSON,
                success: function(customerCurrencyResult) {                    
                    createcustomerCurrencyList(customerCurrencyResult);
                    customerCurrencyResponse = customerCurrencyResult;

                    

                }
            });
        });

        function createcustomerCurrencyList(customerCurrencyResponse) {           
            var customerCurrencyLength = 0;    
            
            if (customerCurrencyResponse != null) {
                customerCurrencyLength = customerCurrencyResponse.currency.length;
            }
    
            if (customerCurrencyLength > 0) {
               // var no=1;
                $(".customerCurrencySet").html('');
                $(".currencyList").html('');
                for (var i = 0; i < customerCurrencyLength; i++) {  
                    var currency =customerCurrencyResponse.currency[i].currencyType;
                    //var customerCurrency = "<option id='customerCurrency' value='"+ currency +"'>"+ currency +"</option>"
                    //"<a class='dropdown-item custCurrency' value='"+ currency +"'>"+ no +" )"+ currency +"</a>";                  

                   var customerCurrencyList = "<option id='customerCurrency'  value='"+ currency +"'>"                   
                   $(".customerCurrencySet").append(customerCurrencyList);
                   //<option value="Edge">
                    //no++;
    
                }
            }
            
        }
    // <!-- -------------------------------------------------------------------------over get customer currency ------------------------------------------------------------------------- -->
    // <!-- ------------------------------------------------------------------------- add customer currency ------------------------------------------------------------------------- -->
        $("#plusCurrency").click(function(){
            $("#plusCurrencyModal").modal("show");
        });
        $("#plusCurrency2").click(function(){
           // alert('modal');
            $("#plusCurrencyModal").modal("show");
        });

        

        $("#closeCurrencyModal").click(function(){
            $("#plusCurrencyModal").modal("hide");
        });

        $(".CurrencyrDataSubmit").click(function(){
            var currencyName=$('#CurrencyrName').val();
           //alert(currencyName);
            $.ajax({
                url: base_path+"/admin/addCurrency",
                type: "POST",
                datatype:"JSON",
                data: {
                    _token: $("#_tokenCustomerCurrency").val(),
                    currencyName: currencyName,
                },
                cache: false,
                success: function(dataCustomerCurrencyResult){
                    console.log(dataCustomerCurrencyResult);
                    if(dataCustomerCurrencyResult){
                        alert("Currency added successfully.");
                        $("#plusCurrencyModal").modal("hide");
                    }else{
                        alert("Currency not added successfully.");
                    }
                }
            });
        });
        //});

    // <!-- -------------------------------------------------------------------------over add customer currency ------------------------------------------------------------------------- -->
    //<!-- ------------------------------------------------------------------------- add customer PaymentTerms ------------------------------------------------------------------------- -->
        $("#plusPaymentTerms").click(function(){
            $("#PaymentTermsModal").modal("show");
        });
        $("#plusPaymentTerms2").click(function(){
            $("#PaymentTermsModal").modal("show");
        });

        $("#closePaymentTermsModal").click(function(){
            $("#PaymentTermsModal").modal("hide");
        });

        $(".PaymentTermsDataSubmit").click(function(){
            var PaymentTermsName=$('#PaymentTermsName').val();
           //alert(currencyName);
            $.ajax({
                url: base_path+"/admin/PaymentTerms",
                type: "POST",
                datatype:"JSON",
                data: {
                    _token: $("#_tokenCustomerPaymentTerms").val(),
                    PaymentTermsName: PaymentTermsName,
                },
                cache: false,
                success: function(dataCustomerPaymentTermsNameResult){
                    console.log(dataCustomerPaymentTermsNameResult);
                    if(dataCustomerPaymentTermsNameResult){
                        alert("Payment Terms added successfully.");
                        $("#PaymentTermsModal").modal("hide");
                    }else{
                        alert("Payment Terms not added successfully.");
                    }
                }
            });
        });
        //});

    // <!-- -------------------------------------------------------------------------over add customer currency ------------------------------------------------------------------------- -->
    // <!-- -------------------------------------------------------------------------get customer payment terms ------------------------------------------------------------------------- -->  
  
   $('.customerPaymentTermSet').focus(function(){
    //alert(); 
     $.ajax({
         type: "GET",
         url: base_path+"/admin/getCustomerPaymentTerms",
         async: false,
         //dataType:JSON,
         success: function(customerPaymentTermsResult) {
             //console.log(customerCurrencyResult);
             createcustomerPaymentTermsList(customerPaymentTermsResult);
             customerPaymentTermsResponse = customerPaymentTermsResult;
         }
     });
 });

 function createcustomerPaymentTermsList(customerPaymentTermsResponse) {
    // $('.customerCurrencySet').empty();
     //console.log(customerCurrencyResponse);
     var customerCurrencyLength = 0;

     //$('.customerCurrencySet').empty(); // Empty 
     if (customerPaymentTermsResponse != null) {
         customerPaymentTermsLength = customerPaymentTermsResponse.payment.length;
         //alert(customerPaymentTermsLength);
     }

     if (customerPaymentTermsLength > 0) {
         var no=1;
         $(".customerPaymentTermSet").html('');
         for (var i = 0; i < customerPaymentTermsLength; i++) {  
             var paymentTerm =customerPaymentTermsResponse.payment[i].paymentTerm;
             var customerPaymentTerm = "<option id='customerPaymentTerm' value='"+ paymentTerm +"'>"+ paymentTerm +"</option>"
             //"<a class='dropdown-item custCurrency' value='"+ currency +"'>"+ no +" )"+ currency +"</a>";

             $(".customerPaymentTermSet").append(customerPaymentTerm);
            // $(".customerCurrencySet").html(customerCurrency);
           
             no++;

         }
     }
     
 }
// <!-- -------------------------------------------------------------------------over get customer  payment terms ------------------------------------------------------------------------- -->  
// <!-- -------------------------------------------------------------------------get customer Factoring Company ------------------------------------------------------------------------- -->  
  
$('.customerBFactoringCompanySet').focus(function(){
    //alert(); 
     $.ajax({
         type: "GET",
         url: base_path+"/admin/getCustomerBFactoringCompany",
         async: false,
         //dataType:JSON,
         success: function(customerBFactoringCompanyResult) {
             //console.log(customerCurrencyResult);
             createCustomerBFactoringCompanyList(customerBFactoringCompanyResult);
             customerBFactoringCompanyResponse = customerBFactoringCompanyResult;
         }
     });
 });

 function createCustomerBFactoringCompanyList(customerBFactoringCompanyResponse) {    
     if (customerBFactoringCompanyResponse != null) {
        customerBFactoringCompanyLength = customerBFactoringCompanyResponse.factoring.length;         
     }

     if (customerBFactoringCompanyLength > 0) {
        $(".customerBFactoringCompanySet").html('');
         for (var i = 0; i < customerBFactoringCompanyLength; i++) {  
             var factoringCompanyname =customerBFactoringCompanyResponse.factoring[i].factoringCompanyname;
             var customerFactoringCompanyname = "<option id='customerFactoringCompanyname' value='"+ factoringCompanyname +"'>"+ factoringCompanyname +"</option>"
             //"<a class='dropdown-item custCurrency' value='"+ currency +"'>"+ no +" )"+ currency +"</a>";

             $(".customerBFactoringCompanySet").append(customerFactoringCompanyname);
            // $(".customerCurrencySet").html(customerCurrency);
           
          

         }
     }
     
 }
// <!-- -------------------------------------------------------------------------over get customer  Factoring Company ------------------------------------------------------------------------- -->   
 //<!-- ------------------------------------------------------------------------- add customer factoringCompany ------------------------------------------------------------------------- -->
 $("#plusFactoringCompany").click(function(){
    $("#factoringCompanyModal").modal("show");
});

$("#closefactoringCompanyModal").click(function(){
    $("#factoringCompanyModal").modal("hide");
});

$(".factoringCompanyDataSubmit").click(function(){
    //alert();
    var factoringCompanyName=$('#factoringCompanyName').val();
    var factoringCompanyAddress=$('#factoringCompanyAddress').val();
    var factoringCompanyLocation=$('#factoringCompanyLocation').val();
    var factoringCompanyZip=$('#factoringCompanyZip').val();

    var factoringCompanyPrimaryContact=$('#factoringCompanyPrimaryContact').val();
    var factoringCompanyPrimaryContactTelephone=$('#factoringCompanyPrimaryContactTelephone').val();
    var factoringCompanyPrimaryContactExt=$('#factoringCompanyPrimaryContactExt').val();
    var factoringCompanyFax=$('#factoringCompanyFax').val();

    var factoringCompanySecondaryContact=$('#factoringCompanySecondaryContact').val();
    var factoringCompanySecondaryContactTelephone=$('#factoringCompanySecondaryContactTelephone').val();
    var factoringCompanySecondaryContactExt=$('#factoringCompanySecondaryContactExt').val();
    var factoringTollFree=$('#factoringTollFree').val();

    var factoringCompanyContactEmail=$('#factoringCompanyContactEmail').val();
    var factoringCompanycurrency=$('#currency').val();
    var factoringCompanyPaymentTerms=$('#PaymentTerms').val();
    var factoringCompanyTaxID=$('#factoringCompanyTaxID').val();

    var factoringCompanyInternalNotes=$('#factoringCompanyInternalNotes').val();

   //alert(currencyName);
    $.ajax({
        url: base_path+"/admin/factoringCompany",
        type: "POST",
        datatype:"JSON",
        data: {
            _token: $("#_tokenCustomerFactoringCompany").val(),
            factoringCompanyName: factoringCompanyName,
            factoringCompanyAddress: factoringCompanyAddress,
            factoringCompanyLocation: factoringCompanyLocation,
            factoringCompanyZip: factoringCompanyZip,

            factoringCompanyPrimaryContact: factoringCompanyPrimaryContact,
            factoringCompanyPrimaryContactTelephone: factoringCompanyPrimaryContactTelephone,
            factoringCompanyPrimaryContactExt: factoringCompanyPrimaryContactExt,
            factoringCompanyFax: factoringCompanyFax,

            factoringCompanySecondaryContact: factoringCompanySecondaryContact,
            factoringCompanySecondaryContactTelephone: factoringCompanySecondaryContactTelephone,
            factoringCompanySecondaryContactExt: factoringCompanySecondaryContactExt,
            factoringTollFree: factoringTollFree,

            factoringCompanyContactEmail: factoringCompanyContactEmail,
            factoringCompanycurrency: factoringCompanycurrency,
            factoringCompanyPaymentTerms: factoringCompanyPaymentTerms,
            factoringCompanyTaxID: factoringCompanyTaxID,

            factoringCompanyInternalNotes: factoringCompanyInternalNotes,
        },
        cache: false,
        success: function(dataCustomerfactoringCompanyResult){
            console.log(dataCustomerfactoringCompanyResult);
            if(dataCustomerfactoringCompanyResult){
                alert("Factoring Company added successfully.");
                $("#factoringCompanyModal").modal("hide");
            }else{
                alert("Factoring Company not added successfully.");
            }
        }
    });
});

// <!-- -------------------------------------------------------------------------over add customer factoringCompany ------------------------------------------------------------------------- -->   

// <!-- -------------------------------------------------------------------------add customer over ------------------------------------------------------------------------- -->  
//show_add_customer
    $("body").on('click','.addCustomerButton',function(){
        $("body .add_customer_btn").click();
    });

    $('#customerBillingAddressChkbox').click(function(){
        if($(this).prop("checked") == true){
            $("#customerBillingAddress").val($("#customerAddress").val());
            $("#customerBillingLocation").val($("#customerLocation").val());
            $("#customerBillingZip").val($("#customerZip").val());
        }
        else if($(this).prop("checked") == false){
            $("#customerBillingAddress").val('');
            $("#customerBillingLocation").val('');
            $("#customerBillingZip").val('');
        }
    });
    $('#customerBlacklisted').click(function(){
        if($(this).prop("checked") == true){
            $("#customerBlacklisted").val('on');
           
        }
        else if($(this).prop("checked") == false){
            $("#customerBlacklisted").val('off');
          
        }
    });
    $(".MC").hide();
    $('#customerIsBroker').click(function(){
        if($(this).prop("checked") == true){
            $("#customerIsBroker").val('on');
            $(".MC").show();
           
        }
        else if($(this).prop("checked") == false){
            $("#customerIsBroker").val('off');
            $(".MC").hide();
          
        }
    });
    $('#customerDuplicateShipper').click(function(){
        if($(this).prop("checked") == true){
            $("#customerDuplicateShipper").val('on');
           
        }
        else if($(this).prop("checked") == false){
            $("#customerDuplicateShipper").val('off');
          
        }
    });
    $('#customerDuplicateConsignee').click(function(){
        if($(this).prop("checked") == true){
            $("#customerDuplicateConsignee").val('on');
           
        }
        else if($(this).prop("checked") == false){
            $("#customerDuplicateConsignee").val('off');
          
        }
    });
    $('#customerNumbersonInvoice').click(function(){
        if($(this).prop("checked") == true){
            $("#customerNumbersonInvoice").val('on');
           
        }
        else if($(this).prop("checked") == false){
            $("#customerNumbersonInvoice").val('off');
          
        }
    });
    $('#customerCustomerRate').click(function(){
        if($(this).prop("checked") == true){
            $("#customerCustomerRate").val('on');
           
        }
        else if($(this).prop("checked") == false){
            $("#customerCustomerRate").val('off');
          
        }
    });

});

//show_add_customer
function show_add_customer(){    
    $("#addCustomerTab").addClass("tab-pane fade in active show");
    $("#addAdvanceCustomerTab").removeClass('active show');    
}

