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
                    <button type="button" class="button-24 fuelReceiptCloselist" >&times;</button>
                </div>

                <div style="margin-top: 15px; margin-left: 15px;">
                    <button class="button-57_alt create_fuel_receipt_modal_form_btn" ><i class="fa fa-plus" aria-hidden="true"></i><span>Add </span></button>

                    <button class="button-57_alt restoreFuelReceiptData" ><i class="fa fa-repeat " aria-hidden="true"></i><span>Restore </span></button>
                    <!-- <a href="" class="button-57 create_fuel_receipt_modal_form_btn" ><i class="fa fa-plus" aria-hidden="true"></i><span>Add</span></a> -->
                    <!-- <a class="button-57" data-toggle="modal"><i class="fa fa-file-excel-o" aria-hidden="true"></i></span><span>Export CSV</span></a>
                    <a class="button-57" data-toggle="modal"><i class="fa fa-upload" aria-hidden="true"></i></span><span>Upload File</span></a>
                    <a href="#contractCategoryModal" class="button-57_alt" data-toggle="modal" data-target="#contractCategoryModal"><i class="fa fa-id-card" aria-hidden="true"></i></span><span>Button 3</span></a> -->
                    <div class="searchbar" style="float: right; margin-right: 15px;">
                        <input type="text" placeholder="search" />
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
                                        <thead>
                                        <tr>
                                           
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
                    <button type="button" class="button-29 fuelReceiptCloselist">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

<!--================================ create fuel receipts modal ======================= -->
<div class="container">
    <div class="modal fade" data-backdrop="static" id="Create_FuelReceiptsModal" role="dialog">
        <div class="modal-dialog custom_modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Fuel Receipts </h4>
                    <button type="button" class="closeFuelReceiptsModal" >&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="" >
                                            @csrf
                                            <input type="hidden" name="_token" id="_token_addFuelReceipts" value="{{ csrf_token() }}" />
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label>Driver Name
                                                        <!-- <span style="color:#ff0000">*</span> -->
                                                    </label>
                                                    <div>
                                                       <select class="form-control addFuelReceiptDriver_name" name="driverName"> 
                                                         <option>select one </option>
                                                       </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Driver No
                                                    </label>
                                                        <div class="dropdown show">
                                                            <input class="form-control add_fuelReceiptDriverNumber" type="text" 
                                                            name="driverNo" readonly />
                                                        </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Card Number</label>
                                                    <div>
                                                        <input class="form-control addFuelReceiptCardNumber"  type="text"
                                                            name="cardNumber" readonly />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Fuel Vendor </label>
                                                    <div>
                                                        <input class="form-control addFuelReceiptFuelVendor" type="text" name="fuelVendor" readonly />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Fuel Type</label>
                                                    <div>
                                                        <input class="form-control addFuelReFuelType" type="text" name="fuelType">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Truck Number<span style="color:#ff0000">*</span>
                                                        </label>
                                                    <select class="form-control addFuelReceiptTruckNumber"  name="truckNumber" required>
                                                        <option>select one</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- row 3 -->
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label >Date<span style="color:#ff0000">*</span></label>
                                                    <input class="form-control addFuelReceiptDate"  type="date"  name="date" required>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Transaction Time <span style="color:#ff0000">*</span> </label>
                                                    <input class="form-control addFuelReceiptTransactionTime"  type="time"  name="transactionTime">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label >Location Name <span style="color:#ff0000">*</span></label>
                                                    <!-- <input class="form-control addFuelReceiptLocationName" name="locationName" type="text"> -->
                                                    <select class="form-control addFuelReceiptLocationName" name="locationName" required > 
                                                        <option> select one</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label >Location City</label>
                                                    <input class="form-control addFuelReceiptLocationCity" name="locationCity" type="text">
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label >Location State <span style="color:#ff0000">*</span></label>
                                                    <select class="form-control addFuelReceiptLocationState" name="locationState" required > 
                                                        <option> select one</option>
                                                    </select>
                                                </div>
                                               
                                                <div class="form-group col-md-2">
                                                    <label >Quantity <span style="color:#ff0000">*</span></label>
                                                    <input class="form-control addFuelReceiptQuantity " name="quantity " type="number" required>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label >Amount <span style="color:#ff0000">*</span></label>
                                                    <input class="form-control addFuelReceiptAmount " name="amount " type="number" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Total Amount </label>
                                                    <input class="form-control addFuelReceipttotalAmount " name="totalAmount " type="number" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Transaction Discount </label>
                                                    <input class="form-control addFuelReceipttransactionDiscount " name="transactionDiscount " type="number" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Transaction Fee </label>
                                                    <input class="form-control addFuelReceipttransactionFee " name="transactionFee " type="number" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Transaction Gross </label>
                                                    <input class="form-control addFuelReceipttransactionGross " name="transactionGross " type="number" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Invoice No</label>
                                                    <select class="form-control addFuelReceiptinvoiceNo " name="invoiceNo "> 
                                                        <option>select one </option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" style="vertical-align:middle" class="button-29 saveFuelReceiptsModal"  >save</button>
                    <button type="button"style="vertical-align:middle" class=" closeFuelReceiptsModal button-29" >Close</button>
                </div>          
            </div>
        </div>
    </div>
</div>
 <!--============================ end create fuel receipts =========================== -->



 <!--================================ update fuel receipts modal ======================= -->
