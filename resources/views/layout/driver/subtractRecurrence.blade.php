<div class="modal  bs-example-modal-lg" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog"
    id="substractRecurrence" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable custom_modal_small2">
        <div class="modal-content custom-modal-content">
            <div class="fixpay-container" style="z-index: 1600"></div>
            <div class="modal-header custom-modal-header">
                <h5 class="modal-title custom-modal-title mt-0" id="myLargeModalLabel">Substract Recurrence</h5>
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body custom-modal-body">
                <div class="container">
                    <table class=" table-responsive other-table" id="otherTable">
                        <thead>
                            <tr>
                                <td>Category <span class="mandatory">*</span><i class="mdi mdi-plus-circle plus"
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
                        <tbody id="TextBoxContainer3">
                            <td width="150">
                                <input class="form-control" name="installment_Category" list="fixpay_cat"
                                    onkeyup="searchFixpay(this.value,'fixpay_cat');" autocomplete="off" />
                                <datalist id="fixpay_cat">
                                </datalist>
                            </td>
                            <td width="150">
                                <input class="form-control" name="installment_Type" list="instatype"
                                    autocomplete="off" />
                            </td>
                            <td width="100">
                                <input name="amount_recurrence" type="text" class="form-control" />
                            </td>
                            <td width="100">
                                <input name="installment_sub" type="text" class="form-control" />
                            </td>
                            <td width="100">
                                <input name="start_No" type="text" class="form-control" />
                            </td>
                            <td width="10">
                                <input name="start_Date" type="date" class="form-control" />
                            </td>
                            <td width="250">
                                <textarea rows="1" cols="20" class="form-control" type="textarea"
                                    name="internal_Note"></textarea>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger"><span aria-hidden="true">&times;</span>
                                </button>
                            </td>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="12" class="tableFooter" style="text-align:left;">
                                    <button id="btnAdd3" type="button" class="btn btn-primary" data-toggle="tooltip"
                                        data-original-title="Add more controls"><i class="mdi mdi-gamepad-down"></i> ADD
                                    </button>
                                </th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
            <div class="modal-footer">
                <label class="text-danger" style="padding-right: 65%"><b>Note :</b>&nbsp; * Fields are mandatory</label>
                <button type="button" class="btn btn-danger waves-effect">
                    <i class='mdi mdi-close'></i> Close
                </button>
                <button type="button" class="btn btn-primary waves-effect waves-light"
                    onclick="recurrencesubstract()"><i class="mdi mdi-shield-lock-outline"></i> Save
                </button>
            </div>
            <datalist id="fixpay_cat">

            </datalist>
            <datalist id="instatype">
                <option value="Weekly">Weekly</option>
                <option value="Monthly"></option>
                <option value="yearly"></option>
                <option value="Quarterly"></option>
            </datalist>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<script>

</script>