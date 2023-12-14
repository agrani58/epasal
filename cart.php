<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal - Home Page</title>
    
   <!-- CSS Stylesheets Start -->
   <link rel="stylesheet" href="/epasale/public/css/style.css">
    <!-- CSS Stylesheets End -->
</head>

<body>
   <!-- Includes header partial from ./_header.php -->
   <?php include_once("_header.php"); ?>

    <!-- Cart Start -->
    <div class="cart-container">
        <div class="container">
            <div class="cart">
                <div class="product-cart">
                    <img src="/epasale/public/img/products/Laddu.jpg" class="img" />
                    <div class="product-info">
                        <h3 class="product-name">Laddu</h3>
                        <P class="discription">Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                        <div class="quantity">
                            <button class="btn">-</button>
                            <div class="no.">1</div>
                            <button class="btn">+</button>
                        </div>
                        <p class="product-remove">
                            <button class="button icon"><i class="fa fa-trash"></i></button>
                        </p>
                        <p class="price">Rs.200</p>
                    </div>
                </div>

                <div class="product-cart">
                    <img src="/epasale/public/img/products/Laddu.jpg" class="img" />
                    <div class="product-info">
                        <h3 class="product-name">Laddu</h3>
                        <P class="discription">Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                        <div class="quantity">
                            <button class="btn">-</button>
                            <div class="no.">1</div>
                            <button class="btn">+</button>
                        </div>
                        <p class="product-remove">
                            <button class="button icon"><i class="fa fa-trash"></i></button>
                        </p>
                        <p class="price">Rs.200</p>
                    </div>
                </div>

                <div class="product-cart">
                    <img src="/epasale/public/img/products/Laddu.jpg" class="img" />
                    <div class="product-info">
                        <h3 class="product-name">Laddu</h3>
                        <P class="discription">Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
                        <div class="quantity">
                            <button class="btn">-</button>
                            <div class="no.">1</div>
                            <button class="btn">+</button>
                        </div>
                        <p class="product-remove">
                            <button class="button icon"><i class="fa fa-trash"></i></button>
                        </p>
                        <p class="price">Rs.200</p>
                    </div>
                </div>
            </div>

           
            <div class="end">
                <button class="button info">Checkout</button>
                <button class="button info">Cancel</button>
            </div>
        </div>
    </div>
    </div>

    <!-- Cart End -->

    <!-- Products End -->


    <!-- Includes footer partial from ./_footer.php -->
    <?php include_once("_footer.php"); ?> 
</body>

</html>