<style>
.modaltest1{
    font-size: 16px;
    color:black;
    margin-bottom: 0px;
}
</style>
<div class="modal fade" id="mychangepassword">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-center">ປ່ຽນລະຫັດຜ່ານ</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form class="form" method="post" action="php/changepassword_process.php" id="changepassword">
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <label for="oldpassword" class="modaltest1">ລະຫັດເກົ່າ</label>
                            </div>
                            
                            </div>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                </div>
                                <input type="password" class="form-control sm-1" id="oldpassword" name="oldpassword" placeholder="ລະຫັດເກົ່າ" required>
                            </div>
                            <label for="password" class="modaltest1">ລະຫັດໃໝ່</label>
                           <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                </div>
                                <input type="password" class="form-control" id="npassword" name="npassword" placeholder="ລະຫັດໃໝ່"required> 
                            </div>
                           <label for="repassword" class="modaltest1">ໃສ່ລະຫັດໃໝ່ອີກເທື່ອໜຶ່ງ</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                </div>
                                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="ໃສ່ລະຫັດໃໝ່ອີກເທື່ອໜຶ່ງ"required> 
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary btn-block mb-2">ປ່ຽນລະຫັດຜ່ານ</button>
                        </form>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ປິດ</button>
        </div>
        
      </div>
    </div>
  </div>