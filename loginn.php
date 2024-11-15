<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="loginnn.css">
</head>
<body>
<div class="from"> 
        <i class="fa-brands fa-spotify"></i>
        <i class="fa-brands fa-google"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-apple"></i>
        <i class="fa-solid fa-phone"></i>

     <h1>   Log in to Spotify
    </h1>
    <button class=" go"><a href="https://www.google.com">Continue with Google </a></button>
    <button id="fa"><a href="https://www.facebook.com">Contionue with facebook </a></button>
    <button class="ap"> <a href="https://www.apple.com">Continue with Apple </a></button>
    <button class="nu"><a href="reset.html">Continue with phone number </a></button>
    <div id="d"></div>
   

    <?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", "", "music_db");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Escape special characters for security
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Insert user data into the database
    $query = "INSERT INTO login_in( email,password) VALUES ( '$email', '$password')";

    if ($mysqli->query($query)) {
        echo "Registration successful!";
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}
?>

    <form action="loginn.php" method="POST">
        <label for="email" id="email">email:</label>
        <input type="email" name="email" required id="gm" placeholder="email"><br>
        <br>
        <label for="password" id="pass">Password:</label>
        <input type="password" name="password" required id="pass2"placeholder="password"><br>
        <br>
        <button type="submit" name="login" id="log">Login</button>
        <a href="log_out.php">log out</a>
    </form>
    <p id="p1">remeber me</p>

    <div class="container">
    <input type="checkbox" id="check">
    <label for="check" id="off"></label>

</div>
</div>

</body>
</html>