<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Followup Request</title>
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
</style>
<body>
    <?php 
        include "../navigators/patient_sidebar.php";
        include "../navigators/patient_header.php";
    ?>

    <div class="content">
        <div class="sub-nav">
            <p>Dashboard | </p>
            <p class="highlighted">Appointments | </p>
            <p>Profile</p>
        </div>

        <div class="table-container">
            <table id="myTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patient Name</th>
                        <th>Services</th>
                        <th>Followup Service For</th>
                        <th>Appointment Date/Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td>1</td>
                        <td>John Light Smith</td>
                        <td>Adjust</td>
                        <td>Braces</td>
                        <td>dd/mm/yyyy  10:30pm - 3:30pm</td>
                        <td>
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn btn-danger">Decline</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>John Light Smith</td>
                        <td>Check-up</td>
                        <td>Teeth Extraction</td>
                        <td>dd/mm/yyyy  10:30pm - 3:30pm</td>
                        <td>
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn btn-danger">Decline</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>John Light Smith</td>
                        <td>Check-up</td>
                        <td>Bunot</td>
                        <td>dd/mm/yyyy  10:30pm - 3:30pm</td>
                        <td>
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn btn-danger">Decline</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>John Light Smith</td>
                        <td>Check-up</td>
                        <td>Tooth Cleaning</td>
                        <td>dd/mm/yyyy  10:30pm - 3:30pm</td>
                        <td>
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn btn-danger">Decline</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>John Light Smith</td>
                        <td>Adjust</td>
                        <td>Braces</td>
                        <td>dd/mm/yyyy  10:30pm - 3:30pm</td>
                        <td>
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn btn-danger">Decline</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>John Light Smith</td>
                        <td>Check-up</td>
                        <td>Bunot</td>
                        <td>dd/mm/yyyy  10:30pm - 3:30pm</td>
                        <td>
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn btn-danger">Decline</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

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
        </script>

    </div>

    <?php 
        include "../navigators/admin_footer.php";
    ?>
</body>
</html>