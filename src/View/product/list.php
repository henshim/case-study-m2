<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            <a href="index.php?page=product" style="text-decoration: none">Product list
            </a>
        </div>
        <div class="card-body">
            <div class="col-12">
                <a href="index.php?page=add-product">Add product</a>

                <table class="table table-border">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product status</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $key => $product) : ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><a href="index.php?page=product&id=<?php echo $product['product_id'] ?>">
                                    <?php echo 'HS-' . $product['product_id'] ?>
                                </a>
                            </td>
                            <td><?php echo $product['product_name'] ?></td>
                            <td><?php echo $product['price'] ?></td>
                            <td><?php echo $product['status'] ?></td>
                            <td><img src="<?php echo $product['img'] ?>" alt="" width="100px" height="90px"></td>
                            <td><?php echo $product['category_name'] ?></td>
                            <td><?php echo $product['description'] ?></td>
                            <td>
                                <a href="./index.php?page=update&id=<?php echo $product['product_id']; ?>" class="btn btn-primary btn-sm">Update</a>
                                <a href="./index.php?page=delete&id=<?php echo $product['product_id']; ?>"
                                   class="btn btn-danger btn-sm" onclick="return confirm('Are you sure about that?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
