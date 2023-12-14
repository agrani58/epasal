<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal - Home Page</title>

    <!-- CSS Stylesheets Start -->
    <link rel="stylesheet" href="/epasale/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300&display=swap"
        rel="stylesheet" />
    <!-- CSS Stylesheets End -->
</head>

<body>

    <!-- Includes header partial from ./_header.php -->
   <?php include_once("_header.php"); ?> 

 
    <!-- Products Start -->
    <div class="container">

        <div class="seller-group">
            <div class="seller-profile">
                <div class="seller-info">
                    <h3>Hymalayan Java</h3>
                    <h5>Baneshowr, Kathmandu</h5>
                </div>
                <button class="seller-info__button-seemore">See More</button>
            </div>

            <div class="card--gallery">
                <div class="card">
                    <img src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" class="card--img">
                    <div class="card__body">
                        <h3 class="card__title">Chowmein</h3>
                        <p class="card__subtitle">NRs. 100.00</p>

                        <div class="group--quantity">
                            <label for="qty">Qty: </label>
                            <button class="quantity__button--decrease">-</button>
                            <input type="number" min="1" max="10" class="quantity__input" value="1" size="5" disabled />
                            <button class="quantity__button--increase">+</button>
                        </div>


                        <div class="button--card">
                            <div class="card__action">
                                <button class="button--cart" type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" class="card--img">
                    <div class="card__body">
                        <h3 class="card__title">Chowmein</h3>
                        <p class="card__subtitle">NRs. 100.00</p>

                        <div class="group--quantity">
                            <label for="qty">Qty: </label>
                            <button class="quantity__button--decrease">-</button>
                            <input type="number" min="1" max="10" class="quantity__input" value="1" size="5" disabled />
                            <button class="quantity__button--increase">+</button>
                        </div>


                        <div class="button--card">
                            <div class="card__action">
                                <button class="button--cart" type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" class="card--img">
                    <div class="card__body">
                        <h3 class="card__title">Chowmein</h3>
                        <p class="card__subtitle">NRs. 100.00</p>

                        <div class="group--quantity">
                            <label for="qty">Qty: </label>
                            <button class="quantity__button--decrease">-</button>
                            <input type="number" min="1" max="10" class="quantity__input" value="1" size="5" disabled />
                            <button class="quantity__button--increase">+</button>
                        </div>


                        <div class="button--card">
                            <div class="card__action">
                                <button class="button--cart" type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" class="card--img">
                    <div class="card__body">
                        <h3 class="card__title">Chowmein</h3>
                        <p class="card__subtitle">NRs. 100.00</p>

                        <div class="group--quantity">
                            <label for="qty">Qty: </label>
                            <button class="quantity__button--decrease">-</button>
                            <input type="number" min="1" max="10" class="quantity__input" value="1" size="5" disabled />
                            <button class="quantity__button--increase">+</button>
                        </div>


                        <div class="button--card">
                            <div class="card__action">
                                <button class="button--cart" type="button">Add to Cart</button>
                            </div>
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