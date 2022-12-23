<!------------------------------------------------------------------- driver modal ------------------------------------------------------------------->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="branchOfficeModal">
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Branch Office</h4>
                    <button type="button" class="button-24 branchOfficeClose" data-dismiss="modal">&times;</button>
                </div>

                <div style="margin-top: 15px; margin-left: 15px;">
                <a href="#addDriverModal" class="button-57" data-toggle="modal" ata-target="#addDriverModal"><i class="fa fa-plus" aria-hidden="true"></i><span>Add Office</span></a>

                </div>
                <!-- Modal body -->
                <div class="modal-body" style="overflow-y: auto !important;">
                    <!-- Row -->
                    <div class="row">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                

                                        <div class="table-responsive export-table">
                                            <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100 customtable">

                                                <thead class="thead_th">
                                                    <tr class="tr">
                                                        <th>NO</th>
                                                        <th>Name</th>
                                                        <th>Location</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="officeTable">

                                                </tbody>
                                            </table>
                                        </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <form action="{{route('driver-pdf')}}" method="post" target="__blank">
                        @csrf
                        <button class="button-29" style="vertical-align:middle"><span>Export</span></button>
                    </form>
                    <button type="button" class="button-29 branchOfficeClose" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-------------------------------------------------------------------over driver modal------------------------------------------------------------------->
