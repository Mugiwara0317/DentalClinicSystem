<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Smile Dental Clinic - Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        }

        .header {
            position: fixed; /* Fixed position to keep it at the top */
            top: 0; /* Align to the top of the page */
            left: 0;
            right: 0;
            background-color: #333;
            height: 80px; /* Set a fixed height */
            padding: 20px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            z-index: 1000; /* Ensure it stays above other elements */
        }

        .logo {
            display: flex;
            align-items: center;
            margin-right: auto;
        }

        .logo-circle,
        img {
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
            background-color: transparent; /* No hover color */
        }

        .register-title-container {
            width: 1108px; /* Fixed width */
            height: 104px; /* Fixed height */
            padding: 18px 0; /* Top and bottom padding */
            margin-bottom: 20px; /* Space below the title */
            display: flex; /* Flex container for centering */
            justify-content: center; /* Center the content horizontally */
            align-items: center; /* Center the content vertically */
            background-color: #fff; /* Optional: Background color */
        }

        .register-title {
            font-weight: bold; /* Make the title bold */
            color: #008B7B; /* Title color */
            font-size: 24px; /* Font size for the title */
            text-align: center; /* Center the text */
            margin: 0; /* Remove default margin */
        }

        .registration-form {
            width: 1108px; /* Fixed width */
            height: auto; /* Auto height */
            border-radius: 4px; /* Rounded corners */
            box-shadow: 0px 4px 15px 0px #2C3F5859; /* Shadow for elevation */
            background-color: white; /* Background color */
            padding: 20px; /* Padding for inner spacing */
            margin-top: 100px; /* Adjusted margin to prevent overlap */
            position: relative; /* Relative to position below fixed header */
            z-index: 1; /* Ensure it appears below the header */
        }

        .form-group {
            width: 100%; /* Make the group take full width */
            margin-bottom: 20px; /* Space between fields */
            text-align: left; /* Align text to the left */
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block; /* Make the label a block element */
        }

        input {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: calc(50% - 10px); /* Half width minus margin */
        }

        .line {
            width: 100%;
            height: 1px;
            background-color: #ccc; /* Line color */
            margin: 20px 0; /* Space around the line */
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
    </style>
</head>
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
        <div class="registration-form">
            <div class="register-title-container">
                <h2 class="register-title">REGISTER</h2>
            </div>
            <form action="process_registration.php" method="post">
                <div class="form-row">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group">
                        <label for="middle-name">Middle Name</label>
                        <input type="text" id="middle-name" name="middle-name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-group">
                        <label for="suffix">Suffix</label>
                        <input type="text" id="suffix" name="suffix">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" required>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" id="gender" name="gender" required>
                    </div>
                    <div class="form-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" id="occupation" name="occupation" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="civil-status">Civil Status</label>
                        <input type="text" id="civil-status" name="civil-status" required>
                    </div>
                    <div class="form-group">
                        <label for="cellphone">Cellphone #</label>
                        <input type="text" id="cellphone" name="cellphone" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="line"></div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Create Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <button type="submit" class="reset-btn">Submit</button>
                <p class="info-text">Already have an account? <a href="#" class="contact-us">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
