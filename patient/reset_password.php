<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Smile Dental Clinic - Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
        color: #333;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .header {
        width: 100%;
        background-color: #333;
        padding: 20px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .logo {
        display: flex;
        align-items: center;
        margin-right: auto;
    }

    .logo-circle, img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .clinic-name {
        color: white;
        font-size: 18px;
        font-weight: bold;
    }

    .nav-center {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-right: 20px;
    }

    .nav-links {
        display: flex;
        gap: 20px;
    }

    .public-home-btn {
        color: white;
        text-decoration: none;
        font-size: 16px;
    }

    .public-home-btn:hover {
        text-decoration: underline;
    }

    .book-now-btn {
        background-color: #008B7B;
        color: white;
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .book-now-btn:hover {
        background-color:  #008080;
    }

    .reset-password-title {
        color: black;
        font-weight: bold;
        font-size: 24px;
        text-align: center;
        margin-bottom: 20px;
    }

    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .login-card {
        display: flex;
        flex-direction: column; /* Changed to column to center content vertically */
        justify-content: center; /* Center content vertically */
        align-items: center; /* Center content horizontally */
        background-color: white;
        width: 600px;
        height: 500px;
        border-radius: 4px;
        box-shadow: 0px 4px 15px 0px #2C3F5859;
        opacity: 1; /* Adjusted from 0 to 1 for visibility */
        padding: 20px; /* Added padding for inner spacing */
    }

    .image-placeholder {
        position: relative;
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .image-placeholder img {
        width: 100%;
        height: 100%;
        border-radius: 0;
    }

    .reset-password-form {
        width: 100%; /* Ensure full width */
        text-align: center; /* Center text inside the form */
    }

    .form-group {
    width: 100%; /* Make the group take full width */
    text-align: left; /* Align text to the left */
    margin-bottom: 20px;
    }

    label {
    font-size: 14px;
    margin-bottom: 5px;
    display: block; /* Make the label a block element to take full width */
    }

    input {
    padding: 10px;
    font-size: 16px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%; /* Ensure input takes full width */
    }


    .reset-btn {
        background-color: #0D6EFD;
        color: white;
        padding: 10px;
        font-size: 16px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 250px;
    }

    .reset-btn:hover {
        background-color: #0056b3;
    }

    .info-text {
        font-size: 14px;
        text-align: center;
        margin: 10px 0;
    }

    .contact-us {
        color: #0D6EFD;
        text-decoration: none;
    }

    .contact-us:hover {
        color: #004a99;
    }

    .register-section {
        text-align: center; 
        margin-top: 100px; 
    }

    .admin-area-title {
        font-weight: bold; 
    }
    .bold-text {
    font-weight: bold;
}

</style>
<body>
    <header class="header">
        <div class="logo">
            <div class="">
                <img src="../images/logo.png" alt="Clinic Logo">
            </div>
            <span class="clinic-name">HAPPY SMILE DENTAL CLINIC</span>
        </div>
        <nav class="nav-center">
            <a href="#" class="public-home-btn">Home</a>
            <a href="#" class="public-home-btn">Contact</a>
            <span class="login-text">Login</span>
            <a href="#" class="book-now-btn">Book Now</a>
        </nav>
    </header>
    
    <div class="login-container">
        <div class="login-card">
            <div class="reset-password-form">
                <h2 class="reset-password-title">Reset your Password</h2>
                <p class="info-text"><strong>Please provide the email address when you signed up your account.</strong></p>

                <p class="info-text">If you forgot your email, please <a href="#" class="contact-us">contact us.</a></p>

            <div class="form-group">   
                <label for="email">Email Address*</label>
                <input type="email" id="email" name="email" placeholder="Email" required aria-label="Email">
            </div>
                
            <p class="info-text bold-text">OTP will be sent to your email to reset your password.</p>

                
                <button type="submit" class="reset-btn">Reset Password</button>
                
                <div class="register-section"> 
                    <p>Create new account? <a href="register.html" class="register-text">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
