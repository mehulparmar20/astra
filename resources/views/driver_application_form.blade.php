<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="{{URL::to('/')}}/assets/css/driverApplicationForm.css" rel="stylesheet">


<script language="JavaScript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script language="JavaScript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Multiselect -->
<link href="{{URL::to('/')}}/assets/css/mobiscroll.jquery.min.css" rel="stylesheet" />
<script src="{{URL::to('/')}}/assets/js/mobiscroll.jquery.min.js"></script>





</head>
<body>

<!-- MultiStep Form -->
<div class="row">
<div class="col-md-2 ">
</div>
    <!-- <div class="col-md-8 col-md-offset-3" > -->
    <div class="col-md-8" >
        <form id="msform">
        <input type="hidden" name="_token" id="_tokenApplicationForm" value="{{ csrf_token() }}" />
            <!-- progressbar -->
            <ul id="progressbar">
                <!-- <li class="active">Personal Details</li> -->
                <li id="step1">Provide your details</li>
                <li id="step2" style="display:none;">Social Profiles</li>
                <li id="step2" >Applicant Information</li>
                <li id="step3">Employment Record</li>
                <li id="step4">Declaration of Employment Status</li>
                <li id="step5">Accidents Details</li>
                <li id="step6">Traffic Convictions & Forfeitures</li>
                <li id="step7">Driver Experience</li>
                <li id="step8">Driving State</li>
                <li id="step9">Certification of Violations</li>
                <li id="step10">Driver Statement/li>
                <li id="step11">Alcohol and Controlled Substances</li>
 
            </ul>
            <!-- fieldsets -->
        
            <fieldset class="active" id="info">
                <section id="highlights">
                    <div class=""  style=" padding:10px;">
                    <h3 class="fs-title animate-charcter" >Welcome to Astra TMS..!</h3>
                    <hr>
                        <div class="col-md-4 " id="course">
                            <div>
                                <h4 class="fs-title" style="font-size: 18px;">Required Documents</h4>
                                <hr>
                                <ul style= "text-align:left;padding-left:18px;font-size:18px;">
                                    <li>Driving license</li>
                                    <li>Employment Reports</li>
                                    <li>Accident Reports</li>
                                    <li>Violations Reports</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 ">
                            <div>
                                <center><h4 id="auto" style="color:#2098ce;font-weight: bold">*Here, Define the steps to process your application.*</h4></center>
                                <div style="margin-top:16px; margin-right:auto; margin-left:30px">
                                    <ul style= "text-align:left;padding-left:15px;font-size:16px;color:black;">
                                        <li class="">Applicant Details.</li>
                                        <li class="">Employment Record.</li>
                                        <li class="">Declaration of Employment Status.</li>
                                        <li class="">Accidents for Past Three (3) Years.</li>
                                        <li class="">Traffic Convictions & Forfeitures for Past Three (3) Years.</li>
                                        <li class="">Accidents for Past Three (3) Years.</li>
                                        <li class="">Driver Experience(Type of Equipment).</li>
                                        <li class="">Driving State.</li>
                                        <li class="">Certification of Violations.</li>
                                        <li class="">Driver Statement of On-Duty Hours.</li>
                                        <li class="">Alcohol and Controlled Substances.</li>

                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <button type="button" class="button" id="fillForm" ><span>Fill Form  </span></button>                                    
                        </div>
                    </div>
                </section>
            </fieldset>

            <fieldset id="step1_wrap">
                <h2 class="fs-title">Provide your details</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ApplicantName">Applicant Name <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="ApplicantName" placeholder=" Enter Applicant Name " >
                    </div>
                  
                    <div class="form-group col-md-6">
                        <label for="DateOfApplication">Date Of Application<span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="DateOfApplication" placeholder=" Enter Date Of Application " >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="DateOfBirth* :">Date Of Birth<span style="color:#ff0000">*</span></label>
                        <input type="Date" class="form-control" id="DateOfBirthApplication" placeholder=" Enter Date Of Birth* : " >
                    </div>
                  
                    <div class="form-group col-md-6">
                        <label for="SocialSecurityNo">Social Security No<span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="SocialSecurityNo" placeholder=" Enter Social Security No " >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="LicenseNo">License No.<span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="LicenseNo" placeholder=" Enter License No " >
                    </div>
                  
                    <div class="form-group col-md-4">
                        <label for="LicenseIssueState">License Issue State<span style="color:#ff0000">*</span></label>
                        <select class="form-control"   id="licence_state">
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
                    <div class="form-group col-md-4">
                        <label for="LicenseExpDate">License Exp. Date<span style="color:#ff0000">*</span></label>
                        <input type="date" class="form-control" id="LicenseExpDate" placeholder=" Enter License Exp. Date" >
                    </div>
                </div>
                <input type="button" name="next" class="next action-button action-button_first" value="Next"/>
                <input type="button" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>

            <fieldset id="step2_wrap" class="formScroll">
                <h2 class="fs-title"  >Applicant Information</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="ApplicantName2">Applicant Name </label>
                        <input type="text" class="form-control" id="ApplicantName2" disabled >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Telephone">Telephone <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="TelephoneApplicant" placeholder=" Enter Telephone " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Email">Email <span style="color:#ff0000">*</span></label>
                        <input type="Email" class="form-control" id="EmailApplicant" placeholder=" Enter Email " >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="DateOfBirth* :">Date Of Birth</label>
                        <input type="Date" class="form-control" id="DateOfBirthApplicant"  disabled>
                    </div>
                  
                    <div class="form-group col-md-4">
                        <label for="SocialSecurityNo">Social Security No</label>
                        <input type="text" class="form-control" id="SocialSecurityNoApplicant" disabled >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Fax">Fax(If Applicable)</label>
                        <input type="text" class="form-control" id="FaxApplicant" placeholder=" Enter Fax " >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="LicenseNo">License No.</label>
                        <input type="text" class="form-control" id="LicenseNoApplicant" disabled >
                    </div>
                  
                    <div class="form-group col-md-3">
                        <label for="LicenseIssueState">License Issue State</label>
                        <input type="text" class="form-control" id="LicenseIssueStateApplicant" disabled >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="LicenseType">License Type<span style="color:#ff0000">*</span></label>
                        <select id="licence_type"  name="licence_type" class="form-control">
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
                    <div class="form-group col-md-3">
                        <label for="LicenseExpDate">License Exp. Date</label>
                        <input type="date" class="form-control" id="LicenseExpDate" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="LicenseNo"> &#128073;  Has any license, permit or privilege ever been suspended or revoked?<span style="color:#ff0000">*</span></label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="toggle">
                          <input type="checkbox" id="licence_suspend">
                          <span class="slider"></span>
                          <span class="labels" data-on="Yes" data-off="No"></span>
                        </label>

                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="LicenseNo"> &#128073;  Have you ever been denied a license, permit or privilege to operate a motor vehicle?<span style="color:#ff0000">*</span></label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="toggle">
                          <input type="checkbox" id="licence_denied">
                          <span class="slider"></span>
                          <span class="labels" data-on="Yes" data-off="No"></span>
                        </label>

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Address">Address</label>
                        <input type="Date" class="form-control" id="Address_applicant"  placeholde="Address">
                    </div>
                  
                    <div class="form-group col-md-4">
                        <label for="CityStateZip">City,State,Zip</label>
                        <input type="text" class="form-control" id="CityStateZip_applicant" placeholde="City,State,Zip"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="HowLong?">How Long?<span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="resident_time" placeholder=" How Long? " >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="LicenseNo"> &#128073; Do you have the legal right to work in the United States?<span style="color:#ff0000">*</span></label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="toggle">
                          <input type="checkbox" id="legal_right">
                          <span class="slider"></span>
                          <span class="labels" data-on="Yes" data-off="No"></span>
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="LicenseNo"> &#128073; Can you provide proof of legal status?<span style="color:#ff0000">*</span></label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="toggle">
                          <input type="checkbox" id="leage_proof">
                          <span class="slider"></span>
                          <span class="labels" data-on="Yes" data-off="No"></span>
                        </label>
                    </div>
                </div>
                <h2 class="fs-title">Emergency Contact</h2>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Name">Name<span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="emergency_contact_name"  placeholde="Name">
                    </div>
                  
                    <div class="form-group col-md-6">
                        <label for="Relation">Relation<span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="emergency_contact_relation" placeholde="Relation"  >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Address2">Address<span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="emergency_contact_Address"  placeholde="Address">
                    </div>
                  
                    <div class="form-group col-md-6">
                        <label for="ContactNumber">Contact Number<span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="emergency_contact_Number" placeholde="Contact Number"  >
                    </div>
                </div>
                <h2 class="fs-title">Employment Information</h2>
                <hr>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="LicenseNo"> &#128073; Have you worked for this company before?<span style="color:#ff0000">*</span></label>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="toggle">
                    <input type="checkbox" id="company_employee">
                    <span class="slider"></span>
                    <span class="labels" data-on="Yes" data-off="No"></span>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="From">From<span style="color:#ff0000">*</span></label>
                    <input type="date" class="form-control" id="company_employee_from" >
                  </div>
                  <div class="form-group col-md-3">
                      <label for="To">To<span style="color:#ff0000">*</span></label>
                      <input type="date" class="form-control" id="company_employee_to" >
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    </div>
                    <div class="form-group col-md-2">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="From">Reason for leaving?<span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="company_employee_leave_reason" placeholder="Reason">
                    </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for=""> &#128073; Are you now employed?<span style="color:#ff0000">*</span></label>
                    </div>
                    <div class="form-group col-md-2">
                      <label class="toggle">
                        <input type="checkbox" id="employment_status">
                        <span class="slider"></span>
                        <span class="labels" data-on="Yes" data-off="No"></span>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="lastEmploymentDate">If not, date left last employment:?</label>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="date" class="form-control" id="last_employee" >
                    </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for=""> &#128073; Have you ever been bonded?<span style="color:#ff0000">*</span></label>
                    </div>
                    <div class="form-group col-md-2">
                      <label class="toggle">
                        <input type="checkbox" id="bond_status">
                        <span class="slider"></span>
                        <span class="labels" data-on="Yes" data-off="No"></span>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="lastEmploymentDate">If Yes, Name of bonding company:?</label>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" id="bond_company_name" >
                    </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for=""> &#128073; Have you ever been convicted of a felony?<span style="color:#ff0000">*</span></label>
                    </div>
                    <div class="form-group col-md-2">
                      <label class="toggle">
                        <input type="checkbox" id="felony_status">
                        <span class="slider"></span>
                        <span class="labels" data-on="Yes" data-off="No"></span>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="lastEmploymentDate">If Yes, explain fully on a separate sheet:?</label>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" id="felony_reason" >
                    </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for=""> &#128073; Conviction of a crime is not an automatic bar to employment. All circumstances will be considered?<span style="color:#ff0000">*</span></label>
                  </div>
                  <div class="form-group col-md-2">
                      <label class="toggle">
                        <input type="checkbox" id="Conviction_status">
                        <span class="slider"></span>
                        <span class="labels" data-on="Yes" data-off="No"></span>
                  </div>
                  <div class="form-group col-md-3">
                   <label for="lastEmploymentDate">If Yes, please explain:</label>
                  </div>
                  <div class="form-group col-md-3">
                      <input type="text" class="form-control" id="Conviction_reason" >
                  </div>
                </div>
                
         
                <div class="form-row">
                  <div class="form-group col-md-12">
                  <h2 class="fs-title" style="text-align:center;">Education Information</h2>
                    <hr>
                    </div>
                </div>
                
                <div class="form-row">
                  <div class="form-group col-md-6">
                   <label for="Grade">Highest Grade Completed: 1 2 3 4 5 6 7 8 9 10 11 12 College: 1 2 3 4 Higher:<span style="color:#ff0000">*</span></label>
                    <input type="text" class="form-control" id="school_grade" placeholder="Highest Grade" >
                  </div>
                  <div class="form-group col-md-3">
                   <label for="Attended">Last School Attended::</label>
                    <input type="text" class="form-control" id="last_school" placeholder="Last School Attended" >
                  </div>
                  <div class="form-group col-md-3">
                   <label for="CityState">City, State:</label>
                    <input type="text" class="form-control" id="school_city_state" placeholder="City, State">
                  </div>
                </div>

              <input type="button" name="previous" class="previous action-button-previous action-button_second" value="Previous"/>
                <input type="button" name="next" class="next action-button next_2" value="Next"/>
            </fieldset>
            
            <fieldset id="step3_wrap" class="formScroll">
                <h2 class="fs-title">Employment Record</h2>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <div class="form-check">
                            <input type="radio" class="form-check-input radioButton" id="radio1" name="optradio" value="option1" checked>
                            <label class="form-check-label" for="radio1">1</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                            <label class="form-check-label" for="radio2">2</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-check">
                       <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3" >
                            <label class="form-check-label" for="radio1">3</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option4">
                            <label class="form-check-label" for="radio2">4</label>
                        </div>
                    </div>
                </div>
                <div id="first_radio">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Employer">Employer<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="Employer1" placeholder=" Employer " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="EmployedFrom">Employed From<span style="color:#ff0000">*</span></label>
                            <input type="date" class="form-control" id="EmployedFrom1" placeholder=" Employed From " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="EmployedTo">Employed To<span style="color:#ff0000">*</span></label>
                            <input type="date" class="form-control" id="EmployedTo1" placeholder=" Employed To " >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="Street">Street<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerStreet1" placeholder=" Street " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="CityStateZip">City,State,Zip<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerCityStateZip1" placeholder=" City,State,Zip " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Phone">Phone <span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerPhone1" placeholder=" Phone" >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Supervisor">Supervisor<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerSupervisor1" placeholder="Supervisor" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Position">Position<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerPosition1" placeholder=" Position " >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ReasonforLeaving ">Reason for Leaving <span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerReasonforLeaving1 " placeholder="Reason for Leaving  " >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Email ">Email  <span style="color:#ff0000">*</span></label>
                            <input type="Email " class="form-control" id="EmployerEmail1 " placeholder=" Email " >
                        </div>
                       
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="LicenseNo"> &#128073; Were you subject to the FMCSRs while employed?</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="toggle">
                            <input type="checkbox" id="fmcsrs_status1">
                            <span class="slider"></span>
                            <span class="labels" data-on="Yes" data-off="No"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="LicenseNo"> &#128073; Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="toggle">
                            <input type="checkbox" id="drug_alcohol_test1">
                            <span class="slider"></span>
                            <span class="labels" data-on="Yes" data-off="No"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div id="second_radio" style="display:none;">
                    <div class="form-row" >
                        <div class="form-group col-md-6">
                            <label for="Employer2">Employer<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="Employer2" placeholder=" Employer " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="EmployedFrom2">Employed From<span style="color:#ff0000">*</span></label>
                            <input type="date" class="form-control" id="EmployedFrom2" placeholder=" Employed From " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="EmployedTo2">Employed To<span style="color:#ff0000">*</span></label>
                            <input type="date" class="form-control" id="EmployedTo2" placeholder=" Employed To " >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="Street2">Street<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerStreet2" placeholder=" Street " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="CityStateZip2">City,State,Zip<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerCityStateZip2" placeholder=" City,State,Zip " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Phone2">Phone <span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerPhone2" placeholder=" Phone" >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Supervisor2">Supervisor<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerSupervisor2" placeholder="Supervisor" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Position2">Position<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerPosition2" placeholder=" Position " >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ReasonforLeaving2">Reason for Leaving <span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerReasonforLeaving2" placeholder="Reason for Leaving  " >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Email2">Email  <span style="color:#ff0000">*</span></label>
                            <input type="Email " class="form-control" id="EmployerEmail2" placeholder=" Email " >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="LicenseNo2"> &#128073; Were you subject to the FMCSRs while employed?</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="toggle">
                            <input type="checkbox" id="fmcsrs_status2">
                            <span class="slider"></span>
                            <span class="labels" data-on="Yes" data-off="No"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="LicenseNo"> &#128073; Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="toggle">
                            <input type="checkbox" id="drug_alcohol_test2">
                            <span class="slider"></span>
                            <span class="labels" data-on="Yes" data-off="No"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div id="third_radio" style="display:none;">
                    <div class="form-row" >
                        <div class="form-group col-md-6">
                            <label for="Employer3">Employer<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerEmployer3" placeholder=" Employer " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="EmployedFrom3">Employed From<span style="color:#ff0000">*</span></label>
                            <input type="date" class="form-control" id="EmployerEmployedFrom3" placeholder=" Employed From " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="EmployedTo">Employed To<span style="color:#ff0000">*</span></label>
                            <input type="date" class="form-control" id="EmployerEmployedTo" placeholder=" Employed To " >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="Street3">Street<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerStreet3" placeholder=" Street " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="CityStateZip3">City,State,Zip<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerCityStateZip3" placeholder=" City,State,Zip " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Phone3">Phone <span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerPhone3" placeholder=" Phone" >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Supervisor3">Supervisor<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerSupervisor3" placeholder="Supervisor" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Position3">Position<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerPosition3" placeholder=" Position " >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ReasonforLeaving3">Reason for Leaving <span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerReasonforLeaving3" placeholder="Reason for Leaving  " >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Email3">Email  <span style="color:#ff0000">*</span></label>
                            <input type="Email " class="form-control" id="EmployerEmail3" placeholder=" Email " >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="LicenseNo3"> &#128073; Were you subject to the FMCSRs while employed?</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="toggle">
                            <input type="checkbox" id="fmcsrs_status3">
                            <span class="slider"></span>
                            <span class="labels" data-on="Yes" data-off="No"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="LicenseNo"> &#128073; Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="toggle">
                            <input type="checkbox" id="drug_alcohol_test3">
                            <span class="slider"></span>
                            <span class="labels" data-on="Yes" data-off="No"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div id="forth_radio" style="display:none;">
                    <div class="form-row" >
                        <div class="form-group col-md-6">
                            <label for="Employer4">Employer<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerEmployer4" placeholder=" Employer " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="EmployedFrom4">Employed From<span style="color:#ff0000">*</span></label>
                            <input type="date" class="form-control" id="EmployerEmployedFrom4" placeholder=" Employed From " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="EmployedTo4">Employed To<span style="color:#ff0000">*</span></label>
                            <input type="date" class="form-control" id="EmployerEmployedTo4" placeholder=" Employed To " >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="Street4">Street<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerStree4" placeholder=" Street " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="CityStateZip4">City,State,Zip<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerCityStateZip4" placeholder=" City,State,Zip " >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Phone4">Phone <span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerPhone4" placeholder=" Phone" >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Supervisor4">Supervisor<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerSupervisor4" placeholder="Supervisor" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Position4">Position<span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerPosition4" placeholder=" Position " >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ReasonforLeaving4">Reason for Leaving <span style="color:#ff0000">*</span></label>
                            <input type="text" class="form-control" id="EmployerReasonforLeaving4" placeholder="Reason for Leaving  " >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Email4">Email  <span style="color:#ff0000">*</span></label>
                            <input type="Email " class="form-control" id="EmployerEmail4" placeholder=" Email " >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="LicenseNo4"> &#128073; Were you subject to the FMCSRs while employed?</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="toggle">
                            <input type="checkbox" id="fmcsrs_status4">
                            <span class="slider"></span>
                            <span class="labels" data-on="Yes" data-off="No"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="LicenseNo"> &#128073; Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="toggle">
                            <input type="checkbox" id="drug_alcohol_test4">
                            <span class="slider"></span>
                            <span class="labels" data-on="Yes" data-off="No"></span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <hr style="border: 10;">
                <hr>
                <input type="button" name="previous" class="previous action-button-previous action-button_second" value="Previous"/>
                <input type="button" name="next" class="next action-button next_3" value="Next"/>
            </fieldset>

            <fieldset id="step4_wrap" class="formScroll">
                <h2 class="fs-title">Declaration of Employment Status</h2>
                <h3 class="fs-subtitle"> (GAPS in Employment History)</h3>
                <hr>               
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <!-- <label for="Employer">I understand that I must provide my complete employment history for the past 3 years, and all CDL required employment for the 7 years preceding that. Any gaps in employment longer than 1 month are explained as follows:</label> -->
                        <p>I understand that I must provide my complete employment history for the past 3 years, and all CDL required employment for the 7 years preceding that. Any gaps in employment longer than 1 month are explained as follows:</p>
                    </div>
                </div>
               
                <div class="form-row">
                    <div class="form-group col-md-1">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkDeclaration" name="" value="" checked style="text-align:right;">
                        </div>
                    </div>
                    <div class="form-group col-md-11">
                        <div class="form-check">
                            <label class="form-check-label" for="check1">There are no gaps in my employment history in the last 10 years of over 1 month.</label>
                        </div>
                    </div>
                </div>

                 <div class="form-row" id="declarationRadio">
                    <div class="form-group col-md-4">
                        <div class="form-check">
                            <input type="radio" class="form-check-input radioButton" id="declarationRadio1" name="optradio" value="o1" checked>
                            <label class="form-check-label" for="radio1">1</label>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="declarationRadio2" name="optradio" value="option2">
                            <label class="form-check-label" for="radio2">2</label>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="declarationRadio3" name="optradio" value="option3" >
                            <label class="form-check-label" for="radio1">3</label>
                        </div>
                    </div>
                </div>

                <!-- <div id="declaratuionOption1"> -->
                    <div class="form-row" id="declaratuionOption1_1">
                        <div class="form-group col-md-2">
                            <label for="ApplicantName2">During a gap in my employment</label>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">From </label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Emal">To</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ApplicantName2">I was engaged in the following activity:</label>
                            <input type="text" class="form-control" id=""  >
                        </div>
                    </div >
                    <div class="form-row" id="declaratuionOption1_2">
                        <div class="form-group col-md-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="" name="" value="" checked >
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-check">
                                <label class="form-check-label" for="check1">I was not employed by any company or individual.</label>
                            </div>
                        </div>
                        <div class="form-group col-md-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="" name="" value="" checked >
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <div class="form-check">
                                <label class="form-check-label" for="check1">I was not convicted of any criminal act involving the use of a CMV or while driving a CMV.</label>
                            </div>
                        </div>
                    </div>
                <!-- <div> -->
                <!-- <div id="declaratuionOption2"> -->
                    <div class="form-row" id="declaratuionOption2_1">
                        <div class="form-group col-md-2">
                            <label for="ApplicantName2">During a gap in my employment</label>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">From </label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Emal">To</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ApplicantName2">I was engaged in the following activity:</label>
                            <input type="text" class="form-control" id=""  >
                        </div>
                    </div>
                    <div class="form-row" id="declaratuionOption2_2">
                        <div class="form-group col-md-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="" name="" value="" checked >
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-check">
                                <label class="form-check-label" for="check1">I was not employed by any company or individual.</label>
                            </div>
                        </div>
                        <div class="form-group col-md-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="" name="" value="" checked >
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <div class="form-check">
                                <label class="form-check-label" for="check1">I was not convicted of any criminal act involving the use of a CMV or while driving a CMV.</label>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
                <!-- <div id="declaratuionOption3"> -->
                    <div class="form-row" id="declaratuionOption3_1" >
                        <div class="form-group col-md-2">
                            <label for="ApplicantName2">During a gap in my employment</label>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">From </label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Emal">To</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ApplicantName2">I was engaged in the following activity:</label>
                            <input type="text" class="form-control" id=""  >
                        </div>
                    </div>
                
                    <div class="form-row" id="declaratuionOption3_2">
                        <div class="form-group col-md-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="" name="" value="" checked >
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-check">
                                <label class="form-check-label" for="check1">I was not employed by any company or individual.</label>
                            </div>
                        </div>
                        <div class="form-group col-md-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="" name="" value="" checked >
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <div class="form-check">
                                <label class="form-check-label" for="check1">I was not convicted of any criminal act involving the use of a CMV or while driving a CMV.</label>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
                <input type="button" name="previous" class="previous action-button-previous action-button_second" value="Previous"/>
                <input type="button" name="next" class="next action-button next_4" value="Next"/>
            </fieldset>

            <fieldset id="step5_wrap" >
                <h2 class="fs-title">Accidents for Past Three (3) Years:</h2>
                <!-- <h3 class="fs-subtitle"> (GAPS in Employment History)</h3> -->
                <hr>               
                <div class="form-row">
                    <div class="form-group col-md-1">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkAccident" name="" value="" checked style="text-align:right;">
                        </div>
                    </div>
                    <div class="form-group col-md-11">
                        <div class="form-check">
                            <label class="form-check-label" for="check1">I have no accidents to report.</label>
                        </div>
                    </div>
                </div>

                 <div class="form-row" id="AccidentRadio">
                    <div class="form-group col-md-4">
                        <div class="form-check">
                            <input type="radio" class="form-check-input radioButton" id="AccidentRadio1" name="optradio" value="o1" checked>
                            <label class="form-check-label" for="AccidentRadio1">1</label>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="AccidentRadio2" name="optradio" value="option2">
                            <label class="form-check-label" for="AccidentRadio2">2</label>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="AccidentRadio3" name="optradio" value="option3" >
                            <label class="form-check-label" for="AccidentRadio3">3</label>
                        </div>
                    </div>
                </div>

                    <div class="form-row" id="AccidentOption1">
                        <div class="form-group col-md-3">
                            <label for="">Accident Date</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Description :</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for=""># of Injuries / Fatalities</label>
                            <input type="text" class="form-control" id=""  placeholder="Reason">
                        </div>
                    </div >
                    <div class="form-row" id="AccidentOption2">
                        <div class="form-group col-md-3">
                            <label for="">Accident Date</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Description :</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for=""># of Injuries / Fatalities</label>
                            <input type="text" class="form-control" id=""  placeholder="Reason">
                        </div>
                    </div >
                    <div class="form-row" id="AccidentOption3">
                        <div class="form-group col-md-3">
                            <label for="">Accident Date</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Description :</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for=""># of Injuries / Fatalities</label>
                            <input type="text" class="form-control" id=""  placeholder="Reason">
                        </div>
                    </div >
                
                <input type="button" name="previous" class="previous action-button-previous action-button_second" value="Previous"/>
                <input type="button" name="next" class="next action-button next_4" value="Next"/>
            </fieldset>

            <fieldset id="step6_wrap" >
                <h2 class="fs-title">Traffic Convictions & Forfeitures for Past Three (3) Years</h2>
                <!-- <h3 class="fs-subtitle"> (GAPS in Employment History)</h3> -->
                <hr>               
                <div class="form-row">
                    <div class="form-group col-md-1">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkTraffic" name="" value="" checked style="text-align:right;">
                        </div>
                    </div>
                    <div class="form-group col-md-11">
                        <div class="form-check">
                            <label class="form-check-label" for="check1"> I have no Traffic Convictions & Forfeitures to report.</label>
                        </div>
                    </div>
                </div>

                 <div class="form-row" id="TrafficRadio">
                    <div class="form-group col-md-4">
                        <div class="form-check">
                            <input type="radio" class="form-check-input radioButton" id="TrafficRadio1" name="optradio" value="o1" checked>
                            <label class="form-check-label" for="TrafficRadio1">1</label>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="TrafficRadio2" name="optradio" value="option2">
                            <label class="form-check-label" for="TrafficRadio2">2</label>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="TrafficRadio3" name="optradio" value="option3" >
                            <label class="form-check-label" for="TrafficRadio3">3</label>
                        </div>
                    </div>
                </div>

                    <div class="form-row" id="TrafficOption1">
                        <div class="form-group col-md-3">
                            <label for="">Date</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Location  :</label>
                            <input type="text" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Charge </label>
                            <input type="text" class="form-control" id=""  placeholder="Reason">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Penalty  </label>
                            <input type="text" class="form-control" id=""  placeholder="Reason">
                        </div>
                    </div >
                    <div class="form-row" id="TrafficOption2">
                        <div class="form-group col-md-3">
                            <label for="">Date</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Location  :</label>
                            <input type="text" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Charge </label>
                            <input type="text" class="form-control" id=""  placeholder="Reason">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Penalty  </label>
                            <input type="text" class="form-control" id=""  placeholder="Reason">
                        </div>
                    </div >
                    <div class="form-row" id="TrafficOption3">
                        <div class="form-group col-md-3">
                            <label for="">Date</label>
                            <input type="date" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Location  :</label>
                            <input type="text" class="form-control" id=""  >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Charge </label>
                            <input type="text" class="form-control" id=""  placeholder="Reason">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Penalty  </label>
                            <input type="text" class="form-control" id=""  placeholder="Reason">
                        </div>
                    </div >
                   
                
                <input type="button" name="previous" class="previous action-button-previous action-button_second" value="Previous"/>
                <input type="button" name="next" class="next action-button next_4" value="Next"/>
            </fieldset>
           
            <fieldset id="step7_wrap">
                <h2 class="fs-title">Driver Experience</h2>
                <hr>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Straight Truck (CIRCLE: van, tank, flat, dump, refer)</label>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">From <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">To  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for=""># of Miles  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Tractor & Semi-Trailer (CIRCLE: van, tank, flat, dump, refer)</label>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">From <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">To  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for=""># of Miles  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Tractor – Two Trailers (CIRCLE: van, tank, flat, dump, refer)</label>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">From <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">To  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for=""># of Miles  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Tractor – Three Trailers (CIRCLE: van, tank, flat, dump, refer)</label>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">From <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">To  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for=""># of Miles  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Motorcoach – School Bus (9-15)</label>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">From <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">To  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for=""># of Miles  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Motorcoach – School Bus (16+)</label>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">From <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">To  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for=""># of Miles  <span style="color:#ff0000">*</span></label>
                        <input type="text" class="form-control" id="" >
                    </div>
                </div>

                <input type="button" name="previous" class="previous action-button-previous action-button_second" value="Previous"/>
                <input type="button" name="next" class="next action-button next_6" value="Next"/>
            </fieldset>

            <fieldset id="step8_wrap">
                <h2 class="fs-title">Driving State</h2>
                <hr>
                <div class="form-group col-md-2">
                    <label for="customerCurrencySetting">United States </span> </label>
                </div>
                <div class="form-group col-md-10">
                <!-- Build your select: -->
                <label for="customerCurrencySetting">United States </span> </label>
                <label><input mbsc-input id="demo-multiple-select-input" placeholder="Please select..." data-dropdown="true" data-input-style="outline" data-label-style="stacked" data-tags="true" /></label>
                <select id="demo-multiple-select" multiple>
                <option value="SELECT ALL"> Select All States</option>
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
                <!-- <select style="width: 50%" class="form-control state-list" id="state" multiple>
                                            
                                        </select> -->
                </div>
    

              

                <input type="button" name="previous" class="previous action-button-previous action-button_second" value="Previous"/>
                <input type="button" name="next" class="next action-button next_8" value="Next"/>
            </fieldset>

            <fieldset id="step9_wrap">
                <h2 class="fs-title">Certification of Violations</h2>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <p style="text-align: justify">
                            <b><h3>Motor Carrier Instructions:</h3></b> Each motor carrier shall, at least once every 12 months, require each driver it employs to prepare and furnish it with a list of all violations of motor vehicle traffic laws and ordinances (including violations for parking only) of which the driver has been convicted, or on account of which he has forfeited bond or collateral during the preceding 12 months. (Section 391.27)
                            Drivers who have provided information required by Section 383.31 need not repeat that information.</p>
                        <p style="text-align: justify"><b><h3>Driver Requirements:</h3></b> Each driver shall furnish the list as required by the motor carrier above if the driver has not been convicted of, or forfeited bond or collateral on account of any violation which must be listed, he shall so certify. (Section 391.27)
                        I certify that the following is a true and complete list of traffic violations required to be listed (other than those I have provided under Part 383) for which I have been convicted or forfeited bond or collateral during the past 12 months.
                    </p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="LicenseNo"> &#128073; Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="toggle">
                          <input type="checkbox">
                          <span class="slider"></span>
                          <span class="labels" data-on="Yes" data-off="No"></span>
                        </label>

                    </div>
                </div>
                <input type="button" name="previous" class="previous action-button-previous action-button_second" value="Previous"/>
                <input type="button" name="next" class="next action-button next_10" value="Next"/>
            </fieldset>

            <fieldset   id="step10_wrap"  class="formScroll">
                <h2 class="fs-title">Driver Statement of On-Duty Hours</h2>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <p style="text-align: justify">
                            Motor carriers, when using a driver for the first time, must obtain from the driver a signed statement giving the total time on- duty during the immediately preceding 7 days and the time at which the driver was last relieved from duty prior to beginning work for the carrier, as required by section 395.8(j)(2) of the Federal Motor Carrier Safety Regulations. Hours for any work during the preceding 7 days, including any compensated work for a non-motor carrier, must be recorded on this form.
                        </p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Day 1</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Date <span style="color:#ff0000">*</span></label>
                        <input type="date" id="day_1_date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Hours Worked <span style="color:#ff0000">*</span></label>
                        <input type="text" id="day_1_hours" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Day 2</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Date <span style="color:#ff0000">*</span></label>
                        <input type="date" id="day_2_date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Hours Worked <span style="color:#ff0000">*</span></label>
                        <input type="text" id="day_2_hours" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Day 3</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Date <span style="color:#ff0000">*</span></label>
                        <input type="date" id="day_3_date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Hours Worked <span style="color:#ff0000">*</span></label>
                        <input type="text" id="day_3_hours" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Day 4</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Date <span style="color:#ff0000">*</span></label>
                        <input type="date" id="day_4_date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Hours Worked <span style="color:#ff0000">*</span></label>
                        <input type="text" id="day_4_hours" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Day 5</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Date <span style="color:#ff0000">*</span></label>
                        <input type="date" id="day_5_date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Hours Worked <span style="color:#ff0000">*</span></label>
                        <input type="text" id="day_5_hours" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Day 6</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Date <span style="color:#ff0000">*</span></label>
                        <input type="date" id="day_6_date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Hours Worked <span style="color:#ff0000">*</span></label>
                        <input type="text" id="day_6_hours" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Day 7</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Date <span style="color:#ff0000">*</span></label>
                        <input type="date" id="day_7_date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Hours Worked <span style="color:#ff0000">*</span></label>
                        <input type="text" id="day_7_hours" class="form-control">
                    </div>
                </div>

                <input type="button" name="previous" class="previous action-button-previous action-button_second" value="Previous"/>
                <input type="button" name="next" class="next action-button next_11" value="Next"/>
            </fieldset>

            <fieldset   id="step11_wrap">
                <h2 class="fs-title">Alcohol and Controlled Substances</h2>
                <hr>
                <h2 class="fs-title">Prior Testing</h2>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="LicenseNo"> &#128073; Have you ever refused to be tested for drugs and/or alcohol at any time in the last two (2) years?<span style="color:#ff0000">*</span></label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="toggle">
                          <input type="checkbox">
                          <span class="slider"></span>
                          <span class="labels" data-on="Yes" data-off="No"></span>
                        </label>

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="LicenseNo"> &#128073; Have you ever tested positive for drugs and/or alcohol at any time in the last two (2) years?<span style="color:#ff0000">*</span></label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="toggle">
                          <input type="checkbox">
                          <span class="slider"></span>
                          <span class="labels" data-on="Yes" data-off="No"></span>
                        </label>

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="LicenseNo"><span style="color:black">-> </span>Have you ever tested positive on any pre-employment drug or alcohol test for a job, which you applied for but did not obtain?<span style="color:#ff0000">*</span></label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="toggle">
                          <input type="checkbox">
                          <span class="slider"></span>
                          <span class="labels" data-on="Yes" data-off="No"></span>
                        </label>

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <button type="button"  onclick="getContractLink()" class="btn btn-right tsf-wizard-btn" style="background-color: #30419B; color:white;">View Comapny Contract </button>                     
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-1">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="" name="" value="" checked style="text-align:right;">
                        </div>
                    </div>
                    <div class="form-group col-md-11">
                        <div class="form-check">
                            <label class="form-check-label" for="check1">There are no gaps in my employment history in the last 10 years of over 1 month.</label>
                        </div>
                    </div>
                </div>
                <input type="button" name="previous" class="previous action-button-previous action-button_third" value="Previous"/>
                <!-- <input type="submit" name="submit" class="submit action-button" value="Submit"/> -->
            </fieldset>
        </form>
    </div>
    <div class="col-md-4">
