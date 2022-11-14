@include('layout.dashboard.header')

	<body class="ltr app sidebar-mini light-mode">
    <div class="horizontalMenucontainer" style="padding: 5% 10%;">

                     

<!-- Row -->
<div class="row ">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header border-bottom">
				<div class="card-title">
					Driver Application Form
				</div>
			</div>
			<div class="card-body">
				<div id="wizard1">
					<h4 class=" "  style="font-size: 25px;text-align:center;">Welcome to Astra TMS..!</h4>
					<div>
					<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0 course">
									<label class="form-label" for="expdate1"  style="font-size: 22px;">Required Documents</label>
									<div class="input-group">
									<ul style= "text-align:left;padding-left:18px;font-size:18px;">
										<li>&#128073; Driving license</li>
										<li>&#128073; Employment Reports</li>
										<li>&#128073; Accident Reports</li>
										<li>&#128073; Violations Reports</li>
                                	</ul>									
								</div>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1" style="color:#8fbd56;font-weight: bold;font-size:23px;">*Here, Define the steps to process your application.*</label>
									<div class="input-group">
										<ul style= "text-align:left;padding-left:15px;font-size:16px;color:black;">
											<li class="">&#9997; Applicant Details.</li>
											<li class="">&#9997; Employment Record.</li>
											<li class="">&#9997; Declaration of Employment Status.</li>
											<li class="">&#9997; Accidents for Past Three (3) Years.</li>
											<li class="">&#9997; Traffic Convictions & Forfeitures for Past Three (3) Years.</li>
											<li class="">&#9997; Accidents for Past Three (3) Years.</li>
											<li class="">&#9997; Driver Experience(Type of Equipment).</li>
											<li class="">&#9997; Driving State.</li>
											<li class="">&#9997; Certification of Violations.</li>
											<li class="">&#9997; Driver Statement of On-Duty Hours.</li>
											<li class="">&#9997; Alcohol and Controlled Substances.</li>
										</ul>									
								</div>
								</div>
							</div>
						</div>
					</div>

					<h4>Provide your details</h4>
					<div>
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">Applicant Name </label>
									<div class="input-group">
										<input type="text" class="form-control" id="ApplicantName" placeholder=" Enter Applicant Name " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Date Of Application</label>
									<div class="input-group">
										<input type="date" class="form-control" id="datepicker-date DateOfApplication" placeholder=" Enter Date Of Application " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Date Of Birth</label>
									<div class="input-group">
									<input type="Date" class="form-control" id="DateOfBirthApplication" placeholder=" Enter Date Of Birth* : " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Social Security No</label>
									<div class="input-group">
									<input type="text" class="form-control" id="SocialSecurityNo" placeholder=" Enter Social Security No " >
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">License No.</label>
									<div class="input-group">
										<input type="text" class="form-control" id="LicenseNo" placeholder=" Enter License No " >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">License Issue State</label>
									<div class="input-group">
										<select class="form-control select2-show-search form-select" data-placeholder="Choose one" id="licence_state">
										<option value="">License Issue State</option>
                                            <option value="AL">AL</option>
                                            <option value="AK">AK</option>
                                            <option value="AR">AR</option>
                                            <option value="AZ">AZ</option>
                                            <option value="CA">CA</option>
                                            <option value="CO">CO</option>
                                            <option value="CT">CT</option>
                                            <option value="DC">DC</option>
                                            <option value="DE">DE</option>
                                            <option value="FL">FL</option>
                                            <option value="GA">GA</option>
                                            <option value="HI">HI</option>
                                            <option value="IA">IA</option>
                                            <option value="ID">ID</option>
                                            <option value="IL">IL</option>
                                            <option value="IN">IN</option>
                                            <option value="KS">KS</option>
                                            <option value="KY">KY</option>
                                            <option value="LA">LA</option>
                                            <option value="MA">MA</option>
                                            <option value="MD">MD</option>
                                            <option value="ME">ME</option>
                                            <option value="MI">MI</option>
                                            <option value="MN">MN</option>
                                            <option value="MO">MO</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="NC">NC</option>
                                            <option value="NE">NE</option>
                                            <option value="NH">NH</option>
                                            <option value="NJ">NJ</option>
                                            <option value="NM">NM</option>
                                            <option value="NV">NV</option>
                                            <option value="NY">NY</option>
                                            <option value="ND">ND</option>
                                            <option value="OH">OH</option>
                                            <option value="OK">OK</option>
                                            <option value="OR">OR</option>
                                            <option value="PA">PA</option>
                                            <option value="RI">RI</option>
                                            <option value="SC">SC</option>
                                            <option value="SD">SD</option>
                                            <option value="TN">TN</option>
                                            <option value="TX">TX</option>
                                            <option value="UT">UT</option>
                                            <option value="VT">VT</option>
                                            <option value="VA">VA</option>
                                            <option value="WA">WA</option>
                                            <option value="WI">WI</option>
                                            <option value="WV">WV</option>
                                            <option value="WY">WY</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">License Exp. Date</label>
									<div class="input-group">
										<input type="date" class="form-control" id="datepicker-date LicenseExpDate" placeholder=" Enter License Exp. Date" >
									</div>
								</div>
							</div>
						</div>
					</div>

