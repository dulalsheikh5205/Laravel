@extends('layouts.app');

@section('content')

<div class="container">

    @if(session()->has('success'))
        <span class="alert alert-success">{{ session('success') }}</span>
    @endif

    <div class="card col-lg-5 mx-auto shadow">
        <div class="card-header px-0 bg-primary text-light">
            <h3 class="text-center">Add Blog Post</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('blog.store') }}" method="POST">
                @csrf
                <input type="text" name="title" class="form-control my-3" placeholder="Blog Title" value="{{ old('title') }}">
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <textarea name="detail" class="form-control my-3" placeholder="Blog Details">{{ old('detail') }}</textarea>
                @error('detail')
                <span class="text-danger"> {{ $message }}</span></br>
                @enderror
                <button class="btn btn-primary">Submit Blog Post</button>
            </form>
        </div>
    </div>
</div>

@endsection

