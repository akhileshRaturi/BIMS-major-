<?php 
	session_start();
	include_once("config.php"); 
	if(!isset($_SESSION['username'])){
   header("Location:login.php");
   }

   $username = $_SESSION['username'];
$sql="Select * FROM `registeration` WHERE `username`='$username'";
$retval = $mysqli->query($sql);
if($retval){
  while($row=mysqli_fetch_assoc($retval)){
	$name=$row['student_name'];
			 }
}
$sql="Select * FROM `admin` WHERE `username`='$username'";
$retval = $mysqli->query($sql);
if($retval){
  while($row=mysqli_fetch_assoc($retval)){
    $name=$row['username'];
             }
}

?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BIMS </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


 <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
	  <li class="nav-item">
		<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
	  </li>
	  <li class="nav-item d-none d-sm-inline-block">
		<a href="dashboard.php" class="nav-link">Home</a>
	  </li>
	  <li class="nav-item d-none d-sm-inline-block">
		<a href="contact.php" class="nav-link">Contact</a>
	  </li>

	  <li class="nav-item d-none d-sm-inline-block">
		<a href="logout.php" class="nav-link">Logout</a></li>
	</ul>
	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
	  <!-- Messages Dropdown Menu -->
	</ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #000000;">
	<!-- Brand Logo -->
	<a href="dashboard.php" class="brand-link">
	  <img src="your-logo-3-.png"
		   alt="AdminLTE Logo"
		   class="brand-image img-circle elevation-3"
		   style="opacity: 1.5">
	  <span class="brand-text font-weight">B I M S</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
	  <!-- Sidebar user (optional) -->
	 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
	   <div class="image">
		  <img src="dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
		</div>
		<div class="info">
		  <a href="#" class="d-block" style="color:white;"><?php echo"".$name?></a>
		</div>
	  </div>

	  <!-- Sidebar Menu -->
	  <nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		  <!-- Add icons to the links using the .nav-icon class
			   with font-awesome or any other icon font library -->
		   <li class="nav-item has-treeview">
			<a href="dashboard.php" class="nav-link">
			  <i class="nav-icon fas fa-tachometer-alt"></i>
			  <p>
				Dashboard
				<i class="right fas "></i>
			  </p>
			</a>  
		  </li>
		  <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon fas fa-chart-pie"></i>
			  <p>
				Inforamtion
				<i class="right fas fa-angle-right"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="table1.php" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Students Information</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="bond.php" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Bond Information</p>
				</a>
			  </li>
			</ul>
			 <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon fas fa-copy"></i>
			  <p>
				Student Posting Details
				<i class="right fas fa-angle-right"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="posting.php" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Bond Postings</p>
				</a>
			  </li>
			</ul>
			<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon far fa-plus-square"></i>
			  <p>
				Registrations
				<i class="right fas fa-angle-right"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="sign.php" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Add User</p>
				</a>
			  </li>
			</ul>
		   <ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="delete.php" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Delete User</p>
				</a>
			  </li>
			</ul>
		  </li>
		  <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon far fa-envelope"></i>
			  <p>
				Feedbacks
				<i class="fas fa-angle-right right"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="inbox.php" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Inbox</p>
				</a>
			  </li>
			</ul>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="compose.php" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>compose</p>
				</a>
			  </li>
			</ul>
		  </li>
		  <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Changes Required
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="changeinbox.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="changesrequired.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Changes</p>
                </a>
              </li>
            </ul>
          </li><li class="nav-item has-treeview">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon fa fa-power-off"></i>
                <p>
                  Logout
                  <i class="right fas "></i>
                </p>
              </a>  
            </li>
		</ul>
	  </nav>
	</div>
	<!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <div class="container-fluid">
		<div class="row mb-2">
		  <div class="col-sm-6">
			<h1><b>Changes Inbox</b></h1>
		  </div>
		  <div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
			  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
			  <li class="breadcrumb-item active">Changes Inbox</li>
			  <li class="breadcrumb-item active">Inbox</li>
			</ol>
		  </div>
		</div>
	  </div><!-- /.container-fluid -->
	</section>

		<section class="content">
		<!-- /.col -->
		<div class="col-md-9">
		  <div class="card card-primary card-outline">
				<div class="card-header">
				  <h3 class="card-title"><b>Inbox</b></h3>
				</div>
			  
			<!-- /.card-header -->
			<div class="card-body p-0">
				<div class="mailbox-controls">
					<button type="button"  class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
					<table><thead>
						<div><tr>
							<th>	 </th>
							<th> 	 </th>
							<th> 	 </th>
							<th> 	 </th>
							<th> 	 </th>
							<th> 	 </th>
							<th> 	 </th>
						</tr></div>
					</thead></table>
				</div>

				<div class="table-responsive mailbox-messages">
					<table class="table table-hover table-striped">

						<?php
						$count=1;
						$sql = "SELECT * FROM changeprofile";
						$result = $mysqli->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) { ?>
								<tbody>
									<tr><td ><?php echo $count; ?></td>
										<td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
										<td ><?php echo $row["name"]; ?></td>
										<td ><?php echo $row["email"]; ?></td>
										<td ><?php echo $row["comment"]; ?></td>
										<td><?php  echo date('d-m-Y ,  h:i a ', strtotime($row["time"]));?></td>
										<td >
											<a href="compose.php">Reply</a>
										
									</tbody>

									<?php $count++; }} ?>

								</table>
							</div>

							<div class="card-footer p-0">
							</div>
						</div>
		  <!-- /.card -->
		</div>
		<!-- /.col -->
	  </div>
	  <!-- /.row -->
	</section>
	<!-- /.content -->
</div>
  <footer class="main-footer">
	<strong>Major Project &copy; 2020.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
	submitHandler: function () {
	  alert( "Form successful submitted!" );
	}
  });
  $('#quickForm').validate({
	rules: {
	  student_roll: {
		required: true,
	  }
	}
  });
  errorPlacement: function (error, element) {
	  error.addClass('invalid-feedback');
	  element.closest('.form-group').append(error);
	},
	highlight: function (element, errorClass, validClass) {
	  $(element).addClass('is-invalid');
	},
	unhighlight: function (element, errorClass, validClass) {
	  $(element).removeClass('is-invalid');
	}
  });
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
</script>
</body>
</html>
