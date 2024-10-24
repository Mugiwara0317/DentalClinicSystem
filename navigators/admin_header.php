<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>admin header</title>
</head>
<style>
    .header-box {
        background-color: #F8F9FA;
        width: 100%;
        height: 58px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }
    .header-box .material-icons {
        margin-left: 20px;
        margin-right: 20px;
    }
    .admin {
        margin-left: 20px;
        margin-right: -20px;
    }
</style>
<body>
    <div class="header">
        <div class="header-box">
            <span class="material-icons" style="background: #008B7B; border-radius: 50%;">notifications</span>
            <span class="material-icons">account_circle</span>
            <span class="admin" style="color: #FBAF0A;">Admin</span>
            <span class="material-icons" style="color: #6C757D;">arrow_drop_down</span>
        </div>
    </div>
</body>
</html>