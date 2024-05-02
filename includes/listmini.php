<style>
  /* Tags sale red*/
  .shopping-mall-tag {
    border-top-right-radius: .1875rem;
    border-bottom-right-radius: .1875rem;
    padding: 2px 6px;
    position: absolute;
    left: -4px;
    top: 6px;
    background-color: rgb(208, 1, 27);
    color: #fff;
  }

  .shopping-mall-tag::before {
    content: '';
    background-color: rgb(208, 1, 27);
    position: absolute;
    left: 0;
    bottom: -.1875rem;
    border-bottom: .1875rem solid currentColor;
    border-right: .1875rem solid transparent;
  }

  /* ----------------------- */
  /* Tags sale greenew*/
  .shopping-mall-tagn {
    border-top-right-radius: .1875rem;
    border-bottom-right-radius: .1875rem;
    padding: 2px 6px;
    position: absolute;
    left: -4px;
    top: 35px;
    background-color: rgb(44, 169, 3);
    color: #fff;
  }

  .shopping-mall-tagn::before {
    content: '';
    background-color: rgb(44, 169, 3);
    position: absolute;
    left: 0;
    bottom: -.1875rem;
    border-bottom: .1875rem solid currentColor;
    border-right: .1875rem solid transparent;
  }

  /* ----------------------- */
  .fonts {
    font-size: 23px;
  }

  .card {
    width: 300px;
    height: 500px;
  }

  .box {
    line-height: 14pt;
    height: 56pt;
    overflow: hidden;
  }

  .modal-xl {
    max-width: 850px !important;
  }

  .imgm {
    max-width: 100%;
    width: 300px;
  }

  .imgd {
    max-width: 100%;
    width: 95px;
  }
  body {
    background: #fff;
    color: #333;
    margin: 0 auto;
  }
  
  .right {
    float: right
  }
  
</style>

<?php 
include_once('./php/connect.php');
$sql="SELECT * FROM school ORDER BY school_id DESC LIMIT 3";
$res=mysqli_query($conn,$sql);
?>
<!-- Show Shop -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<div class="container-xxl py-5">
<div class="container">

<br>
  <h3>
    <center>ລາຍການແນະນຳ</center>
  </h3><br>
<div id="result">

  <div class="row justify-content-center">

    <div class="card-deck">

      <?php while ($row = mysqli_fetch_array($res)) { ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp">
          <!-- <div class="col-sm-4" style="padding: 20px;padding-left: 90px;"> -->
          <div class="card card-5 " data-toggle="modal" data-target="#myModal<?php echo $row["school_id"]; ?>">

          <img class="card-img-top border-bottom border-primary"
            src="assets/image/store/<?php echo $row["school_image"] ?>" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title" style="color:black" ><center><?php echo $row["school_name"]; ?></center></h4>
            <p class="card-text box"><?php echo $row["school_add"]; ?></p>
            <h4 class="card-title" style="color:black"><center><?php echo $row['school_level']; ?></center></h4>

          </div>
          <!-- /////////////////////  -->
          <p class="card-text">
            <form action="includes/addcart.php" method="post">
              <input type="hidden" name="school_id" value="<?php echo $row['school_id']; ?>">
              <button type="button" class="btn btn-info btn-lg btn-block"
                style="padding-top: 15px;padding-bottom: 15px;"
                onclick="redirectToLink('<?php echo $row['school_link']; ?>')">ຮຽນຮູ້ເພີ່ມເຕີມ</button>
            </form>
            <!-- /////////////////////  -->
        </div>
        <br><br><br>
        <!-- The Modal -->
        <div class="modal fade " id="myModal<?php echo $row["school_id"]; ?>">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">
                  <h4 class="card-title"><?php echo $row["school_name"]; ?></h4>
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
              <div class="row">
                  <div class="col-sm-5">
                    <!-- Gallery -->
                    <div id="js-gallery" class="gallery">
                      <!--Gallery Hero-->
                      <div class="gallery__hero">
                        <img class="imgm" src="assets/image/store/<?php echo $row["school_image"] ?>">
                      </div>
                    </div>
                    <!--.gallery-->
                    <!-- Gallery -->
                  </div>
                  <div class="col-sm-7">
                    <h3><?php echo $row['school_name'] ?></h3>
                    <br>
                    <div>
                      <?php echo $row['school_add'] ?></div><br>
                    <h2>ປະເພດ<?php 
                          echo " ";
                          echo $row['school_level'];
                          echo " "; ?></h2>
                    <br>
                  </div>
                </div>
                <br>

                <form action="includes/addcart.php" method="post">
                  <input type="hidden" name="school_id" value="<?php echo $row['school_id']; ?>">
                  <button type="button" class="btn btn-info btn-lg btn-block"
                    style="padding-top: 15px;padding-bottom: 15px;"
                    onclick="redirectToLink('<?php echo $row['school_link']; ?>')">ຮຽນຮູ້ເພີ່ມເຕີມ</button>
                </form>

                <script>
                  function redirectToLink(productlink) {
                    // ดึงข้อมูลจาก product_link และสร้าง URL ที่ต้องการ
                    var linkUrl = productlink;

                    // เปลี่ยนทางไปที่ลิงค์
                    window.location.href = linkUrl;
                  }
                </script>
              </div>
            </div>
            <!-- Modal footer -->
          </div>
        </div>
      </div>
      <?php } ?>
      <!--- /col-md4 --->
    </div>
    <!-- /model -->
  </div>
  <!--- /card-deck--->
</div>

<!--- /row--->
</div>
</div>

<!--- /result--->
<!--- /container--->