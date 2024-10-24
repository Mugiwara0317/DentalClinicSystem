<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Client Records</title>
</head>
<style>
    body{
        background: #F4F4F4;
    }
    .table-container {
        width: 97%;
        margin: 20px;
        padding: 10px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    footer {
        margin-top:126px !important;
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
    .record:hover {
        background-color: #0056b3;
    }

    .invoice-header h4 {
        font-weight: bold;
        font-size: 1.5rem; /* Larger font for the amount */
    }

    .invoice-header .badge {
        font-size: 1rem; /* Size of the badge */
        margin-top: 10px;
    }

    .invoice-details p {
        margin-bottom: 10px;
        font-size: 1rem;
    }

    .modal-footer {
        justify-content: right; /* Center the Print button */
    }
    
</style>
<body>
<?php 
    include "../navigators/admin_sidebar.php";
    include "../navigators/admin_header.php";
?>

<div class="content">
<div class="table-container">
        <table id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Services</th>
                    <th>Appointment Date/Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <tr>
                    <td>1</td>
                    <td>Bunot</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="record" data-bs-toggle="modal" data-bs-target="#moreInfoModal">Invoice</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Braces</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="record" data-bs-toggle="modal" data-bs-target="#moreInfoModal">Invoice</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Tooth Cleaning</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="record" data-bs-toggle="modal" data-bs-target="#moreInfoModal">Invoice</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bunot</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="record" data-bs-toggle="modal" data-bs-target="#moreInfoModal">Invoice</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Braces</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="record" data-bs-toggle="modal" data-bs-target="#moreInfoModal">Invoice</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Tooth Cleaning</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="record" data-bs-toggle="modal" data-bs-target="#moreInfoModal">Invoice</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- invoice modal -->
        <div class="modal fade" id="moreInfoModal" tabindex="-1" aria-labelledby="moreInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg"> <!-- modal-lg for wider layout -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="moreInfoModalLabel">Transaction Invoice</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="invoice-header text-center mb-4">
                            <h4>&#8369 30,000</h4> <!-- Amount in larger text -->
                            <span class="badge bg-success">Success</span> <!-- Payment status badge -->
                        </div>

                        <hr>

                        <div class="invoice-details">
                            <div class="row">
                                <div class="col-md-6" >
                                    <p style="text-align: left;"><strong>Transaction Id</strong></p>
                                    <p style="text-align: left;"><strong>Client Name</strong></p>
                                    <p style="text-align: left;"><strong>Service</strong></p>
                                    <p style="text-align: left;"><strong>Appointment Date/Time</strong>/p>
                                    <p style="text-align: left;"><strong>Clinic Name</strong></p>
                                    <p style="text-align: left;"><strong>Payment Date/Time</strong></p>
                                    <p style="text-align: left;"><strong>Payment Method</strong></p>
                                </div>
                                <div class="col-md-6">
                                <p style="text-align: right;">10125659889</p>
                                <p style="text-align: right;">John Light Smith</p>
                                <p style="text-align: right;">Braces</p>
                                <p style="text-align: right;">dd/mm/yyyy 10:30am - 3:30pm<</p>
                                <p style="text-align: right;">Happy Smile Dental Clinic</p>
                                <p style="text-align: right;">Oct 22, 2024, 13:22:16</p>
                                <p style="text-align: right;">Cash</p>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="mb-3">
                            <label for="remark" class="form-label"><strong>Remark</strong></label>
                            <textarea class="form-control" id="remark" rows="3" disabled>Thank you!</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Print</button>
                    </div>
                </div>
            </div>
        </div>
            <!-- For modal -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
            <!-- Bootstrap CSS and JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            
            <!-- DataTables CSS -->
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

            <!-- DataTables JS -->
            <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

            <!-- for Chart -->
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
            </script>
</div>

<?php 
    include "../navigators/admin_footer.php";
?>
    
</body>
</html>