</div>
</div>
<!-- /.MultiStep Form -->

<script>

$(document).ready(function(){

//validation
    $('.action-button_first').click(function(){
    // var ApplicantName = $('#ApplicantName').val()
    // if(ApplicantName==''){
    //   swal("Enter Application Name");
    //   $('#ApplicantName').focus();
    //   return false;
    // }
    });

//form setup jquery    
    $(".action-button_second").click(function(){    
        $("#step2").removeClass("active");    
    });

    // $(".action-button_third").click(function(){    
    //     $("#step3").removeClass("active");    
    // });

    $(".next_2").click(function(){    
        $("#step3").addClass("active");      
    });

    $("#fillForm").click(function(){
        $("#info").removeClass("active");
        $("#info").hide();
        $("#step1").addClass("active");    
        $("#step1_wrap").show();
    });
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches



    $(".next").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
                'transform': 'scale('+scale+')',
                'position': 'absolute'
            });
            next_fs.css({'left': left, 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
            current_fs.hide();
            animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
            current_fs.hide();
            animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function(){
    return false;
    })
});

//form3
    $("#radio1").click(function(){
        $('#second_radio').hide();
        $('#third_radio').hide();
        $('#forth_radio').hide();
    });
    $("#radio2").click(function(){
        $('#second_radio').show();
        $('#third_radio').hide();
        $('#forth_radio').hide();
    });
    $("#radio3").click(function(){
        $('#second_radio').show();
        $('#third_radio').show();
        $('#forth_radio').hide();
    });
    $("#radio4").click(function(){
        $('#second_radio').show();
        $('#third_radio').show();
        $('#forth_radio').show();
    });

