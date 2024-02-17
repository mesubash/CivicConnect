@extends('File.file')
  
      @section('content')
  
   <!-- Pills navs -->
  
   <div class="container">
    
    
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="javascript:void(0)" role="tab"
      aria-controls="pills-login" aria-selected="true">Register</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="{{url('civiconnect/login')}}" role="tab"
      aria-controls="pills-register" aria-selected="false">Login</a>
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
<form method="POST" action="{{url('civiconnect/post')}}" enctype="multipart/form-data">
    @csrf
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="loginName">Email:</label>
        <input type="Email" id="loginName" class="form-control" placeholder="Enter Your Email" name="Email" value="{{old('Email')}}"/>
        @if($errors->has('Email'))
        <div class="alert alert-danger" id='div1'>
            {{$errors->first('Email')}}
        </div>
        @endif
      </div>
      <div class="form-outline mb-4">
        <label class="form-label" for="loginName">Password:</label>
        <input type="password" id="loginName" class="form-control" placeholder="Enter Your Password" name="Password"/>
        @if($errors->has('Password'))
        <div class="alert alert-danger" id='div2'>
            {{$errors->first('Password')}}
        </div>
        @endif
      </div>
      <div class="form-outline mb-4">
        <label class="form-label" for="loginName">Name:</label>
        <input type="text" id="loginName" class="form-control" placeholder="Enter Your  Birth Name name" name='Name'  value="{{old('Name')}}"/>
      @if($errors->has('Name'))
        <div class="alert alert-danger" id="div3">
            {{$errors->first('Name')}}
        </div>
        @endif
    </div>
      <div class="form-outline mb-4">
        <label class="form-label" for="loginName">ProfilePicture:</label>
        <input type="file" id="loginName" class="form-control" placeholder="EnterYouProfilePicture" name="PhotoName"/>
    
    @if($errors->has('PhotoName'))
        <div class="alert alert-danger" id="div4">
            

            {{$errors->first('PhotoName')}}
        </div>
        @endif
    </div>

      <button type="submit" class="btn btn-success btn-block mb-4">Register</button>
 </form>
      <!-- Register buttons -->
      <div class="text-center">
        <p>Already a member? <a href="{{url('civiconnect/login')}}">Login</a></p>
      </div>
    
   <script>
    jQuery(document).ready(function()
    {
     setTimeout(() => {
        jQuery('#div1').hide('fast');
        jQuery('#div2').hide('fast');
        jQuery('#div3').hide('fast');
        jQuery('#div4').hide('fast');
        

     }, 1000);
    });

   </script>

  
  @endsection