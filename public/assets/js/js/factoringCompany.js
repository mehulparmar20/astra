//Privilege
var edit=$('#updateUser').val();
var delet =$('#deleteUser').val();

if(edit == 1){
   var editPrivilege=''; 
}else{
    var editPrivilege='privilege';
}
if(delet == 1){
    var delPrivilege=''; 
 }else{
     var delPrivilege='privilege';
 }

var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  

    $('.FactoringCompanyModalClose').click(function(){
         $('#FacoringCompanyModal').modal('hide');
     });

    $('#AddFactoringCompany').click(function(){
        $('#addFactoringCompanyModal').modal('show');
    });

    $('#factoringCurrency').click(function(){
        $('#plusCurrencyModal').modal('show');
    });

    $('#factoringPaymentTerms').click(function(){
        $('#PaymentTermsModal').modal('show');
    });

    $('.addFactoringCompanyModalCloseButton').click(function(){
        $('#addFactoringCompanyModal').modal('hide');
    });

// <!-- -------------------------------------------------------------------------Get factoringCompany  ------------------------------------------------------------------------- -->  
   
    $('#facCompany_navbar').click(function(){
       
        //alert();
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getFactCompany",
            // async: false,
            // dataType:JSON,
            success: function(text) {
                //alert();
                // console.log(text);
                createFactoringCompanyRows(text);
                factoringCompanyResult = text;
             }
        });
        $('#FacoringCompanyModal').modal('show');
   
        
    });


// <!-- -------------------------------------------------------------------------over Get factoringCompany  ------------------------------------------------------------------------- --> 


// <!-- -------------------------------------------------------------------------function  get------------------------------------------------------------------------- --> 
    
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
                    var ContactEmail=factoringCompanyResult.factoring[i].email;
                 
                    if(deleteStatus == 'NO'){


                    var factComStr = "<tr class='tr' data-id=" + (i + 1) + ">" +
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
                        "<td data-field='ContactEmail' >" + ContactEmail + "</td>" +
                        "<td data-field='secondaryContact' >" + secondaryContact + "</td>" +
                        "<td data-field='factoringtelephone' >" + factoringtelephone + "</td>" +
                        "<td data-field='ext' >" + ext + "</td>" +
                        "<td data-field='currencySetting' >" + currencySetting + "</td>" +
                        "<td data-field='paymentTerms' >" + paymentTerms + "</td>" +
                        "<td data-field='taxID' >" + taxID + "</td>" +
                        "<td data-field='internalNote' >" + internalNote + "</td>" +
                        
                        "<td style='text-align:center'>"+
                            "<a class='button-23 "+editPrivilege+"'  title='Edit1' data-truckId='"+_id+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                            "<a class='button-23 "+delPrivilege+"'  title='Delete' data-truckId='"+_id+"' data-truckType='' ><i class='fe fe-delete'></i></a>&nbsp"
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
//  //<!-- ------------------------------------------------------------------------- add customer factoringCompany ------------------------------------------------------------------------- -->
    $(".addFactoringCompanyDataSubmit").click(function(){
        //alert();
        var factoringCompanyName=$('#addfactoringCompanyName').val();
        var factoringCompanyAddress=$('#addfactoringCompanyAddress').val();
        var factoringCompanyLocation=$('#addfactoringCompanyLocation').val();
        var factoringCompanyZip=$('#addfactoringCompanyZip').val();

        var factoringCompanyPrimaryContact=$('#addfactoringCompanyPrimaryContact').val();
        var factoringCompanyPrimaryContactTelephone=$('#addfactoringCompanyPrimaryContactTelephone').val();
        var factoringCompanyPrimaryContactExt=$('#addfactoringCompanyPrimaryContactExt').val();
        var factoringCompanyFax=$('#addfactoringCompanyFax').val();

        var factoringCompanySecondaryContact=$('#addfactoringCompanySecondaryContact').val();
        var factoringCompanySecondaryContactTelephone=$('#addfactoringCompanySecondaryContactTelephone').val();
        var factoringCompanySecondaryContactExt=$('#addfactoringCompanySecondaryContactExt').val();
        var factoringTollFree=$('#addfactoringTollFree').val();

        var factoringCompanyContactEmail=$('#addfactoringCompanyContactEmail').val();
        var factoringCompanycurrency=$('#addcurrency1').val();
        var factoringCompanyPaymentTerms=$('#addPaymentTerms1').val();
        var factoringCompanyTaxID=$('#addfactoringCompanyTaxID1').val();

        var factoringCompanyInternalNotes=$('#addfactoringCompanyInternalNotes').val();

    //alert(currencyName);
        $.ajax({
            url: base_path+"/admin/factoringCompany",
            type: "POST",
            datatype:"JSON",
            data: {
                _token: $("#_tokenaddFactoringCompany").val(),
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
                    swal.fire("Factoring Company added successfully.");
                    $("#addFactoringCompanyModal").modal("hide");
                    $.ajax({
                        type: "GET",
                        url: base_path+"/admin/getFactCompany",
                        // async: false,
                        // dataType:JSON,
                        success: function(text) {
                            // console.log(text);
                            createFactoringCompanyRows(text);
                            factoringCompanyResult = text;
                         }
                    });
                    $('#FacoringCompanyModal').modal('show');
                }else{
                    swal.fire("Factoring Company not added successfully.");
                }
            }
        });
    });
// // <!-- -------------------------------------------------------------------------over add customer factoringCompany ------------------------------------------------------------------------- -->   
// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  
$('#factoring_table_pagination').DataTable({

    "columnDefs": [
        {
            "targets": [ 12 ],
            "searchable": false,
            "sortable":false
        },
    ]

});
});

// $(document).ready(function() {

// });