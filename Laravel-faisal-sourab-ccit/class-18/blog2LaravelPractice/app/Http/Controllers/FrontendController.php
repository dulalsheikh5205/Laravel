<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::where('status',1)->orderBy('created_at','DESC')->get();
//        dd($posts);
        return view('welcome',compact('posts'));
    }

    public function postView(Post $post)
    {
    //    $post = Post::where('slug',$slug)->first();
    //        dd($post);
        //   $post->increment('view_count');

        $sessionName = 'postView-'.$post->id;
        // dd($sessionName);
        // if(Session::has($sessionName)){
        //     echo 'Nothing to do'; /* এই Session টা নিচে short করে লিখতে হচ্ছে */
        //     exit();
        // }else{
        //     $post->increment('view_count');
        //     session::put($sessionName, true);
        // }

        if(!Session::has($sessionName)){
            $post->increment('view_count');
            session::put($sessionName, true);
        }
        return view('frontend.blog.show', compact('post'));
    }
}
 