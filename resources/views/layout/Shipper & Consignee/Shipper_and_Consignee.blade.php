<!------------------------------------------------------------------- Shipper & Consignee modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="Shipper_and_ConsigneeModal">
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Shipper & Consignee</h4>
                    <button type="button" class="button-24 closeShipperModal">&times;</button>
                </div>

                <!-- <div style="margin-top: 15px; margin-left: 15px;">
                    <a href="#" class="button-57" data-toggle="modal" data-target="#"><i class="fa fa-plus" aria-hidden="true"></i><span>Button 1</span></a>
                    <a href="#" class="button-57" data-toggle="modal" data-target="#"><i class="fa fa-sliders" aria-hidden="true"></i></span><span>Button 2</span></a>
                    <a href="" class="button-57_alt" data-toggle="modal" data-target=""><i class="fa fa-id-card" aria-hidden="true"></i></span><span>Button 3</span></a>
                </div> -->
                <!-- Modal body -->
                <div class="modal-body" style="overflow-y: auto !important;">
                    <!-- Row -->
                    <div class="row">
								<div class="col-md-12">
									<div class="card">
                                    <div class="tab-menu-heading border-bottom-0">
													<div class="tabs-menu4 border-bottomo-sm">
														<!-- Tabs -->
														<nav class="nav d-sm-flex d-block">
															<a class="nav-link border border-bottom-0 br-sm-5 me-2 active shipper_tab" data-bs-toggle="tab" href="#tab25" style="width: 49%;"> Shipper </a>
															<a class="nav-link border border-bottom-0 br-sm-5 me-2 consignee_tab" data-bs-toggle="tab" href="#tab26" style="width: 49%;">Consignee</a>
														</nav>
													</div>
												</div>
										<div class="card-body p-6">
											<div class="panel panel-primary">
												
												<div class="panel-body tabs-menu-body">
													<div class="tab-content">
														<div class="tab-pane active " id="tab25">
                                                            <div class="table-responsive export-table">

                                                                <a href="#addDriverModal" class="btn btn-primary" data-toggle="modal" data-target="#addDriverModal">Add</a>
                                                                <input type="file" class="form-control float-right" id="Shipperfiles" name="Shipperfiles[]" multiple="" accept=".png, .jpg, .jpeg, .pdf" style="width: auto;">
                                                                <a href="#setupDriverModal" class="btn btn-primary float-right" data-toggle="modal" data-target="#viewDriverApplicationModal"> XLSX format</a> &nbsp;&nbsp;&nbsp;

                                                                <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100" style="height:500px; width:1000px;">

                                                                    <thead>
                                                                        <tr>
                                                                            <!-- <th>counter</th> -->
                                                                            <th >NO</th>
                                                                            <th >Shipper Name</th>
                                                                            <th >Address</th>
                                                                            <th >Location</th>
                                                                            <th >Postal / Zip</th>
                                                                            <th >Contact Name</th>
                                                                            <th >Contact Email</th>
                                                                            <th >Telephone</th>
                                                                            <th >Ext</th>
                                                                            <th >Toll Free</th>
                                                                            <th >Fax</th>
                                                                            <th >Shipping Hours </th>
                                                                            <th >Appt</th>
                                                                            <th >Major Instructions/Directions</th>
                                                                            <th >Status</th>
                                                                            <th >Shipping Notes</th>
                                                                            <th >Internal Notes</th>

                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="shipperTable">

                                                                    </tbody>
                                                                </table>
                                                            </div>
														</div>
														<div class="tab-pane " id="tab26">
                                                            <div class="table-responsive export-table">

                                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addDriverModal">Add</a>
                                                                <input type="file" class="form-control float-right" id="Shipperfiles" name="Shipperfiles[]" multiple="" accept=".png, .jpg, .jpeg, .pdf" style="width: auto;">
                                                                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#"> XLSX format</a> &nbsp;&nbsp;&nbsp;

                                                                <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100" style="height:500px; width:1000px;">

                                                                    <thead>
                                                                        <tr>
                                                                            <!-- <th>counter</th> -->
                                                                            <th >NO</th>
                                                                            <th >Consignee Name</th>
                                                                            <th >Address</th>
                                                                            <th >Location</th>
                                                                            <th >Postal / Zip</th>
                                                                            <th >Contact Name</th>
                                                                            <th >Contact Email</th>
                                                                            <th >Telephone</th>
                                                                            <th >Ext</th>
                                                                            <th >Toll Free</th>
                                                                            <th >Fax</th>
                                                                            <th >Shipping Hours </th>
                                                                            <th >Appt</th>
                                                                            <th >Major Instructions/Directions</th>
                                                                            <th >Status</th>
                                                                            <th >Shipping Notes</th>
                                                                            <th >Internal Notes</th>

                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="consigneeTable">

                                                                    </tbody>
                                                                </table>
                                                            </div>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                    <!-- <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                

                                        <div class="table-responsive export-table">
                                            <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100 customtable">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th style="">Name</th>
                                                        <th>Email</th>
                                                        <th>Location</th>
                                                        <th>Social Security No</th>
                                                        <th>Date of Birth</th>
                                                        <th>Date of Hire</th>
                                                        <th>License No</th>
                                                        <th>LIS</th>
                                                        <th>License Exp.Date</th>
                                                        <th>Driver Balance</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="">

                                                </tbody>
                                            </table>
                                        </div>
                               
                            </div>
                        </div>
                    </div> -->
                    <!-- End Row -->
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <form action="{{route('driver-pdf')}}" method="post" target="__blank">
                        @csrf
                        <button class="button-29 btn btn-success" style="vertical-align:middle"><span>Export</span></button>
                    </form>
                    <button type="button" class="button-29 btn btn-secondary closeShipperModal" >Close</button>
                </div>
            </div>
        </div>
    </div>

</div>