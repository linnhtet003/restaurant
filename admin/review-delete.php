<?php
    include("connection.php");
    $del = "delete from contact where id='{$_GET['id']}'";
    $con->query($del);
    header("location:review.php");
?>