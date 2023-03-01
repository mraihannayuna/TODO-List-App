<?php
// ? menghubungkan ke config.php biar nyambung
include('config.php');


// ? $_POST Untuk mengirim dan $_GET untuk mengambil
$data = $_POST['data'];

mysqli_query($connect, "INSERT INTO list (Data) VALUES ('$data')");

// ? mengembalikan ke index.php ketika berhasil mengambil data
header("location:index.php");





