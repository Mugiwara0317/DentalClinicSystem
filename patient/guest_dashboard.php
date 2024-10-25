<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
    <title>Guest Dashboard</title>
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }
    body{
        background: #F4F4F4 !important;
        display: flex;
        flex-direction: column;
        font-family: Arial, sans-serif;
    }
    
    #calendar {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    background-color: white;
    border-radius: 10px;
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
</style>
<body>
    <?php 
        include "../navigators/guest_header.php";
        include "../navigators/guest_sidebar.php";
    ?>
    <div class="content">
        
        <div style="display: flex; margin: 15px;">
            <!-- Calendar on the left side -->
            <div id="calendar" style="width: 100%; padding: 20px;"></div>
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
                        <input type="text" class="form-control" id="sched" value="ex. 8:00am - 9:00am" placeholder="Enter Schedule dynamically">
                        <button type="button" class="btn btn-primary" id="openSchedModal">
                            Your Schedule
                        </button>
                        <button type="button" class="btn btn-info" id="openShowModal">
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

        <!-- show Modal -->
        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showModalLabel">ex. 8:00am - 9:00am</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="service" class="form-label">Services:</label>
                        <input type="text" class="form-control" id="service" value="Ex. Teeth Extraction" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Patient Name:</label>
                        <input type="text" class="form-control" id="service" value="Unknown" disabled>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

        <!-- sched Modal -->
        <div class="modal fade" id="schedModal" tabindex="-1" aria-labelledby="schedModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="schedModalLabel">ex. 8:00am - 9:00am</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                            <label for="service" class="form-label">Services:</label>
                            <input type="text" class="form-control" id="service" value="Ex. Teeth Extraction" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Patient Name:</label>
                            <input type="text" class="form-control" id="service" value="John Light Smith" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Service Price:</label>
                            <input type="text" class="form-control" id="service" value="&#8369 6,500" disabled>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

        <script>

            //function for show modal
            document.getElementById('openShowModal').addEventListener('click', function () {
                // Open the second modal programmatically
                var showModal = new bootstrap.Modal(document.getElementById('showModal'));
                showModal.show();

                // Make sure the first modal stays open by removing the 'fade' class from the first modal
                document.getElementById('informationModal').classList.remove('fade');
            });

            document.getElementById('showModal').addEventListener('hidden.bs.modal', function () {
                // Keep the first modal open when the second modal is closed
                var informationModal = new bootstrap.Modal(document.getElementById('informationModal'));
                informationModal.show();

                // If both modals are closed, enable scrolling by removing the 'modal-open' class
                if (!document.getElementById('informationModal').classList.contains('show')) {
                    document.body.classList.remove('modal-open');
                }
            });

            // Trigger to close the first modal and open the second one
            document.getElementById('openShowModal').addEventListener('click', function () {
                // Close the first modal programmatically
                var informationModal = bootstrap.Modal.getInstance(document.getElementById('informationModal'));
                informationModal.hide(); // Close the first modal

                // After the first modal is hidden, open the second modal
                var showModal = new bootstrap.Modal(document.getElementById('showModal'));
                showModal.show();
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

            //function for sched modal
            document.getElementById('openSchedModal').addEventListener('click', function () {
                // Open the second modal programmatically
                var showModal = new bootstrap.Modal(document.getElementById('schedModal'));
                showModal.show();

                // Make sure the first modal stays open by removing the 'fade' class from the first modal
                document.getElementById('informationModal').classList.remove('fade');
            });

            document.getElementById('schedModal').addEventListener('hidden.bs.modal', function () {
                // Keep the first modal open when the second modal is closed
                var informationModal = new bootstrap.Modal(document.getElementById('informationModal'));
                informationModal.show();

                // If both modals are closed, enable scrolling by removing the 'modal-open' class
                if (!document.getElementById('informationModal').classList.contains('show')) {
                    document.body.classList.remove('modal-open');
                }
            });

            // Trigger to close the first modal and open the second one
            document.getElementById('openSchedModal').addEventListener('click', function () {
                // Close the first modal programmatically
                var informationModal = bootstrap.Modal.getInstance(document.getElementById('informationModal'));
                informationModal.hide(); // Close the first modal

                // After the first modal is hidden, open the second modal
                var showModal = new bootstrap.Modal(document.getElementById('schedModal'));
                showModal.show();
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
        </script>
    </div>
    <?php include '../navigators/admin_footer.php' ?>
</body>
</html>