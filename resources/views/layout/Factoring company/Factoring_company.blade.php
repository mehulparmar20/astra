<!------------------------------------------------------------------- Facoring Company modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="FacoringCompanyModal">
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Facoring Company</h4>
                    <button type="button" class="button-24" data-dismiss="modal">&times;</button>
                </div>

                <div style="margin-top: 15px; margin-left: 15px;">
                    <a href="#AddFacoringCompanymodal" class="button-57 addFactoringModel">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <span>Add Facoring Company</span>
                    </a>
                    <a class="button-57" data-toggle="modal"><i class="fa fa-file-excel-o" aria-hidden="true"></i></span><span>Export CSV</span></a>
                    <a class="button-57" data-toggle="modal"><i class="fa fa-upload" aria-hidden="true"></i></span><span>Upload File</span></a>
                    <a href="#contractCategoryModal" class="button-57_alt" data-toggle="modal" data-target="#contractCategoryModal"><i class="fa fa-id-card" aria-hidden="true"></i></span><span>Button 3</span></a>
                    <div class="searchbar" style="float: right; margin-right: 15px;">
                        <input type="text" placeholder="search" />
                        <div class="symbol">
                            
                            <svg class="lens">
                            <use xlink:href="#lens" />
                            </svg>
                        </div>
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
                                                        <th>NO</th>
                                                        <th > Factoring Company Name</th>
                                                        <th>Address</th>
                                                        <th>Location</th>
                                                        <th>Postal/Zip</th>
                                                        <th>Primary Contact</th>
                                                        <th>Telephone</th>
                                                        <th>Ext</th>
                                                        <th>Fax</th>
                                                        <th>Toll Free</th>
                                                        <th>Contact Email</th>
                                                        <th>Secondary Contact</th>
                                                        <th>Telephone</th>
                                                        <th>Ext</th>
                                                        <th>Currency Setting</th>
                                                        <th>Payment Terms</th>
                                                        <th>Tax ID</th>
                                                        <th>Internal Notes</th>
                                                       
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="factCompTable">

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
                    <button type="button" class="button-29" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- SVG -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" id="cloud">
    <path d="M31.714,25.543c3.335-2.17,4.27-6.612,2.084-9.922c-1.247-1.884-3.31-3.077-5.575-3.223h-0.021
	C27.148,6.68,21.624,2.89,15.862,3.931c-3.308,0.597-6.134,2.715-7.618,5.708c-4.763,0.2-8.46,4.194-8.257,8.919
	c0.202,4.726,4.227,8.392,8.991,8.192h4.873h13.934C27.784,26.751,30.252,26.54,31.714,25.543z" />
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="lens">
    <path d="M15.656,13.692l-3.257-3.229c2.087-3.079,1.261-7.252-1.845-9.321c-3.106-2.068-7.315-1.25-9.402,1.83
	s-1.261,7.252,1.845,9.32c1.123,0.748,2.446,1.146,3.799,1.142c1.273-0.016,2.515-0.39,3.583-1.076l3.257,3.229
	c0.531,0.541,1.404,0.553,1.95,0.025c0.009-0.008,0.018-0.017,0.026-0.025C16.112,15.059,16.131,14.242,15.656,13.692z M2.845,6.631
	c0.023-2.188,1.832-3.942,4.039-3.918c2.206,0.024,3.976,1.816,3.951,4.004c-0.023,2.171-1.805,3.918-3.995,3.918
	C4.622,10.623,2.833,8.831,2.845,6.631L2.845,6.631z" />
  </symbol>
