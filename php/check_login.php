<?php 
require_once('connect.php');
 if(isset($_POST['submit'])){ //เช็คการกดSubmit
     $username = $_POST['username'];
     $password = $_POST['password'];

    $st = $conn->prepare("SELECT * FROM members WHERE mem_username = ?");//กัน SQlinjection
    $st->bind_param('s',$username); // s - string b - blob i - int กำหนดชนิด ในDB
    $st->execute(); //ประมวณผล ข้างบน
    $res = $st->get_result(); //การ GET ข้อมูล
    $row = $res->fetch_assoc();

	//echo '<pre>',print_r ($row),'<pre>';
	if(!empty($row)){

		if(password_verify($password, $row['mem_password'])){
			$_SESSION["mem_id"] = $row["mem_id"];
			$_SESSION["mem_fname"] = $row["mem_fname"];
			$_SESSION["mem_lname"] = $row["mem_lname"];
			$_SESSION["mem_status"] = $row["mem_status"];
			$_SESSION['mem_address']= $row["mem_address"];

			if($_SESSION["mem_status"]=="admin"){
				header("location:../assets/admin/pages/index.php");
			}else{
				header('location:../index.php');
			}
		}else{
			echo ("<script LANGUAGE='JavaScript'>
        window.alert(' Password ไม่ถูกต้อง');
        window.location.href='../index.php';
        </script>"); 
		}

	}else{
		echo ("<script LANGUAGE='JavaScript'>
        window.alert('Username หรือ Password ไม่ถูกต้อง');
        window.location.href='../index.php';
        </script>"); 
	}
	
}else{
    header('location:../index.php');
 }








 
?>