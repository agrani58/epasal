<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="/epasale/public/css/style.css">
    <link rel="stylesheet" href="./login.css" />
    <!-- google font start -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- google font end -->

    <!--font aweosome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <p class="login-form__p"><a href="#">Forgot Password?</a></p>
            </span>
            <button class="button info">login <i class="fa fa-arrow-right-to-bracket"></i></button>
        </div>
    </div>

</body>

</html>