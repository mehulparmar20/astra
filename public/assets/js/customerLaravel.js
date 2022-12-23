var base_path = $("#url").val();
$(document).ready(function() {
// <!-- -------------------------------------------------------------------------Get customer ------------------------------------------------------------------------- -->  
  $('#customer_navbar').click(function(){
    //alert('customer');
    $("#customerModal").modal("show");
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
    // $("#customerModal").modal("show");
  }); 


    function createcustomerRows(customerResponse) {

        // console.log(customerResponse);
        var custlen1 = 0;
        
        $('#customerTable').empty(); // Empty <tbody>
        // if (customerResponse != null) {
        //     custlen1 = customerResponse.length;
        //     //len1 = sizeof($driverResponse);
        // }

        //if (custlen1 > 0) {
           var no=1;
                //for (var i = 0; i < custlen1; i++) {  
                var custlen2=customerResponse.customer.length; 
                    //if(custlen2 > 0){
                        for (var j = 0; j < custlen2; j++) {
                        // var counter = driverResponse[i].counter;
                        // var no = driverResponse[i]._id;
                        var custComid =customerResponse.companyID;
                        //var driverId=customerResponse[i].customer[j]._id;
                        var customerId=customerResponse.customer[j]._id;
                        var custName = customerResponse.customer[j].custName;
                        var custLocation = customerResponse.customer[j].custLocation;
                        var custZip = customerResponse.customer[j].custZip;
                        var custPrimaryContact = customerResponse.customer[j].primaryContact;
                        var custTelephone = customerResponse.customer[j].custTelephone;
                        var custEmail = customerResponse.customer[j].custEmail;
                        var delete_status = customerResponse.customer[j].deleteStatus;
                        if(delete_status=="NO"){
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
                                "<td style='width: 100px'><i class='button-29 fe fe-edit customerEdit' data-id=" + customerId+ " data-email="+custEmail +"> </i>&nbsp; &nbsp; <a class=' button-29 fs-14 text-white customerDelete-icn' data-id=" + customerId+ "&"+custEmail + " title='Delete'><i class='fe fe-delete'></i></a></td></tr>";

                            $("#customerTable").append(customerStr);
                            no++;
                        }
                    //} 
                //}
            }
        // } else {
        //     var customerStr = "<tr data-id=" + i + ">" +
        //         "<td align='center' colspan='4'>No record found.</td>" +
        //         "</tr>";

        //     $("#customerTable").append(customerStr);
        // }

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

        // if(customerName == ''){
        //     // swal.fire("Done!", "Currency added successfully", "success");
        //     alert("Please Enter Name");
        //     $('#customerName').focus();
        //     return false;
        // }
        // if(customerAddress == ''){
        //     alert("Please Enter Address");
        //     $('#customerAddress').focus();
        //     return false;
        // }
        // if(customerLocation == ''){
        //     alert("Please Enter Location");
        //     $('#customerLocation').focus();
        //     return false;
        // }
        // if(customerZip == ''){
        //     alert("Please Enter Zip");
        //     $('#customerZip').focus();
        //     return false;
        // }
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
//     // <!-- -------------------------------------------------------------------------over get customer currency ------------------------------------------------------------------------- -->
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

        // $(".CurrencyrDataSubmit").click(function(){
        //     var currencyName=$('#CurrencyrName').val();
        //    //alert(currencyName);
        //     $.ajax({
        //         url: base_path+"/admin/addCurrency",
        //         type: "POST",
        //         datatype:"JSON",
        //         data: {
        //             _token: $("#_tokenCustomerCurrency").val(),
        //             currencyName: currencyName,
        //         },
        //         cache: false,
        //         success: function(dataCustomerCurrencyResult){
        //             console.log(dataCustomerCurrencyResult);
        //             if(dataCustomerCurrencyResult){
        //                 swal.fire("Done!", "Currency added successfully", "success");
        //                 // alert("Currency added successfully.");
        //                 $("#plusCurrencyModal").modal("hide");
        //                 $.ajax({
        //                     type: "GET",
        //                     url: base_path+"/admin/getCurrency",
        //                     success: function(text) {
        //                         createGetCurrencyRows(text);
        //                         currencyResult = text;
        //                     }
        //                 });	
        //             }else{
        //                 swal.fire("Try Again!", "Currency not added successfully", "error");
        //                 // alert("Currency not added successfully.");
        //             }
        //         }
        //     });
        // });
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

    // <!-- -------------------------------------------------------------------------over add PaymentTerms ------------------------------------------------------------------------- -->
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
             var factoringCompanyId =customerBFactoringCompanyResponse.factoring[i]._id;
             var customerFactoringCompanyname = "<option id='customerFactoringCompanyname' value='"+ factoringCompanyId +"'>"+ factoringCompanyname +"</option>"
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
// <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->  
});

//show_add_customer
function show_add_customer(){    
    $("#addCustomerTab").addClass("tab-pane fade in active show");
    $("#addAdvanceCustomerTab").removeClass('active show');    
}
function show_update_customer(){    
    $("#updateCustomerTab").addClass("tab-pane fade in active show");
    $("#updateAdvanceCustomerTab").removeClass('active show');    
}

//  =============== start update customer show model ====================

$(".closeUpdateCustomerModel").click(function(){
    $("#updateCustomerModal").modal("hide");
})
$('body').on('click','.customerEdit',function(){
    $("#updateCustomerModal").modal("show");
    show_update_customer();
    var id=$(this).attr("data-id");
    var email=$(this).attr("data-email");
    // alert(id);
    $.ajax({
        type:'get',
        url:base_path+"/admin/edit_customer",
        data:{id:id,email:email},
        // dataType:JSON,
        async: false,
        success:function(response){
           $("#updateCustomerName").val(response.customer.custName);
           $("#updateCustomerAddress").val(response.customer.custAddress);
           $("#updateCustomerLocation").val(response.customer.custLocation);
           $("#updateCustomerZip").val(response.customer.custZip);
        //    $("#updateCustomerBillingAddressChkbox").val(response.customer.billingAddress);
           $("#updateCustomerBillingAddress").val(response.customer.billingAddress);
           $("#updateCustomerBillingLocation").val(response.customer.billingLocation);
           $("#updateCustomerBillingZip").val(response.customer.billingZip);
           $("#updateCustomerPrimaryContact").val(response.customer.primaryContact);
           $("#updateCustomerTelephone").val(response.customer.custTelephone);
           $("#updateCustomerExt").val(response.customer.custExt);
           $("#updateCustomerEmail").val(response.customer.custEmail);
           $("#updateCustomerFax").val(response.customer.custFax);
           $("#updateCustomerBillingContact").val(response.customer.billingContact);
           $("#updateCustomerBillingEmail").val(response.customer.billingEmail);
           $("#updateCustomerBillingTelephone").val(response.customer.billingTelephone);
           $("#updateCustomerBillingExt").val(response.customer.billingExt);
           $("#updateCustomerUrs").val(response.customer.URS);
           $("#updateCustomerMc").val(response.customer.MC);
           $("#updateCustomerBlacklisted").val(response.customer.blacklisted);
           $("#updateCustomerIsBroker").val(response.customer.isBroker);
        //    $("#updateCustomerDuplicateShipper").val(response.customer.numberOninvoice);
        //    $("#updateCstomerDuplicateConsignee").val(response.customer.customerRate);
           $("#customerCurrencySet").val(response.customer.currencySetting);
           $("#addPaymentTermsCustomer").val(response.customer.paymentTerms);
           $("#updateCustomerCreditLimit").val(response.customer.creditLimit);
           $("#updateCustomerSalesRepresentative").val(response.customer.salesRep);
           $("#customerBFactoringCompany").val(response.customer.factoringCompany);
           $("#updateCustomerFederalID").val(response.customer.federalID);
           $("#updateCustomerWorkerComp").val(response.customer.workerComps);
           $("#updateCustomerWebsiteURL").val(response.customer.websiteURL);
           $("#updateCustomerNumbersonInvoice").val(response.customer.numberOninvoice);
           $("#updateCustomerCustomerRate").val(response.customer.customerRate);
           $("#updateCustomerInternalNotes").val(response.customer.internalNotes);
        }
    });
});
$(".updateCustomerData").click(function(){
    var custName=$("#updateCustomerName").val();
    // alert(custName);
    var custAddress = $("#updateCustomerAddress").val();
    var custLocation = $("#updateCustomerLocation").val();
    var custZip = $("#updateCustomerZip").val();
    var BillingAddressChkbox = $("#updateCustomerBillingAddressChkbox").val();
    var billingAddress = $("#updateCustomerBillingAddress").val();
    var billingLocation = $("#updateCustomerBillingLocation").val();
    var billingZip = $("#updateCustomerBillingZip").val();
    var primaryContact = $("#updateCustomerPrimaryContact").val();
    var custTelephone = $("#updateCustomerTelephone").val();
    var custExt = $("#updateCustomerExt").val();
    var custEmail = $("#updateCustomerEmail").val();
    var custFax = $("#updateCustomerFax").val();
    var billingContact = $("#updateCustomerBillingContact").val();
    var billingEmail = $("#updateCustomerBillingEmail").val();
    var billingTelephone = $("#updateCustomerBillingTelephone").val();
    var billingExt = $("#updateCustomerBillingExt").val();
    var URS = $("#updateCustomerUrs").val();
    var MC = $("#updateCustomerMc").val();
    var blacklisted = $("#updateCustomerBlacklisted").val();
    var isBroker = $("#updateCustomerIsBroker").val();
    var DuplicateShipper = $("#updateCustomerDuplicateShipper").val();
    var DuplicateConsignee = $("#updateCstomerDuplicateConsignee").val();
    var currencySetting = $("#customerCurrencySet").val();
    var paymentTerms = $("#addPaymentTermsCustomer").val();
    var creditLimit = $("#updateCustomerCreditLimit").val();
    var salesRep = $("#updateCustomerSalesRepresentative").val();
    var factoringCompany = $("#customerBFactoringCompany").val();
    var federalID = $("#updateCustomerFederalID").val();
    var workerComps = $("#updateCustomerWorkerComp").val();
    var websiteURL = $("#updateCustomerWebsiteURL").val();
    var numberOninvoice = $("#updateCustomerNumbersonInvoice").val();
    var customerRate = $("#updateCustomerCustomerRate").val();
    var internalNotes = $("#updateCustomerInternalNotes").val();
    if(custName=='')
    {
        swal.fire( "Enter Customer Name");
        $('#updateCustomerName').focus();
        return false;
        
    } 
    if(custAddress=='')
    {
        swal.fire( "Enter Customer Address");
        return false;
    }
    if(custLocation=='')
    {
        swal.fire( "'Enter Location");
        return false;
    }
    if(custZip=='')
    {
        swal.fire( "'Enter Zip");
        return false;
    }
    var formData = new FormData();
    formData.append('_token',$("#_tokenUpdateCustomer").val());
    formData.append('custName',custName);
    formData.append('custAddress',custAddress);
    formData.append('custLocation',custLocation);
    formData.append('custZip',custZip);        
    formData.append('BillingAddressChkbox',BillingAddressChkbox); 
    formData.append('billingAddress',billingAddress);    
    formData.append('billingLocation',billingLocation); 
    formData.append('billingZip',billingZip); 
    formData.append('primaryContact',primaryContact); 
    formData.append('custTelephone',custTelephone); 
    formData.append('custExt',custExt); 
    formData.append('custEmail',custEmail); 
    formData.append('custFax',custFax); 
    formData.append('billingContact',billingContact); 
    formData.append('billingEmail',billingEmail); 
    formData.append('billingTelephone',billingTelephone); 
    formData.append('billingExt',billingExt); 
    formData.append('URS',URS); 
    formData.append('MC',MC); 
    formData.append('blacklisted',blacklisted); 
    formData.append('isBroker',isBroker); 
    formData.append('DuplicateShipper',DuplicateShipper); 
    formData.append('DuplicateConsignee',DuplicateConsignee); 
    formData.append('currencySetting',currencySetting); 
    formData.append('paymentTerms',paymentTerms); 
    formData.append('creditLimit',creditLimit); 
    formData.append('salesRep',salesRep); 
    formData.append('factoringCompany',factoringCompany); 
    formData.append('federalID',federalID); 
    formData.append('workerComps',workerComps); 
    formData.append('websiteURL',websiteURL);  
    formData.append('customerRate',customerRate);  
    formData.append('numberOninvoice',numberOninvoice); 
    formData.append('internalNotes',internalNotes);
    
    // alert("fgfhfgghggf");
    // $.ajax({
    //         type:'post',
    //         url:base_path+"/admin/update_customers",
    //         data:formData,
    //         success:function(response){
    //             alert("success");
    //             // swal.fire("Done!", "Customer updated successfully", "success");
    //             // $('#updateCustomerModal').modal('hide');
    //             // $.ajax({
    //             //     type: "GET",
    //             //     url: base_path+"/admin/customer",
    //             //     async: false,
    //             //     //dataType:JSON,
    //             //     success: function(customerResult) {
    //             //         //console.log(customerResult);
    //             //         createcustomerRows(customerResult);
    //             //         customerResponse = customerResult;
    //             //     }
    //             // });
    //         }
    // });
})
// ====================== end update customer ==================================

//===========================create currency =========================
$(".closeaddCreateCurrencyCustomer").click(function(){
    $("#addCreateCurrencyCustomer").modal("hide");
});
$(".addCurrencySetting").click(function(){
    $("#addCreateCurrencyCustomer").modal("show");
});
$(".saveaddCreateCurrencycustomer").click(function(){
    alert("add currency");
})
//================================== end currency ============================

// ================ add payment terms ===========
$(".closeadPaymentTermsCustomer").click(function(){
    $("#addPaymentTermsCustom").modal("hide");
});
$(".addUpPaymentTermsCustomer").click(function(){
    $("#addPaymentTermsCustom").modal("show");
});
$(".savePaymentTermsCustomer").click(function(){
    alert("add payment terms");
});
// /============= end payment terms =======================

//============= addFactoringCompanyCutomer===========================
$(".closeaddFactoringModelCustomer").click(function(){
    $("#addFactoringModelCustomer").modal("hide");
});
$(".addFactoringCompanyCutomer").click(function(){
    $("#addFactoringModelCustomer").modal("show");
});
$(".saveFactoringModelCustomer").click(function(){
    alert("add addFactoringModelCustomer");
});