<?php session_start(); ?>
<?php require_once("./utils/Locator.php");
require_once("./utils/connection.php"); ?>
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

<?php


if (isset($_POST["submit"])) {
    $_SESSION["latitude"] = $_POST["latitude"];
    $_SESSION["longitude"] = $_POST["longitude"];
}


function getDistance($lat, $lon) {
    if (isset($_SESSION["latitude"]) && isset($_SESSION["longitude"])) {
        $source = new GeoLocation($_SESSION["latitude"], $_SESSION["longitude"]);
        $target = new GeoLocation($lat, $lon);

        $locator = new Locator($source, $target);
        $locator->showDistance();
    }
}
?>

<body>

    <!-- Includes header partial from ./_header.php -->
    <?php include_once("_header.php"); ?>

    <!-- 
        Products Start
        .seller__container contains all .seller(s) sections
        .seller contains .seller__profile and all seller__card product__card sections
     -->
    <div class="seller__container">
        <div class="seller">
            <div class="seller__info">
                <div class="seller__profile">
                    <a class="seller__a" href="/epasale/seller-page.php?id=1">
                        <img class="seller__profile-avatar" src="/epasale/public/img/shops/shop.jpg" width="40px" />
                    </a>
                    <div class="seller__profile-content">
                        <h3>Himalayan Java</h3>
                        <h4>Baneshowr, Kathmandu
                            <?php getDistance(27.72407583495227, 85.36264737728318); ?>
                        </h4>
                    </div>
                </div>
                <a href="/epasale/seller-page.php?id=1" class="seller__a">
                    <button class="button button-small btn-primary">See More</button>
                </a>
            </div>

            <div class="seller__content">
               
                <div class="seller__card product__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/product.avif"
                            alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Cheese Pizza </h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>
                <div class="seller__card product__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/product.avif"
                            alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Cheese Pizza </h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>
                <div class="seller__card product__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/product.avif"
                            alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Cheese Pizza </h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>

                <div class="seller__card product__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/chowmein.webp"
                            alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Chowmein </h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 150.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>
                <div class="seller__card product__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/Veg Fried Momo.jpg"
                            alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Veg Momo</h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 200.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>
            </div>



        </div>

        <div class="seller">
            <div class="seller__info">
                <div class="seller__profile">
                    <a class="seller__a" href="/epasale/seller-page.php?id=1">
                        <img class="seller__profile-avatar" src="/epasale/public/img/shops/shop.jpg" width="40px" />
                    </a>
                    <div class="seller__profile-content">
                        <h3>Khaarlyoom Momo</h3>
                        <h4>Kapan, Kathmandu
                            <?php getDistance(27.729665120725873, 85.34991665492623); ?>
                        </h4>
                    </div>
                </div>
                <a href="/epasale/seller-page.php?id=1" class="seller__a">
                    <button class="button button-small btn-primary">See More</button>
                </a>
            </div>

            <div class="seller__content">
                <div class="seller__card product__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/product.avif"
                            alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Cheese Pizza </h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>

                <div class="seller__card product__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/product.avif"
                            alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Cheese Pizza </h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>

                <div class="seller__card product__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/product.avif"
                            alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Cheese Pizza </h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>

                <div class="seller__card product__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/product.avif"
                            alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Cheese Pizza </h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>

                <div class="seller__card product__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/product.avif"
                            alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Cheese Pizza </h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>

                <div class="seller__card product__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/product.avif"
                            alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Cheese Pizza </h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Includes footer partial from ./_footer.php -->
    <?php include_once("_footer.php"); ?>
    <script src="./public/js/add-quantity.js" defer></script>

    <script>
        function getUserLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        // Successful retrieval of user's location
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;

                        var formData = new FormData();

                        formData.append("latitude", latitude);
                        formData.append("longitude", longitude);
                        formData.append("submit", "location");

                        fetch("/epasale/index.php", {
                            method: "POST",
                            body: formData,
                            headers: {
                                // "Content-Type": "application/x-www-form-urlencoded",
                            }
                        }).then(response => {
                            if (!response.ok) {
                                throw new Error("Network response not ok");
                            }
                            return response.text();
                        })
                            .then((data) => {
                                window.location = "/epasale/index.php";
                            }).catch(error => {
                                console.error("Fetch error:", error);
                            })

                        console.log("Latitude: " + latitude + ", Longitude: " + longitude);

                        // You can use the coordinates in your application
                    },
                    function (error) {
                        // Handle errors (e.g., user denied permission)
                        console.error("Error getting user location:", error.message);
                    }
                );
            } else {
                // Geolocation is not supported by the browser
                console.error("Geolocation is not supported by your browser.");
            }
        }

        // Call the function to get the user's location
        <?php if (!isset($_SESSION["latitude"]) || !isset($_SESSION["longitude"])) {
            echo ("getUserLocation();");
        } ?>
    </script>
</body>

</html>