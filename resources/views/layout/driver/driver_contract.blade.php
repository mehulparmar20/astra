<!------------------------------------------------------------------- Contract Category modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="contractCategoryModal">
        <div class="modal-dialog modal-dialog-scrollable custom_modal_small">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Contract Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Header -->
                <!-- <div class="modal-header">
                    <h4 class="modal-title">Driver Contract</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> -->

                <!-- Modal body -->
                <div class="modal-body" style="overflow-y: auto !important;">
                    <!-- Row-->
							<div class="row ">
								<div class="col-md-12">
									<div class="card">
                                        <div class="card-body">
                                            <a href="#addContractCategory" class="btn btn-primary" data-toggle="modal"
                                                data-target="#addContractCategory">Add Contract Category</a>
										</div>
										<div class="card-body">
                                                
                                                <div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
                                                    
                                                </div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row-->

						</div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <!-- <form action="{{route('driver-pdf')}}" method="post" target="__blank">
                        @csrf
                        <button class="btn btn-primary" style="vertical-align:middle"><span>Export</span></button>
                    </form> -->
                    <button type="button" class="button-29" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>