<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5 d-flex justify-content-center">
    <div class="card border-0 shadow-sm rounded-4" style="max-width: 500px; width: 100%;">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-4 text-center">{{ $student->name }}</h3>

            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between px-0">
                    <span class="text-muted">Email</span>
                    <span class="fw-semibold">{{ $student->email }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between px-0">
                    <span class="text-muted">Program</span>
                    <span class="fw-semibold">{{ $student->program }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between px-0">
                    <span class="text-muted">Year</span>
                    <span class="fw-semibold">{{ $student->year }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between px-0">
                    <span class="text-muted">Student ID</span>
                    <span class="fw-semibold">{{ $student->id_number }}</span>
                </li>
            </ul>

            <a href="{{
