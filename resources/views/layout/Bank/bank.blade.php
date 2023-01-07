<<<<<<< HEAD
=======
<?php 
	$userdata=Auth::user();
	$insertUser=$userdata->privilege['insertUser'];
    // $updateUser=$userdata->privilege['updateUser'];
    $deleteUser=$userdata->privilege['deleteUser'];
    $importUser=$userdata->privilege['importUser'];
    $exportUser=$userdata->privilege['exportUser'];
 ?> 
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341
<!------------------------------------------------------------------- Trailer modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="bankModal">
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Bank</h4>
                    <button type="button" class="button-24 bankClose" >&times;</button>
                </div>

                <div style="margin-top: 15px; margin-left: 15px;">
<<<<<<< HEAD
                    <a href="#" class="button-57" data-toggle="modal"data-target="#addDriverModal"><i class="fa fa-plus" aria-hidden="true"></i><span>Add</span></a>
                    <a class="button-57" data-toggle="modal"><i class="fa fa-file-excel-o" aria-hidden="true"></i></span><span>Export CSV</span></a>
                    <a class="button-57" data-toggle="modal"><i class="fa fa-upload" aria-hidden="true"></i></span><span>Upload File</span></a>
                    <a href="#contractCategoryModal" class="button-57_alt" data-toggle="modal" data-target="#contractCategoryModal"><i class="fa fa-id-card" aria-hidden="true"></i></span><span>Button 3</span></a>
                    <div class="searchbar" style="float: right; margin-right: 15px;">
                        <input type="text" placeholder="search" />
                        <!-- <div class="symbol">
                            
                            <svg class="lens">
                            <use xlink:href="#lens" />
                            </svg>
                        </div> -->
=======
                @if($insertUser== 1)
                    <a href="#" class="button-57_alt" ><i class="fa fa-plus" aria-hidden="true"></i><span>Add Bank</span></a>
                @endif 
                
                @if($deleteUser== 1)    
                    <a href="#" class="button-57_alt" ><i class="fa fa-repeat" aria-hidden="true"></i></span><span>Restore </span></a>
                @endif
                    <!-- <a class="button-57" data-toggle="modal"><i class="fa fa-file-excel-o" aria-hidden="true"></i></span><span>Export CSV</span></a>
                    <a class="button-57" data-toggle="modal"><i class="fa fa-upload" aria-hidden="true"></i></span><span>Upload File</span></a>
                    <a href="#contractCategoryModal" class="button-57_alt" data-toggle="modal" data-target="#contractCategoryModal"><i class="fa fa-id-card" aria-hidden="true"></i></span><span>Button 3</span></a> -->
                    <div class="searchbar" style="float: right; margin-right: 15px;">
                        <input type="text" placeholder="search" />
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341
                    </div>

                </div>
                <!-- Modal body -->
                <div class="modal-body" style="overflow-y: auto !important;">
                    <!-- Row -->
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">

                                <div class="table-responsive export-table">
                                    <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100 customtable">
<<<<<<< HEAD
                                        <thead>
                                        <tr>
=======
                                        <thead class="thead_th">
                                        <tr class="tr">
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341

                                            <th >No</th>
                                            <th >Name of Bank</th>
                                            <th >Address / Branch</th>
                                            <th >Account Holder Name</th>
                                            <th >Bank Account</th>
                                            <th >Bank Routing</th>
                                            <th >Opening Bal Dt </th>
                                            <th > Opening Balance</th>
                                            <th > Current Balance</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody id="bankTable">

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                           
                                            <th >No</th>
                                            <th >Name of Bank</th>
                                            <th >Address / Branch</th>
                                            <th >Account Holder Name</th>
                                            <th >Bank Account</th>
                                            <th >Bank Routing</th>
                                            <th >Opening Bal Dt </th>
                                            <th > Opening Balance</th>
                                            <th > Current Balance</th>
                                            <th>Action</th>
                                            </tr>
                                        </tfoot>
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
=======
                <form action="{{route('download-pdf')}}" method="post" target="__blank">
                    @csrf
                    @if($exportUser == 1)
                        <button class="button-29" style="vertical-align:middle"><span>Export</span></button>
                    @endif
                </form>
>>>>>>> a9578ab2c12b05e4d51c8af156edfc7e4ed29341
                    <button type="button" class="button-29 bankClose">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>