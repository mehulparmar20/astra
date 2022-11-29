  <!-- Latest compiled and minified bootstrap-select CSS --> 
<!------------------------------------------------------------------- customer modal ------------------------------------------------------------------->
<div class="container">

    <div class="modal fade" data-backdrop="static" id="customerModal" role="dialog">
        <div class="modal-dialog custom_modal modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer</h5>
                    <button type="button" class="button-24" data-dismiss="modal">×</button>
                </div>

                <div style="margin-top: 15px; margin-left: 15px;">
                    
                    <button href="#addCustomerModal" data-toggle="modal" data-target="#addCustomerModal" class="button-57_alt addCustomerButton" ><i class="fa fa-plus" aria-hidden="true"></i><span>Add Customer</span></button>
                </div>
                
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
                    <button type="button" class="button-29" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------ over customer modal ------------------------------------------------------------------>
 <!------------------------------------------------------------------  add customer modal ------------------------------------------------------------------>
 <div class="container">
    <div class="modal fade" data-backdrop="static" id="addCustomerModal" role="dialog">
        <div class="modal-dialog custom_modal_small modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Customer</h5>
                    <button type="button" class="button-24" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body" style="overflow-y: auto !important;">
                    
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <!-- <li class="active add1button" style="width:200px; color:white;"><a data-toggle="tab" href="#addCustomerTab" >Add Customer</a></li> -->
                            <li  ><a onClick="show_add_customer()" class="button-29_alt add_customer_btn" data-toggle="tab" href="#addCustomerTab" >Add Customer</a></li>
                            <li  ><a data-toggle="tab" href="#addAdvanceCustomerTab" class="button-29_alt advanceTabCustomer" >Add Advance</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="addCustomerTab" class="tab-pane fade in active">
                                <form>
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
                                            <input type="checkbox" id="customerBillingAddressChkbox" value="off" name=""> Same as Mailing Address
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
                                        <div class="form-group col-md-4 MC">
                                            <label for="customerMc">M.C.</label>
                                            <input type="text" class="form-control" id="customerMc"placeholder="Enter">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="customerBlacklisted">Blacklisted :</span></label>
                                            <!-- <input type="checkbox" class="form-control " id="" value="Same as Mailing Address"> -->
                                            <input type="checkbox" id="customerBlacklisted" name="" value="off"> This Customer is Blacklisted
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="customerIsBroker">Is Broker :</span></label>
                                            <input type="checkbox" id="customerIsBroker" name="" value="off"> This is a Broker
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="customerDuplicate">Duplicate :</span></label>
                                            <input type="checkbox" id="customerDuplicateShipper" name="" value="off"> As a Shipper
                                            <input type="checkbox" id="customerDuplicateConsignee" name="" value="off"> As a Consignee
                                        </div>
                                    </div>
                                
                                    <div class="modal-footer">
                                        <a data-toggle="tab" href="#addAdvanceCustomerTab" class="button-29 advanceTabCustomer" style="align:right;" >Next</a>
                                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --> 
                                    </div>
                            </div>
                            <div id="addAdvanceCustomerTab" class="tab-pane fade">
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="customerCurrencySetting">Currency Setting  <span class="glyphicon glyphicon-plus-sign" id="plusCurrency" ></span> </label>
                                        <div class="dropdown show">

                                            <!-- <select name="currency" id="currency" class="customerCurrencySet11 btn-dropdown">
                                            <option value="">Select Currency</option>
                                            </select> -->
                                        
                                                <input class="form-control customerCurrencySet" list="customerCurrencySet" name="currency" id="currency">
                                                <datalist id="customerCurrencySet" class="customerCurrencySet"><option>Select Here</option></datalist>    
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerPaymentTerms">Payment Terms <span class="glyphicon glyphicon-plus-sign" id="plusPaymentTerms" ></span> </label>
                                        <div class="dropdown show">
                                            <!-- <select name="PaymentTerms" id="PaymentTerms" class="customerPaymentTermSet btn-dropdown">
                                            <option value="">Select Payment Terms</option>
                                            </select> -->
                                                <input class="form-control customerPaymentTermSet" list="customerPaymentTermSet" name="PaymentTerms" id="PaymentTerms">
                                                <datalist id="customerPaymentTermSet" class="customerPaymentTermSet">
                                                    <option>Select Here</option>
                                                </datalist>

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
                                        <label for="customerBFactoringCompany">Factoring Company <span class="glyphicon glyphicon-plus-sign" id="plusFactoringCompany" ></span></label>
                                        <div class="dropdown show">
                                            <!-- <select name="customerBFactoringCompany" id="customerBFactoringCompany" class="customerBFactoringCompanySet btn-dropdown">
                                            <option value="">Select Factoring Company</option>
                                            </select> -->
                                            <input class="form-control customerBFactoringCompanySet" list="customerBFactoringCompanySet" name="customerBFactoringCompany" id="customerBFactoringCompany">
                                            <datalist id="customerBFactoringCompanySet" class="customerBFactoringCompanySet">
                                                <option>Select Here</option>
                                            </datalist>
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
                                        <input type="checkbox" id="customerNumbersonInvoice" name="" value="off"> Show tel. and fax number on Invoice
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="customerCustomerRate">Customer Rate </label><br>
                                        <input type="checkbox" id="customerCustomerRate" name="" value="off"> Show detailed Rate on Invoice
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="customerInternalNotes">Internal Notes</label>
                                        <input type="text" class="form-control" id="customerInternalNotes"placeholder="Enter Internal Notes">
                                    </div>

                                    
                                    <div class="modal-footer w-100" style="align:right;">
                                        <button type="submit" class="button-29 customerDataSubmit">Save</button>
                                        <button type="button" class="button-29" data-dismiss="modal">Close</button>
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
<!------------------------------------------------------------------- Payment Terms modal ------------------------------------------------------------------->

