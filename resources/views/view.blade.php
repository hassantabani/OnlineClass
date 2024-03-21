@extends("Master")
@section("content")


  <label for="fname">Student name:  {{ $student->student_name }}</label><br>
  <br>
  <label for="lname">Student Email:   {{ $student->student_email }}</label><br>
  <br>
  <label for="lname">Student description:   {{ $student->student_description }}</label><br>
 <br>
  <label for="lname">Status:   {{ $student->status }}</label><br>

  <label for="lname">Age:  {{ $student->age }}</label><br>




@endsection
