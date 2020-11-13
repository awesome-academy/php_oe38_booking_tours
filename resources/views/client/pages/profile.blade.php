
  <link href="{{ mix('css/client.css' )}}" rel="stylesheet">
  <link href="{{ mix('fonts/font-awe.css' )}}" rel="stylesheet">
  <base href="{{ asset('') }}">
  {{ csrf_field() }}
@include('client.layouts.header')


{{ Form::model($user,['route' => ['user.update',$user],'method' => 'put','enctype'=>'multipart/form-data'])  }}
    
<div class="container rounded bg-white mt-5" >
    <div class="row" style="margin-top: 200px">
        <div class="col-md-4 border-right">
            <div class="form-group">
                {{ Form::label('Hình ảnh ' ,'Hình ảnh') }}
                <img class="rounded-circle mt-5"  src="{!! ("/images/$user->image") !!}" width="300">
                <input name="image" type="file" class="form-control" >
            </div>
            <div class="input-group">
  <div class="input-group-prepend">
   
  </div>

  

</div>
        </div>
        <div class="col-md-8" >
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6>Back to home</h6>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                </div>
                <div class="row mt-2">
                <div class="col-md-6"><input type="text" class="form-control" name="username" placeholder="first name" value="{{( $user->username)}}"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="name" value="{{( $user->name)}}" placeholder="Doe"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" name="email" placeholder="Email" value="{{( $user->email)}}"></div>
                    <div class="col-md-6"><input type="text" class="form-control"name="password" value="{{( $user->password)}}" placeholder="Phone number"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" name="address" placeholder="address" value="{{( $user->address)}}"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="phone" placeholder="address" value="{{( $user->phone)}}"></div>

                </div>
               
                {{Form::submit('Cập Nhập',['class'=>'font-weight-bold text-white btn btn-primary mt-3']) }}

            </div>
        </div>
    </div>

</div>
{{ Form::close() }}

<script type="text/javascript" src="{{ mix('js/client.js') }}"></script>


