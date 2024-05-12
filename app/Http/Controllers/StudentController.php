<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function showStudent(){
       $students = DB::table('students')->get();
    //    dd($students);
    // return $students;
    }

    public function showUser(){
        //  $myusers = DB::table('myusers')->select('name','age')->get();
        $myusers = DB::table('myusers')->get();
        return view('allusers',['data'=> $myusers]);
        // return view('allusers');
        // $myusers = DB::table('myusers')->where('city','delhi')->get();
        // $myusers = DB::table('myusers')->where('age' ,'>',18)->get();
        // $myusers = DB::table('myusers')->where('age', '<>',21)->get();
        // $myusers = DB::table('myusers')->whereDate('created_at', '2024-04-18 ')->get();
        // $myusers = DB::table('myusers')->whereTime('created_at', '13:27:25')->get();
        // $myusers = DB::table('myusers')->orderBy('age')->get();
        // $myusers = DB::table('myusers')->orderBy('name')->get();
        // $myusers = DB::table('myusers')
        //                  ->latest()
        //                  ->first();
        // return $myusers;
     


        



        //  return $myusers;
        // $myusers = DB::table('myusers')->where('id',2)->get();
        // $myusers = DB::table('myusers')->find(4);
         
        // dd($myusers);
        // dd($myusers);
    }

    public function singleUser(string $id){
        $user = DB::table('myusers')->where('id',$id)->get();
         return view('user',['data'=>$user]);
    }


    public function addUser(){
        $user = DB::table('myusers')
                        ->insertOrIgnore([
                                    'name' => 'Kalplna Gautam',
                                     'email' => 'kalpana@gmail.com',
                                     'age' => 19,
                                     'city' => 'mumbai',
                                     'created_at' => now(),
                                     'updated_at'  => now()

                                     
                        ]);
                       
                        if($user){
                        echo "<h3>Data Added Succesfully</h3>";
                        }else{
                            echo "<h3>Data Not Added</h3>";
                        }

                        $user = DB::table('myusers')
                                        ->insertGetId([
                                            'name' =>' Khushi Gautam',
                                            'email' => 'khushi@gmail.com',
                                            'age' => 19,
                                            'city' => 'mumbai',
                                            'created_at' => now(),
                                            'updated_at'  => now()
                                        ]);
                                        return $user;


                      
    }

    public function updateUser(){
        $user = DB::table('myusers')
                        ->where('id',1)
                        ->update([
                         'city' => 'Gujrat',
                         'email' => 'amanjg@gmail.com'
                        ]);

                        if($user){
                         echo "<h3>Record updated Sucessfully</h3>";
                        }
                        
    }

    public function deleteUser(string $id){
        $user = DB::table('myusers')
                          ->where('id',$id)
                          ->truncate();
                          if($user){
                            return redirect()->route('home');
                          }
    }

}
