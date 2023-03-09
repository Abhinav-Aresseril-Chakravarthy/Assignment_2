<?php

    require_once("./connect.php");
    var_dump($_POST);
    $sql= "INSERT INTO INVENTORY (
        item_name,
        description,
        value,
        quantity
    ) VALUES (
        :item_name,
        :description,
        :value,
        :quantity
    )";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":item_name", $_POST["item_name"],PDO::PARAM_STR);
    $stmt->bindParam(":description", $_POST["description"],PDO::PARAM_STR);
    $stmt->bindParam(":value", $_POST["value"],PDO::PARAM_STR);
    $stmt->bindParam(":quantity", $_POST["quantity"], PDO::PARAM_STR);
    $stmt->execute();

    header("Location: ./index.php")
?>