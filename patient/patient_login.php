<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Smile Dental Clinic - Login</title>
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
        justify-content: flex-end; /* Align all items to the right */
        align-items: center;
    }

    .logo {
        display: flex;
        align-items: center;
        margin-right: auto; /* Push logo to the left */
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
        gap: 20px; /* Add space between navigation items */
        margin-right: 20px; /* Add some margin to the right */
    }

    .nav-links {
        display: flex;
        gap: 20px;
    }

    .public-home-btn {
        color: white; /* Change text color to white for visibility */
        text-decoration: none; /* Remove underline */
        font-size: 16px;
    }

    .public-home-btn:hover {
        text-decoration: underline; /* Underline on hover */
    }
    .book-now-btn {
        background-color: #008B7B; /* Background color for Book Now */
        color: white; /* Text color */
        padding: 10px 15px; /* Add padding for better appearance */
        text-decoration: none; /* Remove underline */
        border-radius: 5px; /* Rounded corners */
        transition: background-color 0.3s ease; /* Smooth transition for hover */
    }

    .book-now-btn:hover {
        background-color:  #008080;
        ; /* Darker shade on hover */
        text-decoration: none; /* Maintain no underline on hover */
    }

    .login-text {
        color: #008080;
        font-size: 16px;
        font-weight: normal;
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
        background-color: white;
        width: 1000px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
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

    .login-form {
        padding: 80px;
        width: 50%;
    }

    .admin-area-title {
        color: #008080;
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        font-size: 14px;
        margin-bottom: 5px;
    }

    input {
        padding: 10px;
        font-size: 16px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
    }

    .login-btn {
        background-color: #007bff;
        color: white;
        padding: 15px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .login-btn:hover {
        background-color: #0056b3;
    }

    .error-message {
        color: red;
        text-align: center;
        margin-top: 10px;
    }

    .forgot-password {
        display: block; 
        text-align: right; 
        color: #0A58CA; 
        text-decoration: none; 
    }

    .forgot-password:hover {
        color: #004a99; 
    }

    .register-text {
        color: #0A58CA; 
        text-decoration: none; 
    }

    .register-text:hover {
        color: #004a99; 
    }

    .register-section {
        text-align: center; 
        margin-top: 20px; 
    }

    .admin-area-title {
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
            <div class="image-placeholder">
                <img src="../images/1.jpg" alt="Login Background">
            </div>
            <div class="login-form">
                <h2 class="admin-area-title">Login</h2>
                <form onsubmit="validateLogin(event)">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email" required aria-label="Email">
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password" required aria-label="Password">
                    
                    <div id="error-message" class="error-message"></div>
                    
                    <a href="forgot-password.html" class="forgot-password">Forgot Password?</a>
                    <button type="submit" class="login-btn">Login</button>
                </form>
                <div class="register-section"> 
                    <p>Not yet Registered? <a href="register.html" class="register-text">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
