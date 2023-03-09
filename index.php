<?php

    $sql = "SELECT * FROM INVENTORY";
    require_once("./connect.php");
    $result = $conn->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_OBJ);



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Inventory Managment</title>
    </head>

    <body>
        <div class="container">
            <header class="mt-3">
                <h1>INVENTORY MANAGMENT</h1>
                <p>
                    <a href="./new.php">Add new Items</a>
                </p>
            </header>

            <hr>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>description</th>
                        <th>value</th>
                        <th>quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead >
                <tbody>
                    <?php foreach($rows as $row): ?>
                        <tr>
                            <td><?= $row->item_name ?></td>
                            <td><?= $row->description ?></td>
                            <td><?= $row->value ?></td>
                            <td><?= $row->quantity ?></td>
                            <td>
                                <a href="./edit.php?id=<?=$row->id ?>">edit</a>
                                <a href="./delete.php?id=<?=$row->id ?>">delete</a>
                            </td>
                            
                    <?php endforeach ?>

                   
                </tbody>
            </table>
        </div>
    </body>
</html>