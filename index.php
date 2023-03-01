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
    <body>
        <div class="container">
            <h1 class="my-5"><i class="fa-solid fa-clipboard-check px-2"></i>TODO List Banh</h1> 

            <!-- ===================================== Card ===================================== -->
        <div class="card shadow-lg mb-5 bg-body-tertiary rounded border border-dark">
            <div class="card-body">
                <form class="d-flex" action="insert.php" method="post">
                    <input class="form-control me-2" name="data" type="Text" placeholder="Apa yang akan omae wa lakukan hari ini?">
                        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-file-circle-plus"></i></button>
                </form>
            </div>
        </div>
            <!-- ===================================== END Card ===================================== -->

            <?php
            include('config.php');
            $alldata = mysqli_query($connect, "SELECT * FROM list");
            ?>

            <!-- ===================================== Table ===================================== -->
        <table class="table">
<tbody>
    <?php while ($row = mysqli_fetch_array($alldata)) { ?>
    <tr>
    <th scope="row"><?php echo $row['Id'] ?></th>
    <td><?php echo $row['data'] ?></td>
    <!-- button Edit -->
    <td style="width: 5%"><a href="edit.php?ID=<?php echo $row['Id'] ?>" class="btn btn-outline-primary"><i class="fa-solid fa-file-pen"></i></a></td>
    <!-- button Delete -->
    <td style="width: 5%"><a href="delete.php?ID=<?php echo $row['Id'] ?> " class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
    </div> 
            <!-- ===================================== END Table ===================================== -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>


