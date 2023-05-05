<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }



    // refactoring store and update

    function postStoreUpdate($request,$blog){
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->detail = $request->detail;
        $blog->added_by = Auth::user()->name;
        $blog->save();
    }



    // refactoring store and update end

    public function addPost(){
        return view('backend.blog.create');
    }
    public function store(Request $request){
//        $slug = Str::slug('Hellow Earth Helo Hello Hodfjdlfjd');
//        dd($slug);
//        // dd($request->all());
//        dd(Auth::user()->email);
        $request->validate([
            'title'=>'required|max:50',
            'detail'=>'required'
        ],
        [
            'title.required'=>'Your title is empty',
            'title.max'=>'you have exceeded more than 50 chars',
            'detail.required'=>'Your detail is empty',
        ]
    );
//        mass assignment
//        $blog = Post::create([
//            'title'=> $request->title,
//            'detail'=>$request->detail,
//            'added_by'=>Auth::user()->name,
////            'added_by'=>auth()->user()->name,
///
//        ]);

        $blog = new Post();
        $this->postStoreUpdate($request,$blog);

//        return back();
//        return redirect()->route('home');
        return back()->with('success','YOur post inserted successfully');
    }

    public function allPosts(){
//        $blogPosts = Post::where('title','dog')->where('added_by','!=','jamal')->get();

        $blogPosts = Post::where('added_by','dulal')->get();
//        dd($blogPosts);
//        return view('backend.blog.all',['blogPosts'=>$blogPosts]);
        return view('backend.blog.all',compact('blogPosts'));
    }

    public function statusUpdate($id){
//        $post = Post::where('id',$id)->get();
        $post = Post::find($id);
        if($post->status == true){
            $post->status = false;
        }else{
          $post->status =  true;
        }
        $post->save();
        return back();
//        dd($post);
    }

    public function editBlog($id){
//        echo $id;
//        exit();

//        $post = Post::all();
        $post = Post::find($id,['id','title','detail']);
//        dd($post);
        return view('backend.blog.edit',compact('post'));
    }

    public function updateBlog(Request  $request,$id){

        $request->validate([
            'title'=>'required|max:50|unique:posts,title,'.$id,
            'detail'=>'required'
        ]);
//        dd($request->all());

        // update
        $blog = Post::find($id);
        $this->postStoreUpdate($request,$blog);

        return redirect()->route('blog.all')->with('success','your post updated successfully');

    }

    public function deleteBlog($id){
     $post = Post::find($id);
     $post->delete($post);
     return back()->with('success','you have deleted successfully');
    }




}