<!-- Applicant Information -->
					<h4>Applicant Information</h4>
					<div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">Applicant Name</label>
									<div class="input-group">
										<input type="text" class="form-control" id="ApplicantName2" disabled >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">Telephone</label>
									<div class="input-group">
										<input type="number" class="form-control" id="TelephoneApplicant" placeholder=" Enter Telephone " >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">Email</label>
									<div class="input-group">
									<input type="Email" class="form-control" id="EmailApplicant" placeholder=" Enter Email " >
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">Date Of Birth</label>
									<div class="input-group">
										<input type="Date" class="form-control" id="DateOfBirthApplicant"  disabled>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">Social Security No</label>
									<div class="input-group">
										<input type="number" class="form-control" id="SocialSecurityNoApplicant" disabled >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">Fax(If Applicable)</label>
									<div class="input-group">
										<input type="number" class="form-control" id="FaxApplicant" placeholder=" Enter Fax " >
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">License No.</label>
									<div class="input-group">
									<input type="number" class="form-control" id="LicenseNoApplicant" disabled >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">License Issue State</label>
									<div class="input-group">
									<input type="text" class="form-control" id="LicenseIssueStateApplicant" disabled >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">License Type</label>
									<div class="input-group">
										<select id="licence_type"  name="licence_type" class="form-control select2-show-search">
                                            <option value="">Select Typ</option>
                                            <option value="Class A">Class A</option>
                                            <option value="Class AZ">Class AZ</option>
                                            <option value="Class B">Class B</option>
                                            <option value="Class C">Class C</option>
                                            <option value="Class D">Class D</option>
                                            <option value="Class E">Class E</option>
                                            <option value="Class R">Class R</option>
                                            <option value="Class 1">Class 1</option>
                                            <option value="Class 2">Class 2</option>
                                            <option value="Class 3">Class 3</option>
                                            <option value="Class 4">Class 4</option>
                                            <option value="Class 5">Class 5</option>
                                        </select>									
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">License Exp. Date</label>
									<div class="input-group">
									<input type="date" class="form-control" id=" datepicker-date LicenseExpDate" >
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<div class="input-group">
									<label for="LicenseNo"> &#128073;  Has any license, permit or privilege ever been suspended or revoked?<span style="color:#ff0000">*</span></label>
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="licence_suspend">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<div class="input-group">
									<label for="LicenseNo"> &#128073;  Have you ever been denied a license, permit or privilege to operate a motor vehicle?<span style="color:#ff0000">*</span></label>
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="licence_denied">
											<span></span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">Address</label>
									<div class="input-group">
										<input type="Date" class="form-control" id="Address_applicant"  placeholde="Address">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">City,State,Zip</label>
									<div class="input-group">
										<input type="text" class="form-control" id="CityStateZip_applicant" placeholde="City,State,Zip"  >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">How Long?</label>
									<div class="input-group">
										<input type="text" class="form-control" id="resident_time" placeholder=" How Long? " >
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<br>
									<label class="form-label" for="">&#128073; Do you have the legal right to work in the United States?<span style="color:#ff0000">*</span></label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="legal_right">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">&#128073; Can you provide proof of legal status?<span style="color:#ff0000">*</span></label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="leage_proof">
											<span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<h6>Emergency Contact</h6>
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Name</label>
									<div class="input-group">
									<input type="text" class="form-control" id="emergency_contact_name"  placeholde="Name">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Relation</label>
									<div class="input-group">
									<input type="text" class="form-control" id="emergency_contact_Address"  placeholde="Address">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Address</label>
									<div class="input-group">
										<input type="number" id="expdate1" class="form-control" placeholder="MM" name="expiremonth">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="">Contact Number</label>
									<div class="input-group">
										<input type="text" class="form-control" id="emergency_contact_Number" placeholde="Contact Number"  >
									</div>
								</div>
							</div>
						</div>
						<hr>
						<h6>Employment Information</h6>
						<hr>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">&#128073; Have you worked for this company before?<span style="color:#ff0000">*</span></label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="company_employee">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">From<span style="color:#ff0000">*</span></label>
									<div class="input-group">
									<input type="date" class="form-control" id="company_employee_from" >
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<label for="To" class="form-label">To<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="date" class="form-control" id="company_employee_to" >
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<label for="From" class="form-label">Reason for leaving?<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="company_employee_leave_reason" placeholder="Reason">
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
								<label  class="form-label"> &#128073; Are you now employed?<span style="color:#ff0000">*</span></label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="employment_status">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="lastEmploymentDate" class="form-label">If not, date left last employment:?</label>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="date" class="form-control" id="last_employee" >
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
								<label class="form-label" > &#128073; Have you ever been bonded?<span style="color:#ff0000">*</span></label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="bond_status">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
								<label  class="form-label" >If Yes, Name of bonding company:?</label>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<div class="input-group">
									<input type="text" class="form-control" id="bond_company_name" >
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
								<label for="" class="form-label" > &#128073; Have you ever been convicted of a felony?<span style="color:#ff0000">*</span></label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="felony_status">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" >If Yes, explain fully on a separate sheet:?</label>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="text" class="form-control" id="felony_reason" >
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="" class="form-label" > &#128073; Conviction of a crime is not an automatic bar to employment. All circumstances will be considered?<span style="color:#ff0000">*</span></label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="Conviction_status">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label class="form-label" >If Yes, please explain:</label>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<div class="input-group">
									<input type="text" class="form-control" id="Conviction_reason" >
									</div>
								</div>
							</div>
						</div>
						<hr>
						<h6 >Education Information</h6>
						<hr>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group mb-sm-0">
									<label for="Grade" class="form-label">Highest Grade Completed: 1 2 3 4 5 6 7 8 9 10 11 12 College: 1 2 3 4 Higher:<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="school_grade" placeholder="Highest Grade" >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Attended" class="form-label">Last School Attended::</label>
									<div class="input-group">
										<input type="text" class="form-control" id="last_school" placeholder="Last School Attended" >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="CityState" class="form-label">City, State:</label>
									<div class="input-group">
										<input type="text" class="form-control" id="school_city_state" placeholder="City, State">
									</div>
								</div>
							</div>
						</div>
					</div>

