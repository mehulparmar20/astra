<!-- Add Company modal -->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="addCompanyModal">
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Company</h4>
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
                                            <form enctype="multipart/form-data" method="post">
                                                @csrf
                                                <input type="hidden" name="_token" id="csrf1"
                                                    value="{{Session::token()}}">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputCompanyName4">Company Name<span
                                                                class="required"></span></label>
                                                        <input type="text" class="form-control" name="inputCompanyName4"
                                                            id="inputCompanyName4" placeholder="Company Name">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputShippingAddress4">Shipping Address</label>
                                                        <input type="text" class="form-control"
                                                            name="inputShippingAddress4" id="inputShippingAddress4"
                                                            placeholder="Shipping Address">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputTelephoneNo4">Telephone No<span
                                                                class="required"></span></label>
                                                        <input type="tel" class="form-control telephone4"
                                                            name="inputTelephoneNo4" id="inputTelephoneNo4"
                                                            placeholder="Telephone No">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputFaxNo4">Fax No</label>
                                                        <input type="text" class="form-control" name="inputFaxNo4"
                                                            id="inputFaxNo4" placeholder="Fax No">
                                                    </div>

                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputMcNo4">M.C. No</label>
                                                        <input type="text" class="form-control" name="inputMcNo4"
                                                            id="inputMcNo4" placeholder="M.C. No">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputUsDotNo4">US DOT No</label>
                                                        <input type="text" class="form-control" name="inputUsDotNo4"
                                                            id="inputUsDotNo4" placeholder="US DOT No">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputEmailAddress4">Email Address<span
                                                                class="required"></span></label>
                                                        <input type="email" class="form-control" name="inputEmailAddress4"
                                                            id="inputEmailAddress4" placeholder="Email">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputFactoringCompany4">Factoring Company<span><i
                                                                    class="fa fa-plus"
                                                                    aria-hidden="true"></i></span></label>
                                                        <select id="inputFactoringCompany4"
                                                            name="inputFactoringCompany4" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputWebsite4">Website</label>
                                                        <input type="text" class="form-control" name="inputWebsite4"
                                                            id="inputWebsite4" placeholder="Website">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputFile4">Upload File</label>
                                                        <input type="file" class="form-control" name="inputFile4"
                                                            id="inputFile4">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a type="submit" class="btn btn-primary" data-dismiss="modal" id="companyDataSubmit">Submit</a>
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

<!-- </div>
</div>
</div>
</div> -->