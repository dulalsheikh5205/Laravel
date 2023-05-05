<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // import

class BasicCurdController extends Controller
{
   public function onSelect(){
//    return  $jsonData =  DB::select('SELECT * FROM students');
       /* এখন database থেকে data যখন laravel এ select করে, তখন select data json আকারে থাকে,এখন যদি web.php থেকে select routes থেকে দেখা  হয়, '/select' routes এ যাওয়ার সাথে সাথে database থেকে data, json আকারে আসলো, by default যখন database থেকে যখন data select করা হয়, তখন json আকারে data আসে, পরে আমরা json data কে json_encode() করে,তারপর json_decode() করবো, আর json data কে decode করলে, তা Associative array তে পরিনত, হবে, মূলত আমাদের associative array টায় দরকার,
         */
      $jsonData =  DB::select('SELECT * FROM students WHERE name = ?',['Rain']);
      $jsonString = json_encode($jsonData);  // json_encode() method will convert data as a json string data
      $selectData = json_decode($jsonString); // json_decode() method will convert data as a associative array
     return view('select',['selectKey'=>$selectData]);
    }
    function onInsert(Request $request){
         $name =  $request->input('name');
         $class = $request->input('class');
         $roll =  $request->input('roll');
       $result = DB::insert('INSERT INTO `students`( `name`, `class`, `roll`) VALUES (?,?,?)',[$name,$class,$roll]);

       if($result == true){
           echo "success";
       }else{
           echo "failed";
       }
    }

    function onDelete(Request $request){
        $id = $request->input('id');
      $result = DB::delete('DELETE FROM `students` WHERE `id`=?',[$id]);

      if ($result == true){
          echo "delete success";
      }else{
          echo "delete failed";
      }
    }
//
    function onUpdate(Request $request){
        $name =  $request->input('name');
        $class = $request->input('class');
        $roll =  $request->input('roll');
        $id = $request->input('id');

      $result = DB::update('UPDATE `students` SET `name`=?,`class`=?,`roll`=? WHERE `id`=?',[$name,$class,$roll,$id]);

      if($result == true){
          echo "update successfully";
      }else{
          echo "update failed";
      }
    }


}
