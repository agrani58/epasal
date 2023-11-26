<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ePasal -Product details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

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
<!-- Header Start -->
<?php 
   include_once("./partials/header.php");
    ?>

<div class="product-detail">
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

    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="product-info>">
                    <img src="/epasale/public/img/products/biryani.jpg" class="img" />
                    <div class="product-info">
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
                        <h1 class="detail">Product Details</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
          <div class="col-5">
            <div class="product-recommendation">
                <div class="border">
                    <p class="store" >Product Recommendations</p>
                </div>
                <div class="product">
                    <img src="/epasale/public/img/products/C Momo.jpeg" class="pic" />
                    <div class="product-info">
                        <h3 class="product-name">MoMo</h3>
                        <P class="discription">Price: Rs 200</P>
                    </div>
                </div>
                <div class="product">
                    <img src="/epasale/public/img/products/cheese pizza.jpg" class="pic" />
                    <div class="product-info">
                        <h3 class="product-name">Pizza</h3>
                        <P class="discription">Price: Rs .250</P>
                    </div>
                </div>
                <div class="product">
                    <img src="/epasale/public/img/products/Jalebi.jpg" class="pic" />
                    <div class="product-info">
                        <h3 class="product-name">Burger</h3>
                        <P class="discription">Price: Rs.200</P>
                    </div>
                </div>
                <div class="product">
                    <img src="/epasale/public/img/products/Chocolate Milk Shake.jpg" class="pic" />
                    <div class="product-info">
                        <h3 class="product-name">Coffee</h3>
                        <p class="discription">Price: Rs.150</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php 
   include_once("./partials/footer.php");
    ?>
</body>

</html>