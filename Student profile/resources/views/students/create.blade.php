<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="" required>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="" required>
    <br>
    <label for="program">Program</label>
    <input type="text" name="program" id="" required>
    <br>
    <label for="year">Year</label>
    <input type="number" name="year" min="1" max="5" id="" required>
    <br>
    <label for="id_number">ID Number</label>
    <input type="text" name="id_number" id="" required>
    <br>
    <button type="submit">Create Student</button>
</form>
