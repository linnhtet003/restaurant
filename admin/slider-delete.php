<?php
    include("connection.php");
    $del = "delete from slider where id='{$_GET['id']}'";
    $con->query($del);
    unlink("slider/".$_GET["image"]);
    header("location:slider.php");
?>