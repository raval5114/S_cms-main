<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Login SCMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url("Pages/jannes-glas-0NaQQsLWLkA-unsplash.jpg");
            background-position: center;
            position: relative;
        }
        /* Overlay for background color */
        .bg-overlay {
            background-color: rgba(23, 162, 184, 0.5); /* Bootstrap 'info' color with transparency */
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        /* Ensure the page content stays on top */
        .page-content {
            position: relative;
            z-index: 2;
        }
    </style>
</head>
<body>
    <!-- Background overlay -->
    <div class="bg-overlay"></div>

    <!-- Page content -->
    <div class="page-content">
        <?php include("Pages/Components/navbar.php"); ?>
        <?php include("Pages/Faculty/faculty_login.php"); ?>
        <?php include("Pages/Components/Aboutus.php"); ?>
        <?php include("Pages/Components/footer.php"); ?>
    </div>
</body>
</html>
