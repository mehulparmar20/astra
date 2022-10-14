<!-- driver modal -->
<div class="container">
    <!-- <h2>Large Modal</h2> -->
    <!-- Button to Open the Modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open modal
        </button> -->

    <!-- The Modal -->


    <div class="modal fade" data-backdrop="static" id="addUserModal">
				<div class="s modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
					<div class="modal-content country-select-modal">
						<div class="modal-header">
							<h6 class="modal-title">Choose Country</h6>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body" style="overflow-y: auto !important;">
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
                                            <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputFirstName4">First Name</label>
                                                        <input type="text" class="form-control" name="inputFirstName4" id="inputFirstName4"
                                                            placeholder="First Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputLastName4">Last Name</label>
                                                        <input type="email" class="form-control" name="inputLastName4" id="inputLastName4"
                                                            placeholder="Last Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputUsername4">Username</label>
                                                        <input type="text" class="form-control" name="inputUsername4" id="inputUsername4"
                                                            placeholder="Username">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Email</label>
                                                        <input type="email" class="form-control" name="inputEmail4" id="inputEmail4"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Password</label>
                                                        <input type="password" class="form-control" name="inputPassword4" id="inputPassword4"
                                                            placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Address</label>
                                                    <input type="text" class="form-control" name="inputAddress" id="inputAddress"
                                                        placeholder="1234 Main St">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputLocation">Location</label>
                                                    <input type="text" class="form-control" name="inputLocation" id="inputLocation"
                                                        placeholder="Apartment, studio, or floor">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-2">
                                                        <label for="inputZip">Zip</label>
                                                        <input type="text" class="form-control" name="inputZip" id="inputZip">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputCompanyName">Company Name</label>
                                                        <select id="inputCompanyName" name="inputCompanyName" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputOffice">Office</label>
                                                        <select id="inputOffice" name="inputOffice" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputTelephone">Telephone</label>
                                                        <input type="tel" class="form-control" name="inputTelephone" id="inputTelephone">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputExt">Ext</label>
                                                        <input type="text" class="form-control" name="inputExt" id="inputExt">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputTollFree">Toll Free</label>
                                                        <input type="tel" class="form-control" name="inputTollFree" id="inputTollFree">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputFax">Fax</label>
                                                        <input type="text" class="form-control" name="inputFax" id="inputFax">
                                                    </div>
                                                </div>
                                                <div class="form-row form-group col-md-12">
                                                    <h5>Priviliges</h5>
                                                    <br>
                                                    <div>
                                                        <span>
                                                            <h6>Dashboard</h6>
                                                        </span>
                                                        <div class="form-group col-md-6">
                                                            <!-- select all boxes -->
                                                            <ul>
                                                                <li>
                                                            <label for="select-all">Select All</label>
                                                            <input type="checkbox" name="select-all" id="select-all" />
                                                            </li>
                                                            <li>
                                                            <label for="checkbox-1">New Active Load</label>
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-1" />
                                                            <label for="checkbox-2">Profit/Loss</label>
                                                            <input type="checkbox" name="checkbox-2" id="checkbox-2" />
                                                            <label for="checkbox-3">Dispatcher</label>
                                                            <input type="checkbox" name="checkbox-3" id="checkbox-3" />
                                                            <label for="checkbox-4">Driver</label>
                                                            <input type="checkbox" name="checkbox-4" id="checkbox-4" />
                                                            <label for="checkbox-5">Company</label>
                                                            <input type="checkbox" name="checkbox-5" id="checkbox-5" />
                                                            <label for="checkbox-6">Truck</label>
                                                            <input type="checkbox" name="checkbox-6" id="checkbox-6" />
                                                            <label for="checkbox-7">Carrier</label>
                                                            <input type="checkbox" name="checkbox-7" id="checkbox-7" />
                                                            <label for="checkbox-8">Equipment</label>
                                                            <input type="checkbox" name="checkbox-8" id="checkbox-8" />
                                                            <label for="checkbox-9">Sales Representative</label>
                                                            <input type="checkbox" name="checkbox-9" id="checkbox-9" />
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <button type="submit" class="login_btn btn1 add1button" id="usersave">Submit</button>
                                                <br>
                                            </form>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
						</div>
					</div>
				</div>
			</div>


    <div class="modal fade" id="addUserModal1">
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
                                            <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputFirstName4">First Name</label>
                                                        <input type="text" class="form-control" name="inputFirstName4" id="inputFirstName4"
                                                            placeholder="First Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputLastName4">Last Name</label>
                                                        <input type="email" class="form-control" name="inputLastName4" id="inputLastName4"
                                                            placeholder="Last Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputUsername4">Username</label>
                                                        <input type="text" class="form-control" name="inputUsername4" id="inputUsername4"
                                                            placeholder="Username">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Email</label>
                                                        <input type="email" class="form-control" name="inputEmail4" id="inputEmail4"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Password</label>
                                                        <input type="password" class="form-control" name="inputPassword4" id="inputPassword4"
                                                            placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Address</label>
                                                    <input type="text" class="form-control" name="inputAddress" id="inputAddress"
                                                        placeholder="1234 Main St">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputLocation">Location</label>
                                                    <input type="text" class="form-control" name="inputLocation" id="inputLocation"
                                                        placeholder="Apartment, studio, or floor">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputCity">City</label>
                                                        <input type="text" class="form-control" name="inputCity" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputZip">Zip</label>
                                                        <input type="text" class="form-control" name="inputZip" id="inputZip">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputCompanyName">Company Name</label>
                                                        <select id="inputCompanyName" name="inputCompanyName" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputOffice">Office</label>
                                                        <select id="inputOffice" name="inputOffice" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputTelephone">Telephone</label>
                                                        <input type="tel" class="form-control" name="inputTelephone" id="inputTelephone">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputExt">Ext</label>
                                                        <input type="text" class="form-control" name="inputExt" id="inputExt">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputTollFree">Toll Free</label>
                                                        <input type="tel" class="form-control" name="inputTollFree" id="inputTollFree">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputFax">Fax</label>
                                                        <input type="text" class="form-control" name="inputFax" id="inputFax">
                                                    </div>
                                                </div>
                                                <div class="form-row form-group col-md-12">
                                                    <h5>Priviliges</h5>
                                                    <br>
                                                    <section id="portfolio" class="section">
      <div class="container">
          <h5>Priviliges</h5>
          
          <div id="myBtnContainer">
            <button class="btn" onclick="filterSelection('List1')"> Filter 1</button>
            <button class="btn" onclick="filterSelection('List2')"> Filter 2</button>
          </div>
          
          <div class="container">

            <!-- List 1 -->
            <div class="filterDiv List1">
              <div class="listcontainer">
                <span>
                    <h6>Dashboard</h6>
                </span>
                <div class="form-group col-md-15">
                    <!-- select all boxes -->
                    <div calss="listcontainer">
                      <ul class="ks-cboxtags">
                        <li>
                          <input class="checkbox1" type="checkbox" id="select-all" name="" value="Select All"><label for="select-all">Select All</label>
                        </li>
                        <li>
                          <input class="checkbox1" type="checkbox" name="checkbox" id="checkbox-1" /><label for="checkbox-1">New Active Load</label>
                        </li>
                        <li>
                          <input class="checkbox1" type="checkbox" name="checkbox" id="checkbox-2" /><label for="checkbox-2">Profit/Loss</label>
                        </li>
                        <li>
                          <input class="checkbox1" type="checkbox" name="checkbox" id="checkbox-3" /><label for="checkbox-3">Dispatcher</label>
                        </li>
                        <li>
                          <input class="checkbox1" type="checkbox" name="checkbox" id="checkbox-4" /><label for="checkbox-4">Driver</label>
                        </li>
                      
                        <li>
                          <input class="checkbox1" type="checkbox" name="checkbox" id="checkbox-5" /><label for="checkbox-5">Company</label>
                        </li>
                        <li>
                          <input class="checkbox1" type="checkbox" name="checkbox" id="checkbox-6" /><label for="checkbox-6">Truck</label>
                        </li>
                        <li>
                          <input class="checkbox1" type="checkbox" name="checkbox" id="checkbox-7" /><label for="checkbox-7">Carrier</label>
                        </li>
                        <li>
                          <input class="checkbox1" type="checkbox" name="checkbox" id="checkbox-8" /><label for="checkbox-8">Equipment</label>
                        </li>
                        <li>
                          <input class="checkbox1" type="checkbox" name="checkbox" id="checkbox-9" /><label for="checkbox-9">Sales Representative</label>
                        </li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
            <!-- End of List 1 -->

            <!-- List 2 -->
            <div class="filterDiv List2">
              <div class="listcontainer">
                <span>
                    <h6>list 2</h6>
                </span>
                <div class="form-group col-md-15">
                    <!-- select all boxes -->
                    <div calss="listcontainer">
                      <ul class="ks-cboxtags">
                        <li>
                          <input class="checkbox" type="checkbox" id="select-all_l2" value="Select All"><label for="select-all_l2">Select All</label>
                        </li>
                        <li>
                          <input class="checkbox" type="checkbox" name="checkbox" id="checkboxl2_1" /><label for="checkboxl2_1">New Active Load</label>
                        </li>
                        <li>
                          <input class="checkbox" type="checkbox" name="checkbox" id="checkboxl2_2" /><label for="checkboxl2_2">Profit/Loss</label>
                        </li>
                        <li>
                          <input class="checkbox" type="checkbox" name="checkbox" id="checkboxl2_3" /><label for="checkboxl2_3">Dispatcher</label>
                        </li>
                        <li>
                          <input class="checkbox" type="checkbox" name="checkbox" id="checkboxl2_4" /><label for="checkboxl2_4">Driver</label>
                        </li>
                        <li>
                          <input class="checkbox" type="checkbox" name="checkbox" id="checkboxl2_5" /><label for="checkboxl2_5">company</label>
                        </li>
                        <li>
                          <input class="checkbox" type="checkbox" name="checkbox" id="checkboxl2_6" /><label for="checkboxl2_6">Truck</label>
                        </li>
                        <li>
                          <input class="checkbox" type="checkbox" name="checkbox" id="checkboxl2_7" /><label for="checkboxl2_7">Carrier</label>
                        </li>
                        <li>
                          <input class="checkbox" type="checkbox" name="checkbox" id="checkboxl2_8" /><label for="checkboxl2_8">Equipment</label>
                        </li>
                        <li>
                          <input class="checkbox" type="checkbox" name="checkbox" id="checkboxl2_9" /><label for="checkboxl2_9">Sales Representative</label>
                        </li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
            <!-- End of List 2 -->
            
            
          </div>
        </div>
      </section>
                                                    <div>
                                                        <span>
                                                            <h6>Dashboard</h6>
                                                        </span>
                                                        <div class="form-group col-md-6">
                                                            <!-- select all boxes -->
                                                            <ul>
                                                                <li>
                                                            <label for="select-all">Select All</label>
                                                            <input type="checkbox" name="select-all" id="select-all" />
                                                            </li>
                                                            <li>
                                                            <label for="checkbox-1">New Active Load</label>
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-1" />
                                                            <label for="checkbox-2">Profit/Loss</label>
                                                            <input type="checkbox" name="checkbox-2" id="checkbox-2" />
                                                            <label for="checkbox-3">Dispatcher</label>
                                                            <input type="checkbox" name="checkbox-3" id="checkbox-3" />
                                                            <label for="checkbox-4">Driver</label>
                                                            <input type="checkbox" name="checkbox-4" id="checkbox-4" />
                                                            <label for="checkbox-5">Company</label>
                                                            <input type="checkbox" name="checkbox-5" id="checkbox-5" />
                                                            <label for="checkbox-6">Truck</label>
                                                            <input type="checkbox" name="checkbox-6" id="checkbox-6" />
                                                            <label for="checkbox-7">Carrier</label>
                                                            <input type="checkbox" name="checkbox-7" id="checkbox-7" />
                                                            <label for="checkbox-8">Equipment</label>
                                                            <input type="checkbox" name="checkbox-8" id="checkbox-8" />
                                                            <label for="checkbox-9">Sales Representative</label>
                                                            <input type="checkbox" name="checkbox-9" id="checkbox-9" />
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <a type="submit" class="btn btn-primary" id="usersave">Submit</a>
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