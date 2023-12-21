<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- CSS Stylesheets Start -->
    <link rel="stylesheet" href="/epasale/public/css/style.css">
    <link rel="stylesheet" href="/epasale/public/css/sellerlogin.css" />
    <!-- CSS Stylesheets End -->


</head>

<body>

    <div class="sellerlogin-form">
        <h1 class="sellerlogin-form__h1">CUSTOMER SIGN-UP</h1>


        <div class="sellerlogin-form__wrapper">

        <div class="sellerlogin-form__form-group">
                    <label class="sellerlogin-form__label" for="user_photo_url">Profile Picture</label>
                    <input class="sellerlogin-form__input" type="file" id="user_photo_url">
                </div>

        <div class="sellerlogin-form__form-group">
                <label class="sellerlogin-form__label" for="fame">First name  *</label>
                <input class="sellerlogin-form__input" type="text" id="fname" placeholder="Enter your first Name" required>
            </div>
            <div class="sellerlogin-form__form-group">
                <label class="sellerlogin-form__label" for="lame">Last name  *</label>
                <input class="sellerlogin-form__input" type="text" id="lname" placeholder="Enter your Last Name" required>
            </div>
            <div class="sellerlogin-form__form-group">
                <label class="sellerlogin-form__label" for="email">Email  *</label>
                <input class="sellerlogin-form__input" type="text" id="email" placeholder="Enter your email"required>
            </div>

            <div class="sellerlogin-form__form-group">
                <label class="sellerlogin-form__label" for="contact">Contact  *</label>
                <input class="sellerlogin-form__input" type="text" id="contact" placeholder="980*******"required>
            </div>

            <div class="sellerlogin-form__form-group">
                <label class="sellerlogin-form__label" for="gender">Gender</label>
                <div class="sellerlogin-form__radio-group">
                    <label class="sellerlogin-form__radio-label">
                        <input type="radio" name="gender" value="male">
                        Male
                    </label>
                    <label class="sellerlogin-form__radio-label">
                        <input type="radio" name="gender" value="female">
                        Female
                    </label>
                    <label class="sellerlogin-form__radio-label">
                        <input type="radio" name="gender" value="other">
                        Others
                    </label>
                </div>
            </div>
            <div class="sellerlogin-form__form-group">
                <label class="sellerlogin-form__label" for="password"> Password  *</label>
                <input class="sellerlogin-form__input" type="password" id="password" placeholder="Enter your password"required>
            </div>
            <div class="sellerlogin-form__form-group">
                <label class="sellerlogin-form__label" for="confirm-password">Confirm-Password  *</label>
                <input class="sellerlogin-form__input" type="password" id="confirm-password" placeholder="Re-enter your password"required>
            </div>
            

                <a href="/epasale">
                    <button class="button btn-primary" style="width: 100%;">Sign-Up</button>
                </a>
            </div>
        </div>


</body>

</html>