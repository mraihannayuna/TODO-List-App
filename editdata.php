<?php

include('config.php');

$id = $_POST['Id'];
$data = $_POST['data'];

try {
    $query = "UPDATE list SET data = '$data' WHERE Id='$id'";
        $result = mysqli_query($connect, $query); 
    } catch (mysqli_sql_exception $e) { 
        var_dump($e);
        exit; 
    } 

    header('location:index.php');

    