
<?php
// Step 1: Include database connection
include 'db.php';

// Step 2: Retrieve applicant records
$sql = "SELECT * FROM applicants";
$result = mysqli_query($conn, $sql);

// Check query
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Applicant Details</title>

    <style>
        body {
            font-family: Arial;
            margin: 40px;
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>

<h2>Applicant Details</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Username</th>
    </tr>

    <?php
    // Step 3: Display records dynamically

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['mobile']); ?></td>
            <td><?php echo htmlspecialchars($row['username']); ?></td>
        </tr>

    <?php
        }

    } else {
        echo "<tr><td colspan='5'>No records found</td></tr>";
    }

    mysqli_free_result($result);
    mysqli_close($conn);
    ?>

</table>

</body>
</html>
