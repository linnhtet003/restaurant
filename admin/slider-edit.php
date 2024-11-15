<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Edit</title>
</head>
<body>

    <?php
     error_reporting(1);
     include('connection.php');
     $id = $_GET['id'];
     $val = $con->query("Select * from slider where id=$id");
     $data = mysqli_fetch_array($val);

     if(isset($_POST['submit'])) {
        $new_title = $_POST['title'];
        $new_description = $_POST['description'];

        $con->query("update slider set title='$new_title', description='$new_description' where id=$id ");
        header('location:slider.php');
     }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="<?php echo $data['title'] ?>" required><br>

        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="<?php echo $data['description'] ?>" required><br>

        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>