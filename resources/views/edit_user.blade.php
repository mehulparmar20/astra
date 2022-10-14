<!-- driver modal -->
<div class="container">
    <!-- <h2>Large Modal</h2> -->
    <!-- Button to Open the Modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open modal
        </button> -->

    <!-- The Modal -->
    <div class="modal fade" id="userEditModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">






                    <!--app-content open-->
                    <!-- <div class="app-content main-content mt-0">
                            <div class="side-app"> -->
                    <!-- CONTAINER -->
                    <!-- <div class="main-container container-fluid"> -->

                    <!-- Row -->
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- <div class="card-header border-bottom">
                                                        <h3 class="card-title">Editable File Export Datatable</h3>
                                                    </div> -->
                                    <div class="card-body">
                                        <div class="table-responsive export-table">
                                            <form method="post">
                                                @csrf
                                                <input type="hidden" name="_token" id="newcsrf" value="{{Session::token()}}">
                                                <input type="hidden" name="email4" id="email4">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="editFirstName4">First Name</label>
                                                        <input type="text" class="form-control" name="editFirstName4" id="editFirstName4"
                                                            placeholder="First Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="editLastName4">Last Name</label>
                                                        <input type="email" class="form-control" name="editLastName4" id="editLastName4"
                                                            placeholder="Last Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="editUsername4">Username</label>
                                                        <input type="text" class="form-control" name="editUsername4" id="editUsername4"
                                                            placeholder="Username">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="editEmail4">Email</label>
                                                        <input type="email" class="form-control" name="editEmail4" id="editEmail4"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="editAddress">Address</label>
                                                    <input type="text" class="form-control" name="editAddress" id="editAddress"
                                                        placeholder="1234 Main St">
                                                </div>
                                                <div class="form-group">
                                                    <label for="editLocation">Location</label>
                                                    <input type="text" class="form-control" name="editLocation" id="editLocation"
                                                        placeholder="Apartment, studio, or floor">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-2">
                                                        <label for="editZip">Zip</label>
                                                        <input type="text" class="form-control" name="editZip" id="editZip">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="editCompanyName">Company Name</label>
                                                        <select id="editCompanyName" name="editCompanyName" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="editOffice">Office</label>
                                                        <select id="editOffice" name="editOffice" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="editTelephone">Telephone</label>
                                                        <input type="tel" class="form-control" name="editTelephone" id="editTelephone">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="editExt">Ext</label>
                                                        <input type="text" class="form-control" name="editExt" id="editExt">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="editTollFree">Toll Free</label>
                                                        <input type="tel" class="form-control" name="editTollFree" id="editTollFree">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="editFax">Fax</label>
                                                        <input type="text" class="form-control" name="editFax" id="editFax">
                                                    </div>
                                                </div>                                                          
                                                <br>
                                                <a type="submit" class="btn btn-primary" id="useredit">Submit</a>
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


                    <!-- </div>

                            </div>
                        </div> -->
                    <!-- CONTAINER CLOSED -->





                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>