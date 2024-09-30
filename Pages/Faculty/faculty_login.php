<div class="bg-primary d-flex flex-column p-5 shadow" style="margin:auto; margin-top:220px; width:100%; max-width: 500px; border-radius:13px;">
    <div class="Heading text-center">
        <h1 class="text-white mb-4">Login</h1>
    </div>    
    <div class="login-control" style="margin:auto; width:100%; max-width:400px;">
        <form action="" method="get">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Enter Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="d-grid gap-2">
                <input type="submit" name="submit" class="btn btn-info btn-lg" value="Submit" style="font-weight: bold;">
            </div>
            <div class="text-center mt-3">
                <small class="text-white">Forgot password? Contact the lead faculty</small>
            </div>
            <?php
                session_start();
                include("Modules/database_config.php");
                if(isset($_GET["submit"])) {
                    $name = $_GET["name"];
                    $password = $_GET["password"];
                    $que = "SELECT 'name', 'password' FROM faculty WHERE name='$name' AND password='$password'";
                    $result = mysqli_query($con, $que);
                    $matched_rows = mysqli_num_rows($result);
                    if(empty($name) || empty($password)) {
                        echo "<div class='text-danger text-center mt-3'>Enter Name and Password</div>";
                    } elseif($matched_rows > 0) {
                        $_SESSION["fac_name"] = $name;
                        header("location:Pages/Faculty/fac_Hompage.php");
                    } else {
                        echo "<div class='text-danger text-center mt-3'>Invalid username or password. Contact the lead faculty if you forgot your password.</div>";
                    }
                }
            ?> 
        </form>
    </div>
</div>

