
    <?php 
    require_once('../../connect.php');
    date_default_timezone_set('Asia/Bangkok');
    $date=date('Y-m-d');
    //echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';
        $school_type_name=$_POST['school_tag_name'];
        $school_type_id=$_POST['school_tag_id'];
        $sql="INSERT INTO `school_tag` VALUES ('$school_type_id','$school_type_name','$date')";
        $res= $conn->query($sql) or die($conn->error);

            if($res){
               
                echo '<script>alert("School tag successfully added.") </script>';
               header('Refresh:0; url=index.php');//สำเร็จ
            }else{
                echo $sql;
            }

       
    }else{
        header('Location: ../../../../login.php');  
    }   
    ?>