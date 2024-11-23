<?php
    include("connection.php");
    $del = "delete from dinner where id='{$_GET['id']}'";
    $con->query($del);
    unlink("dinner/".$_GET["img"]);
    header("location:dinner.php");
?>