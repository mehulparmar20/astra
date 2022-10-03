<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <!-- <h2>Modal Example</h2> -->
  <!-- Button to Open the Modal -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button> -->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading1</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Editable Tables</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
										<li class="breadcrumb-item active" aria-current="page">Editable Tables</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="row row-sm">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header border-bottom">
												<h3 class="card-title">Basic Editable Datatable</h3>
											</div>
											<div class="card-body">
												<div class="table-responsive">
													<table class="table editable-table table-nowrap table-bordered table-edit">
														<thead>
															<tr>
																<th>ID</th>
																<th>Name</th>
																<th>Age</th>
																<th>Gender</th>
																<th>Edit</th>
															</tr>
														</thead>
														<tbody>
															<tr data-id="1">
																<td data-field="id">1</td>
																<td data-field="name">David McHenry</td>
																<td data-field="age">24</td>
																<td data-field="gender">Male</td>
																<td style="width: 100px">
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="2">
																<td data-field="id">2</td>
																<td data-field="name">Frank Kirk</td>
																<td data-field="age">22</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
									
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row">
								<div class="row row-sm">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header border-bottom">
												<h3 class="card-title">Responsive Editable Datatable</h3>
											</div>
											<div class="card-body">
												<div class="table-responsive">
													<table id="editable-responsive-table" class="table editable-table table-nowrap table-bordered table-edit wp-100">
														<thead>
															<tr>
																<th>ID</th>
																<th>Name</th>
																<th>Age</th>
																<th>Gender</th>
																<th>Edit</th>
															</tr>
														</thead>
														<tbody>
															<tr data-id="1">
																<td data-field="id">1</td>
																<td data-field="name">David McHenry</td>
																<td data-field="age">24</td>
																<td data-field="gender">Male</td>
																<td style="width: 100px">
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="2">
																<td data-field="id">2</td>
																<td data-field="name">Frank Kirk</td>
																<td data-field="age">22</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="3">
																<td data-field="id">3</td>
																<td data-field="name">Marie Rose</td>
																<td data-field="age">21</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="4">
																<td data-field="id">4</td>
																<td data-field="name">Tyler Durden</td>
																<td data-field="age">25</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="5">
																<td data-field="id">5</td>
																<td data-field="name">Skyler White</td>
																<td data-field="age">27</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="6">
																<td data-field="id">6</td>
																<td data-field="name">Marie Pam</td>
																<td data-field="age">27</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="7">
																<td data-field="id">7</td>
																<td data-field="name">Chris Morris</td>
																<td data-field="age">29</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="8">
																<td data-field="id">8</td>
																<td data-field="name">Sam Smith</td>
																<td data-field="age">23</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="9">
																<td data-field="id">9</td>
																<td data-field="name">Catelyn Stark</td>
																<td data-field="age">28</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="10">
																<td data-field="id">10</td>
																<td data-field="name">Christopher Ron</td>
																<td data-field="age">26</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
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
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>
