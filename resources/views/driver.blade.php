
<!------------------------------------------------------------------- driver modal ------------------------------------------------------------------->
<div class="container">
        <!-- The Modal -->
        <div class="modal fade" id="driverModal">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Driver</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                        <a href="#addDriverModal" class="btn btn-primary slide-item" data-toggle="modal" data-target="#addDriverModal" >Add</a>
                                                        <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100">
                                                            <!-- <table id="" class="table editable-table table-nowrap table-bordered table-edit wp-100"> -->
                                                                <thead>
                                                                    <tr>
                                                                    <!-- <th>counter</th> -->
                                                                    <th>NO</th>
                                                                    <th style="">Name</th>
                                                                    <th>Email</th>
                                                                    <th>Location</th>
                                                                    <th>Social Security No</th>
                                                                    <th>Date of Birth</th>
                                                                    <th>Date of Hire</th>
                                                                    <th>License No</th>
                                                                    <th>LIS</th>
                                                                    <th>License Exp.Date</th>
                                                                    <th>Driver Balance</th>
                                                                    <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="driverTable">
                                                                   
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
        
    </div>

    <!-------------------------------------------------------------------over driver modal------------------------------------------------------------------->

     <!------------------------------------------------------------------  add driver modal ------------------------------------------------------------------>

<div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="addDriverModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Driver</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                            <form>
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="name">Name <span style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control required" id="name" placeholder=" Name" >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="username">Username</label>
                                                        <input type="text" class="form-control" id="username"placeholder="username">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="address">Address <span style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="address" placeholder="address">
                                                    </div>   
                                                    <div class="form-group col-md-3">
                                                        <label for="telephone">Telephone <span style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="telephone"
                                                            placeholder="Telephone">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="altTelephone">Alt - Tel #</label>
                                                        <input type="text" class="form-control" id="altTelephone"
                                                            placeholder="Telephone">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" id="password"
                                                            placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-row">   
                                                    <div class="form-group col-md-4">
                                                        <label for="location">Location <span style="color:#ff0000">*</span> </label>
                                                        <input type="text" class="form-control" id="location"
                                                            placeholder="Location">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="zip">Zip <span style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="zip"
                                                            placeholder="Zip">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="status">Status</label>
                                                        <input type="text" class="form-control" id="status"
                                                            placeholder="Status">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="socialSecurityNo">Social Security No </label>
                                                        <input type="text" class="form-control" id="socialSecurityNo"
                                                            placeholder="Social Security No">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="dateOfBirth">Date of Birth </label>
                                                        <input type="date" class="form-control" id="dateOfBirth"
                                                            placeholder="Date of Birth">
                                                    </div>
                                                
                                                    <div class="form-group col-md-4">
                                                        <label for="dateOfHire">Date of Hire</label>
                                                        <input type="date" class="form-control" id="dateOfHire"
                                                            placeholder="Date of Hire">
                                                    </div>
                                                </div>

                                                <div class="form-row">   
                                                    <div class="form-group col-md-4">
                                                        <label for="licenseNo">License No.<span style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="licenseNo"
                                                            placeholder="License No">
                                                    </div>
                                               
                                                    <div class="form-group col-md-4">
                                                        <label for="licenseIssueState">License Issue State <span style="color:#ff0000">*</span> </label>
                                                        <input type="text" class="form-control" id="licenseIssueState"
                                                            placeholder="License Issue State">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="licenseExpDate">License Exp. Date <span style="color:#ff0000">*</span></label>
                                                        <input type="date" class="form-control" id="licenseExpDate"
                                                            placeholder="License Exp. Date">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="lastMedical">Last Medical</label>
                                                        <input type="date" class="form-control" id="lastMedical"
                                                            placeholder="Last Medical">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="nextMedical">Next Medical</label>
                                                        <input type="date" class="form-control" id="nextMedical"
                                                            placeholder="Next Medical">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="lastDrugTest">Last Drug Test </label>
                                                        <input type="date" class="form-control" id="lastDrugTest"
                                                            placeholder="Last Drug Test">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="nextDrugTest">Next Drug Test </label>
                                                        <input type="date" class="form-control" id="nextDrugTest"
                                                            placeholder="Next Drug Test">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="passportExpiry">Passport Expiry</label>
                                                        <input type="date" class="form-control" id="passportExpiry"
                                                            placeholder="Passport Expiry">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="fastCardExpiry">Fast Card Expiry</label>
                                                        <input type="date" class="form-control" id="fastCardExpiry"
                                                            placeholder="Fast Card Expiry">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="hazmatExpiry">Hazmat Expiry </label>
                                                        <input type="date" class="form-control" id="hazmatExpiry"
                                                            placeholder="Hazmat Expiry">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="rate">Rate <span style="color:#ff0000">*</span> </label>
                                                        <input type="text" class="form-control" id="rate"
                                                            placeholder="Rate">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-2">
                                                        <label for="currency">Currency <span style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="currency"
                                                            placeholder="Currency">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="recurrencePlus">Recurrence+</label>
                                                        <input type="text" class="form-control" id="recurrencePlus"
                                                            placeholder="Recurrence">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="recurrenceMin">Recurrence -</label>
                                                        <input type="text" class="form-control" id="recurrenceMin"
                                                            placeholder="Recurrence-">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="terminationDate">Termination Date </label>
                                                        <input type="date" class="form-control" id="terminationDate"
                                                            placeholder="Termination Date">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="driverBalance ">Driver Balance  </label>
                                                        <input type="text" class="form-control" id="driverBalance"
                                                            placeholder="Driver Balance ">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="internalNotes">Internal Notes </label>
                                                    <input type="text" class="form-control" id="internalNotes"
                                                        placeholder="Notes">
                                                </div>
                                                
                                            </form>
                                           
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
                    <a type="submit" class="btn btn-primary driverDataSubmit">Submit</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>    
      <!------------------------------------------------------------------ over add driver modal ------------------------------------------------------------------>