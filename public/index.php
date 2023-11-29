<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal - Home Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <?php 
include_once('C:\xampp\htdocs\epasale\public\partials\header.php');

    ?>

    <!-- Category Start -->
    <div class="container">
        <nav>
            <ul>
                <li><a href="" class="category">Chicken</a>
                    <!--Fridt Tier Drop Down-->
                    <ul>
                        <li><a href="">Chicken Momo</a></li>
                        <li><a href="">Chicken Chowmeen</a></li>
                        <li><a href="">Chicken Burger</a></li>
                        <li><a href="">Chicken Sandwich</a></li>
                        <li><a href="">Chicken Roll</a></li>
                        <li><a href="">Pizza</a></li>
                        <li><a href="">Biryani</a></li>
                    </ul>
                <li><a href="" class="category">Beef</a>

                    <!--First Tier Drop Down-->
                    <ul>
                        <li><a href="">Chowmeen</a> </li>
                        <li><a href="">Burger</a> </li>
                        <li><a href="">Momo</a> </li>
                        <li><a href="">Sandwich</a> </li>
                        <li><a href="">Roll</a> </li>
                        <li><a href="">Pizza</a></li>
                    </ul>

                <li><a href="" class="category">Veg</a>
                    <!--First Tier Drop Down-->
                    <ul>
                        <li><a href="">Veg Momo</a> </li>
                        <li><a href="">Veg Chowmeen</a> </li>
                        <li><a href="">Veg Burger</a> </li>
                        <li><a href="">Vegetable Sandwich</a> </li>
                        <li><a href="">Veg Roll</a> </li>
                        <li><a href="">Pizza</a></li>
                        <li><a href="">Samosa</a></li>
                    </ul>

                <li><a href="" class="category">Sweets & Deserts</a>
                    <!--First Tier Drop Down-->
                    <ul>
                        <li><a href="">Ice cream</a> </li>
                        <li><a href="">cake</a> </li>
                        <li><a href="">Cookies</a> </li>
                        <li><a href="">Brownies</a> </li>
                        <li><a href="">Veg Roll</a> </li>
                        <li><a href="">Pastries</a></li>
                    </ul>

                <li><a href="" class="category">Snacks</a>
                    <!--First Tier Drop Down-->
                    <ul>
                        <li><a href="">Chips</a> </li>
                        <li><a href="">Crackers</a> </li>
                        <li><a href="">Dry fruit</a> </li>
                    </ul>

                <li><a href="" class="category">Juice</a>
                    <!--First Tier Drop Down-->
                    <ul>
                        <li><a href="">Mango Juice</a> </li>
                        <li><a href="">Orange Juice</a> </li>
                        <li><a href="">Coconut Juice</a> </li>
                    </ul>

                <li><a href="" class="category">Soft Drinks</a>
                    <!--First Tier Drop Down-->
                    <ul>
                        <li><a href="">Sprite</a> </li>
                        <li><a href="">Fanta</a> </li>
                        <li><a href="">Coke</a> </li>
                    </ul>
            </ul>
        </nav>
    </div>
    <!-- Category End -->

    <!-- Products Start -->
    <div class="seller-container">
        <div class="container">
            <div class="seller-group">
                <div class="seller-profile">
                    <div class="seller-info">
                        <h3>Hymalayan Java</h3>
                        <h5>Baneshowr, Kathmandu</h5>
                    </div>
                    <button class="button info button-small">See More</button>
                </div>
                <div class="gallery">
                    <div class="content">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Chowmein</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>


        
                    <div class="content">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Chowmein</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>


                    <div class="content">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Veg Momo</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>
                    <div class="content">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Chowmein</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>


                    <div class="content">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Veg Momo</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>
                    <div class="content">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Boilar Momo</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>
                    <div class="content">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Veg paneer Momo</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div><!-- div for card body ends-->
    <!-- Products End -->

    <?php
    include_once ("./partials/footer.php");

    
    ?>
</body>

</html>