<!------------------------------------------------------------------- driver modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="driverModal">
        <div class="modal-dialog modal-lg " style="display: table;">
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

                                            <a href="#addDriverModal" class="btn btn-primary" data-toggle="modal"
                                                data-target="#addDriverModal">Add</a>
                                            <a href="#setupDriverModal" class="btn btn-primary" data-toggle="modal"
                                                data-target="#viewDriverApplicationModal"><i
                                                    class="mdi mdi-eye"></i>View Driver Application</a>
                                            <a href="#setupDriverModal" class="btn btn-primary" data-toggle="modal"
                                                data-target="#setupDriverModal">Setup Driver</a>
                                            <a href="#contractCategoryModal" class="btn btn-primary" data-toggle="modal"
                                                data-target="#contractCategoryModal">View Driver Contract</a>
                                            <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100">

                                                <!-- <button href="#addDriverModal" data-toggle="modal" data-target="#addDriverrModal"  class="add1button" style="vertical-align:middle"><span>Add </span></button>
                                                        
                                                        <table id="editable-file-datatable" style="margin-bottom : -360rem" class="table editable-table table-nowrap table-bordered table-edit wp-100"> -->

                                                <!-- <table id="" class="table editable-table table-nowrap table-bordered table-edit wp-100"> -->
                                                <thead>
                                                    <tr>
                                                        <!-- <th>counter</th> -->
                                                        <th><div>NO</div></th>
                                                        <th style=""><div>Name</div></th>
                                                        <th><div>Email</div></th>
                                                        <th><div>Location</div></th>
                                                        <th><div><marquee width="100px" direction="left" height="17px" scrollamount="2"> Social Security No</marquee></div></th>
                                                        <th><div>Date of Birth</div></th>
                                                        <th><div>Date of Hire</div></th>
                                                        <th><div>License No</div></th>
                                                        <th><div>LIS</div></th>
                                                        <th><div><marquee width="100px" direction="left" height="17px" scrollamount="2"> License Exp.Date</marquee></div></th>
                                                        <th><div><marquee width="100px" direction="left" height="17px" scrollamount="2"> Driver Balance</marquee></div></th>
                                                        <th><div>Action</div></th>
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
                    <form action="{{route('driver-pdf')}}" method="post" target="__blank">
                        @csrf
                        <button class="btn btn-primary" style="vertical-align:middle"><span>Export</span></button>
                    </form>
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
        <div class="modal-dialog custom_modal">
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
                                                        <label for="name">Name <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control required" id="name"
                                                            placeholder=" Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="username">Username<span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="username"
                                                            placeholder="username">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="address">Address <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="address"
                                                            placeholder="address">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="telephone">Telephone <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control telephone4"
                                                            id="telephone" placeholder="Telephone">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="altTelephone">Alt - Tel #</label>
                                                        <input type="text" class="form-control telephone4"
                                                            id="altTelephone" placeholder="Telephone">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="email">Email<span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="password">Password<span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="password" class="form-control" id="password"
                                                            placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="location">Location <span
                                                                style="color:#ff0000">*</span> </label>
                                                        <input type="text" class="form-control" id="location"
                                                            placeholder="Location">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="zip">Zip <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="zip"
                                                            placeholder="Zip">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="status">Status</label>
                                                        <select class="form-control" id="status">
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                            <option value="Not Available">Not Available</option>
                                                        </select>
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
                                                        <label for="licenseNo">License No.<span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="licenseNo"
                                                            placeholder="License No">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="licenseIssueState">License Issue State <span
                                                                style="color:#ff0000">*</span> </label>
                                                        <input list="statelist" class="form-control"
                                                            placeholder="--Select--" id="licenseIssueState"
                                                            name="driverLicenseIssue" autocomplete="off">
                                                        <datalist id="statelist">
                                                            <option value="AL">
                                                            <option value="AK">
                                                            <option value="AR">
                                                            <option value="CA">
                                                            <option value="CO">
                                                            <option value="CT">
                                                            <option value="DE">
                                                            <option value="FL">
                                                            <option value="GA">
                                                            <option value="HI">
                                                            <option value="ID">
                                                            <option value="IL">
                                                            <option value="IN">
                                                            <option value="IA">
                                                            <option value="KS">
                                                            <option value="KY">
                                                            <option value="LA">
                                                            <option value="ME">
                                                            <option value="MD">
                                                            <option value="MA">
                                                            <option value="MI">
                                                            <option value="MN">
                                                            <option value="MS">
                                                            <option value="MO">
                                                            <option value="MT">
                                                            <option value="NE">
                                                            <option value="NV">
                                                            <option value="NH">
                                                            <option value="NJ">
                                                            <option value="NM">
                                                            <option value="NY">
                                                            <option value="NC">
                                                            <option value="ND">
                                                            <option value="OH">
                                                            <option value="OK">
                                                            <option value="OR">
                                                            <option value="PA">
                                                            <option value="RI">
                                                            <option value="SC">
                                                            <option value="SD">
                                                            <option value="TN">
                                                            <option value="TX">
                                                            <option value="UT">
                                                            <option value="VT">
                                                            <option value="VA">
                                                            <option value="WA">
                                                            <option value="WV">
                                                            <option value="WI">
                                                            <option value="WY">
                                                        </datalist>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="licenseExpDate">License Exp. Date <span
                                                                style="color:#ff0000">*</span></label>
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
                                                        <label for="up_rate">Rate <span style="color:#ff0000">*</span>
                                                        </label>
                                                        <select class="form-control" onchange="changeRate(this.value)"
                                                            id="rate">
                                                            <option value="0" selected disabled>Select</option>
                                                            <option value="mile">Per Mile</option>
                                                            <option value="percentage">Percentage</option>
                                                            <option value="hour">Hourly</option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-3 ml-6" id="dMile"
                                                        style="display: none">
                                                        <label>Driver Pay Info</label>
                                                        <a href="#driverPayInfoModal" class="btn btn-primary"
                                                            data-toggle="modal" data-target="#driverPayInfoModal">Open
                                                            Pay Info</a>

                                                    </div>
                                                    <div class="form-group col-md-2" id="dPercentage"
                                                        style="display: none">
                                                        <label>Percentage( % )</label>
                                                        <input type="text" class="form-control" id="dPercentage"
                                                            placeholder="Percentage">
                                                    </div>
                                                    <div class="form-group col-md-2 col-md-3 ml-6" id="dHourly"
                                                        style="display: none">
                                                        <label>Driver Pay Info</label>
                                                        <a href="#driverPayInfoModal" class="btn btn-primary"
                                                            data-toggle="modal" data-target="#driverPayInfoModal">Open
                                                            Pay Info</a>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="currency">Currency <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="currency_add"
                                                            placeholder="currency">
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
                                                        <label for="driverBalance ">Driver Balance </label>
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
<!------------------------------------------------------------------ over add modal ------------------------------------------------------------------>
<!------------------------------------------------------------------  edit driver modal ------------------------------------------------------------------>

