<?php
require_once "../function.php";
if (isset($_POST["btnregister"])) {
    register($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regis22.css">
    <link rel="icon" href="../assets/image/logo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>KINI.COM-Register</title>
</head>

<body>
    <section class="container">
        <div class="form login">
            <div class="form content">
                <header>Sign Up</header>

                <form method="post">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email" required autofocus>
                    </div>

                    <div class="field input-field">
                        <input type="text" placeholder="Username" class="input" name="username" required autofocus>
                    </div>

                    <div class="field input-field">
                        <input type="text" placeholder="Name" class="input" name="nama" required autofocus>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="password" id="passinput" required>
                        <i class='bx bx-hide eye-icon' onclick="showpass()"></i>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Confirm Password" class="password" name="konpas" id="konpassinput" required>
                        <i class='bx bx-hide eye-icon' onclick="showkonpass()"></i>
                    </div>

                    <div class="button">
                        <input type="submit" value="Sign up" name="btnregister" class="btn btn-warning">
                    </div>

                    <div class="form-link">
                        <span>Already have an account? <a href="login.php">Log in.</a></span>
                    </div>
                </form>
            </div>
    </section>

    <script>
        function showpass() {
            var x = document.getElementById("passinput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        function showkonpass() {
            var x = document.getElementById("konpassinput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</body>

</html>