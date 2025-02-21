<!-- Login Page for a Medicine Website -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Store - Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Background Image */
        body {
            background: url('img/about-img.jpg') no-repeat center center/cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Center Container */
        .container {
            max-width: 400px;
            margin: 80px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .container h2 {
            color: #007bff;
            margin-bottom: 20px;
        }

        /* Input Fields */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Buttons */
        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .links {
            margin-top: 15px;
        }

        .links a {
            text-decoration: none;
            color: #007bff;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login to Your Account</h2>
        <form id="login-form" method="post">
            <input type="text" name="login_email" id="login_email" placeholder="Your Email*">
            <input type="password" name="login_password" id="login_password" placeholder="Your Password*">
            <button type="button" class="btn" onclick="user_login()">Login</button>
        </form>
        <div class="links">
            <a href="forgot_password.php">Forgot Password?</a> | 
            <a href="registration.php">Create an Account</a>
        </div>
    </div>
</body>
</html>
