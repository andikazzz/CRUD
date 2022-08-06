<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "crud_andika";

$koneksi = mysqli_connect($server, $username, $password, $dbname) or die("Koneksi ke database gagal");