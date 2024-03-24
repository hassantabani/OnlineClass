@extends("Master")


@section("content")
<a href="{{ route("website.all-post") }}"><button>Show All Post</button></a>
<table border="1">
    <thead>
        <tr>
            <th>Student name</th>
            <th>Student email</th>
            <th>Student Age</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($student)
        @foreach ($student as $s)


        <tr>
            <td>{{ $s->student_name }}</td>
            <td>{{ $s->student_email }}</td>
            <td>{{ $s->age }}</td>
            <td>{{ $s->status }}</td>
            <td>
                <form action="{{ route("website.edit") }}" method="Post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $s->id }}">
                    <button>Edit</button>
                </form>

<form action="{{ route("website.deletestudent",[$s->id]) }}" method="Post">
    @csrf
    <button>Delete</button>
</form>

<a href="{{ route("website.view",[$s->id]) }}"><button>View</button></a>
<a href="{{ route("website.post",[$s->id]) }}"><button>Post</button></a>
            </td>
        </tr>

        @endforeach

        @else
        <p>No Data</p>

        @endif
    </tbody>
</table>
@endsection
