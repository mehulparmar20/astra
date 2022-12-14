<?php 
	$userdata=Auth::user();
	$insertUser=$userdata->privilege['insertUser'];
    // $updateUser=$userdata->privilege['updateUser'];
    $deleteUser=$userdata->privilege['deleteUser'];
    $importUser=$userdata->privilege['importUser'];
    $exportUser=$userdata->privilege['exportUser'];
 ?>
<!-- driver modal -->
<div class="container">

    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="userModal" role="dialog">
        <div class="modal-dialog custom_modal modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User</h5>
                    <button type="button" class="button-24" data-dismiss="modal">×</button>

                    </button>
                </div>
                <div style="margin-top: 15px; margin-left: 15px;">
 
 
                    <a href="#addUserModal" class="button-57" data-toggle="modal" data-target="#addUserModal"><i class="fa fa-plus" aria-hidden="true"></i><span>Add User</span></a>
                </div>
                <div class="modal-body" style="overflow-y: auto !important;margin-left: -16px;">

 

 

 
                        @if($insertUser== 1)
                            <a href="#addUserModal" class="button-57" data-toggle="modal" data-target="#addUserModal"><i class="fa fa-plus" aria-hidden="true"></i><span>Add User</span></a>
                        @endif 
                        <!-- @if($deleteUser==1)
                            <a href="#" class="button-57" data-toggle="modal" data-target="#"><i class="fa fa-plus" aria-hidden="true"></i><span>Restore</span></a>
                        @endif  -->
                    <!-- @if($importUser==1)
                            <a href="#" class="button-57" data-toggle="modal" data-target="#"><i class="fa fa-plus" aria-hidden="true"></i><span>Import</span></a>
                        @endif  -->
                    
                </div>
                <div class="modal-body" style="overflow-y: auto !important;margin-left: -16px;">

 
 
                    <table id="table_pagination" class="table">
                        <thead class="thead_th">
                            <tr class="tr">
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
                    <form action="{{route('download-pdf')}}" method="post" target="__blank">
                        @csrf
                        @if($exportUser == 1)
                            <button class="button-29" style="vertical-align:middle"><span>Export</span></button>
                        @endif
                    </form>
                    <button type="button" class="button-29" data-dismiss="modal">Close</button>
                    <!-- <button class="btn btnclose" style="background-color:red;" data-bs-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>
</div>