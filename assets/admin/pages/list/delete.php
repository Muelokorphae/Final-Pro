<?php 
include_once('../authen.php');
include_once('../../connect.php');
?>
<?php
    $school_id=$_GET['school_id'];
    $sql="DELETE FROM `school` WHERE school_id = $school_id";
   
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("ลบข้อมูลเสร็จสิ้น!")</script>'; 
        header('Refresh:0; url=index.php');
    } else {
        echo "Error deleting record: ";
         header('Refresh:0; url=index.php');
	}
	mysqli_close($conn);
?>