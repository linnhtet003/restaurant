<?php
    include("connection.php");
    $del = "delete from stuff where id='{$_GET['id']}'";
    $con->query($del);
    unlink("stuff/".$_GET["image"]);
    header("location:stuff.php");
?>