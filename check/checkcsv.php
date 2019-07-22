<?php 
require("config/connect.php");
$conn = mysqli_connect($sername,$uname,$pass,$dbname);
		mysqli_set_charset($conn,"TIS620");
$query = "SELECT student_id, activity_id,time,results FROM record";
if (!$result = mysqli_query($conn, $query)) {
    exit(mysqli_error($conn));
}
 
$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}
 
header('Content-Type: text/csv; charset=TIS620');
header('Content-Disposition: attachment; filename=ผลการเช็ค.csv');
$output = fopen('php://output', 'w');
$head = ['StudentID', 'Activity', 'Time', 'Result'];
fputcsv($output, array_map('utf8_encode',$head));
 
if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>