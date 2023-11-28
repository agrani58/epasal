<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CheckOut Page</title>

    <link rel="stylesheet" href="/epasale/public/css/style.css" />

    <!-- google font start -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300&display=swap"
      rel="stylesheet"
    />
    <!-- google font end -->
  </head>
  <body>
  <?php
    include_once("./../partials/header.php");
    ?>

    <div class="row container-checkout">
      <div class="col-7 product-wrapper">
        <div class="row row-horizontal card-container-summary">
          <div class="col card-product-summary row">
            <img class="col" src="/epasale/public/img/products/Dahi Lassi.jpg" alt="photo of lassi" />

            <div class="col description">
              <h3>Delightful Lassi</h3>
              <h4>
                A creamy concoction crafted from velvety yogurt, with a hint of
                sweetness that caresses your taste buds
              </h4>
              <p>3 qty</p>
              <p class="price">Rs.208</p>
            </div>
          </div>

          <div class="col card-product-summary row">
            <img class="col" src="/epasale/public/img/products/C Momo.jpeg" alt="photo of momo" />

            <div class="col description">
              <h3>Veggie MoMo</h3>
              <h4>
                It's like a garden party in your mouth, with flavors mingling in
                perfect harmony
              </h4>
              <p>1 qty</p>
              <p class="price">Rs.180</p>
            </div>
          </div>

          <div class="col card-product-summary row">
            <img class="col" src="/epasale/public/img/products/cheese pizza.jpg" alt="photo of pizza" />

            <div class="col description">
              <h3>Cheese Pizza</h3>
              <h4>
                Every bite is a celebration of richness. So, are you ready to
                dive into a bowl of cheesy pizza
              </h4>
              <p>2 qty</p>
              <p class="price">Rs.300</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-5 billing-nav">
        <h1>CheckOut</h1>

        <div class="bill">
          <h2>Billing Address</h2>
          <select>
            <option>Bafal, near Everest Bank, Kathmandu</option>
            <option>Baneshwor, near Apex College, Kathmandu</option>
          </select>
        </div>

        <div class="bill">
          <h2>Order Summary</h2>
          <table>
            <tr>
              <td>Items Total</td>
              <td align="right">Rs.2,895</td>
            </tr>
            <tr>
              <td>Delivery Fee</td>
              <td align="right">Rs.65</td>
            </tr>
            <tr>
              <td>Delivery Discount</td>
              <td align="right">Rs.65</td>
            </tr>
            <tr>
              <td>Total Payment</td>
              <td align="right">Rs.2,895</td>
            </tr>
          </table>
        </div>

        <div class="bill">
          <h2>Payment Method</h2>
          <select>
            <option>eSewa</option>
            <option>Cash on Delivery</option>
          </select>
        </div>

        <button class="button info">Continue with Payment</button>
      </div>
    </div>
    <?php
    include_once("./../partials/footer.php");
    ?>
  </body>
</html>

<!-- This logo will be replaced by header @agrani ko -->
<!-- <img class="logo" src="Primary Logo.png" alt="logo" /> -->
