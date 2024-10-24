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

    .title {
        border: 0 0 1px 0 solid black;
        text-align: center;
        font-size: 14px;
        color: #008B7B;
        font-weight: bold;
    }

    .dashboard {
        font-size: 1.2em;
        font-weight: bold;
        margin: 20px 0;
    }

    .menu {
        margin-top: 20px;
    }

    .menu-items,
    .sub-menu-item {
        padding: 10px;
        color: #008B7B;
        cursor: pointer;
        display: block;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        transition: background-color 0.3s ease, color 0.3s ease; /* Add smooth transition */
    }

    .menu-items a,
    .sub-menu-item a {
        color: inherit;
        text-decoration: none;
        display: block;
        width: 100%;
    }

    .menu-items:hover, .menu-item:hover,
    .sub-menu-item:hover {
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

    /**centering content */
    .content {
        flex: 1;
        height: auto;
        margin-top: 0px; 
        margin-left: 250px;
        transition: margin-left 0.3s ease;
        
    }
    .content.sidebar-open {
        margin-left: 250px;
    }

    .content.sidebar-closed {
        width: 100%;
        margin-left: 1px; 
    }

    .sub-nav{
        display:flex;
    }
    .sub-nav p{
        margin-left: 5px;
    }
    .sub-nav .highlighted {
        color: #008B7B;

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
        <button class="toggle-btn" onclick="toggleSidebar()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </button>
        <div class="logo">
            <img src="../images/logo.png" alt="Logo">
        </div>
        <h1 class="title">HAPPY SMILE DENTAL CLINIC</h1>
        
        <div class="menu">
            <div class="menu-items" onclick="setMenuActive(this)"><a href="../admin/admin_dashboard.php">Dashboard</a></div>
            <div class="menu-item collapsible" onclick="toggleCollapse('clients', this); setMenuActive(this);">
                About Clients
                <span class="arrow down material-icons">keyboard_arrow_down</span>
                <span class="arrow up material-icons" style="display: none;">keyboard_arrow_up</span>
            </div>
            <div class="collapsible-content" id="clients">
                <div class="sub-menu-item" onclick="setActive(this)"><a href="../admin/admin_clients.php">Registered Clients</a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="../admin/admin_archieved_clients.php">Archived Clients</a></div>
            </div>
            <div class="menu-item collapsible" onclick="toggleCollapse('appointments', this); setMenuActive(this);">
                About Appointments
                <span class="arrow down material-icons">keyboard_arrow_down</span>
                <span class="arrow up material-icons" style="display: none;">keyboard_arrow_up</span>
            </div>
            <div class="collapsible-content" id="appointments">
                <div class="sub-menu-item" onclick="setActive(this)"><a href="../admin/admin_appointment_schedule.php">Appointments Schedule</a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="../admin/admin_today_appointment.php">Today Appointments</a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="../admin/admin_unattended_appointment.php">Unattended Appointments</a></div>
                <div class="sub-menu-item" onclick="setActive(this)"><a href="../admin/admin_appointments_history.php">Appointments History</a></div>
            </div>
            <div class="menu-items" onclick="setMenuActive(this)"><a href="../admin/admin_profile.php">Profile</a></div>
        </div>
    </div>

    <script>
    // Function to handle setting the active state for main menu items
    function setMenuActive(element) {
        // Remove active class from all menu items
        const allMenuItems = document.querySelectorAll('.menu-items');
        allMenuItems.forEach(item => item.classList.remove('active'));

        // Add active class to the clicked menu item
        element.classList.add('active');
    }

    // Function to handle setting the active state for sub-menu items
    function setActive(element) {
        // Remove active class from all sub-menu items
        const allSubMenuItems = document.querySelectorAll('.sub-menu-item');
        allSubMenuItems.forEach(item => item.classList.remove('active'));

        // Add active class to the clicked sub-menu item
        element.classList.add('active');
    }

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
        } else {
            content.style.display = "block";
            arrowDown.style.display = "none"; // Hide down arrow
            arrowUp.style.display = "inline"; // Show up arrow
            localStorage.setItem(id, "open"); // Save state as open
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
                section.classList.add("active"); // Keep active style
            }
        });
    }

    // Function to toggle the sidebar
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const content = document.querySelector('.content'); // Select the content area
        sidebar.classList.toggle('hidden'); // Toggle the 'hidden' class
        
        // Add or remove classes based on the sidebar's visibility
        if (sidebar.classList.contains('hidden')) {
            content.classList.remove('sidebar-open'); // Remove the open class
            content.classList.add('sidebar-closed'); // Add the closed class
        } else {
            content.classList.remove('sidebar-closed'); // Remove the closed class
            content.classList.add('sidebar-open'); // Add the open class
        }
    }

    // Initialize the collapsible states when the page loads
    document.addEventListener("DOMContentLoaded", initializeCollapsibleState);
</script>


</body>
</html>
