<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Center content vertically and horizontally */
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Background color for the body */
        body {
            background-color: #17a2b8; /* Bootstrap 'info' color */
        }

        /* Button container design */
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Button styling */
        .custom-btn {
            width: 360px;
            padding: 20px;
            font-size: 24px;
            text-align: center;
            text-transform: uppercase;
            border: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        /* Remove link underline */
        .custom-btn a {
            color: white;
            text-decoration: none;
        }

        /* Hover effect for buttons */
        .custom-btn:hover {
            background-color: #0056b3; /* Darker blue */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Inner text styling */
        .custom-btn p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <button class="btn btn-primary custom-btn">
            <a href="Modules/addStud.php"><p>Add new Student</p></a>
        </button>

        <button class="btn btn-primary custom-btn">
            <a href="Modules/addfaculty.php"><p>Add new Faculty</p></a>
        </button>

        <button class="btn btn-primary custom-btn">
            <a href="Modules/addSports.php"><p>Add new Sports</p></a>
        </button>
    </div>

