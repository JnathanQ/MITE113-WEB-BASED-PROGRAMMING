<form action="{{ route('students.update',$student->id) }}" method="POST">
 @csrf
@method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" id="" required value="{{ $student->name }}">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="" required value="{{ $student->email }}">
    <br>
    <label for="program">Program</label>
    <input type="text" name="program" id="" required value="{{ $student->program }}">
    <br>
    <label for="year">Year</label>
    <input type="number" name="year" min="1" max="5" id="" required value="{{ $student->year }}">
    <br>
    <label for="id_number">ID Number</label>
    <input type="text" name="id_number" id="" required value="{{ $student->id_number }}">
    <br>
    <button type="submit">Update Student</button>
</form>
