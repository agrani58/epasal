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
                                <button class="product-qtygroup__btn--dec">-</button>
                                <input value="1" class="product-quantity__button--number" />
                                <button class="product-qtygroup__btn--inc">+</button>
                            </div>
                            <div class="product-detail__group-button">
                                <button class="button--buy">Buy Now</button>
                                <button class="seller__btn--cart">Add To Cart</button>
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
                            <img src="/epasale/public/img/products/C Momo.jpeg"
                                class="product-thumbnail__product-img" />
                            <div class="product-thumbnail__product-description">
                                <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                                <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                            </div>
                        </div>

                        <div class="product-thumbnail">
                            <img src="/epasale/public/img/products/C Momo.jpeg"
                                class="product-thumbnail__product-img" />
                            <div class="product-thumbnail__product-description">
                                <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                                <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                            </div>
                        </div>

                        <div class="product-thumbnail">
                            <img src="/epasale/public/img/products/C Momo.jpeg"
                                class="product-thumbnail__product-img" />
                            <div class="product-thumbnail__product-description">
                                <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                                <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                            </div>
                        </div>

                        <div class="product-thumbnail">
                            <img src="/epasale/public/img/products/C Momo.jpeg"
                                class="product-thumbnail__product-img" />
                            <div class="product-thumbnail__product-description">
                                <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                                <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                            </div>
                        </div>

                        <div class="product-thumbnail">
                            <img src="/epasale/public/img/products/C Momo.jpeg"
                                class="product-thumbnail__product-img" />
                            <div class="product-thumbnail__product-description">
                                <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                                <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                            </div>
                        </div>

                        <div class="product-thumbnail">
                            <img src="/epasale/public/img/products/C Momo.jpeg"
                                class="product-thumbnail__product-img" />
                            <div class="product-thumbnail__product-description">
                                <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                                <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                            </div>
                        </div>

                        <div class="product-thumbnail">
                            <img src="/epasale/public/img/products/C Momo.jpeg"
                                class="product-thumbnail__product-img" />
                            <div class="product-thumbnail__product-description">
                                <h3 class="product-thumbnail__product-description__h3">MoMo</h3>
                                <P class="product-thumbnail__discription__p">Price: Rs 200</P>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <!-- Includes footer partial from ./_footer.php -->
        <?php include_once("_footer.php"); ?>
</body>

</html>