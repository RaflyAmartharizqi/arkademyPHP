<?php
    $host = "localhost"; //Host database
    $username = "root"; // Username databse
    $password = "";
    $db = "profile";
    $koneksi = new mysqli($host, $username, $password, $db); //Membuat koneksi ke server mysql

    if ($koneksi->connect_error){
        die("Koneksi ke database gagal");
    }
?>