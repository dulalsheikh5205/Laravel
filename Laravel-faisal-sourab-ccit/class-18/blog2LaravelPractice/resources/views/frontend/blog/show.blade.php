@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="card px-2">
          <div class="card-header">
             {{ $post->title}}
          </div>
          <div class="card-body">{{ $post->detail }}</div>
          <div class="card-footer">Author Name {{ $post->added_by}} </div>
      </div>
  </div>

@endsection
