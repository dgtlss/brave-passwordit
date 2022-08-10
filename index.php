<!DOCTYPE html>
<?php
// check if the user is logged in
// if they aren't logged in send them to the login page
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: /login.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brave Password Manager</title>
    <link rel="stylesheet" href="/dist/output.css">
</head>
<body>
    
    <script src="/dist/js/jquery.min.js"></script>
    <script src="/dist/js/app.js"></script>
</body>
</html>