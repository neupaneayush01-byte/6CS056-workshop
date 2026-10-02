<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

    <h1>Students</h1>

    @forelse ($students as $student)

        <div>
            <h2>{{ $student->name }}</h2>

            <p>Email: {{ $student->email }}</p>
            <p>Phone: {{ $student->phone }}</p>
            <p>Address: {{ $student->address }}</p>
            <p>Date of Birth: {{ $student->date_of_birth }}</p>

            <a href="/students/{{ $student->id }}/edit">Edit</a>

            <form action="/students/{{ $student->id }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>
            </form>
        </div>

        <hr>

    @empty

        <p>No students found.</p>

    @endforelse

</body>
</html>