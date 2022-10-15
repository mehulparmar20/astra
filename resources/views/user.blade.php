<!-- driver modal -->




<div class="container">
    <!-- <h2>Large Modal</h2> -->
    <!-- Button to Open the Modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open modal
        </button> -->







    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="userModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal">×</button>

                    </button>
                </div>
                <button href="#addUserModal" data-toggle="modal" data-target="#addUserModal"
                    class="login_btn btn1 add1button" style="vertical-align:middle"><span>Add </span></button>
                <div class="modal-body" style="overflow-y: auto !important;">

                    <table id="editable-file-datatable1"
                        class="table editable-table table-nowrap table-bordered table-edit wp-100">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Location</th>
                                <th>Zip</th>
                                <th>Telephone</th>
                                <th>Ext</th>
                                <th>Toll Free</th>
                                <th>Tax</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table1">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btnclose" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>