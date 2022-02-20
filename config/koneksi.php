<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "florafauna_db";

// Koneksi dan memilih database di server

$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($connect->connect_error) {
    // jika terjadi error, matikan proses dengan die() atau exit();
    die('Maaf koneksi gagal: '. $connect->connect_error);
 }
?>
