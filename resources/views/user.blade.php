<!-- user modal -->


	<!-- Modal -->
    <!-- <div class="container">
    <div class="modal fade" data-backdrop="static"  id="userModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >User</h5>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <button href="#addUserModal" data-toggle="modal" data-target="#addUserModal"
                class="login_btn btn1 add1button" style="vertical-align:middle"><span>Add </span></button>
                            </div>
                        </div>
                    </div>
                <div class="modal-body" style=" width: 400px;">
                
                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100 customtable">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">ID</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Username</th>
                                <th class="border-bottom-0">First Name</th>
                                <th class="border-bottom-0">Last Name</th>
                                <th class="border-bottom-0">Address</th>
                                <th class="border-bottom-0">Location</th>
                                <th class="border-bottom-0">Zip</th>
                                <th class="border-bottom-0">Telephone</th>
                                <th class="border-bottom-0">Ext</th>
                                <th class="border-bottom-0">Toll Free</th>
                                <th class="border-bottom-0">Tax</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table1" style="overflow-y: auto;">

                        </tbody>
                    </table>
                                      
                                    
                                
                            
                        </div>
                   
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-secondary btnclose" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="modal fade" data-backdrop="static" id="userModal" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">

                
                <div class="modal-header">
                    <h5 class="modal-title">User</h5>
                    <button type="button" class="close" data-dismiss="modal">×</button>

                    </button>
                </div>
                
                <div class="modal-body" style="overflow-y: auto !important;">

                    <button href="#addUserModal" data-toggle="modal" data-target="#addUserModal"
                    class="login_btn btn1 add1button" style="vertical-align:middle"><span>Add </span></button>
                   

                    <table id="file-datatable"
                        class="table table-bordered text-nowrap key-buttons border-bottom  w-100 customtable">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">ID</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Username</th>
                                <th class="border-bottom-0">First Name</th>
                                <th class="border-bottom-0">Last Name</th>
                                <th class="border-bottom-0">Address</th>
                                <th class="border-bottom-0">Location</th>
                                <th class="border-bottom-0">Zip</th>
                                <th class="border-bottom-0">Telephone</th>
                                <th class="border-bottom-0">Ext</th>
                                <th class="border-bottom-0">Toll Free</th>
                                <th class="border-bottom-0">Tax</th>
                                <th class="border-bottom-0">Action</th>
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