<?php 
// echo "<pre>";
// print_r($_POST); //เช็คการส่งค่าแบบARRAY
// echo "</pre>";
?>
<?php 
require_once('../../connect.php');
if (isset($_POST['submit'])) {
    $school_id=$_REQUEST['school_id']; ////รับค่า REQUEST //ค่ายังไม่มา
    $school_image = $_POST['school_image'];//รับค่า POST
    $school_name = $_POST['school_name'];
    $school_add = $_POST['school_add'];
    $school_level = $_POST['school_level'];
    $school_link = $_POST['school_link'];
    $school_tag = $_POST['school_tag'];
    $school_date = $_POST['school_date'];
  //  $imgUpload=$_FILES['imgUpload'];//รับค่า FILE
    $imgUpload_file= $_FILES['imgUpload']['name'];
    $temp = explode('.',$_FILES['imgUpload']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp); 
    $url = '../../../../assets/image/store/'. $new_name ;
        if(isset($school_image) != $imgUpload_file){ //ค่าเหมือนกัน เช่น aa.jpg aa.jpg
             $sql="UPDATE `school` SET `school_name` = '$school_name', `school_add` = '$school_add', `school_level` = '$school_level', `school_link` = '$school_link', `school_tag` = '$school_tag', `school_date` = '$school_date' WHERE `school_id`= '$school_id'";
             $result = $conn->query($sql) or die($conn->error);
             if($result){    
                echo '<script> alert("อัพเดทสำเร็จแล้ว") </script>';
                header('Refresh:0; url=form-edit.php?school_id='.$school_id.'');//สำเร็จ
             }
          
        }else{
            $school_image=$new_name;//เปลี่ยนค่า
            if ( move_uploaded_file($_FILES['imgUpload']['tmp_name'], $url ) ) {
                $sql="UPDATE `school` SET `school_name` = '$school_name',`school_image`='$school_image', `school_add` = '$school_add', `school_level` = '$school_level', `school_link` = '$school_link', `school_tag` = '$school_tag', `school_date` = '$school_date' WHERE `school_id`= '$school_id'";
                $result = $conn->query($sql) or die($conn->error);
                if($result){    
                    $_SESSION['school_image'] = $new_name;
                    echo '<script> alert("อัพเดทสำเร็จแล้ว") </script>';
                    header('Refresh:0; url=form-edit.php?school_id='.$school_id.'');//สำเร็จ
                }
            }
            
        }

} else {
    echo '<script> alert("อัพเดทไม่สำเร็จ") </script>';
    header('location:form-edit.php?school_id='.$school_id.'');//ไม่สำเร็จ
}
?>
