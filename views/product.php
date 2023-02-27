<!DOCTYPE html>
<html lang="en">
    <?php
        require_once('head.php');
    ?>
<body>
    <?php
        require_once('header.php');
    ?>
    <!--Product-->
    <div class="product">
        <div class="product-content" style="text-align: center; background-color: rgb(62, 224, 176);">
            <h2 style="opacity: 0.5; margin-bottom: 0;">Based on 3 Standards</h2>
            <p style="margin-bottom: 0;">Class - Luxury - Noble</p>
        </div>
        <div class="product-trend">
            <div class="container">
                <div class="search">
                    <form action="" method="post">
                        <a href="">All Products</a>
                        <select name="" id="">
                            <option value="">---Sort---</option>
                            <option value="">A-Z</option>
                            <option value="">Z-A</option>
                            <option value="">Increase</option>
                            <option value="">Decrease</option>
                        </select>
                        <input type="text" placeholder="Search">
                        <button type="submit" class="btn btn-dark">Search</button>
                    </form>
                </div>
                <div class="row" style="text-align: center;">
                    <div class="col-lg-3">
                        <img src="../public/img/product-detail/Iphone132.jpg" alt="" />
                        <h3><a href="../views/product-detail.php">iPhone 13 Promax (Pink)</a></h3>
                        <p>Price:</p>
                        <p>USD $35.00</p>
                        <button class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
          </ul>
        </nav>
    </div>
    <?php
        require_once('footer.php');
    ?>
    <?php
        require_once('scripts.php');
    ?>
</body>

</html>