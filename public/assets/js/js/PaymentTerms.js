var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
    $('.PaymentTermsClose').click(function(){
        $('#PaymentTermsModal2').modal('hide');
    });
    $('#AddPaymentTerms').click(function(){
        $('#PaymentTermsModal').modal('show');
    });
    $('.PaymentTermsModalCloseButton').click(function(){
        $('#PaymentTermsModal').modal('hide');
    });
// <!-- -------------------------------------------------------------------------Get fuelReceipt  ------------------------------------------------------------------------- -->  
   
    $('#PaymentTerms_navbar').click(function(){
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getPaymentTerms",
            async: false,
            success: function(text) {
                console.log(text);
                createPaymentTermsRows(text);
              }
        });
        $('#PaymentTermsModal2').modal('show');
    });


// <!-- -------------------------------------------------------------------------over Get fuelReceipt  ------------------------------------------------------------------------- --> 
// <!-- -------------------------------------------------------------------------function  ------------------------------------------------------------------------- --> 
    
    function createPaymentTermsRows(Result) {
        var len1 = 0;
        var no=1;
            if (Result != null) {
                $("#PaymentTermsTable").html('');
                len1 = Result.PaymentTterms.length;
                if (len1 > 0) {
                    for (var i = len1-1; i >= 0; i--) { 
                        
                        len2 = Result.PaymentTterms[i].payment.length;
                        var Id =Result.PaymentTterms[i].payment._id;
                        var Office_com_Id =Result.PaymentTterms[i].payment.companyID;

                        if (len2 > 0) {
                            for (var j = len2-1; j >= 0; j--) {

                                var payment_id =Result.PaymentTterms[i].payment[j]._id;
                                var paymentTerm =Result.PaymentTterms[i].payment[j].paymentTerm;
                                var paymentDays =Result.PaymentTterms[i].payment[j].paymentDays;
                                if(!paymentDays){
                                    var paymentDays ='';
                                }
                                var deleteStatus =Result.PaymentTterms[i].payment[j].deleteStatus;

                                if(deleteStatus == "NO" || deleteStatus == "No"){
                                        var PaymentTermsStr = "<tr class='tr' data-id=" + (i + 1) + ">" +
                                        "<td data-field='no'>" + no + "</td>" +
                                        "<td data-field='paymentTerm'>" + paymentTerm + "</td>" +
                                        "<td data-field='paymentDays'>" + paymentDays + "</td>" +
                                        "<td style='text-align:center'>"+
                                            "<a class='button-23  "+editPrivilege+"'  title='Edit1' data-Id='"+payment_id+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                                            "</a> <a class='delete1 button-23 "+delPrivilege+"' data-id="+ email +" title='Delete'><i class='fe fe-delete'></i></a>"+
                                            "</td></tr>";
            
                                    $("#PaymentTermsTable").append(PaymentTermsStr);
                                    no++;
                                }
                            }
                        }
                    }
                    
                }else {
                            var PaymentTermsStr = "<tr data-id=" + i + ">" +
                                "<td align='center' colspan='4'>No record found.</td>" +
                                "</tr>";
                
                            $("#PaymentTermsTable").append(PaymentTermsStr);
                }
            
            }else {
            var PaymentTermsStr = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#PaymentTermsTable").append(PaymentTermsStr);
        }
    }

   

// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  
});