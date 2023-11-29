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
<!-- Header Start -->
<?php 
   include_once("./partials/header.php");
    ?>

<div class="product-detail">
    

    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="product-info">
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
                        <h1 class="detail">Description</h1>
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
                    <img src="/epasale/public/img/products/C Momo.jpeg" class="recommendation-picture" />
                    <div class="product-info">
                        <h3 class="product-name">MoMo</h3>
                        <P class="discription">Price: Rs 200</P>
                    </div>
                </div>
                <div class="product">
                    <img src="/epasale/public/img/products/cheese pizza.jpg" class="recommendation-picture" />
                    <div class="product-info">
                        <h3 class="product-name">Pizza</h3>
                        <P class="discription">Price: Rs .250</P>
                    </div>
                </div>
                <div class="product">
                    <img src="/epasale/public/img/products/Jalebi.jpg" class="recommendation-picture" />
                    <div class="product-info">
                        <h3 class="product-name">Burger</h3>
                        <P class="discription">Price: Rs.200</P>
                    </div>
                </div>
                <div class="product">
                    <img src="/epasale/public/img/products/Chocolate Milk Shake.jpg" class="recommendation-picture" />
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