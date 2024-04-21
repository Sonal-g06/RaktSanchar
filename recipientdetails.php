<?php
    include('connection.php');

    $query = "SELECT `Name`, `Age`, `Address`, `Phone`, `BloodType`, `Allergy` FROM recipient";

    $result = mysqli_query($conn, $query);

    if (!$result)
    {
        die("Error fetching data: " . mysqli_error($conn));
    }
?>

<html>
    <head>
        <title>Recipient Information</title>
    </head>
    <body>
        <h4>List of Recipients</h4>

        <?php if (mysqli_num_rows($result) > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Blood Type</th>
                    <th>Allergy</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Age']; ?></td>
                        <td><?php echo $row['Address']; ?></td>
                        <td><?php echo $row['Phone']; ?></td>
                        <td><?php echo $row['BloodType']; ?></td>
                        <td><?php echo $row['Allergy']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <p>No recipient information available.</p>
        <?php endif; ?>
    </body>
</html>
