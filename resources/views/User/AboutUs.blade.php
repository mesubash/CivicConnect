  @extends('layouts.app')
  @section('style')
     <link href="{{ asset('css/AboutUs.css') }}" rel="stylesheet">
    
   @endsection  
  
  @section('content')
  <div class="about-section bg-light">
  <h1 class="display-4 text-secondary p-3">Our Vision </h1>
  <p class="lead bg-primary text-light">Including people and government in development through parallel process</p>
  <p class="lead bg-primary text-light">Impowering the development</p>
  <p class="lead bg-primary text-light">Improving the vision of development in the eye of people</p>
  <p class="lead bg-primary text-light">Achieving Sustainablity development</p>
</div>

<h2 style="text-align:center" class="display-3 text-secondary">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="{{asset('image/pranav.jpeg')}}" alt="Pranav" style="width:100% height:auto" class="rounded">
      <div class="container">
        <h2>Pranav Bhandari</h2>
        <p class="title">Backhend Developer</p>
        <p>"The greatest glory in living lies not in never falling, but in rising every time we fall".</p>
        <p class="text-danger">pranavb952@gmail.com</p>
        <p> <a href="mailto:pranavb952@gmail.con"><button class="button bg-primary">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{asset('image/subashdami.jpeg')}}" alt="subashdhami" style="width:100% height:auto" class="rounded">
      <div class="container">
        <h2>Subash Dhami</h2>
        <p class="title">Frontend Developer</p>
        <p>"If you set your goals ridiculously high and it's a failure, you will fail above everyone else's success"</p>
        <p class="text-danger">subashdhami12@gmail.com</p>
       <p> <a href="mailto:subashdhami12@gmail.com"><button class="button bg-primary">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{asset('image/subashray.jpeg')}}" alt="subashray" style="width:100% heigh:auto" class="rounded">
      <div class="container">
        <h2>Subash Ray</h2>
        <p class="title">Frontend Developer</p>
        <p>"The future belongs to those who believe in the beauty of their dreams"</p>
        <p class="text-danger">subashray15@gmail.co</p>
        <p> <a href="mailto:subashray15@gmail.com"><button class="button bg-primary">Contact</button></a></p>
      </div>
    </div>
  </div>
</div>
@endsection