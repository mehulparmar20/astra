<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class UserPrivillegeController extends Controller
{
    public function getBankData(Request $request){
        //$companyId=1;
        //$bankData = Bank::where('deleteStatus','NO')->get();
        $bankData = Bank::get();
       //dd($bankData);
       return response()->json($bankData, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

    public function getPrivilegeTable(Request $request)
    {
        $user = Auth::user();
        
        $email = $user->userEmail;
        $data = User::where('userEmail',$email)->first();
        //dd($data);
        $tab1 = "'tab-1'";
        $tab2 = "'tab-2'";
        $tab3 = "'tab-3'";
        $tab4 = "'tab-4'";
        $tab5 = "'tab-5'";
        $tab6 = "'tab-6'";
        $output = '
        <div class="tab-header">
                        <div class="tab selectedpriviladge" id="dashboard_priviladge_main" name="tab-1" onclick="changeTab1('.$tab1.'); managePriviladgeSelect1(this) " >
                            <i class="icon-graph-rising" style="vertical-align:middle;"></i> Dashboard
                        </div>
                        <div class="tab" id="custom_priviladge_main" name="tab-2" onclick="changeTab1('.$tab2.'); managePriviladgeSelect1(this)">
                            <i class="icon-life-buoy" style="vertical-align:middle;"></i> Custom
                        </div>
                        <div class="tab" id="admin_priviladge_main" name="tab-3" onclick="changeTab1('.$tab3.'); managePriviladgeSelect1(this)">
                            <i class="icon-squares" style="vertical-align:middle;"></i> Admin
                        </div>
                        <div class="tab" id="ifta_priviladge_main" name="tab-4" onclick="changeTab1('.$tab4.'); managePriviladgeSelect1(this)">
                            <i class="icon-graph" style="vertical-align:middle;"></i> IFTA
                        </div>
                        <div class="tab" id="account_priviladge_main" name="tab-5" onclick="changeTab1('.$tab5.'); managePriviladgeSelect1(this)">
                            <i class="icon-paper-pen" style="vertical-align:middle;"></i> Account
                        </div>
                        <div class="tab" id="report_priviladge_main" name="tab-6" onclick="changeTab1('.$tab6.'); managePriviladgeSelect1(this)">
                            <i class="icon-life-buoy" style="vertical-align:middle;"></i> Report
                        </div>
                    </div>
                    <div class="tab-indicator"></div>';

                    $output .= '<div class="tab-content">';

                    $output .= '<div id="tab-1" class="tab-dashboard active" style="display:inline-block">
                    <h6>
                        <ul class="ks-cboxtags">
                            <li><input type="checkbox" id="checkboxOne" name="addDashboard" value="Rainbow Dash" onclick="select_all(this.name);"><label
                                    for="checkboxOne">Select All</label></li>
                            <br>
                            <li><input type="checkbox"  name="addDashboard" id="dash_newactiveload"  ><label
                                    for="dash_newactiveload">New active load</label></li>
                                    <!-- for="checkboxTwo">New active load</label></li> -->
                            <li><input type="checkbox" name="addDashboard"  id="dash_profit_loss"  ><label
                                    for="dash_profit_loss">Profit/Loss</label></li>
                            <li><input type="checkbox" name="addDashboard"  id="dash_dispatcher"  ><label
                                    for="dash_dispatcher">Dispatcher</label></li>
                            <li><input type="checkbox" name="addDashboard"  id="dash_driver" ><label
                                    for="dash_driver">Driver</label></li>
                            <li><input type="checkbox" name="addDashboard"  id="dash_company" ><label
                                    for="dash_company">Company</label></li>
                            <li><input type="checkbox" name="addDashboard"  id="dash_truck"  ><label
                                    for="dash_truck">Truck</label></li>
                            <li><input type="checkbox" name="addDashboard"  id="dash_carrier"  ><label
                                    for="dash_carrier">Carrier</label></li>
                            <li><input type="checkbox" name="addDashboard"  id="dash_equipment" ><label
                                    for="dash_equipment">Equipment</label></li>
                            <li><input type="checkbox" name="addDashboard"  id="dash_sales_rep"  ><label
                                    for="dash_sales_rep">Sales Representative</label></li>
                        </ul>
                        </h6>
                   </div>';
       

        if ($data['master']['master'] == '1') {
            $output .= '<div id="tab-2" class = "tab-master">
                            <h6>
                                <ul class="ks-cboxtags">
                                    <li><input type="checkbox" name="addMaster" id="selectMaster"
                                            onclick="select_all(this.name)"><label for="selectMaster">Select All</label>
                                    </li>
                                    <br>';

            if ($data['master']['addCompany'] == '1') {
                $output .= '<li><input type="checkbox" name="addMaster" id="addCompany" ><label
                for="addCompany">Company</label></li>';
            }

            if ($data['master']['office'] == '1') {
                $output .= '<li><input type="checkbox" name="addMaster" id="office"><label for="office">Office
                Location</label></li>';

            }
            if ($data['master']['truckType'] == 1) {
                $output .= '<li><input type="checkbox" name="addMaster" id="truckType"
                ><label for="truckType">Truck Type</label>
                </li>';

            }
            if ($data['master']['trailerType'] == 1) {
                $output .= '<li><input type="checkbox" name="addMaster" id="trailerType"
                ><label for="trailerType">Trailer
                Type</label></li>';
            }
            if ($data['master']['equipmentType'] == 1) {
                $output .= '<li><input type="checkbox" name="addMaster" id="equipmentType"
                ><label for="equipmentType">Equipment
                Type</label></li>';
            }
            if ($data['master']['bankCategory'] == 1) {
                $output .= ' <li><input type="checkbox" name="addMaster" id="bankCategory"
                ><label for="bankCategory">Bank
                Category</label></li>';
            }
            if ($data['master']['statusType'] == '1') {
                $output .= '<li><input type="checkbox" name="addMaster" id="statusType"
                ><label for="statusType">Status</label></li>';
            }
            if ($data['master']['loadType'] == '1') {
                $output .= '<li><input type="checkbox" name="addMaster" id="loadType"
                ><label for="loadType">Load
                Type</label></li>';
            }
            if ($data['master']['fuelCardType'] == '1') {
                $output .= '<li><input type="checkbox" name="addMaster" id="fuelCardType"
                ><label for="fuelCardType">Fuel Card
                Type</label></li>';
            }
            if ($data['master']['fixPayCategory'] == '1') {
                $output .= '<li><input type="checkbox" name="addMaster" id="fixPayCategory"
                ><label for="fixPayCategory">Fix Pay
                Category</label></li>';
            }
            if ($data['master']['currencySetting'] == '1') {
                $output .= '<li><input type="checkbox" name="addMaster" id="currencySetting"
                ><label for="currencySetting">Currency
                Setting</label></li>';
            }
            if ($data['master']['addNote'] == '1') {
                $output .= '<li><input type="checkbox" name="addMaster" id="addNote"
                ><label for="addNote">Add
                Notes</label></li>';
            }
            if ($data['master']['paymentTerms'] == '1') {
                $output .= '<li><input type="checkbox" name="addMaster" id="paymentTerms"
                ><label for="paymentTerms">Payment
                Terms</label></li>';
            }
            if ($data['master']['dispactherIncentive'] == '1' || $data['master']['dispactherIncentive'] == null) {
                $output .= '<li><input type="checkbox" name="addMaster" id="dispactherIncentive"
                ><label for="dispactherIncentive">Dispacther Incentive</label></li>';
            }
            if ($data['master']['salesIncentive'] == '1' || $data['master']['salesIncentive'] == null) {
                $output .= '<li><input type="checkbox" name="addMaster" id="salesIncentive"
                ><label for="salesIncentive">Sales Incentive</label></li>';
            }
            if ($data['master']['documentType'] == '1' ||$data['master']['documentType'] == null ) {
                $output .= '<li><input type="checkbox" name="addMaster" id="documentType"
                ><label for="documentType">Document Type</label></li>';
            }
            $output .= '   </ul>
                        </h6>
                    </div>';
        }
        if ($data['admin']['admin'] == '1') {
            $output .= '<div class = "tab-admin" id="tab-3">
                            <h6>
                            <ul class="ks-cboxtags">
                            <li>
                            <input type="checkbox" onclick="select_all(this.name)" name="addAdmin"
                                id="selectAdmin">
                            <label for="selectAdmin">Select All</label>
                        </li>
                        <br> ';
                            
            // if ($data['admin']['addCustomer'] == 1) {
            //     $output .= '<li>
            //                     <input type="checkbox"  name="addAdmin"
            //                         id="addCustomer">
            //                     <label for="addCustomer">Customer</label>
            //                 </li>';
            // }
            if ($data['admin']['addShipper'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="addAdmin"
                                    id="addShipper">
                                <label for="addShipper">Shipper</label>
                            </li>';
            }
            if ($data['admin']['addConsignee'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="addAdmin"
                                    id="addConsignee">
                                <label for="addConsignee">Consignee</label>
                            </li>';
            }
            if ($data['admin']['addExternalCarrier'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="addAdmin"
                                    id="addExternalCarrier"><label for="addExternalCarrier">External
                                    Carrier</label>
                            </li>';
            }
            if ($data['admin']['addDriver'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="addAdmin"
                                    id="addDriver">
                                <label for="addDriver">Driver</label>
                            </li>';
            }
            if ($data['admin']['users'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="addAdmin"
                                    id="users">
                                <label for="users">User</label>
                            </li>';
            }
            if ($data['admin']['addTruck'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="addAdmin"
                                    id="addTruck">
                                <label for="addTruck">Truck</label>
                            </li>';
            }
            if ($data['admin']['addTrailer'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="addAdmin"
                                    id="addTrailer">
                                <label for="addTrailer">Trailer</label>
                            </li>';
            }
            if ($data['admin']['customsBroker'] == '1') {
                $output .= '<li><input type="checkbox"  name="addAdmin"
                                    id="customsBroker">
                                <label for="customsBroker">Custom Broker</label>
                            </li>';
            }
            if ($data['admin']['factoringCompany'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="addAdmin"
                                    id="factoringCompany">
                                <label for="factoringCompany">Factoring Company</label>
                            </li>';
            }
            if ($data['admin']['addBank'] == '1') {
                $output .= ' <li>
                                <input type="checkbox"  name="addAdmin"
                                    id="addBank">
                                <label for="addBank">Bank</label>
                            </li>';
            }
            if ($data['admin']['creditCard'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="addAdmin"
                                    id="credit_Card">
                                <label for="credit_Card">Credit Card</label>
                            </li>';
            }
            if ($data['admin']['subCreditCard'] == '1') {
                $output .= ' <li>
                                <input type="checkbox"  name="addAdmin"
                                    id="subCreditCard">
                                <label for="subCreditCard">Sub Credit Card</label>
                            </li>';
            }

            if ($data['ifta']['iftaCard'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="addAdmin"
                                    id="iftaCard">
                                <label for="iftaCard">Fuel Card</label>
                            </li>';
            }
            $output .= '   </ul>
                        </h6>
                    </div>';
        }
        if ($data['ifta']['ifta'] == '1') {
            $output .= '
            <div class = "tab-ifta" id="tab-4">
                <h6>
                    <ul class="ks-cboxtags">
                        <li>
                            <input type="checkbox" onclick="select_all(this.name)" name="ifta"
                                id="selectifta">
                            <label for="selectifta">Select All</label>
                        </li>
                        <br>';
            if ($data['ifta']['fuelReceipt'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="ifta"
                                    id="fuelReceipt">
                                <label for="fuelReceipt">Fuel Receipts</label>
                            </li>';
            }
            if ($data['ifta']['addToll'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="ifta"
                                    id="addToll">
                                <label for="addToll">Toll</label>
                            </li>';
            }
            if ($data['ifta']['verifyTrip'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="ifta"
                                    id="verifyTrip">
                                <label for="verifyTrip">Verify Trip</label>
                            </li>';
            }
            $output .= '  </ul>
                        </h6>
                    </div>';
        }
        if ($data['account']['account'] == '1') {
            // $name = "account";
            $output .= ' <div id="tab-5" class = "tab-account">
                            <h6>
                                <ul class="ks-cboxtags">
                                    <li>
                                        <input type="checkbox" onclick="select_all(this.name)" name="account"
                                            id="selectaccount"><label for="selectaccount">Select All</label>
                                    </li>
                                    <br>';
            if ($data['account']['accountManager'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="account"
                                    id="accountManager">
                                <label for="accountManager">Accounting Manager</label>
                            </li>';
            }
            if ($data['account']['paymentRegistration'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="account"
                                    id="paymentRegistration">
                                <label for="paymentRegistration">Payment Registration</label>
                            </li>';
            }
            if ($data['account']['advancePayment'] == '1') {
                $output .= '<li><input type="checkbox"  name="account"
                                    id="advancePayment">
                                <label for="advancePayment"> Advance Payment </label>
                            </li>';
            }
            if ($data['account']['manageReceipt'] == '1') {
                $output .= '<li><input type="checkbox"  name="account"
                                    id="manageReceipt">
                                <label for="manageReceipt">Manage Receipt</label>
                            </li>';
            }
            $output .= '</ul>
                    </h6>
                </div>';
        }
        if ($data['reports']['report'] == '1') {
            $output .= '<div id="tab-6" class="tab-report">
                            <h6>
                                <ul class="ks-cboxtags">
                                    <li>
                                        <input type="checkbox" name="report" onclick="select_all(this.name)"
                                            id="selectreport">
                                        <label for="selectreport">Select All</label>
                                    </li>
                                    <br>';
            if ($data['reports']['driverReport'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_driverReport">
                                <label for="report_driverReport">Driver Pay Settlement</label>
                            </li>';
            }
            if ($data['ifta']['iftaReport'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_iftaReport">
                                <label for="report_iftaReport">IFTA Report</label>
                            </li>';
            }
            if ($data['reports']['bankStateReport'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_bankStateReport">
                                <label for="report_bankStateReport">Bank Statement</label>
                            </li>';
            }
            if ($data['reports']['creditStateReport'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_creditStateReport">
                                <label for="report_creditStateReport">Credit Card Statement </label>
                            </li>';
            }
            if ($data['reports']['fuelcardReport'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_fuelcardReport">
                                <label for="report_fuelcardReport">Fuel Card Report</label>
                            </li>';
            }
            if ($data['reports']['fuelReport'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_fuelReport">
                                <label for="report_fuelReport">Fuel Report</label>
                            </li>';
            }
            if ($data['reports']['tollReport'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_tollReport">
                                <label for="report_tollReport">Toll Report</label>
                            </li>';
            }
            if ($data['reports']['aggingReport'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_aggingReport">
                                <label for="report_aggingReport">Aging Report</label>
                            </li>';
            }
            if ($data['reports']['payableReport'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_payableReport">
                                <label for="report_payableReport">Payable Report</label>
                            </li>';
            }
            if ($data['reports']['receivableReport'] == '1') {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_receivableReport">
                                <label for="report_receivableReport">Receivable Report</label>
                            </li>';
            }
             if ($data['reports']['Report1099'] == '1' || $data['reports']['Report1099'] == null) {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_1099Report">
                                <label for="report_1099Report">1099 Report</label>
                            </li>';
            }
             if ($data['reports']['emailTrack'] == '1' || $data['reports']['emailTrack'] == null) {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_emailTrack">
                                <label for="report_emailTrack">Email Track</label>
                            </li>';
            }
            if ($data['reports']['laneAnalysis'] == '1' || $data['reports']['laneAnalysis'] == null) {
                $output .= '<li>
                                <input type="checkbox"  name="report"
                                    id="report_laneAnalysis">
                                <label for="report_laneAnalysis">Lane Analysis</label>
                            </li>';
            }

            $output .= '</ul>
                    </h6>
                </div>';
        }
        $output .= '</div>';
        //return response()->json($output, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
         echo $output;
    }
   

    
}
