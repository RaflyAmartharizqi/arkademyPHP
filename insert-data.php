<?php
    include "koneksi.php";

    $sql = "INSERT  INTO user
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    ) VALUE
    (
        '1',
        'Rafly Amartharizqi',
        'Web Developer',
        'Full Time',
        '16',
        'Sidoarjo',
        '2',
        'raflyrizqi25@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert data telah berhasil";
    } else {
        echo "Insert data gagal";
    }
?>