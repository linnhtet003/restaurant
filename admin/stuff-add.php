<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stuff Add</title>
</head>
<body>

<?php
    error_reporting(1);
    include('connection.php');
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $position = $_POST['position'];
        $image = $_FILES["image"]["name"];

        $query = mysqli_query($con, "insert into stuff(name, position, image) value('$name', '$position', '$image')");
        if($query) {
            move_uploaded_file($_FILES["image"]["tmp_name"],"stuff/".$image);
            echo "<script>alert('Stuff has been added.');</script>";
            echo "<script>window.location.href = 'stuff.php'</script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please check again!');</script>";
        }
    }
?>

    <form method="POST" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required><br>

        <label for="position">Position</label>
        <input type="text" id="position" name="position" required><br>

        <label for="image">Image</label>
        <input type="file" id="image" name="image" required><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>