<!-- Employment Record					 -->
					<h4>Employment Record</h4>
					<div>
						<div class="row" style="padding: 1% 10%;">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="radio" class="form-check-input radioButton" id="radio1" name="optradio" value="option1" checked>
										<label class="form-label" for="radio1" >1</label>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
										<label class="form-label" for="radio2">2</label>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3" >
                            			<label class="form-label" for="radio3">3</label>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="radio" class="form-check-input" id="radio4" name="optradio" value="option4">
                            			<label class="form-label" for="radio4">4</label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group mb-sm-0">
									<label for="Employer" class="form-label">Employer<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="Employer1" placeholder=" Employer " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="EmployedFrom" class="form-label">Employed From<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="date" class="form-control" id="EmployedFrom1" placeholder=" Employed From " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="EmployedTo" class="form-label">Employed To<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="date" class="form-control" id="EmployedTo1" placeholder=" Employed To " >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Street" class="form-label">Street<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerStreet1" placeholder=" Street " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="CityStateZip" class="form-label">City,State,Zip<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerCityStateZip1" placeholder=" City,State,Zip " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Phone" class="form-label">Phone <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerPhone1" placeholder=" Phone" >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Supervisor" class="form-label">Supervisor<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerSupervisor1" placeholder="Supervisor" >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="Position" class="form-label">Position<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerPosition1" placeholder=" Position " >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="ReasonforLeaving " class="form-label">Reason for Leaving <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerReasonforLeaving1 " placeholder="Reason for Leaving  " >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="Email" class="form-label">Email  <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="Email " class="form-control" id="EmployerEmail1 " placeholder=" Email " >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
								<label for="LicenseNo" class="form-label"> &#128073; Were you subject to the FMCSRs while employed?</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="fmcsrs_status1">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group mb-sm-0">
								<label for="LicenseNo"  class="form-label"> &#128073; Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="drug_alcohol_test1">
											<span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group mb-sm-0">
									<label for="Employer2">Employer<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="Employer2" placeholder=" Employer " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="EmployedFrom2">Employed From<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="date" class="form-control" id="EmployedFrom2" placeholder=" Employed From " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="EmployedTo2">Employed To<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="date" class="form-control" id="EmployedTo2" placeholder=" Employed To " >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Street2">Street<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerStreet2" placeholder=" Street " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="CityStateZip2">City,State,Zip<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerCityStateZip2" placeholder=" City,State,Zip " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Phone2">Phone <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerPhone2" placeholder=" Phone" >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Supervisor2">Supervisor<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerSupervisor2" placeholder="Supervisor" >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="Position2">Position<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerPosition2" placeholder=" Position " >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="ReasonforLeaving2">Reason for Leaving <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerReasonforLeaving2" placeholder="Reason for Leaving  " >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="Email2">Email  <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="Email " class="form-control" id="EmployerEmail2" placeholder=" Email " >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
								<label for="LicenseNo2"> &#128073; Were you subject to the FMCSRs while employed?</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="fmcsrs_status2">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group mb-sm-0">
									<label for="LicenseNo"> &#128073; Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="drug_alcohol_test2">
											<span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group mb-sm-0">
									<label for="Employer3">Employer<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerEmployer3" placeholder=" Employer " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="EmployedFrom3">Employed From<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="date" class="form-control" id="EmployerEmployedFrom3" placeholder=" Employed From " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="EmployedTo">Employed To<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="date" class="form-control" id="EmployerEmployedTo" placeholder=" Employed To " >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Street3">Street<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerStreet3" placeholder=" Street " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="CityStateZip3">City,State,Zip<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerCityStateZip3" placeholder=" City,State,Zip " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Phone3">Phone <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerPhone3" placeholder=" Phone" >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Supervisor3">Supervisor<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerSupervisor3" placeholder="Supervisor" >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="Position3">Position<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerPosition3" placeholder=" Position " >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="ReasonforLeaving3">Reason for Leaving <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerReasonforLeaving3" placeholder="Reason for Leaving  " >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="Email3">Email  <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="Email " class="form-control" id="EmployerEmail3" placeholder=" Email " >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="LicenseNo3"> &#128073; Were you subject to the FMCSRs while employed?</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="fmcsrs_status3">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group mb-sm-0">
									<label for="LicenseNo"> &#128073; Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="drug_alcohol_test3">
											<span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group mb-sm-0">
									<label for="Employer4">Employer<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerEmployer4" placeholder=" Employer " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="EmployedFrom4">Employed From<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="date" class="form-control" id="EmployerEmployedFrom4" placeholder=" Employed From " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="EmployedTo4">Employed To<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="date" class="form-control" id="EmployerEmployedTo4" placeholder=" Employed To " >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Street4">Street<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerStree4" placeholder=" Street " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="CityStateZip4">City,State,Zip<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerCityStateZip4" placeholder=" City,State,Zip " >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Phone4">Phone <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerPhone4" placeholder=" Phone" >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="Supervisor4">Supervisor<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerSupervisor4" placeholder="Supervisor" >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="Position4">Position<span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerPosition4" placeholder=" Position " >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="ReasonforLeaving4">Reason for Leaving <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" id="EmployerReasonforLeaving4" placeholder="Reason for Leaving  " >
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<label for="Email4">Email  <span style="color:#ff0000">*</span></label>
									<div class="input-group">
										<input type="Email " class="form-control" id="EmployerEmail4" placeholder=" Email " >
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="LicenseNo4"> &#128073; Were you subject to the FMCSRs while employed?</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="fmcsrs_status4">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group mb-sm-0">
									<label for="LicenseNo"> &#128073; Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group mb-sm-0">
									<div class="main-toggle-group d-flex flex-wrap mt-3">
										<div class="toggle on" id="drug_alcohol_test4">
											<span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