<div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="editDriverModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Driver</h4>
                    <button type="button" class="close editModalCloseButton" data-dismiss="modal">&times;</button>
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
                                                <!-- <input type="hidden" id="up_comId" name="" > -->

                                                <input type="hidden" name="_token" id="drivercsrf"
                                                    value="{{Session::token()}}">
                                                <input type="hidden" id="up_comId">
                                                <input type="hidden" name="emaildriver" id="emaildriver">
                                                <!-- <input type="hidden" name="email4" id="email4"> -->
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="up_name">Name <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control required" id="up_name"
                                                            placeholder=" Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="up_username">Username<span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="up_username"
                                                            placeholder="username">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="up_address">Address <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="up_address"
                                                            placeholder="address">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="up_telephone">Telephone <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control telephone4"
                                                            id="up_telephone" placeholder="Telephone">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="up_altTelephone">Alt - Tel #</label>
                                                        <input type="text" class="form-control telephone4"
                                                            id="up_altTelephone" placeholder="Telephone">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="up_email">Email<span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="email" class="form-control" id="up_email"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="up_password">Password</label>
                                                        <input type="password" class="form-control" id="up_password"
                                                            placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="up_location">Location <span
                                                                style="color:#ff0000">*</span> </label>
                                                        <input type="text" class="form-control" id="up_location"
                                                            placeholder="Location">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="up_zip">Zip <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="up_zip"
                                                            placeholder="Zip">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="up_status">Status</label>
                                                        <select class="form-control" id="up_status">
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                            <option value="Not Available">Not Available</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="up_socialSecurityNo">Social Security No </label>
                                                        <input type="text" class="form-control" id="up_socialSecurityNo"
                                                            placeholder="Social Security No">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="up_dateOfBirth">Date of Birth </label>
                                                        <input type="date" class="form-control" id="up_dateOfBirth"
                                                            placeholder="Date of Birth">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="up_dateOfHire">Date of Hire</label>
                                                        <input type="date" class="form-control" id="up_dateOfHire"
                                                            placeholder="Date of Hire">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="up_licenseNo">License No.<span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="up_licenseNo"
                                                            placeholder="License No">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="up_licenseIssueState">License Issue State <span
                                                                style="color:#ff0000">*</span> </label>
                                                        <input list="statelist" class="form-control"
                                                            placeholder="--Select--" id="up_licenseIssueState"
                                                            name="driverLicenseIssue" autocomplete="off">
                                                        <datalist id="statelist">
                                                            <option value="AL">
                                                            <option value="AK">
                                                            <option value="AR">
                                                            <option value="CA">
                                                            <option value="CO">
                                                            <option value="CT">
                                                            <option value="DE">
                                                            <option value="FL">
                                                            <option value="GA">
                                                            <option value="HI">
                                                            <option value="ID">
                                                            <option value="IL">
                                                            <option value="IN">
                                                            <option value="IA">
                                                            <option value="KS">
                                                            <option value="KY">
                                                            <option value="LA">
                                                            <option value="ME">
                                                            <option value="MD">
                                                            <option value="MA">
                                                            <option value="MI">
                                                            <option value="MN">
                                                            <option value="MS">
                                                            <option value="MO">
                                                            <option value="MT">
                                                            <option value="NE">
                                                            <option value="NV">
                                                            <option value="NH">
                                                            <option value="NJ">
                                                            <option value="NM">
                                                            <option value="NY">
                                                            <option value="NC">
                                                            <option value="ND">
                                                            <option value="OH">
                                                            <option value="OK">
                                                            <option value="OR">
                                                            <option value="PA">
                                                            <option value="RI">
                                                            <option value="SC">
                                                            <option value="SD">
                                                            <option value="TN">
                                                            <option value="TX">
                                                            <option value="UT">
                                                            <option value="VT">
                                                            <option value="VA">
                                                            <option value="WA">
                                                            <option value="WV">
                                                            <option value="WI">
                                                            <option value="WY">
                                                        </datalist>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="up_licenseExpDate">License Exp. Date <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="date" class="form-control" id="up_licenseExpDate"
                                                            placeholder="License Exp. Date">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="up_lastMedical">Last Medical</label>
                                                        <input type="date" class="form-control" id="up_lastMedical"
                                                            placeholder="Last Medical">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="up_nextMedical">Next Medical</label>
                                                        <input type="date" class="form-control" id="up_nextMedical"
                                                            placeholder="Next Medical">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="up_lastDrugTest">Last Drug Test </label>
                                                        <input type="date" class="form-control" id="up_lastDrugTest"
                                                            placeholder="Last Drug Test">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="up_nextDrugTest">Next Drug Test </label>
                                                        <input type="date" class="form-control" id="up_nextDrugTest"
                                                            placeholder="Next Drug Test">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="up_passportExpiry">Passport Expiry</label>
                                                        <input type="date" class="form-control" id="up_passportExpiry"
                                                            placeholder="Passport Expiry">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="up_fastCardExpiry">Fast Card Expiry</label>
                                                        <input type="date" class="form-control" id="up_fastCardExpiry"
                                                            placeholder="Fast Card Expiry">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="up_hazmatExpiry">Hazmat Expiry </label>
                                                        <input type="date" class="form-control" id="up_hazmatExpiry"
                                                            placeholder="Hazmat Expiry">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="up_rate">Rate <span style="color:#ff0000">*</span>
                                                        </label>
                                                        <select class="form-control"
                                                            onchange="changeRateEdit(this.value)" id="up_rate">
                                                            <option value="0" selected disabled>Select</option>
                                                            <option value="mile">Per Mile</option>
                                                            <option value="percentage">Percentage</option>
                                                            <option value="hour">Hourly</option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-3 ml-6" id="dMileEdit"
                                                        style="display: none">
                                                        <label>Driver Pay Info</label>
                                                        <a href="#driverPayInfoEditModal" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#driverPayInfoEditModal">Open
                                                            Pay Info</a>

                                                    </div>
                                                    <div class="form-group col-md-2" id="dPercentageEdit"
                                                        style="display: none">
                                                        <label>Percentage( % )</label>
                                                        <input type="text" class="form-control" id="dPercentageEdit"
                                                            placeholder="Percentage">
                                                    </div>
                                                    <div class="form-group col-md-3 ml-6" id="dHourlyEdit"
                                                        style="display: none">
                                                        <label>Driver Pay Info</label>
                                                        <a href="#driverPayInfoEditModal" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#driverPayInfoEditModal">Open
                                                            Pay Info</a>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="up_currency">Currency <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control" id="up_currency"
                                                            placeholder="Currency">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="up_recurrencePlus">Recurrence+</label>
                                                        <input type="text" class="form-control" id="up_recurrencePlus"
                                                            placeholder="Recurrence">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="up_recurrenceMin">Recurrence -</label>
                                                        <input type="text" class="form-control" id="up_recurrenceMin"
                                                            placeholder="Recurrence-">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="up_terminationDate">Termination Date </label>
                                                        <input type="date" class="form-control" id="up_terminationDate"
                                                            placeholder="Termination Date">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="up_driverBalance ">Driver Balance </label>
                                                        <input type="text" class="form-control" id="up_driverBalance"
                                                            placeholder="Driver Balance ">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="up_internalNotes">Internal Notes </label>
                                                    <input type="text" class="form-control" id="up_internalNotes"
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
                    <a type="submit" class="btn btn-primary driverDataUpdate">Update</a>
                    <button type="button" class="btn btn-secondary editModalCloseButton"
                        data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------ over edit driver modal ------------------------------------------------------------------>


