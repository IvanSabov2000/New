<?php require 'connect.php';
    ?>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<nav class="navbar fixed-top navbar-expand-lg  navbar-dark" style="background:rgba(82, 11, 133, 0.8);">
  <a class="navbar-brand" href="index.php">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <style type="text/css">
    .dropdown:hover>.dropdown-menu{
      display: block;
    }

  .navbar-toggler-icon:hover>.av-item {
      display: block;
    }

  

  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Язык/Nyalyv
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Русский</a>
          <a class="dropdown-item" href="#">Magyar</a>
         </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Регистрация/Вход</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Поиск" style="color: #5d0999;" required="" name="search" aria-label="Search">
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn_seatch"  name="btn_search">Искать</button>
    </form>
  </div>
</nav>

<?php require 'search.php'?>

