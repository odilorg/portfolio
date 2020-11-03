<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
?>
	<script type="text/javascript">
window.location.href = 'index.php';
</script>
<?php
}
?>
<?php
$style="";
$login=$_SESSION['id'];
//including the database connection file
include_once("connection.php");
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM drivers  ORDER  BY driver_name ASC");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Turbollc - Dispatch view Drivers</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
  <img src="images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="index.php">Home</a>
      <a class="nav-link" href="add.html">Add new Driver</a>
      <a class="nav-link" href="dispatchers/view.php">My Loads</a>
      <a class="nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Truck</th>
      <th scope="col">Trailer</th>
      <th scope="col">Driver</th>
      <th scope="col">Delivery loc</th>
      <th scope="col">Delivery date</th>
      <th scope="col">Notes</th>
      <th scope="col">Comments</th>
      <th scope="col">Updated</th>
    </tr>
    </thead>
  <tbody>
    <?php
		while($res = mysqli_fetch_array($result)) {		
  $style='';
  if ($res['today_red'] === '1') {
  $style = 'style="color:red;"';
}
      echo "<tr>";
      echo "<td style=\"color:#0a22d8;\">".$res['truck']."</td>";
			echo "<td style=\"color:#0d991a;\">".$res['trailer']."</td>";
      echo "<td>".$res['driver_name']."</td>";
      echo "<td>".$res['delivery_location']."</td>";
      echo "<td ".$style." >".$res['delivery_date']."</td>";
      echo "<td>".$res['notes']."</td>";
      echo "<td>".$res['comments']."</td>";
			echo "<td style=\"color:#90958f;\">".$res['updated']. "</td>";	echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
    </tbody>
</table>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>