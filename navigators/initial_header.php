<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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
        text-decoration: none;
    }

    .login-text:hover {
        text-decoration: underline;
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
            <a href="../patient/patient_login.php" class="login-text">Login</a>
            <a href="../patient/guest_booknow.php" class="book-now-btn">Book Now</a>
        </nav>
    </header>
</body>
</html>