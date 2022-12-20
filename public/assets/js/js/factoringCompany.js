var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
 

$('.closeShipperModal').click(function(){
         $('#Shipper_and_ConsigneeModal').modal('hide');
    //     $('#addTruckModal').modal('hide');
     });

    // $('.closeAddTruckModal').click(function(){
    //     $('#addTruckModal').modal('hide');
    //     //$('#truckModal').modal('show');
    // });

    // $('.addtruckModal').click(function(){
    //     //$('#truckModal').modal('hide');
    //     $('#addTruckModal').modal('show');
    // });


//driver as owner operator modal
   
    // $('#up_driverAddTruck').click(function(){
    //     $('#addTruckModal').modal('show');
    // });
// <!-- -------------------------------------------------------------------------Get factoringCompany  ------------------------------------------------------------------------- -->  
   
    $('#facCompany_navbar').click(function(){
        //alert();
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getFactCompany",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                console.log(text);
                createFactoringCompanyRows(text);
                factoringCompanyResult = text;
             }
        });
        $('#FacoringCompanyModal').modal('show');
    });


// <!-- -------------------------------------------------------------------------over Get factoringCompany  ------------------------------------------------------------------------- --> 
// <!-- -------------------------------------------------------------------------function  ------------------------------------------------------------------------- --> 
    
// get truck
    function createFactoringCompanyRows(factoringCompanyResult) {
        var consigneelen = 0;
            if (factoringCompanyResult != null) {
                factComlen = factoringCompanyResult.factoring.length;

                $("#factComTable").html('');

                if (factComlen > 0) {
                    var no=1;
                    for (var i = factComlen-1; i > 0; i--) {  
                        var _id =factoringCompanyResult.factoring[i]._id;
                        var factoringCompanyname =factoringCompanyResult.factoring[i].factoringCompanyname;
                        var address =factoringCompanyResult.factoring[i].address;
                        var location=factoringCompanyResult.factoring[i].location;
                        var zip=factoringCompanyResult.factoring[i].zip;
                        var primaryContact=factoringCompanyResult.factoring[i].primaryContact;
                        var telephone=factoringCompanyResult.factoring[i].telephone;
                        var extFactoring =factoringCompanyResult.factoring[i].extFactoring;
                        var fax =factoringCompanyResult.factoring[i].fax;
                        var tollFree=factoringCompanyResult.factoring[i].tollFree;
                        var secondaryContact =factoringCompanyResult.factoring[i].secondaryContact;
                        var factoringtelephone =factoringCompanyResult.factoring[i].factoringtelephone;
                        var ext =factoringCompanyResult.factoring[i].ext;
                        var currencySetting =factoringCompanyResult.factoring[i].currencySetting;
                        var paymentTerms =factoringCompanyResult.factoring[i].paymentTerms;
                        var  taxID=factoringCompanyResult.factoring[i].taxID;
                        var internalNote =factoringCompanyResult.factoring[i].internalNote;
                        var deleteStatus =factoringCompanyResult.factoring[i].deleteStatus;
                     
                        if(deleteStatus == 'NO'){


                        var factComStr = "<tr data-id=" + (i + 1) + ">" +
                        //  "<td id='id1'>" + id+ "&"+driverId + "</td>" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td data-field='factoringCompanyname' >" + factoringCompanyname + "</td>" +
                            "<td data-field='address' >" + address + "</td>" +
                            "<td data-field='location' >" + location + "</td>" +
                            "<td data-field='zip' >" + zip + "</td>" +
                            "<td data-field='primaryContact' >" + primaryContact + "</td>" +
                            "<td data-field='telephone' >" + telephone + "</td>" +
                            "<td data-field='extFactoring' >" + extFactoring + "</td>" +
                            "<td data-field='fax' >" + fax + "</td>" +
                            "<td data-field='tollFree' >" + tollFree + "</td>" +
                            "<td data-field='secondaryContact' >" + secondaryContact + "</td>" +
                            "<td data-field='factoringtelephone' >" + factoringtelephone + "</td>" +
                            "<td data-field='ext' >" + ext + "</td>" +
                            "<td data-field='currencySetting' >" + currencySetting + "</td>" +
                            "<td data-field='paymentTerms' >" + paymentTerms + "</td>" +
                            "<td data-field='taxID' >" + taxID + "</td>" +
                            "<td data-field='internalNote' >" + internalNote + "</td>" +
                            
                            "<td style='text-align:center'>"+
                                "<a class='mt-2 btn btn-primary fs-14 text-white editCurrency'  title='Edit1' data-truckId='"+_id+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                            "</td></tr>";

                        $("#factCompTable").append(factComStr);
                        no++;
                        } 
                    }
                } else {
                    var factComStr = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#factCompTable").append(factComStr);
                }
            }else {
            var tr_str1 = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#factCompTable").append(factComStr);
        }
    }
// <!-- -------------------------------------------------------------------------over function  ------------------------------------------------------------------------- --> 


// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  


// ================================ start add factoring ===================================
    $(".addFactoringModel").click(function(){
        $("#addFactoringModel").modal("show");
    });
    $(".closeaddFactoringModel").click(function(){
        $("#addFactoringModel").modal("hide");
    });
    $(".addcurrencySetting").click(function(){
       $("#addCreateCurrency").modal("show");
    });
    $(".closeaddCreateCurrency").click(function(){
       $("#addCreateCurrency").modal("hide");
    });
    $(".closeadPaymentTerms").click(function(){
        $("#addPaymentTerms").modal("hide");
    });
    $(".addpaymentTerms").click(function(){
        $("#addPaymentTerms").modal("show");
    });
    $("#saveFactoringModel").click(function(){
       alert("Factoring Model");
    });
    //=====================  end save factoring ================================


    $(".saveaddCreateCurrency").click(function(){
      alert("Create Currency");
    });
    $(".savePaymentTerms").click(function(){
        alert("savePaymentTerms");
    });
     

    //===================== start save currencyType model ====================
    $('.currencySetting_option').focus(function(){
        $('.currencySetting_option').val('');
        $.ajax({
            type: "GET",
            url: base_path+"/admin/get_currency_Type",
            async: false,
            //dataType:JSON,
            success: function(data) {                   
                createCurrencyTypeList(data);
                CurrencyTypeResponse = data;
            }
        });
    });
    function createCurrencyTypeList(CurrencyTypeResponse) 
    {       
        // alert("createCurrencyTypeList"); 
        // console.log(CurrencyTypelength);   
        var CurrencyTypelength = 0; 
        if (CurrencyTypeResponse != null) 
        {
            CurrencyTypelength = CurrencyTypeResponse.currency.length;
        }
        if (CurrencyTypelength > 0) 
        {
            // var no=1;
            //$(".customerCurrencySet").html('');
            $(".trailerTypeSet").html('');
            for (var i = 0; i < CurrencyTypelength; i++) 
            {  
                var currencyType =CurrencyTypeResponse.currency[i].currencyType;
                var currencyTypeId =CurrencyTypeResponse.currency[i]._id;
                var currencyTypeList = "<option class='trailerType' value='"+ currencyType +"'>"                
                $(".currencySetting_option").append(currencyTypeList);
                //<option value="Edge">
                    //no++;
            }            
        }     
    }
    
    // =================end save currencyType =========================
});