//form4

    if( $('#checkDeclaration').is(':checked') ){
        $('#declarationRadio').hide();
        $('#declaratuionOption1_1').hide();
        $('#declaratuionOption1_2').hide();
        $('#declaratuionOption2_1').hide();
        $('#declaratuionOption2_2').hide();
        $('#declaratuionOption3_1').hide();
        $('#declaratuionOption3_2').hide();
    
    }else{
        $('#declarationRadio').show();
        $('#declaratuionOption1_2').show();
        $('#declaratuionOption1_1').show();
    }
    $("#checkDeclaration").click(function(){
        if( $('#checkDeclaration').is(':checked') ){
            $('#declarationRadio').hide();
            $('#declaratuionOption1_1').hide();
            $('#declaratuionOption2_1').hide();
            $('#declaratuionOption3_1').hide();

            $('#declaratuionOption1_2').hide();
            $('#declaratuionOption2_2').hide();
            $('#declaratuionOption3_2').hide();
        }else{
            $('#declarationRadio').show();
            $('#declaratuionOption1_1').show();
            $('#declaratuionOption1_2').show();

            $("#declarationRadio1").click(function(){
                $('#declaratuionOption1_1').show();
                $('#declaratuionOption2_1').hide();
                $('#declaratuionOption3_1').hide();

                $('#declaratuionOption1_2').show();
                $('#declaratuionOption2_2').hide();
                $('#declaratuionOption3_2').hide();
            });
            $("#declarationRadio2").click(function(){
                $('#declaratuionOption1_1').show();
                $('#declaratuionOption2_1').show();
                $('#declaratuionOption3_1').hide();

                $('#declaratuionOption1_2').show();
                $('#declaratuionOption2_2').show();
                $('#declaratuionOption3_2').hide();
            });
             $("#declarationRadio3").click(function(){
                $('#declaratuionOption1_1').show();
                $('#declaratuionOption2_1').show();
                $('#declaratuionOption3_1').show();

                $('#declaratuionOption1_2').show();
                $('#declaratuionOption2_2').show();
                $('#declaratuionOption3_2').show();
            });
        }
    });

