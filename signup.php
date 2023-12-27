<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- CSS Stylesheets Start -->
    <link rel="stylesheet" href="/epasale/public/css/style.css">
    <link rel="stylesheet" href="/epasale/public/css/login.css" />
    <!-- CSS Stylesheets End -->
</head>

<body>

    <div class="auth-form">
        <h1 class="auth-form__h1">CUSTOMER SIGN-UP</h1>


        <div class="auth-form__wrapper">

        <div class="auth-form__form-group">
                    <label class="auth-form__label" for="user_photo_url">Profile Picture</label>
                    <input class="auth-form__input" type="file" id="user_photo_url">
                </div>

        <div class="auth-form__form-group">
                <label class="auth-form__label" for="fame">First name  *</label>
                <input class="auth-form__input" type="text" id="fname" placeholder="Enter your first Name" required>
            </div>
            <div class="auth-form__form-group">
                <label class="auth-form__label" for="lame">Last name  *</label>
                <input class="auth-form__input" type="text" id="lname" placeholder="Enter your Last Name" required>
            </div>
            <div class="auth-form__form-group">
                <label class="auth-form__label" for="email">Email  *</label>
                <input class="auth-form__input" type="text" id="email" placeholder="Enter your email"required>
            </div>

            <div class="auth-form__form-group">
                <label class="auth-form__label" for="contact">Contact  *</label>
                <input class="auth-form__input" type="text" id="contact" placeholder="980*******"required>
            </div>

            <div class="auth-form__form-group">
                <label class="auth-form__label" for="gender">Gender</label>
                <div class="auth-form__radio-group">
                    <label class="auth-form__radio-label">
                        <input type="radio" name="gender" value="male">
                        Male
                    </label>
                    <label class="auth-form__radio-label">
                        <input type="radio" name="gender" value="female">
                        Female
                    </label>
                    <label class="auth-form__radio-label">
                        <input type="radio" name="gender" value="other">
                        Others
                    </label>
                </div>
            </div>
            <div class="auth-form__form-group">
                <label class="auth-form__label" for="password"> Password  *</label>
                <input class="auth-form__input" type="password" id="password" placeholder="Enter your password"required>
            </div>
            <div class="auth-form__form-group">
                <label class="auth-form__label" for="confirm-password">Confirm-Password  *</label>
                <input class="auth-form__input" type="password" id="confirm-password" placeholder="Re-enter your password"required>
            </div>
            

            <a href="/epasale">
                <button class="button btn-primary" style="width: 100%;">Sign-Up</button>
            </a>

            <span class="auth-form__form-group">
                Already have an account? <a class="link auth-form__link" href="/epasale/login.php">Sign in</a>
            </span>
            </div>
        </div>


</body>

</html>