<!-- Declaration of Employment Status (GAPS in Employment History) -->
					<h4>Declaration of Employment Status (GAPS in Employment History)</h4>
					<div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group mb-sm-0">
									<label class="form-label">
										<p>I understand that I must provide my complete employment history for the past 3 years, and all CDL required employment for the 7 years preceding that. Any gaps in employment longer than 1 month are explained as follows:</p>
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<label class="ckbox" for="employee_gap"><input checked type="checkbox" id="employee_gap"><span>There are no gaps in my employment history in the last 10 years of over 1 month.</span></label>
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding: 1% 10%;">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="radio" class="form-check-input radioButton" id="declarationRadio1" name="optradio" value="" checked>
                            			<label class="form-check-label" for="radio1">1</label>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="radio" class="form-check-input" id="declarationRadio2" name="optradio" value="option2">
                            			<label class="form-check-label" for="radio2">2</label>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="radio" class="form-check-input" id="declarationRadio3" name="optradio" value="option3" >
                            			<label class="form-check-label" for="radio1">3</label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<label class="form-label" for="expdate1">During a gap in my employment</label>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="emp_from">From </label>
									<div class="input-group">
										<input type="date" class="form-control" id="emp_from" name="emp_from" >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="emp_to">To</label>
									<div class="input-group">
										<input type="date" class="form-control" id="emp_to"  >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="emp_reason">I was engaged in the following activity:</label>
									<div class="input-group">
										<input type="text" class="form-control" id="emp_reason"  >
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-5">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<label class="ckbox" for="employee_company"><input checked type="checkbox" id="employee_company"><span>I was not employed by any company or individual.</span></label>
									</div>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<label class="ckbox" for="criminal_act_involving"><input checked type="checkbox" id="criminal_act_involving"><span>I was not convicted of any criminal act involving the use of a CMV or while driving a CMV.</span></label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<label class="form-label" for="">During a gap in my employment</label>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="emp_from1">From </label>
									<div class="input-group">
										<input type="date" class="form-control" id="emp_from1"  >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="emp_to1">To</label>
									<div class="input-group">
										<input type="date" class="form-control" id="emp_to1"  >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="emp_reason1">I was engaged in the following activity:</label>
									<div class="input-group">
										<input type="text" class="form-control" id="emp_reason1"  >
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-5">
								<div class="form-group mb-sm-0">
									<div class="input-group">
									<label class="ckbox" for="employee_company1"><input checked type="checkbox" id="employee_company1"><span>I was not employed by any company or individual.</span></label>
									</div>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<label class="ckbox" for="criminal_act_involving1"><input checked type="checkbox" id="criminal_act_involving1"><span>I was not convicted of any criminal act involving the use of a CMV or while driving a CMV.</span></label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<label for="ApplicantName2">During a gap in my employment</label>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="emp_from2">From </label>
									<div class="input-group">
										<input type="date" class="form-control" id="emp_from2"  >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="emp_to2">To</label>
									<div class="input-group">
										<input type="date" class="form-control" id="emp_to2"  >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="emp_reason2">I was engaged in the following activity:</label>
									<div class="input-group">
										<input type="text" class="form-control" id="emp_reason2"  >
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-5">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<label class="ckbox" for="employee_company2"><input checked type="checkbox" id="employee_company2"><span>I was not employed by any company or individual.</span></label>
									</div>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<label class="ckbox" for="criminal_act_involving2"><input checked type="checkbox" id="criminal_act_involving2"><span>I was not convicted of any criminal act involving the use of a CMV or while driving a CMV.</span></label>
									</div>
								</div>
							</div>
						</div>
					</div>

