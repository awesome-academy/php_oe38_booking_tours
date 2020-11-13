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
          <label data-error="wrong" data-success="right" for="orangeForm-name">Username</label>
          <span class="text-danger">{{$errors->first('username') }}</span>
        </div>
        <div class="md-form mb-5">
          <input type="text" name="email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
          <span class="text-danger">{{$errors->first('email') }}</span>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" name="name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Name</label>
          <span class="text-danger">{{$errors->first('name') }}</span>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="file" name="image" >
          <label data-error="wrong" data-success="right" ></label>
          <span class="text-danger">{{$errors->first('image') }}</span>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" name="phone" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Phone</label>
          <span class="text-danger">{{$errors->first('phone') }}</span>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="text" name="address" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Address</label>
          <span class="text-danger">{{$errors->first('address') }}</span>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" name="password" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
          <span class="text-danger">{{$errors->first('password') }}</span>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input type="submit" class="form-control register" value="Register">
      </div>
    </form>
    </div>
  </div>
</div>
