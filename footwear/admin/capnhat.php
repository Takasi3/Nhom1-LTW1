
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mobile Admin</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="public/css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="public/css/uniform.css" />
	<link rel="stylesheet" href="public/css/select2.css" />
	<link rel="stylesheet" href="public/css/matrix-style.css" />
	<link rel="stylesheet" href="public/css/matrix-media.css" />
	<link href="public/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
	<?php
							require "config.php";
							require "db.php";
							$db = new db;
							if(isset($_GET['id']))
							{
								$id =$_GET['id'];
								$getProductsByID = $db->getProductsByID($id);
							}
							?>
<body>

	<!--Header-part-->
	<div id="header">
		<h1><a href="dashboard.html">Dashboard</a></h1>
	</div>
	<!--close-Header-part-->

	<!--top-Header-menu-->
	<div id="user-nav" class="navbar navbar-inverse">
		<ul class="nav">
			<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Super Admin</span><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
					<li class="divider"></li>
					<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
				</ul>
			</li>
			<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
					<li class="divider"></li>
					<li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
					<li class="divider"></li>
					<li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
					<li class="divider"></li>
					<li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
				</ul>
			</li>
			<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
			<li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
		</ul>
	</div>

	<!--start-top-serch-->
	<div id="search">
		<form action="result.html" method="get">
			<input type="text" placeholder="Search here..." name="key"/>
			<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
		</form>
	</div>
	<!--close-top-serch-->

	<!--sidebar-menu-->

	<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
		<ul>
			<li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

			<li> <a href="form.html"><i class="icon icon-th-list"></i> <span>Add New Product</span></a></li>
			<li> <a href="manufactures.php"><i class="icon icon-th-list"></i> <span>Manufactures</span></a></li>
			<li> <a href="protype.php"><i class="icon icon-th-list"></i> <span>Protypes</span></a></li>



		</ul>
	</div>

	<!-- BEGIN CONTENT -->
	<div id="content">
		<div id="content-header">
			<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
			<h1>Update Product</h1>
		</div>
		<div class="container-fluid">
			<hr>
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
							<h5>Product Detail</h5>
						</div>
						<div class="widget-content nopadding">

							<!-- BEGIN USER FORM -->
							<form action="addProduct.php" method="post" class="form-horizontal" enctype="multipart/form-data">
								<div class="control-group">
									<label class="control-label">Name :</label>
									<div class="controls">
										<!--- Nhap value san pham qua ID -->
										<input type="text" class="span11" placeholder="Product name" name="name" /> *
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Choose a product type :</label>
									<div class="controls">
										<select name="type_id">
											<?php
											require "config.php";
											require "db.php";
											$db = new db;
//$_FILES['nameInputFile']['properties'];

											$getNameProtypes = $db->getNameProtypes();
											foreach ($getNameProtypes as $value) {

												?>
												<option value="<?php echo $value['type_ID'] ?>"><?php echo $value['type_name'] ?></option>
											<?php }?>

										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Choose a manufacture :</label>
									<div class="controls">
										<select name="manu_id">
											<?php $getManuProducts = $db->getManuProducts();
											foreach ($getManuProducts as $value) {

												?>
												<option value="<?php echo $value['manu_ID'] ?>"><?php echo $value['manu_name'] ?></option>
											<?php }?>
										</select> *
									</div>
									<div class="control-group">
										<label class="control-label">Choose an image :</label>
										<div class="controls">
											<input type="file" name="fileUpload" id="fileUpload">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"  >Description</label>
										<div class="controls">
											<textarea class="span11" placeholder="Description" name =Des "description"></textarea>
										</div>
										<div class="control-group">
											<label class="control-label">Price :</label>
											<div class="controls">
												<input type="text" class="span11" placeholder="price" name =Pri "price" /> *
											</div>

										</div>

										<div class="form-actions">
											<button type="submit" class="btn btn-success" >Add</button>
										</div>
									</div>

								</form>
								<!-- END USER FORM -->


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- END CONTENT -->

		<!--Footer-part-->
		<div class="row-fluid">
			<div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
		</div>
		<!--end-Footer-part-->
		<script src="public/js/jquery.min.js"></script>
		<script src="public/js/jquery.ui.custom.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="public/js/jquery.uniform.js"></script>
		<script src="public/js/select2.min.js"></script>
		<script src="public/js/jquery.dataTables.min.js"></script>
		<script src="public/js/matrix.js"></script>
		<script src="public/js/matrix.tables.js"></script>
	</body>
	</html>