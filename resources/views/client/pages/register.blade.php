<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form enctype="multipart/form-data" method="post" action="{{route('register')}}">
        {{ csrf_field() }}
  
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" name="username" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">username</label>
        </div>
        <div class="md-form mb-5">
          <input type="text" name="email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email"> email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" name="name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">name</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="file" name="image" >
          <label data-error="wrong" data-success="right" >image</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" name="phone" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">phone</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" name="address" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">address</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" name="password" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">password</label>
        </div>

        

     

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input type="submit" class="form-control register" value="Đăng Ký">
      </div>
    </form>
    </div>
  </div>
</div>
