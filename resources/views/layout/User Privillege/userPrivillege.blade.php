<!-------------------------------------------------------------------  modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="UserPrivillegeModal" role="dialog">
        <div class="modal-dialog custom_modal_small modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Privillege</h5>
                    <button type="button" class="button-24 UserPrivillegeClose" >×</button>
                </div>

                <div id="privilege-data" class="tabs">
                                                            <div class="tab-header">
                                                                <div class="tab selectedpriviladge" id="dashboard_priviladge_main" name="tab-1" onclick="changeTab1('tab1-1'); managePriviladgeSelect(this) ">
                                                                    <i class="icon-graph-rising" style="vertical-align:middle;"></i> Dashboard
                                                                </div>
                                                                <div class="tab" id="custom_priviladge_main"  name="tab-2" onclick="changeTab1('tab1-2'); managePriviladgeSelect(this)">
                                                                    <i class="icon-life-buoy" style="vertical-align:middle;"></i> Custom
                                                                </div>
                                                                <div class="tab" id="admin_priviladge_main" name="tab-3" onclick="changeTab1('tab1-3'); managePriviladgeSelect(this)">
                                                                    <i class="icon-squares" style="vertical-align:middle;"></i> Admin
                                                                </div>
                                                                <div class="tab" id="ifta_priviladge_main" name="tab-4" onclick="changeTab1('tab-4'); managePriviladgeSelect(this)">
                                                                    <i class="icon-graph"  style="vertical-align:middle;"></i> IFTA
                                                                </div>
                                                                <div class="tab" id="account_priviladge_main" name="tab-5" onclick="changeTab1('tab-5'); managePriviladgeSelect(this)">
                                                                    <i class="icon-paper-pen" style="vertical-align:middle;"></i> Finance
                                                                </div>
                                                                <div class="tab" id="report_priviladge_main" name="tab-6" onclick="changeTab1('tab-6'); managePriviladgeSelect(this)">
                                                                    <i class="icon-life-buoy" style="vertical-align:middle;"></i> Report
                                                                </div>

                                                                <div class="tab" id="settlements_priviladge_main" name="tab-7" onclick="changeTab1('tab-7'); managePriviladgeSelect(this)">
                                                                    <i class="icon-life-buoy" style="vertical-align:middle;"></i> Settlements
                                                                </div>
                                                            </div>
                                                            <div class="tab-indicator"></div>
                                                            <div class="tab-content">
                                                                <div id="tab1-1" class="tab-dashboard active" style="display:inline-block">
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
                                                                <div id="tab1-2" class="tab-master">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" id="select-all_l2" value="Select All_l2">
                                                                                <label for="select-all_l2">Select All</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_1" />
                                                                                <label
                                                                                    for="checkboxl2_1">Company</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_2" />
                                                                                <label for="checkboxl2_2">Branch Office Location</label>
                                                                            </li>

                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_10" />
                                                                                <label for="checkboxl2_10">Currency Setting</label>
                                                                            </li>

                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_12" />
                                                                                <label for="checkboxl2_12">Payment Terms</label>
                                                                            </li>
                                                                            
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_4" />
                                                                                <label for="checkboxl2_4">Add Terms & Conditions</label>
                                                                            </li>

                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_6" />
                                                                                <label for="checkboxl2_6">Status</label>
                                                                            </li>

                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_7" />
                                                                                <label for="checkboxl2_7">Load Type</label>
                                                                            </li>

                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_5" />
                                                                                <label for="checkboxl2_5">Equipment Type</label>
                                                                            </li>

                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_13" />
                                                                                <label for="checkboxl2_13">Reccurance Category</label>
                                                                            </li>

                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_3" />
                                                                                <label for="checkboxl2_3">Truck & Trailer make</label>
                                                                            </li>

                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_8" />
                                                                                <label for="checkboxl2_8">User Privillege</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox" name="checkbox" id="checkboxl2_9" />
                                                                                <label for="checkboxl2_9">Setting</label>
                                                                            </li>

                                                                            <!-- <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_4" />
                                                                                <label for="checkboxl2_4">Trailer
                                                                                    Type</label>
                                                                            </li> -->
                                                                           
                                                                           
                                                                           
                                                                            <!-- <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_8" />
                                                                                <label for="checkboxl2_8">Fuel Card
                                                                                    Type</label>
                                                                            </li> -->
                                                                            <!-- <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox" id="checkboxl2_9" />
                                                                                <label for="checkboxl2_9">Fix Pay
                                                                                    Category</label>
                                                                            
                                                                            <li>
                                                                                <input class="checkbox2" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl2_11" />
                                                                                <label for="checkboxl2_11">Add
                                                                                    Notes</label>
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
                                                                            </li> -->

                                                                            </li>
                                                                            </li>
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                                <div class="tab-admin" id="tab1-3">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox" id="select-all_l3" value="Select All_l3">
                                                                                <label for="select-all_l3">Select  All</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox" name="admin" id="checkboxl3_8" />
                                                                                <label for="checkboxl3_8">Admin</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox"  name="customer" id="checkboxl3_1" />
                                                                                <label
                                                                                    for="checkboxl3_1">Customer</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox" name="checkbox" id="checkboxl3_2" />
                                                                                <label
                                                                                    for="checkboxl3_2">Shipper & Consignee</label>
                                                                            </li>
                                                                            <!-- <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox" id="checkboxl3_3" />
                                                                                <label
                                                                                    for="checkboxl3_3">Consignee</label>
                                                                            </li> -->
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox" name="checkbox" id="checkboxl3_4" />
                                                                                <label
                                                                                    for="checkboxl3_4">External Carrier</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox" name="checkbox" id="checkboxl3_5" />
                                                                                <label for="checkboxl3_5">Driver & Owner Operator</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox" name="checkbox" id="checkboxl3_6" />
                                                                                <label for="checkboxl3_6">User</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox" name="checkbox" id="checkboxl3_7" />
                                                                                <label for="checkboxl3_7">Truck</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox" name="checkbox" id="checkboxl3_10" />
                                                                                <label
                                                                                    for="checkboxl3_10">Trailer</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox3" type="checkbox" name="checkbox" id="checkboxl3_9" />
                                                                                <label for="checkboxl3_9">Factoring
                                                                                    Company</label>
                                                                            </li>
                                                                            <!-- <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl3_10" />
                                                                                <label for="checkboxl3_10">Bank</label>
                                                                            </li> -->
                                                                           
                                                                            
                                                                            <!-- <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl3_13" />
                                                                                <label for="checkboxl3_13">Fuel
                                                                                    Card</label>
                                                                            </li> -->
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                                <div class="tab-ifta" id="tab-4">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox4" type="checkbox" id="select-all_l4" value="Select All_l4">
                                                                                <label for="select-all_l4">Select All</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox4" type="checkbox" name="checkbox" id="checkboxl4_2" />
                                                                                <label for="checkboxl4_2">Ifta</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox4" type="checkbox" name="checkbox" id="checkboxl4_1" />
                                                                                <label for="checkboxl4_1">Fuel Vendor</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox4" type="checkbox" name="checkbox" id="checkboxl3_13" />
                                                                                <label for="checkboxl3_13">Fuel Card</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox4" type="checkbox"  name="checkbox" id="checkboxl4_3" />
                                                                                <label for="checkboxl4_3">Fuel Reciepts & Cash Advance</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox4" type="checkbox" name="checkbox" id="checkboxl4_4" />
                                                                                <label for="checkboxl4_4">Tolls</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox4" type="checkbox" name="checkbox" id="checkboxl4_5" />
                                                                                <label for="checkboxl4_5">IFTA Trips</label>
                                                                            </li>
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                                <div id="tab-5" class="tab-account">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox" id="select-all_l5" value="Select All_l5">
                                                                                <label for="select-all_l5">Select All</label>
                                                                            </li>
                                                                            <li>
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox" name="checkbox" id="checkboxl5_6" />
                                                                                <label for="checkboxl5_6">Account</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox" name="checkbox" id="checkboxl5_5" />
                                                                                <label for="checkboxl5_5">Bank</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox" name="checkbox" id="checkboxl5_4" />
                                                                                <label for="checkboxl5_4">Credit card</label>
                                                                            </li>

                                                                             <!-- <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl3_11" />
                                                                                <label for="checkboxl3_11">Credit
                                                                                    Card</label>
                                                                            </li> -->
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox" name="checkbox" id="checkboxl5_3" />
                                                                                <label for="checkboxl5_3">Sub Credit card</label>
                                                                            </li>

                                                                            <!-- <li>
                                                                                <input class="checkbox3" type="checkbox"
                                                                                    name="checkbox"
                                                                                    id="checkboxl3_12" />
                                                                                <label for="checkboxl3_12">Sub Credit
                                                                                    Card</label>
                                                                            </li> -->
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox" name="checkbox" id="checkboxl5_1" />
                                                                                <label for="checkboxl5_1">Accounting Manager</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox5" type="checkbox" name="checkbox" id="checkboxl5_2" />
                                                                                <label for="checkboxl5_2">Payment & Receipt Registration</label>
                                                                            </li>
                                                                            
                                                                            
                                                                            
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                                <div id="tab-6" class="tab-report">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox" id="select-all_l6" value="Select All_l6">
                                                                                <label for="select-all_l6">Select All</label>
                                                                            </li>

                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox" name="checkbox" id="checkboxl6_6" />
                                                                                <label for="checkboxl6_6">Reports</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox" name="checkbox" id="checkboxl6_7" />
                                                                                <label for="checkboxl6_7">Aging Report</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox" name="checkbox" id="checkboxl6_12" />
                                                                                <label for="checkboxl6_12">Revenue Report</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox" name="checkbox" id="checkboxl6_11" />
                                                                                <label for="checkboxl6_11">Expense Report</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox6" type="checkbox" name="checkbox" id="checkboxl6_10" />
                                                                                <label for="checkboxl6_10">1099 Report</label>
                                                                            </li>
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_1" />
                                                                                <label for="checkboxl6_1">Driver Pay
                                                                                    Settlement</label>
                                                                            </li> -->
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_2" />
                                                                                <label for="checkboxl6_2">Bank
                                                                                    Statment</label>
                                                                            </li> -->
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_3" />
                                                                                <label for="checkboxl6_3">Credit Card
                                                                                    Statement</label>
                                                                            </li> -->
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_4" />
                                                                                <label for="checkboxl6_4">Fuel Card
                                                                                    Report</label>
                                                                            </li> -->
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_5" />
                                                                                <label for="checkboxl6_5">Fuel
                                                                                    Report</label>
                                                                            </li> -->
                                                                          
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_8" />
                                                                                <label for="checkboxl6_8">Payable
                                                                                    Report</label>
                                                                            </li> -->
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_9" />
                                                                                <label for="checkboxl6_9">Receivable
                                                                                    Report</label>
                                                                            </li> -->
                                                                            
                                                                            
                                                                           
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                                <div id="tab-7" class="tab-settlements">
                                                                    <h6>
                                                                        <ul class="ks-cboxtags">
                                                                            <li>
                                                                                <input class="checkbox7" type="checkbox" id="select-all_l7" value="Select All_l7">
                                                                                <label for="select-all_l7">Select All</label>
                                                                            </li>
                                                                          
                                                                            <li>
                                                                                <input class="checkbox7" type="checkbox" name="checkbox" id="checkboxl7_1" />
                                                                                <label for="checkboxl7_1"> Settlements</label>
                                                                            </li>
                                                                            <li>
                                                                                <input class="checkbox7" type="checkbox" name="checkbox" id="checkboxl7_2" />
                                                                                <label for="checkboxl7_2">Driver Pay Settlements</label>
                                                                            </li>
                                                                            
                                                                            <li>
                                                                                <input class="checkbox7" type="checkbox" name="checkbox" id="checkboxl7_3" />
                                                                                <label for="checkboxl7_3">Customer Settlement</label>
                                                                            </li>

                                                                            <li>
                                                                                <input class="checkbox7" type="checkbox"  name="checkbox" id="checkboxl7_4" />
                                                                                <label for="checkboxl7_4">Carrier Settlement</label>
                                                                            </li>
                                                                            <!-- <li>
                                                                                <input class="checkbox7" type="checkbox" name="checkbox" id="checkboxl6_5" />
                                                                                <label for="checkboxl6_12">Factoring company</label>
                                                                            </li> -->
                                                                              <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_1" />
                                                                                <label for="checkboxl6_1">Driver Pay
                                                                                    Settlement</label>
                                                                            </li> -->
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_2" />
                                                                                <label for="checkboxl6_2">Bank
                                                                                    Statment</label>
                                                                            </li> -->
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_3" />
                                                                                <label for="checkboxl6_3">Credit Card
                                                                                    Statement</label>
                                                                            </li> -->
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_4" />
                                                                                <label for="checkboxl6_4">Fuel Card
                                                                                    Report</label>
                                                                            </li> -->
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_5" />
                                                                                <label for="checkboxl6_5">Fuel
                                                                                    Report</label>
                                                                            </li> -->

                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_8" />
                                                                                <label for="checkboxl6_8">Payable
                                                                                    Report</label>
                                                                            </li> -->
                                                                            <!-- <li>
                                                                                <input class="checkbox6" type="checkbox"
                                                                                    name="checkbox" id="checkboxl6_9" />
                                                                                <label for="checkboxl6_9">Receivable
                                                                                    Report</label>
                                                                            </li> -->
                                                                        </ul>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>

                <div class="modal-footer">
                    <!-- <form action="{{route('download-pdf')}}" method="post" target="__blank">
                        @csrf
                        <button class="button-29" style="vertical-align:middle"><span>Export</span></button>
                    </form> -->
                    <button type="button" class="button-29 UserPrivillegeClose" >Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-------------------------------------------------------------------End  modal------------------------------------------------------------------->



</script>