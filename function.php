<!-- database -->
<!-- database -->
<!-- database -->

<?php
if (!isset($_SESSION)) {
    session_start();
}
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'oke';

$koneksi = mysqli_connect($host, $user, $pass, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal " . $koneksi->connect_error);
}
?>


<!-- fungsi fungsi -->
<!-- fungsi fungsi -->
<!-- fungsi fungsi -->

<?php


function tampilkan($query)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, $query);
    $kosong = [];
    while ($isi = mysqli_fetch_assoc($hasil)) {
        $kosong[] = $isi;
    }
    return $kosong;
}

function register($data)
{
    global $koneksi;
    $email = $data['email'];
    $username = $data['username'];
    $password = $data['password'];
    $confirm_password = $data['konpas'];

    $cekEmail = mysqli_query($koneksi, "SELECT email FROM users WHERE email='$email'");

    if (mysqli_num_rows($cekEmail) > 0) {
        echo "
        <script>
            alert('Email sudah digunakan');
            document.location.href = 'register.php';
        </script>
    ";
    } elseif (strlen($password) < 6) {
        echo "
        <script>
            alert('Kata sandi terlalu pendek (minimum 6 karakter)');
            document.location.href = 'register.php';
        </script>
    ";
    } elseif ($password != $confirm_password) {
        echo "
         <script>
             alert('Konfirmasi kata sandi tidak sesuai dengan Kata sandi');
             document.location.href = 'register.php';
         </script> ";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($koneksi, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')");
        echo "
        <script>
            alert('Registrasi Akun Berhasil');
            document.location.href = 'index.php';
        </script>";
        header("Location: login.php");
    }
}


function login($data)
{
    global $koneksi;
    global $pass;
    global $email;
    $email_login = $data["email"];
    $pass_login = $data["password"];

    $sql = "SELECT * FROM users WHERE (email = '{$email_login}') AND password = '{$pass_login}'";
    $query = mysqli_query($koneksi, $sql);
    // $tes = mysqli_fetch_assoc($query);
    // echo"<pre>";
    // var_dump($tes);
    // echo"</pre>";
    // // die;

    if (!$query) {
        die("Query gagal" . mysqli_error($koneksi));
    }

    $email = null;

    while ($row = mysqli_fetch_array($query)) {
        // echo "<pre>";
        // var_dump($row);
        // echo "</pre>";
        // die;
        $email = $row['email'];
        $pass = $row['password'];
        $user = $row['username'];
        $id_user = $row['id'];
    }
    if (($email_login == $email) && $pass_login == $pass) {
        echo
        "<script>
                    alert('Selamat kamu telah login');
                    document.location.href = 'index.php';
            </script>";

        $_SESSION['email'] = $email;
        $_SESSION['username'] = $user;
        $_SESSION['id_user'] = $id_user;
    } else {
        echo
        "<script>
            alert('User tidak ditemukan');
            </script>";
    }
}

function forget($data, $konemail)
{
    global $koneksi;
    $pass = $data['password'];
    $konpass = $data['konpas'];



    if ($pass !== $konpass) {
        echo "
        <script>
        alert('Konfirmasi password harus sama!');
        document.location.href = '';
                    </script>
                    ";
    } else {
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $ganti = "UPDATE users SET password = '$pass' where email = '$konemail'";
        if ($koneksi->query($ganti) === TRUE) {
            echo "
                        <script>
                            alert('password berhasil dirubah');
                            document.location.href = 'login.php';
                        </script>";
        } else {
            echo "
                        <script>
                            alert('password gagal dirubah');
                            document.location.href = 'login.php';
                        </script>";
        }
    }
}

?>


<?php

function favorite($data)
{
    global $koneksi;
    // var_dump($data); die;

    $uid = $data["user_id"];
    $mdi = $data["manga_id"];
    $sts = $data["status"];

    if ($sts == 1) {
        mysqli_query($koneksi, "INSERT into favorites(manga_id, user_id) values($mdi, $uid)");
        echo "
        <script>
            document.location.href = '';
        </script>";
    } else {
        mysqli_query($koneksi, "DELETE from favorites where manga_id = $mdi AND user_id = $uid");
        echo "
        <script>
            document.location.href = '';
        </script>";
    }
}

?>

<!-- fungsi fungsi -->