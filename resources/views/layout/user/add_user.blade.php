<!-- Add User modal -->
<div class="container">
    <!-- <h2>Large Modal</h2> -->
    <!-- Button to Open the Modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open modal
        </button> -->
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="addUserModal">
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body" style="overflow-y: auto !important;">
                    <!-- Row -->
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive export-table">
                                            <form method="post"> @csrf <input type="hidden" name="_token" id="csrf"
                                                    value="{{Session::token()}}">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputFirstName4">First Name<span
                                                                class="required"></span></label>
                                                        <input type="text" class="form-control" name="inputFirstName4"
                                                            id="inputFirstName4" placeholder="First Name">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputLastName4">Last Name<span
                                                                class="required"></span></label>
                                                        <input type="email" class="form-control" name="inputLastName4"
                                                            id="inputLastName4" placeholder="Last Name">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputUsername4">Username<span
                                                                class="required"></span></label>
                                                        <input type="text" class="form-control" name="inputUsername4"
                                                            id="inputUsername4" placeholder="Username">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputEmail4">Email<span
                                                                class="required"></span></label>
                                                        <input type="email" class="form-control" name="inputEmail4"
                                                            id="inputEmail4" placeholder="Email">
                                                    </div>

                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputPassword4">Password<span
                                                                class="required"></span></label>
                                                        <input type="password" class="form-control"
                                                            name="inputPassword4" id="inputPassword4"
                                                            placeholder="Password">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputAddress">Address<span
                                                                class="required"></span></label>
                                                        <input type="text" class="form-control" name="inputAddress"
                                                            id="inputAddress" placeholder="1234 Main St">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputLocation">Location</label>
                                                        <input type="text" class="form-control" name="inputLocation"
                                                            id="inputLocation"
                                                            placeholder="Apartment, studio, or floor">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputZip">Zip</label>
                                                        <input type="text" class="form-control" name="inputZip"
                                                            id="inputZip">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputCompanyName">Company Name</label>
                                                        <select id="inputCompanyName" name="inputCompanyName"
                                                            class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputOffice">Office</label>
                                                        <select id="inputOffice" name="inputOffice"
                                                            class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputTelephone">Telephone</label>
                                                        <input type="tel" class="form-control telephone4" name="inputTelephone"
                                                            id="inputTelephone">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputExt">Ext</label>
                                                        <input type="text" class="form-control" name="inputExt"
                                                            id="inputExt">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-2">
                                                        <label for="inputTollFree">Toll Free</label>
                                                        <input type="tel" class="form-control" name="inputTollFree"
                                                            id="inputTollFree">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputFax">Fax</label>
                                                        <input type="text" class="form-control" name="inputFax"
                                                            id="inputFax">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div id="privilege-data" class="tabs">
                                                            <div class="tab-header">
                                                                <div class="tab selectedpriviladge"
                                                                    id="dashboard_priviladge_main" name="tab-1"
                                                                    onclick="changeTab('tab-1'); managePriviladgeSelect(this) ">
                                                                    <i class="icon-graph-rising"
                                                                        style="vertical-align:middle;"></i> Dashboard
                                                                </div>
                                                                <div class="tab" id="custom_priviladge_main"
                                                                    name="tab-2"
                                                                    onclick="changeTab('tab-2'); managePriviladgeSelect(this)">
                                                                    <i class="icon-life-buoy"
                                                                        style="vertical-align:middle;"></i> Custom
                                                                </div>
                                                                <div class="tab" id="admin_priviladge_main" name="tab-3"
                                                                    onclick="changeTab('tab-3'); managePriviladgeSelect(this)">
                                                                    <i class="icon-squares"
                                                                        style="vertical-align:middle;"></i> Admin
                                                                </div>
                                                                <div class="tab" id="ifta_priviladge_main" name="tab-4"
                                                                    onclick="changeTab('tab-4'); managePriviladgeSelect(this)">
                                                                    <i class="icon-graph"
                                                                        style="vertical-align:middle;"></i> IFTA
                                                                </div>
                                                                <div class="tab" id="account_priviladge_main"
                                                                    name="tab-5"
                                                                    onclick="changeTab('tab-5'); managePriviladgeSelect(this)">
                                                                    <i class="icon-paper-pen"
                                                                        style="vertical-align:middle;"></i> Account
                                                                </div>
                                                                <div class="tab" id="report_priviladge_main"
                                                                    name="tab-6"
                                                                    onclick="changeTab('tab-6'); managePriviladgeSelect(this)">
                                                                    <i class="icon-life-buoy"
                                                                        style="vertical-align:middle;"></i> Report
                                                                </div>
                                                            </div>
                                                            <div class="tab-indicator"></div>
                                                            <div class="tab-content">
                                                                <div id="tab-1" class="tab-dashboard active"
                                                                    style="display:inline-block">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox1" type="checkbox"
                                                                                    id="select-all_l1"
                                                                                    value="Select All_l1">
                                                                                <label for="select-all_l1">Select
                                                                                    All</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox1" type="checkbox"
                                                                                    name="checkbox" id="checkbox-1" />
                                                                                <label for="checkbox-1">New Active
                                                                                    Load</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox1" type="checkbox"
                                                                                    name="checkbox" id="checkbox-2" />
                                                                                <label
                                                                                    for="checkbox-2">Profit/Loss</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox1" type="checkbox"
                                                                                    name="checkbox" id="checkbox-3" />
                                                                                <label
                                                                                    for="checkbox-3">Dispatcher</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox1" type="checkbox"
                                                                                    name="checkbox" id="checkbox-4" />
                                                                                <label for="checkbox-4">Driver</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox1" type="checkbox"
                                                                                    name="checkbox" id="checkbox-5" />
                                                                                <label for="checkbox-5">Company</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox1" type="checkbox"
                                                                                    name="checkbox" id="checkbox-6" />
                                                                                <label for="checkbox-6">Truck</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox1" type="checkbox"
                                                                                    name="checkbox" id="checkbox-7" />
                                                                                <label for="checkbox-7">Carrier</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox1" type="checkbox"
                                                                                    name="checkbox" id="checkbox-8" />
                                                                                <label
                                                                                    for="checkbox-8">Equipment</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox1" type="checkbox"
                                                                                    name="checkbox" id="checkbox-9" />
                                                                                <label for="checkbox-9">Sales
                                                                                    Representative</label>
                                                                            </li>
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                                <div id="tab-2" class="tab-master">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    id="select-all_l2"
                                                                                    value="Select All_l2">
                                                                                <label for="select-all_l2">Select
                                                                                    All</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_1" />
                                                                                <label
                                                                                    for="checkboxl2_1">Company</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_2" />
                                                                                <label for="checkboxl2_2">Office
                                                                                    Location</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_3" />
                                                                                <label for="checkboxl2_3">Truck
                                                                                    Type</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_4" />
                                                                                <label for="checkboxl2_4">Trailer
                                                                                    Type</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_5" />
                                                                                <label for="checkboxl2_5">Equipment
                                                                                    Type</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_6" />
                                                                                <label for="checkboxl2_6">Status</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_7" />
                                                                                <label for="checkboxl2_7">Load
                                                                                    Type</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_8" />
                                                                                <label for="checkboxl2_8">Fuel Card
                                                                                    Type</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_9" />
                                                                                <label for="checkboxl2_9">Fix Pay
                                                                                    Category</label>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl2_10" />
                                                                                <label for="checkboxl2_10">Currency
                                                                                    Setting</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl2_11" />
                                                                                <label for="checkboxl2_11">Add
                                                                                    Notes</label>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl2_12" />
                                                                                <label for="checkboxl2_12">Payment
                                                                                    Terms</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl2_13" />
                                                                                <label for="checkboxl2_13">Dispatcher
                                                                                    Incentive</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl2_14" />
                                                                                <label for="checkboxl2_14">Sales
                                                                                    Incentive</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl2_15" />
                                                                                <label for="checkboxl2_15">Document
                                                                                    Type</label>
                                                                            </li>

                                                                            </li>
                                                                            </li>
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                                <div class="tab-admin" id="tab-3">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    id="select-all_l3"
                                                                                    value="Select All_l3">
                                                                                <label for="select-all_l3">Select
                                                                                    All</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox" id="checkboxl3_1" />
                                                                                <label
                                                                                    for="checkboxl3_1">Customer</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox" id="checkboxl3_2" />
                                                                                <label
                                                                                    for="checkboxl3_2">Shipper</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox" id="checkboxl3_3" />
                                                                                <label
                                                                                    for="checkboxl3_3">Consignee</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox" id="checkboxl3_4" />
                                                                                <label for="checkboxl3_4">Driver</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox" id="checkboxl3_5" />
                                                                                <label for="checkboxl3_5">User</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox" id="checkboxl3_6" />
                                                                                <label for="checkboxl3_6">Truck</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox" id="checkboxl3_7" />
                                                                                <label
                                                                                    for="checkboxl3_7">Trailer</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox" id="checkboxl3_8" />
                                                                                <label for="checkboxl3_8">Custom
                                                                                    Broker</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox" id="checkboxl3_9" />
                                                                                <label for="checkboxl3_9">Factoring
                                                                                    Company</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl3_10" />
                                                                                <label for="checkboxl3_10">Bank</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl3_11" />
                                                                                <label for="checkboxl3_11">Credit
                                                                                    Card</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl3_12" />
                                                                                <label for="checkboxl3_12">Sub Credit
                                                                                    Card</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl3_13" />
                                                                                <label for="checkboxl3_13">Fuel
                                                                                    Card</label>
                                                                            </li>
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                                <div class="tab-ifta" id="tab-4">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox4" type="checkbox"
                                                                                    id="select-all_l4"
                                                                                    value="Select All_l4">
                                                                                <label for="select-all_l4">Select
                                                                                    All</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox4" type="checkbox"
                                                                                    name="checkbox" id="checkboxl4_1" />
                                                                                <label for="checkboxl4_1">Fuel
                                                                                    Receipts</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox4" type="checkbox"
                                                                                    name="checkbox" id="checkboxl4_2" />
                                                                                <label for="checkboxl4_2">Toll</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox4" type="checkbox"
                                                                                    name="checkbox" id="checkboxl4_3" />
                                                                                <label for="checkboxl4_3">Verify
                                                                                    Trip</label>
                                                                            </li>
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                                <div id="tab-5" class="tab-account">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox"
                                                                                    id="select-all_l5"
                                                                                    value="Select All_l5">
                                                                                <label for="select-all_l5">Select
                                                                                    All</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox"
                                                                                    name="checkbox" id="checkboxl5_1" />
                                                                                <label for="checkboxl5_1">Accounting
                                                                                    Manager</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox"
                                                                                    name="checkbox" id="checkboxl5_2" />
                                                                                <label for="checkboxl5_2">Payment
                                                                                    Registration</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox"
                                                                                    name="checkbox" id="checkboxl5_3" />
                                                                                <label for="checkboxl5_3">Advance
                                                                                    Payment</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox"
                                                                                    name="checkbox" id="checkboxl5_4" />
                                                                                <label for="checkboxl5_4">Manage
                                                                                    Receipt</label>
                                                                            </li>
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                                <div id="tab-6" class="tab-report">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    id="select-all_l6"
                                                                                    value="Select All_l6">
                                                                                <label for="select-all_l6">Select
                                                                                    All</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_1" />
                                                                                <label for="checkboxl6_1">Driver Pay
                                                                                    Settlement</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_2" />
                                                                                <label for="checkboxl6_2">Bank
                                                                                    Statment</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_3" />
                                                                                <label for="checkboxl6_3">Credit Card
                                                                                    Statement</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_4" />
                                                                                <label for="checkboxl6_4">Fuel Card
                                                                                    Report</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_5" />
                                                                                <label for="checkboxl6_5">Fuel
                                                                                    Report</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_6" />
                                                                                <label for="checkboxl6_6">Toll
                                                                                    Report</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_7" />
                                                                                <label for="checkboxl6_7">Aging
                                                                                    Report</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_8" />
                                                                                <label for="checkboxl6_8">Payable
                                                                                    Report</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_9" />
                                                                                <label for="checkboxl6_9">Receivable
                                                                                    Report</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl6_10" />
                                                                                <label for="checkboxl6_10">1099
                                                                                    Report</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl6_11" />
                                                                                <label for="checkboxl6_11">Email
                                                                                    Track</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl6_12" />
                                                                                <label for="checkboxl6_12">Lane
                                                                                    Analysis</label>
                                                                            </li>
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <br>
                                        <a type="submit" class="btn btn-primary" data-dismiss="modal"
                                            id="usersave">Submit</a>
                                        <br>
                                        </form>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- Modal footer -->
            
        </div>
    </div>
</div>
</div>