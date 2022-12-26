var base_path = $("#url").val();
$(document).ready(function() {

// <!-- -------------------------------------------------------------------------start ------------------------------------------------------------------------- -->  
    $('.EquipmentTypeClose').click(function(){
        $('#EquipmentTypeModal').modal('hide');
    });
    $('.addEquipmentTypeClose').click(function(){
        $('#addEquipmentTypeModal').modal('hide');
    });
    $('#addEquipmentType').click(function(){
        $('#addEquipmentTypeModal').modal('show');
    });
// <!-- -------------------------------------------------------------------------Get  EquipmentType ------------------------------------------------------------------------- -->  
   
    $('#EquipmentType_navbar').click(function(){
        $.ajax({
            type: "GET",
            url: base_path+"/admin/getEquipmentType",
            async: false,
            success: function(text) {
                console.log(text);
                createEquipmentTypeRows(text);
              }
        });
        $('#EquipmentTypeModal').modal('show');
    });


// <!-- -------------------------------------------------------------------------over Get  EquipmentType ------------------------------------------------------------------------- --> 
// <!-- -------------------------------------------------------------------------function getr EquipmentType ------------------------------------------------------------------------- --> 
    
    function createEquipmentTypeRows(Result) {
        var len1 = 0;
        var no=1;
            if (Result != null) {
                $("#EquipmentTypeTable").html('');
                len1 = Result.EquipmentType.length;
                if (len1 > 0) {
                    for (var i = len1-1; i >= 0; i--) { 
                        
                        len2 = Result.EquipmentType[i].equipment.length;
                        var main_Id =Result.EquipmentType[i].equipment._id;
                        var com_Id =Result.EquipmentType[i].equipment.companyID;

                        if (len2 > 0) {
                            for (var j = len2-1; j >= 0; j--) {

                                var  id=Result.EquipmentType[i].equipment[j]._id;
                                var  equipmentType=Result.EquipmentType[i].equipment[j].equipmentType;
                               
                                var deleteStatus =Result.EquipmentType[i].equipment[j].deleteStatus;

                                if(deleteStatus == "NO" || deleteStatus == "No"){
                                        var Str = "<tr class='tr' data-id=" + (i + 1) + ">" +
                                        "<td data-field='no'>" + no + "</td>" +
                                        "<td data-field='equipmentType'>" + equipmentType + "</td>" +
                                       
                                        "<td style='text-align:center'>"+
                                            "<a class='mt-2 btn btn-primary fs-14 text-white editCurrency'  title='Edit1' data-Id='"+id+"' data-truckType='' ><i class='fe fe-edit'></i></a>&nbsp"+
                                        "</td></tr>";
            
                                    $("#EquipmentTypeTable").append(Str);
                                    no++;
                                }
                            }
                        }
                    }
                    
                }else {
                    var Str = "<tr data-id=" + i + ">" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";
        
                    $("#EquipmentTypeTable").append(Str);
                }
            
            }else {
            var Str = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#EquipmentTypeTable").append(Str);
        }
    }
 // <!-- -------------------------------------------------------------------------over Get Equipment Type  ------------------------------------------------------------------------- -->  
 // <!-- -------------------------------------------------------------------------add Equipment Type   ------------------------------------------------------------------------- -->  
   
    $("#saveEquipmentType").click(function(){
        var EquipmentType_name=$('#EquipmentType_name').val();
        if(EquipmentType_name=='')
        {
            swal.fire( "Enter Equipment Type");
            //swal.fire({title: 'Please Enter Name',text: 'Redirecting...',timer: 1500,buttons: false,});
            $('#EquipmentType_name').focus();
            return false;
            
        } 
    //alert(currencyName);
        $.ajax({
            url: base_path+"/admin/addEquipmentType",
            type: "POST",
            datatype:"JSON",
            data: {
                _token: $("#_tokenEquipmentType").val(),
                EquipmentType_name: EquipmentType_name,
            },
            cache: false,
            success: function(Result){
                console.log(Result);
                if(Result){
                    swal.fire( "Equipment Type added successfully.");
                    // alert("Equipment Type added successfully.");
                    $("#addEquipmentTypeModal").modal("hide");
                    $.ajax({
                        type: "GET",
                        url: base_path+"/admin/getEquipmentType",
                        async: false,
                        success: function(text) {
                            // console.log(text);
                            createEquipmentTypeRows(text);
                          }
                    });
                    $('#EquipmentTypeModal').modal('show');
                }else{
                    swal.fire("Equipment Type not added successfully.");
                }
            }
        });
    });


// <!-- -------------------------------------------------------------------------over add Equipment Type   ------------------------------------------------------------------------- --> 


// <!-- -------------------------------------------------------------------------End------------------------------------------------------------------------- -->  
});