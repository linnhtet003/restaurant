<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stuff Edit</title>
</head>
<body>

    <?php
     error_reporting(1);
     include('connection.php');
     $id = $_GET['id'];
     $val = $con->query("Select * from stuff where id=$id");
     $data = mysqli_fetch_array($val);

     if(isset($_POST['submit'])) {
        $new_name = $_POST['name'];
        $new_position = $_POST['position'];

        $con->query("update stuff set name='$new_name', position='$new_position' where id=$id ");
        header('location:stuff.php');
     }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $data['name'] ?>" required><br>

        <label for="position">Position</label>
        <input type="text" id="position" name="position" value="<?php echo $data['position'] ?>" required><br>

        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>