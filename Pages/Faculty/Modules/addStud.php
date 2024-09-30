<?php 
    session_start();
    include("database_config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            margin-top: 40px;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-submit {
            width: 100%;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <h1>Add Student</h1>
        <form action="" class="needs-validation" method="post" novalidate>
            <div class="mb-3">
                <label for="name" class="form-label">Enter Student Name:</label>
                <input type="text" name="name" class="form-control" id="name" required>
                <div class="invalid-feedback">Please enter a name.</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" id="email" required>
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Enter Password:</label>
                <input type="password" name="password" class="form-control" id="password" required>
                <div class="invalid-feedback">Please enter a password.</div>
            </div>
            <div class="mb-3">
                <label for="enroll" class="form-label">Enrollment No:</label>
                <input type="text" name="enroll" class="form-control" id="enroll" required>
                <div class="invalid-feedback">Please enter the enrollment number.</div>
            </div>
            <div class="mb-3">
                <label for="faculty" class="form-label">Enter Faculty Name:</label>
                <input type="text" name="faculty" class="form-control" id="faculty" required>
                <div class="invalid-feedback">Please enter the faculty name.</div>
            </div>
            <div class="mb-3">
                <label for="dept" class="form-label">Enter Department:</label>
                <input type="text" name="dept" class="form-control" id="dept" required>
                <div class="invalid-feedback">Please enter the department.</div>
            </div>
            <div class="mb-3">
                <label for="program" class="form-label">Enter Program:</label>
                <input type="text" name="program" class="form-control" id="program" required>
                <div class="invalid-feedback">Please enter the program name.</div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-submit" name="submit">Submit</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+ZLpN
