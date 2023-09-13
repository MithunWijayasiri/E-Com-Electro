<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Home</title>
    <!-- import css -->
    <link rel="stylesheet" href="style.css" />
    <!-- box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo"><i class="bx bx-laptop"></i>Electronic Store</a>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#new">New Arrival</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#reviews">About</a></li>
            <!-- <li><a href="#home">Login</a></li>
                <li><a href="#home">Cart</a></li> -->
        </ul>

        <div class="header-icons">
            <i class="bx bx-menu" id="menu-icon"></i>
            <i class="bx bx-search" id="search-icon"></i>
            <i class="bx bx-cart-alt" id="cart-icon"></i>
            <i><a href="login.php" class="bx bx-user" id="user-icon"></a></i>
        </div>

        <!-- search box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search..." />
        </div>



        <!-- cart -->
        <!-- box1 -->
        <div class="cart">
            <div class="box">
                <img src="img2/lap1.png" alt="" />
                <div class="text">
                    <h3>Laptop</h3>
                    <span>$30</span>
                    <span> x 1</span>
                </div>
                <i class="bx bxs-trash-alt"></i>
            </div>

            <!-- box2 -->
            <div class="box">
                <img src="img2/phone1.png" alt="" />
                <div class="text">
                    <h3>Phone</h3>
                    <span>$30</span>
                    <span> x 1</span>
                </div>
                <i class="bx bxs-trash-alt"></i>
            </div>

            <h2>Total: $60</h2>
            <a href="#" class="btn">Checkout</a>
        </div>

        <!-- Login /////////// -->
    </header>

    <!-- Home Page -->

    <section class="home" id="home">
        <div class="home-text">
            <span>Welcome</span>
            <h1>Sri Lankan Largest <br />Electronic Store</h1>
            <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="home-img">
            <img src="img2/bg2.jpg" alt="" />
        </div>
    </section>

    <!-- New Arrival Section -->
    <section class="new" id="new">
        <div class="heading">
            <h1>New <span>Arrival</span></h1>
        </div>
        <div class="new-group">
            <div class="new-box">
                <img class="new-img" src="img2/lap1.png" alt="New Arrival">
                <h1>Laptop</h1>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>$50</p>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="new-box">
                <img class="new-img" src="img2/lap3.png" alt="New Arrival">
                <h1>Laptop</h1>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>$50</p>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="new-box">
                <img class="new-img" src="img2/phone1.png" alt="New Arrival">
                <h1>Phone</h1>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>$75</p>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="new-box">
                <img class="new-img" src="img2/phone2.png" alt="New Arrival">
                <h1>Phone</h1>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>$55</p>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="new-box">
                <img class="new-img" src="img2/tv2.png" alt="New Arrival">
                <h1>TV</h1>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>$250</p>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="new-box">
                <img class="new-img" src="img2/tv1.png" alt="New Arrival">
                <h1>TV</h1>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>$30</p>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="new-box">
                <img class="new-img" src="img2/camera1.png" alt="New Arrival">
                <h1>Camera</h1>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>$100</p>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="new-box">
                <img class="new-img" src="img2/camera2.png" alt="New Arrival">
                <h1>Camera</h1>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>$50</p>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
    </section>

    <!-- Product -->
    <section class="product" id="products">
        <div class="heading">
            <h1><span>Available Products</span></h1>
        </div>
        <div class="new-group">
            <div class="new-box">
                <img class="new-imgg" src="img2/phone.png" alt="New Arrival">
                <h1>Phones</h1>
                <p>Starting $200</p>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="new-box">
                <img class="new-imgg" src="img2/dell.png" alt="New Arrival">
                <h1>Laptops</h1>
                <p>Starting $500</p>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="new-box">
                <img class="new-imgg" src="img2/tv.png" alt="New Arrival">
                <h1>TVs</h1>
                <p>Starting $800</p>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="new-box">
                <img class="new-imgg" src="img2/camera.png" alt="New Arrival">
                <h1>Cameras</h1>
                <p>Starting $150</p>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <div class="footer-box">
            <h2>About Us</h2>
            <p>Electronic store is one of the Sri Lanka's leading e-commerce platform that gives you access to the best products and brands within your reach. With a wide range of categories available on our online shopping site.</p>

            <div class="social">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-tiktok'></i></a>
            </div>
        </div>

        <div class="footer-box">
            <h3>Support</h3>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Return Policy</a></li>
        </div>

        <div class="footer-box">
            <h3>Our Branches</h3>
            <li><a href="#">Colombo</a></li>
            <li><a href="#">Negombo</a></li>
            <li><a href="#">Galle</a></li>
        </div>

        <div class="footer-box">
            <h3>Payment Methods</h3>
            <div class="payment">
                <!-- <img src="img/payapl.png" alt=""> -->
                <img src="img2/visa.png" alt="">
                <img src="img2/mm.png" alt="">
            </div>
        </div>
    </section>

    <!-- copyright text -->
    <div class="copyright">
        <p>&#169; 2022 Mithun Wijayasiri. All Rights Reserved.</p>
    </div>

    <!-- link javascript -->
    <script src="main.js"></script>
</body>

</html>