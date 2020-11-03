<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<html>
<head>
	<title>Add Driver</title>
</head>

<body>
<?php
//including the database connection file
include_once("../connection.php");

if(isset($_POST['Submit'])) {	
	$sana = $_POST['sana'];
	$load_itc = $_POST['load_itc'];
  $load_broker = $_POST['load_broker'];
  $voditel = $_POST['voditel'];
  $amount = $_POST['amount'];
  $amount_d = $amount*0.01;
  $loginId = $_SESSION['id'];
	//$loginId = $_SESSION['id'];
 
  //var_dump($sana, $load_itc, $load_broker, $voditel, $amount, $amount_d, $loginId);


	// checking empty fields
	
		// if all the fields are filled (not empty) 
			
        //insert data to database	
        // Perform a query, check for error
      //  if (!$mysqli -> query("INSERT INTO loads(sana, load_itc,  drivers_name, amount, amount_d, login_id ) VALUES('$sana','$load_itc', '$voditel', '$amount', '$amount_d', '$loginId')")) {
       // echo("Error description: " . $mysqli -> error);
         //    }
  
  //$mysqli -> close();
 


		$result = mysqli_query($mysqli, "INSERT INTO loads(sana, load_itc, drivers_name, amount, amount_d, login_id, load_broker ) VALUES('$sana','$load_itc','$voditel', '$amount', '$amount_d', '$loginId', '$load_broker')");
	//var_dump($result);
    //display success message
    
    ?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
  <img src="../images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
  <?php echo "Data added successfully."?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="../index.php">Home</a>
      <a class="nav-link" href="../view.php">View Drivers Update</a>
      <a class="nav-link" href="view.php">View Loads</a>
      <a class="nav-link" href="../logout.php">Logout</a>
      
      
    </div>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<?php
	}

?>
</body>
</html>
