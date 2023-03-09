<?php

    require_once("./connect.php");
    $sql="UPDATE INVENTORY SET
    item_name=:item_name,
    description=:description,
    value=:value,
    quantity=:quantity  
    WHERE id=:id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":item_name", $_POST["item_name"],PDO::PARAM_STR);
$stmt->bindParam(":description", $_POST["description"],PDO::PARAM_STR);
$stmt->bindParam(":value", $_POST["value"],PDO::PARAM_STR);
$stmt->bindParam(":quantity", $_POST["quantity"], PDO::PARAM_STR);
$stmt->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
$stmt->execute();

header("Location: ./index.php");

?>