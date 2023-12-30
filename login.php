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
        <h1 class="auth-form__h1">SIGN IN</h1>
        <form class="auth-form__wrapper" onsubmit="return LoginValidateForm()">
            <div class="auth-form__form-group">
                <label class="auth-form__label" for="email"><i class="fa fa-user"></i> Email</label>
                <input class="auth-form__input" type="email" id="email" placeholder="Enter your email">
                <span class="error-msg"></span>
            </div>
            <div class="auth-form__form-group">
                <label class="auth-form__label" for="password"><i class="fa fa-lock"></i> Password</label>
                <input class="auth-form__input" type="password" id="password" placeholder="Enter your password">
                <span class="error-msg"></span>
            </div>

            <div class="auth-form__form-group">
                <a href="/epasale">
                    <button class="button btn-primary" style="width: 100%;">
                        Sign in <i class="fa fa-arrow-right-to-bracket"></i>
                    </button>
                </a>
            </div>


            <!-- <a class="link auth-form__link" href="/epasale">Forgot your Password?</a> <br /> -->
            <div class="auth-form__form-group auth-form__form-links">
                New to ePasal?
                <a class="link auth-form__link" href="/epasale/signup.php"> Create your ePasal Account</a>
            </div>
        </form>
    </div>
    <script src="/epasale/public/js/Validator.js"></script>
    <script>
        // function to validate the loogin form
        function LoginValidateForm() {
            // Get form input elements
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');
            const image = document.getElementById('image');
            // Clear previous error messages
            Validator.clearInputErrors();
            // Validate email and password input
            const isEmailValid = Validator.validateRequired(email, "Please enter valid email.");
            const isPasswordStrong = Validator.validatePassword(password, "Your Password is Weak");
            const isPasswordValid = Validator.validateRequired(password, "Please enter valid Password.");
            // If all validations pass, show success alert
            if (isEmailValid && isPasswordStrong && isPasswordValid) {
                alert("Your form looks good");
                alert("You can now submit your form");
                document.getElementById('loginForm').submit();
            }
            // if fail, Prevent default form submission
            return false;
        }
    </script>
</body>

</html>