function changeTab(name) {
  
    for (i = 1; i <= 7; i++) {
        console.log(i);
        $("#tab-" + i).removeClass("active");
    }
    console.log(name);
    $("#" + name).addClass("active");
}

function managePriviladgeSelect(menu) {
    console.log(menu);
    let menuArr = ['dashboard_priviladge_main', 'custom_priviladge_main', 'admin_priviladge_main', 'ifta_priviladge_main', 'account_priviladge_main', 'report_priviladge_main' ,'settlements_priviladge_main'];
    for (let i = 0; i <= 6; i++) {
        if (menu.id == menuArr[i]) {
            $('#'+ menuArr[i]).addClass('selectedpriviladge');
            continue;
        }
        $('#'+ menuArr[i]).removeClass('selectedpriviladge');
    }
}

function changeTab1(name) {
  
    for (i = 1; i <= 7; i++) {
        console.log(i);
        $("#tab1-" + i).removeClass("active");
    }
    console.log(name);
    $("#" + name).addClass("active");
}
// function changeTab1(name) {
   
//     for (i = 1; i <= 7; i++) {
//         console.log("test log");
//         $("#tab-" + i).removeClass("active");
//     }
//     $("#" + name).addClass("active");
// }
// function managePriviladgeSelect1(menu) {
//     let menuArr = ['dashboard_priviladge_main', 'custom_priviladge_main', 'admin_priviladge_main', 'ifta_priviladge_main', 'account_priviladge_main', 'report_priviladge_main'];
//     for (let i = 0; i <= 5; i++) {
//         if (menu.id == menuArr[i]) {
//             $('#'+ menuArr[i]).addClass('selectedpriviladge');
//             continue;
//         }
//         $('#'+ menuArr[i]).removeClass('selectedpriviladge');
//     }
// }

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
    // $('.bankClose').click(function(){
    //     $('#bankModal').modal('hide');
    // });


// <!-- -------------------------------------------------------------------------Get   ------------------------------------------------------------------------- -->  
   
    $('#UserPrivillege_navbar').click(function(){
       // alert();
        // $.ajax({
        //     type: "GET",
        //     url: base_path+"/admin/editPrivilege",
        //     async: false,
        //     //dataType:JSON,
        //     success: function (result) {
        //         console.log(result);
        //         $("#privilege-data1").html(result);
        //     }
        // });
        $('#UserPrivillegeModal').modal('show');
    });


// <!-- -------------------------------------------------------------------------over Get   ------------------------------------------------------------------------- --> 

});