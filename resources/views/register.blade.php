@extends('File.file')
  
      @section('content')
  
   <!-- Pills navs -->
   <div class="container">
    
    
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
      aria-controls="pills-login" aria-selected="true">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="{{url('civiconnect/register')}}" role="tab"
      aria-controls="pills-register" aria-selected="false">Register</a>
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form method="POST" action="{{url('civiconnect/check')}}">
    @csrf
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="loginName">Email:</label>
        <input type="text" id="loginName" class="form-control" name="Email"/>
        @if($errors->has('Email'))
        <div class="alert alert-danger" id="div1">{{$errors->first('Email')}}</div>
        @endif
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
         <label class="form-label" for="loginPassword">Password</label>
        <input type="password" id="loginPassword" class="form-control" name="Password" />
        @if($errors->has('Password'))
        <div class="alert alert-danger" id="div2">{{$errors->first('Password')}}</div>
        @endif
        
    
      </div>

      <button type="submit" class="btn btn-success btn-block mb-4">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="{{url('civiconnect/register')}}">Register</a></p>
      </div>
    </form>
  </div>
  @if(session('Success'))
  <div class="alert alert-success" id="div1">{{session('Success')}}</div>
  @endif
  @if($errors->has('error'))
  <div class="alert alert-danger" id="div3">{{$errors->first('error')}}</div>
  @endif
  
  <script>
    jQuery(document).ready(function()
    {
     setTimeout(() => {
        jQuery('#div1').hide('fast');
        jQuery('#div2').hide('fast');
        jQuery('#div3').hide('fast');
        

     }, 1000);
    });

   </script>

  @endsection
  