<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinner List</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>

    <?php
        error_reporting(1);
        include ('connection.php');
        $data = "SELECT * FROM dinner ORDER by id DESC";
        $val = $con->query($data);
        $i = 1;
        if ($val->num_rows > 0) {
        while (list($id, $name, $description,$price, $image) = mysqli_fetch_array($val)) {
            echo "<tr>
                <td>".$i++."</td>
                <td> $name </td>
                <td> $description </td>
                <td> $price </td>
                <td> <img src='./dinner/$image' height='100' width='100' style='border-radius: 20px;' /> </td>
                <td> <a href='dinner-edit.php?id=$id'> Edit </a> </td>
                <td> <a href='dinner-delete.php?id=$id&img=$image'> Delete </a> </td>
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