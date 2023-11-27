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
    

    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="product-info>">
                    <img src="/epasale/public/img/products/biryani.jpg" class="img" />
                    <div class="product-info">
                        <h3 class="product-name">Chicken Biryani</h3>
                        <P class="discription">Price: Rs.300</P>
                        <div class="quantity">
                            <p>Quantity</p>
                            <button class="btn">-</button>
                            <div class="no.">1</div>
                            <button class="btn">+</button>
                        </div>
                        <div class="btn2">
                            <button class="buy">Buy Now</button>
                            <button class="cart">Add To Cart</button>
                        </div>
                        <p class="detail">Product Details</p>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </li>
    
                    </div>
                </div>
            </div>
          <div class="col-5">
            <div class="product-recommendation">
                <div class="border">
                    <p class="store">Product Recommendations</p>
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