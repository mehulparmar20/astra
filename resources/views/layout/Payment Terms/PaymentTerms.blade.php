<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341
<?php 
	$userdata=Auth::user();
	$insertUser=$userdata->privilege['insertUser'];
    // $updateUser=$userdata->privilege['updateUser'];
    $deleteUser=$userdata->privilege['deleteUser'];
    $importUser=$userdata->privilege['importUser'];
    $exportUser=$userdata->privilege['exportUser'];
 ?> 
<<<<<<< HEAD
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341
=======
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341
<!------------------------------------------------------------------- driver modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="PaymentTermsModal2" >
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Payment Terms</h4>
                    <button type="button" class="button-24 PaymentTermsClose" data-dismiss="modal">&times;</button>
                </div>

                <div style="margin-top: 15px; margin-left: 15px;">
<<<<<<< HEAD
<<<<<<< HEAD
                <a href="#" class="button-57" id="AddPaymentTerms"><i class="fa fa-plus" aria-hidden="true"></i><span>Add PaymentTerms</span></a>
=======
=======
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341
                @if($insertUser== 1)
                    <a href="#" class="button-57_alt" id="AddPaymentTerms"><i class="fa fa-plus" aria-hidden="true"></i><span>Add PaymentTerms</span></a>
                @endif 
                
                @if($deleteUser== 1)    
                    <a href="#" class="button-57_alt" ><i class="fa fa-repeat" aria-hidden="true"></i></span><span>Restore </span></a>

                @endif
                
<<<<<<< HEAD
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341
=======
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341

                </div>
                <!-- Modal body -->
                <div class="modal-body" style="overflow-y: auto !important;">
                    <!-- Row -->
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                

                                        <div class="table-responsive export-table">
                                            <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100 customtable">

                                                <thead class="thead_th">
                                                    <tr class="tr">
                                                        <th>NO</th>
                                                        <th>Name</th>
                                                        <th>Location</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="PaymentTermsTable">

                                                </tbody>
                                            </table>
                                        </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
<<<<<<< HEAD
<<<<<<< HEAD
                <form action="{{route('driver-pdf')}}" method="post" target="__blank">
                        @csrf
                        <button class="button-29" style="vertical-align:middle"><span>Export</span></button>
                    </form>
=======
=======
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341
                <form action="{{route('download-pdf')}}" method="post" target="__blank">
                    @csrf
                    @if($exportUser == 1)
                        <button class="button-29" style="vertical-align:middle"><span>Export</span></button>
                    @endif
                </form>
<<<<<<< HEAD
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341
=======
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341
                    <button type="button" class="button-29 branchOfficeClose" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-------------------------------------------------------------------over driver modal------------------------------------------------------------------->

