
    <!-- @if($grassColor == "green")
    Yes,This is true
    @elseif($grassColor == "yellow")
    Might be
    @else
    NO, This is false
    @endif
    <?= "</br>"; ?>
    @foreach($userNames as $name)
    {{$name}}
    @endforeach

    @guest
    <h2>credit info</h2>
    @endguest -->
@extends('layouts.FrontendLayout')

@section('title')
Hello Bangladesh
@endsection

@section('missingPiece')
<div class="card col-lg-5 mx-auto mt-5">
    <div class="card-header">
        Home Card


    </div>
    
    @foreach ($userNames as $key=>$name)
        {{$name}}
        @if ($key < 1)
        @break
        @endif
        @endforeach

    <div class="card-body">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque totam facilis neque sit amet consectetur adipisicing elit. Doloremque totam facilis nequequis excepturi minima error ut ipsum natus molestias!</p>
    </div>
</div>
@endsection

