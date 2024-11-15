
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="signn.css">
    <style>
        .fa-spotify{
            font-size: 80px;
            color: green;
           position: relative;
           left: 300px;
           top: 10px;

}
.fa-google{
    position: relative;
    top: 460px;
    left: 130px;
    color: brown;
   

}
.fa-facebook{
    
    position: relative;
    top: 500px;
    left: 110px;
    background-color: blue;
    color: whitesmoke;

}
.fa-apple{
    
    position: relative;
    top: 540px;
    left: 90px;
    color: red;
    font-size: 25px;


}
.fa-phone{
    
    position: relative;
    top: 580px;
    left: 70px;
    color: gray;

}
    </style>
</head>
<body>
<div class="from">
        
        <i class="fa-brands fa-spotify"></i>
        <i class="fa-brands fa-google"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-apple"></i>
        <i class="fa-solid fa-phone"></i>

    <h1>Sign Up to start <br> listening</h1>
    
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
    $query = "INSERT INTO sign(email, password) VALUES ( '$email','$password')";

    if ($mysqli->query($query)) {
        echo "Registration successful!";
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}
?>

<form action="sing.php" method="post">
    <label>Email:</label><br>
    <input type="email" placeholder="email" name="email" required><br>
    <label>Password:</label><br>
    <input type="password" placeholder="password" name="password" required><br>
    <button type="submit"class="next">Sign Up</button>
    <div id="bro">
    </div>
    <p id="or">or</p>
    <div id="bro1"> </div>
    

</form>
    </div>
    <button class=" go"><a href="https://www.google.com">Continue with Google </a></button>
    <button id="fa"> <a href="https://ww.facebook.com">Contionue with facebook</a></button>
    <button class="ap"><a href=" https://www.apple.com">Continue with Apple</a></button>
    <button class="nu"><a href="reset.html">Continue with phone number</a></button>
    
<div class="page">
<p id="p">Already have an accound?</p><a href="loginn.php" id="in">Log in here</a>
</div>
</div>


</body>
</html>