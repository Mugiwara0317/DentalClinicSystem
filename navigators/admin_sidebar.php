<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Happy Smile Dental Clinic Dashboard</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        background-color: #f5f5f5;
        padding: 20px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        position: fixed;
    }

    .logo, img {
        width: 60px;
        height: 60px;
        background-color: #ccc;
        border-radius: 50%;
        margin: 0 auto 20px;
    }

    h1 {
        text-align: center;
        font-size: 1em;
        color: #008080;
        margin: 20px 0;
    }

    .dashboard {
        font-size: 1.2em;
        font-weight: bold;
        margin: 20px 0;
    }

    .menu {
        margin-top: 20px;
    }

    .menu-item {
        padding: 10px;
        color: #333;
        cursor: pointer;
        display: flex;
        justify-content: space-between; /* Align arrow and text */
        align-items: center; /* Center vertically */
    }

    .menu-item:hover {
        background-color: #e0e0e0;
    }

    .collapsible-content {
        display: none; /* Initially hide the collapsible content */
        padding-left: 20px; /* Indent sub-menu items */
    }

    .sub-menu-item {
        padding: 10px;
        color: #008080;
        cursor: pointer;
    }

    .sub-menu-item:hover {
        background-color: #008080;
        color: white;
    }

    .arrow {
        font-size: 0.8em; /* Adjust arrow size */
    }

</style>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="../images/logo.jpg" alt="">
        </div>
        <h1>HAPPY SMILE DENTAL CLINIC</h1>
        
        <div class="menu">
            <div class="menu-item">Dashboard</div>
            <div class="menu-item collapsible" onclick="toggleCollapse('clients', this)">
                About Clients
                <span class="arrow down">&#9662;</span> <!-- Down Arrow -->
                <span class="arrow up" style="display: none;">&#9652;</span> <!-- Up Arrow -->
            </div>
            <div class="collapsible-content" id="clients">
                <div class="sub-menu-item">All Clients</div>
                <div class="sub-menu-item">Archived Clients</div>
            </div>
            <div class="menu-item" onclick="toggleCollapse('appointments', this)">
                About Appointments
                <span class="arrow down">&#9662;</span> <!-- Down Arrow -->
                <span class="arrow up" style="display: none;">&#9652;</span> <!-- Up Arrow -->
            </div>
            <div class="collapsible-content" id="appointments">
                <div class="sub-menu-item">Appointments Schedule</div>
                <div class="sub-menu-item">Today Appointments</div>
                <div class="sub-menu-item">Unattended Appointments</div>
                <div class="sub-menu-item">Appointments History</div>
            </div>
            <div class="menu-item">Profile</div>
        </div>
    </div>

    <script>
        function toggleCollapse(id, element) {
            const content = document.getElementById(id);
            const arrowDown = element.querySelector('.arrow.down');
            const arrowUp = element.querySelector('.arrow.up');

            if (content.style.display === "block") {
                content.style.display = "none";
                arrowDown.style.display = "inline"; // Show down arrow
                arrowUp.style.display = "none"; // Hide up arrow
            } else {
                content.style.display = "block";
                arrowDown.style.display = "none"; // Hide down arrow
                arrowUp.style.display = "inline"; // Show up arrow
            }
        }
    </script>
</body>
</html>