<!-- Accidents for Past Three (3) Years:					 -->
					<h4>Accidents for Past Three (3) Years:</h4>
					<div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<label class="ckbox" for="show_accidents"><input checked type="checkbox" id="show_accidents"><span>I have no accidents to report.</span></label>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="padding: 1% 10%;">
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="radio" class="form-check-input radioButton" id="AccidentRadio1" name="AccidentRadio1" value="option1" checked>
                            			<label class="form-check-label" for="AccidentRadio1">1</label>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="radio" class="form-check-input" id="AccidentRadio2" name="AccidentRadio2" value="option2">
                            			<label class="form-check-label" for="AccidentRadio2">2</label>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group mb-sm-0">
									<div class="input-group">
										<input type="radio" class="form-check-input" id="AccidentRadio3" name="AccidentRadio3" value="option3" >
                            			<label class="form-check-label" for="AccidentRadio3">3</label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="">Accident Date</label>
									<div class="input-group">
										<input type="date" class="form-control" id="accident_date"  >
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group mb-sm-0">
									<label for="">Description :</label>
									<div class="input-group">
										<input type="text" class="form-control" id="accident_description"  >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="">No. of Injuries / Fatalities</label>
									<div class="input-group">
										<input type="text" class="form-control" id="no_of_injuries">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="">Accident Date</label>
									<div class="input-group">
										<input type="date" class="form-control" id="accident_date1"  >
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group mb-sm-0">
									<label for="">Description :</label>
									<div class="input-group">
										<input type="text" class="form-control" id="accident_description1"  >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="">No. of Injuries / Fatalities</label>
									<div class="input-group">
										<input type="text" class="form-control" id="no_of_injuries1">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="">Accident Date</label>
									<div class="input-group">
										<input type="date" class="form-control" id="accident_date2"  >
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group mb-sm-0">
									<label for="">Description :</label>
									<div class="input-group">
										<input type="text" class="form-control" id="accident_description2"  >
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group mb-sm-0">
									<label for="">No. of Injuries / Fatalities</label>
									<div class="input-group">
										<input type="text" class="form-control" id="no_of_injuries2">
									</div>
								</div>
							</div>
						</div>

					</div>

