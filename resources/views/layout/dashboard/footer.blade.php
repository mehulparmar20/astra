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


<input type="hidden" value="{{url('/')}}" id="url" name="url">

<script src="{{URL::to('/')}}/assets/js/laravel.js"></script>


<!-- ------------------------------------------------------------------------- driver ------------------------------------------------------------------------- -->


<script type="text/javascript">
    $(document).ready(function() {
        var driverResponse = '';
        $.ajax({
            type: "GET",
            url: "/admin/driver",
            async: false,
            success: function(text) {
                createDriverRows(text);
                driverResponse = text;
            }
        });
        // console.log(driverResponse);
    });


    function createDriverRows(driverResponse) {

        console.log(driverResponse);
        var len1 = 0;
        $('#driverTable').empty(); // Empty <tbody>
        if (driverResponse != null) {
            len1 = driverResponse.length;
        }

        if (len1 > 0) {
           
           
            for (var i = 0; i < len1; i++) {
                 
                if(driverResponse[i].counter > 0){
                    counterLen=driverResponse[i].counter;
                    no=1;   
                     
                    for (var j = 0; j < counterLen; j++) {
                       
                        // var counter = driverResponse[i].counter;
                        var no = driverResponse[i]._id;
                        var name = driverResponse[i].driver[j].driverName;
                        var email = driverResponse[i].driver[j].driverEmail;
                        var location = driverResponse[i].driver[j].driverAddress;
                        var social_security_no = driverResponse[i].driver[j].driverSocial;
                        var date_of_birth = driverResponse[i].driver[j].dateOfbirth;
                        var date_of_hire = driverResponse[i].driver[j].dateOfhire;
                        var license_no = driverResponse[i].driver[j].driverLicenseNo;
                        var lis = driverResponse[i].driver[j].driverLicenseIssue;
                        var license_exp_date = driverResponse[i].driver[j].driverLicenseExp;
                        var driver_balance = driverResponse[i].driver[j].driverBalance;

                        var tr_str1 = "<tr data-id=" + (i + 1) + ">" +
                        // "<td data-field='counter'>" + counter + "</td>" +
                            "<td data-field='no'>" + no + "</td>" +
                            "<td data-field='name'>" + name + "</td>" +
                            "<td data-field='email'>" + email + "</td>" +
                            "<td data-field='location'>" + location + "</td>" +
                            "<td data-field='social_security_no'>" + social_security_no + "</td>" +
                            "<td data-field='date_of_birth'>" + date_of_birth + "</td>" +
                            "<td data-field='date_of_hire'>" + date_of_hire + "</td>" +
                            "<td data-field='license_no'>" + license_no + "</td>" +
                            "<td data-field='lis'>" + lis + "</td>" +
                            "<td data-field='license_exp_date'>" + license_exp_date + "</td>" +
                            "<td data-field='driver_balance'>" + driver_balance + "</td>" +

                            "<td style='width: 100px'><a class='btn btn-primary fs-14 text-white edit-icn' title='Edit'><i class='fe fe-edit'></i></a></td></tr>";

                        $("#driverTable").append(tr_str1);
                    } 
                }
               
                
            }
        } else {
            var tr_str1 = "<tr data-id=" + i + ">" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

            $("#driverTable").append(tr_str1);
        }
        // <!-- ------------------------------------------------------------------------- add driver  ------------------------------------------------------------------------- -->
        $('.driverDataSubmit').click(function(){
            var name = $('#name').val();
            var usernamee = $('#usernamee').val();
            var address = $('#address').val();
            var telephone = $('#telephone').val();
            var altTelephone = $('#altTelephone').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var location = $('#location').val();
            var zip = $('#zip').val();
            var status = $('#status').val();
            var socialSecurityNo = $('#socialSecurityNo').val();
            var dateOfBirth = $('#dateOfBirth').val();
            var dateOfHire = $('#dateOfHire').val();
            var licenseNo = $('#licenseNo').val();
            var licenseIssueState = $('#licenseIssueState').val();
            var licenseExpDate = $('#licenseExpDate').val();
            var lastMedical = $('#lastMedical').val();
            var nextMedical = $('#nextMedical').val();
            var lastDrugTest = $('#lastDrugTest').val();
            var nextDrugTest = $('#nextDrugTest').val();
            var passportExpiry = $('#passportExpiry').val();
            var fastCardExpiry = $('#fastCardExpiry').val();
            var hazmatExpiry = $('#hazmatExpiry').val();
            var rate = $('#rate').val();
            var currency = $('#currency').val();
            var recurrencePlus = $('#recurrencePlus').val();
            var recurrenceMin = $('#recurrenceMin').val();
            var terminationDate = $('#terminationDate').val();
            var driverBalance = $('#driverBalance').val();
            var internalNotes = $('#internalNotes').val();
            
            if(name == ''){
                alert("Please Enter Name");
                $('#name').focus();
                return false;
            }
            if(address == ''){
                alert("Please Enter Address");
                $('#address').focus();
                return false;
            }
            if(telephone == ''){
                alert("Please Enter Telephone No");
                $('#telephone').focus();
                return false;
            }
           
            if(location == ''){
                alert("Please Enter Location");
                $('#location').focus();
                return false;
            }
            if(zip == ''){
                alert("Please Enter zip");
                $('#zip').focus();
                return false;
            }
            if(licenseNo == ''){
                alert("Please Enter License No");
                $('#licenseNo').focus();
                return false;
            }
            if(licenseIssueState == ''){
                alert("Please Enter License Issue State");
                $('#licenseIssueState').focus();
                return false;
            }
            if(licenseExpDate == ''){
                alert("Please Enter License Exp Date");
                $('#licenseExpDate').focus();
                return false;
            }
            if(rate == ''){
                alert("Please Enter Rate");
                $('#rate').focus();
                return false;
            }
            if(currency  == ''){
                alert("Please Enter Currency");
                $('#currency').focus();
                return false;
            }
           
            
            
        });
    }
</script>
<!-- ------------------------------------------------------------------------- end of driver ------------------------------------------------------------------------- -->

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

</body>

</html>