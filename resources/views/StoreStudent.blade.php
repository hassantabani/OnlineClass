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

  <label for="fname">Student name:</label><br>
  <input type="text" id="student_name" name="student_name" ><br>
  <label for="lname">Student Email:</label><br>
  <input type="email" id="student_email" name="student_email"><br><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="password" name="password" ><br><br>
  <label for="lname">Student description:</label><br>
  <input type="text" id="student_description" name="student_description" ><br><br>
  <label for="lname">Status:</label><br>
 <select name="status" id="status">
    <option value="Active">Active</option>
    <option value="InActive">InActive</option>
</select>
  <label for="lname">Age:</label><br>
  <input type="number" id="age" name="age" ><br><br>

  <button type="submit" onclick="submit()">Submit</button>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
function submit(){
    var name = document.getElementById('student_name').value;
    var email = document.getElementById('student_email').value;
    var age =document.getElementById('age').value;
    var password =document.getElementById('password').value;
    var status = document.getElementById('status').value;
    var description = document.getElementById('student_description').value;

    console.log(name , email , age , status , description)
    var formdata={
student_name:name,
student_email:email,
password:password,
student_description:description,
status:status,
age:age,
    };
    $.ajax({
        type:"Post",
        url:'{{route("website.storestudent")}}',
        data:formdata,
        dataType:"json",
        encode:true,
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        },
        error: function(xhr,textStatus , errorThrown){
            console.log(xhr.responseText);
        }
    }).done(function(data){
console.log(data);
    })
    
}
    </script>

@endsection
