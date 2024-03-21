@extends('Master')
@section('content')

<form method="post" action="{{ route('website.createPost',[$student->id]) }}" enctype="multipart/form-data">
    @csrf
    <label for="fname">Title:</label><br>
    <input type="text" id="fname" name="title" ><br>
    <label for="lname">Description:</label><br>
    <input type="text" id="lname" name="description"><br><br>
   <br>
    <label for="lname">Single Image:</label><br>
    <input type="file" id="lname" name="single_image" ><br><br>
    <label for="lname">Status:</label><br>
   <select name="status">
      <option value="Active">Active</option>
      <option value="InActive">InActive</option>
  </select>


    <button type="submit" >Submit</button>
</form>

@endsection
