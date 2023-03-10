<?php
session_start();

@include 'config.php';

if(isset($_POST['AddWorker'])){

   $name = mysqli_real_escape_string($conn, $_POST['worker_name']);
   $type = mysqli_real_escape_string($conn, $_POST['worker_type']);


   $select = " SELECT * FROM workers WHERE worker_name = '$name' && worker_type = '$type' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }else{
      $error[] = 'user Added!';


      $insert = "INSERT INTO workers(worker_name, worker_type) VALUES('$name','$type')";
       
         
      mysqli_query($conn, $insert);
     // header('location:dashboard_page.php');
        
   }

};



if(isset($_POST['RemoveWorker'])){

   $id = mysqli_real_escape_string($conn, $_POST['id']);

   $name = mysqli_real_escape_string($conn, $_POST['worker_name']);

 
   $select = " SELECT * FROM workers WHERE id = '$id'  ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user Found!----Deleted...';


      
      $delete = " DELETE FROM workers WHERE id = '$id'";
      mysqli_query($conn, $delete);
     // header('location:dashboard_page.php');

   }

};



if(isset($_POST['UpdateWorker'])){

   $id = mysqli_real_escape_string($conn, $_POST['id']);

   $name = mysqli_real_escape_string($conn, $_POST['worker_name']);

   $type = mysqli_real_escape_string($conn, $_POST['worker_type']);
 
   $select = " SELECT * FROM workers WHERE id = '$id'  ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user Found!----Updated...';

 
      
      $Update = " UPDATE  workers SET id = '$id' , worker_name = '$name' ,worker_type = '$type' WHERE id = '$id' ";
      mysqli_query($conn, $Update);
     // header('location:dashboard_page.php');

   }

};



if(isset($_POST['FindWorker'])){

   $id = mysqli_real_escape_string($conn, $_POST['id']);

   $name = mysqli_real_escape_string($conn, $_POST['worker_name']);

   $type = mysqli_real_escape_string($conn, $_POST['worker_type']);
 
   $select = " SELECT * FROM workers WHERE id = '$id'  ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user Found!';

 
      
      // $Update = " UPDATE  workers SET id = '$id' , worker_name = '$name' ,worker_type = '$type' WHERE id = '$id' ";
     // mysqli_query($conn, $Update);
     // header('location:dashboard_page.php');

   }else{
      
      $error[] = 'user Not Found!';

   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<div class="DashBoardcontainer">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
	  <h2>Transactions Page</h2>
      <br></br>
      
     

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


</body>
</html>