<div class="container">
  <!-- The Modal -->
  <div class="modal" id="PaymentTermsModal" style="z-index:1000000000;">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <h5 class="modal-title">Create Payment Terms</h5>
          <button type="button" class="close" data-dismiss="modal" id="closePaymentTermsModal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <from>
                <input type="hidden" name="_token" id="_tokenCustomerPaymentTerms" value="{{ csrf_token() }}" />
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="PaymentTermsName">Payment Terms  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="PaymentTermsName" placeholder=" Enter Payment Terms" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="NetDays">Net Days <span style="color:#ff0000">*</span></label>
                        <!-- <input type="text" class="form-control" id="NetDays" placeholder=" Enter Net Days" > -->
                         <input class="form-control" list="NetDays" name="NetDay" id="NetDay" >
                        <datalist id="NetDays" >
                            @for ($i = 0; $i <= 180; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </datalist>    
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer" >
            <a type="submit" class="btn btn-primary PaymentTermsDataSubmit">Save</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closePaymentTermsModal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<!------------------------------------------------------------------ over Payment Terms modal ------------------------------------------------------------------>
<!------------------------------------------------------------------- Currency modal ------------------------------------------------------------------->

<div class="container">
  <!-- The Modal -->
  <div class="modal" id="plusCurrencyModal" style="z-index:1000000000;">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <h5 class="modal-title">Create Currency</h5>
          <button type="button" class="close" data-dismiss="modal" id="closeCurrencyModal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <from>
                <input type="hidden" name="_token" id="_tokenCustomerCurrency" value="{{ csrf_token() }}" />
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="CurrencyrName">Currency Name  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="CurrencyrName" placeholder=" Enter Currency Name" >
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer" >
            <a type="submit" class="btn btn-primary CurrencyrDataSubmit">Save</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeCurrencyModal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<!------------------------------------------------------------------ over Currency modal ------------------------------------------------------------------>
<!------------------------------------------------------------------- Currency modal ------------------------------------------------------------------->

<div class="container">
  <!-- The Modal -->
  <div class="modal" id="plusCurrencyModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <h5 class="modal-title">Create Currency</h5>
          <button type="button" class="close" data-dismiss="modal" id="closeCurrencyModal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <from>
                <input type="hidden" name="_token" id="_tokenCustomerCurrency" value="{{ csrf_token() }}" />
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="CurrencyrName">Currency Name  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="CurrencyrName" placeholder=" Enter Currency Name" >
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer" >
            <a type="submit" class="btn btn-primary CurrencyrDataSubmit">Save</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeCurrencyModal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<!------------------------------------------------------------------ over Currency modal ------------------------------------------------------------------>

<!------------------------------------------------------------------  add Factoring Company  modal ------------------------------------------------------------------>

<div class="container resizeModal">

    <div class="modal fade" data-backdrop="static" id="factoringCompanyModal" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Factoring Company</h5>
                    <button type="button" class="close" data-dismiss="modal" id="closefactoringCompanyModal">&times;</button>
                </div>

                <div class="modal-body">
                    <from>
                        <input type="hidden" name="_token" id="_tokenCustomerFactoringCompany" value="{{ csrf_token() }}" />
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="factoringCompanyName">Factoring Company Name <span style="color:#ff0000">*</span></label>
                                <input type="text" class="form-control" id="factoringCompanyName" placeholder=" Enter Factoring Company Name" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="factoringCompanyAddress">Address <span style="color:#ff0000">*</span></label>
                                <input type="text" class="form-control" id="factoringCompanyAddress" placeholder=" Enter Address " >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="factoringCompanyLocation ">Location <span style="color:#ff0000">*</span></label>
                                <input type="text" class="form-control" id="factoringCompanyLocation" placeholder=" Enter Location " >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="factoringCompanyZip">Postal / Zip   <span style="color:#ff0000">*</span></label>
                                <input type="text" class="form-control" id="factoringCompanyZip" placeholder=" Enter Zip " >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="factoringCompanyPrimaryContact">Primary Contact</label>
                                <input type="text" class="form-control" id="factoringCompanyPrimaryContact" placeholder=" Enter Primary Contact" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="factoringCompanyPrimaryContactTelephone">Telephone</span></label>
                                <input type="text" class="form-control" id="factoringCompanyPrimaryContactTelephone" placeholder=" Enter Telephone " >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="factoringCompanyPrimaryContactExt ">Ext </label>
                                <input type="text" class="form-control" id="factoringCompanyPrimaryContactExt" placeholder=" Enter Ext " >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="factoringCompanyFax">Fax</label>
                                <input type="text" class="form-control" id="factoringCompanyFax" placeholder=" Enter Fax " >
                            </div>
                            
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-3">
                                <label for="factoringCompanySecondaryContact">Secondary  Contact</label>
                                <input type="text" class="form-control" id="factoringCompanySecondaryContact" placeholder=" Enter Secondary  Contact" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="factoringCompanySecondaryContactTelephone">Telephone </label>
                                <input type="text" class="form-control" id="factoringCompanySecondaryContactTelephone" placeholder=" Enter Telephone " >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="factoringCompanySecondaryContactExt ">Ext </label>
                                <input type="text" class="form-control" id="factoringCompanySecondaryContactExt" placeholder=" Enter Ext " >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="factoringTollFree">Toll Free   </label>
                                <input type="text" class="form-control" id="factoringTollFree" placeholder=" Enter Toll Free " >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="factoringCompanyContactEmail">Contact Email</label>
                                <input type="text" class="form-control" id="factoringCompanyContactEmail" placeholder=" Enter Contact Email" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="customerCurrencySetting">Currency Setting <span class="glyphicon glyphicon-plus-sign" id="plusCurrency2" ></span> </label>
                                <div class="dropdown show">
                                    <input class="form-control customerCurrencySet " list="customerCurrencySet" name="currency" id="currency">
                                    <datalist id="customerCurrencySet" class="customerCurrencySet"></datalist>    
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                    <label for="customerPaymentTerms">Payment Terms <span class="glyphicon glyphicon-plus-sign" id="plusPaymentTerms2" ></span> </label>
                                    <div class="dropdown show">
                                        <!-- <select name="PaymentTerms" id="PaymentTerms" class="customerPaymentTermSet btn-dropdown">
                                        <option value="">Select Payment Terms</option>
                                        </select> -->
                                        <input class="form-control customerPaymentTermSet" list="customerPaymentTermSet" name="PaymentTerms" id="PaymentTerms">
                                    <datalist id="customerPaymentTermSet" class="customerPaymentTermSet"></datalist>    
                                    </div>
                                </div>
                            <div class="form-group col-md-2">
                                <label for="factoringCompanyTaxID">Tax ID  <span style="color:#ff0000">*</span></label>
                                <input type="text" class="form-control" id="factoringCompanyTaxID" placeholder=" Enter Tax ID " >
                            </div>
                        </div>
                        <div class="form-row">
                            
                            <div class="form-group col-md-12">
                                <label for="factoringCompanyInternalNotes">Internal Notes</label>
                                <textarea  rows="2" cols="50" class="form-control" id="factoringCompanyInternalNotes"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            
                <!-- Modal footer -->
                <div class="modal-footer" >
                    <a type="submit" class="btn btn-primary factoringCompanyDataSubmit">Save</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closefactoringCompanyModal">Close</button>
                   
                </div>
            </div>
        </div>
    </div>
</div>
 
<!------------------------------------------------------------------ over add Factoring Company  modal ------------------------------------------------------------------>
