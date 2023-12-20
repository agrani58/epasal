<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Login Page</title>
    <link rel="stylesheet" href="seller-login-page.css">

</head>
<body>
    <div class="seller-login-page">
    <form action="" method="post">
   <fieldset>
    <legend>Personal Information</legend>
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname" value="JOHN" required>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname" value="DOE" required>
    <label for="address">Address</label>
    <input type="text" id="address" name="address" value="Baneshowr" required>
   </fieldset>
        <fieldset>
       
            <legend>Contact Information</legend>
    
        
            <label for="phone_no">Phone number</label>
            <input type="number" id="phone_no" name="phone_no" placeholder="+977 98xxxxxxxx"required >
            
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="@gmail.com" required>
       
        </fieldset>

        <fieldset>
            <legend>login credientials</legend>
         
            <label for="username">username</label>
            <input type="text" id="username" name="username" value="" required>
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="" placeholder="Enter your password" required>
           
            <label for="confirm-password" >Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" value="" placeholder="Re-enter your password" required>
           
        </fieldset>
        <fieldset>
            <legend>business Details</legend>
            <div>
        <label for="business-registration-number">Business Registration Number</label>
        <input type="number" id="business-registration-number" name="business-registration-number" value="">
            </div>
        </fieldset>
<button type="Submit">Submit</button>

      </form>
    </div>
</body>
</html>