</svg>  
 <!-- ============ start addFactoringModel================ -->
 <div class="container">
    <div class="modal fade" data-backdrop="static" id="addFactoringModel" role="dialog">
        <div class="modal-dialog custom_modal" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Factoring Company</h4>
                    <button type="button" class="closeaddFactoringModel" >&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <!-- Row -->
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="addFactoringModel">
                                            @csrf
                                            <input type="hidden" name="_token" id="_tokenAddFactoring" value="{{ csrf_token() }}" />
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label>Factoring Company Name<span style="color:#ff0000">*</span></label>
                                                    <div>
                                                        <input class="form-control" placeholder="Factoring Company Name" type="text" id="addFactoringCompanyname" name="factoringCompanyname" required />
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-md-2">
                                                    <label>Address <span style="color:#ff0000">*</span></label>
                                                    <div>
                                                        <input class="form-control" placeholder="Address" type="text" id="addFacAddress" name="address" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Loction <span style="color:#ff0000">*</span></label>
                                                    <div>
                                                        <input class="form-control" placeholder="Enter Location" type="text" id="addFaclocation" name="location" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Postal / Zip<span style="color:#ff0000">*</span> </label>
                                                    <div>
                                                        <input class="form-control" placeholder="Postal / Zip" type="text" id="addFacZip" name="zip" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Primary Contact </label>
                                                    <div>
                                                        <input class="form-control" placeholder="Primary Contact" type="text" id="addFacPrimaryContact" name="primaryContact">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Telephone </label>
                                                    <div>
                                                        <input class="form-control" placeholder="(___) ___ - ____" type="text" id="addFacTelephone" name="telephone">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Ext Factoring </label>
                                                    <div>
                                                        <input class="form-control" placeholder="Ext" type="text" id="addFacExtFactoring" name="extFactoring">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Fax </label>
                                                    <div>
                                                        <input class="form-control" placeholder="(___) ___ - ____" type="text" id="addFacFax" name="fax">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Toll Free </label>
                                                    <div>
                                                        <input class="form-control" placeholder="(___) ___ - ____" type="text" id="addFacTollFree" name="tollFree">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Contact Email </label>
                                                    <div>
                                                        <input class="form-control" placeholder="Contact Email" type="email" id="addFacEmail" name="email">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Secondary Contact </label>
                                                    <div>
                                                        <input class="form-control" placeholder="Secondary Contact " type="text" id="addFacSecondaryContact" name="secondaryContact">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Factoring Telephone </label>
                                                    <div>
                                                        <input class="form-control" placeholder="(___) ___ - ____" type="text" id="addFacFactoringtelephone" name="factoringtelephone">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 ">
                                                    <label>Ext </label>
                                                    <div>
                                                        <input class="form-control" placeholder="Ext" type="text" id="addFacExt" name="ext">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label >Currency Setting <span style="color:#ff0000">*</span>&nbsp; 
                                                    <span class="glyphicon glyphicon-plus-sign addcurrencySetting "  data-toggle="modal"  style="cursor:pointer;"></span>
                                                    </label>
                                                        <div class="dropdown show">
                                                            <input class="form-control currencySetting_option" list="currencySetting_option" name="currencyType" id="currencyType">
                                                            <datalist id="currencySetting_option" class="currencySetting_option">
                                                                <option>Select Here</option>
                                                              
                                                            </datalist>
                                                        </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Payment Terms <span style="color:#ff0000">*</span>&nbsp; 
                                                    <span class="glyphicon glyphicon-plus-sign addpaymentTerms " id="addpaymentTerms" data-toggle="modal"  style="cursor:pointer;"></span>
                                                    </label>
                                                        <div class="dropdown show">
                                                            <input class="form-control paymentTerms_option" list="paymentTerms_option" name="paymentTerms" id="paymentTerms">
                                                            <datalist id="paymentTerms_option" class="paymentTerms_option">
                                                                <option>Select Here</option>
                                                              
                                                            </datalist>
                                                        </div>
                                                </div>
                                            <div class="form-row">
                                                
                                            <div class="form-group col-md-4 ">
                                                    <label>taxID </label>
                                                    <div>
                                                        <input class="form-control" placeholder="__-_______" type="text" id="addFactaxID" name="taxID">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Internal Notes</label>
                                                    <div>
                                                        <textarea rows="2" cols="30" class="form-control" type="textarea" id="addFacInternalNote" placeholder="Internal Note" name="internalNote"></textarea>
                                                    </div>
                                                </div>
                                                
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" style="vertical-align:middle" class="button-29" id="saveFactoringModel" >Save</button>
                    <button type="button"style="vertical-align:middle" class=" closeaddFactoringModel button-29" >Close</button>
                </div>          
            </div>
        </div>
    </div>
</div>
<!-- ========== end addFactoringModel ========== -->

<!-- ========== strart Factoring Model Modal ========== -->
<div class="modal fade" id="addCreateCurrency"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Create Currency</h5>
        <button type="button" class="close closeaddCreateCurrency" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addTrailerTypeForm">
            @csrf
            <input type="hidden" name="_token" id="_tokenTrailerType" value="{{ csrf_token() }}" />
            <div class="form-group col-md-12">
                <label>Name<span style="color:#ff0000">*</span></label>
                <div>
                    <input class="form-control" placeholder="Currency type" type="text" id="saveCurrencyType" name="currencyType" required />
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="button-29 closeaddCreateCurrency" data-dismiss="modal">Close</button>
        <button type="button" class="button-29 saveaddCreateCurrency " >Save </button>
      </div>
    </div>
  </div>
</div>

<!-- ==================== end add Factoring Model model ===================== -->


<!-- =====================  strart Payment Terms Modal  ======================== -->
<div class="modal fade" id="addPaymentTerms"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Create Payment Terms</h5>
        <button type="button" class="close closeadPaymentTerms" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addTrailerTypeForm">
            @csrf
            <input type="hidden" name="_token" id="_tokenPaymentTerms" value="{{ csrf_token() }}" />
            <div class="form-group col-md-12">
                <label>Name<span style="color:#ff0000">*</span></label>
                <div>
                    <input class="form-control" placeholder="Enter Name" type="text" id="trailer_type_name" name="trailer_type_name" required />
                </div>
            </div>
            <div class="form-group col-md-12">
                <label>Net Days<span style="color:#ff0000">*</span></label>
                <div>
                    <select name="" class="form-control">
                        <option>select one</option>
                        <?php 
                        $j=180;
                        for($i=1; $j>=$i; $i++){
                        ?>
                        <option value="{{$i}}">{{$i}}</option>
                        <?php }?>
                    </select>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="button-29 closeadPaymentTerms" data-dismiss="modal">Close</button>
        <button type="button" class="button-29 savePaymentTerms " >Save </button>
      </div>
    </div>
  </div>
</div>

<!-- ==================== end add Factoring Model l ===================== -->