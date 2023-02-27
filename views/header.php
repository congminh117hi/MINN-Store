<!DOCTYPE html>
<html lang="en">
    <?php
        require_once('head.php');
    ?>
<body> 
    <!--bar-->
    <div class="bar">
        <ul>
            <li style="padding-left: 20rem">Gmail: minn@gmail.com</li>
            <li style="padding-left: 20rem">Phone: 0123456789</li>
            <li style="padding-left: 20rem">Address: Ha Noi City</li>
            <li style="padding-left: 20rem"><button>X</button></li>
        </ul>
    </div>
    <!--Nav Bar-->
    <div class="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <h2><a href="./home.php">minn</a></h2>
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="./home.php">Home <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./product.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./event.php">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact</a>
                        </li>
                    </ul>
                    <div class="icon">
                      <?php  
                      if(!isset($_SESSION['login']) <> 1){
                           echo '
                           <p>hello:'.$_SESSION['username'].'</p><a href="sign-out.php">sign-out</a>
                           ';
                       }
                       else{
                                echo ' <a href="./sign-in.php">
                            <i class="fa fa-user" style="font-size: 24px"></i>
                        </a>';
                       } ?>
                        <a href="#">
                            <div class="cart-father">
                                <i class=" supermarket fa fa-shopping-cart"> </i>
                                <span class="cart-father notice">8</span>
                                <!--Phần cart hover-->
                                <div class="list">
                                    <div class="total">
                                        <div class="number">
                                            <p>8 items</p>
                                        </div>
                                        <div class="money">
                                            <p class="subototal" style="margin : 0">Cart subtotal</p>
                                            <p class="dola">$400.00</p>
                                        </div>
                                    </div>
                                    <div class="checkout">
                                        <a href="./cart.php">
                                            <button class="button-shopping">Go to Checkout</button>
                                        </a>
                                        <a href="./home.php" class="link-shopping">Go to Shopping Cart</a>
                                    </div>
                                    <div class="items-list">
                                        <div class="number_one">
                                            <img class="iphone13" src="https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png" alt="">
                                            <div class="details">
                                                <h1>Iphone13 Pro Max</h1>
                                                <p>Price : $2.000</p>
                                                <p class="brand">Brand : Apple company</p>
                                            </div>
                                        </div>
                                        <div class="number_one">
                                            <img class="iphone13" src="https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png" alt="">
                                            <div class="details">
                                                <h1>Iphone13 Pro Max</h1>
                                                <p>Price : $2.195</p>
                                                <p>Brand : Apple company</p>
                                            </div>
                                        </div>
                                        <div class="number_one">
                                            <img class="iphone13" src="https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png" alt="">
                                            <div class="details">
                                                <h1>Iphone13 Pro Max</h1>
                                                <p>Price : $2.195</p>
                                                <p>Brand : Apple company</p>
                                            </div>
                                        </div>
                                        <div class="number_one">
                                            <img class="iphone13" src="https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png" alt="">
                                            <div class="details">
                                                <h1>Iphone13 Pro Max</h1>
                                                <p>Price : $2.195</p>
                                                <p>Brand : Apple company</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                </a>
            </div>
    </div>
    <?php
        require_once('scripts.php');
    ?>
</body>

</html>