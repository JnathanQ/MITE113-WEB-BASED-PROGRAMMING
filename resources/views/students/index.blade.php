<button onclick="window.location.href='{{ route('students.create') }}'">Add New Student</button>

@foreach ($students as $student)
    <div>
        <h4>{{ $student->name }}</h4>
        <p>Email: {{ $student->email }}</p>
        <p>Program: {{ $student->program }}</p>
        <p>Year: {{ $student->year }}</p>
        <p>ID Number: {{ $student->id_number }}</p>
    </div>


    <form action="{{ route('students.destroy',$student->id) }}" method="POST">
        <a href="{{ route('students.show',$student->id) }}">Show</a>
        <a href="{{ route('students.edit',$student->id) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button> Delete</button>
    </form>
@endforeach