<!-- Traffic Convictions & Forfeitures for Past Three (3) Years					 -->
					<h4>Traffic Convictions & Forfeitures for Past Three (3) Years</h4>
					<div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Expiration</label>
									<div class="input-group">
										<input type="number" id="expdate1" class="form-control" placeholder="MM" name="expiremonth">
									</div>
								</div>
							</div>
						</div>
					</div>

					<h4>Provide your details</h4>
					<div>
					<div class="row">
							<div class="col-sm-12">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Expiration</label>
									<div class="input-group">
										<input type="number" id="expdate1" class="form-control" placeholder="MM" name="expiremonth">
									</div>
								</div>
							</div>
						</div>
					</div>

					<h4>Provide your details</h4>
					<div>
					<div class="row">
							<div class="col-sm-12">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Expiration</label>
									<div class="input-group">
										<input type="number" id="expdate1" class="form-control" placeholder="MM" name="expiremonth">
									</div>
								</div>
							</div>
						</div>
					</div>

					<h4>Provide your details</h4>
					<div>
					<div class="row">
							<div class="col-sm-12">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Expiration</label>
									<div class="input-group">
										<input type="number" id="expdate1" class="form-control" placeholder="MM" name="expiremonth">
									</div>
								</div>
							</div>
						</div>
					</div>

					<h4>Provide your details</h4>
					<div>
					<div class="row">
							<div class="col-sm-12">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Expiration</label>
									<div class="input-group">
										<input type="number" id="expdate1" class="form-control" placeholder="MM" name="expiremonth">
									</div>
								</div>
							</div>
						</div>
					</div>

					<h4>Payment Details</h4>
					<div>
						<div class="form-group">
							<label class="form-label" for="name1">Card Holder Name</label>
							<input type="text" class="form-control" id="name1" placeholder="First Name">
						</div>
						<div class="form-group">
							<label class="form-label" for="cardno1">Card number</label>
							<div class="input-group">
								<input type="text" class="form-control" id="cardno1" placeholder="Search for...">
								<span class="input-group-text btn btn-info text-white shadow-none">
									<i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
									<i class="fa fa-cc-mastercard"></i>
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8">
								<div class="form-group mb-sm-0">
									<label class="form-label" for="expdate1">Expiration</label>
									<div class="input-group">
										<input type="number" id="expdate1" class="form-control" placeholder="MM" name="expiremonth">
										<input type="number" id="expdate2" class="form-control" placeholder="YYYY" name="expireyear">
									</div>
								</div>
							</div>
							<div class="col-sm-4 ">
								<div class="form-group mb-0">
									<label class="form-label" for="cvv1">CVV <i class="fa fa-question-circle"></i></label>
									<input type="number" class="form-control" id="cvv1" required>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Row -->

