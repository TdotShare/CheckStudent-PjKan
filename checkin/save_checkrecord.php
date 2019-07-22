<?php include 'config/connect.php';

$check = $_POST['cmd'];
date_default_timezone_set("Asia/Bangkok");

if ($check == "checkrecord") {

    try {

        $userid = $_POST["userid"];
        $activityid = $_POST["activity"];
        $studentid = $_POST["studentid"];
        $result = 1; //1 แทนสำเร็จ 2 แทนมาสาย

        $sql = "INSERT INTO record (student_id, activity_id, user_id, results, time)
					VALUES ('$studentid', '$activityid', '$userid', '$result', NOW())";
					
		mysqli_query($con, $sql);

        echo json_encode(array("result" => ["succeed"], 'code' => [$studentid]));

    } catch (PDOException $e) {

        echo json_encode(array('result' => ['fail'], 'error' => [$e]));

    }

} else {
    echo "<script>window.location = 'check.php';</script>";
}
