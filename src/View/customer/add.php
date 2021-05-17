<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Add customer
        </div>
        <div class="card-body">
            <div class="col-12">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="customer_name">
                        <?php if (isset($errors['customer_name'])): ?>
                            <p><?php echo $errors['customer_name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="">Address</label>
                        <input type="text" name="address">
                        <?php if (isset($errors['address'])): ?>
                            <p><?php echo $errors['address'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="">Phone</label>
                        <input type="number" name="phone">
                        <?php if (isset($errors['phone'])): ?>
                            <p><?php echo $errors['phone'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label>
                        <select name="status" id="">
                            <option value="received">Received</option>
                            <option value="not received">Not received</option>
                        </select>
                        <?php if (isset($errors['status'])): ?>
                            <p><?php echo $errors['status'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="index.php?page=customer" class="btn btn-secondary" type="button">Back</a>
                </form>
            </div>
        </div>
    </div>
</div><?php
