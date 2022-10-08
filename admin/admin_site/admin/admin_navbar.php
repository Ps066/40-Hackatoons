<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Abel&family=Anton&family=Architects+Daughter&family=Bebas+Neue&family=Caveat&family=Concert+One&family=Fredoka+One&family=Lobster+Two&family=Mr+Bedfort&family=Neucha&family=Oleo+Script:wght@700&family=Pacifico&family=Ubuntu:wght@300&display=swap');
    </style>
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #66c7c7; color:#ccffff;">
  <div class="container-fluid">
    <p class="m-1">
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample"
        aria-expanded="false" aria-controls="collapseWidthExample" id="toggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="Black" class="bi bi-layout-text-sidebar"
          viewBox="0 0 16 16">
          <path
            d="M3.5 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM3 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
          <path
            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm12-1v14h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 0H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h9V1z" />
        </svg>
      </button>
    </p>
    <a class="navbar-brand m-1" href="#">Admin-title</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div >

  <div class="collapse collapse-horizontal" id="collapseWidthExample" >
    <div class="card" style="width: 300px; height: 100%;">
      <div class="card-body">
        This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
      </div>
    </div>
  </div>
</div>
<!-- <style>
[class*=d-flex]{
  /* font-family: 'Bebas Neue', cursive; */
  font-family: 'Anton', sans-serif;
  font-weight: bold;
  /* color:#ccffff; */
}

</style> -->

</body>
</html>