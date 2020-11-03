<?php session_start(); ?>

<?php

if(!isset($_SESSION['valid'])) {

	header('Location: ../login.php');

}
$id = $_GET['id'];
$name=$_GET['name'];
//var_dump($id);
//var_dump($name);

?>



<?php

//including the database connection file

include_once("../connection.php");


//fetching data in descending order (lastest entry first)

 $admin = mysqli_query($mysqli, "SELECT * FROM login where id=".$_SESSION['id']."");
 $admin_n=mysqli_fetch_array($admin);
 $ad = $admin_n['admin'];
//var_dump($ad);
 if ($ad === '1') {
   $result = mysqli_query($mysqli, "SELECT * FROM loads where login_id=$id  ORDER BY id ASC");
  
 } else {
 //echo "Not authorized";
 ?>
<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



    <title>Turbollc - View Loads</title>

  </head>

  <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

  <a class="navbar-brand" href="#">

  <img src="../images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
   Not Authorized

  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

    <div class="navbar-nav">

      <a class="nav-link" href="../index.php">Home</a>
      <a class="nav-link" href="../view.php ">View the Drivers</a>
      <a class="nav-link" href="add.html">Add new Load</a>

      <a class="nav-link" href="../logout.php">Logout</a>

      

      

    </div>

  </div>

</nav>


<?php
exit;
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



    <title>Turbollc - View Loads</title>

  </head>

  <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

  <a class="navbar-brand" href="#">

  <img src="../images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
<?php echo $name;?>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

    <div class="navbar-nav">

      <a class="nav-link" href="../index.php">Home</a>
      <a class="nav-link" href="../view.php ">View the Drivers</a>
      <a class="nav-link" href="add.html">Add new Load</a>

      <a class="nav-link" href="../logout.php">Logout</a>

      

      

    </div>

  </div>

</nav>



<table class="table table-striped">

  <thead>

    <tr>

      <th scope="col">ID</th>

      <th scope="col">Date</th>

      <th scope="col">Load # by ITC</th>

      <th scope="col">Load # by Broker</th>

      <th scope="col">Drivers Name</th>

      <th scope="col">Amount</th>
      <th scope="col">D Amount</th>

    </tr>

    </thead>

  <tbody>

    <?php
//example

if ($result) { 

    if($result->num_rows === 0)
    {
        echo 'No Data';
    }
    else
    {
        //output results from database
        while($res = mysqli_fetch_array($result)) {		

          echo "<tr>";
    
          echo "<td>".$res['id']."</td>";
    
       echo "<td>".$res['sana']."</td>";
    
          echo "<td>".$res['load_itc']."</td>";
    
          echo "<td>".$res['load_broker']."</td>";
    
          echo "<td>".$res['drivers_name']."</td>";
          echo "<td>".$res['amount']."</td>";
          //echo "<td>".$res['amount_d']."</td>";
    
          
    
          echo "<td>".$res['amount_d']."</td>";	echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
    
            
    
        }
    }
}





   
		?>

    </tbody>

</table>







    



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



    

  </body>

</html>