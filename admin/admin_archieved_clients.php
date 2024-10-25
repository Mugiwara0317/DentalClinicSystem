<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Archieved Clients</title>
</head>
<style>
    html, body {
        height: 100%; /* Make sure the html and body take up full height */
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }
    body{
        background: #F4F4F4;
        display: flex;
        flex-direction: column;
    }

    footer {
        margin-top:86px !important;
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

    .restore {
        background-color: #198754;
        color: white;
        border: none;
        padding: 7px 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        text-decoration: none;
    }
    .restore:hover {
        background-color: #167a4c;
    }

</style>
<body>
    <?php 
        include "../navigators/admin_sidebar.php";
        include "../navigators/admin_header.php";
    ?>

    <div class="content">
        <div class="sub-nav">
            <p>Dashboard | </p>
            <p class="highlighted">About Clients | </p>
            <p>About Appointments | </p>
            <p>Profile</p>
        </div>
        <div class="table-container">
        <table id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Cellphone #</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <tr>
                    <td>1</td>
                    <td>Will Smith</td>
                    <td>23</td>
                    <td>Male</td>
                    <td>09111111111</td>
                    <td>
                        <button class="restore">Invoice</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Chrlie Hill</td>
                    <td>25</td>
                    <td>Male</td>
                    <td>09111111111</td>
                    <td>
                        <button class="restore">Invoice</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dessa Pacupac</td>
                    <td>20</td>
                    <td>Female</td>
                    <td>09111111111</td>
                    <td>
                        <button class="restore">Invoice</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Dereck Aranas</td>
                    <td>45</td>
                    <td>Female</td>
                    <td>09111111111</td>
                    <td>
                        <button class="restore">Invoice</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Juan Dela Cruz</td>
                    <td>60</td>
                    <td>Male</td>
                    <td>09111111111</td>
                    <td>
                        <button class="restore">Invoice</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Pedro Penduko</td>
                    <td>8</td>
                    <td>Female</td>
                    <td>09111111111</td>
                    <td>
                        <button class="restore">Invoice</button>
                    </td>
                </tr>
            </tbody>
        </table>
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