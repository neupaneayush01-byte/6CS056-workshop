<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>

    <h1>Student Details</h1>

    <p><strong>Name:</strong> {{ $student->name }}</p>

    <p><strong>Email:</strong> {{ $student->email }}</p>

    <p><strong>Phone:</strong> {{ $student->phone }}</p>

    <p><strong>Address:</strong> {{ $student->address }}</p>

    <p><strong>Date of Birth:</strong> {{ $student->date_of_birth }}</p>

    <p><strong>Created:</strong> {{ $student->created_at }}</p>

    <p><strong>Updated:</strong> {{ $student->updated_at }}</p>

    <a href="/students">Back to Students</a>

</body>
</html>