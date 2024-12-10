<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = $id";
$result = $conn->query($sql);
$student = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: dash.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">    
<h1>Edit Student</h1>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?= $student['name'] ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?= $student['email'] ?>" required>
        <label>Phone:</label>
        <input type="text" name="phone" value="<?= $student['phone'] ?>">
        <label>Course:</label>
        <select class="course" name="course" id="course">
                <option value="Matematika">Matematika</option>
                <option value="Fisika">Fisika</option>
                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                <option value="Kimia">Kimia</option>
                <option value="Biologi">Biologi</option>
            </select>
        <button type="submit" class="tombol1">Update</button>
    </form>
</div>
</body>
</html>
