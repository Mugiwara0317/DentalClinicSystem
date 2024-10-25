<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Book Now</title>
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    body {
        background: #F4F4F4;
        font-family: Arial, sans-serif;
    }
    .login-container {
        min-height: 100vh;
    }
    .login-form {
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        padding: 40px;
        max-width: 600px;
        height: 400px;
        width: 100%;
    }
    .admin-area-title {
        color: #008080;
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
    }
    form input {
        margin-top: 15px;
        margin-bottom: 50px;
    }
</style>
<body>
    <?php 
        include "../navigators/initial_header.php";
    ?>

    <div class="container d-flex align-items-center justify-content-center login-container">
        <div class="login-form">
            <h2 class="admin-area-title">Book Now</h2>
            <form action="guest_dashboard.php">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Email" required aria-label="Email">
                
                <div id="error-message" class="error-message"></div>
                
                <button type="submit" class="btn btn-primary w-100">Enter</button>
            </form>
        </div>
    </div>
</body>
</html>
