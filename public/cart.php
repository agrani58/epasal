<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal - Home Page</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- google font start -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300&display=swap"
        rel="stylesheet" />
    <!-- google font end -->
</head>

<body>
   <?php 
   include_once("./partials/header.php");
    ?>

    <!-- Cart Start -->


    <div class="cart-container">
        <div class="container">
            <div class="cart">
                <div class="product-cart">
                    <img src="./img/products/Laddu.jpg" class="img" />
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
                    <img src="./img/products/Laddu.jpg" class="img" />
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
                    <img src="./img/products/Laddu.jpg" class="img" />
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


    <?php
    include_once ("./partials/footer.php");
    ?>
</body>

</html>