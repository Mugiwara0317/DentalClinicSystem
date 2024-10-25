<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    body, html{
        font-family: "Inter", sans-serif;
    }
    .header {
        width: 100%;
        background-color: #333;
        padding: 20px;
        display: flex;
        position: fixed;
        justify-content: flex-end; /* Align all items to the right */
        align-items: center;
        z-index: 100;
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
    .guest {
        font-family: "Inter", sans-serif;
        font-style: normal;
        color: white;
    }
    .material-icons {
        margin-right: -15px;
        font-size: 28px;
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
            <span class="material-icons text-white">account_circle</span><i class="guest">GUEST</i>
        </nav>
    </header>
</body>
</html>