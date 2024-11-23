<?php
    include("connection.php");
    $del = "delete from drinks where id='{$_GET['id']}'";
    $con->query($del);
    unlink("drink/".$_GET["img"]);
    header("location:drink.php");
?>