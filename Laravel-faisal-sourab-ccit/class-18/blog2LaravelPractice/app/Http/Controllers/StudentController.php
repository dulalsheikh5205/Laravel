<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    public function allSelect(){
    //   $result =  StudentModel::all();
    //   $result =  StudentModel::get(); // Query Builder expression added "DB::table('students')->get()";
      $result =  StudentModel::pluck('name'); // Query Builder expression added "DB::table('students')->pluck('name')";
      return $result;
    }
}
