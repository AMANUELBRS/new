<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Styles for the body */
        body {
background-color:powderblue;           
 margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-size: cover;
            background-position: center;
            height: 100vh; /* Set the body height to fill the viewport */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Styles for the form */
        form {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
            max-width: 300px;
            width: 100%;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff; /* Blue color for button */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue color on hover */
        }

        p.error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="loginconn.php">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="user_type">User Type:</label>
        <select id="user_type" name="user_type" required>
            <option value="admin">Admin</option>
            <option value="doctor">Doctor</option>
            <option value="patient">Patient</option>
        </select>
        <input type="submit" value="Login">
    </form>
   
    <?php 
       
        if (isset($error_message)) {
            echo "<p class='error-message'>$error_message</p>";
        }
    ?>
</body>
</html>
