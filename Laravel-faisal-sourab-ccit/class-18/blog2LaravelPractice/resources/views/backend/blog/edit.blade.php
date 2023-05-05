
@extends('layouts.app');

@section('content')
    <div class="container">

        @if(session()->has('success'))
            <span class="alert alert-success">{{ session('success') }}</span>
        @endif

{{--        @php--}}
{{--           var_dump($post);--}}
{{--        @endphp--}}

        <div class="card col-lg-5 mx-auto shadow">
            <div class="card-header px-0 bg-primary text-light">
                <h3 class="text-center">Edit Blog Post</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('blog.update',$post->id) }}" method="POST">

                    @csrf
                    @method('PUT')
                    <input type="text" name="title" class="form-control my-3" placeholder="Blog Title" value="{{ $post->title }}">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <textarea name="detail" class="form-control my-3" placeholder="Blog Details">{{ $post->detail }}</textarea>
                    @error('detail')
                    <span class="text-danger"> {{ $message }}</span></br>
                    @enderror
                    <button class="btn btn-primary">Update Blog Post</button>
                </form>
            </div>
        </div>
    </div>

@endsection
