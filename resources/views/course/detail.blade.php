<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
</head>
<body>

    <h1>Course Details</h1>

    <p><strong>Name:</strong> {{ $course->name }}</p>

    <p><strong>Description:</strong> {{ $course->description }}</p>

    <p><strong>Duration:</strong> {{ $course->duration }} weeks</p>

    <p><strong>Fee:</strong> {{ $course->fee }}</p>

    <p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>

    <p><strong>Active:</strong> {{ $course->is_active ? 'Yes' : 'No' }}</p>

    <p><strong>Created:</strong> {{ $course->created_at }}</p>

    <p><strong>Updated:</strong> {{ $course->updated_at }}</p>

    <a href="/courses">Back to Courses</a>

</body>
</html>