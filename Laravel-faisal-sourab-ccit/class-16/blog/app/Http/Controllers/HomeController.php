<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $name = "dulal";
        $userNames = ['dulal','jamal','helal'];
        $grassColor = "yellow";
        return view('Home',['name'=>$name,'grassColor'=>$grassColor,'userNames'=>$userNames]);
    }
    public function about($id,$name){
       echo $id;
       echo $name;
        die();
       $title = "This is about page";
        return view('About',['title'=>$title]);
    }

    public function services()
    {
        $username = "Service Page";
        return view('Services',['name'=>$username]);
    }
}
