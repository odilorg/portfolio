<?php session_start(); ?>

<?php
$name=$_SESSION['name'];
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<?php
// including the database connection file
include_once("connection.php");
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$truck = $_POST['truck'];
	$trailer = $_POST['trailer'];
  $driver_name = $_POST['driver_name'];
  $delivery_location = $_POST['delivery_location'];
  $delivery_date = $_POST['delivery_date'];
  $comments = $_POST['comments'];
  $notes = $_POST['notes'];	
  if (isset($_POST['today'])) {
  if ($_POST['today']==='1') {
   $today="1";
 }else {
   $today="0";
 }
  }else {
    $today="";
  }

	// checking empty fields
	if(empty($truck) || empty($trailer) || empty($notes)) {
		if(empty($truck)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($trailer)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		if(empty($notes)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}		
	} else {	
    $tt = strtotime(date("h:i:sa"))+25200;
    $t=date("h:i:sa",$tt);
    
    $updated = date("d.m.Y") ." at ". $t . " by ".$name;
    //updating the table
		$result = mysqli_query($mysqli, "UPDATE drivers SET updated = '$updated', today_red='$today',  comments = '$comments', truck='$truck', trailer='$trailer', driver_name='$driver_name', delivery_location='$delivery_location', delivery_date='$delivery_date', notes='$notes' WHERE id=$id");
		//redirectig to the display page. In our case, it is view.php
		?>
<script type="text/javascript">
window.location.href = 'view.php';
</script>
<?php
	}

}

?>

<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM drivers WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
	$truck = $res['truck'];
  $trailer = $res['trailer'];
  $driver_name = $res['driver_name'];
  $delivery_location = $res['delivery_location'];
  $delivery_date = $res['delivery_date'];  
  $notes = $res['notes'];
  $comments = $res['comments'];
  
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Update Driver Info</title>
  </head>
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
      <a class="nav-link" href="view.php">View Data</a>
      <a class="nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/logo.jpg" alt="" width="72" height="72">
    <h2>Update Driver info</h2>
    
  </div>
  <div class="row">
    <div class="container-md  ">
      <form action="edit.php" method="post" name="form1" class="needs-validation" >
        <div class="mb-3">
          <label for="username">Truck #</label>
          <div class="input-group">
            <input type="text" name="truck" class="form-control" value="<?php echo $truck;?>">
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Trailer #</label>
          <input type="text" name="trailer"  class="form-control" value="<?php echo $trailer;?>">
          <div class="invalid-feedback">
            Please enter a valid trailer #
          </div>
        </div>
        <div class="mb-3">
          <label for="username">Driver's Name</label>
          <div class="input-group">
            <input type="text" name="driver_name" class="form-control" value="<?php echo $driver_name;?>">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="username">Deliver Location</label>
          <div class="input-group">
            <input type="text" name="delivery_location" class="form-control" value="<?php echo $delivery_location;?>">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="username">Deliver Date</label>
          <div class="input-group" >
            <input type="text" name="delivery_date" class="form-control" value="<?php echo $delivery_date;?>">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="today"  type="checkbox" value="1" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Mark as Red
              </label>
          </div>
        </div>
        <div class="mb-3">
          <label for="username">Notes</label>
          <div class="input-group">
            <input type="text" name="notes" class="form-control" value="<?php echo $notes;?>">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="username">Comments</label>
          <div class="input-group">
            <input type="text" name="comments" class="form-control" value="<?php echo $comments;?>">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit"><input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				<input type="submit" name="update" value="Update"></button>
      </form>
    </div>
  </div>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

