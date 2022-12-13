<!------------------------------------------------------------------- Trailer modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="FuelCardModal">
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Fuel Card</h4>
                    <button type="button" class="button-24 fuelCardClose" >&times;</button>
                </div>

                <div style="margin-top: 15px; margin-left: 15px;">
                    <a href="#addDriverModal" class="button-57" data-toggle="modal"data-target="#addDriverModal"><i class="fa fa-plus" aria-hidden="true"></i><span>Add</span></a>

                </div>
                <!-- Modal body -->
                <div class="modal-body" style="overflow-y: auto !important;">
                    <!-- Row -->
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">

                                <div class="table-responsive export-table">
                                    <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100 customtable">
                                        <thead>
                                            <tr>
                                                <th scope="col" col width="40">No</th>
                                                <th scope="col" col width="100">Card Holder Name</th>
                                                <th scope="col" col width="100">IFTA Card No</th>
                                                <th scope="col" col width="100">CardType</th>
                                                <th scope="col" col width="40">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody id="FuelCardTable">

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Card Holder Name</th>
                                                <th>IFTA Card No</th>
                                                <th>Card Type</th>
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
                    <button type="button" class="button-29 fuelCardClose">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>