<!------------------------------------------------------------------ Setup driver modal ------------------------------------------------------------------>
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="setupDriverModal">
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
                                                        <label for="name">Name <span
                                                                style="color:#ff0000">*</span></label>
                                                        <input type="text" class="form-control required"
                                                            id="drivername12" placeholder=" Name">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="sentvia">Sent via<span
                                                                style="color:#ff0000">*</span></label>
                                                        <select onchange="showdata(this.value)" class="form-control"
                                                            id="sentvia">
                                                            <option value="0" selected disabled>Select one</option>
                                                            <option value="email">Email</option>
                                                            <option value="text" disabled>Text</option>
                                                            <option value="whatsapp" disabled>Whatsapp (Coming Soon)
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6" id="emaildata"
                                                        style="display: none">
                                                        <label>Email <span style="color:#ff0000">*</span></label>
                                                        <div>
                                                            <input class="form-control" placeholder="Email *"
                                                                type="email" name="driveremail1" id="driveremail1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6" id="phonedata"
                                                        style="display: none">
                                                        <label>Telephone No.<span style="color:#ff0000">*</span></label>
                                                        <div>
                                                            <input class="form-control" placeholder="Telephone No. *"
                                                                type="text" name="textno" id="textno">
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
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a type="submit" class="btn btn-primary setupDriverSubmit">Submit</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------- driver Application modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="viewDriverApplicationModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Driver Applications</h4>
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


                                            <table id="editable-file-datatable"
                                                class="table editable-table table-nowrap table-bordered table-edit wp-100">

                                                <thead>
                                                    <tr>
                                                        <!-- <th>counter</th> -->
                                                        <th>NO</th>
                                                        <th>Driver Name</th>
                                                        <th>Application Date</th>
                                                        <th>Email</th>
                                                        <th>Contact</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="viewDriverApplicationTable">

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
                    <form action="{{route('driver-pdf')}}" method="post" target="__blank">
                        @csrf
                        <button class="btn btn-primary" style="vertical-align:middle"><span>Export</span></button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<input type="hidden" class="laravel_csrf_tokn" value="{{ csrf_token() }}" />
