<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $student->email }}" required><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $student->phone }}"><br>
        <label>Course:</label>
        <input type="text" name="course" value="{{ $student->course }}" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
