<?php
include 'config/connect.php';
error_reporting(0);
session_start();
if ($_SESSION['username'] == "") {
    echo "
		<script>
		 alert('กรุณาล็อกอิน');
		window.location = 'login.php';
		</script>";
    exit();
}
$user = ($_SESSION['username']);
$u = ($_SESSION['userid']);
$activity = ($_SESSION['activity']);

?>

<head>
	<title>CHECK-EASY v.01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');

</script>
<body onLoad="setFocus();">

<div class="container-contact100">

		<div class="wrap-contact100">
			<form  action="process.php?cmd=checkrecord" method="POST" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Check-In <a href="process.php?cmd=logout"><font color="#CB4335">ออก</font></a>
				</span>
				<span class="contact100-form-title">
				<a><font color="#CB4335">STFF : <?php echo $user; ?></font></a>
				</span>
				<!-- <div class="wrap-input100 validate-input" data-validate="Please enter your ID">
					<input align="center" autofocus class="input100" type="text"  name="studentid" placeholder="ID - รหัสนักศึกษา">
					<span class="focus-input100"></span>
				</div> -->
				<center>
				<video id="preview" style="width: 500px;height: 250;"></video>
				</center>
				
				<input hidden="hidden" type="text" id="userid" value="<?php echo $u; ?>">
				<input hidden="hidden"  type="text" id="user" value="<?php echo $user; ?>">
				<input hidden="hidden" type="text" id="activity" value="<?php echo $activity; ?>">

				<!-- <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							GO
						</span>
					</button>
				</div> -->
			</form>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


</body>
</html>
