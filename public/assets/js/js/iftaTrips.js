var base_path = $("#url").val();
$(document).ready(function() {
    $('.closeIftaTrip').click(function(){
        $('#IftaTripModalList').modal('hide');
    });
   
    $('#iftaTrip_navbar').click(function(){
        // alert();
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getIftaTrip",
            async: false,
            //dataType:JSON,
            success: function(text) {
                //alert();
                // console.log(text);
                createIftaTripRows(text);
                IftaTripResult = text;
             }
        });
        $('#IftaTripModalList').modal('show');
    });
    function createIftaTripRows(IftaTripResult)
    {
        if (IftaTripResult != null) 
        {                
            IftaTriplen = IftaTripResult.load.length;
            $("#iftaTripTable").html('');
            if (IftaTriplen > 0) 
            {                   
                var no=1;
                for (var i = IftaTriplen-1; i >= 0; i--) 
                {  
                    var comId =IftaTripResult.companyID;
                    var IftaTripId =IftaTripResult.load[i]._id;                 
                    var deleteStatus =IftaTripResult.load[i].deleteStatus;
                    if(deleteStatus == "NO")
                    {
                            var Iftaloadtr = "<tr data-id=" + (i + 1) + ">" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td data-field='transectionDate' >" + deleteStatus + "</td>" +
                       
                            "<td style='text-align:center'>"+
                                

                                "<a class='mt-2 button-29 fs-14 text-white edit_modal_iftaTrip'  title='Edit1' data-tripId='"+IftaTripId+"' data-compID='"+comId+"' ><i class='fe fe-edit'></i></a>&nbsp"+
                             

                            "</td></tr>";

                        $("#iftaTripTable").append(Iftaloadtr);
                        no++;
                    }
                }
            } 
            else 
            {
                    var Iftaloadtr = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#iftaTripTable").append(Iftaloadtr);
            }
            }
            else 
            {
                var Iftaloadtr = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";
                $("#iftaTripTable").append(Iftaloadtr);
            }
        }
});



