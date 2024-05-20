<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <style>
        /* CSS styling for the page */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 600px; 
            margin: 20px auto;
            border: 2px solid #ccc; 
            border-radius: 10px; 
            overflow: hidden; /* Hide overflow content */
        }

        .image-container {
            width: 40%; /* Adjusted width for the image container */
            float: left; /* Float the image container to the left */
        }

        .form-container {
            width: 60%; /* Adjusted width for the form container */
            float: right; /* Float the form container to the right */
            background-color: #fff; /* Set background color to white */
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="datetime-local"],
        select,
        input[type="submit"] {
            width: calc(100% - 22px); /* Adjusted width for padding */
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; 
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .image-container img {
            width: 100%; /* Make the image fill the container */
            border-radius: 8px; /* Rounded corners */
        }

        /* Header styling */
        header {
            background-color: #5a7cbd;
            color: white;
            text-align: center;
            padding: 0px;
        }

        /* Footer styling */
        footer{
		background-color: #5a7cbd;
		color: aliceblue;
		text-align: center;
		font-size: 22px;
	}
    </style>
</head>
<body>
    <header>
        <h1>BIRUK Clinic</h1>
    </header>

    <div class="container">
        
        <div class="form-container">
            <h2>Book Appointment</h2>
            <form id="appointmentForm" action="bo.php" method="POST">
                <label for="ID">ID:</label>
                <input type="TEXT" id="ID" name="ID" required><br>
                <label for="fullName">Fullname:</label>
                <input type="text" id="fullName" name="fullName" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required><br>
                <label for="dateTime">Preferred Date and Time:</label>
                <input type="datetime-local" id="dateTime" name="dateTime" required><br>
                <label for="doctor">Select Doctor:</label>
                <select id="doctor" name="doctor" required>
                    <option value="">Choose a doctor</option>
                    <option value="Dr. biruk">Dr. biruk</option>
                    
                </select><br>
                <input type="submit" value="Book Appointment">
            </form>
        </div>
    </div>

    <footer>
    BIRUK   MEDIUM CLINIC
		<h6 style="text-align: center;">&copy; 2024 Hospital Management System</h6>
     <b><h6>proudct</h6></b>
        <h6>features</h6>
        <h6>blog</h6><br>
       
    </footer>
</body>
</html>
