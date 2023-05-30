<!-- database -->
<!-- database -->
<!-- database -->

<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'sbd2';

    $koneksi = mysqli_connect($host,$user,$pass,$database);

    if ($koneksi->connect_error){
        die("Koneksi gagal ".$koneksi->connect_error);
    }

?>


<!-- fungsi fungsi -->
<!-- fungsi fungsi -->

<?php

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
        mysqli_query($koneksi, "INSERT INTO users ( username, email, password) VALUES ( '$username', '$email', '$password')");
        echo "
    <script>
        alert('Registrasi Akun Berhasil');
        document.location.href = 'index.php';
    </script>";
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
                    document.location.href = '/tubes_sbd-main';
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

?>
<!-- fungsi fungsi -->

<!-- fungsi favorite dari kating harap dirubah-->

<?php
    // include "includes/koneksi.php";
    // if(empty($_SESSION['nama_user'])) {
    //     header("Location:login.php"); die;
    // }

    // $user = $_SESSION['id_user'];
    // $id_manga = $_POST['id_manga'];

    //     $query = "SELECT * FROM favorit WHERE id_user = $user AND id_manga = $id_manga";
    //     $hasil = mysqli_query($koneksi, $query);
    //     if($hasil->num_rows == 0){
    //         $sql1 = "INSERT INTO favorit (id_user,id_manga) VALUES ('$user','$id_manga')";
    //         if ($koneksi->query($sql1)===TRUE){
    //             header("Location:favorit.php");
    //         }
    //     }else{
    //         $sql2 = "DELETE FROM favorit WHERE id_user = $user AND id_manga = $id_manga";
    //         if ($koneksi->query($sql2)===TRUE){
    //             header("Location:lukisan.php?id_manga=$id_manga");
    //         }
    //     }
?>

<!-- fungsi hapus favorite dari kating harap dirubah-->

<?php
    // include("includes/koneksi.php");
    // $user = $_SESSION['id_user'];
    // $id_fav = $_GET['id_favorit'];
    //     $sql = "DELETE FROM favorit WHERE id_favorit = $id_fav AND id_user = $user";
    //     if ($koneksi->query($sql)===TRUE){
    //         header("Location:favorit.php");
    //     }
?>


<!-- fungsi fungsi -->

