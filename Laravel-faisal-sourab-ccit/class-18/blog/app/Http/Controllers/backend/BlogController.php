<?php

namespace App\Http\Controllers\backend;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //* refactoring store and update
        function postStoreUpdate($request,$blog)
        {
            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title);
            $blog->details = $request->details;
            $blog->added_by = Auth::user()->name;
            $blog->save();
        }
    //* refactoring store and update end


    public function addPost()
    {
        return view('backend.blog.create');
    }
    
    public function store(Request $request)
    {
      $slug =  Str::slug("Hellow Earth");
        // dd($slug);
    //    dd($request->all());
        // dd(Auth::user()->email);
        $request->validate([
            "title"=>"required|max:50",
            "details"=>"required"
        ],
        [
            'title.required'=>"your title is empty",
            "title.max"=>"you have exceeded more than 50 chars",
            "details.required"=>"your details is empty"
        ]
    );

   
    // mass assinment
    // $blog = Post::create([
    //     "title" => $request->title,
    //     "details" => $request->details,
    //     "added_by"=>Auth::user()->name,
         

    // ]);

    $blog = new Post();
    $this->postStoreUpdate($request,$blog);

    // return back();
    // return redirect()->route('home');
    return back()->with("success","your post inserted successfully");

    }

    public function allPosts(){
        $blogPosts = Post::where('added_by','dulal')->get();
        // dd($blogPosts);
        
        return view("backend.blog.all",compact("blogPosts"));
    }
    public function statusUpdate($id){
        $post = Post::find($id);
        if($post->status == true){
          $post->status = false;
        }else{
          $post->status = true;
        }
        $post->save();
        return back();
    }

    public function editBlog($id){
        $post = Post::find($id,['id','title','details']);
        // dd($post);
        // echo $id;
        // exit; 
       return view('backend.blog.edit',compact('post'));
    }

    public function updateBlog(Request $request,$id){
        // echo $id;
        $request->validate([
            'title'=>'required|max:50|unique:posts,title,'.$id,
            'details'=>'required',
        ]);
        // dd($request->all());
        //UPDATE
      $blog = Post::find($id);
    //   dd($post);
        $this->postStoreUpdate($request,$blog);
        return redirect()->route('blog.all')->with('success','your post updated successfully');         
    }

    public function deleteBlog($id){
        $post = Post::find($id);
        $post->delete();
        return back();
    }

}
