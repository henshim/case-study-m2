<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            <a href="index.php?page=customer" style="text-decoration: none">Customer list</a>
        </div>
    </div>
    <div style="margin-left: 800px">
        <form action="index.php?page=customer-search" method="post">
            <input type="text" name="search">
            <input type="submit" value="Search">
        </form>
    </div>
    <div class="card-body">
        <div class="col-12">
            <a href="index.php?page=customer-add">Add Customer</a>
            <table class="table table-border">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Customer id</th>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($customers as $key => $customer): ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td><a href="index.php?page=customer&id=<?php echo $customer['customer_id'] ?>">
                                <?php echo 'HS-' . $customer['customer_id'] ?>
                            </a>
                        </td>
                        <td><?php echo $customer['customerName'] ?></td>
                        <td><?php echo $customer['address'] ?></td>
                        <td><?php echo $customer['phone'] ?></td>
                        <td><?php echo $customer['customer_status'] ?></td>
                        <td>
                            <a href="index.php?page=customer-update&customer_id=<?php echo $customer['customer_id'] ?>"
                               class="btn btn-outline-primary">Update</a>
                            <a href="index.php?page=customer-delete&customer_id=<?php echo $customer['customer_id'] ?>"
                               class="btn btn-danger btn-sm" onclick="return confirm('Are you sure about that ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
