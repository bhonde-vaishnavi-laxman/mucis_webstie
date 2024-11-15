<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: loginn.php");
exit();
?>

</body>
</html>