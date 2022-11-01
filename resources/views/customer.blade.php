  <!-- Latest compiled and minified bootstrap-select CSS --> 
<!------------------------------------------------------------------- customer modal ------------------------------------------------------------------->
<div class="container">

    <div class="modal fade" data-backdrop="static" id="customerModal" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer</h5>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <button href="#addCustomerModal" data-toggle="modal" data-target="#addCustomerModal" class="login_btn btn1 add1button addCustomerButton" style="vertical-align:middle"><span>Add </span></button>
                <div class="modal-body" style="overflow-y: auto !important;">

                    <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Customer Name</th>
                                <th>Location</th>
                                <th>Zip</th>
                                <th>Primary Contacte</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="customerTable">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btnclose" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------ over customer modal ------------------------------------------------------------------>
 <!------------------------------------------------------------------  add customer modal ------------------------------------------------------------------>
 <div class="container">

<div class="modal fade" data-backdrop="static" id="addCustomerModal" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title">Add Customer</h5> -->
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- <button href="#addCustomerModal" data-toggle="modal" data-target="#addCustomerModal" class="login_btn btn1 add1button" style="vertical-align:middle"><span>Add </span></button>
            <button href="#addCustomerModal" data-toggle="modal" data-target="#addCustomerModal" class="login_btn btn1 add1button" style="vertical-align:middle"><span>Add </span></button> -->
            
            <div class="modal-body" style="overflow-y: auto !important;">

                <div class="container">
                
                    <!-- <table class="nav nav-tabs">
                        <tr><td class="active"><a data-toggle="tab" href="#home">Home</td><td a data-toggle="tab" href="#menu1">Menu</td></tr>
                    </table> -->
                    <ul class="nav nav-tabs">
                        <!-- <li class="active add1button" style="width:200px; color:white;"><a data-toggle="tab" href="#addCustomerTab" >Add Customer</a></li> -->
                        <li class=" add1button" style="width:500px; color:white;"><a onClick="show_add_customer()" class="add_customer_btn" data-toggle="tab" href="#addCustomerTab" >Add Customer</a></li>
                        <li class=" add1button" style="width:500px; color:white;"><a data-toggle="tab" href="#addAdvanceCustomerTab" class="add1button advanceTabCustomer" >Add Advance</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="addCustomerTab" class="tab-pane fade in active">
                            <!-- <h3>Add Customer</h3> -->
                            <form>
                                <!-- @csrf -->
                                <input type="hidden" name="_token" id="_tokenCustomer" value="{{ csrf_token() }}" />
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="customerName">Customer Name  <span style="color:#ff0000">*</span></label>
                                        <input type="text" class="form-control" id="customerName" placeholder=" Enter Customer Name" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerAddress">Address <span style="color:#ff0000">*</span> </label>
                                        <input type="text" class="form-control" id="customerAddress"placeholder="Enter Address">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerLocation">Location <span style="color:#ff0000">*</span>  </label>
                                        <input type="text" class="form-control" id="customerLocation"placeholder="Enter Location">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerZip">Zip  <span style="color:#ff0000">*</span></label>
                                        <input type="text" class="form-control" id="customerZip"placeholder="Enter Zip">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="customerBillingAddressChkbox">Billing Address : </label>
                                        <!-- <input type="checkbox" class="form-control " id="" value="Same as Mailing Address"> -->
                                        <input type="checkbox" id="customerBillingAddressChkbox" name=""> Same as Mailing Address
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="customerBillingAddress">Billing Address</label>
                                        <input type="text" class="form-control" id="customerBillingAddress" placeholder=" Enter Billing Address" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerBillingLocation">Location  </label>
                                        <input type="text" class="form-control" id="customerBillingLocation"placeholder="Enter Location">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerBillingZip">Zip </label>
                                        <input type="text" class="form-control" id="customerBillingZip"placeholder="Enter Zip">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerPrimaryContact">Primary Contact </span></label>
                                        <input type="text" class="form-control" id="customerPrimaryContact" placeholder=" Enter Primary Contact" >
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="customerTelephone">Telephone  </label>
                                        <input type="text" class="form-control" id="customerTelephone"placeholder="Enter Telephone">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerExt">Ext </label>
                                        <input type="text" class="form-control" id="customerExt"placeholder="Enter Ext">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerEmail">Email</label>
                                        <input type="text" class="form-control" id="customerEmail" placeholder=" Enter Email" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerFax">Fax  </label>
                                        <input type="text" class="form-control" id="customerFax"placeholder="Enter Fax">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="customerBillingContact">Billing Contact </span></label>
                                        <input type="text" class="form-control" id="customerBillingContact" placeholder="Enter Billing Contact" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerBillingEmail">Billing Email  </label>
                                        <input type="text" class="form-control" id="customerBillingEmail"placeholder="Enter Billing Email">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerBillingTelephone">Billing Telephone</label>
                                        <input type="text" class="form-control" id="customerBillingTelephone"placeholder="Enter Billing Telephone">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerBillingExt">Ext</label>
                                        <input type="text" class="form-control" id="customerBillingExt"placeholder="Enter Ext">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="customerUrs">URS</span></label>
                                        <input type="text" class="form-control" id="customerUrs" placeholder=" Enter" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="customerMc">M.C.</label>
                                        <input type="text" class="form-control" id="customerMc"placeholder="Enter">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="customerBlacklisted">Blacklisted :</span></label>
                                        <!-- <input type="checkbox" class="form-control " id="" value="Same as Mailing Address"> -->
                                        <input type="checkbox" id="customerBlacklisted" name=""> This Customer is Blacklisted
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="customerIsBroker">Is Broker :</span></label>
                                        <input type="checkbox" id="customerIsBroker" name=""> This is a Broker
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="customerDuplicate">Duplicate :</span></label>
                                        <input type="checkbox" id="customerDuplicateShipper" name="" > As a Shipper
                                        <input type="checkbox" id="customerDuplicateConsignee" name="" > As a Consignee
                                    </div>
                                </div>
                            
                            <div class="modal-footer">
                                <!-- <a type="" href="#addAdvanceCustomerTab" class="btn btn-primary customerNextt advanceTabCustomer"> -->
                                <a data-toggle="tab" href="#addAdvanceCustomerTab" class="add1button advanceTabCustomer" style="align:right;" >Next</a>
                                <!-- <a type="submit" class="btn btn-primary customerDataSubmit">Save</a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                            </div>
                            <!-- </form> -->
                        </div>
                        <div id="addAdvanceCustomerTab" class="tab-pane fade">
                            <br>
                            <!-- <form> -->
                            <!-- <input type="hidden" name="_token" id="_tokenCustomer" value="{{ csrf_token() }}" /> -->
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="customerCurrencySetting">Currency Setting+</label>
                                    <!-- <input type="text" class="form-control" id="customerCurrencySetting" placeholder=" Enter Billing Address" > -->
                                    <div class="dropdown show">
                                        <select name="currency" id="currency" class="customerCurrencySet btn-dropdown">
                                        <option value="">Select Currency</option>
                                        </select>
                                        <!-- <div class="list">
                                            <select name="cars" id="cars" data-live-search="true">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="opel">Opel</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="customerPaymentTerms">Payment Terms + </label>
                                    <div class="dropdown show">
                                        <select name="PaymentTerms" id="PaymentTerms" class="customerPaymentTermSet btn-dropdown">
                                        <option value="">Select Payment Terms</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="customerCreditLimit">Credit Limit $ </label>
                                    <input type="text" class="form-control" id="customerCreditLimit"placeholder="Enter Zip">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="customerSalesRepresentative">Sales Representative </span></label>
                                    <input type="text" class="form-control" id="customerSalesRepresentative" placeholder=" Enter Sales Representative" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="customerBFactoringCompany">Factoring Company +</label>
                                    <div class="dropdown show">
                                        <select name="customerBFactoringCompany" id="customerBFactoringCompany" class="customerBFactoringCompanySet btn-dropdown">
                                        <option value="">Select Factoring Company</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="customerFederalID">Federal ID</label>
                                    <input type="text" class="form-control" id="customerFederalID" placeholder="Enter Federal ID">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="customerWorkerComp">Worker's Comp # </label>
                                    <input type="text" class="form-control" id="customerWorkerComp" placeholder="Enter Worker's Comp">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="customerWebsiteURL">Website URL </span></label>
                                    <input type="text" class="form-control" id="customerWebsiteURL" placeholder=" Enter Website URL" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="customerNumbersonInvoice">Numbers on Invoice</label><br>
                                    <input type="checkbox" id="customerNumbersonInvoice" name=""> Show tel. and fax number on Invoice
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="customerCustomerRate">Customer Rate </label><br>
                                    <input type="checkbox" id="customerCustomerRate" name=""> Show detailed Rate on Invoice
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="customerInternalNotes">Internal Notes</label>
                                    <input type="text" class="form-control" id="customerInternalNotes"placeholder="Enter Internal Notes">
                                </div>
                                <div class="modal-footer" style="align:right;">
                                    <!-- <a type="" href="#addAdvanceCustomerTab" class="btn btn-primary customerNextt advanceTabCustomer">Next</a> -->
                                    <a type="submit" class="btn btn-primary customerDataSubmit">Save</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
           
            <!-- <div class="modal-footer">
                <button class="btnclose" data-bs-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
</div>
 
<!------------------------------------------------------------------ over add customer modal ------------------------------------------------------------------>