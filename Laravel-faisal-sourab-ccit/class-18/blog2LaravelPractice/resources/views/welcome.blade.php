@extends('layouts.app');
@section('content')
    <div class="container">
        <h2>All Blog Post</h2>

        <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-4">
                    <div class="card px-2">
                        <div class="card-header">
                           <a href=" {{ route('post.view',$post->slug) }} " > {{$post->title}} <span class="badge bg-primary float-end">{{$post->view_count}}</span></a>
                        </div>
                        <div class="card-header">{{ $post->detail }}</div>
                        <div class="card-footer">Author Name: {{ $post->added_by }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
