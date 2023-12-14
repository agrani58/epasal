<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CheckOut Page</title>

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

  <!-- checkout section includes product summary and product billing -->
  <div class="checkout-section">

    <!-- product summary start-->
    <div class="product-summary">
      <div class="product-summary__cards">
        <!-- Card Start -->
        <div class="product-summary__card">

          <img class="product-summary__img" src="/epasale/public/img/products/Dahi Lassi.jpg" alt="photo of lassi" />

          <div class="product-summary__description">
            <h3 class="product-summary__h3">Delightful Lassi</h3>
            <p class="product-summary_quantity">Qty: 3</p>
            <p class="product-summary_price">Rs. 350</p>
          </div>

          <!--add-->
          <img class="product-summary__img" src="/epasale/public/img/products/Dahi Lassi.jpg" alt="photo of lassi" />


          <div class="product-summary__description">
            <h3 class="product-summary__h3">laddu</h3>
            <p class="product-summary_quantity">Qty: 3</p>
            <p class="product-summary_price">Rs. 350</p>
          </div>


          <img class="product-summary__img" src="/epasale/public/img/products/Dahi Lassi.jpg" alt="photo of lassi" />

          <div class="product-summary__description">
            <h3 class="product-summary__h3">jerry</h3>
            <p class="product-summary_quantity">Qty: 3</p>
            <p class="product-summary_price">Rs. 350</p>
          </div>

        </div>
        <!-- Card End -->

      </div>
    </div>
    <!-- product summary end -->

    <div class="product-checkout">
      <h1 class="product-checkout__h1">CheckOut</h1>

      <div class="billing-section">
        <h2 class="billing-section__h2">Billing Address</h2>
        <select class="billing-section__select">
          <option>Bafal, near Everest Bank, Kathmandu</option>
          <option>Baneshwor, near Apex College, Kathmandu</option>
        </select>
      </div>

      <div class="order-section">
        <h2 class="order-section__h2">Order Summary</h2>
        <table class="order-section__table">
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

      <div class="payment-section">
        <h2 class="payment-section__h2">Payment Method</h2>
        <select class="payment-section__select">
          <option>eSewa</option>
          <option>Cash on Delivery</option>
        </select>
      </div>

      <button class="button--info">Continue with Payment</button>
    </div>
  </div>

  <!-- Includes footer partial from ./_footer.php -->
  <?php include_once("_footer.php"); ?>
</body>

</html>

<!-- This logo will be replaced by header @agrani ko -->
<!-- <img class="logo" src="Primary Logo.png" alt="logo" /> -->