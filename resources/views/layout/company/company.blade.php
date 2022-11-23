<!-- driver modal -->




<div class="container">
    <!-- <h2>Large Modal</h2> -->
    <!-- Button to Open the Modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open modal
        </button> -->







    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="companyModal" role="dialog">
        <div class="modal-dialog custom_modal modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User</h5>
                    <button type="button" class="close" data-dismiss="modal">×</button>

                    </button>
                </div>
                <button href="#addUserModal" data-toggle="modal" data-target="#addUserModal"
                    class="login_btn btn1 add1button" style="vertical-align:middle"><span>Add </span></button>
                <div class="modal-body" style="overflow-y: auto !important;">

                    <table id="editable-file-datatable1"
                        class="table editable-table table-nowrap table-bordered table-edit wp-100 customtable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No</th>
                                <th>Company Name</th>
                                <th>Shipping Address</th>
                                <th>Telephone No</th>
                                <th>Fax No</th>
                                <th>M.C. No</th>
                                <th>US DOT No</th>
                                <th>Mailing Address</th>
                                <th>Factoring Company</th>
                                <th>Bank</th>
                                <th>Company Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tablecom">
                            
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <form action="{{route('download-pdf')}}" method="post" target="__blank">
                        @csrf
                        <button class="btn btn-primary" style="vertical-align:middle"><span>Export</span></button>
                    </form>
                    <!-- <button class="btn btnclose" style="background-color:red;" data-bs-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>
</div>