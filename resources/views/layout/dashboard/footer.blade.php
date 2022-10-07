<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright © 2022 <a href="#">Noa</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a
                    href="#"> Spruko </a> All rights reserved
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS -->
<script src="{{URL::to('/')}}/assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{URL::to('/')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SIDE-MENU JS-->
<script src="{{URL::to('/')}}/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- APEXCHART JS -->
<script src="{{URL::to('/')}}/assets/js/apexcharts.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{URL::to('/')}}/assets/plugins/select2/select2.full.min.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{URL::to('/')}}/assets/js/circle-progress.min.js"></script>

<!-- INTERNAL DATA-TABLES JS-->
<script src="{{URL::to('/')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- INDEX JS -->
<script src="{{URL::to('/')}}/assets/js/index1.js"></script>

<!-- REPLY JS-->
<script src="{{URL::to('/')}}/assets/js/reply.js"></script>

<!-- PERFECT SCROLLBAR JS-->
<script src="{{URL::to('/')}}/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/p-scroll/pscroll.js"></script>

<!-- STICKY JS -->
<script src="{{URL::to('/')}}/assets/js/sticky.js"></script>

<!-- COLOR THEME JS -->
<script src="{{URL::to('/')}}/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{URL::to('/')}}/assets/js/custom.js"></script>

<!-- dashboard js -->
<script src="{{URL::to('/')}}/assets/js/js/form.js"></script>

<!--  BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS -->
<script src="{{URL::to('/')}}/assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{URL::to('/')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="{{URL::to('/')}}/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{URL::to('/')}}/assets/plugins/select2/select2.full.min.js"></script>

<!-- DATA TABLE JS-->
<script src="{{URL::to('/')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/js/jszip.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>

<!-- TABLE EDITS JS-->
<script src="{{URL::to('/')}}/assets/plugins/jQuery-table-edits/table-edits.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/jQuery-table-edits/table-edits.js"></script>

<script type="text/javascript">
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

$(document).ready(function() {
    var response = '';
    $.ajax({
        type: "GET",
        url: "/admin/user",
        async: false,
        success: function(text) {
            createRows(text);
            response = text;
        }
    });

});

function createRows(response) {
    var len = 0;
    $('#table1').empty(); // Empty <tbody>
    if (response != null) {
        console.log(response.length);
        len = response.length;
    }

    if (len > 0) {
        for (var i = 0; i < len; i++) {
            var id = response[i].id;
            var email = response[i].userEmail;
            var username = response[i].userName;
            var firstname = response[i].userFirstName;
            var lastname = response[i].userLastName;
            var address = response[i].userAddress;
            var location = response[i].userLocation;
            var zip = response[i].userZip;
            var telephone = response[i].userTelephone;
            var ext = response[i].userExt;
            var tollfree = response[i].TollFree;
            var fax = response[i].userFax;
            var tr_str = "<tr data-id=" + (i + 1) + ">" +
                "<td data-field='id'>" + (i + 1) + "</td>" +
                "<td data-field='email'>" + email + "</td>" +
                "<td data-field='username'>" + username + "</td>" +
                "<td data-field='fistname'>" + firstname + "</td>" +
                "<td data-field='lastname'>" + lastname + "</td>" +
                "<td data-field='address'>" + address + "</td>" +
                "<td data-field='location'>" + location + "</td>" +
                "<td data-field='zip'>" + zip + "</td>" +
                "<td data-field='telephone'>" + telephone + "</td>" +
                "<td data-field='ext'>" + ext + "</td>" +
                "<td data-field='tollfree'>" + tollfree + "</td>" +
                "<td data-field='fax'>" + fax + "</td>" +
                "<td style='width: 100px'><a class='btn btn-primary fs-14 text-white edit-icn' title='Edit'><i class='fe fe-edit'></i></a></td></tr>";

            $("#table1").append(tr_str);
        }
    } else {
        var tr_str = "<tr data-id=" + i + ">" +
            "<td align='center' colspan='4'>No record found.</td>" +
            "</tr>";

        $("#table1").append(tr_str);
    }
}
</script>

<!-- INTERNAL DATATABLES JS -->
<script src="{{URL::to('/')}}/assets/js/table-editable.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{URL::to('/')}}/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/p-scroll/pscroll.js"></script>

<!-- STICKY JS -->
<script src="{{URL::to('/')}}/assets/js/sticky.js"></script>

<!-- COLOR THEME JS -->
<script src="{{URL::to('/')}}/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{URL::to('/')}}/assets/js/custom.js"></script>

<script>
(function() {
    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    };
})();
$('#select-all').click(function(event) {
    if (this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;
        });
    }
});
</script>



</body>

</html>