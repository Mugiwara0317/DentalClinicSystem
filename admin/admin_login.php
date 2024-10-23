<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Smile Dental Clinic - Admin Area</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        // JavaScript function to handle form submission
        function validateLogin(event) {
            event.preventDefault(); // Prevent the default form submission
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Dummy validation: Replace this with your actual login logic
            if (email !== "admin@gmail.com" || password !== "admin123") {
                document.getElementById('error-message').innerText = "Incorrect email or password. Please try again.";
            } else {
                // Redirect to the admin dashboard if the credentials are correct
                window.location.href = "admin_dashboard.php";
            }
        }
    </script>
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
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo-circle, img {
        width: 40px;
        height: 40px;
        background-color: transparent;
        border-radius: 50%;
        margin-right: 10px;
    }

    .clinic-name {
        color: white;
        font-size: 18px;
        font-weight: bold;
        font-style: Inter;
    }

    .nav-center {
        position: absolute;
        left: 80%;
    }

    .login-text {
        color: #008080;
        font-size: 16px;
        font-weight: normal;
        position: absolute;
        right: -150px;
        top: -10px;
    }

    .nav-links {
        display: flex;
        gap: 20px;
    }

    .public-home-btn {
        background-color: #008080;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        text-decoration: none;
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
        width: 800px;
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

</style>
<body>
    <header class="header">
        <div class="logo">
            <div class="logo-circle">
                <img src="../images/logo.png" alt="">
            </div>
            <span class="clinic-name">HAPPY SMILE DENTAL CLINIC</span>
        </div>
        <div class="nav-center">
            <span class="login-text">Login</span>
        </div>
        <nav class="nav-links">
            <a href="#" class="public-home-btn">Public Home</a>
        </nav>
    </header>
    
    <div class="login-container">
        <div class="login-card">
            <div class="image-placeholder">
                <img src="../images/1.jpg" alt="Login Background">
            </div>
            <div class="login-form">
                <h2 class="admin-area-title">ADMIN AREA</h2>
                <form onsubmit="validateLogin(event)">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email" required aria-label="Email">
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password" required aria-label="Password">
                    
                    <div id="error-message" class="error-message"></div>
                    <button type="submit" class="login-btn">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
