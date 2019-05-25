<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Transaction</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="admin-transaction-edit.php">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                        <input type="text" class="form-control" name="user_id" value="<?php echo $row['user_id']; ?>">
                        <input type="hidden" class="form-control" name="product_id" value="<?php echo $row['product_id']; ?>">
                        <input type="hidden" class="form-control" name="quantity" value="<?php echo $row['quantity']; ?>">
                        <input type="hidden" class="form-control" name="poin" value="<?php echo $row['poin']; ?>">
                        <input type="hidden" class="form-control" name="product_quantity" value="<?php echo $row['product_quantity']; ?>">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Status:</label>
                            </div>
                            <div class="col-sm-10">
                                <?php
                                if ($row['status'] != '2') {
                                    ?>
                                    <input type="radio" name="status" value="0"
                                    <? if ($row['status'] == '0') {echo 'checked';} ?> > Pending
                                    <hr>
                                    <input type="radio" name="status" value="1" 
                                    <? if ($row['status'] == '1') {echo 'checked';} ?>/> Paid
                                    <hr>
                                    <input type="radio" name="status" value="2" 
                                    <? if ($row['status'] == '2') {echo 'checked';} ?>/> Canceled
                                    <hr>
                                    <?php
                                } else {
                                    ?>
                                    <input type="radio" name="status" value="2" 
                                    <? if ($row['status'] == '2') {echo 'checked';} ?> readonly/> Canceled
                                    <hr>
                                    <?php
                                } 
                                ?>
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