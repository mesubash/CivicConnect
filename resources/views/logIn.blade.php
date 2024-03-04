@extends('layouts.frame')
@section('style')
 <link rel="stylesheet" href="{{asset('css/LogIn.css')}}">
@endsection
@section('main')
  <body class="text-center">
    <div class="card">
    <form class="form-signin">
      <img class="mb-2 rounded-circle" src="{{asset('image/GovImage.jpeg')}}" alt="" width="250" height="150">
      <h1 class="h3 mb-3 font-weight-normal">Please Log In</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022-2024</p>
    </form>
</div>
  </body>
@endsection
