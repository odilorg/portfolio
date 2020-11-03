<?php session_start(); ?>



<?php

if(!isset($_SESSION['valid'])) {

	header('Location: ../login.php');

}

?>



<?php

// including the database connection file

include_once("../connection.php");



if(isset($_POST['update']))

{	

	
//
$id = $_POST['id'];
$sana = $_POST['sana'];
$load_itc = $_POST['load_itc'];
$load_broker = $_POST['load_broker'];
$voditel = $_POST['voditel'];
$amount = $_POST['amount'];
$amount_d = $amount*0.01;
$loginId = $_SESSION['id'];
	

	// checking empty fields

	if(empty($sana) || empty($load_itc) || empty($amount)) {

				

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

    //updating the table

  

		$result = mysqli_query($mysqli, "UPDATE loads SET sana='$sana', load_itc='$load_itc', drivers_name='$voditel', amount='$amount', amount_d='$amount_d', load_broker='$load_broker' WHERE id=$id");

		

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

$result = mysqli_query($mysqli, "SELECT * FROM loads WHERE id=$id");



while($res = mysqli_fetch_array($result))

{

$sana = $res['sana'];
$load_itc = $res['load_itc'];
$load_broker = $res['load_broker'];
$voditel = $res['drivers_name'];
$amount = $res['amount'];  
$amount_d = $res['amount_d'];


}
var_dump($sana, $load_itc, $load_broker, $voditel, $amount, $amount_d);
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
      <a class="nav-link" href="../index.php">Home</a>
      <a class="nav-link" href="../view.php">View Data</a>
      <a class="nav-link" href="../logout.php">Logout</a>
    </div>
  </div>
</nav>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/logo.jpg" alt="" width="72" height="72">
    <h2>Checkout form</h2>
    <p class="lead">Please fill in the from to register</p>
  </div>
  <div class="row">
    <div class="container-md  ">
    <form action="edit.php" method="post" name="form1" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="username">Date</label>
            <div class="input-group">
              <input type="date" name="sana" class="form-control" id="username"  value="<?php echo $sana;?>">
              <div class="invalid-feedback" style="width: 100%;">
                Your username is required.
              </div>
            </div>
          </div>
        <div class="mb-3">
          <label for="username">Load # by Itc</label>
          <div class="input-group">
            <input type="text" name="load_itc" class="form-control" id="username"  value="<?php echo $load_itc;?>">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Load # by Broker</label>
          <input type="text" name="load_broker"  class="form-control" id="email"  value="<?php echo $load_broker;?>">
          <div class="invalid-feedback">
            Please enter a valid trailer #
          </div>
        </div>
        <div class="mb-3">
          <label for="username">Driver's Name</label>
          <div class="input-group">
            <input type="text" name="voditel" class="form-control" id="username"  value="<?php echo $voditel;?>">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="username">Amount</label>
          <div class="input-group">
            <input type="text" name="amount" class="form-control" id="username"  value="<?php echo $amount;?>">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="username">Amount Dispatcher</label>
          <div class="input-group">
            <input type="text" name="amount_d" class="form-control" id="username"  value="<?php echo $amount_d;?>">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
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

