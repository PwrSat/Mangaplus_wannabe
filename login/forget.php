<?php
require_once "../function.php";
$email = $_GET["email"];
if (isset($_POST["btnkonmail"])) {
    forget($_POST, $email);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../assets/image/logo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>KINI.COM-Reset password</title>
</head>

<body>
    <section class="container">
        <div class="form login">
            <div class="form content">
                <header>Reset password</header>
                <form method="post">
                    <div class="field input-field">
                        <input type="password" placeholder="password" class="input" name="password" id="passinput" required autofocus>
                    </div>
                    <div class="field input-field">
                        <input type="password" placeholder="Konfirmasi password" class="input" name="konpas" id="konpassinput" required>
                    </div>
                    <br>
                    <input type="checkbox" onclick="showpass()" >Show password
                    <div class="field input-field">
                        <input type="submit" value="konfirmasi" name="btnkonmail">
                    </div>
                    <div class="form-link">
                        <a href="login.php" class="forgot-pass">Login?</a>
                    </div>
                </form>
            </div>
    </section>
    <script>
        function showpass() {
            var x = document.getElementById("passinput");
            var y = document.getElementById("konpassinput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
    </script>

</body>

</html>