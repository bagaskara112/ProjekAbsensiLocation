<?php

$db_host = "localhost";
$db_users = "root";
$db_pass = "";
$db_name = "apk_absen";

$connection = mysqli_connect($db_host, $db_users, $db_pass, $db_name);

if (!$connection) {
    echo "Koneksi ke database gagal" . mysqli_connect_errno();
}

function base_url($url = null)
{
    $base_url = 'http://localhost/ProjekAbsensiHmp';
    if ($url != null) {
        return $base_url . '/' . $url;
    } else {
        return $base_url;
    }
}
