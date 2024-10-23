<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<style>
    body{
        background: #F4F4F4;
    }

    /**centering content */
    .content {
        height: 1000px;
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

    .cards{
        width: 100%;
        display: flex;
        justify-content: space-around;
    }
    .card{
        width: 200px;
        margin: 10px;
        display: grid;
        grid-template-columns: auto auto auto;
        padding: 10px;
    }
    .card p {
        font-size: 14px;
        text-align: left;
        grid-column: span 2;
    }
    .card label {
        text-align: center;
        grid-column: span 2;
    }
    .card span {
        font-size: 30px;
        grid-row: span 2;
        justify-content: center;
    }

    .chart-container {
    width: 100%;
    display: flex;
    justify-content: space-around; /* Spread the charts evenly */
    
    margin: 0 auto;
}

.chart-box {
    width: 48%; /* Set default width for larger screens */
    height: auto;
    margin: 20px;
}

/* Responsive layout for smaller screens */
@media (max-width: 1200px) {
    .chart-box {
        width: 100%; /* Full width on medium screens */
        margin: 10px 0;
    }
}

@media (max-width: 768px) {
    .chart-box {
        width: 100%; /* Full width on small screens */
        margin: 10px 0;
    }

    .chart-container {
        flex-direction: column; /* Stack charts vertically */
        align-items: center; /* Center the charts */
    }
}

@media (max-width: 576px) {
    .chart-box {
        width: 100%; /* Full width on extra small screens */
        margin: 5px 0;
    }

    .chart-container {
        flex-direction: column; /* Stack charts vertically */
        padding: 10px;
    }
}

    .services {
        text-align: left;
        color: #008B7B;
        font-size: 22px;
        font-weight: bold;
    }

    .table-container {
        width: 97%;
        margin: 20px;
        padding: 10px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 15px;
        text-align: left;
    }

    th {
        background-color: #333;
        color: white;
        border-bottom: 2px solid #008B7B;
    }

    td {
        border-bottom: 1px solid #ddd;
    }

    td:nth-child(1), th:nth-child(1) {
        width: 50px;
        text-align: center;
        font-weight: bold;
    }

    .reschedule-btn {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }

    .reschedule-btn:hover {
        background-color: #0056b3;
    }

    .btn {
        background: #0D6EFD;
        color: white;
        float: right;
        margin: 20px;
    }
</style>
<body>
<?php 
    include "../navigators/admin_sidebar.php";
    include "../navigators/admin_header.php";
?>

<div class="content">
        
    
    <div class="sub-nav">
        <p class="highlighted">Dashboard | </p>
        <p>About Clients | </p>
        <p>About Appointments | </p>
        <p>Profile</p>
    </div>
    <div class="cards">
        <div class="card registered-clients">
            <p>Total Registered Clients:</p>
            <span class="material-icons">person</span>
            <label>3</label>
        </div>
        <div class="card registered-clients">
            <p>Total Registered Clients:</p>
            <span class="material-icons">person</span>
            <label>3</label>
        </div>
        <div class="card registered-clients">
            <p>Total Registered Clients:</p>
            <span class="material-icons">person</span>
            <label>3</label>
        </div>
        <div class="card registered-clients">
            <p>Total Registered Clients:</p>
            <span class="material-icons">person</span>
            <label>3</label>
        </div>
    </div>

    <div class="chart-container">
        <!-- Total Revenue Bar Chart -->
        <div class="chart-box">
            <canvas id="revenueChart"></canvas>
        </div>

        <!-- Visitor Insights Line Chart -->
        <div class="chart-box">
            <canvas id="visitorChart"></canvas>
        </div>
    </div>

    
    
    <form action="">
        <div class="table-container">
        <h1 class="services">Services</h1>
        <input type="button" class="btn" value="Add Services">
        <table id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Service</th>
                    <th>Start Date/Time</th>
                    <th>End Date/Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <tr>
                    <td>1</td>
                    <td>John Light Smith</td>
                    <td>Bunot</td>
                    <td>dd/mm/yyyy 1:30pm</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td><button class="reschedule-btn">Re-Schedule</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>John LightSmith</td>
                    <td>Braces</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td>dd/mm/yyyy 3:30pm</td>
                    <td><button class="reschedule-btn">Re-Schedule</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>John Light Smith</td>
                    <td>Tooth Cleaning</td>
                    <td>dd/mm/yyyy 9:30am</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td><button class="reschedule-btn">Re-Schedule</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Light Smith</td>
                    <td>Bunot</td>
                    <td>dd/mm/yyyy 1:30pm</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td><button class="reschedule-btn">Re-Schedule</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>John LightSmith</td>
                    <td>Braces</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td>dd/mm/yyyy 3:30pm</td>
                    <td><button class="reschedule-btn">Re-Schedule</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>John Light Smith</td>
                    <td>Tooth Cleaning</td>
                    <td>dd/mm/yyyy 9:30am</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td><button class="reschedule-btn">Re-Schedule</button></td>
                </tr>
            </tbody>
        </table>
    </form>
    
</div>
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    
    $(document).ready(function() {
        $('#myTable').DataTable({
            paging: true, // Enable pagination
            pageLength: 10, // Number of rows per page
            lengthMenu: [5, 10, 25, 50], // Options for rows per page
            searching: true, // Enable the search box
            ordering: true, // Enable sorting on columns
            info: true, // Display "Showing X to Y of Z entries"
            dom: 'lfrtip' // Remove buttons, keep pagination, search, and table layout
        });
    });

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

    const data = {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            datasets: [
                {
                    label: 'Walk-in',
                    backgroundColor: '#3b82f6',
                    data: [12000, 15000, 23000, 18000, 14000, 20000, 25000],
                    borderRadius: 5,
                },
                {
                    label: 'Online',
                    backgroundColor: '#10b981',
                    data: [10000, 14000, 16000, 14000, 16000, 15000, 12000],
                    borderRadius: 5,
                }
            ]
        };

        // Data for the Revenue Bar Chart
        const revenueData = {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            datasets: [
                {
                    label: 'Walk-in',
                    backgroundColor: '#3b82f6',
                    data: [12000, 15000, 23000, 18000, 14000, 20000, 25000],
                    borderRadius: 5,
                },
                {
                    label: 'Online',
                    backgroundColor: '#10b981',
                    data: [10000, 14000, 16000, 14000, 16000, 15000, 12000],
                    borderRadius: 5,
                }
            ]
        };

        // Data for the Visitor Insights Line Chart
        const visitorData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Walk-in',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    data: [200, 300, 250, 350, 400, 300, 150, 250, 300, 400, 320, 280],
                    fill: false,
                    tension: 0.4,
                    pointRadius: 4,
                    borderWidth: 3,
                },
                {
                    label: 'Online',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    data: [150, 250, 300, 320, 350, 400, 380, 350, 340, 370, 380, 390],
                    fill: false,
                    tension: 0.4,
                    pointRadius: 4,
                    borderWidth: 3,
                }
            ]
        };

        // Bar chart configuration
        const revenueConfig = {
            type: 'bar',
            data: revenueData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                        text: 'Total Revenue',
                        font: {
                            size: 18
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 26000,
                        ticks: {
                            stepSize: 5000
                        }
                    }
                }
            }
        };

        // Line chart configuration
        const visitorConfig = {
            type: 'line',
            data: visitorData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                        text: 'Visitor Insights',
                        font: {
                            size: 18
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 500,
                        ticks: {
                            stepSize: 100
                        }
                    }
                }
            }
        };

        // Render both charts
        const revenueChart = new Chart(
            document.getElementById('revenueChart'),
            revenueConfig
        );

        const visitorChart = new Chart(
            document.getElementById('visitorChart'),
            visitorConfig
        );

</script>

<?php 
    include "../navigators/admin_footer.php";
?>
</body>

</html>