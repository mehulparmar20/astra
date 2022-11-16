<div class="container">
    <!-- The Modal -->
    <div class="modal fade" data-backdrop="static" id="addRecurrence">
        <div class="modal-dialog modal-dialog-scrollable custom_modal">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Driver</h4>
                    <button type="button" class="close " data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <!-- Row -->
                    <div class="container">
                        <table class=" table-responsive other-table" id="otherTable">
                            <thead>
                                <tr>
                                    <td>Fix Pay Category <span class="mandatory">*</span><i class="mdi mdi-plus-circle plus"
                                            title="Add Fix Pay Category" id="Fix_Pay_Category"></i></td>
                                    <td>Installment Type <span class="mandatory">*</span></td>
                                    <td>Amount <span class="mandatory">*</span></td>
                                    <td>Installment <span class="mandatory">*</span></td>
                                    <td>start# <span class="mandatory">*</span></td>
                                    <td>start Date <span class="mandatory">*</span></td>
                                    <td>Internal Note <span class="mandatory">*</span></td>
                                    <td>Delete</td>
                                </tr>
                            </thead>
                            <tbody id="TextBoxContainer2">
                                <td width="150">
                                    <input class="form-control" name="installmentCategory" list="fixpaycat"
                                        onkeyup="searchFixpay(this.value,'fixpaycat');" autocomplete="off" />
                                    <datalist id="fixpaycat">

                                    </datalist>
                                </td>
                                <td width="150">
                                    <input class="form-control" name="installmentType" list="instatype1"
                                        autocomplete="off" />
                                </td>
                                <td width="100">
                                    <input name="amount" type="text" class="form-control" />
                                </td>
                                <td width="100">
                                    <input name="installment" type="text" class="form-control" />
                                </td>
                                <td width="100">
                                    <input name="startNo" type="text" class="form-control" />
                                </td>
                                <td width="10">
                                    <input name="startDate" type="date" class="form-control" />
                                </td>
                                <td width="250">
                                    <textarea rows="1" cols="20" class="form-control" type="textarea"
                                        name="internalNote"></textarea>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger"><span aria-hidden="true">&times;</span>
                                    </button>
                                </td>
                            <tfoot>
                                <tr>
                                    <th colspan="12" class="tableFooter" style="text-align:left;">
                                        <button id="btnAdd2" type="button" class="btn btn-primary" data-toggle="tooltip"
                                            data-original-title="Add more controls"><i class="mdi mdi-gamepad-down"></i> ADD
                                        </button>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                    <!-- End Row -->
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    
                    <!-- <button type="button" class="btn btn-secondary editModalCloseButton"
                        data-dismiss="modal">Close</button> -->
                        <label class="text-danger" style="padding-right: 65%"><b>Note :</b>&nbsp; * Fields are mandatory</label>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
                    <i class='mdi mdi-close'></i> Close  </button>
                <button type="button" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-shield-lock-outline"></i> Save </button>
                </div>

                <datalist id="fixpaycat">

                </datalist>
                <datalist id="instatype1">
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly"></option>
                    <option value="yearly"></option>
                    <option value="Quarterly"></option>
                </datalist>

            </div>
        </div>
    </div>
</div>


<script>

</script>