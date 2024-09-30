<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glassmorphic Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Styling for Navbar with Glassmorphic Effect */
    .navbar {
      background: rgba(255, 255, 255, 0.2); /* Transparent white background */
      backdrop-filter: blur(10px); /* Blur effect */
      -webkit-backdrop-filter: blur(10px); /* Support for Safari */
      padding: 15px;
      border-radius: 15px;
      box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
      border: 1px solid rgba(255, 255, 255, 0.18); /* Subtle inner border */
    }

    .navbar-brand {
      font-size: 30px;
      color: #00BFFF !important; /* Light blue color for the brand */
      font-weight: bold;
    }

    .navbar-nav .nav-link {
      font-size: 18px;
      color: #00BFFF !important; /* Light blue color for the links */
      margin-left: 10px;
      transition: color 0.3s ease, background 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.3);
      border-radius: 5px;
      color: #FFFFFF !important; /* White color on hover */
    }

    .navbar-toggler {
      background-color: #fff;
      border: none;
    }

    .navbar-toggler-icon {
      filter: brightness(0) invert(1);
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">S_CMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Home">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+ZLpN5ErfP1mZ6lr9kk22P49KxF++" crossorigin="anonymous"></script>
</body>
</html>
