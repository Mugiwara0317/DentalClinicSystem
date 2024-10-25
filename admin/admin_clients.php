<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registered Clients</title>
</head>
<style>
    body{
        background: #F4F4F4;
    }

    footer {
        margin-top:90px !important;
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

    .record {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 7px 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        text-decoration: none;
    }
    .more {
        background-color: #198754;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }
    .archieved {
        background-color: #DC3545;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }

    .record:hover {
        background-color: #0056b3;
    }
    .more:hover {
        background-color: #006F63;
    }
    .archieved:hover {
        background-color: #B02A37;
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
                    <th>Address</th>
                    <th>Cellphone #</th>
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
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <a href="admin_clients_record.php" class="record">Record</a>
                        <button class="more" data-bs-toggle="modal" data-bs-target="#moreInfoModal">More Info</button>
                        <button class="archieved">Archieved</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>John LightSmith</td>
                    <td>Braces</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td>dd/mm/yyyy 3:30pm</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="record">Record</button>
                        <button class="more" data-bs-toggle="modal" data-bs-target="#moreInfoModal">More Info</button>
                        <button class="archieved">Archieved</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>John Light Smith</td>
                    <td>Tooth Cleaning</td>
                    <td>dd/mm/yyyy 9:30am</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="record">Record</button>
                        <button class="more" data-bs-toggle="modal" data-bs-target="#moreInfoModal">More Info</button>
                        <button class="archieved">Archieved</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>John Light Smith</td>
                    <td>Bunot</td>
                    <td>dd/mm/yyyy 1:30pm</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="record">Record</button>
                        <button class="more" data-bs-toggle="modal" data-bs-target="#moreInfoModal">More Info</button>
                        <button class="archieved">Archieved</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>John LightSmith</td>
                    <td>Braces</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td>dd/mm/yyyy 3:30pm</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="record">Record</button>
                        <button class="more" data-bs-toggle="modal" data-bs-target="#moreInfoModal">More Info</button>
                        <button class="archieved">Archieved</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>John Light Smith</td>
                    <td>Tooth Cleaning</td>
                    <td>dd/mm/yyyy 9:30am</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="record">Record</button>
                        <button class="more" data-bs-toggle="modal" data-bs-target="#moreInfoModal">More Info</button>
                        <button class="archieved">Archieved</button>
                    </td>
                </tr>
            </tbody>
        </table>
        
    <!-- modal for moreinfo-->
    <div class="modal fade" id="moreInfoModal" tabindex="-1" aria-labelledby="moreInfoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="moreInfoModalLabel">More Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First name:</label>
                        <input type="text" class="form-control" id="firstName" value="John" >
                    </div>
                    <div class="mb-3">
                        <label for="middleName" class="form-label">Middle Name:</label>
                        <input type="text" class="form-control" id="middleName" value="Light" >
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" value="Smith" >
                    </div>
                    <div class="mb-3">
                        <label for="suffix" class="form-label">Suffix:</label>
                        <input type="text" class="form-control" id="suffix" value="Suffix (Optional)" >
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth:</label>
                        <input type="text" class="form-control" id="dob" value="dd/mm/yyyy" >
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age:</label>
                        <input type="text" class="form-control" id="age" value="23" >
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender:</label>
                        <input type="text" class="form-control" id="gender" value="Male" >
                    </div>
                    <div class="mb-3">
                        <label for="occupation" class="form-label">Occupation:</label>
                        <input type="text" class="form-control" id="occupation" value="IT Professional" >
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Civil Status:</label>
                        <input type="text" class="form-control" id="status" value="Married" >
                    </div>
                    <div class="mb-3">
                        <label for="cellphone" class="form-label">Cellphone #:</label>
                        <input type="text" class="form-control" id="cellphone" value="12345687" >
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="address" value="Cavite" >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address:</label>
                        <input type="email" class="form-control" id="email" value="JohnSmithGmail.com" >
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- For modal -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

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

<?php 
    include "../navigators/admin_footer.php";
?>
</body>
</html>