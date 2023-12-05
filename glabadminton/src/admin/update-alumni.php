<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	$pid = intval($_GET['pid']);
	if (isset($_POST['submit'])) {
		$alumniname = $_POST['packagename'];
		$alumnicourse = $_POST['packagetype'];
		$alumnijob = $_POST['packagelocation'];
		$alumniphone = $_POST['packageprice'];
		$alumniemail = $_POST['packagefeatures'];
		$alumnithought = $_POST['packagedetails'];
		$alumniphoto = $_FILES["packageimage"]["name"];
		// $sql = "update TblTourPackages set PackageName=:pname,PackageType=:ptype,PackageLocation=:plocation,PackagePrice=:pprice,PackageFetures=:pfeatures,PackageDetails=:pdetails where PackageId=:pid";
		// $sql = "INSERT INTO alumnicorner(alumniname,alumnicourse,alumnijob,alumniphone,alumniemail,alumnithought,alumniphoto) VALUES(:alumniname,:alumnicourse,:alumnijob,:alumniphone,:alumniemail,:alumnithought,:alumniphoto)";
		$sql = "update alumnicorner set alumniname=:alumniname,alumnicourse=:alumnicourse,alumnijob=:alumnijob,alumniphone=:alumniphone,alumniemail=:alumniemail,alumnithought=:alumnithought where alumniid=:pid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':alumniname', $alumniname, PDO::PARAM_STR);
		$query->bindParam(':alumnicourse', $alumnicourse, PDO::PARAM_STR);
		$query->bindParam(':alumnijob', $alumnijob, PDO::PARAM_STR);
		$query->bindParam(':alumniphone', $alumniphone, PDO::PARAM_STR);
		$query->bindParam(':alumniemail', $alumniemail, PDO::PARAM_STR);
		$query->bindParam(':alumnithought', $alumnithought, PDO::PARAM_STR);
		$query->bindParam(':pid', $pid, PDO::PARAM_STR);
		$query->execute();
		if($query->execute())
		{
			$msg = "Saved Change successfully.";
		}else{
			$msg = "Please, try again later.";
		}
		
	}

?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title>GLAU | Admin Alumni Corner</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/morris.css" type="text/css" />
		<link href="css/font-awesome.css" rel="stylesheet">
		<script src="js/jquery-2.1.4.min.js"></script>
		<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
		<link rel="icon" href="images\logo.jpg">
		<style>
			.errorWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #dd3d36;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}

			.succWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}
		</style>

	</head>

	<body>
		<div class="page-container">
			<!--/content-inner-->
			<div class="left-content">
				<div class="mother-grid-inner">
					<!--header start here-->
					<?php include('includes/header.php'); ?>

					<div class="clearfix"> </div>
				</div>
				<!--heder end here-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Add Alumni</li>
				</ol>
				<!--grid-->
				<div class="grid-form">

					<!---->
					<div class="grid-form1">
						<h3>Add Alumni Photo</h3>
						<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
						<div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
								<?php
								$pid = intval($_GET['pid']);
								$sql = "SELECT * from alumnicorner where alumniid=:pid";
								$query = $dbh->prepare($sql);
								$query->bindParam(':pid', $pid, PDO::PARAM_STR);
								$query->execute();
								$results = $query->fetchAll(PDO::FETCH_OBJ);
								$cnt = 1;
								if ($query->rowCount() > 0) {
									foreach ($results as $result) {	?>
										<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Alumni name</label>
												<div class="col-sm-8">
													<input type="text" class="form-control1" name="packagename" id="packagename" placeholder="Enter Alumni Name" value="<?php echo htmlentities($result->alumniname); ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Alumni Course</label>
												<div class="col-sm-8">
													<input type="text" class="form-control1" name="packagetype" id="packagetype" placeholder="Eneter Alumni Course" required value="<?php echo htmlentities($result->alumnicourse); ?>">
												</div>
											</div>

											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Alumni Job</label>
												<div class="col-sm-8">
													<input type="text" class="form-control1" name="packagelocation" id="packagelocation" placeholder="Enter Alumni Job" required value="<?php echo htmlentities($result->alumnijob); ?>">
												</div>
											</div>

											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Alumni Phone</label>
												<div class="col-sm-8">
													<input type="text" class="form-control1" name="packageprice" id="packageprice" placeholder="Enter Alumni Phone" required value="<?php echo htmlentities($result->alumniphone); ?>">
												</div>
											</div>

											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Alumni Email-Id</label>
												<div class="col-sm-8">
													<input type="text" class="form-control1" name="packagefeatures" id="packagefeatures" placeholder="Enter Email-Id" required value="<?php echo htmlentities($result->alumniemail); ?>">
												</div>
											</div>


											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Alumni Thought</label>
												<div class="col-sm-8">
													<textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Alumni Thought" required><?php echo htmlentities($result->alumnithought); ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Alumni Photo</label>
												<div class="col-sm-8">
													<img src="alumni/<?php echo htmlentities($result->alumniphoto); ?>" width="200">&nbsp;&nbsp;&nbsp;<a href="change-image.php?imgid=<?php echo htmlentities($result->alumniid); ?>">Change Image</a>
												</div>
											</div>
									<?php }
								} ?>
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button type="submit" name="submit" class="btn-primary btn">Update</button>
										</div>
									</div>





							</div>

							</form>





							<div class="panel-footer">

							</div>
							</form>
						</div>
					</div>
					<!--//grid-->

					<!-- script-for sticky-nav -->
					<script>
						$(document).ready(function() {
							var navoffeset = $(".header-main").offset().top;
							$(window).scroll(function() {
								var scrollpos = $(window).scrollTop();
								if (scrollpos >= navoffeset) {
									$(".header-main").addClass("fixed");
								} else {
									$(".header-main").removeClass("fixed");
								}
							});

						});
					</script>
					<!-- /script-for sticky-nav -->
					<!--inner block start here-->
					<div class="inner-block">

					</div>
					<!--inner block end here-->
					<!--copy rights start here-->
					<?php include('includes/footer.php'); ?>
					<!--COPY rights end here-->
				</div>
			</div>
			<!--//content-inner-->
			<!--/sidebar-menu-->
			<?php include('includes/sidebarmenu.php'); ?>
			<div class="clearfix"></div>
		</div>
		<script>
			var toggle = true;

			$(".sidebar-icon").click(function() {
				if (toggle) {
					$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
					$("#menu span").css({
						"position": "absolute"
					});
				} else {
					$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
					setTimeout(function() {
						$("#menu span").css({
							"position": "relative"
						});
					}, 400);
				}

				toggle = !toggle;
			});
		</script>
		<!--js -->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!-- /Bootstrap Core JavaScript -->

	</body>

	</html>
<?php } ?>