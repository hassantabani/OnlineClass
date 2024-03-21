<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            "student_name"=>"Hassan",
            "student_email"=>"hassan@gmail.com",
            "password"=>"12345",
        "student_description"=>"New Student",
        "status"=>"Active",
        "age"=>20
        ]);
    }
}