<!-------------------------------------------------------------------over driver Application modal------------------------------------------------------------------->
<!------------------------------------------------------------------ Add  driver Owner modal ------------------------------------------------------------------>
<div id="addDriverOwnerModal" class="modal fade">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add as Owner operator</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

                        <div class="modal-body">
                            <form id='addOwnerForm'>                            
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-sm-4">
                                            <label class="form-label" for="owner-driver-name">Driver</label>
                                            <input type="text" class="form-control" list="drivernamelist" autocomplete="off" id="owner-driver-name" disabled/>
                                            <input type="hidden" id="driverid" value="" class="driver-id" />
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="ssnMask-cvv">Pay Percentage<span class="mandatory">* </span>( % )</label></label>
                                            <div class="input-group">
                                                <div class="input-group-text bg-primary-transparent text-primary">
                                                    <i class="fe fe-minus text-20" onclick="dec_percentage()" ></i>
                                                </div>
                                                    <input type="number" class="form-control" id="ownerPercentage" name="percentage" placeholder="Percentage" >
                                                <div class="input-group-text bg-primary-transparent text-primary">
                                                    <i class="fe fe-plus text-20" onclick="inc_percentage()" ></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="ssnMask-cvv">Select Truck</label>
                                            <input list="fuel_truck_report" class="form-control" placeholder="search here..." id="ownerTruckNo" name="truckNo" autocomplete="off">
                                                <datalist id="fuel_truck_report">
                                                </datalist>
                                        </div>
                                    </div>
                                    <br>

                        <br>
                        <div class="optionBox ">
                           
                            <div class="block">
                                <button id="btnAdd1" type="button" class="btn btn-primary add" data-toggle="tooltip"
                                    data-original-title="Add more controls"><i class="mdi mdi-gamepad-down"></i> ADD
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- modal-body -->

            <!-- Modal footer -->
            <div class="modal-footer">
                <a type="submit" class="btn btn-primary " id="submitOwnerOparator">Submit</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->
