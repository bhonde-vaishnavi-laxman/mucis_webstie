
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="regi.css">
</head>
<body>
    <div class="container">
        <?php 
        if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
 
            $errors = array();
            
            if (empty($fullName) || empty($email) || empty($password) || empty($passwordRepeat)) {
                array_push($errors, "All fields are required.");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Invalid email format.");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 characters long.");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Passwords do not match.");
            }

            require_once "database.php";
            $sql = "SELECT * FROM admin WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount > 0) {
                array_push($errors, "Email already exists!");
            }

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>" . htmlspecialchars($error) . "</div>";
                }
            } else {
                $sql = "INSERT INTO admin (full_name, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $password);
                    mysqli_stmt_execute($stmt);
                    session_start();
                    header("Location:home.php");
                } else {
                    echo "<div class='alert alert-danger'>Something went wrong. Please try again later.</div>";
                }
            }
        }
        ?>
        
        <i class="fa-brands fa-spotify"></i>
        <form action="registration.php" method="post">
            <h3>Register Now</h3>
            <div class="input">
                <input type="text" name="fullname" placeholder="Full Name:">
            </div>
            <div class="input">
                <input type="email" name="email" placeholder="Email:">
            </div>
            <div class="input">
                <input type="password" name="password" placeholder="Password:">
            </div>
            <div class="input">
                <input type="password" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="input">
                <input type="submit" value="Register Now" class="btn btn-primary" name="submit">
            </div>
        </form>
        <div>
            <pre>Already have an account?  <a href="log.html">Login Now</a></pre>
        </div>
    </div>
</body>
</html>