<div class="container">
    <div class="modal fade" data-backdrop="static" id="update_FuelReceiptsModal" role="dialog">
        <div class="modal-dialog custom_modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Fuel Receipts </h4>
                    <button type="button" class="closeUpdateFuelReceiptsModal" >&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="" >
                                            @csrf
                                            <input type="hidden" name="_token" id="_token_updateFuelReceipts" value="{{ csrf_token() }}" />
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label>Driver Name
                                                        <!-- <span style="color:#ff0000">*</span> -->
                                                    </label>
                                                    <div>
                                                       <select class="form-control updateFuelReceiptDriver_name" name="driverName"> 
                                                         <option>select one </option>
                                                       </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Driver No
                                                    </label>
                                                        <div class="dropdown show">
                                                            <input class="form-control update_fuelReceiptDriverNumber" type="text" 
                                                            name="driverNo" readonly />
                                                        </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Card Number</label>
                                                    <div>
                                                        <input class="form-control updateFuelReceiptCardNumber"  type="text"
                                                            name="cardNumber" readonly />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Fuel Vendor </label>
                                                    <div>
                                                        <input class="form-control updateFuelReceiptFuelVendor" type="text" name="fuelVendor" readonly />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Fuel Type</label>
                                                    <div>
                                                        <input class="form-control updateFuelReFuelType" type="text" name="fuelType">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Truck Number<span style="color:#ff0000">*</span>
                                                        </label>
                                                    <select class="form-control updateFuelReceiptTruckNumber"  name="truckNumber" required>
                                                        <option>select one</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- row 3 -->
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label >Date<span style="color:#ff0000">*</span></label>
                                                    <input class="form-control updateFuelReceiptDate"  type="date"  name="date" required>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Transaction Time <span style="color:#ff0000">*</span> </label>
                                                    <input class="form-control updateFuelReceiptTransactionTime"  type="time"  name="transactionTime">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label >Location Name <span style="color:#ff0000">*</span></label>
                                                    <!-- <input class="form-control addFuelReceiptLocationName" name="locationName" type="text"> -->
                                                    <select class="form-control updateFuelReceiptLocationName" name="locationName" required > 
                                                        <option> select one</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label >Location City</label>
                                                    <input class="form-control updateFuelReceiptLocationCity" name="locationCity" type="text">
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label >Location State <span style="color:#ff0000">*</span></label>
                                                    <select class="form-control updateFuelReceiptLocationState" name="locationState" required > 
                                                        <option> select one</option>
                                                    </select>
                                                </div>
                                               
                                                <div class="form-group col-md-2">
                                                    <label >Quantity <span style="color:#ff0000">*</span></label>
                                                    <input class="form-control updateFuelReceiptQuantity " name="quantity " type="number" required>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label >Amount <span style="color:#ff0000">*</span></label>
                                                    <input class="form-control updateFuelReceiptAmount " name="amount " type="number" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Amount </label>
                                                    <input class="form-control updateFuelReceipttotalAmount " name="totalAmount " type="number" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Transaction Discount </label>
                                                    <input class="form-control updateFuelReceipttransactionDiscount " name="transactionDiscount " type="number" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Transaction Fee </label>
                                                    <input class="form-control updateFuelReceipttransactionFee " name="transactionFee " type="number" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Transaction Gross </label>
                                                    <input class="form-control updateFuelReceipttransactionGross " name="transactionGross " type="number" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Invoice No</label>
                                                    <select class="form-control UpdateFuelReceiptinvoiceNo " name="invoiceNo "> 
                                                        <option>select one </option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" style="vertical-align:middle" class="button-29 UpdateFuelReceiptsModal"  >Update</button>
                    <button type="button"style="vertical-align:middle" class=" closeUpdateFuelReceiptsModal button-29" >Close</button>
                </div>          
            </div>
        </div>
    </div>
</div>
 <!--============================ end edit fuel receipts =========================== -->


 <!--============================= start restore fuel recepit data =============== -->
 <div class="container">
    <!-- The Modal -->
    <!-- <div class="modal fade" data-backdrop="static" id="Fuel Receipts"> -->
    <div class="modal fade" data-backdrop="static" id="restore_fuelReceiptModal">
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Restore Fuel Receipts</h4>
                    <button type="button" class="button-24 restorefuelReceiptClose" >&times;</button>
                </div>

                <div style="margin-top: 15px; margin-left: 15px;">
                    <input type="hidden" name="checked_id" id="checked_fuelRecepit" value="">
                    <input type="hidden" name="company_id" id="checked_fuelRecepit_company_ids" value="">
                    <button id="restore_Fuel_ReceiptData"  class="button-57_alt restore_Fuel_ReceiptData" disabled><i class="fa fa-repeat" aria-hidden="true"></i><span>Restore </span></button>
                    
                </div>
                <div class="modal-body" style="overflow-y: auto !important;">
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">

                                <div class="table-responsive export-table">
                                    <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100 customtable">
                                        <thead>
                                            <tr>
                                                <th ><input type="checkbox" name="fuel_ids[]" class="fuel_recepit_ids"></th>
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
                                            </tr>
                                        </thead>

                                        <tbody id="restoreFuelReceTable">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-29 restorefuelReceiptClose">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>
  <!--============================ end restore fuel recepit data ================= -->