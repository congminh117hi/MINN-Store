<!DOCTYPE html>
<html lang="en">
<?php
    require_once('head.php');
?>
<body>
    <!--Index-->
    <div class="index"> 
    <?php
        require_once('header.php');
    ?>
        <!--slide-->
        <div class="slide">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../public/img/home/slider.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Luxury Phones</h5>
                            <p>One of the most luxury Phones brand from Apple.Inc</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../public/img/home/banner1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Expensive Phones</h5>
                            <p>One of the most expensive Watches brand from Apple.Inc</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../public/img/home/banner2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Fashionista Phones</h5>
                            <p>One of the most fashionista Watches brand from Apple.Inc</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!--introduce-->
        <div class="intro">
            <div class="intro-1" style="text-align: center;">
                <ul style="list-style: none;">
                    <li>
                        <h2 style="margin-bottom: 0;">Minn Store</h2>
                    </li>
                    <li>
                        <p style="margin-bottom: 0;">Welcome to us , here will bring you new and best quality products!</p>
                    </li>
                    
                </ul>
            </div>
            <div class="intro-2" >
                <h2 style="padding-left: 35px;">Styles</h2>
                <div class="row">
                    <div class="col-lg-3"><img src="../public/img/product-detail/Iphone131.jpg" alt=""></div>
                    <div class="col-lg-3"><img src="../public/img/product-detail/Iphone132.jpg" alt=""></div>
                    <div class="col-lg-3"><img src="../public/img/product-detail/Iphone133.jpg" alt=""></div>
                    <div class="col-lg-3"><img src="../public/img/product-detail/Iphone134.jpg" alt=""></div>
                </div>
            </div>
        </div>
        <!--Product-->
        <div class="product">
            <div class="product-content" style="text-align: center; background-color: #ffe4b5;">
                <h2 style="opacity: 0.5; margin-bottom: 0;">Based on 3 Standards</h2>
                <p style="margin-bottom: 0;">Class - Luxury - Noble</p>
            </div>
            <div class="product-trend">
                <h2 style="text-align: center;">New-Product</h2>
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
                            <p>USD $56.08</p>
                            <button class="btn btn-success">Add to Cart</button>
                        </div>
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col-lg-3">
                            <img src="../public/img/product-detail/Iphone134.jpg" alt="" />
                            <h3><a href="../views/product-detail.php">iPhone 13 Promax (Black)</a></h3>
                            <p>Price:</p>
                            <p>USD $56.08</p>
                            <button class="btn btn-success">Add to Cart</button>
                        </div>
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col-lg-3">
                            <img src="../public/img/product-detail/cart1.jpg" alt="" />
                            <h3><a href="../views/product-detail.php">iPhone 13 Promax (Sliver)</a></h3>
                            <p>Price:</p>
                            <p>USD $56.08</p>
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
    </div>
    <?php
        require_once('scripts.php');
    ?>
</body>

</html>