<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>My Appointment</title>
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
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reschedModal">Re-Schedule</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>John LightSmith</td>
                        <td>Braces</td>
                        <td>dd/mm/yyyy 10:30am</td>
                        <td>dd/mm/yyyy 2:30pm</td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reschedModal">Re-Schedule</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>John Light Smith</td>
                        <td>Tooth Cleaning</td>
                        <td>dd/mm/yyyy 1:30pm</td>
                        <td>dd/mm/yyyy 2:30pm</td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reschedModal">Re-Schedule</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>John Light Smith</td>
                        <td>Bunot</td>
                        <td>dd/mm/yyyy 1:30pm</td>
                        <td>dd/mm/yyyy 2:30pm</td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reschedModal">Re-Schedule</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>John LightSmith</td>
                        <td>Braces</td>
                        <td>dd/mm/yyyy 10:30am</td>
                        <td>dd/mm/yyyy 2:30pm</td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reschedModal">Re-Schedule</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>John Light Smith</td>
                        <td>Tooth Cleaning</td>
                        <td>dd/mm/yyyy 9:30am</td>
                        <td>dd/mm/yyyy 2:30pm</td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reschedModal">Re-Schedule</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- modal for resched -->
        <div class="modal fade" id="reschedModal" tabindex="-1" aria-labelledby="reschedModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reschedModalLabel">Re-schedule</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="patient" class="form-label">Services:</label>
                                <input type="text" class="form-control" id="patient" value="" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Select Available Date:</label>
                                <select class="form-control" name="date" id="date">
                                    <option value="Oct/7/2024">Oct/7/2024</option>
                                    <option value="Oct/8/2024">Oct/8/2024</option>
                                    <option value="Oct/9/2024">Oct/9/2024</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Select Available Time:</label>
                                <select class="form-control" name="date" id="date">
                                    <option value="9:00am -  10:00am<">9:00am -  10:00am</option>
                                    <option value="10:00am -  11:00am">10:00am -  11:00am</option>
                                    <option value="11:00am -  12:00pm">11:00am -  12:00pm</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save Changes</button>
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