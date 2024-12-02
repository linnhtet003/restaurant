<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Add</title>
</head>
<body>

<?php
    error_reporting(1);
    include('connection.php');
    if(isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_FILES["image"]["name"];

        $query = mysqli_query($con, "insert into slider(title, description, image) value('$title', '$description', '$image')");
        if($query) {
            move_uploaded_file($_FILES["image"]["tmp_name"],"slider/".$image);
            echo "<script>alert('Slider has been added.');</script>";
            echo "<script>window.location.href = 'slider.php'</script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please check again!');</script>";
        }
    }
?>

    <form method="POST" enctype="multipart/form-data">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required><br>

        <label for="description">Description</label>
        <input type="text" id="description" name="description" required><br>

        <label for="image">Image</label>
        <input type="file" id="image" name="image" required><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>