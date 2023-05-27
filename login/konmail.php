<?php
require_once "../function.php";
if (isset($_POST["btnkonmail"])) {
    konmail($_POST);
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
    <title>KINI.COM-Konfirmasi email</title>
</head>

<body>
    <section class="container">
        <div class="form login">
            <div class="form content">
                <header>Konfirmasi email</header>

                <form method="post">
                    <div class="field input-field">
                        <input type="email" placeholder="email" class="input" name="email" required autofocus>
                    </div>
                    <div class="field input-field">
                        <input type="submit" value="Konfirmasi" name="btnkonmail" >
                    </div>
                    <div class="form-link">
                        <a href="login.php" class="forgot-pass">Login?</a>
                    </div>

                </form>
            </div>
    </section>

</body>

</html>