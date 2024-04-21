<?php
    include('connection.php');

    $query = "SELECT `Date`, `Hospital_Name`, `Address` FROM bloodcamps";

    $result = mysqli_query($conn, $query);

    if (!$result)
    {
        die("Error fetching data: " . mysqli_error($conn));
    }
?>

<html>
    <head>
        <title>Blood Camps</title>
    </head>
    <body>
        <h4>List of Blood Camps</h4>

        <?php if (mysqli_num_rows($result) > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Hospital</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['Date']; ?></td>
                        <td><?php echo $row['Hospital_Name']; ?></td>
                        <td><?php echo $row['Address']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <p>No Blood Camp information available.</p>
        <?php endif; ?>
    </body>
</html>
