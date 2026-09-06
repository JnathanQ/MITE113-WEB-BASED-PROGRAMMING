<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
    </style>
</head>
<body>

<div class="container py-5" style="max-width: 900px;">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark m-0">Students</h2>
        <button onclick="window.location.href='{{ route('students.create') }}'" class="btn btn-primary rounded-pill px-4">
            + Add New Student
        </button>
    </div>

    <div class="list-group shadow-sm rounded-4 overflow-hidden">
        @foreach ($students as $student)
            <div class="list-group-item d-flex justify-content-between align-items-center p-4 bg-white">

                <div>
                    <h5 class="fw-semibold mb-1">{{ $student->name }}</h5>
                    <p class="mb-0 text-muted small">
                        {{ $student->email }} &nbsp;&bull;&nbsp;
                        {{ $student->program }} &nbsp;&bull;&nbsp;
                        Year {{ $student->year }} &nbsp;&bull;&nbsp;
                        ID: {{ $student->id_number }}
                    </p>
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                        Show
                    </a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                        Edit
                    </a>

                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3">
                            Delete
                        </button>
                    </form>
                </div>

            </div>
        @endforeach
    </div>

</div>

<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
