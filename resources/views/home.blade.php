@extends('layouts.app')
  @section('style')
    {{-- <link href="{{ asset('css/UserHomepage.css') }}" rel="stylesheet"> --}}
  @endsection
    <div class="row py-3">
      <div class="col-lg-1 col-md-1 col-1 d-none d-md-inline">
        <img src="https://www.moha.gov.np/static/nepal-government.png" alt="Government of Nepal Logo" class="img-fluid"></a>
      </div>
      <div class="col-lg-1 col-md-1 text-center d-inline d-md-none ">
          <img src="https://www.moha.gov.np/static/nepal-government.png" alt="Government of Nepal Logo" class="img-fluid"></a>
      </div>
      <div class="col-lg-7 col-md-4 col-7 text-left d-none d-md-inline text-left mt-2">
        <h5 class="text-primary fs-6 ">Association With Government of Nepal</h5>
        <h1 class="fs-2 mt-2 text-danger">Connecting The Development</h1>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 d-inline d-md-none mobile-title text-center">
        <h5 class="text-primary fs-6 mt-2">Association With Government of Nepal</h5>
        <h1 class="fs-2 mt-2 text-danger">Connecting The Development</h1>
      </div>
      <div class="col-lg-3 col-md-4  col-sm-5 d-none d-md-block d-sm-block">
        <form method="GET" action="#" accept-charset="UTF-8">
          <div class="input-group">
            <input type="text" class="form-control firstInput ui-autocomplete-input mt-4" placeholder="search" value="" name="q" id="search-input" autocomplete="off">
            <button class="btn btn-primary btn-sm mt-4 ps-3" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
    <div class="alert alert-success alert-dismissible fade show p-3" role="alert" id="msg">
      Dear Sir/Mam,<strong> {{Auth::user()->name}}</strong> &nbsp;!!  Welcome To HomePage !!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @section('content')
{{-- < div class="common-structure"> 
      
  <aside class="side-a">
    <section class="common-section">
        <ul class="common-list">
     
        <li class="common-list-item">
          <a href="https://www.facebook.com/eladsc/" target="_blank" class="common-list-button">
            <span class="icon">
             
            </span>
            <span class="text Top-responder">Top Responder</span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
<span class="icon" aria-hidden="true">🏪</span>
            <span class="text">Department of Transportion</span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Department of Passport</span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Financial Comptroller General Office
            </span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Ministry of Education, Science and Technology</span>
          </a>
        </li>

       <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Department of Passport</span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Financial Comptroller General Office
            </span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Ministry of Education, Science and Technology</span>
          </a>
        </li>
      </ul>

    </section>  --}}
    <!-- <section class="common-section">
      <h2 class="section-title">Shortcuts</h2>
      <ul class="common-list">
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button">
         
            <span class="text">About Us</span>
          </a>
        </li>
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button">
        
            <span class="text">Contact Us</span>
          </a>
        </li>
              
      </ul>
     
    </section> -->
  {{-- </aside> --}}
    <section>
     @foreach($data as $item) 
      <center>
        <div class="card" style="max-width: 42rem;postion:relative;top:2em;">
          <div class="card-body">
            <div class="d-flex mb-3">
              <a href="">
                @if($item->user->p_image)
                  <img src="{{asset('profile_photo/' . $item->user->p_image)}}" class="border rounded-circle me-2" alt="Avatar" style="height: 50px; width:50px;"/>
                @else
                  <img src="{{asset('profile_photo/no_profile.jpeg')}}" class="border rounded-circle me-2" alt="Avatar" style="height: 50px; width:50px;"/>
                @endif
              </a>
            <div>
           <a href="{{route('user.profile.individual',$item->user_id)}}" style="text-decoration: none"> <p class="text-capitalize text-danger" style="position:relative;left:-40px"data-user_id="{{ $item->user_id }}">{{$item->name}}</p></a>
            <p class="text-muted d-block text-decoration-underline" style="margin-top: -10px">
              <small>{{$item->created_at}}</small>
            </p>
          </div>
        </div>
        <!-- Description -->
        <div>
          <p class="lead">
            {{$item->problem}}
          </p>
        </div>
        <!-- Media -->
        <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
          @if($item->image)
          <img src="{{asset('image/' . $item->image)}}" class="w-100" />
          @endif
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
          </a>
        </div>
        <!-- Media -->
        <!-- Interactions -->
        <div class="card-body">
          <!-- Reactions -->
          <div class="d-flex justify-content-between mb-3">
            <div>
              <a href="">
                <i class="fas fa-thumbs-up text-primary"></i>
                <i class="fas fa-heart text-danger"></i>
                <span>124</span>
              </a>
           </div>
          <div>
            <a href="" class="text-muted"> 8 comments </a>
          </div>
        </div>
        <!-- Reactions -->

        <!-- Buttons -->
        <div class="d-flex justify-content-between text-center border-top border-bottom mb-4">
          <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
            <i class="fas fa-thumbs-up me-2"></i>Like
          </button>
          <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
            <i class="bi bi-chat-dots"></i>Comment
          </button>
          <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
            <i class="fas fa-share me-2"></i>Share
          </button>
        </div>
      </center>
      <br>
    @endforeach
    </section>
  @endsection  

  @section('script')
    <script>
      $(document).ready(function() {
        setTimeout(function()
        {
        $('#msg').hide('fast');
        }, 2000);
      });
    </script>
  @endsection
  {{-- <aside class="side-b">
    <section class="common-section">
      <h2 class="section-title">Topics</h2>
      <ul class="common-list">
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button is-ads">
            <!-- <div class="image"></div> -->
            <div class="text">
              <h4 class="ads-title">◾Hospital</h4>
             
            </div>
          </a>
        </li>
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button is-ads">
            <!-- <div class="image"></div> -->
            <div class="text">
              <h4 class="ads-title">◾Drinking Water</h4>
             
            </div>
          </a>
        </li>      
      </ul>
     
      <ul class="common-list">
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button is-ads">
            <!-- <div class="image"></div> -->
            <div class="text">
              <h4 class="ads-title">◾Hospital</h4>
             
            </div>
          </a>
        </li>
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button is-ads">
            <!-- <div class="image"></div> -->
            <div class="text">
              <h4 class="ads-title">◾Drinking Water</h4>
             
            </div>
          </a>
        </li>      
      </ul>
     
    </section>
  </aside>
</div> --}}
