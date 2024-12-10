<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";
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
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Add New Student</h1>
        <form method="POST">
            <label>Name:</label>
            <input type="text" name="name" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Phone:</label>
            <input type="text" name="phone">
            <label>Course:</label>
            <select class="course" name="course" id="course">
                <option value="Matematika">Matematika</option>
                <option value="Fisika">Fisika</option>
                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                <option value="Kimia">Kimia</option>
                <option value="Biologi">Biologi</option>
            </select>
            <button type="submit" class="tombol1">Submit</button>
        </form>
    </div>
</body>
</html>
