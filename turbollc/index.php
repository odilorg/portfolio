<?php session_start(); 

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Turbollc - Dispatch</title>
  </head>
  <?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
  <img src="images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
  Welcome <?php echo $_SESSION['name'] ?> !
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="view.php">Add and view Drivers</a>
      <a class="nav-link" href="dispatchers/view.php">My Loads</a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Loads
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="dispatchers/view_d.php?id=5&name=Umid">Umid</a>
          <a class="dropdown-item" href="dispatchers/view_d.php?id=3&name=Umar">Umar</a>
          <a class="dropdown-item" href="dispatchers/view_d.php?id=2&name=Zafar J">Zafar J</a>
          <a class="dropdown-item" href="dispatchers/view_d.php?id=4&name=Isroil">Isroil</a>
          <a class="dropdown-item" href="dispatchers/view_d.php?id=1&name=Umid">Odil</a>
        </div>
      </li>
      <a class="nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<?php
} else {
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
  <img src="images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
  You must be logged in to view this page
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="login.php">Login</a>
    </div>
  </div>
</nav>
<?php
	}

	?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>