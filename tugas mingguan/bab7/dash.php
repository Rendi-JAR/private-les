<?php
include 'db.php';

// Hitung jumlah data
$sql_count = "SELECT COUNT(*) as total_students FROM students";
$count_result = $conn->query($sql_count);
$count_data = $count_result->fetch_assoc();

$sql = "SELECT * FROM students";
$result = $conn->query($sql);
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Les Private - Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Students Dashboard</h1>

        <!-- Widget untuk jumlah data -->
        <div class="widget-container">
            <div class="widget">
                <h2>Total Students</h2>
                <p><?= $count_data['total_students'] ?></p>
            </div>
        </div>

        <a href="create.php" class="tombol">Add New Student</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['course'] ?></td>
                        <td>
                            <a href="update.php?id=<?= $row['id'] ?>" class="button">Edit</a>
                            <a href="delete.php?id=<?= $row['id'] ?>" class="button delete">Delete</a>
                            
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <td>
        </td>
        <div>
            <form method="POST" action="logout.php">
                <button type="submit" class="tombol1">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
