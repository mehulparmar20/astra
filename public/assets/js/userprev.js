function changeTab(name) {
    for (i = 1; i <= 7; i++) {
        $("#tab-" + i).removeClass("active");
    }
    $("#" + name).addClass("active");
}

function managePriviladgeSelect(menu) {
    let menuArr = ['dashboard_priviladge_main', 'custom_priviladge_main', 'admin_priviladge_main', 'ifta_priviladge_main', 'account_priviladge_main', 'report_priviladge_main' ,'settlements_priviladge_main'];
    for (let i = 0; i <= 6; i++) {
        if (menu.id == menuArr[i]) {
            $('#'+ menuArr[i]).addClass('selectedpriviladge');
            continue;
        }
        $('#'+ menuArr[i]).removeClass('selectedpriviladge');
    }
}