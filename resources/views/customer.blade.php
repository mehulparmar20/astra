<!------------------------------------------------------------------- customer modal ------------------------------------------------------------------->
<div class="container">
    <!-- <h2>Large Modal</h2> -->
    <!-- Button to Open the Modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open modal
        </button> -->




    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="customerModal" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer</h5>
                    <button type="button" class="close" data-dismiss="modal">×</button>

                    <!-- </button> -->
                </div>
                <button href="#addCustomerModal" data-toggle="modal" data-target="#Customer"
                    class="login_btn btn1 add1button" style="vertical-align:middle"><span>Add </span></button>
                <div class="modal-body" style="overflow-y: auto !important;">

                    <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100">
                        
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Customer Name</th>
                                <th>Location</th>
                                <th>Zip</th>
                                <th>Primary Contacte</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="customerTable">

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