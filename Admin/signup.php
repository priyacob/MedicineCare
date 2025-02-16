<?php
include("../includes/db.php");
if(isset($_POST['submit']) && isset($_POST['submit']) != null) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Hash password using MD5
    $sql = "SELECT * FROM admin WHERE email = '$email' And password = '$password'";
    $check = mysqli_query($con, $sql);

    if (mysqli_num_rows($check) > 0) {
        echo "Error: This email is already registered!";
        header("location:login.php");
    } else {
        // Step 4: Insert Admin into Database
        $sql = "INSERT INTO admin (email, password) VALUES ('$email', '$password')"; 
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "Admin registered successfully!";
            header("location:login.php");
        } else {
            echo "alert(something went wrong.)";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Signup Form Container */
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        /* Input Fields */
        input[type="email"], input[type="password"] {
            width: calc(100% - 20px);
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Submit Button */
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Admin Signup</h2>
    <form method="POST" action="">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <button type="submit" name="submit">Signup</button>
    </form>
</div>

</body>
</html>

