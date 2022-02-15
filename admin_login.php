<?php
if (isset($_POST['username'])) {

    include('connection.php');

    if (!$con) {
        die("check the connection error" . mysqli_connect());
    }
    // echo "connection sucessfull you are awesome";

    $username1 = $_POST['username'];
    $password1 = $_POST['password'];




    // login check

    // $sql = "SELECT `username`, `password` FROM `admin_login` WHERE username = $username1 ";

    $logincheck = "SELECT * FROM `admin_login` WHERE username = '$username1' AND password = '$password1' ";

    $loginsql = mysqli_query($con, $logincheck);

    $loginquery = mysqli_num_rows($loginsql);



    if ($loginquery == 1) {
        session_start();
        $_SESSION['loggedn1'] = true;
        header("location: admin.php");
        // echo $_SESSION['phone'];
    } else {
        $usererror = '<div class="alert alert-danger" role="alert">
        username or password incorrect
      </div>';
    }
}


?>







<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>


    <!-- bootsatrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- castm css -->
    <link rel="stylesheet" href="./assets/css/custom.css">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

        <div class="flex flex-col flex-1 w-full">

            <div class="p-3">
                <?php
                if (isset($usererror)) {
                    echo $usererror;
                }

                ?>
            </div>
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">

                    <!-- Cards -->
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">




                    </div>

                    <!-- login form -->
                    <main class="form-signin">
                        <form method="POST" action="admin_login.php">
                            <img class="mb-4" src="3.svg" alt="" width="80" height="80">
                            <h1 class="h3 mb-3 fw-normal">Please login</h1>

                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
                                <label for="floatingInput">User name</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="checkbox mb-3">

                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">login in</button>

                        </form>
                    </main>





                </div>
        </div>
        </main>
    </div>
    </div>
</body>

</html>