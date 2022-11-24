var base_path = $("#url").val();
$(document).ready(function() {
// <!-- -------------------------------------------------------------------------Get Currency  ------------------------------------------------------------------------- -->  

    
    //alert('customer');
    // var customerResponse = '';
    // $.ajax({
    //     type: "GET",
    //     url: base_path+"/admin/getCurrency",
    //     async: false,
    //     //dataType:JSON,
    //     success: function(text) {
    //         createGetCurrencyRows(text);
    //         currencyResult = text;
    //     }
    // });


    function createGetCurrencyRows(currencyResult) {
        var custlen1 = 0;
            // $('#currencyTable').empty(); // Empty <tbody>
            if (currencyResult != null) {
                custlen1 = currencyResult.currency.length;

                $("#currencyTable").html('');

                if (custlen1 > 0) {
                    var no=1;
                    for (var i = 0; i < custlen1; i++) {  
                        var currencyType =currencyResult.currency[i].currencyType;
                        var currencyId =currencyResult.currency[i]._id;
                        var currencyStr = "<tr data-id=" + (i + 1) + ">" +
                        //  "<td id='id1'>" + id+ "&"+driverId + "</td>" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td data-field='customerName' >" + currencyType + "</td>" +
                            "<td style='text-align:center'>"+
                                "<a class='mt-2 btn btn-primary fs-14 text-white editCurrency'  title='Edit1' data-currencyId='"+currencyId+"' data-currencyType='"+currencyType+"' ><i class='fe fe-edit'></i></a>&nbsp"+
                            "</td></tr>";

                        $("#currencyTable").append(currencyStr);
                        no++;
                        
                    }
                } else {
                    var currencyStr = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#currencyTable").append(currencyStr);
                }
            }else {
            var tr_str1 = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#currencyTable").append(currencyStr);
        }
        // $("#CurrencyModal").modal("show");
    }

    $("#currency_navbar").click(function(){
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getCurrency",
            async: false,
            //dataType:JSON,
            success: function(text) {
                createGetCurrencyRows(text);
                currencyResult = text;
            }
        });
        $("#CurrencyModal").modal("show");
    });


// <!-- -------------------------------------------------------------------------end Get Currency  ------------------------------------------------------------------------- -->  
    // <!-- ------------------------------------------------------------------------- add  currency ------------------------------------------------------------------------- -->
    $("#addCurrencyModal").click(function(){
        
        $("#plusCurrencyModal").modal("show");
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
                    swal.fire("Done!", "Currency added successfully", "success");
                    // alert("Currency added successfully.");
                    $("#plusCurrencyModal").modal("hide");
                    $.ajax({
                        type: "GET",
                        url: base_path+"/admin/getCurrency",
                        success: function(text) {
                            createGetCurrencyRows(text);
                            currencyResult = text;
                        }
                    });	
                }else{
                    swal.fire("Try Again!", "Currency not added successfully", "error");
                    // alert("Currency not added successfully.");
                }
            }
        });
    });

// <!-- -------------------------------------------------------------------------over add  currency ------------------------------------------------------------------------- -->

// <!-- ------------------------------------------------------------------------- Edit  currency ------------------------------------------------------------------------- -->
$("body").on("click",".editCurrency",function(){
// $(".editCurrency").click(function(){
    var currencyId = $(this).attr("data-currencyId");
    var currencyType = $(this).attr("data-currencyType");
    $("#EditCurrencyId").val(currencyId);
    $("#editCurrencyrName").val(currencyType);
    $("#CurrencyModal").modal("hide");
    $("#editCurrencyModal").modal("show");
});
// <!-- -------------------------------------------------------------------------over Edit  currency ------------------------------------------------------------------------- -->
// <!-- ------------------------------------------------------------------------- update  currency ------------------------------------------------------------------------- -->
$(".CurrencyrDataUpdate").click(function(){
    var currencyId =$("#EditCurrencyId").val();
    var currencyType = $("#editCurrencyrName").val();

    $.ajax({
        url: base_path+"/admin/updateCurrency",
        type: "POST",
        datatype:"JSON",
        data: {
            _token: $("#_tokenEditCurrency").val(),
            currencyId: currencyId,
            currencyType: currencyType,
        },
        cache: false,
        success: function(response){
            // var responsenew = JSON.parse(response);
                // if(response.statusCode===200){
                    $("#editCurrencyModal").modal("hide");
                    swal.fire("Done!", 'Currency Updated', "success");
                    
                    $("#CurrencyModal").modal("show");
                    $.ajax({
                        type: "GET",
                        url: base_path+"/admin/getCurrency",
                        success: function(text) {
                            createGetCurrencyRows(text);
                            currencyResult = text;
                        }
                    });			
                // }
            },
            error: function(data){
                    swal.fire("Error!", 'Currency Not Updated', "error"); 
            }   
    });
});
// <!-- -------------------------------------------------------------------------over update  currency ------------------------------------------------------------------------- -->


});