<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <title>admin sidebar</title>
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
        background-color: white;
        padding: 20px;
        position: fixed;
        transition: transform 0.3s ease; /* Smooth transition for opening/closing */
        z-index: 1000;
    }

    .sidebar.hidden {
        transform: translateX(-100%); /* Move sidebar out of view */
    }

    .logo, img {
        width: 75px;
        height: 70px;
        background-color: transparent;
        border-radius: 50%;
        margin: 0 auto 0;
        margin-top: -20px;
    }

    h1 {
        text-align: center;
        font-size: 1em;
        color: #008B7B;
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
        font-size: 1.5em; 
    }

    .toggle-btn {
        display: absolute;
        margin-left: 280px;
        margin-top: -8px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .toggle-btn .bar {
        width: 30px;
        height: 3px;
        background: black;
        margin: 5px auto;
        transition: all 0.3s ease;
    }
    footer {
        margin-top: -100%;
    }

</style>
<body>
    <div class="sidebar" id="sidebar">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </button>
        <div class="logo">
            <img src="../images/logo.png" alt="">
        </div>
        <h1>HAPPY SMILE DENTAL CLINIC</h1>
        
        <div class="menu">
            <div class="menu-item" onclick="setMenuActive(this)"><a href="#">Dashboard</a></div>
            <div class="menu-item collapsible" onclick="toggleCollapse('clients', this); setMenuActive(this);">
                About Clients
                <span class="arrow down material-icons">keyboard_arrow_down</span>
                <span class="arrow up material-icons" style="display: none;">keyboard_arrow_up</span>
            </div>
            <div class="collapsible-content" id="clients">
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#">All Clients</a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#">Archived Clients</a></div>
            </div>
            <div class="menu-item collapsible" onclick="toggleCollapse('appointments', this); setMenuActive(this);">
                About Appointments
                <span class="arrow down material-icons">keyboard_arrow_down</span>
                <span class="arrow up material-icons" style="display: none;">keyboard_arrow_up</span>
            </div>
            <div class="collapsible-content" id="appointments">
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#">Appointments Schedule</a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#">Today Appointments</a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#">Unattended Appointments</a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="#">Appointments History</a></div>
            </div>
            <div class="menu-item" onclick="setMenuActive(this)"><a href="#">Profile</a></div>
        </div>
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
        sidebar.classList.toggle('hidden'); // Toggle the 'hidden' class
    }

    // Initialize the collapsible states when the page loads
    document.addEventListener("DOMContentLoaded", initializeCollapsibleState);
    </script>

</body>
</html>
