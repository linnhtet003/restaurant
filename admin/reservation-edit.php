<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Edit</title>
</head>
<body>

    <?php
     error_reporting(1);
     include('connection.php');
     $id = $_GET['id'];
     $val = $con->query("Select * from reservation where id=$id");
     $data = mysqli_fetch_array($val);
     $db_time = date("H:i", strtotime($data['time']));

     if(isset($_POST['submit'])) {
        $new_name = $_POST['name'];
        $new_email = $_POST['email'];
        $new_phone = $_POST['phone'];
        $new_date = $_POST['date'];
        $new_time = $_POST['time'];
        $new_person = $_POST['person'];

        $con->query("update reservation set name='$new_name', email='$new_email', phone='$new_phone', date='$new_date', time='$new_time', person='$new_person' where id=$id ");
        header('location:reservation.php');
     }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $data['name'] ?>" required><br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?php echo $data['email'] ?>" required><br>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="<?php echo $data['phone'] ?>" required><br>

        <label for="date">Date</label>
        <input type="date" id="date" name="date" value="<?php echo $data['date'] ?>" required><br>

        <label for="time">Time</label>
        <input type="time" id="time" name="time" value="<?php echo $db_time ?>" required><br>

        <label for="person">Person</label>
        <input type="number" id="person" name="person" value="<?php echo $data['person'] ?>" required><br>

        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>