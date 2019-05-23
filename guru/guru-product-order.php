<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Buy This Product</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="guru-product-buy.php">
                        <input type="hidden" class="form-control" name="user_name" value="<?php echo $_SESSION['username']; ?>">
                        <input type="hidden" class="form-control" name="product_id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" class="form-control" name="prdct_quantity" value="<?php echo $row['product_quantity']; ?>">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Product Name:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_name" value="<?php echo $row['product_name']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Product Price:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_price" value="<?php echo $row['product_price']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Quantity:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="product_quantity" placeholder="Quantity" max="<?php echo $row['product_quantity']; ?>" required>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add_cart" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Buy</a>
                    </form>
            </div>

        </div>
    </div>
</div>