<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal - Home Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet" />
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
                <div class="product-detail__product-info">
                    <img src="/epasale/public/img/products/biryani.jpg" class="product-detail__product-img" />
                    <div class="product-detail-information">
                        <h3 class="product-detail-information__product-name__h3">Chicken Biryani</h3>
                        <P class="product-detail-information__product-name__p">Price: Rs.300</P>
                        <div class="product-quantity">
                            <p>Quantity</p>
                            <button class="product-quantity__button--decrease">-</button>
                            <input  value="1" class="product-quantity__button--number"/>
                            <button class="product-quantity__button--increase">+</button>
                        </div>
                        <div class="product-detail__group-button">
                            <button class="button--buy">Buy Now</button>
                            <button class="button--cart">Add To Cart</button>
                        </div>
                        <div class="product-description">Product Details
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="product-recommendation">
                   
                <div class="product-recommendation__title">
                        <p class="product-recommendation__title_p">Product Recommendations</p>
                        </div>
                    <div class="product-thumbnail">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="product-thumbnail__product-img" />
                        <div class="product-thumbnail__product-description">
                            <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                            <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                        </div>
                    </div>
                 
                    <div class="product-thumbnail">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="product-thumbnail__product-img" />
                        <div class="product-thumbnail__product-description">
                            <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                            <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                        </div>
                    </div>
                 
                    <div class="product-thumbnail">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="product-thumbnail__product-img" />
                        <div class="product-thumbnail__product-description">
                            <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                            <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                        </div>
                    </div>
                 
                    <div class="product-thumbnail">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="product-thumbnail__product-img" />
                        <div class="product-thumbnail__product-description">
                            <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                            <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                        </div>
                    </div>
                 
                    <div class="product-thumbnail">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="product-thumbnail__product-img" />
                        <div class="product-thumbnail__product-description">
                            <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                            <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                        </div>
                    </div>
                 
                    <div class="product-thumbnail">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="product-thumbnail__product-img" />
                        <div class="product-thumbnail__product-description">
                            <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                            <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                        </div>
                    </div>
                 
                    <div class="product-thumbnail">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="product-thumbnail__product-img" />
                        <div class="product-thumbnail__product-description">
                            <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                            <P class="product-thumbnail__discription__p">Price: Rs 200</P>
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