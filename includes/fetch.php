

<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password,"llp");

$output='';

$sql2="SELECT * FROM school WHERE school_name LIKE '%".$_POST['search']."%'";

$result = mysqli_query($conn,$sql2);
  if(mysqli_num_rows($result)>0){
    $output.="";
      ?>

<div id="result">

  <div class="row justify-content-center">
    <div class="card-deck ">

      <?php while ($row = mysqli_fetch_array($result)) { ?>
      <div class="col-lg-4 col-md-6 wow fadeInUp "><br>

        <div class="card card-5 " data-toggle="modal" data-target="#myModal<?php echo $row["school_id"]; ?>">

          <img class="card-img-top border-bottom border-primary"
            src="assets/image/store/<?php echo $row["school_image"] ?>" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title" style="color:black"><?php echo $row["school_name"]; ?></h4>
            <p class="card-text box"><?php echo $row["school_detail"]; ?></p>
            <h4 class="card-title" style="color:black"><?php echo $row['school_price']; ?></h4>

          </div>
          <!-- /////////////////////  -->
          <p class="card-text">
            <form action="includes/addcart.php" method="post">
              <input type="hidden" name="school_id" value="<?php echo $row['school_id']; ?>">
              <button type="button" class="btn btn-info btn-lg btn-block"
                style="padding-top: 15px;padding-bottom: 15px;"
                onclick="redirectToLink('<?php echo $row['school_code']; ?>')">View Details <i
                  class="fas fa-info fa-1x"></i></button>
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
                      <?php echo $row['school_detail'] ?></div>
                    <h2><?php echo $price;
                                echo " ";
                                echo $row['school_price'];
                                echo " "; ?></h2>
                    <br>
                  </div>
                </div>
                <br>
                <form action="includes/addcart.php" method="post">
                  <input type="hidden" name="school_id" value="<?php echo $row['school_id']; ?>">
                  <button type="button" class="btn btn-info btn-lg btn-block"
                    style="padding-top: 15px;padding-bottom: 15px;"
                    onclick="redirectToLink('<?php echo $row['school_code']; ?>')">View Details <i
                      class="fas fa-info fa-1x"></i></button>

                </form>
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
<!--- /result--->
<?php
    }else{
      echo "<br><br><br><center><h4>Data Not Found</h4></center>
      <br>
      ";
    } 
?>