</div>						

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

		<!-- JQUERY JS -->
		<script src="{{URL::to('/')}}/assets/js/jquery.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{URL::to('/')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="{{URL::to('/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- SIDE-MENU JS-->
		<script src="{{URL::to('/')}}/assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- FORM WIZARD JS-->
		<script src="{{URL::to('/')}}/plugins/formwizard/jquery.smartWizard.js"></script>
		<script src="{{URL::to('/')}}/assets/plugins/formwizard/fromwizard.js"></script>

		<!-- INTERNAl JQUERY.STEPS JS -->
		<script src="{{URL::to('/')}}/assets/plugins/jquery-steps/jquery.steps.min.js"></script>
		<script src="{{URL::to('/')}}/assets/plugins/parsleyjs/parsley.min.js"></script>

		<!-- PERFECT SCROLLBAR JS-->
		<script src="{{URL::to('/')}}/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
		<script src="{{URL::to('/')}}/assets/plugins/p-scroll/pscroll.js"></script>

		<!-- INTERNAL ACCORDION-WIZARD-FORM JS-->
		<script src="{{URL::to('/')}}/assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js"></script>
		<script src="{{URL::to('/')}}/assets/js/form-wizard.js"></script>

		<!-- STICKY JS -->
		<script src="{{URL::to('/')}}/assets/js/sticky.js"></script>

		<!-- COLOR THEME JS -->
		<script src="{{URL::to('/')}}/assets/js/themeColors.js"></script>

		<!-- CUSTOM JS -->
		<script src="{{URL::to('/')}}/assets/js/custom.js"></script>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

		<!-- JQUERY JS -->
		<script src="../assets/js/jquery.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Bootstrap-Date Range Picker js-->
		<script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

		<!-- jQuery UI Date Picker js -->
		<script src="../assets/plugins/date-picker/jquery-ui.js"></script>

		<!-- bootstrap-datepicker js (Date picker Style-01) -->
		<script src="../assets/plugins/bootstrap-datepicker/js/datepicker.js"></script>

		<!-- Amaze UI Date Picker js-->
		<script src="../assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>

		<!-- Simple Date Time Picker js-->
		<script src="../assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>

		<!-- SELECT2 JS -->
		<script src="../assets/plugins/select2/select2.full.min.js"></script>

		<!-- BOOTSTRAP MAX-LENGTH JS -->
		<script src="../assets/plugins/bootstrap-maxlength/dist/bootstrap-maxlength.min.js"></script>

		<!--Internal Fileuploads js-->
		<script src="../assets/plugins/fileuploads/js/fileupload.js"></script>
		<script src="../assets/plugins/fileuploads/js/file-upload.js"></script>

		<!--Internal Fancy uploader js-->
		<script src="../assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
		<script src="../assets/plugins/fancyuploder/jquery.fileupload.js"></script>
		<script src="../assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
		<script src="../assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
		<script src="../assets/plugins/fancyuploder/fancy-uploader.js"></script>

		<!-- SIDE-MENU JS-->
		<script src="../assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
		<script src="../assets/plugins/p-scroll/pscroll.js"></script>

		<!-- FORM ELEMENTS JS -->
		<script src="../assets/js/formelementadvnced.js"></script>

		<!-- STICKY JS -->
		<script src="../assets/js/sticky.js"></script>

		<!-- COLOR THEME JS -->
		<script src="../assets/js/themeColors.js"></script>

		<!-- CUSTOM JS -->
		<script src="../assets/js/custom.js"></script>

		<!-- FORM ELEMENTS JS -->
		<script src="../assets/js/form-elements.js"></script>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

		<!-- JQUERY JS -->
		<script src="../assets/js/jquery.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- INPUT MASK JS-->
		<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

		<!--Internal  jquery.maskedinput js -->
		<script src="../assets/plugins/jquery.maskedinput/jquery.maskedinput.js"></script>

		<!--Color Picker js-->
		<script src="../assets/plugins/colorpicker/pickr.es5.min.js"></script>

		<!--Internal Color Picker js-->
		<script src="../assets/js/colorpicker.js"></script>

		<!-- SELECT2 JS -->
		<script src="../assets/plugins/select2/select2.full.min.js"></script>

		<!-- SIDE-MENU JS-->
		<script src="../assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
		<script src="../assets/plugins/p-scroll/pscroll.js"></script>

		<!-- FORM ELEMENTS JS -->
		<script src="../assets/js/form-elements.js"></script>

		<!-- STICKY JS -->
		<script src="../assets/js/sticky.js"></script>

		<!-- COLOR THEME JS -->
		<script src="../assets/js/themeColors.js"></script>

		<!-- CUSTOM JS -->
		<script src="../assets/js/custom.js"></script>

		

	</body>
</html>


