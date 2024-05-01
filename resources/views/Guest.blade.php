 @extends('layouts.app')
      @section('style')
         {{-- <link href="{{ asset('css/UserHomepage.css') }}" rel="stylesheet"> --}}
       @endsection
       <div class="row py-3">
            <div class="col-lg-1 col-md-1 col-1 d-none d-md-inline">
                <img src="https://www.moha.gov.np/static/nepal-government.png"  
                alt="Government of Nepal Logo" class="img-fluid"></a>
            </div>
            <div class="col-lg-1 col-md-1 text-center d-inline d-md-none ">
                <img src="https://www.moha.gov.np/static/nepal-government.png" alt="Government of Nepal Logo" class="img-fluid"></a>
            </div>

            <div class="col-lg-7 col-md-4 col-7 text-left d-none d-md-inline text-left mt-2">
                <h5 class="text-primary fs-6 ">Association With Government of Nepal</h5>
            <h1 class="fs-2 mt-2 text-danger">Connecting The Development</h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 d-inline d-md-none mobile-title text-center">
                <h5 class="text-primary fs-6 mt-2">Assocation With Government of Nepal</h5>
                <h1 class="fs-2 mt-2 text-danger">Connecting The Development</h1>
            </div>
       </div>
           @guest
            <div class="alert alert-warning alert-dismissible fade show p-3" role="alert" id="msg">
              <strong>You are interacting as Guest</strong>. Sign or register to acess  more features !!!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
             </div>
             @endguest
          @section('content')

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
            <p class="text-capitalize text-danger" style="position:relative;left:-40px">{{$item->name}}</p>
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
        @if(Auth::user())
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
        @endif
      </center>
      <br>
    @endforeach
    </section>
  @endsection