//form5

    if( $('#checkAccident').is(':checked') ){
        $('#AccidentRadio').hide();
        $('#AccidentOption1').hide();
        $('#AccidentOption2').hide();
        $('#AccidentOption3').hide();
       
    }else{
        $('#AccidentRadio').show();
        $('#AccidentOption1').show();
    }

    $("#checkAccident").click(function(){
        
        if( $('#checkAccident').is(':checked') ){
            $('#AccidentRadio').hide();
            $('#AccidentOption1').hide();
            $('#AccidentOption2').hide();
            $('#AccidentOption3').hide();
        }else{
            $('#AccidentRadio').show();
            $('#AccidentOption1').show();
          

            $("#AccidentRadio1").click(function(){
                // alert();
                $('#AccidentOption1').show();
                $('#AccidentOption2').hide();
                $('#AccidentOption3').hide();

            });
            $("#AccidentRadio2").click(function(){
                $('#AccidentOption1').show();
                $('#AccidentOption2').show();
                $('#AccidentOption3').hide();

            });
             $("#AccidentRadio3").click(function(){
                $('#AccidentOption1').show();
                $('#AccidentOption2').show();
                $('#AccidentOption3').show();
            });   
        }
    });
    
//form6
    if( $('#checkTraffic ').is(':checked') ){
        $('#TrafficRadio').hide();
        $('#TrafficOption1').hide();
        $('#TrafficOption2').hide();
        $('#TrafficOption3').hide();
       
    }else{
        $('#TraffictRadio').show();
        $('#TrafficOption1').show();
    }

    $("#checkTraffic").click(function(){
        
        if( $('#checkTraffic').is(':checked') ){
            $('#TrafficRadio').hide();
            $('#TrafficOption1').hide();
            $('#TrafficOption2').hide();
            $('#TrafficOption3').hide();
        }else{
            $('#TrafficRadio').show();
            $('#TrafficOption1').show();
          

            $("#TrafficRadio1").click(function(){
                // alert();
                $('#TrafficOption1').show();
                $('#TrafficOption2').hide();
                $('#TrafficOption3').hide();

            });
            $("#TrafficRadio2").click(function(){
                $('#TrafficOption1').show();
                $('#TrafficOption2').show();
                $('#TrafficOption3').hide();

            });
             $("#TrafficRadio3").click(function(){
                $('#TrafficOption1').show();
                $('#TrafficOption2').show();
                $('#TrafficOption3').show();
            });   
        }
    });
  

  

