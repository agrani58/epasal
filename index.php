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
                <div class="gallery prd-grp">
                    <div class="content prd-card">
                        <img  class="prd-card__img" src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        
                        
                        <div class="prd-card__body">
                            <h2 class="prd-card__h2">Veg Chowmein</h2>
                            <p class="prd-card__p">NRs. 100.00</p>
                            <div class="prd-card__qty-grp">
                                <label class="prd-card__label">Qty:</label>
                                <input class="prd-card__qty" type="number"
                                name="quantity" value="1" min="1" max="10" size="3" />
                            </div>

                            <button class="prd-card__button" type="button">Add to Cart</button> 
                        </div> 
                    </div>


                    <div class="content prd-card">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Veg Momo</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <input type="number" min="1" max="10" size="3" />
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>

                    <div class="content prd-card">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Chowmein</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <input type="number" min="1" max="10" size="3" />
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>


                    <div class="content prd-card">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Veg Momo</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <input type="number" min="1" max="10" size="3" />
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>

                    <div class="content prd-card">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Chowmein</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <input type="number" min="1" max="10" size="3" />
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>


                    <div class="content prd-card">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Veg Momo</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <input type="number" min="1" max="10" size="3" />
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>

                    <div class="content prd-card">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Boilar Momo</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <input type="number" min="1" max="10" size="3" />
                                <button class="increment">+</button>
                            </div><!-- div for quantity control ends-->
                        </div><!-- div for quantity ends-->

                        <div class="card__footer"><!-- div for card__footer-->
                            <div class="action"><!-- action includes color changing while hovering-->
                                <button type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>

                    <div class="content prd-card">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Product">
                        <h2>Veg paneer Momo</h2>
                        <p>NRs:100</p>


                        <div class="quantity"><!-- div for quantity starts-->
                            <label for="quantity">Qty:</label>
                            <div class="quantity_control"> <!--div for quantity control(+,-) starts.-->
                                <button class="decrement">-</button>
                                <div class="quantity_box">1</div>
                                <input type="number" min="1" max="10" size="3" />
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
                                <input type="number" min="1" max="10" size="3" />
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
                                <input type="number" min="1" max="10" size="3" />
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
                                <input type="number" min="1" max="10" size="3" />
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
                                <input type="number" min="1" max="10" size="3" />
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
                                <input type="number" min="1" max="10" size="3" />
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
                                <input type="number" min="1" max="10" size="3" />
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
                                <input type="number" min="1" max="10" size="3" />
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
                                <input type="number" min="1" max="10" size="3" />
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

    <!-- Includes footer partial from ./_footer.php -->
   <?php include_once("_footer.php"); ?> 
</body>

</html>