<!-------------------------------------------------------------------over driver Application modal------------------------------------------------------------------->
<!------------------------------------------------------------------ Add  driver Owner modal ------------------------------------------------------------------>
<div id="editDriverOwnerModal" class="modal fade">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Owner operator</h4>
                            <button type="button" class="closeFooter " >&times;</button>
                        </div>

                        <div class="modal-body">
                            <form id='up_addOwnerForm'>                            
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-sm-4">
                                            <label class="form-label" for="up_owner-driver-name">Select Driver</label>
                                            <input type="text" class="form-control" list="drivernamelist" autocomplete="off" id="up_owner-driver-name" disabled/>
                                            <input type="hidden" id="up_driverid" value="" />
                                            <input type="hidden" id="up_ownerid" value="" />
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="up_ownerPercentage">Pay Percentage<span style="color:#ff0000">*</span>( % )</label></label>
                                            <div class="input-group">
                                                <div class="input-group-text bg-primary-transparent text-primary">
                                                    <i class="fe fe-minus text-20" onclick="up_dec_percentage()" ></i>
                                                </div>
                                                    <input type="number" class="form-control" id="up_ownerPercentage" name="up_ownerPercentage" placeholder="Percentage" >
                                                <div class="input-group-text bg-primary-transparent text-primary">
                                                    <i class="fe fe-plus text-20" onclick="up_inc_percentage()" ></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="up_ownerTruckNo">Select Truck<span style="color:#ff0000">*</span></label>
                                            <input list="fuel_truck_report" class="form-control" placeholder="search here..." id="up_ownerTruckNo" name="truckNo" autocomplete="off">
                                                <datalist id="fuel_truck_report">
                                                </datalist>
                                        </div>
                                    </div>
                                    <br>
                                    
                                   
                                        <div class="up_optionBox ">
                                         
                                            <!-- <div class="block">
                                                <button id="btnAdd1" type="button" class="btn btn-primary add" data-toggle="tooltip" data-original-title="Add more controls"><i class="mdi mdi-gamepad-down"></i> ADD </button>
                                            </div> -->
                                        </div>
                                        <div class="block">
                                                <button id="btnAdd1" type="button" class="btn btn-primary add" data-toggle="tooltip" data-original-title="Add more controls"><i class="mdi mdi-gamepad-down"></i> ADD </button>
                                            </div>
                                </div>  
                            </form>
                        </div><!-- modal-body -->

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a type="submit" class="btn btn-primary " id="up_submitOwnerOparator">Update</a>
                            <button type="button" class="btn btn-secondary closeFooter" >Close</button>
                          
                        </div>

                    </div><!-- modal-content -->
                </div><!-- modal-dialog -->
            </div><!-- modal -->
<!-------------------------------------------------------------------over driver Application modal------------------------------------------------------------------->