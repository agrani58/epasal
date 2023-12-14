<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

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

    <div class="container">
        <p class="paragraph">CUSTOMER LOGIN PAGE</p>
        <div>
            <div>
                <p class="icon"> <i class="fa fa-user"></i></p>
                <label for="username">Username:</label>

                <label class="position-right" for="forgotpw">Already have an account?
                    <a href="#">Sign up</a></label>

            </div>

            <div>
                <input class="width-area" type="text" id="username">

            </div>
        </div>

        <div>


            <div>
                <p class="icon"> <i class="fa fa-lock"></i></p>
                <label for="password">Password:</label>
                <label class="position-right show">
                    <p class="small-icon"> <i class="fa fa-eye"></i> </p>
                    Show
                </label>


            </div>
            <div>
                <input class="width-area" type="text" id="password">
            </div>
        </div>



        <div>
            <input type="checkbox">
            <label for="checklist">Remember me </label>
        </div>



        <div>
            <button class="button info" type="login">Login</button>
        </div>

        <div class="position-center">
            <label class="position-right" for="fpassword"><a href="#">Forgot Password?</a></label>
        </div>




    </div>

    <!-- Includes footer partial from ./_footer.php -->
    <?php include_once("_footer.php"); ?>
</body>

</html>