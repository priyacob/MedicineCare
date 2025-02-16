<?php
include("../includes/db.php");
if(isset($_POST['submit']) && isset($_POST['submit']) != null) {
    // Fetch input and escape special characters
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Hash the input password using MD5
    $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "Login successful!";
        header("location:dashboard.php");
    } else {
        echo "Invalid email or password.";
        header("location:signup.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error'>" . $_GET['error'] . "</p>";
        }
        ?>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button name="submit" type="submit" id="">Login</button>
        </form>
    </div>
</body>
</html>