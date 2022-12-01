<!------------------------------------------------------------------- get truck  modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="truckModal">
        <div class="modal-dialog custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Truck</h4>
                    <button type="button" class="close closeTruckModal" >&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- Row -->
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="table-responsive export-table">

                                            <a href="#addTruckModal" class="btn btn-primary" data-toggle="modal" data-target="#addDriverModal">Add</a>
                                            
                                            <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100"  style="width:100%;height:500px">

                                                <thead>
                                                    <tr>
                                                        <!-- <th>counter</th> -->
                                                        <th>NO</th>
                                                        <th>Truck</th>
                                                        <th>Truck Type</th>
                                                        <th>License Plate</th>
                                                        <th>Plate Expiry</th>
                                                        <th> Inspection Expiration</th>
                                                        <th>Status</th>
                                                        <th>Ownership</th>
                                                        <th>Mileage</th>
                                                        <th>Axles</th>
                                                        <th> Year</th>
                                                        <th> Fuel Type</th>
                                                        <th>Start Date </th>
                                                        <th>Deactivation Date </th>
                                                        <th> IFTA Truck</th>
                                                        <th> Registered State</th>
                                                        <th> Insurance Policy</th>
                                                        <th> Empty/Gross Weight</th>
                                                        <th> VIN</th>
                                                        <th>DOT Expiry Date</th>
                                                        <th>Transponder></th>
                                                        <th>Internal Notes </th>
                                                        <!-- <th><div><marquee width="100px" direction="left" height="17px" scrollamount="2"> Driver Balance</marquee></div></th> -->
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="truckTable">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
                        <button class="btn btn-primary" style="vertical-align:middle"><span>Export</span></button>
                    </form>
                    <button type="button" class="btn btn-secondary closeTruckModal" >Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

<!------------------------------------------------------------------- over truck  modal ------------------------------------------------------------------->
