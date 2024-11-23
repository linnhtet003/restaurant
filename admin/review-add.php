<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Add</title>
</head>

<body>

<?php
    error_reporting(1);
    include('connection.php');
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $person = $_POST['person'];
        $message = $_POST['message'];

        $query = "INSERT INTO `contact` VALUES ('', '$name', '$email', '$person', '$message')";
        $con->query($query);

        echo "<script>alert('Drink product has been added.');</script>";
    }
?>

    <form method="POST" enctype="multipart/form-data">
        <label for="name">Your name</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Your email</label>
        <input type="email" id="email" name="email" required><br>

        <label for="person"> --Select that you review--</label>
        <select id="person" name="person">
            <option value="Decoration">Decoration</option>
            <option value="food">Food</option>
            <option value="service">Service</option>
            <option value="all">All</option>
        </select><br>

        <label for="message">You review</label>
        <textarea id="message" name="message" placeholder="Pease write your review" required></textarea><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>