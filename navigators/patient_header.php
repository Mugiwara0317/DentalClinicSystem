<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Admin Header</title>
    <style>
        .header-box {
            background-color: #F8F9FA;
            width: 100%;
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: flex-end; 
            position: relative;
        }
        .material-icons {
            margin-left: 20px;
            cursor: pointer;
        }
        .notification-box {
            display: none; 
            position: absolute;
            right: 100px; 
            top: 50px; 
            background: #F4F4F4;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            width: 300px; 
            z-index: 1000; 
            max-height: 250px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .no-highlight {
            user-select: none; 
        }
        .notification-box ul {
            margin: 0; 
            padding: 0; 
            list-style-type: none; 
        }
        
        .notification-box li {
            word-wrap: break-word; /
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-box">
            <span class="material-icons notification-icon no-highlight" onclick="openNotification(this)" id="notificationIcon" style="background: #008B7B; border-radius: 50%; padding: 3px;">notifications</span>
            <span class="material-icons account no-highlight">account_circle arrow_drop_down</span>
            <div class="notification-box" id="notificationBox">
                <h6>Notifications</h6>
                <hr>
                <ul>
                    <li>Notification 1aaaa aaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaa</li>
                    <li>Notification 2</li>
                    <li>Notification 3</li>
                    
                </ul>
            </div>
        </div>
    </div>
    <script>
        function openNotification(element){
            const notificationBox = document.getElementById('notificationBox');
                if (notificationBox.style.display === '' || notificationBox.style.display === 'none') {
                    notificationBox.style.display = 'block';
                } else {
                    notificationBox.style.display = 'none';
                }
        }
    </script>
</body>
</html>
