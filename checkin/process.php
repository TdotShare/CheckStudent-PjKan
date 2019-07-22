<?php include 'config/connect.php';

//เข้าสู่ระบบ
if($_GET['cmd'] == "login"){	
session_start();

//$key = "4920649deae7f26ca8d8f8169add6a6c";
$strSQL = "SELECT id, user, password FROM user WHERE user = '".mysqli_real_escape_string($con,$_POST["username"])."' 
	and password = '".mysqli_real_escape_string($con,$_POST["password"])."'";
	//and password = '".mysqli_real_escape_string($con,md5(md5(md5(($key)+($_POST["password"])))))."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "
		<script>
		alert('Username หรือ Password ไม่ถูกต้อง');
		window.location = 'login.php';
		</script>";
	}


		$_SESSION["username"] = $objResult["user"];
		$_SESSION['uid'] = $objResult["id"];
		
			session_write_close();
			
		
			header("location:index.php");
			
	
	mysqli_close($con);

}	


//ออกจากระบบ
if($_GET['cmd'] == "logout"){	
	session_start();
	session_destroy();
	header("Location: login.php ");
	exit();
}	


//ตรวจสอบกิจกรรมในระบบ
if($_GET['cmd'] == "checkactivity"){	
session_start();

	$strSQL = "SELECT id FROM activitys WHERE id = '".mysqli_real_escape_string($con,$_POST["activity"])."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResults = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	
	if($objResults)
	{
		$_SESSION["username"] = $_POST["user"];
		$_SESSION["userid"] = $_POST["userid"];
		$_SESSION["activity"] = $objResults["id"];
		
		
			session_write_close();
			
		
			header("location:check.php");
			
	}

		echo "
		<script>
		alert('ไม่พบรหัสกิจกรรมในระบบ หรือรหัสไม่ถูกต้อง');
		window.location = 'index.php';
		</script>";
		
			
	
	mysqli_close($con);

}	

//บันทึกข้อมูลการเช็ค
if($_GET["cmd"] == "checkrecord"){
date_default_timezone_set("Asia/Bangkok");
session_start();
	
	if($_SESSION['username'] == "")
	{
		echo "
		<script>
			alert('กรุณาล็อกอินก่อน');
			window.location = 'login.php';
		</script>";
		exit();
	}else{
		//ตรวจสอบการลงซ้ำ
		// $userid = $_POST["userid"];
		// 		$strSQL = "SELECT id FROM activitys WHERE id = '".mysqli_real_escape_string($con,$_POST["activity"])."'";
		// 		$objQuery = mysqli_query($con,$strSQL);
		// 		$objResults = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	
		// if (!$student_id == $userid){
		// 	echo "<script>
		// 	window.location = 'check.php';
		// 	</script> ";
		// }
		
		$userid = $_POST["userid"];
		$activityid = $_POST["activity"];
		$studentid = $_POST["studentid"];
		$result = 1; //1 แทนสำเร็จ 2 แทนมาสาย

		$sql = "INSERT INTO record (student_id, activity_id, user_id, results, time)
				VALUES ('$studentid', '$activityid', '$userid', '$result', NOW())";

		if (mysqli_query($con, $sql)) {
		echo "
		<script>
			window.location = 'check.php';
		</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}

		mysqli_close($con);
		exit();
	}
}



//เพิ่มผู้ใช้
if($_GET["cmd"] == "adduser"){
date_default_timezone_set("Asia/Bangkok");
session_start();
	
	if($_SESSION['username'] == "")
	{
		echo "
		<script>
			alert('กรุณาล็อกอินก่อน');
			window.location = 'login.php';
		</script>";
		exit();
	}else{
		
		$id = $_POST["id"];
		$user = $_POST["user"];
		$password = $_POST["password"];
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$position = $_POST["position"];
		$key = "4920649deae7f26ca8d8f8169add6a6c";;
		//ใส่รหัสสามชั้น
		@$password = md5(md5(md5($key+$password)));
		
		$sql = "INSERT INTO user (id, user, password, name, phone, position)
				VALUES ('$id', '$user', '$password', '$name', '$phone', '$position')";

		if (mysqli_query($con, $sql)) {
		echo "
		<script>
		alert('เพิ่มผู้ใช้เรียบร้อยแล้ว, ".$name." สำเร็จ');
			window.location = 'userview.php';
		</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		exit();
	}
}
?>