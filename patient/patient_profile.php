<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Profile</title>
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
    
    .card {
        height: 100%;
        max-height: 50%;
        width: 100%;
        margin: 20px;
        padding: 20px;
    }
    .card-pic{
        min-width: 100%;
        max-width: 30%;
        max-height: 480px;
        padding-top: 60px;
    }
    .card-info{
        min-width: 65%;
    }
    .card-pic img{
        min-width: 90%;
        min-height: 75%;
    }
    .update{
        background: #008B7B;
        min-height: 10%;
        margin: 20px;
        color: white;
        padding: 10px;
        border-radius: 4px;
    }
    .tableTitle {
        text-align: center !important;
    }

    .nav-tabs .nav-link.active {
        font-weight: bolder;
        font-size: 22px;
        color: #008B7B ;
        border: none;
    }

    .nav-tabs .nav-link {
        color: black;
        border: none;
    }

    form {
        margin: 20px;
    }

    .text-custom {
        color: #008B7B;
    }
    .body {
        overflow-y: auto;
    }
</style>
<body>
<?php 
    include "../navigators/patient_sidebar.php";
    include "../navigators/patient_header.php";
?>

<div class="content">
    <div class="sub-nav">
        <p>Dashboard | </p>
        <p>Appointments | </p>
        <p class="highlighted">Profile</p>
    </div>
    <div class="d-flex">
        <div class="container-fluid">
            <div class="card card-pic">
                <img src="../images/default_profile_pic.png" alt="">
                <h1 class="tableTitle">Username</h1>
                <p class="update">Update Profile</p>
            </div>
            <div class="card card-pic p-3">
                <div class="header">
                    <h5 class="modal-title">Transaction Summary:</h5>
                </div>
                <hr>
                <div class="body">
                    <!-- scrollable to -->
                    <div class="mb-3 d-flex justify-content-between">
                        <label class="text-custom" for="serviceName">Date/Time:</label>
                        <input type="text" class="border-0" id="serviceName" value="dd/mm/yyyy  3:30pm">
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <label class="text-custom" for="serviceName">Service:</label>
                        <input type="text" class="border-0" id="serviceName" value="Bunot">
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <label class="text-custom" for="serviceName">Price:</label>
                        <input type="text" class="border-0" id="serviceName" value="&#8369 500">
                    </div>
                    <hr>
                    <!-- scrollable to hanggang dito -->
                </div>
            </div>
        </div>
        <div class="card card-info">
            <div class="container mt-4">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="account" aria-selected="false">Account Security</button>
                    </li>
                </ul>

                <!-- Tab content -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form>
                            <div class="mb-3">
                                <label for="fname" class="form-label">First Name:</label>
                                <input type="text" class="form-control" id="fname" value="" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="mname" class="form-label text-align-center">Middle Name:</label>
                                <input type="text" class="form-control" id="mname" value="" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="lname" class="form-label">Last Name:</label>
                                <input type="text" class="form-control" id="lname" value="" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="suffix" class="form-label">Suffix:</label>
                                <input type="text" class="form-control" id="suffix" value="" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="bday" class="form-label">Date of Birth:</label>
                                <input type="date" class="form-control" id="bday" value="" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender:</label>
                                <select class="form-control" name="gender" id="gender" disabled>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="occupation" class="form-label">Occupation:</label>
                                <input type="text" class="form-control" id="occupation" value="" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="civil" class="form-label">Civil Status:</label>
                                <select class="form-control" name="civil" id="civil" disabled>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Legally Separated">Legally Separated</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="cellnum" class="form-label">Cellphone #:</label>
                                <input type="text" class="form-control" id="cellnum" value="" 
                                    pattern="^(09|\+639)\d{9}$" 
                                    placeholder="09XXXXXXXXX or +639XXXXXXXXX" 
                                    title="Please enter a valid Philippine mobile number (09XXXXXXXXX or +639XXXXXXXXX)" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="address" value="" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address:</label>
                                <input type="email" class="form-control" id="email" value="" disabled>
                            </div>
                            <button id="updateProfileBtn" class="btn btn-primary">Update Profile</button>
                            <input id="submitBtn" type="submit" class=" btn btn-secondary" disabled>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <form>
                            <div class="mb-3">
                                <label for="currentpass" class="form-label">Current Password:</label>
                                <div class="input-group">
                                    <span class="input-group-text material-icons">lock</span>
                                    <input type="password" class="form-control" id="currentpass" value="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="newpass" class="form-label">New Password:</label>
                                <div class="input-group">
                                    <span class="input-group-text material-icons">lock</span>
                                    <input type="password" class="form-control" id="newpass" value="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="confirmpass" class="form-label">Confirm Password:</label>
                                <div class="input-group">
                                    <span class="input-group-text material-icons">lock</span>
                                    <input type="password" class="form-control" id="confirmpass" value="">
                                </div>
                            </div>
                            <input id="submitBtn" type="submit" class=" btn btn-success">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        // Get references to the buttons and form fields
        const updateProfileBtn = document.getElementById('updateProfileBtn');
        const submitBtn = document.getElementById('submitBtn');

        // Get all form fields
        const formFields = [
            document.getElementById('fname'),
            document.getElementById('mname'),
            document.getElementById('lname'),
            document.getElementById('suffix'),
            document.getElementById('bday'),
            document.getElementById('gender'),
            document.getElementById('occupation'),
            document.getElementById('civil'),
            document.getElementById('cellnum'),
            document.getElementById('address'),
            document.getElementById('email')
        ];

        // Function to toggle the disabled state
        function toggleButtonsAndFields() {
            updateProfileBtn.disabled = !updateProfileBtn.disabled; // Toggle Update Profile button
            submitBtn.disabled = !submitBtn.disabled; // Toggle Submit button
            
            // Toggle all form fields
            formFields.forEach(field => {
                field.disabled = !field.disabled;
            });
        }

        // Add event listener to the Update Profile button
        updateProfileBtn.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default form submission
            toggleButtonsAndFields(); // Toggle buttons and fields when Update Profile is clicked
        });

        // Optional: Add event listener to the Submit button to re-enable the Update Profile button
        submitBtn.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default form submission
            // Normally, you'd handle the form submission here, but we are just toggling fields for demo purposes
            toggleButtonsAndFields(); // Toggle buttons and fields when Submit is clicked
        });
    </script>
</div>

<?php 
    include "../navigators/admin_footer.php";
?>
    
</body>
</html>