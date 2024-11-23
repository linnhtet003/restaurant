<?php
    include("connection.php");
    $del = "delete from reservation where id='{$_GET['id']}'";
    $con->query($del);
    header("location:reservation.php");
?>