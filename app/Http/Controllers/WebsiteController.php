<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Post;
class WebsiteController extends Controller
{
    public function Index(){
        return view("StoreStudent");
    }



    public function Student(){
        return view("Student");
    }


    public function store_student(Request $request){
    $request->validate([
"student_name"=>"required",
"student_email"=>"required",
"password"=>"required",
"student_description"=>"required",
"status"=>"required",
"age"=>"required",
    ]);
$input=$request->all();
Student::create($input);

return redirect()->back()->with("message","Successfully Student Create");

    }


    public function show_student(){
        $student=Student::all();
        return view("ShowStudent",compact("student"));
    }
    public function edit(Request $request){
        $student=Student::find($request->id);
        return view('edit',compact("student"));
    }


    public function edit_student(Request $request , $id){
$student=Student::find($id);
// $student->student_name=$request->student_name;
// $student->student_email=$request->student_email;
// $student->status=$request->status;
$input=$request->all();
$student->update($input);
return redirect()->route('website.showStudent')->with("message","Successfully Student Update");
    }


    public function delete_student($id){
        $student=Student::find($id);
        $student->delete();
        return redirect()->back()->with("message","Successfully Student Deleted");
    }

    public function view($id){
        $student=Student::find($id);
        return view('view',compact('student'));
    }


    public function post($id){
        $student=Student::find($id);
        return view('CreatePost',compact("student"));
    }

    public function store_post(Request $request , $id){
        $request->validate([
            "title"=>"required",
            "description"=>"required",
            "single_image"=>"required|image",
        ]);

        $input=$request->all();
        $filename = rand(00000,99999).".".$input['single_image']->extension();
        $path=$input['single_image']->storeAs('post',$filename,'public');
        $input['single_image']=$path;
$input['user_id']=$id;
        $post=Post::create($input);
        return redirect()->back();
    }
}
