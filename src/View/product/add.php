<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Add product
        </div>
        <div class="card-body">
            <div class="col-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="">Product Name</label>
                        <input type="text" name="product_name">
                    </div>
                    <div class="mb-3">
                        <label for="">Product Price</label>
                        <input type="text" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="">Product Status</label>
                        <select name="status" id="">
                            <option value="In stock">In Stock</option>
                            <option value="Out of stock">Out of stock</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="img">
                    </div>
                    <div class=mb-3>
                    <label for="">Category</label>
                        <select name="category_id" id="">
                            <option value="2">YuGiOh</option>
                            <option value="1">Cardfight Vanguard</option>
                        </select>
<!--                    <input type="number" name='category_id'>-->
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="index.php?page=product" class="btn btn-secondary" type="button">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
