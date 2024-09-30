<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Sports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(120deg, #3498db, #8e44ad); /* Gradient background */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }
        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        h2 {
            color: #34495e;
            font-size: 36px;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-label {
            font-weight: bold;
            color: #2c3e50;
        }
        .form-control, .form-select {
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border-radius: 10px;
            background-color: #3498db;
            border: none;
        }
        .btn-primary:hover {
            background-color: #2980b9;
        }
        .container-md {
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <h2>Adding Sports</h2>
        <form action="" method="GET">
            <div class="mb-3">
                <label for="sportsname" class="form-label">Sports Name:</label>
                <input type="text" class="form-control" name="sportsname" required>
            </div>
            <div class="mb-3">
                <label for="d_o_r" class="form-label">Date of Registration:</label>
                <input type="text" class="form-control" name="d_o_r" required>
            </div>
            <div class="mb-3">
                <label for="ld_or" class="form-label">Last Date of Registration:</label>
                <input type="text" class="form-control" name="ld_or" required>
            </div>
            <div class="mb-3">
                <label for="dept" class="form-label">Department:</label>
                <input type="text" class="form-control" name="dept" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">For:</label>
                <select name="gender" class="form-select" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Both" selected>Both</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+ZLpN5ErfP1mZ6lr9kk22P49KxF++" crossorigin="anonymous"></script>
</body>
</html>

<?php
    include("database_config.php");

    if (isset($_GET['sportsname'])) {
        $sportsname = $_GET["sportsname"];
        $dor = $_GET["d_o_r"];
        $l_dor = $_GET["ld_or"];
        $dept = $_GET["dept"];
        $gender = $_GET["gender"];
        
        $que = "INSERT INTO `sports`(`s_name`, `date of registration`, `last date of registration`, `department`, `Gender`) 
                VALUES ('$sportsname','$dor','$l_dor','$dept','$gender')";

        if (mysqli_query($con, $que)) {
            echo "<div class='alert alert-success text-center'>Sport Added Successfully!</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Error: " . mysqli_error($con) . "</div>";
        }
    }
?>
