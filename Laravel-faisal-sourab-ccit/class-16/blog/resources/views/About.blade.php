<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ route('about',[5205,'dulal'])}}">About</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<div class="card col-lg-5 mx-auto mt-5">
    <div class="card-header">
        About Card
    </div>
    <div class="card-body">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque totam facilis neque sit amet consectetur adipisicing elit. Doloremque totam facilis nequequis excepturi minima error ut ipsum natus molestias!</p>
    </div>
</div>
</body>
</html>