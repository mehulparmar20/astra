<!------------------------------------------------------------------- Trailer modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="FuelVendorModal">
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Fuel Vendor</h4>
                    <button type="button" class="button-24 fuelVendorClose" >&times;</button>
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
                                                <th>NO</th>
                                                <th>Name</th>
                                                <th>Opening Date</th>
                                                <th>Opening Amount</th>
                                                <th>Current Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="FuelVendorTable">
                                         
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
                <form action="{{route('driver-pdf')}}" method="post" target="__blank">
                        @csrf
                        <button class="button-29" style="vertical-align:middle"><span>Export</span></button>
                    </form>
                    <button type="button" class="button-29 fuelVendorClose">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>