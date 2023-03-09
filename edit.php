<?php

require_once("./connect.php");

$sql = "SELECT * FROM INVENTORY WHERE id=:id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Edit Inventory</title>
    </head>

    <body>
        <div class="container">
            <header class="mt-3">
                <h1>Edit Inventory Form</h1>

                <p>
                    <a href="./index.php">Back to Home</a>
                </p>
            </header>

            <hr>

           
            <form class="mt-5" action="./update.php" method="post" novalidate>
                <input type="hidden" name="id">

                <div class="form-group mb-3">
                    <label for="name">item_name:</label>
                    <input type="text" name="item_name" value="<?= $row->item_name ?>" required max="30" class="form-control" placeholder="Product Name">
                </div>

                <div class="form-group mb-3">
                    <label for="description">Description:</label>
                    <input type="text" name="description" value="<?= $row->description ?>" required max="30" class="form-control" placeholder="Description of the Product">
                </div>

                <div class="form-group mb-3">
                    <label for="value">Value in dollars:</label>
                    <input type="text" name="value" value="<?= $row->value ?>" required max="30" class="form-control" placeholder="$000">
                </div>

                <div class="form-group mb-3">
                    <label for="quantity">Quantity in Stock:</label>
                    <input type="text" name="quantity" value="<?= $row->quantity ?>"  required max="30" class="form-control" placeholder="1,2,3,4,...etc.">
                </div>

                <div class="form-group mb-3">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </body>
</html>