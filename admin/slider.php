<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider List</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>

    <?php
        error_reporting(1);
        include ('connection.php');
        $data = "SELECT * FROM slider ORDER by id DESC";
        $val = $con->query($data);
        $i = 1;
        if ($val->num_rows > 0) {
        while (list($id, $title, $description, $image) = mysqli_fetch_array($val)) {
            echo "<tr>
                <td> $i++ </td>
                <td> $title </td>
                <td> $description </td>
                <td> <img src='./image/$image' height='100' width='100' style='border-radius: 20px;' /> </td>
                <td> <a href='slider-edit.php?id=$id'> Edit </a> </td>
                <td> <a href='slider-delete.php?id=$id&image=$image'> Delete </a> </td>
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