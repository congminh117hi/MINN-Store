<!DOCTYPE html>
<html lang="en">
    <?php
        require_once('head.php');
    ?>
<body>
    <?php 
        require_once('./header.php');
    ?>
    <!--Cart-page-->
    <div class="cart-body">
        <h1>Cart</h1>
        <div class="cart-main">
            <div class="cart-column-1">
                <ul class="cart-header">
                    <li class="product">Product</li>
                    <li class="price">Price</li>
                    <li class="quantity">Quantity</li>
                    <li class="subtotal">Subtotal</li>

                </ul>
                <div class="cart-infor">
                    <div class="item-list-1">
                        <img class="iphone-13" src="https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png" alt="">
                        <p class="newest">Iphone 13 Pro Max phiên bản mới nhất</p>
                        <p class="thousand">$27.00</p>
                        <p class="number">1</p>
                        <p class="all">$24.07</p>
                    </div>

                    <div class="item-list-1">
                        <img class="iphone-13" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-duong-new-2-600x600.jpg" alt="">
                        <p class="newest">Iphone 12 Pro Max phiên bản mới nhất</p>
                        <p class="thousand">$19.09</p>
                        <p class="number">1</p>
                        <p class="all">$12.07</p>
                    </div>
                    <div class="item-list-1">
                        <img class="iphone-13" src="https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-tim-200x200.jpg" alt="">
                        <p class="newest">Iphone 11 Pro Max phiên bản mới nhất</p>
                        <p class="thousand">$10.00</p>
                        <p class="number">1</p>
                        <p class="all">$18.56</p>
                    </div>
                    <div class="item-list-1">
                        <img class="iphone-13" src="https://24hstore.vn/images/products/2020/04/19/large/iphone-x-grey_1587275960_1.jpg" alt="">
                        <p class="newest">Iphone 10 Pro Max phiên bản mới nhất</p>
                        <p class="thousand">$10.354</p>
                        <p class="number">1</p>
                        <p class="all">$12.80</p>
                    </div>

                </div>
                <div class="coupon">
                    <p>Coupon :</p>
                    <input class="coupon-input" type="text" placeholder="Coupon code">
                    <a href="./cart.html">
                        <button class="apply-counpon">
                            Apply coupon
                        </button>
                    </a>
                    <button class="update-cart">
                        Update cart
                    </button>
                </div>

            </div>
            <div class="cart-column-2">
                <h2>CART TOTALS</h2>
                <div class="cart-sub">
                    <p style="padding-right:20px">Subtotal</p>
                    <p>$5500.00</p>
                </div>
                <div class="cart-end">
                    <p style="padding-right: 40px;font-weight: 600;padding-top: 6px;">Total</p>
                    <p style="font-weight:600;color: rgb(131, 131, 131);font-size: 1.3rem;">$5500.00</p>
                </div>
                <a href="./cart.html">
                    <button class="cart-button">
                        Procced to checkout
                    </button>
                </a>
            </div>
        </div>
    </div>
    <?php
        require_once('./footer.php');
    ?>
    <?php
        require_once('scripts.php');
    ?>
</body>
</html>