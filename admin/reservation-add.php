<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Add</title>
</head>

<body>

<?php
    error_reporting(1);
    include('connection.php');
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $person = $_POST['person'];

        $query = mysqli_query($con, "insert into reservation(name, email, phone, date, time, person) value('$name', '$email', '$phone', '$date', '$time', '$person')");
        if($query) {
            echo "<script>alert('Reservation has been added.');</script>";
            echo "<script>window.location.href = 'reservation.php'</script>";
        } else {
            echo "<script>alert(Someting Went Wrong. Please check again!);</script>";
        }
    }
?>

    <form method="POST" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" required><br>

        <label for="date">Date</label>
        <input type="date" id="date" name="date" required><br>

        <label for="time">time</label>
        <input type="time" id="time" name="time" required><br>

        <label for="person">Person</label>
        <input type="number" id="person" name="person" required><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>