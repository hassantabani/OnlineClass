@extends("Master")
@section("content")

<form method="POST" action="{{ route("website.editstudent",[$student->id]) }}">
    @csrf
  <label for="fname">Student name:</label><br>
  <input type="text" id="fname" name="student_name" value="{{ $student->student_name }}"><br>
  <label for="lname">Student Email:</label><br>
  <input type="email" id="lname" name="student_email" value="{{ $student->student_email }}"><br><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="lname" name="password" value="{{ $student->password }}"><br><br>
  <label for="lname">Student description:</label><br>
  <input type="text" id="lname" name="student_description" value="{{ $student->student_description }}"><br><br>
  <label for="lname">Status:</label><br>
 <select name="status" value="{{ $student->status }}">
    <option value="Active">Active</option>
    <option value="InActive">InActive</option>
</select>
  <label for="lname">Age:</label><br>
  <input type="number" id="lname" name="age" value="{{ $student->age }}"><br><br>

  <button type="submit" >Submit</button>
</form>
@endsection
