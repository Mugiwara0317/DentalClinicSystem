<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
    <title>Appointment Schedule</title>
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

    footer{
        margin-top: 20px !important;
    }

    #calendar {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    background-color: white;
    border-radius: 10px;
    }

    form {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    button {
        margin-right: 10px;
    }
    h3 {
        text-align: center;
        color: #008B7B;
    }

    /* Change the background color of the entire calendar */
    .fc {
        background-color: #f7f7f7; /* Light gray background */
    }

    /* Change the header title and button colors */
    .fc-toolbar-title {
        color: #008B7B;
        font-size: 24px;
        font-weight: bold;
    }

    .fc-button {
        background-color: #008B7B !important;
        color: white !important;
        border: none;
        text-transform: capitalize !important;
        cursor: pointer;
        opacity: 1 !important;
    }

    /* Change hover color of buttons */
    .fc-button:hover {
        background-color: #006F63 !important;
    }

    /* Style for individual days (cells) */
    .fc-daygrid-day {
        border: 1px solid #ddd;
        font-size: 14px;
        
    }

    /* Highlight today's date */
    .fc-day-today {
        background-color: #77C3B2 !important;
        color: white !important;
    }

    /* Customize events */
    .fc-event {
        background-color: #007bff !important;
        border: none !important;
        color: white !important;
        padding: 5px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Customize hovered events */
    .fc-event:hover {
        background-color: #0056b3 !important;
    }
    /* Remove underline from links inside the day grid cells */
    .fc-daygrid-day a {
        text-decoration: none;
        color: #969696;
    }

    /* Remove underline from links inside header cells */
    a {
        text-decoration: none !important;
        color: #969696;
    }

    .modal-backdrop.show {
        z-index: 1040;
    }

    .modal.show {
        z-index: 1050;
    }

    #secondModal.show {
        z-index: 1060;
    }
    .input-group {
        margin: 10px;
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
    <div style="display: flex; margin: 15px;">
        <!-- Calendar on the left side -->
        <div id="calendar" style="width: 70%; padding: 20px;"></div>

        
        <!-- Schedule form on the right side -->
        <div style="width: 30%; padding: 20px; background-color: #f7f7f7;">

        <div class="d-flex justify-content-center">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createScheduleModal" style="width: 75%; margin-bottom: 5px;">Create Schedule</button>
        </div>
        
            <form id="scheduleForm">
            <h3>Create Walk-in</h3>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="date" disabled />
                </div>
                <div class="mb-3">
                    <label for="service" class="form-label">Service</label>
                    <select class="form-select" id="service">
                        <option>Tooth Extraction</option>
                        <option>Cleaning</option>
                        <option>Braces</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Start/End Time</label>
                    <input type="text" class="form-control" id="time" placeholder="Start Time - End Time" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Registered Client?</label>
                    <div>
                        <input type="radio" id="unregistered" name="clientStatus" value="Unregistered" checked>
                        <label for="unregistered">Unregistered</label>
                    </div>
                    <div>
                        <input type="radio" id="registered" name="clientStatus" value="Registered">
                        <label for="registered">Registered</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Not Registered" />
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" />
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Service Price</label>
                    <input type="text" class="form-control" id="price" value="3,000" />
                </div>
                <div class="mb-3">
                    <label for="reservationFee" class="form-label">Reservation Fee</label>
                    <input type="text" class="form-control" id="reservationFee" value="100" />
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Appoint</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- information modal -->
    <div class="modal fade" id="informationModal" tabindex="-1" aria-labelledby="informationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="informationModalLabel">Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" class="form-control" id="sched" value="" placeholder="Enter Schedule dynamically">
                    <button type="button" class="btn btn-info" id="openSecondModal">
                        Show
                    </button>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" id="sched" value="" placeholder="Enter Schedule dynamically">
                    <button type="button" class="btn btn-info" id="openSecondModal">
                        Show
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Second Modal -->
    <div class="modal fade" id="secondModal" tabindex="-1" aria-labelledby="secondModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="secondModalLabel">Second Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Content of the second modal.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- modal for create schedule-->
    <div class="modal fade" id="createScheduleModal" tabindex="-1" aria-labelledby="createScheduleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createScheduleModalLabel">Create Schedule</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="firstName" value="" >
                    </div>
                    <div class="mb-3">
                        <label for="middleName" class="form-label">Start/End Time:</label>
                        <input type="time" class="form-control" id="middleName" value="" >
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Success</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal for re-schedule-->
    <div class="modal fade" id="reScheduleModal" tabindex="-1" aria-labelledby="reScheduleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reScheduleModalLabel">Re-Schedule</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="services" class="form-label">Services:</label>
                        <input type="text" class="form-control" id="services" value="Bunot" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Select Available Date:</label>
                        <input type="date" class="form-control" id="date" value="" >
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Select Available Time:</label>
                        <input type="time" class="form-control" id="time" value="" >
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

    <div class="table-container">
        <h1 class="tableTitle">All Appointments</h1>
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
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reScheduleModal">Re-Schedule</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>John LightSmith</td>
                    <td>Braces</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reScheduleModal">Re-Schedule</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>John Light Smith</td>
                    <td>Tooth Cleaning</td>
                    <td>dd/mm/yyyy 9:30am</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reScheduleModal">Re-Schedule</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>John Light Smith</td>
                    <td>Bunot</td>
                    <td>dd/mm/yyyy 1:30pm</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reScheduleModal">Re-Schedule</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>John LightSmith</td>
                    <td>Braces</td>
                    <td>dd/mm/yyyy 10:30am</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reScheduleModal">Re-Schedule</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>John Light Smith</td>
                    <td>Tooth Cleaning</td>
                    <td>dd/mm/yyyy 9:30am</td>
                    <td>dd/mm/yyyy 2:30pm</td>
                    <td>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reScheduleModal">Re-Schedule</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    
    <script>

        document.getElementById('openSecondModal').addEventListener('click', function () {
            // Open the second modal programmatically
            var secondModal = new bootstrap.Modal(document.getElementById('secondModal'));
            secondModal.show();

            // Make sure the first modal stays open by removing the 'fade' class from the first modal
            document.getElementById('informationModal').classList.remove('fade');
        });

        document.getElementById('secondModal').addEventListener('hidden.bs.modal', function () {
            // Keep the first modal open when the second modal is closed
            var informationModal = new bootstrap.Modal(document.getElementById('informationModal'));
            informationModal.show();

            // If both modals are closed, enable scrolling by removing the 'modal-open' class
            if (!document.getElementById('informationModal').classList.contains('show')) {
                document.body.classList.remove('modal-open');
            }
        });

         // Trigger to close the first modal and open the second one
        document.getElementById('openSecondModal').addEventListener('click', function () {
            // Close the first modal programmatically
            var informationModal = bootstrap.Modal.getInstance(document.getElementById('informationModal'));
            informationModal.hide(); // Close the first modal

            // After the first modal is hidden, open the second modal
            var secondModal = new bootstrap.Modal(document.getElementById('secondModal'));
            secondModal.show();
        });

        document.getElementById('informationModal').addEventListener('hidden.bs.modal', function () {
            // Remove any remaining backdrop manually when the first modal is closed
            var backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.remove();  // Remove the backdrop element
            }

            // Enable scrolling by removing the 'modal-open' class when the first modal is closed
            document.body.classList.remove('modal-open');
        });

        // FullCalendar Script
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true,
                dateClick: function(info) {
                    // When a date is clicked, populate the form with the selected date
                    document.getElementById('date').value = info.dateStr;
                },
                events: [
                    {
                        title: 'Braces',
                        start: '2024-10-02T13:00:00',
                        end: '2024-10-02T17:00:00',
                        color: '#007bff'
                    },
                    {
                        title: 'Tooth Extraction',
                        start: '2024-10-02T08:00:00',
                        end: '2024-10-02T12:00:00',
                        color: '#198754'
                    },
                    {
                        title: 'Cleaning',
                        start: '2024-10-07T08:00:00',
                        end: '2024-10-07T12:00:00',
                        color: '#198754'
                    }
                ],
                eventClick: function(info) {
                    // Open the first modal programmatically when an event is clicked
                    var informationModal = new bootstrap.Modal(document.getElementById('informationModal'));
                    informationModal.show();
                }
            });

            calendar.render();
        });

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