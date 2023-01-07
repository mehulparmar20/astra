<?php 
	$userdata=Auth::user();
	$insertUser=$userdata->privilege['insertUser'];
    // $updateUser=$userdata->privilege['updateUser'];
    $deleteUser=$userdata->privilege['deleteUser'];
    $importUser=$userdata->privilege['importUser'];
    $exportUser=$userdata->privilege['exportUser'];
 ?> 
<!------------------------------------------------------------------- Trailer modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <!-- <div class="modal fade" data-backdrop="static" id="Fuel Receipts"> -->
    <div class="modal fade" data-backdrop="static" id="fuelReceiptModal">
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Fuel Receipts</h4>
                    <button type="button" class="button-24 fuelReceiptClose" >&times;</button>
                </div>
<div>
                <div style="margin-top: 15px; margin-left: 15px;">
                    @if($insertUser== 1)
                        <a href="#" class="button-57_alt" ><i class="fa fa-plus" aria-hidden="true"></i><span>Add Fuel Receipts</span></a>
                    @endif 
                    
                    @if($deleteUser== 1)    
                        <a href="#" class="button-57_alt" ><i class="fa fa-repeat" aria-hidden="true"></i></span><span>Restore </span></a>

                    @endif
                    <!-- <a class="button-57" data-toggle="modal"><i class="fa fa-file-excel-o" aria-hidden="true"></i></span><span>Export CSV</span></a>
                    <a class="button-57" data-toggle="modal"><i class="fa fa-upload" aria-hidden="true"></i></span><span>Upload File</span></a>
                    <a href="#contractCategoryModal" class="button-57_alt" data-toggle="modal" data-target="#contractCategoryModal"><i class="fa fa-id-card" aria-hidden="true"></i></span><span>Button 3</span></a>
                    <div class="searchbar" style="float: right; margin-right: 15px;">
                        <input type="text" placeholder="search" /> -->
                        <!-- <div class="symbol">
                            
                            <svg class="lens">
                            <use xlink:href="#lens" />
                            </svg>
                        </div> -->
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
                                        <thead class="thead_th">
                                        <tr >
                                           
                                            <th scope="col" col width="50"> <input type="checkbox" id="checkall" class="checkall" onclick="checkall()"></th>
                                            <!-- <th scope="col" col width="50"> <input type="checkbox" disabled></th>     -->

                                            <th >No</th>
                                            <th >Driver Name</th>
                                            <th >Transaction Date </th>
                                            <th >Card Number </th>
                                            <th >Truck Number </th>
                                            <th >Driver Number</th>
                                            <th >Transaction Time</th>
                                            <th >Location Name </th>
                                            <th >Location City</th>
                                            <th > Location State </th>
                                            <th >Fuel Vendor</th>
                                            <th >Fuel Type</th>
                                            <th >Amount</th>
                                            <th >Quantity</th>
                                            <th >Total Amount </th>
                                            <th >Transaction Discount</th>
                                            <th >Transaction Fee</th>
                                            <th >Transaction Gross </th>
                                            <th >Invoice No </th>
                                            <th >Action</th>
                                        </tr>
                                        </thead>

                                        <tbody id="FuelReceTable">

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th ></th>
                                            <th >No</th>
                                            <th >Driver Name</th>
                                            <th >Transaction Date </th>
                                            <th >Card Number </th>
                                            <th >Number </th>
                                            <th >Driver Number</th>
                                            <th >Transaction Time</th>
                                            <th >Location Name </th>
                                            <th >Location City</th>
                                            <th > Location State </th>
                                            <th >Fuel Vendor</th>
                                            <th >Fuel Type</th>
                                            <th >Amount</th>
                                            <th >Quantity</th>
                                            <th >Total Amount </th>
                                            <th >Transaction Discount</th>
                                            <th >Transaction Fee</th>
                                            <th >Transaction Gross </th>
                                            <th >Invoice No </th>
                                            <th >Action</th>
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
                <form action="{{route('download-pdf')}}" method="post" target="__blank">
                    @csrf
                    @if($exportUser == 1)
                        <button class="button-29" style="vertical-align:middle"><span>Export</span></button>
                    @endif
                </form>
                    <button type="button" class="button-29 fuelReceiptClose">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>