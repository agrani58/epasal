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
        <h1 class="auth-form__h1">CUSTOMER LOGIN</h1>

        <div class="auth-form__wrapper">
            <div class="auth-form__form-group">
                <label class="auth-form__label" for="email"><i class="fa fa-user"></i> Email</label>
                <input class="auth-form__input" type="text" id="email" placeholder="Enter your email">
            </div>

            <div class="auth-form__form-group">
                <label class="auth-form__label" for="password"><i class="fa fa-lock"></i> Password</label>
                <input class="auth-form__input" type="password" id="password" placeholder="Enter your password">
            </div>



            <a href="/epasale">
                <button class="button btn-primary" style="width: 100%;">Login <i
                        class="fa fa-arrow-right-to-bracket"></i></button>
            </a>

            <span class="auth-form__form-group">
                <!-- Remember me and forgot password links are not required -->
                <!-- <p> <input type="checkbox">Remember me </p> -->
                <!-- <a class="link auth-form__link" href="/epasale">Forgot your Password?</a> <br /> -->
                New to ePasal? <a class="link auth-form__link" href="/epasale/signup.php">Create your ePasal Account</a>
            </span>
        </div>
    </div>

</body>

</html>