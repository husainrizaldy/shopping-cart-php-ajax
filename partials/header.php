<?php
include 'config/connect.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Book Store</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<style>
		.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="#">E-Book</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#NavDdown" aria-controls="NavDdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="NavDdown">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<?php if (empty($_SESSION['username'])) {
				
			}else{ ?>
			
			<a class="cart_popover btn btn-secondary mx-3 text-white" data-placement="bottom" data-toggle="popover" title="Shopping Cart">
				<i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i>
				<span class="badge badge-danger">0</span>
			</a>
			<div id="popover_content_wrapper" style="display: none">
				<span id="cart_details"></span>
				<div align="right">
					<a href="#" class="btn btn-primary" id="check_out_cart">
					<i class="fa fa-shopping-cart"></i> Check out
					</a>
					<a href="#" class="btn btn-default" id="clear_cart">
					<i class="fa fa-trash"></i> Clear
					</a>
				</div>
			</div>
			<?php } ?>

			<div class="btn-group">
			  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <i class="fa fa-user"></i>
			    <?php 
			    if (empty($_SESSION['username'])) {
			    	echo "-";
			    } else { echo $_SESSION['username']; }?>
			  </button>
			  <?php

			  ?>
			  <div class="dropdown-menu dropdown-menu-right">
			  	<?php
					if(empty($_SESSION['username'])){ ?>
						<button class="dropdown-item" type="button" data-toggle="modal" data-target="#login"><i class="fa fa-sign-in fa-fw"></i> Masuk</button>
			  			<button class="dropdown-item" type="button" data-toggle="modal" data-target="#daftar"><i class="fa fa-user-plus fa-fw"></i> Daftar</button>
					<?php	
					}
					else
						{ ?>
						<a class="dropdown-item" onclick="return confirm('Anda yakin ingin keluar ?')" href="config/auth.php?logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
					<?php } ?>
			  	

			  </div>
			</div>

		</div>
	</div>
</nav>


<!-- modal daftar -->
<div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Daftar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="config/user.php" method="POST" enctype="multipart/form-data" id="ModalForm">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama_user" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username"  class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password"  class="form-control" required>
			</div>
			<hr>
			<button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Batal</button>
			<button type="submit" name="add_user" class="btn btn-success">Daftar</button>
		</form>	
      </div>
    </div>
  </div>
</div>

<!-- modal login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="config/auth.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password" required>
			</div>
			<hr>
			<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
		</form>	
      </div>
    </div>
  </div>
</div>

<div class="section_hero">
	<div class="head_title">
		<h1>Book Store</h1>
	</div>	
</div>