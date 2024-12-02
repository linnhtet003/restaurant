<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinner Edit</title>
</head>
<body>

    <?php
     error_reporting(1);
     include('connection.php');
     $id = $_GET['id'];
     $val = $con->query("Select * from dinner where id=$id");
     $data = mysqli_fetch_array($val);

     if(isset($_POST['submit'])) {
        $new_name = $_POST['name'];
        $new_description = $_POST['description'];
        $new_price = $_POST['price'];

        $con->query("update dinner set name='$new_name', description='$new_description', price='$new_price' where id=$id ");
        header('location:dinner.php');
     }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $data['name'] ?>" required><br>

        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="<?php echo $data['description'] ?>" required><br>

        <label for="price">Price</label>
        <input type="text" id="price" name="price" value="<?php echo $data['price'] ?>" required><br>

        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>