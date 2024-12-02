<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drink Add</title>
</head>

<body>

<?php
    error_reporting(1);
    include('connection.php');
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_FILES["image"]["name"];

        $query = mysqli_query($con, "insert into drinks(name, description, price, img) value('$name', '$description', '$price', '$image')");
        if($query) {
            move_uploaded_file($_FILES["image"]["tmp_name"],"drink/".$image);
            echo "<script>alert('Drink product has been added.');</script>";
            echo "<script>window.location.href = 'drink.php'</script>";
        } else {
            echo "<script>alert(Someting Went Wrong. Please check again!);</script>";
        }
    }
?>

    <form method="POST" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required><br>

        <label for="description">Description</label>
        <input type="text" id="description" name="description" required><br>

        <label for="price">Price</label>
        <input type="text" id="price" name="price" required><br>

        <label for="image">Image</label>
        <input type="file" id="image" name="image" required><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>