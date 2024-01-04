<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <!-- CSS Stylesheets Start -->
    <link rel="stylesheet" href="/epasale/public/css/style.css">
    <link rel="stylesheet" href="/epasale/public/css/login.css" />
    <!-- CSS Stylesheets End -->
</head>

<body>

    <div class="auth-form__container">
    <div class="auth-form">
        <h1 class="auth-form__h1">USER REGISTRATION</h1>

        <form class="auth-form__wrapper" onsubmit="return SignUpValidateForm()" id="registerForm">
            <div class="auth-form__form-group">
                <label class="auth-form__label" for="fame">First name *</label>
                <input class="auth-form__input" type="text" id="fname" placeholder="Enter your first Name">
                <span class="error-msg"></span>
            </div>
            <div class="auth-form__form-group">
                <label class="auth-form__label" for="lame">Last name *</label>
                <input class="auth-form__input" type="text" id="lname" placeholder="Enter your Last Name">
                <span class="error-msg"></span>
            </div>

            <div class="auth-form__form-group">
                <label class="auth-form__label" for="user_photo_url">Profile Picture</label>
                <input class="auth-form__input" type="file" id="user_photo_url">
            </div>

            <div class="auth-form__form-group">
                <label class="auth-form__label" for="email">Email *</label>
                <input class="auth-form__input" type="text" id="email" placeholder="Enter your email">
                <span class="error-msg"></span>
            </div>

            <div class="auth-form__form-group">
                <label class="auth-form__label" for="contact">Contact *</label>
                <input class="auth-form__input" type="text" id="contact" placeholder="980*******">
                <span class="error-msg"></span>
            </div>

            <div class="auth-form__form-group">
                <label class="auth-form__label" for="gender">Gender</label>
                <div class="auth-form__radio-group">
                    <input type="radio" name="gender" value="male" id="gMale">
                    <label class="auth-form__radio-label" for="gMale">Male</label>

                    <input type="radio" name="gender" value="female" id="gFemale">
                    <label class="auth-form__radio-label" for="gFemale">Female</label>

                    <input type="radio" name="gender" value="other" id="gOthers">
                    <label class="auth-form__radio-label" for="gOthers">Others</label>
                </div>
            </div>
            <div class="auth-form__form-group">
                <label class="auth-form__label" for="password"> Password *</label>
                <input class="auth-form__input" type="password" id="password" placeholder="Enter your password">
                <span class="error-msg"></span>
            </div>
            <div class="auth-form__form-group">
                <label class="auth-form__label" for="confirm_password">Confirm-Password *</label>
                <input class="auth-form__input" type="password" id="confirm_password"
                    placeholder="Re-enter your password">
                <span class="error-msg"></span>
            </div>

            <div class="auth-form__form-group">
                    <button type="submit" class="button btn-primary" style="width: 100%;">Sign-Up</button>
            </div>

            <span class="auth-form__form-group  auth-form__form-links">
                Already have an account? <a class="link auth-form__link" href="/epasale/login.php">Sign in</a>
            </span>
        </form>
    </div>
    </div>


    <script src="/epasale/public/js/validator.js"></script>
    <script>
        // function to validate the loogin form
        function SignUpValidateForm() {
            // Get form input elements
            const fname = document.getElementById('fname');
            const lname = document.getElementById('lname');
            const email = document.getElementById('email');
            const contact = document.getElementById('contact');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirm_password');


            // Clear previous error messages
            Validator.clearInputErrors();

            // Validate email and password input
            const isFnameValid = Validator.validateRequired(fname, "Please enter first name.");
            const isLnameValid = Validator.validateRequired(lname, "Please enter last name.");
            const isEmailValid = Validator.validateEmail(email, "Please enter valid email.");
            const isContactValid = Validator.validatePhone(contact, "Please enter valid contact number.");
            const isPasswordStrong = Validator.validatePassword(password, "Your Password is Weak");
            const isPasswordValid = Validator.validateRequired(password, "Please enter valid Password.");
            const isConfirmPasswordValid = Validator.validateConfirmPassword(password, confirmPassword, "Your password is mismatched.");


            // If all validations pass, show success alert
            if (isFnameValid && isLnameValid && isEmailValid && isContactValid && isPasswordStrong && isPasswordValid && isConfirmPasswordValid) {
                Validator.clearInputErrors();
                alert("You can now submit your form");
                return true;
            }
            // if fail, Prevent default form submission
            return false;
        }
    </script>
</body>

</html>