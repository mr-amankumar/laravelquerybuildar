<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class StudentSeeder extends Seeder
{
    
    public function run(): void
    {
        $json = File::get(path:'database/json/students.json');
        $student = collect(json_decode($json));
        $student->each(function($student){
           student::create([
                'name' => $student->name,
                'email' => $student->email
           ]);
        });

        // for array data 
        // $students = collect([
        //     [
        //          'name' => 'Khushi Gautam',
        //          'email' => 'khushi@gmail.com'
        //     ],

        //     [
        //           'name' => 'janhanvi gautam',
        //           'email' => 'jahanvi@gmail.com'
        //     ],

        //     [
        //           'name' => 'ruby Gautam',
        //           'email' => 'ruby@gmail.com'
        //     ],

        //     [
        //           'name' => 'sunita shukla',
        //           'email' => 'sunita@gmail.com'
        //     ],
        // ]);

        // $students->each(function($student){
        //       student::insert($student);
        // });
        // student::create([
        //    'name' => 'aman gautam',
        //    'email' => 'amankld42@gmail.com',
        //    'name' => 'khushbu gautam',
        //    'email' => 'khusbu@gmail.com'

        // ]);
    }
}
