
   @extends('layouts.frame')
@section('style')
 <link rel="stylesheet" href="{{asset('css/LogIn.css')}}">
@endsection
@section('main')
  <body class="text-center">
    <div class="card">
    <form class="form-signin">
      <img class="mb-4 rounded" src="{{asset('image/GovImage.jpeg')}}" alt="" width="250" height="150">
      <h1 class="h3 mb-3 font-weight-normal text-danger">User Registration</h1>
       <div class="form-row">
    <div class="form-group col-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name"  class="Name"placeholder="Name">
    </div>
    <div class="form-group col-6">
      <label for="Surname">Surname</label>
      <input type="text" class="form-control" id="surname" placeholder="Surname" class="Surname">
    </div>
  </div> 
  <div class="form-row">
  <div class="form-group col-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" class="Address">
  </div>
  <div class="form-group col-6">
      <label for="inputState">Ward No</label>
      <select id="inputState" class="form-control" name="Ward">
        <option selected>1</option>
        <option>2</option>
        <option>3</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-12">
      <label for="Email">Email</label>
      <input type="email" class="form-control" id="Email"  name="Email"placeholder="Your Email">
    </div>
    <div class="form-group col-md-12">
      <label for="Password">Password</label>
      <input type="password" class="form-control" id="Password" placeholder="Your Password" name="Password">
    </div>
  </div>
  <button type="submit" class="btn btn-outline-danger mb-5">Register</button>
    </form>
      <p>Already Registered <a href="{{route('user.login')}}" class="form-group">Click Here</a> </p>
</div>
  </body>
@endsection
  
  








  
  