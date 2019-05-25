<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Savings Money</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="admin-savings-edit.php">
                        <div class="col-sm-2">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                        </div>
                        <div class="row form-group">
                            <input type="text" class="form-control" name="username" value="<?php echo $row['user_id']; ?>" readonly>
                            <br>
                            <input type="text" class="form-control" name="code_savings" value="<?php echo $row['code_savings']; ?>" readonly>
                            <br>
                            <input type="text" class="form-control" name="savings_coin" value="<?php echo $row['savings_coin']; ?>" readonly>
                            <hr>
                            <input type="hidden" class="form-control" name="coin" value="<?php echo $row['coin']; ?>" readonly>
                            <hr>
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Status:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="radio" name="status" value="0" <? if ($row['status'] == '0') {
                                                                                echo 'checked';
                                                                            } ?> > Pending
                                <hr>
                                <input type="radio" name="status" value="1" <? if ($row['status'] == '1') {
                                                                                echo 'checked';
                                                                            } ?>/> Paid
                                <hr>
                                <input type="radio" name="status" value="2" <? if ($row['status'] == '2') {
                                                                                echo 'checked';
                                                                            } ?>/> Canceled
                                <hr>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
                    </form>
            </div>
        </div>
    </div>
</div>