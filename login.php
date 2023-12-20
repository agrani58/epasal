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

    <div class="login-form">
        <h1 class="login-form__h1">CUSTOMER LOGIN</h1>

        <div class="login-form__wrapper">
            <div class="login-form__form-group">
                <i class="fa fa-user"></i>
                <label class="login-form__label" for="username">Username</label>
                <input class="login-form__input" type="text">
            </div>

            <div class="login-form__form-group">
                <i class="fa fa-lock"></i>
                <label class="login-form__label" for="password">Password</label>
                <input class="login-form__input" type="password">

            </div>

            <span class="login-form__form-group">
                <!-- Remember me is not required -->
                <!-- <p> <input type="checkbox">Remember me </p> -->
                <p class="login-form__p"><a href="/epasale">Forgot Password?</a></p>
            </span>
            
            <a href="/epasale"><button class="button info" style="width: 100%;">Login <i class="fa fa-arrow-right-to-bracket"></i></button></a>
        </div>
    </div>

</body>

</html>