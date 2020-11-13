<link href="{{ mix('css/client.css' )}}" rel="stylesheet">
 <link href="{{ mix('fonts/font-awe.css' )}}" rel="stylesheet">
 <base href="{{ asset('') }}">
@include('client.layouts.header')
@include('client.layouts.dark')
<div class="container" style="margin: 10% 0 5% 18% ">
<!-- Card -->
<div class="card card-cascade wider reverse">
    <!-- Card image -->
    <div class="view view-cascade overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!-- Card content -->
    <div class="card-body card-body-cascade text-center">
      <!-- Title -->
      <h4 class="card-title"><strong>My adventure</strong></h4>
      <!-- Subtitle -->
      <h6 class="font-weight-bold indigo-text py-2">Photography</h6>
      <!-- Text -->
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
        voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
        laborum ut beatae ullam suscipit veniam.
      </p>
     <button class="btn btn-success">Book Now</button>
    </div>
  </div>
  <!-- Card -->
</div>

@include('client.layouts.footer')
<script type="text/javascript" src="{{ mix('js/client.js') }}"></script>