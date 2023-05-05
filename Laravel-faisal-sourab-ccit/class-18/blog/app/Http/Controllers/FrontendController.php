<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index(){
    $posts = Post::where('status',true)->orderBy('created_at','DESC')->get();
    // dd($posts);
    return view('welcome',compact('posts'));    
    }

    public function postView(Post $post){
        // $posts = Post::find($id);
        // dd($posts);
        // $posts = Post::where('slug',$slug)->first();
        // dd($posts->added_by);
        // dd($post);
        // $post->view_count+1;
        // $post->save();

        $sessionName = 'postView-'. $post->id;
        if(!Session::has($sessionName)){
            $post->increment('view_count');
            Session::put($sessionName,true);
        }
        // dd($sessionName);
        // $post->increment('view_count');
        

        return view('frontend.blog.show',compact('post'));
    }
}
?>
