<!-- driver modal -->




<div class="container">
    <!-- <h2>Large Modal</h2> -->
    <!-- Button to Open the Modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open modal
        </button> -->







    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="userModal" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">

                
                <div class="modal-header">
                    <h5 class="modal-title">User</h5>
                    <button type="button" class="close" data-dismiss="modal">×</button>

                    </button>
                </div>
                <button href="#addUserModal" data-toggle="modal" data-target="#addUserModal"
                    class="login_btn btn1 add1button" style="vertical-align:middle"><span>Add </span></button>
                <div class="modal-body" style="overflow-y: auto !important;">


                    <div class="card-body">
                        <div class="table-responsive export-table">
                            <div id="file-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="file-datatable_length"><label><select name="file-datatable_length" aria-controls="file-datatable" class="form-select form-select-sm select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 188.05px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-file-datatable_length-81-container"><span class="select2-selection__rendered" id="select2-file-datatable_length-81-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></label></div><div class="dt-buttons btn-group flex-wrap">      <button class="btn btn-primary buttons-copy buttons-html5" tabindex="0" aria-controls="file-datatable" type="button"><span>Copy</span></button> <button class="btn btn-primary buttons-excel buttons-html5" tabindex="0" aria-controls="file-datatable" type="button"><span>Excel</span></button> <button class="btn btn-primary buttons-pdf buttons-html5" tabindex="0" aria-controls="file-datatable" type="button"><span>PDF</span></button> <div class="btn-group"><button class="btn btn-primary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="file-datatable" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button></div> </div></div><div class="col-sm-12 col-md-6"><div id="file-datatable_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="file-datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="file-datatable_info" style="width: 1101px;">
                                <thead>
                                    <tr role="row"><th class="border-bottom-0 sorting" tabindex="0" aria-controls="file-datatable" rowspan="1" colspan="1" style="width: 174px;" aria-label="Name: activate to sort column ascending">Name</th><th class="border-bottom-0 sorting" tabindex="0" aria-controls="file-datatable" rowspan="1" colspan="1" style="width: 267px;" aria-label="Position: activate to sort column ascending">Position</th><th class="border-bottom-0 sorting sorting_desc" tabindex="0" aria-controls="file-datatable" rowspan="1" colspan="1" style="width: 126px;" aria-label="Office: activate to sort column ascending" aria-sort="descending">Office</th><th class="border-bottom-0 sorting" tabindex="0" aria-controls="file-datatable" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Age</th><th class="border-bottom-0 sorting" tabindex="0" aria-controls="file-datatable" rowspan="1" colspan="1" style="width: 122px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="border-bottom-0 sorting" tabindex="0" aria-controls="file-datatable" rowspan="1" colspan="1" style="width: 88px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                </thead>
                                <tbody>
                              
                                    
                                <tr class="odd">
                                        <td class="dtr-control" tabindex="0">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td class="sorting_1">Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr class="even">
                                        <td class="dtr-control" tabindex="0">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td class="sorting_1">Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control" tabindex="0">Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td class="sorting_1">Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr><tr class="even">
                                        <td class="dtr-control">Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td class="sorting_1">Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control">Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td class="sorting_1">Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr><tr class="even">
                                        <td class="dtr-control">Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td class="sorting_1">Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control">Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td class="sorting_1">Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr><tr class="even">
                                        <td class="dtr-control">Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td class="sorting_1">Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control">Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td class="sorting_1">Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr><tr class="even">
                                        <td class="dtr-control">Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td class="sorting_1">Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="file-datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="file-datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="file-datatable_previous"><a href="#" aria-controls="file-datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="file-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file-datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file-datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file-datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file-datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file-datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="file-datatable_next"><a href="#" aria-controls="file-datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>

                    <table id="editable-file-datatable1"
                        class="table editable-table table-nowrap table-bordered table-edit wp-100 customtable">
                        <thead>
                            <tr>
                                <th scope="col" col width="160">ID</th>
                                <th scope="col" col width="160">Email</th>
                                <th scope="col" col width="160">Username</th>
                                <th scope="col" col width="160">First Name</th>
                                <th scope="col" col width="160">Last Name</th>
                                <th scope="col" col width="160">Address</th>
                                <th scope="col" col width="160">Location</th>
                                <th scope="col" col width="160">Zip</th>
                                <th scope="col" col width="160">Telephone</th>
                                <th scope="col" col width="160">Ext</th>
                                <th scope="col" col width="160">Toll Free</th>
                                <th scope="col" col width="160">Tax</th>
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