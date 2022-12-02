<!------------------------------------------------------------------- get truck  modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="truckModal">
        <div class="modal-dialog custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Truck</h4>
                    <button type="button" class="closeTruckModal" >&times;</button>
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

                                            <!-- <a href="#addTruckModal" class="btn btn-primary" data-toggle="modal" data-target="#addTruckModal">Add</a> -->
                                            <button type="button" class="btn btn-primary btn-lg addtruckModal" >ADD</button>
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
                    <!-- <form action="{{route('driver-pdf')}}" method="post" target="__blank">
                        @csrf
                        <button class="btn btn-primary" style="vertical-align:middle"><span>Export</span></button>
                    </form> -->
                    <button type="button" class="btn btn-secondary closeTruckModal" >Close</button>
                    
                </div>
            </div>
        </div>
    </div>

</div>

<!------------------------------------------------------------------- over truck  modal ------------------------------------------------------------------->
<!------------------------------------------------------------------  add driver modal ------------------------------------------------------------------>

 <!------------------------------------------------------------------- add truck  modal ------------------------------------------------------------------->
<div class="container">

<div class="modal fade" data-backdrop="static" id="addTruckModal" role="dialog">
    <div class="modal-dialog custom_modal" role="document">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                    <h4 class="modal-title">Add Truck</h4>
                    <button type="button" class="closeAddTruckModal" >&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- Row -->
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form>
                                            <input type="hidden" name="_token" id="_tokenTruck" value="{{ csrf_token() }}" />
                                            <!-- row 1 -->
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label>Truck Number <span style="color:#ff0000">*</span></label>
                                                    <div>
                                                        <input class="form-control" placeholder="Truck Number" type="text" id="truck_number" name="truck_number" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="trucktype">Truck Type <span style="color:#ff0000">*</span>&nbsp; <span class="glyphicon glyphicon-plus-sign" id="addTruckType" ></span></label>
                                                        <div class="dropdown show">
                                                            <input class="form-control truckTypeSet" list="truckTypeSet" name="truckType" id="truckType">
                                                            <datalist id="truckTypeSet" class="truckTypeSet">
                                                                <option>Select Here</option>
                                                            </datalist>
                                                        </div>

                                                   
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>License Plate <span style="color:#ff0000">*</span></label>
                                                    <div>
                                                        <input class="form-control" placeholder="License Plate" type="text" id="license_plate"
                                                            name="license_plate" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Plate Expiry <span style="color:#ff0000">*</span></label>
                                                    <div>
                                                        <input class="form-control" type="date" id="plate_expiry" name="plate_expiry" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Inspection Expiration</label>
                                                    <div>
                                                        <input class="form-control" type="date" id="inspection" name="inspection">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>
                                                        Status</label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>
                                                        <option value="Not Available">Not Available</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- row 2 -->
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="customerBillingAddressChkbox">Ownership <span style="color:#ff0000">*</span> :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                                                    <input type="radio" class="form-check-input radioButton" id="ownership" name="Ownership" value="CompanyTruck" checked>Company Truck &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="radio" class="form-check-input radioButton" id="Own" name="Ownership" value="OwnerOperator" checked>Owner Operator
                                                </div>
                                            </div>
                                            <!-- row 3 -->
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label for="TruckNumber">Mileage</label>
                                                    <input class="form-control" placeholder="Mileage" type="text" id="mileage" name="mileage">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="Axles">Axles</label>
                                                    <input class="form-control" placeholder="Axles" type="text" id="axies" name="axies">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Year</label>
                                                    <input class="form-control" placeholder="Year" type="text" id="year" name="year">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Fuel Type</label>
                                                    <select class="form-control" id="fuel_type" name="fuel_type">
                                                        <option value="gas">gas</option>
                                                        <option value="Diesel">Diesel</option>
                                                        <option value="Reffer">Reffer</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Start Date</label>
                                                    <input class="form-control" type="date" id="start_date" name="start_date">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Deactivation Date</label>
                                                    <div>
                                                        <input class="form-control" placeholder="Toll Free" type="date" id="deactivation"
                                                            name="deactivation">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- row 4 -->
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <p class="form-box">
                                                        <label for="RegisteredState">Registered State</label>
                                                        <input class="form-control" id="RegisteredState" name="registered_state"
                                                            list="registered_state" placeholder="Registered State" required autocomplete="off" />
                                                    </p>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Insurance Policy</label>
                                                    <div>
                                                        <input class="form-control" placeholder="Insurance Policy #" type="text"
                                                            id="Insurance_Policy" name="Insurance_Policy">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Empty / Gross Weight</label>
                                                    <div>
                                                        <input class="form-control" type="text" placeholder="Empty / Gross Weight" id="gross"
                                                            name="gross">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>VIN <span class="mandatory">*</span></label>
                                                    <div>
                                                        <input class="form-control" type="text" placeholder="VIN #" id="vin" name="vin" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>DOT Expiry Date</label>
                                                    <div>
                                                        <input class="form-control" type="date" id="dot" name="dot">
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-2 ">
                                                    <label>Transponder</label>
                                                    <div>
                                                        <input class="form-control" type="text" placeholder="Transponder" id="transponder"
                                                            name="transponder">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-2" data-name="selectifta">
                                                    <label>IFTA Truck</label>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="ifta" name="ifta"
                                                            data-parsley-multiple="groups" data-parsley-mincheck="2" value="IFTA Truck">
                                                        <label class="custom-control-label" for="ifta">Include this Truck for IFTA</label>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label>Internal Notes</label>
                                                    <div>
                                                        <textarea rows="2" cols="30" class="form-control" type="textarea" id="internal_note" placeholder="Internal Note" name="internal_note"></textarea>
                                                        <!-- <input type="hidden" id="companyId" name="companyId"
                                                            value=""> -->
                                                    </div>
                                                </div>
                                                <div class="row col-md-2">
                                                    <label>Upload Files</label>
                                                    <div class="custom-upload-btn-wrapper float-right">
                                                        <button class="custom-btn">Choose file
                                                        </button>
                                                        <input type="file" id="files"  name="files[]" multiple accept=".png, .jpg, .jpeg, .pdf" />
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary closeAddTruckModal" id="truckbutton" >Save</button>
                    <button type="button" class="btn btn-secondary closeAddTruckModal" >Close</button>
                </div>
          
        </div>
    </div>
</div>

</div>
<!------------------------------------------------------------------- over add truck  modal ------------------------------------------------------------------->

<!------------------------------------------------------------------ over add modal ------------------------------------------------------------------>