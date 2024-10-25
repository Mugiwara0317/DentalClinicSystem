<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <title>guest sidebar</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        background-color: white;
        padding: 20px;
        position: fixed;
        margin-top: 60px;
    }



    .dashboard {
        font-size: 1.2em;
        font-weight: bold;
        margin: 20px 0;
    }

    .menu {
        margin-top: 20px;
    }

    .menu-items{
        padding: 10px;
        color: #008B7B;
        cursor: pointer;
        display: block;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        transition: background-color 0.3s ease, color 0.3s ease; /* Add smooth transition */
    }

    .menu-items a {
        color: inherit;
        text-decoration: none;
        display: block;
        width: 100%;
    }

    .menu-items:hover:hover {
        background-color: #008B7B;
        color: white;
    }

    .menu-item {
        padding: 10px;
        color: #008B7B;
        cursor: pointer;
        display: block;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }
    /**centering content */
    .content {
        flex: 1;
        height: auto;
        margin-top: 80px; 
        margin-left: 250px;
        
    }

    .dataTables_wrapper .dataTables_filter input{
        margin-bottom: 8px;
    }

    .tableTitle {
        text-align: left;
        color: #008B7B;
        font-size: 22px;
        font-weight: bold;
    }

</style>
<body>
    <div class="sidebar" id="sidebar">
        <div class="menu">
            <div class="menu-items"><a href="../patient/guest_dashboard.php">Available Schedule</a></div>
            <div class="menu-items" ><a href="../patient/guest_make_appointment.php">Make Appointment</a></div>
            <div class="menu-items" ><a href="../patient/guest_my_schedule.php">My Schedule</a></div>
            <div class="menu-items" ><a href="../patient/guest_booknow.php">Go Back</a></div>
        </div>
    </div>

</body>
</html>
