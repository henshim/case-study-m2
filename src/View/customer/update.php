<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Update customer information
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" action="./index.php?page=customer-update&id=<?php echo $customer->customer_id ?>">
                    <input type="hidden" value="<?php echo $customer->customer_id ?>" name="customer_id">
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="customerName" value="<?php echo $customer->customerName ?>">
                        <?php if (isset($errors['customerName'])): ?>
                            <p class="text-danger"><?php echo $errors['customerName']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $customer->address ?>">
                        <?php if (isset($errors['address'])): ?>
                            <p class="text-danger"><?php echo $errors['address']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Phone</label>
                        <input type="number" name="phone" value="<?php echo $customer->phone ?>" class="form-control">
                        <?php if (isset($errors['phone'])): ?>
                            <p class="text-danger"><?php echo $errors['phone']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Status</label>
                        <input type="text" value="<?php echo $customer->customer_status; ?>" name="status">
                        <?php if (isset($errors['status'])): ?>
                            <p class="text-danger"><?php echo $errors['status']; ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="index.php?page=customer" class="btn btn-secondary" type="button">Back</a>
                </form>
            </div>
        </div>
    </div>
</div><?php
