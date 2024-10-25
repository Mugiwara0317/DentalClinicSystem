<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Smile Dental Clinic - Registration</title>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'inter', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            padding-top: 80px;
        }
        .header{
            margin-top: 120px;
        }

        .registration-form {
            display: flex;
            flex-direction: column;
            background-color: white;
            width: 800px;
            max-height: 600vh;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            position: relative;
            z-index: 1;
            margin-top: 10px;
        }

        .register-title-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .register-title {
            font-weight: bold;
            color: #008B7B;
            font-size: 24px;
        }
        
        form {
            display: flex;
            flex-direction: column;
            gap: 1px;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 1px;
        }

        .form-group {
            flex: 1;
            margin-bottom: 1px;
        }

        label {
            font-size: 12px;
            margin-bottom: 3px;
            display: block;
        }

        input {
            width: 100%;
            padding: 8px;
            font-size: 12px;
            margin-bottom: 1px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .line {
            width: 100%;
            height: 2px;
            background-color: black;
            margin: 10px 0;
        }

        .submit-btn {
            background-color: #198754;
            color: white;
            padding: 5px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 50%;
            margin: 0 auto;
            margin-top: 35px;
        }

        .submit-btn:hover {
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
    <?php 
        include "../navigators/initial_header.php";
    ?>
    
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
                    <input type="tel" id="cellphone" name="cellphone" required>
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
            <button type="submit" class="submit-btn">Submit</button>
            <p class="info-text">Already have an account? <a href="patient_login.php" class="contact-us">Login</a></p>
        </form>
    </div>
</body>
</html>
