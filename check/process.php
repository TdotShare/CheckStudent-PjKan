//ไฟล์รวมการคำนวณทั้งหมด
<?php
include "config/connect.php";

//ตรวจสอบกิจกรรมในระบบ
if($_GET['s'] == "putcsv"){	
session_start();

// 	$p = 0;
// 	$objCSV = $_POST['filecsv'];
// 	while (($objArr = fgetcsv($objCSV, 1000, ",")) !== FALSE) {
// 	$strSQL = "INSERT INTO student ";
// 	$strSQL .="(id,lname,fname,major,faculty) ";
// 	$strSQL .="VALUES ";
// 	$strSQL .="('".$objArr[0]."','".$objArr[1]."','".$objArr[2]."' ";
// 	$strSQL .=",'".$objArr[3]."','".$objArr[4]."','".$p[4]."'";
// 	$objQuery = mysqli_query($strSQL);
// }
// fclose($objCSV);

// echo "Import Done.
// 	<script>
// 		alert('success');
// 		window.location = 'index.php?page=importcsv';
// 		</script>";

// 	mysqli_close($con);
$fileName = $_FILES["file"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 1000, ",")) !== FALSE) {
            $sqlInsert = "INSERT into student (id,lname,fname,major,faculty)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "')";
            $result = mysqli_query($con, $sqlInsert);
            
            if (! empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
    }
}	

?>