//multi select dropdown
    mobiscroll.setOptions({
        theme: 'ios',
        themeVariant: 'light'
    });

    $(function () {
        $('#demo-multiple-select').mobiscroll().select({
            inputElement: document.getElementById('demo-multiple-select-input')
        });
    });

//form submit
$('.submit').click(function(){
    var base_path = $("#url").val();
//form1
    var ApplicantName =$('#ApplicantName').val();
    var DateOfApplication =$('#DateOfApplication').val();
    var DateOfBirthApplication =$('#DateOfBirthApplication').val();
    var SocialSecurityNo =$('#SocialSecurityNo').val();
    var LicenseNo =$('#LicenseNo').val();
    var LicenseExpDate =$('#LicenseExpDate').val();
    var licence_state =$('#licence_state').val();

//form2
    var TelephoneApplicant =$('#TelephoneApplicant').val();
    var EmailApplicant =$('#EmailApplicant').val();
    var FaxApplicant =$('#FaxApplicant').val();
    var licence_type =$('#licence_type').val();
    var LicenseExpDate =$('#LicenseExpDate').val();

    if ($('#licence_suspend').is(':checked')) {
        var licence_suspend = 'Yes';
    } else {
        var licence_suspend = 'No';
    }

    if ($('#licence_denied').is(':checked')) {
        var licence_denied = 'Yes';
    } else {
        var licence_denied = 'No';
    }

    // var licence_suspend =$('#licence_suspend').val();
    // var licence_denied =$('#licence_denied').val();
    
    var Address_applicant =$('#Address_applicant').val();
    var CityStateZip_applicant =$('#CityStateZip_applicant').val();
    var legal_right =$('#legal_right').val();
    var leage_proof =$('#leage_proof').val();

    var emergency_contact_name =$('#emergency_contact_name').val();
    var emergency_contact_relation =$('#emergency_contact_relation').val();
    var emergency_contact_Address =$('#emergency_contact_Address').val();
    var emergency_contact_Number =$('#emergency_contact_Number').val();

    var company_employee =$('#company_employee').val();
    var company_employee_from =$('#company_employee_from').val();
    var company_employee_to =$('#company_employee_to').val();
    var company_employee_leave_reason =$('#company_employee_leave_reason').val();

    var employment_status =$('#employment_status').val();
    var last_employee =$('#last_employee').val();
    var bond_status =$('#bond_status').val();
    var bond_company_name =$('#bond_company_name').val();
    var felony_status =$('#felony_status').val();
    var felony_reason =$('#felony_reason').val();
    var Conviction_status =$('#Conviction_status').val();
    var Conviction_reason =$('#Conviction_reason').val();

    var school_grade =$('#school_grade').val();
    var last_school =$('#last_school').val();
    var school_city_state =$('#school_city_state').val();
//form3
    var Employer1  =$('#Employer1').val();
    var EmployedFrom1 =$('#EmployedFrom1').val();
    var EmployedTo1 =$('#EmployedTo1').val();
    var EmployerStreet1 =$('#EmployerStreet1').val();
    var EmployerCityStateZip1=$('#EmployerCityStateZip1').val();
    var EmployerPhone1=$('#EmployerPhone1').val();
    var EmployerSupervisor1=$('#EmployerSupervisor1').val();
    var EmployerPosition1=$('#EmployerPosition1').val();
    var EmployerReasonforLeaving1=$('#EmployerReasonforLeaving1').val();
    var EmployerEmail1 =$('#EmployerEmail1').val();
    var fmcsrs_status1 =$('#fmcsrs_status1').val();
    var drug_alcohol_test1 =$('#drug_alcohol_test1').val();

    var Employer2  =$('#Employer2').val();
    var EmployedFrom2 =$('#EmployedFrom2').val();
    var EmployedTo2 =$('#EmployedTo2').val();
    var EmployerStreet2 =$('#EmployerStreet2').val();
    var EmployerCityStateZip2=$('#EmployerCityStateZip2').val();
    var EmployerPhone2=$('#EmployerPhone2').val();
    var EmployerSupervisor2=$('#EmployerSupervisor2').val();
    var EmployerPosition2=$('#EmployerPosition2').val();
    var EmployerReasonforLeaving2=$('#EmployerReasonforLeaving2').val();
    var EmployerEmail2=$('#EmployerEmail2').val();
    var fmcsrs_status2=$('#fmcsrs_status2').val();
    var drug_alcohol_test2=$('#drug_alcohol_test2').val();

    var Employer3=$('#Employer3').val();
    var EmployedFrom3=$('#EmployedFrom3').val();
    var EmployedTo3=$('#EmployedTo3').val();
    var EmployerStreet3=$('#EmployerStreet3').val();
    var EmployerCityStateZip3=$('#EmployerCityStateZip3').val();
    var EmployerPhone3=$('#EmployerPhone3').val();
    var EmployerSupervisor3=$('#EmployerSupervisor3').val();
    var EmployerPosition3=$('#EmployerPosition3').val();
    var EmployerReasonforLeaving3=$('#EmployerReasonforLeaving3').val();
    var EmployerEmail3=$('#EmployerEmail3').val();
    var fmcsrs_status3=$('#fmcsrs_status3').val();
    var drug_alcohol_test3=$('#drug_alcohol_test3').val();

    var Employer4=$('#Employer4').val();
    var EmployedFrom4=$('#EmployedFrom4').val();
    var EmployedTo4=$('#EmployedTo4').val();
    var EmployerStreet4=$('#EmployerStreet4').val();
    var EmployerCityStateZip4=$('#EmployerCityStateZip4').val();
    var EmployerPhone4=$('#EmployerPhone4').val();
    var EmployerSupervisor4=$('#EmployerSupervisor4').val();
    var EmployerPosition4=$('#EmployerPosition4').val();
    var EmployerReasonforLeaving4=$('#EmployerReasonforLeaving4').val();
    var EmployerEmail4=$('#EmployerEmail4').val();
    var fmcsrs_status4=$('#fmcsrs_status4').val();
    var drug_alcohol_test4=$('#drug_alcohol_test4').val();

    $.ajax({
                url: "/admin/addApplicationForm",
                type: "POST",
                datatype:"JSON",
                data: {
                    _token: $("#_tokenApplicationForm").val(),
                    //form1
                    ApplicantName: ApplicantName,
                    DateOfApplication: DateOfApplication,
                    DateOfBirthApplication: DateOfBirthApplication,
                    SocialSecurityNo: SocialSecurityNo,
                    LicenseNo: LicenseNo,
                    LicenseExpDate: LicenseExpDate,
                    licence_state: licence_state,
                    //form2
                    ApplicantName2: ApplicantName2,
                    TelephoneApplicant: TelephoneApplicant,
                    EmailApplicant: EmailApplicant,
                    DateOfBirthApplicant: DateOfBirthApplicant,
                    SocialSecurityNoApplicant: SocialSecurityNoApplicant,
                    FaxApplicant: FaxApplicant,
                    LicenseNoApplicant: LicenseNoApplicant,
                    LicenseIssueStateApplicant: LicenseIssueStateApplicant,
                    licence_type: licence_type,
                    LicenseExpDate: LicenseExpDate,
                    licence_suspend: licence_suspend,
                    licence_denied: licence_denied,
                    Address_applicant: Address_applicant,
                    CityStateZip_applicant: CityStateZip_applicant,
                    legal_right: legal_right,
                    leage_proof: leage_proof,
                    emergency_contact_name: emergency_contact_name,
                    emergency_contact_relation: emergency_contact_relation,
                    emergency_contact_Address: emergency_contact_Address,
                    emergency_contact_Number: emergency_contact_Number,
                    company_employee: company_employee,
                    company_employee_from: company_employee_from,
                    company_employee_to: company_employee_to,
                    company_employee_leave_reason: company_employee_leave_reason,
                    employment_status:employment_status,
                    last_employee:last_employee,
                    bond_status:bond_status,
                    bond_company_name:bond_company_name,
                    felony_status:felony_status,
                    felony_reason:felony_reason,
                    Conviction_status:Conviction_status,
                    Conviction_reason:Conviction_reason,
                    school_grade:school_grade,
                    last_school:last_school,
                    school_city_state:school_city_state,
                    //form3
                    Employer1:Employer1,
                    EmployedFrom1:EmployedFrom1,
                    EmployedTo1:EmployedTo1,
                    EmployerStreet1:EmployerStreet1,
                    EmployerCityStateZip1:EmployerCityStateZip1,
                    EmployerPhone1:EmployerPhone1,
                    EmployerSupervisor1:EmployerSupervisor1,
                    EmployerPosition1:EmployerPosition1,
                    EmployerReasonforLeaving1:EmployerReasonforLeaving1,
                    EmployerEmail1:EmployerEmail1,
                    fmcsrs_status1:fmcsrs_status1,
                    drug_alcohol_test1:drug_alcohol_test1,

                    Employer2:Employer2,
                    EmployedFrom2:EmployedFrom2,
                    EmployedTo2:EmployedTo2,
                    EmployerStreet2:EmployerStreet2,
                    EmployerCityStateZip2:EmployerCityStateZip2,
                    EmployerPhone2:EmployerPhone2,
                    EmployerSupervisor2:EmployerSupervisor2,
                    EmployerPosition2:EmployerPosition2,
                    EmployerReasonforLeaving1:EmployerReasonforLeaving1,
                    EmployerEmail1:EmployerEmail1,
                    fmcsrs_status1:fmcsrs_status1,
                    drug_alcohol_test1:drug_alcohol_test1,

                    Employer1:Employer1,
                    EmployedFrom1:EmployedFrom1,
                    EmployedTo1:EmployedTo1,
                    EmployerStreet1:EmployerStreet1,
                    EmployerCityStateZip1:EmployerCityStateZip1,
                    EmployerPhone1:EmployerPhone1,
                    EmployerSupervisor1:EmployerSupervisor1,
                    EmployerPosition1:EmployerPosition1,
                    EmployerReasonforLeaving1:EmployerReasonforLeaving1,
                    EmployerEmail1:EmployerEmail1,
                    fmcsrs_status1:fmcsrs_status1,
                    drug_alcohol_test1:drug_alcohol_test1,

                    Employer1:Employer1,
                    EmployedFrom1:EmployedFrom1,
                    EmployedTo1:EmployedTo1,
                    EmployerStreet1:EmployerStreet1,
                    EmployerCityStateZip1:EmployerCityStateZip1,
                    EmployerPhone1:EmployerPhone1,
                    EmployerSupervisor1:EmployerSupervisor1,
                    EmployerPosition1:EmployerPosition1,
                    EmployerReasonforLeaving1:EmployerReasonforLeaving1,
                    EmployerEmail1:EmployerEmail1,
                    fmcsrs_status1:fmcsrs_status1,
                    drug_alcohol_test1:drug_alcohol_test1,
                    :,
                    :,
                    :,
                    :,
                    :,
                    :,
                    :,
                    :,
                    :,
                    :,
                    :,
                    :,
                    :,
                    :,
                },
                cache: false,
                success: function(Result){
                    console.log(Result);
                    if(Result){
                        alert("Currency added successfully.");
                        // $("#plusCurrencyModal").modal("hide");
                    }else{
                        alert("Currency not added successfully.");
                    }
                }
            });
}); 

</script>


</body>
</html>