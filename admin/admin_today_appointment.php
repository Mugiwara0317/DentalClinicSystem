<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Today Appointments</title>
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

    .input-group {
        margin-left: 10px;
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
        <p>About Clients | </p>
        <p class="highlighted">About Appointments | </p>
        <p>Profile</p>
    </div>

    <div class="table-container">
        <table id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Services</th>
                    <th>Appointment Date/Time</th>
                    <th>Role</th>
                    <th>Process of Availing</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <tr>
                    <td>1</td>
                    <td>John Light Smith</td>
                    <td>Bunot</td>
                    <td>dd/mm/yyyy 1:30pm</td>
                    <td>Guest</td>
                    <td>Online</td>
                    <td>
                        <button class="btn btn-danger">Unattend</button>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#paidModal">Paid</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>John LightSmith</td>
                    <td>Braces</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td>Registered Patient</td>
                    <td>Walk-in</td>
                    <td>
                        <button class="btn btn-danger">Unattend</button>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#paidModal">Paid</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>John Light Smith</td>
                    <td>Tooth Cleaning</td>
                    <td>dd/mm/yyyy 1:30pm</td>
                    <td>Guest</td>
                    <td>Online</td>
                    <td>
                        <button class="btn btn-danger">Unattend</button>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#paidModal">Paid</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>John Light Smith</td>
                    <td>Bunot</td>
                    <td>dd/mm/yyyy 1:30pm</td>
                    <td>Guest</td>
                    <td>Walk-in</td>
                    <td>
                        <button class="btn btn-danger">Unattend</button>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#paidModal">Paid</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>John LightSmith</td>
                    <td>Braces</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td>Registered Patient</td>
                    <td>Walk-in</td>
                    <td>
                        <button class="btn btn-danger">Unattend</button>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#paidModal">Paid</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>John Light Smith</td>
                    <td>Tooth Cleaning</td>
                    <td>dd/mm/yyyy 9:30am</td>
                    <td>Registered Patient</td>
                    <td>Online</td>
                    <td>
                        <button class="btn btn-danger">Unattend</button>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#paidModal">Paid</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- modal for paid -->
    <div class="modal fade" id="paidModal" tabindex="-1" aria-labelledby="paidModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paidModal">Payment Area</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="transact" class="form-label">Transaction ID:</label>
                            <input type="text" class="form-control" id="transact" value="" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="client" class="form-label">Client Name:</label>
                            <input type="text" class="form-control" id="client" value="" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label">Service:</label>
                            <input type="text" class="form-control" id="service" value="" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label">Appointment Date/Time:</label>
                            <input type="text" class="form-control" id="service" value="" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="clinic-name" class="form-label">Clinic Name:</label>
                            <input type="text" class="form-control" id="clinic-name" value="" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="payment-date-time" class="form-label">Payment Date/Time:</label>
                            <input type="text" class="form-control" id="payment-date-time" value="">
                        </div>
                        <div class="mb-3 d-flex">
                            <div>
                                <label for="payment-method" class="form-label">Payment Method:</label>
                                <input type="text" class="form-control" id="payment-method" value="Cash" disabled>
                            </div>
                            <div>
                                <label for="amount" class="form-label">Amount:</label>
                                <div class="input-group">
                                    <span class="input-group-text">&#8369</span>
                                    <input type="number" class="form-control" id="amount" value="">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="remarks" class="form-label">Remarks:</label>
                            <textarea class="form-control" rows="4" name="remarks" id="remarks"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Print</button>
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
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
</div>

<?php 
    include "../navigators/admin_footer.php";
?>
    
</body>
</html>