<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Make Appointment</title>
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }
    body{
        background: #F4F4F4;
        display: flex;
        flex-direction: column;
        font-family: Arial, sans-serif;
    }
    .card{
        margin: 20px;
        height: auto;
    }

    .text-custom {
        color: #008B7B;
    }

    .appointment-form {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 40px auto;
        }
        .appointment-title {
            color: #008080;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-text {
            font-size: 14px;
        }
        .btn-pay {
            background-color: #008B7B;
            color: white;
        }
        .btn-pay:hover {
            background-color: #006F63;
        }
</style>
<body>
    <?php 
        include "../navigators/guest_header.php";
        include "../navigators/guest_sidebar.php";
    ?>

    <div class="content">

        <div class="container">
            <div class="appointment-form">
                <h2 class="appointment-title">MAKE AN APPOINTMENT</h2>
                <p class="text-center">Take the first step towards a healthier you. Schedule you appointment today and let our clinic provide you with the care
                    you deserve. Your well-being is our priority, and we look forward to assisting you and your journey for better.</p>
                <br>
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="service" class="form-label">Service:</label>
                            <select class="form-select" id="service">
                                <option>Limited Services</option>
                                <!-- Add other options as needed -->
                            </select>
                            <div class="form-text">Sign up for more services</div>
                        </div>
                        <div class="col-md-3">
                            <label for="date" class="form-label">Date:</label>
                            <select class="form-select" id="date">
                                <option>Available Date based on Service</option>
                                <!-- Add other date options as needed -->
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="time" class="form-label">Start/End Time:</label>
                            <select class="form-select" id="time">
                                <option>Available Time based on Date</option>
                                <!-- Add time slots -->
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="price" class="form-label">Service Price:</label>
                            <input type="text" class="form-control" id="price" placeholder="3,000" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="reservationFee" class="form-label">Reservation Fee:</label>
                            <input type="text" class="form-control" id="reservationFee" placeholder="100" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="email" class="form-control" id="firstName" placeholder="Email">
                        </div>
                        <div class="col-md-4">
                            <label for="middleName" class="form-label">Middle Name:</label>
                            <input type="email" class="form-control" id="middleName" placeholder="Email">
                        </div>
                        <div class="col-md-4">
                            <label for="lastName" class="form-label">Last Name:</label>
                            <input type="email" class="form-control" id="lastName" placeholder="Email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="age" class="form-label">Age:</label>
                            <input type="email" class="form-control" id="age" placeholder="Email">
                        </div>
                        <div class="col-md-3">
                            <label for="gender" class="form-label">Gender:</label>
                            <input type="email" class="form-control" id="gender" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <label for="cellphone" class="form-label">Cellphone #:</label>
                            <input type="email" class="form-control" id="cellphone" placeholder="Email">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label for="address" class="form-label">Address:</label>
                            <input type="email" class="form-control" id="address" placeholder="Email">
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Pay Reservation</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>

    <?php include '../navigators/admin_footer.php' ?>
</body>
</html>