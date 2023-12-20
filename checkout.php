<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CheckOut Page</title>

  <!-- CSS Stylesheets Start -->
  <link rel="stylesheet" href="/epasale/public/css/style.css">
  <!-- CSS Stylesheets End -->
</head>

<body>
  <!-- Includes header partial from ./_header.php -->
  <?php include_once("_header.php"); ?>

  <!-- chec section includes product summary and product billing -->
  <div class="chec__sec">

    <div class="checinfo">
      <h3 class="checinfo__h3">Order Summary</h3>
      <div class="checinfo__cards">
        <div class="checinfo__card">
          <img class="checinfo__img" src="/epasale/public/img/products/Dahi Lassi.jpg" alt="photo of lassi" />

          <div class="checinfo__content">
            <h3 class="checkinfo__cardh3">Delightful Lassi</h3>
            <p class="checinfo__qty">Qty: 3</p>
            <p class="checinfo__price">Rs. 350</p>
          </div>
        </div>

        <div class="checinfo__card">
          <img class="checinfo__img" src="/epasale/public/img/products/Dahi Lassi.jpg" alt="photo of lassi" />

          <div class="checinfo__content">
            <h3 class="checkinfo__cardh3">jerry</h3>
            <p class="checinfo__qty">Qty: 3</p>
            <p class="checinfo__price">Rs. 350</p>
          </div>
        </div>

        <div class="checinfo__card">
          <img class="checinfo__img" src="/epasale/public/img/products/Dahi Lassi.jpg" alt="photo of lassi" />

          <div class="checinfo__content">
            <h3 class="checkinfo__cardh3">Delightful Lassi</h3>
            <p class="checinfo__qty">Qty: 3</p>
            <p class="checinfo__price">Rs. 350</p>
          </div>
        </div>

        <div class="checinfo__card">
          <img class="checinfo__img" src="/epasale/public/img/products/Dahi Lassi.jpg" alt="photo of lassi" />

          <div class="checinfo__content">
            <h3 class="checkinfo__cardh3">jerry</h3>
            <p class="checinfo__qty">Qty: 3</p>
            <p class="checinfo__price">Rs. 350</p>
          </div>
        </div>
      </div>
    </div>

    <div class="chec">
      <h4 class="checinfo__h3">CheckOut</h4>

      <div class="chec__billing">
        <h3 class="check_h3">Billing Address</h3>
        <select class="chec__billingselect">
          <option>Bafal, near Everest Bank, Kathmandu</option>
          <option>Baneshwor, near Apex College, Kathmandu</option>
        </select>
      </div>

      <div class="chec__orderinfo">
        <h3 class="check_h3">Order Summary</h3>
        <table class="chec__orderinfotable">
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

      <div class="chec__pay">
        <h3 class="check_h3">Payment Method</h3>
        <select class="chec__payselec">
          <option>eSewa</option>
          <option>Cash on Delivery</option>
        </select>
      </div>

      <br/>

      <a href="/epasale/order.php" class="checinfo__a">
        <button class="button btn-primary">Complete Checkout</button></a>
    </div>
  </div>

  <!-- Includes footer partial from ./_footer.php -->
  <?php include_once("_footer.php"); ?>
</body>

</html>

<!-- This logo will be replaced by header @agrani ko -->
<!-- <img class="logo" src="Primary Logo.png" alt="logo" /> -->