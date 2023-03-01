<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    </head>

    <?php 
    include('config.php');
    $ID = $_GET['ID'];
    $getdata = mysqli_query($connect, "SELECT * FROM list WHERE Id = '$ID'");
    $row = mysqli_fetch_array($getdata);
    ?>

    <body>
        <div class="container">
            <h1 class="my-5"><i class="fa-solid fa-clipboard-check px-2"></i><span class="text-primary">EDIT</span> TODO List Banh</h1> 

            <!-- ===================================== Card ===================================== -->
        <div class="card shadow-lg mb-5 bg-body-tertiary rounded border border-dark">
            <div class="card-body">
                <form class="d-flex" action="editdata.php" method="POST">
                    
                    <input class="form-control me-2" name="data" value="<?php echo $row['data'] ?>" type="Text" placeholder="Apa yang akan omae wa lakukan hari ini?">
                        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-file-circle-plus"></i></button>
                        <input type="hidden" value="<?php echo $row['Id'] ?>" name="Id">
                        
                </form>
            </div>
        </div>
            <!-- ===================================== END Card ===================================== -->
    </div>
</body>

