<?php include_once('../authen.php');
include('../../../../includes/function.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/responsive/responsive.bootstrap4.min.css"><!-- responsive-->
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>School Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="../list">School Management</a></li>
              <li class="breadcrumb-item active">Edit School</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <?php 
include_once('../../connect.php');

// ตรวจสอบว่ามีการส่งค่า imgUpload มาหรือไม่
$imgUpload = isset($_POST['imgUpload']) ? $_POST['imgUpload'] : null;

// ตรวจสอบว่ามีการส่งค่า school_id มาหรือไม่
$school_id = isset($_GET['school_id']) ? $_GET['school_id'] : null;

if ($school_id !== null) {
    $sql = "SELECT * FROM school WHERE school_id = $school_id"; 
    $ress = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($ress);
    $school_tage = $rows['school_tag'];
} else {
    // ทำอะไรก็ตามที่ต้องการหากไม่มีค่า school_id
}
?>


      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <h3 class="card-title d-inline-block">Edit Schoool</h3>
        </div>
        <!-- /.card-header -->
        <form role="form" action="update.php" method="post" enctype="multipart/form-data" id="formRegister">
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="mem_fname">Add Image School</label>
                 
                    <div class="custom-file">
                        <input name="school_id" type="hidden" id="school_id" value="<?php echo $rows['school_id']; ?>">
                        <input type="file" class="custom-file-input" name="imgUpload" id="customFile" >
                        <input name="school_image" type="hidden" id="school_image" value="<?php echo $rows['school_image']; ?>">
                        <label class="custom-file-label" for="customFile" >Choose file</label>
                    </div><br>
                        <figure class="figure text-center mt-2">
                            <img  src="../../../image/store/<?php echo $rows['school_image']?>" id="imgUpload" class="figure-img img-fluid rounded" style="max-width:50%">
                        </figure>
                    </div>
            <table>
            <div class="form-group col-md-6">
                  <label for="school_name">School Name </label>
                  <input type="text" class="form-control" id="school_name" name="school_name" value="<?php echo $rows['school_name']?>">

              </div>
              <div class="form-group col-md-12">
                  <label for="school_add">School Detail </label><br>
                  <textarea name="school_add"  id="school_add" rows="5" class="form-control"><?php echo $rows['school_add']?></textarea>
              </div>
               <div class="form-group col-md-2">
                  <label for="school_level">Level</label>
                  <div class="input-group-prepend">
                  <input type="text" class="form-control" id="school_level" name="school_level" class="form-control" value="<?php echo $rows['school_level']?>">
                
                  </div>
              </div>
              <div class="form-group col-md-2">
                  <label for="school_link">Link of School Web</label>
                  <input type="text" class="form-control" id="school_link" name="school_link"value="<?php echo $rows['school_link']?>">
              </div>
              <div class="form-group col-md-2">
                  <label for="school_tag">School Tag</label>
                  <select class="form-control" name="school_tag">

                  <?php 
                  $sql1="select * from school_tag";
                  $res=mysqli_query($conn,$sql1);
                  while($row=mysqli_fetch_array($res)){
                  ?>
                  <option value="<?php echo $row['school_tag_name']?>" <?php if($row['school_tag_name']==$school_tage){
                      echo "selected";
                  }?>><?php echo $row['school_tag_name']?></option>
                  <?php }
                  ?>
                  </select>


              </div>
              <div class="form-group col-md-2">
                  <label for="school_date">Date</label>
                  <input type="date" class="form-control" id="school_date" name="school_date"value="<?php echo $rows['school_date']?>">
              </div>

              <div class="card-footer col-md-12">
          <a href="form-edit.php?school_id=<?php echo $rows['school_id']?>" class="btn btn-warning float-left">return</a>
          <input type="submit" name="submit" class="btn btn-primary float-right" value="save">
          </div>
            </table>
            </div>
          </div>
        </form>

        <div class="card-body">
        </div>


        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="../../../../node_modules/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/responsive/dataTables.responsive.min.js"></script> <!-- responsive-->
<script src="../../../../node_modules/jquery-validation/dist/jquery.validate.min.js"></script><!--เรียกjquery.validate -->

</body>
</html>
<script>
 $('.custom-file-input').on('change', function(){
    var fileName = $(this).val().split('\\').pop()
    $(this).siblings('.custom-file-label').html(fileName)
    if (this.files[0]) {
        var reader = new FileReader()
        $('.figure').addClass('d-block')
        reader.onload = function (e) {
            $('#imgUpload').attr('src', e.target.result)
        }
        reader.readAsDataURL(this.files[0])
    }
  })
  //formRegister
  $( document ).ready(function(){
            $('#formRegister').validate({
                rules:{
                  store_name:'required',
                  store_comment:'required',
                  store_number:'required',
                  store_price: {
                        required: true,
                        number: true,
                    },
                },
                messages:{
                  store_name: 'โปรดกรอก ชื่อสินค้า',
                  store_comment:'โปรดกรอก รายละเอียดสินค้า',
                  store_price: {
                        number:'กรอกแต่ตัวเลขเท่านั้น',
                        required: 'กรุณากรอกจำนวนเงิน',
                    },
                    store_number:{
                        number:'กรอกแต่ตัวเลขเท่านั้น',
                        required: 'กรุณากรอกจำนวนสินค้า',
                    }
                },
                errorElement: 'div',
                errorPlacement: function ( error, element ){
                    error.addClass( 'invalid-feedback' )
                    error.insertAfter( element )
                },
                highlight: function ( element, errorClass, validClass ){
                    $( element ).addClass( 'is-invalid' ).removeClass( 'is-valid' )
                },
                unhighlight:function ( element, errorClass, validClass ){
                    $( element ).addClass( 'is-valid' ).removeClass( 'is-invalid' )
                }
            });
        })
</script>