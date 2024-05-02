<?php error_reporting(~E_NOTICE);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <!--เรียกbootstrap -->
  <link rel="stylesheet" href="node_modules/font-awesome5/css/fontawesome-all.css">
  <!--เรียกfontawesome -->
  <link rel="stylesheet" href="node_modules/css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/css/flag-icon.css" rel="stylesheet" />
  <!-- ส่วนนี้คือ CSS ที่เป็น Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">

  <title>About</title>
</head>
<style>
  body {
    background-color: #a9a8a863;

  }

  .container {
    background-color: white;
    color: black;
  }

  .card-5 {
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
  }

  .card-3 {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
  }
</style>
<?php 
include('includes/navbar.php')?>

<body>
  <!-- The Modal -->

  <div class="container card-5">
    <h1><br><br><br>
      <center>ກ່ຽວກັບພວກເຮົາ</center>
    </h1><br>
    <div class="row">
      <div class="col-6 col-md-4 border border-secondary rounded card-3"><br>
        <center>
          <h5>ລາຍຊື່ສະມາຊິກກຸ່ມ</h5>ທ້າວ ສຸລິພົງ ວິລິເດດວົງທອງ<br>ທ້າວ ມືໂລະ ກໍແພ<br>ທ້າວ ສະຫວັນ ຄຸນທະຈັກ
        </center><br>
      </div>
      <div class="col-6 col-md-4 border border-secondary rounded card-3"><br>
        <center>
          <h5>ບົດຈົບຊັ້ນ</h5>
          ບົດຈົບຊັ້ນກ່ຽວກັບການແນະນຳສະຖາບັນສຶກສາພາຍໃນປະເທດ</center>
      </div>
      <div class="col-6 col-md-4 border border-secondary rounded card-3"><br>
        <center>
          <h5>ອາຈານທີ່ປຶກສາ</h5>ອາຈານ ສົມຈິດ ຂັນທະວົງ
        </center>
      </div>
      <div class="col-12 "><br>

        <!-- Team Start -->
        <div class="container-xxl py-5">
  <div class="container mx-auto">
    <div class="text-center wow fadeInUp">
      <h3 class="mb-5">ຮູບພາບສະມາຊິກກຸ່ມ</h3>
    </div>
    <div class="row g-6">
      <div class="col-lg-6 col-md-6 wow fadeInUp">
        <div class="rounded shadow overflow-hidden">
          <div class="position-relative">
            <img class="img-fluid" src="assets/image/02.png" alt="">
          </div>
          <div class="text-center p-4 mt-3">
            <h5 class="fw-bold mb-0">ທ້າວ ສຸລິພົງ ວິລິເດດວົງທອງ</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 wow fadeInUp">
        <div class="rounded shadow overflow-hidden">
          <div class="position-relative">
            <img class="img-fluid" src="assets/image/01.png" alt="">
          </div>
          <div class="text-center p-4 mt-3">
            <h5 class="fw-bold mb-0">ທ້າວ ມືໂລະ ກໍແພ</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


        <!-- Team End -->
                


       
      </div>

    </div>
  </div>

  <?php 
 include('includes/footer.php'); ?>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <!--เรียกjquery -->
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <!--เรียกpopper -->
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!--เรียกbootstrap.min.js -->
  <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
  <!--เรียกjquery.validate -->
</body>

</html>