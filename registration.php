<!-- Registration Page for a Medicine Website -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Store - Register</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Background Image */
        body {
            background: url('img/signup-bg.jpg') no-repeat center center/cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Center Container */
        .container {
            max-width: 400px;
            margin: 50px auto;
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
        input[type="text"], input[type="email"], input[type="password"] {
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
        <h2>Create a New Account</h2>
        <form id="register-form" method="post">
            <input type="text" name="full_name" id="full_name" placeholder="Full Name*">
            <input type="email" name="register_email" id="register_email" placeholder="Your Email*">
            <input type="password" name="register_password" id="register_password" placeholder="Create Password*">
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password*">
            <button type="button" class="btn" onclick="user_register()">Register</button>
        </form>
        <div class="links">
            <a href="login.php">Already have an account? Login</a>
        </div>
    </div>
</body>
</html>
