@extends("Master")

@section("content")
<a href="{{ route("website.showStudent") }}"><button >Show Students</button></a>
<h2>HTML Forms</h2>


@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    <div class="alert alert-danger">{{ $message }}</div>p
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form method="POST" action="{{ route("website.storestudent") }}">
    @csrf
  <label for="fname">Student name:</label><br>
  <input type="text" id="fname" name="student_name" ><br>
  <label for="lname">Student Email:</label><br>
  <input type="email" id="lname" name="student_email"><br><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="lname" name="password" ><br><br>
  <label for="lname">Student description:</label><br>
  <input type="text" id="lname" name="student_description" ><br><br>
  <label for="lname">Status:</label><br>
 <select name="status">
    <option value="Active">Active</option>
    <option value="InActive">InActive</option>
</select>
  <label for="lname">Age:</label><br>
  <input type="number" id="lname" name="age" ><br><br>

  <button type="submit" >Submit</button>
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

@endsection
