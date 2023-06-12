<?php

session_start();
require_once 'connection.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>E-Tech</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="products.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
    </head> 
    <body>
        <nav>
            <div class="logo"><img src="images/logo/logo1.png"></div>
            <label for="btn" class="icon">
                <span class="fa fa-bars"></span>
            </label>
            <input type="checkbox" id="btn">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>
                    <label for="btn1" class="show">Products +</label>
                    <a href="shop.html">Products <span class="fa fa-plus"></span></a>
                    <input type="checkbox" id="btn1">
                    <ul>
                        <li><a href="shop.html#phones">Phones</a></li>
                        <li><a href="shop.html#lap">Laptops</a></li>
                        <li><a href="shoptv.html#tele">Tvs</a></li>
                        <li><a href="shoptv.html#monitor">Monitors</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="signup.html"><i class="fa-regular fa-user"></i></a></li>
                    <li><a href="#"><i class='bx bx-shopping-bag'></i><span id="cart-item" 0></span></a></li>
                </ul>
        </nav>
        <section id="hero">
            <h2>STAY <span>CONNECTED</span></h2>
            <P>We deliver only the best.</P>
            <a href="shop.html" style="--clr:#34f5c5"><i></i><span>Shop Now</span></a>
        </section>
        <section id="services">
            <div class="service-box">
                <img src="images/services/f1.png" alt="">
                <h6>Shop Online</h6>
            </div>
            <div class="service-box">
                <img src="images/services/f2.png" alt="">
                <h6>Quick Delivery</h6>
            </div>
            <div class="service-box">
                <img src="images/services/f3.png" alt="">
                <h6>Save Money</h6>
            </div>
            <div class="service-box">
                <img src="images/services/f4.png" alt="">
                <h6>Sales</h6>
            </div>
            <div class="service-box">
                <img src="images/services/f5.png" alt="">
                <h6>Customer Service</h6>
            </div>
        </section>
        <section id="categories">
            <div class="small-cont">
                <div class="row">
                    <div class="col-3">
                        <a href="shop.html#phones"><img src="images/categories/cat1.jpg"></a>
                    </div>
                    <div class="col-3">
                        <a href="shop.html#lap"><img src="images/categories/cat4.jpg"></a>
                    </div>
                    <div class="col-3">
                        <a href="shoptv.html#tele"><img src="images/categories/cat3.jpg"></a>
                    </div>
                    <div class="col-3">
                        <a href="shoptv.html#monitor"><img src="images/categories/cat5.jpg"></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="new-arrival">
            <h2><span>New Arrival</span></h2>
            <p>Lastest technology of 2023</p>
            <main>   
        <?php
        $sql = "SELECT * FROM product";
        $all_product = $conn->query($sql);
      
      
        if($all_product->num_rows > 0){
		while($row = $all_product->fetch_array()){
            ?>
             <div class="card">
                    <div class="image">
                        <img src="<?php echo $row["product_image"]; ?>">
                    </div>
                    <div class="caption">
                        <p class="rate">
                         <i class="fas fa-star"></i> 
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>  
                        </p>
                    <p class="product_name"><?php echo $row["product_name"]; ?></p> 
                    <p class="price"><b>$<?php echo $row["price"]; ?></b></p>
                    <p class="discount"><b><del>$<?php echo $row["discount"]; ?></del></b></p>
                    </div>
                    <button class="add">Add to Cart</button>
                </div>
                <?php
                }
            }
                ?>
            </main>
        </section>
        <div class="exclu-offer">
            <div class="small-cont">
                <div class="row">
                    <div class="col2">
                        <img src="images/lap8i.png" class="offer-img">  
                    </div>
                    <div class="col2">
                        <p>Exclusively Available here at E-tech</p>
                        <h1>Alienware M15 Gaming laptop</h1>
                        <small>The M15 alienware gaming laptop will boost your gaming experience having an i7 core accompany by 8GB of RAM. Without forgetting the NVDIA GTX 1060 graphhic card to give you the best colors.</small>
                        <br>
                        <a href="#" class="btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        <section id="brands">
            <div class="small-cont">
                <div class="row">
                    <div class="col3">
                        <img src="images/logo/logo2.png">
                    </div>
                    <div class="col3">
                        <img src="images/logo/logo3.png">
                    </div>
                    <div class="col3">
                        <img src="images/logo/logo4.png">
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-cont">
                <div class="col-1">
                    <img src="images/logo/logo1.png">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eaque quam, earum nesciunt perspiciatis quas
                        voluptatibus magnam aperiam ab facilis corrupti sequi cum ducimus, nobis molestias aliquid! Doloribus, est enim!
                    </p>
                    <h3>Follow us</h3>
                    <ul class="socials">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>
                </div>
                <div class="contact">
                    <h2>Contact Us</h2>
                    <ul class="info">
                        <li>
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            <span>Royal Road, Curepipe<br> Mauritius</span>
                        </li>
                        <li>
                            <span><i class="fa-brands fa-whatsapp"></i></span>
                            <p><a href="tel:+23057600052">+23057600052</a></p>
                        </li>
                        <li>
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <p><a href="mailto:raneeshboolkah@gmail.com">raneeshboolkah@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
                </div>   
        </footer>
        <div class="copyright">
            <p> Copyright &copy;E-tech 2023. All Rights Reserved</p>
        </div>
    </body>
    </html>
    