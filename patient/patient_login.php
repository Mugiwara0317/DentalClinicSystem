<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Smile Dental Clinic - Login</title>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
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

    .image-placeholder::before {
        content: '';
        position: absolute;
        top: 0;
        right: 5px;
        width: 100%;
        height: 100%;
        background: linear-gradient(to left, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3));
        z-index: 1;
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
    <?php 
        include "../navigators/initial_header.php";
    ?>
    
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
                    
                    <a href="reset_password.php" class="forgot-password">Forgot Password?</a>
                    <button type="submit" class="login-btn">Login</button>
                </form>
                <div class="register-section"> 
                    <p>Not yet Registered? <a href="registration.php" class="register-text">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
