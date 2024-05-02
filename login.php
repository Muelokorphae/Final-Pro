<div class="modal fade" id="mySignin">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-center">ຜູ້ດູແລ</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form" method="post" action="php/check_login.php">
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" class="form-control" id="username" name="username" placeholder="ຊື່ຜູ້ໃຊ້"
              required>
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>
            <input type="password" class="form-control" id="password" name="password"
              placeholder="ລະຫັດຜ່ານ" required>
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-block mb-2">ເຂົ້າສູ່ລະບົບ</button>
          
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ປິດ</button>
      </div>

    </div>
  </div>
</div>
