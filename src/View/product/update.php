<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Update product information
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" action="./index.php?page=update&id=<?php echo $product['product_id']; ?>"
                      enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $product['product_id']; ?>" name="product_id">
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="product_name" value="<?php echo $product['product_name']; ?>"
                               class="form-control">
                        <?php if (isset($errors['product_name'])): ?>
                            <p class="text-danger"><?php echo $errors['product_name']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" value="<?php echo $product['price']; ?>"
                               name="price">
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <input type="text" class="form-control" value="<?php echo $product['status']; ?>" name="status">
                        <?php if (isset($errors['status'])): ?>
                            <p class="text-danger"><?php echo $errors['status'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="img" value="<?php echo $product['img']?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <input type="number" name="category_id" class="form-control" value="<?php echo $product['category_id']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" value="<?php echo $product['description']; ?>"
                               name="description">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a type="button" href="index.php?page=product" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php