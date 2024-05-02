
    <?php 
    require_once('../../connect.php');
    //echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){
       // echo '<pre>',print_r ($_FILES['file']),'<pre>';
        $file=$_POST['file'];
        $school_name=$_POST['school_name'];
        $school_add=$_POST['school_add'];
        $school_level=$_POST['school_level'];
        $school_link=$_POST['school_link'];
        $school_tag=$_POST['school_tag'];
        $school_date=$_POST['school_date'];
       $temp=explode('.',$_FILES['file']['name']);
        $new_namestore=round(microtime(true)*9999) . '.' . end($temp);
        $url='../../../../assets/image/store/'. $new_namestore;
        if(move_uploaded_file($_FILES['file']['tmp_name'],$url)){
            $sql="INSERT INTO `school` VALUES ('','$school_name','$school_add','$new_namestore','$school_link','$school_level','$school_tag','$school_date')";
        $res= $conn->query($sql) or die($conn->error);
            if($res){
                $_SESSION['school_image'] = $new_namestore;
               echo '<script>alert("เพิ่มสินค้าสำเร็จแล้ว") </script>';
                header('Refresh:0; url=index.php');//สำเร็จ
            }else{
                echo $sql;
            }
        }

       
    }else{
       header('Location: ../../../../login.php');  
    }   
    ?>