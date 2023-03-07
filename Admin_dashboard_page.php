<?php

@include 'config.php';

session_start();

// if(!isset($_SESSION['admin_name'])){
//    header('location:login_form.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/Tables.css">

</head>
<body>
   
<div class="DashBoardcontainer">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      
      <a href="workers_page.php" class="btn"> Worker</a>
      <!-- <a href="logout.php" class="btn">logout</a> -->


	  <a href="Admin_Appointments.php" class="btn"> Appointments</a>
      <!-- <a href="logout.php" class="btn">logout</a> -->


      <button id="show-table" class="btn">Show Table </button>
      <!-- <table id="my-table" style="display:none;"> -->
      
   </div>

   <!-- table html -->
   <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped" id="my-table" style="display:none;" >
						  <thead>
						    <tr>
						      <th>Invoce</th>
						      <th>Customer</th>
						      <th>Ship</th>
						      <th>Price</th>
						      <th>Pruchased Price</th>
						      <th>Status</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-success">Progress</a></td>
						    </tr>

						    <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-warning">Open</a></td>
						    </tr>

						    <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-danger">On hold</a></td>
						    </tr>

						    <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-success">Progress</a></td>
						    </tr>

						     <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-danger">On hold</a></td>
						    </tr>

						     <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-warning">Open</a></td>

						       <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-warning">Open</a></td>
						    </tr>

						    <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-success">Progress</a></td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
   
   
   <!-- aims to show the table when button clicked  -->
   <script>
   var button = document.getElementById("show-table");
   var table = document.getElementById("my-table");
   
   button.addEventListener("click", function() {
      if (table.style.display === "none") {
         table.style.display = "table";
      } else {
         table.style.display = "none";
      }
   });
   </script>
   
</div>




   <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>