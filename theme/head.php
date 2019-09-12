<?php require_once __DIR__ . "/../load.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dawning+of+a+New+Day" rel="stylesheet">


    <title>W3lcome!</title>

    <link rel="icon" type="image/x-icon" href="https://digitalent.kominfo.go.id/favicon.ico"/>
  <style type="text/css">
    label:after {
    content: "_";
    opacity: 0;
    animation: cursor 1s infinite
}
.container-artikel{
  width: 700px;
  margin-left: 8rem;
}
.card{
  margin-left: 6rem;
  margin-bottom: 10px;
@keyframes cursor {
    0%,
    100%,
    40% {
        opacity: 0
    }
    50%,
    90% {
        opacity: 1
    }
}
#admin{
  font-weight: bold;
  font-size: 13px;
}
#date{
  font-size: 13px;
}
#comment{
  float: right;
  font-size: 13px;
}
  </style>
  </head>
  <body class="mt-5">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="./"><img class="img-fluid" width="50px;" src="https://digitalent.kominfo.go.id/apple-touch-icon.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Artikel
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">HTML</a>
              <a class="dropdown-item" href="#">CSS</a>
              <a class="dropdown-item" href="#">PHP</a>
              <a class="dropdown-item" href="#">MYSQL</a>
              <a class="dropdown-item" href="#">JAVASCRIPT</a>
              <a class="dropdown-item" href="#">JQUERY</a>
              </div>
            </li>
          </ul>
        </div>
        <form method="POST" action="<?php echo $root;?>search" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Cari.." aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Cari</button>
    </form>
      </nav>
