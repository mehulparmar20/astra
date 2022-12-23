var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
    $('.creditCardClose').click(function(){
        $('#creditCardModal').modal('hide');
    });


// <!-- -------------------------------------------------------------------------Get fuelReceipt  ------------------------------------------------------------------------- -->  
   
    $('#creditCard_navbar').click(function(){
        //alert();
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getcreditCard",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                //console.log(text);
                createCreditCardRows(text);
                creditCardResult = text;
              }
        });
        $('#creditCardModal').modal('show');
    });


// <!-- -------------------------------------------------------------------------over Get fuelReceipt  ------------------------------------------------------------------------- --> 
// <!-- -------------------------------------------------------------------------function  ------------------------------------------------------------------------- --> 
    
// get truck
    function createCreditCardRows(creditCardResult) {
        var creditCardlen = 0;
        var no=1;
        //alert(FuelVendorResult);
            if (creditCardResult != null) {
                $("#creditCardTable").html('');
                creditCardlen = creditCardResult.length;
alert(creditCardlen);
                if (creditCardlen > 0) {
                    for (var i = creditCardlen-1; i >= 0; i--) { 
                        
                        admin_credit_len = creditCardResult[i].admin_credit.length;
                        var Id =creditCardResult[i]._id;
                        var com_Id =creditCardResult[i].companyID;
                        //alert(bankAdminlen);
                        if (admin_credit_len > 0) {
                            for (var j = admin_credit_len-1; j >= 0; j--) {

                                var admin_bank_Id =creditCardResult[i].admin_credit[j]._id;
                                var  Name=creditCardResult[i].admin_credit[j].Name;
                                var  displayName=creditCardResult[i].admin_credit[j].displayName;
                                var  cardType=creditCardResult[i].admin_credit[j].cardType;
                                var  cardHolderName=creditCardResult[i].admin_credit[j].cardHolderName;
                                var  cardNo=creditCardResult[i].admin_credit[j].cardNo;
                                var  openingBalanceDt=creditCardResult[i].admin_credit[j].openingBalanceDt;
                                var  cardLimit=creditCardResult[i].admin_credit[j].cardLimit;
                                var  openingBalance=creditCardResult[i].admin_credit[j].openingBalance;
                                // var openingBalance=parseFloat(openingBalance).toFixed(2);
                                var deleteStatus =creditCardResult[i].admin_credit[j].deleteStatus;

                                if(deleteStatus == "NO"){
                                        //alert("ff");
                                        var creditCardStr = "<tr data-id=" + (i + 1) + ">" +
                                        "<td data-field='no'>" + no + "</td>" +
                                        "<td data-field='Name' >" + Name + "</td>" +
                                        "<td data-field='displayName' >" + displayName + "</td>" +
                                        "<td data-field='cardType' >" + cardType + "</td>" +
                                        "<td data-field='cardHolderName' >" + cardHolderName + "</td>" +
                                        "<td data-field='cardNo' >" + cardNo + "</td>" +
                                        "<td data-field='openingBalanceDt' >" + openingBalanceDt + "</td>" +
                                        "<td data-field='cardLimit' >" + cardLimit + "</td>" +
                                        "<td data-field='openingBalance' >" + openingBalance + "</td>" +
                                       
                                        "<td style='text-align:center'>"+
                                            "<a class='mt-2 btn btn-primary fs-14 text-white editCurrency'  title='Edit1' data-Id='"+admin_bank_Id+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                                        "</td></tr>";
            
                                    $("#creditCardTable").append(creditCardStr);
                                    no++;
                                }
                            }
                        }
                    }
                    
                }else {
                            var creditCardStr = "<tr data-id=" + i + ">" +
                                "<td align='center' colspan='4'>No record found.</td>" +
                                "</tr>";
                
                            $("#creditCardTable").append(creditCardStr);
                }
            
            }else {
            var creditCardStr = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#creditCardTable").append(creditCardStr);
        }
    }

   

// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  
});