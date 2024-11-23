<?php
    include("connection.php");
    $del = "delete from lunch where id='{$_GET['id']}'";
    $con->query($del);
    unlink("lunch/".$_GET["img"]);
    header("location:lunch.php");
?>