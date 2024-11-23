<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation List</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>time</th>
            </tr>
        </thead>
        <tbody>

    <?php
        error_reporting(1);
        include ('connection.php');
        $data = "SELECT * FROM reservation ORDER by id DESC";
        $val = $con->query($data);
        $i = 1;
        if ($val->num_rows > 0) {
        while (list($id, $name, $email,$phone, $date, $time, $person) = mysqli_fetch_array($val)) {
            echo "<tr>
                <td>".$i++."</td>
                <td> $name </td>
                <td> $email </td>
                <td> $phone </td>
                <td> $date </td>
                <td> $time </td>
                <td> $person </td>
                <td> <a href='reservation-edit.php?id=$id'> Edit </a> </td>
                <td> <a href='reservation-delete.php?id=$id'> Delete </a> </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6' style='text-align:center;'><b> No data available! </b></td></tr>";
        }
    ?>

        </tbody>
    </table>
</body>
</html>