<style>
  .dropdown-item {
    font-size: 16px;
  }

  .navbar-nav .dropdown-menu {
    position: static;
    float: none;
    width: 280px;
    margin-top: 24px;
  }

  .itemcount {
    position: absolute;
    top: 3px;
    left: 63px;
    width: 15px;
    height: 15px;
    border-radius: 60%;
    background-color: black;
    font-size: 10px;
    color: white;
    text-align: center;
  }
</style>
<style type="text/css">
  a,
  div,
  td,
  i,
  center,
  li,
  p {
    font-family: 'Noto Sans Lao', sans-serif;
  }
</style>
<?php require_once('php/connect.php');
$mem_id=$_SESSION['mem_id'];
$sql="SELECT * FROM `cart`,`school`  WHERE cart.school_id=school.school_id AND cart.mem_id = '$mem_id'";
$result=mysqli_query($conn,$sql);
$sqlcount="SELECT COUNT(*) AS carttotal FROM `cart` WHERE mem_id = '$mem_id'";
$ressultcount=mysqli_query($conn,$sqlcount);
$rowcount=mysqli_fetch_array($ressultcount);
$_SESSION['carttotal']=$rowcount['carttotal'];
?>
<!-- login ແລ້ວ -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
  <a class="navbar-brand " href="index.php"> LLP(Lao Leaning Point) </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <?php if(isset($_SESSION["mem_id"])) {?>

    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="index.php">ໜ້າຫຼັກ<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'list.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="list.php">ລາຍການທັງໝົດ</a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="about.php">ກ່ຽວກັບພວກເຮົາ</a>
      </li>
    </ul>

    <div class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <div class="dropdown show">
            <a class="nav-link dropdown-toggle active" href="#" role="button" id="dropdownMenuLink"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <?php echo $_SESSION["mem_fname"]." ".$_SESSION["mem_lname"]?>
            </a>
            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">

              <!-- admin -->
              <a class="dropdown-item " href="./assets/admin/index.php"><i class="far fa-address-card"></i>
                ແກ້ໄຂຂໍ້ມູນ</a>

              <a class="dropdown-item" href="changepassword.php" data-toggle="modal" data-target="#mychangepassword"><i
                  class="fas fa-key"></i> ປ່ຽນລະຫັດຜ່ານ</a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown active">


          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <td colspan="3">

              <h5><?php echo $cartforme?></h5>
            </td><br><br>
            <?php 
        $i=1;
        while($row=mysqli_fetch_array($result)){
          ?>

            <table width="270">
              <tr>

                <td colspan="3" style="font-size:13px;color:black">
                  <?php echo $i.". ".$row['school_name'];;?>

                </td>

              </tr>
              <tr>
                <td style="width:1%">
                  <img src="assets/image/store/<?php echo $row['school_image']?>" name="imgcart" style="width:100px;">
                </td>

                <td style="font-size:14px;width:70px;color:black">
                  <?php echo number_format($row['school_level'],2)." "."$baht";?>
                </td>
                <td align=center width="20px">
                  <a href="includes/delcart.php?cart_id=<?php echo $row['cart_id']?>" class="delcart"
                    style="font-size:23px"><i class="fas fa-times" style="color:red"></i></a>
                </td>
              </tr>

            </table>
            <?php  $i++?>
            <?php }?>
            <a href="cartview.php"><?php echo $cartmore;?></a>


        </li>
        <li class="nav-item active">
          <a class="nav-link " href="php/logout.php"><i class="fas fa-sign-out-alt"></i> ອອກຈາກລະບົບ <span
              class="sr-only">(current)</span></a>
        </li>
        
      </ul>
    </div>

    <!-- /login ແລ້ວ -->

    <?php }else{?>
    <!-- ບໍ່ໄດ້ login-->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="index.php">ໜ້າຫຼັກ<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'list.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="list.php">ລາຍການທັງໝົດ</a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="about.php">ກ່ຽວກັບພວກເຮົາ</a>
      </li>
    </ul>

    <div class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link " href="login.php" data-toggle="modal" data-target="#mySignin">ເຂົ້າສູ່ລະບົບ<span
              class="sr-only">(current)</span></a>

        </li>

        
      </ul>
    </div>
    <?php }?>
  </div>
</nav>
<?php  include('login.php');
include('php/changepassword.php');
 ?>
<!-- /ບໍ່ໄດ້ login-->