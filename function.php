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
<!-- fungsi fungsi -->

