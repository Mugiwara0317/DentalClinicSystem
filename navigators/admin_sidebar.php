<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Happy Smile Dental Clinic Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            transition: margin-left 0.3s; /* Smooth transition for sidebar */
        }

        .sidebar {
            width: 16%;
            height: 100vh;
            background-color: #f5f5f5;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            left: 0;
            top: 0;
            transition: width 0.3s; /* Smooth transition for width */
        }

        .sidebar.closed {
            width: 50px; /* Width when sidebar is closed */
        }

        .logo, img {
            width: 75px;
            height: 70px;
            background-color: transparent;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: block; /* Ensure the logo is always visible */
        }

        h1 {
            text-align: center;
            font-size: 1em;
            color: #008B7B;
            margin: 20px 0;
            display: block; /* Ensure title is visible when opened */
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
            overflow: hidden;
            padding: 10px;
            color: #008B7B;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-item a,
        .sub-menu-item a {
            color: inherit; /* Use the color of the parent element */
            text-decoration: none; /* Remove underline */
            flex-grow: 1; /* Make the link fill the space */
        }

        .menu-item:hover,
        .sub-menu-item:hover,
        .menu-item.active,
        .sub-menu-item.active {
            background-color: #008B7B; /* Keep the hover background */
            color: white; /* Change text color to white */
        }

        .menu-item.active a,
        .sub-menu-item.active a {
            color: white; /* Ensure links inside remain white */
        }

        .collapsible-content {
            display: none;
            padding-left: 20px;
        }

        .sub-menu-item {
            overflow: hidden;
            padding: 10px;
            color: #008080;
            cursor: pointer;
        }

        .sub-menu-item a {
            color: inherit; /* Inherit color from parent */
        }

        .sub-menu-item:hover {
            background-color: #008080;
            color: white;
        }

        .arrow {
            font-size: 0.8em; /* Adjust arrow size */
        }

        /* Styles for the toggle button */
        .toggle-btn {
            position: absolute;
            top: 20px;
            right: -18%; /* Position it outside the sidebar */
            background-color: transparent;
            color: black;
            border: none;
            cursor: pointer;
            font-size: 1.5em;
            transition: right 0.3s; 
        }

        .sidebar.closed .toggle-btn {
            right: -40%;
        }
        
        /* Icon styles for collapsed menu */
        .menu-item .icon,
        .sub-menu-item .icon {
            margin-right: 10px; /* Space between icon and text */
        }

        .sidebar.closed .menu-item span,
        .sidebar.closed .sub-menu-item span {
            display: none; /* Hide text labels when sidebar is closed */
        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <img src="../images/logo.png" alt="">
        </div>
        <h1>HAPPY SMILE DENTAL CLINIC</h1>
        
        <div class="menu">
            <div class="menu-item" onclick="setActive(this)"><a href="#"><i class="fas fa-tachometer-alt icon"></i> <span>Dashboard</span></a></div>
            <div class="menu-item collapsible" onclick="toggleCollapse('clients', this); setMenuActive(this);">
                <i class="fas fa-user-friends icon"></i> <span>About Clients</span>
                <span class="arrow down">&#9662;</span> <!-- Down Arrow -->
                <span class="arrow up" style="display: none;">&#9652;</span> <!-- Up Arrow -->
            </div>
            <div class="collapsible-content" id="clients">
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#"><i class="fas fa-address-book icon"></i> <span>All Clients</span></a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#"><i class="fas fa-archive icon"></i> <span>Archived Clients</span></a></div>
            </div>
            <div class="menu-item collapsible" onclick="toggleCollapse('appointments', this); setMenuActive(this);">
                <i class="fas fa-calendar-check icon"></i> <span>About Appointments</span>
                <span class="arrow down">&#9662;</span> <!-- Down Arrow -->
                <span class="arrow up" style="display: none;">&#9652;</span> <!-- Up Arrow -->
            </div>
            <div class="collapsible-content" id="appointments">
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#"><i class="fas fa-calendar-alt icon"></i> <span>Appointments Schedule</span></a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#"><i class="fas fa-calendar-day icon"></i> <span>Today Appointments</span></a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#"><i class="fas fa-exclamation-circle icon"></i> <span>Unattended Appointments</span></a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#"><i class="fas fa-history icon"></i> <span>Appointments History</span></a></div>
            </div>
            <div class="menu-item" onclick="setActive(this)"><a href="#"><i class="fas fa-user icon"></i> <span>Profile</span></a></div>
        </div>
        <button class="toggle-btn" onclick="toggleSidebar()">&#9776;</button>
    </div>

    

    <script>
    // Function to toggle the collapsible content and save its state
    function toggleCollapse(id, element) {
        const content = document.getElementById(id);
        const arrowDown = element.querySelector('.arrow.down');
        const arrowUp = element.querySelector('.arrow.up');

        if (content.style.display === "block") {
            content.style.display = "none";
            arrowDown.style.display = "inline"; // Show down arrow
            arrowUp.style.display = "none"; // Hide up arrow
            localStorage.setItem(id, "closed"); // Save state as closed
            element.classList.remove("active"); // Remove active class
        } else {
            content.style.display = "block";
            arrowDown.style.display = "none"; // Hide down arrow
            arrowUp.style.display = "inline"; // Show up arrow
            localStorage.setItem(id, "open"); // Save state as open
            element.classList.add("active"); // Add active class
        }
    }

    // Function to initialize the state based on localStorage
    function initializeCollapsibleState() {
        const collapsibleSections = document.querySelectorAll('.collapsible');

        collapsibleSections.forEach(section => {
            const id = section.getAttribute('onclick').match(/'([^']+)'/)[1]; // Extract ID from onclick attribute
            const content = document.getElementById(id);
            const arrowDown = section.querySelector('.arrow.down');
            const arrowUp = section.querySelector('.arrow.up');
            const state = localStorage.getItem(id); // Get the stored state

            if (state === "open") {
                content.style.display = "block"; // Open section
                arrowDown.style.display = "none"; // Hide down arrow
                arrowUp.style.display = "inline"; // Show up arrow
                section.classList.add("active"); // Keep hover style
            }
        });
    }

    // Function to set the active state for sub-menu items
    function setActive(element) {
        const allSubMenuItems = document.querySelectorAll('.sub-menu-item');
        allSubMenuItems.forEach(item => item.classList.remove('active')); // Remove active class from all
        element.classList.add('active'); // Add active class to the clicked item

        const allMenuItems = document.querySelectorAll('.menu-item');
        allMenuItems.forEach(item => item.classList.remove('active')); // Remove active class from all
        element.classList.add('active');

        const parentMenuItem = element.closest('.collapsible-content').previousElementSibling;
        if (parentMenuItem) {
            parentMenuItem.classList.add('active'); // Add active class to parent menu item
        }
    }

    // Function to toggle the sidebar
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('closed'); // Toggle closed class

        // Adjust the body margin when sidebar is closed
        
    }

    // Initialize the collapsible states when the page loads
    document.addEventListener("DOMContentLoaded", initializeCollapsibleState);
    </script>

</body>
</html>
